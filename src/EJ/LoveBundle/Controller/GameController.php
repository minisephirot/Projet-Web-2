<?php

namespace EJ\LoveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use EJ\LoveBundle\Entity\Card;
use EJ\LoveBundle\Entity\Game;
use EJ\LoveBundle\Entity\Party;

class GameController extends Controller
{
    public function toindexAction()
    {
        return $this->redirectToRoute('LoveBundle_home');
    }

    public function indexAction()
    {
        return $this->render('EJLoveBundle:Default:index.html.twig');
    }

    public function initAction()
    {
        $this->createCards();
        return $this->redirectToRoute('LoveBundle_home');
    }

    public function createAction()
    {
        $game = $this->createGame();
        return $this->redirectToRoute('LoveBundle_view',array( 'gameid' => $game->getId() ));
    }

    public function viewAction($gameid)
    {
        // On récupère l'entité correspondante à l'id $gameid
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Game');
         $game = $repository->find($gameid);

        // $gameid est donc une instance de notre jeu
        // ou null si l'id $gameid  n'existe pas, d'où ce if :
        if (null === $game || $gameid < 1) {
            throw new NotFoundHttpException('La partie assignée a l\'ID "' . $gameid . '" est inexistant.');
        }

        // Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('EJLoveBundle:Default:view.html.twig', array(
            'game' => $game
        ));
    }

    public function playcardAction($gameid,$playerid,$cardid)
    {
        $em = $this->getDoctrine()->getManager();
        // On récupère l'entité correspondante à l'id $gameid
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Game');
        $game = $repository->find($gameid);

        //control vérifie si l'operation est authorisée (évite d'ajouter au board des cartes qui ne sont pas en main)
        $control = $game->removeCardInHand($playerid,intval($cardid));
        if ($control){
            $game->addPlayedCard($playerid,intval($cardid));
        }

        $em->persist($game);
        $em->flush();
        return $this->redirectToRoute('LoveBundle_view',array( 'gameid' => $game->getId() ));
    }

    public function discardAction($gameid,$playerid,$cardid)
    {
        $em = $this->getDoctrine()->getManager();
        // On récupère l'entité correspondante à l'id $gameid
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Game');
        $game = $repository->find($gameid);

        $control = $game->removeCardInHand($playerid,intval($cardid));
        if ($control){
            $game->addDiscardedCard(intval($cardid));
        }

        $em->persist($game);
        $em->flush();
        return $this->redirectToRoute('LoveBundle_view',array( 'gameid' => $game->getId() ));
    }

    public function drawAction($gameid,$playerid)
    {
        $em = $this->getDoctrine()->getManager();
        // On récupère l'entité correspondante à l'id $gameid
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Game');
        $game = $repository->find($gameid);

        $game->addCardInHand($playerid,$game->drawCard());

        $em->persist($game);
        $em->flush();
        return $this->redirectToRoute('LoveBundle_view',array( 'gameid' => $game->getId() ));
    }

    public function createGame(){
        $em = $this->getDoctrine()->getManager();

        $game = new Game();
        $cardrepository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Card');

        //remplis le jeu des 16 cartes de loveletter
        $cardlist = $cardrepository->findAll();
        foreach ($cardlist as $card){
         $game->addCard($card);
        }
        //ajoute les joueurs au jeu
        $game->addPlayers(array('player1','player2'));
        //On suit les regles du jeu : mettre les 16 Cartes dans la pioche
        $game->createDeck();
        //On retire la premiere carte du deck du jeu
        $secretCard = $game->drawCard();
        $game->setCardHidden($secretCard);
        $game->addDiscardedCard($secretCard);
        //On retire les 3 premières cartes du jeu car on joue a 2
        $game->addDiscardedCard($game->drawCard());
        $game->addDiscardedCard($game->drawCard());
        $game->addDiscardedCard($game->drawCard());
        //
        $game->addCardInHand('player1',$game->drawCard());
        $game->addCardInHand('player2',$game->drawCard());

        $em->persist($game);
        $em->flush();

        return $game;
    }

    public function createCards(){ //cette methode crée les cartes statiques dans la base de donnée, elle ne doit être appellée qu'une fois pas base pour la populer.
        $em = $this->getDoctrine()->getManager();

        $c1 = new Card();
        $c1->setValue(0,"Guard","Name a non-Guard card and choose another player. If that player has that card he is out of the round","http://localhost/WebLoveLetter/web/images/guard.png");

        $c2 = new Card();
        $c2->setValue(1,"Guard","Name a non-Guard card and choose another player. If that player has that card he is out of the round","http://localhost/WebLoveLetter/web/images/guard.png");

        $c3 = new Card();
        $c3->setValue(2,"Guard","Name a non-Guard card and choose another player. If that player has that card he is out of the round","http://localhost/WebLoveLetter/web/images/guard.png");

        $c4 = new Card();
        $c4->setValue(3,"Guard","Name a non-Guard card and choose another player. If that player has that card he is out of the round","http://localhost/WebLoveLetter/web/images/guard.png");

        $c5 = new Card();
        $c5->setValue(4,"Guard","Name a non-Guard card and choose another player. If that player has that card he is out of the round","http://localhost/WebLoveLetter/web/images/guard.png");

        $c6 = new Card();
        $c6->setValue(5,"Priest","Look at another player's hand.","http://localhost/WebLoveLetter/web/images/priest.png");

        $c7 = new Card();
        $c7->setValue(6,"Priest","Look at another player's hand.","http://localhost/WebLoveLetter/web/images/priest.png");

        $c8 = new Card();
        $c8->setValue(7,"Baron","Compare your hand with another player's, the one with the lowest value is out of the round.","http://localhost/WebLoveLetter/web/images/baron.png");

        $c9 = new Card();
        $c9->setValue(8,"Baron","Compare your hand with another player's, the one with the lowest value is out of the round.","http://localhost/WebLoveLetter/web/images/baron.png");

        $c10 = new Card();
        $c10->setValue(9,"Handmaid","Until your next turn ignore all others player's card effect.","http://localhost/WebLoveLetter/web/images/handmaid.png");

        $c11 = new Card();
        $c11->setValue(10,"Handmaid","Until your next turn ignore all others player's card effect","http://localhost/WebLoveLetter/web/images/handmaid.png");

        $c12 = new Card();
        $c12->setValue(11,"Prince","Choose any player and discard his hand and draw a new card.","http://localhost/WebLoveLetter/web/images/prince.png");

        $c13 = new Card();
        $c13->setValue(12,"Prince","Choose any player and discard his hand and draw a new card.","http://localhost/WebLoveLetter/web/images/prince.png");

        $c14 = new Card();
        $c14->setValue(13,"King","Trade hands with the player of your choice.","http://localhost/WebLoveLetter/web/images/king.png");

        $c15 = new Card();
        $c15->setValue(14,"Countess","If you have this card and the King or the Prince in hand, you must discard this card","http://localhost/WebLoveLetter/web/images/countess.png");

        $c16 = new Card();
        $c16->setValue(15,"Princess","If you discard this gard, you are out of the round.","http://localhost/WebLoveLetter/web/images/princess.png");

        $c17 = new Card();
        $c17->setValue(16,"?","???","http://localhost/WebLoveLetter/web/images/verso.png");

        $em->persist($c1);
        $em->persist($c2);
        $em->persist($c3);
        $em->persist($c4);
        $em->persist($c5);
        $em->persist($c6);
        $em->persist($c7);
        $em->persist($c8);
        $em->persist($c9);
        $em->persist($c10);
        $em->persist($c11);
        $em->persist($c12);
        $em->persist($c13);
        $em->persist($c14);
        $em->persist($c15);
        $em->persist($c16);
        $em->persist($c17);
        $em->flush();
    }
    
    
     public function listAction(){
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Party');
         
        $partyList = $repository->findall();
         
        return $this->render('EJLoveBundle:Default:listParty.html.twig', array( 'list' => $partyList));
    }
    
    
    public function createPartyAction(){
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $party = new Party();
        $party->setHost($user);
        $party->addPlayer($user);
        $em->persist($party);
        $em->flush();
        return $this->redirectToRoute('LoveBundle_viewParty',array( 'partyid'=> $party->getId() ));
        //return $this->render('EJLoveBundle:Default:lobbyParty.html.twig', array( 'party' => $party));;
    }
    
    public function viewPartyAction($partyid){
        // On récupère l'entité correspondante à l'id $gameid
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Party');
         $party = $repository->find($partyid);

        // $gameid est donc une instance de notre jeu
        // ou null si l'id $gameid  n'existe pas, d'où ce if :
        if (null === $partyid || $partyid < 1) {
            throw new NotFoundHttpException('La partie assignée a l\'ID "' . $partyid . '" est inexistant.');
        }

        // Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('EJLoveBundle:Default:lobbyParty.html.twig', array(
            'party' => $party
        ));
        
    }
     
    public function joinPartyAction($partyid){
        $em = $this->getDoctrine()->getManager();
        // On récupère l'entité correspondante à l'id $gameid
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Party');
        $party = $repository->find($partyid);
        $user = $this->getUser();
        $party->addPlayer($user);
        $em->flush();
        return $this->redirectToRoute('LoveBundle_viewParty',array( 'partyid'=> $party->getId() ));
    }
             
}

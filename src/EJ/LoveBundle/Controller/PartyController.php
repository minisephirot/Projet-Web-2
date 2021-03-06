<?php

namespace EJ\LoveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use EJ\LoveBundle\Entity\Party;

class PartyController extends Controller
{
    public function adminAction(){
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Party');
        $partyList = $repository->findall();
        $repository2 = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Game');
        $gameList = $repository2->findall();

        return $this->render('EJLoveBundle:Default:admin.html.twig', array( 'partylist' => $partyList, 'gamelist' => $gameList));
    }

     public function listAction(){
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

        // $partyid est donc une instance de notre party
        // ou null si l'id $partyid  n'existe pas, d'où ce if :
        if (null === $party || $partyid < 1) {
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
        var_dump($party);
        if (null === $party || $partyid < 1) {
            throw new NotFoundHttpException('La partie assignée a l\'ID "' . $partyid . '" est inexistant.');
        }
        
        //redirige directement l'user si la partie a déjà commencé :
        if ($party->getIsStarted() && !$party->getIsOver()) {
            $this->addFlash('information','La partie à déjà commencé.');
            return $this->redirectToRoute('LoveBundle_view',array( 'gameid' => $party->getId() ));
        }

        $user = $this->getUser();
        if (in_array($user->getUsername(),$party->getPartyPlayersName()) == false){
            $party->addPlayer($user);
        }

        $em->flush();
        return $this->redirectToRoute('LoveBundle_viewParty',array( 'partyid'=> $party->getId() ));
    }

    public function leavePartyAction($partyid){
        $em = $this->getDoctrine()->getManager();
        // On récupère l'entité correspondante à l'id $gameid
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Party');
        $party = $repository->find($partyid);

        $user = $this->getUser();
        if (in_array($user->getUsername(),$party->getPartyPlayersName()) == true){
            $party->removePlayer($user->getUsername());
        }
        if ($party->getNbPlayers() >= 1){ // si il reste au moins un joueur dans la partie 
            $nextplayer = $party->getPartyPlayers();
            $party->setHost($nextplayer[0]);
        }else{
            $em->remove($party);
        }

        $em->flush();
        return $this->redirectToRoute('LoveBundle_ListParty');
    }

    public function getNbJoueursAction($partyid){
        // On récupère l'entité correspondante à l'id $gameid
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('EJLoveBundle:Party');
        $party = $repository->find($partyid);
        //on recup qui joue et on le renvoie en tant que json
        $nb = $party->getNbPlayers();

        return $this->json(array($nb,$party->getIsStarted(),$party->getIsOver()));
    }
             
}

<?php

/* EJLoveBundle:Default:listParty.html.twig */
class __TwigTemplate_5b6b94929f5e4306c5c842a7b4d36c2e95c74169e0f2abc501a4638e99c56518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EJLoveBundle:Default:layout.html.twig", "EJLoveBundle:Default:listParty.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'll_body' => array($this, 'block_ll_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EJLoveBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a38c9dd2b9e1800221f9ef9e71f1a44cc902f512eefebee6a070aef1a9c334ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a38c9dd2b9e1800221f9ef9e71f1a44cc902f512eefebee6a070aef1a9c334ea->enter($__internal_a38c9dd2b9e1800221f9ef9e71f1a44cc902f512eefebee6a070aef1a9c334ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:listParty.html.twig"));

        $__internal_9e86413c44a821e8200031b5408c445fdc7ce4de7412a765101e4a4e5c155a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e86413c44a821e8200031b5408c445fdc7ce4de7412a765101e4a4e5c155a40->enter($__internal_9e86413c44a821e8200031b5408c445fdc7ce4de7412a765101e4a4e5c155a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EJLoveBundle:Default:listParty.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a38c9dd2b9e1800221f9ef9e71f1a44cc902f512eefebee6a070aef1a9c334ea->leave($__internal_a38c9dd2b9e1800221f9ef9e71f1a44cc902f512eefebee6a070aef1a9c334ea_prof);

        
        $__internal_9e86413c44a821e8200031b5408c445fdc7ce4de7412a765101e4a4e5c155a40->leave($__internal_9e86413c44a821e8200031b5408c445fdc7ce4de7412a765101e4a4e5c155a40_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_555576160ae84870ae4d143ab91736476cfe1ec09ddccf75ed5d0da0a1cadc48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_555576160ae84870ae4d143ab91736476cfe1ec09ddccf75ed5d0da0a1cadc48->enter($__internal_555576160ae84870ae4d143ab91736476cfe1ec09ddccf75ed5d0da0a1cadc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f0392e286bb73133dd80045b3883a7ecb8edbe3c9ccf2100052b48f810a1cf52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0392e286bb73133dd80045b3883a7ecb8edbe3c9ccf2100052b48f810a1cf52->enter($__internal_f0392e286bb73133dd80045b3883a7ecb8edbe3c9ccf2100052b48f810a1cf52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Partie en cours - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f0392e286bb73133dd80045b3883a7ecb8edbe3c9ccf2100052b48f810a1cf52->leave($__internal_f0392e286bb73133dd80045b3883a7ecb8edbe3c9ccf2100052b48f810a1cf52_prof);

        
        $__internal_555576160ae84870ae4d143ab91736476cfe1ec09ddccf75ed5d0da0a1cadc48->leave($__internal_555576160ae84870ae4d143ab91736476cfe1ec09ddccf75ed5d0da0a1cadc48_prof);

    }

    // line 7
    public function block_ll_body($context, array $blocks = array())
    {
        $__internal_f5241139ff9033dbc64449ac40b918fe23a9a1a5f4c62037c162bc9a3191c7fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5241139ff9033dbc64449ac40b918fe23a9a1a5f4c62037c162bc9a3191c7fa->enter($__internal_f5241139ff9033dbc64449ac40b918fe23a9a1a5f4c62037c162bc9a3191c7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        $__internal_bf1b008b1edb6cf0622132efe3de3a5b15a3fc2585c562a415db11c775032686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1b008b1edb6cf0622132efe3de3a5b15a3fc2585c562a415db11c775032686->enter($__internal_bf1b008b1edb6cf0622132efe3de3a5b15a3fc2585c562a415db11c775032686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ll_body"));

        // line 8
        echo "    <link rel=\"stylesheet\"
          type=\"text/css\"
          href=\"http://localhost/WebLoveLetter/web/pulse.css\"
    />
    <div class=\"container\">
        <h1>Party list :</h1>
        
        
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new Twig_Error_Runtime('Variable "list" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["party"]) {
            // line 17
            echo "        <li> <a href=\"\">Partie numéro ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["party"], "id", array()), "html", null, true);
            echo " de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["party"], "host", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['party'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        
        
         <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LoveBundle_createParty");
        echo "\">
                    Créer une partie
            </a>
        
        
        
    </div>
      
      
";
        
        $__internal_bf1b008b1edb6cf0622132efe3de3a5b15a3fc2585c562a415db11c775032686->leave($__internal_bf1b008b1edb6cf0622132efe3de3a5b15a3fc2585c562a415db11c775032686_prof);

        
        $__internal_f5241139ff9033dbc64449ac40b918fe23a9a1a5f4c62037c162bc9a3191c7fa->leave($__internal_f5241139ff9033dbc64449ac40b918fe23a9a1a5f4c62037c162bc9a3191c7fa_prof);

    }

    public function getTemplateName()
    {
        return "EJLoveBundle:Default:listParty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 21,  97 => 19,  86 => 17,  82 => 16,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EJLoveBundle:Default:layout.html.twig\" %}

{% block title %}
    Partie en cours - {{ parent() }}
{% endblock %}

{% block ll_body %}
    <link rel=\"stylesheet\"
          type=\"text/css\"
          href=\"http://localhost/WebLoveLetter/web/pulse.css\"
    />
    <div class=\"container\">
        <h1>Party list :</h1>
        
        
        {% for party in list %}
        <li> <a href=\"\">Partie numéro {{ party.id }} de {{ party.host }}</a></li>
        {% endfor %}
        
        
         <a class=\"btn btn-primary btn-lg\" href=\"{{ path('LoveBundle_createParty') }}\">
                    Créer une partie
            </a>
        
        
        
    </div>
      
      
{% endblock %}", "EJLoveBundle:Default:listParty.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\EJ\\LoveBundle/Resources/views/Default/listParty.html.twig");
    }
}

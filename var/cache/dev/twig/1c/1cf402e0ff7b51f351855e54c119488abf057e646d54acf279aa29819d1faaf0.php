<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_197cceb2c2a75ad47743ad3d78b5defacc52540a968df231e475dcdda4449fee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_911899c1175dc0a8905271b2fe87ae7d7ff6af99bb63aa0e8ade5011527bf1ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911899c1175dc0a8905271b2fe87ae7d7ff6af99bb63aa0e8ade5011527bf1ab->enter($__internal_911899c1175dc0a8905271b2fe87ae7d7ff6af99bb63aa0e8ade5011527bf1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_3a4f9293d57accac82cc980e7ac88a2807139628fec5e058b5255f9fc493fe06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4f9293d57accac82cc980e7ac88a2807139628fec5e058b5255f9fc493fe06->enter($__internal_3a4f9293d57accac82cc980e7ac88a2807139628fec5e058b5255f9fc493fe06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_911899c1175dc0a8905271b2fe87ae7d7ff6af99bb63aa0e8ade5011527bf1ab->leave($__internal_911899c1175dc0a8905271b2fe87ae7d7ff6af99bb63aa0e8ade5011527bf1ab_prof);

        
        $__internal_3a4f9293d57accac82cc980e7ac88a2807139628fec5e058b5255f9fc493fe06->leave($__internal_3a4f9293d57accac82cc980e7ac88a2807139628fec5e058b5255f9fc493fe06_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list_content.html.twig");
    }
}

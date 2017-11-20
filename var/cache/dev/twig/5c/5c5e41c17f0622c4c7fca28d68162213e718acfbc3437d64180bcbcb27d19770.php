<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_3edc48360aed665cde3e869e6073c322abba9cedb4538d5c73a7265d0bce37d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_808aa7ac386710b9b80a14c28239334e31b94f56b3464944874d8178791e7595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808aa7ac386710b9b80a14c28239334e31b94f56b3464944874d8178791e7595->enter($__internal_808aa7ac386710b9b80a14c28239334e31b94f56b3464944874d8178791e7595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_fa5343c96f430bb69c7067d0ddb1e79aacf19424cc091b616cbe22f23435a451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5343c96f430bb69c7067d0ddb1e79aacf19424cc091b616cbe22f23435a451->enter($__internal_fa5343c96f430bb69c7067d0ddb1e79aacf19424cc091b616cbe22f23435a451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_808aa7ac386710b9b80a14c28239334e31b94f56b3464944874d8178791e7595->leave($__internal_808aa7ac386710b9b80a14c28239334e31b94f56b3464944874d8178791e7595_prof);

        
        $__internal_fa5343c96f430bb69c7067d0ddb1e79aacf19424cc091b616cbe22f23435a451->leave($__internal_fa5343c96f430bb69c7067d0ddb1e79aacf19424cc091b616cbe22f23435a451_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_143d66b8f569c468197698abaed0b619597e9e243a69ca3325f8103cd07ae99c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_143d66b8f569c468197698abaed0b619597e9e243a69ca3325f8103cd07ae99c->enter($__internal_143d66b8f569c468197698abaed0b619597e9e243a69ca3325f8103cd07ae99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ca400603d14a4fa55683d64bc517000ab4750739cbcbd9843311ac1107aa302d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca400603d14a4fa55683d64bc517000ab4750739cbcbd9843311ac1107aa302d->enter($__internal_ca400603d14a4fa55683d64bc517000ab4750739cbcbd9843311ac1107aa302d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_ca400603d14a4fa55683d64bc517000ab4750739cbcbd9843311ac1107aa302d->leave($__internal_ca400603d14a4fa55683d64bc517000ab4750739cbcbd9843311ac1107aa302d_prof);

        
        $__internal_143d66b8f569c468197698abaed0b619597e9e243a69ca3325f8103cd07ae99c->leave($__internal_143d66b8f569c468197698abaed0b619597e9e243a69ca3325f8103cd07ae99c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}

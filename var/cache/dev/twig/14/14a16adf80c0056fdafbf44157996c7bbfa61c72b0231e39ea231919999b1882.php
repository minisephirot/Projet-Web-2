<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_17519aa29911f8424c422228ee0235811fd5237ee166c1bca617855dbade4470 extends Twig_Template
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
        $__internal_1e040b470bd17c523a14d4035bf6087f149954ba08b1c4b9ee23c01cfba36470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e040b470bd17c523a14d4035bf6087f149954ba08b1c4b9ee23c01cfba36470->enter($__internal_1e040b470bd17c523a14d4035bf6087f149954ba08b1c4b9ee23c01cfba36470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $__internal_472ee529d08d14f8c4e1ffba4332e3806477fbb84d091b5b1f6e17b65c1721fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472ee529d08d14f8c4e1ffba4332e3806477fbb84d091b5b1f6e17b65c1721fa->enter($__internal_472ee529d08d14f8c4e1ffba4332e3806477fbb84d091b5b1f6e17b65c1721fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_1e040b470bd17c523a14d4035bf6087f149954ba08b1c4b9ee23c01cfba36470->leave($__internal_1e040b470bd17c523a14d4035bf6087f149954ba08b1c4b9ee23c01cfba36470_prof);

        
        $__internal_472ee529d08d14f8c4e1ffba4332e3806477fbb84d091b5b1f6e17b65c1721fa->leave($__internal_472ee529d08d14f8c4e1ffba4332e3806477fbb84d091b5b1f6e17b65c1721fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Profile:edit_content.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit_content.html.twig");
    }
}

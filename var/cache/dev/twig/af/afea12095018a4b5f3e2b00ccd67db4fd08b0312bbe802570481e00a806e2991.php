<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_48c4ab9f2dad15df4653eed6d95c4e4a358d52dcf94e2a491f0f9951cc7c5a82 extends Twig_Template
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
        $__internal_3b9d29ebbb4f97f75fa086b3f24133864101f3453bca3bf89d972f1f576468ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b9d29ebbb4f97f75fa086b3f24133864101f3453bca3bf89d972f1f576468ec->enter($__internal_3b9d29ebbb4f97f75fa086b3f24133864101f3453bca3bf89d972f1f576468ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_43b43c28209812a66e7508ffb828c30627860fe5dfefbdb7985a25d61c93e673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b43c28209812a66e7508ffb828c30627860fe5dfefbdb7985a25d61c93e673->enter($__internal_43b43c28209812a66e7508ffb828c30627860fe5dfefbdb7985a25d61c93e673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3b9d29ebbb4f97f75fa086b3f24133864101f3453bca3bf89d972f1f576468ec->leave($__internal_3b9d29ebbb4f97f75fa086b3f24133864101f3453bca3bf89d972f1f576468ec_prof);

        
        $__internal_43b43c28209812a66e7508ffb828c30627860fe5dfefbdb7985a25d61c93e673->leave($__internal_43b43c28209812a66e7508ffb828c30627860fe5dfefbdb7985a25d61c93e673_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}

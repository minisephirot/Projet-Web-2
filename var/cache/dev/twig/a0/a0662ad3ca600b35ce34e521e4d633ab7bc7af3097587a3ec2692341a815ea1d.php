<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_95d5e109dc50e2922524c20a5114fa79bce02f829845b842b1fcb6c79b6a005d extends Twig_Template
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
        $__internal_d4bf337509fb0b52f4b33d788901029c249eb8de2d2bf0ee404e6a7c9ee06a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4bf337509fb0b52f4b33d788901029c249eb8de2d2bf0ee404e6a7c9ee06a87->enter($__internal_d4bf337509fb0b52f4b33d788901029c249eb8de2d2bf0ee404e6a7c9ee06a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_189b33812f90af539303b63f24cb5dd3ae1885e3d557155c9d0a60d32d61ffbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189b33812f90af539303b63f24cb5dd3ae1885e3d557155c9d0a60d32d61ffbb->enter($__internal_189b33812f90af539303b63f24cb5dd3ae1885e3d557155c9d0a60d32d61ffbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_d4bf337509fb0b52f4b33d788901029c249eb8de2d2bf0ee404e6a7c9ee06a87->leave($__internal_d4bf337509fb0b52f4b33d788901029c249eb8de2d2bf0ee404e6a7c9ee06a87_prof);

        
        $__internal_189b33812f90af539303b63f24cb5dd3ae1885e3d557155c9d0a60d32d61ffbb->leave($__internal_189b33812f90af539303b63f24cb5dd3ae1885e3d557155c9d0a60d32d61ffbb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}

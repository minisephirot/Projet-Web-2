<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_2728bef2d34e3c7fe629e55187061bea0c48351ca1638906c23b3ce8441d147c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5184cd6a6142dbefcaefa585fc750e97b4e33f79afa37fee1d483c6b75ccfdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5184cd6a6142dbefcaefa585fc750e97b4e33f79afa37fee1d483c6b75ccfdb->enter($__internal_e5184cd6a6142dbefcaefa585fc750e97b4e33f79afa37fee1d483c6b75ccfdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_2f1b60cc2f9d692afb212c9c02b952cc47b8c6e2efe7a37a6d90b223335d97be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1b60cc2f9d692afb212c9c02b952cc47b8c6e2efe7a37a6d90b223335d97be->enter($__internal_2f1b60cc2f9d692afb212c9c02b952cc47b8c6e2efe7a37a6d90b223335d97be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5184cd6a6142dbefcaefa585fc750e97b4e33f79afa37fee1d483c6b75ccfdb->leave($__internal_e5184cd6a6142dbefcaefa585fc750e97b4e33f79afa37fee1d483c6b75ccfdb_prof);

        
        $__internal_2f1b60cc2f9d692afb212c9c02b952cc47b8c6e2efe7a37a6d90b223335d97be->leave($__internal_2f1b60cc2f9d692afb212c9c02b952cc47b8c6e2efe7a37a6d90b223335d97be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ffb2dd67922249aa33140e6cce0fa63a72028f04aab806318d6dd8253a9b2ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ffb2dd67922249aa33140e6cce0fa63a72028f04aab806318d6dd8253a9b2ea->enter($__internal_9ffb2dd67922249aa33140e6cce0fa63a72028f04aab806318d6dd8253a9b2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_06d09d480593dc8fb63251a4a87878f3adedfc1ba3ca58f831197520de292f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d09d480593dc8fb63251a4a87878f3adedfc1ba3ca58f831197520de292f81->enter($__internal_06d09d480593dc8fb63251a4a87878f3adedfc1ba3ca58f831197520de292f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_06d09d480593dc8fb63251a4a87878f3adedfc1ba3ca58f831197520de292f81->leave($__internal_06d09d480593dc8fb63251a4a87878f3adedfc1ba3ca58f831197520de292f81_prof);

        
        $__internal_9ffb2dd67922249aa33140e6cce0fa63a72028f04aab806318d6dd8253a9b2ea->leave($__internal_9ffb2dd67922249aa33140e6cce0fa63a72028f04aab806318d6dd8253a9b2ea_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_79d60eae353697b1358ee6f7e2f997076b9045232a5ddd7b8fa773fec0922dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d60eae353697b1358ee6f7e2f997076b9045232a5ddd7b8fa773fec0922dea->enter($__internal_79d60eae353697b1358ee6f7e2f997076b9045232a5ddd7b8fa773fec0922dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d714fb6b52704ab4bfb27c95bdd89300d80e7a2a510320a75a6c3494f38b99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d714fb6b52704ab4bfb27c95bdd89300d80e7a2a510320a75a6c3494f38b99c->enter($__internal_1d714fb6b52704ab4bfb27c95bdd89300d80e7a2a510320a75a6c3494f38b99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_1d714fb6b52704ab4bfb27c95bdd89300d80e7a2a510320a75a6c3494f38b99c->leave($__internal_1d714fb6b52704ab4bfb27c95bdd89300d80e7a2a510320a75a6c3494f38b99c_prof);

        
        $__internal_79d60eae353697b1358ee6f7e2f997076b9045232a5ddd7b8fa773fec0922dea->leave($__internal_79d60eae353697b1358ee6f7e2f997076b9045232a5ddd7b8fa773fec0922dea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}

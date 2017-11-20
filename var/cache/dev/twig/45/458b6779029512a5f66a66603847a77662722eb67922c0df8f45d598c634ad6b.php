<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_10d1c0efd6486d0632a17132315f811474f872944086521cd54e435429bc8270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8713ffdfde06a3c3f2e209b7b1b1b8714de6db80dd5ddd3c73786321a9b65b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8713ffdfde06a3c3f2e209b7b1b1b8714de6db80dd5ddd3c73786321a9b65b0f->enter($__internal_8713ffdfde06a3c3f2e209b7b1b1b8714de6db80dd5ddd3c73786321a9b65b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e96296d2903e736f0370823c71f71fa4a8a29edf13006e21d7a33a532b9ea471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96296d2903e736f0370823c71f71fa4a8a29edf13006e21d7a33a532b9ea471->enter($__internal_e96296d2903e736f0370823c71f71fa4a8a29edf13006e21d7a33a532b9ea471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8713ffdfde06a3c3f2e209b7b1b1b8714de6db80dd5ddd3c73786321a9b65b0f->leave($__internal_8713ffdfde06a3c3f2e209b7b1b1b8714de6db80dd5ddd3c73786321a9b65b0f_prof);

        
        $__internal_e96296d2903e736f0370823c71f71fa4a8a29edf13006e21d7a33a532b9ea471->leave($__internal_e96296d2903e736f0370823c71f71fa4a8a29edf13006e21d7a33a532b9ea471_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c58292d7eafabf8349d89b98f181dd7146a17ccb4e193332d28db2b31b4cadcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c58292d7eafabf8349d89b98f181dd7146a17ccb4e193332d28db2b31b4cadcc->enter($__internal_c58292d7eafabf8349d89b98f181dd7146a17ccb4e193332d28db2b31b4cadcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ae2db64f6bc2743dcc93c809e46420efb9d0e237d201d0aa362714e6d2679154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2db64f6bc2743dcc93c809e46420efb9d0e237d201d0aa362714e6d2679154->enter($__internal_ae2db64f6bc2743dcc93c809e46420efb9d0e237d201d0aa362714e6d2679154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ae2db64f6bc2743dcc93c809e46420efb9d0e237d201d0aa362714e6d2679154->leave($__internal_ae2db64f6bc2743dcc93c809e46420efb9d0e237d201d0aa362714e6d2679154_prof);

        
        $__internal_c58292d7eafabf8349d89b98f181dd7146a17ccb4e193332d28db2b31b4cadcc->leave($__internal_c58292d7eafabf8349d89b98f181dd7146a17ccb4e193332d28db2b31b4cadcc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}

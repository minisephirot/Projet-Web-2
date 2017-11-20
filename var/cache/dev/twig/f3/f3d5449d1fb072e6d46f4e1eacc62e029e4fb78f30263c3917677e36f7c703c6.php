<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ab3509d84a76c90eadc8b484daa778bdf8e0f276954dab8bda9183ef9666e6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cc18203320666598b4c30863fc8fbde997351617975ef884fd8bf4b2bed6fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc18203320666598b4c30863fc8fbde997351617975ef884fd8bf4b2bed6fa5->enter($__internal_9cc18203320666598b4c30863fc8fbde997351617975ef884fd8bf4b2bed6fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_c62492845ec31a2b0f1d558c082a2268dc558afe91c7e4ca234f2b438a7b86d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62492845ec31a2b0f1d558c082a2268dc558afe91c7e4ca234f2b438a7b86d2->enter($__internal_c62492845ec31a2b0f1d558c082a2268dc558afe91c7e4ca234f2b438a7b86d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cc18203320666598b4c30863fc8fbde997351617975ef884fd8bf4b2bed6fa5->leave($__internal_9cc18203320666598b4c30863fc8fbde997351617975ef884fd8bf4b2bed6fa5_prof);

        
        $__internal_c62492845ec31a2b0f1d558c082a2268dc558afe91c7e4ca234f2b438a7b86d2->leave($__internal_c62492845ec31a2b0f1d558c082a2268dc558afe91c7e4ca234f2b438a7b86d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_470bbff992d11663807670876b12d65cf8f29b5a1b29f7987b687bc33fd41a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_470bbff992d11663807670876b12d65cf8f29b5a1b29f7987b687bc33fd41a00->enter($__internal_470bbff992d11663807670876b12d65cf8f29b5a1b29f7987b687bc33fd41a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ffcddb1e5db31ecf3ed4ce76f29b1c6841aed42f5e290e9f08080028b339e404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffcddb1e5db31ecf3ed4ce76f29b1c6841aed42f5e290e9f08080028b339e404->enter($__internal_ffcddb1e5db31ecf3ed4ce76f29b1c6841aed42f5e290e9f08080028b339e404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ffcddb1e5db31ecf3ed4ce76f29b1c6841aed42f5e290e9f08080028b339e404->leave($__internal_ffcddb1e5db31ecf3ed4ce76f29b1c6841aed42f5e290e9f08080028b339e404_prof);

        
        $__internal_470bbff992d11663807670876b12d65cf8f29b5a1b29f7987b687bc33fd41a00->leave($__internal_470bbff992d11663807670876b12d65cf8f29b5a1b29f7987b687bc33fd41a00_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c51306ac5d362a9c883840158a1865a061e76ae5d3116b2e32cc2275f5f69c12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51306ac5d362a9c883840158a1865a061e76ae5d3116b2e32cc2275f5f69c12->enter($__internal_c51306ac5d362a9c883840158a1865a061e76ae5d3116b2e32cc2275f5f69c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_26a940f8b83520e63ad749077b0558781296b931778b9ef43d44cb213cd15b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a940f8b83520e63ad749077b0558781296b931778b9ef43d44cb213cd15b27->enter($__internal_26a940f8b83520e63ad749077b0558781296b931778b9ef43d44cb213cd15b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_26a940f8b83520e63ad749077b0558781296b931778b9ef43d44cb213cd15b27->leave($__internal_26a940f8b83520e63ad749077b0558781296b931778b9ef43d44cb213cd15b27_prof);

        
        $__internal_c51306ac5d362a9c883840158a1865a061e76ae5d3116b2e32cc2275f5f69c12->leave($__internal_c51306ac5d362a9c883840158a1865a061e76ae5d3116b2e32cc2275f5f69c12_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7eb497d52c543ec3403534dcedca1c07b86a3973d7f3c260b3433a28af47395d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eb497d52c543ec3403534dcedca1c07b86a3973d7f3c260b3433a28af47395d->enter($__internal_7eb497d52c543ec3403534dcedca1c07b86a3973d7f3c260b3433a28af47395d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0ba40abc38beab70bb295b74b10c674794e7a848a8413ccc48bf9ba8ea7ede1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ba40abc38beab70bb295b74b10c674794e7a848a8413ccc48bf9ba8ea7ede1->enter($__internal_b0ba40abc38beab70bb295b74b10c674794e7a848a8413ccc48bf9ba8ea7ede1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_b0ba40abc38beab70bb295b74b10c674794e7a848a8413ccc48bf9ba8ea7ede1->leave($__internal_b0ba40abc38beab70bb295b74b10c674794e7a848a8413ccc48bf9ba8ea7ede1_prof);

        
        $__internal_7eb497d52c543ec3403534dcedca1c07b86a3973d7f3c260b3433a28af47395d->leave($__internal_7eb497d52c543ec3403534dcedca1c07b86a3973d7f3c260b3433a28af47395d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

<?php

/* @WebProfiler/Profiler/results.html.twig */
class __TwigTemplate_c521091c4dbd55252d63f78cbae9bd0f94c9b31adc616b0abd9018a7dd2618f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/results.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_166ef7a5351b55414bd4ca58548b32b6a087bc142f69ca6d369645209eee3cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166ef7a5351b55414bd4ca58548b32b6a087bc142f69ca6d369645209eee3cdd->enter($__internal_166ef7a5351b55414bd4ca58548b32b6a087bc142f69ca6d369645209eee3cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/results.html.twig"));

        $__internal_77499f1aa6af35c53dce373a468cd2ca336cb1268d7bacae7b1c279dbd14980a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77499f1aa6af35c53dce373a468cd2ca336cb1268d7bacae7b1c279dbd14980a->enter($__internal_77499f1aa6af35c53dce373a468cd2ca336cb1268d7bacae7b1c279dbd14980a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_166ef7a5351b55414bd4ca58548b32b6a087bc142f69ca6d369645209eee3cdd->leave($__internal_166ef7a5351b55414bd4ca58548b32b6a087bc142f69ca6d369645209eee3cdd_prof);

        
        $__internal_77499f1aa6af35c53dce373a468cd2ca336cb1268d7bacae7b1c279dbd14980a->leave($__internal_77499f1aa6af35c53dce373a468cd2ca336cb1268d7bacae7b1c279dbd14980a_prof);

    }

    // line 3
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6f8dda095a00dd1a2e2affdd215d658642a263eaf767142b19978f1c75720793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8dda095a00dd1a2e2affdd215d658642a263eaf767142b19978f1c75720793->enter($__internal_6f8dda095a00dd1a2e2affdd215d658642a263eaf767142b19978f1c75720793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_17593d0a61e5334e7728cabd01df964298a4c7ef89728c8ba948cb94b1526bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17593d0a61e5334e7728cabd01df964298a4c7ef89728c8ba948cb94b1526bcc->enter($__internal_17593d0a61e5334e7728cabd01df964298a4c7ef89728c8ba948cb94b1526bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 4
        echo "    <div class=\"status\">
        <div class=\"container\">
            <h2>Profile Search</h2>
        </div>
    </div>
";
        
        $__internal_17593d0a61e5334e7728cabd01df964298a4c7ef89728c8ba948cb94b1526bcc->leave($__internal_17593d0a61e5334e7728cabd01df964298a4c7ef89728c8ba948cb94b1526bcc_prof);

        
        $__internal_6f8dda095a00dd1a2e2affdd215d658642a263eaf767142b19978f1c75720793->leave($__internal_6f8dda095a00dd1a2e2affdd215d658642a263eaf767142b19978f1c75720793_prof);

    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58108f039fb7afdfc2052f4db7998e23885ec5dacadea8f0c848c1fabdec398b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58108f039fb7afdfc2052f4db7998e23885ec5dacadea8f0c848c1fabdec398b->enter($__internal_58108f039fb7afdfc2052f4db7998e23885ec5dacadea8f0c848c1fabdec398b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8efd8ad27897cfe15951528d2457b306edfcd76131c88994abf01e8f1df219ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8efd8ad27897cfe15951528d2457b306edfcd76131c88994abf01e8f1df219ec->enter($__internal_8efd8ad27897cfe15951528d2457b306edfcd76131c88994abf01e8f1df219ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 12
        echo "    <h2>";
        echo twig_escape_filter($this->env, (((isset($context["tokens"]) || array_key_exists("tokens", $context) ? $context["tokens"] : (function () { throw new Twig_Error_Runtime('Variable "tokens" does not exist.', 12, $this->getSourceContext()); })())) ? (twig_length_filter($this->env, (isset($context["tokens"]) || array_key_exists("tokens", $context) ? $context["tokens"] : (function () { throw new Twig_Error_Runtime('Variable "tokens" does not exist.', 12, $this->getSourceContext()); })()))) : ("No")), "html", null, true);
        echo " results found</h2>

    ";
        // line 14
        if ((isset($context["tokens"]) || array_key_exists("tokens", $context) ? $context["tokens"] : (function () { throw new Twig_Error_Runtime('Variable "tokens" does not exist.', 14, $this->getSourceContext()); })())) {
            // line 15
            echo "        <table id=\"search-results\">
            <thead>
                <tr>
                    <th scope=\"col\" class=\"text-center\">Status</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                    <th scope=\"col\">Token</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) || array_key_exists("tokens", $context) ? $context["tokens"] : (function () { throw new Twig_Error_Runtime('Variable "tokens" does not exist.', 27, $this->getSourceContext()); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 28
                echo "                    ";
                $context["css_class"] = (((((twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "status_code", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "status_code", array()), 0)) : (0)) > 399)) ? ("status-error") : ((((((twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "status_code", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "status_code", array()), 0)) : (0)) > 299)) ? ("status-warning") : ("status-success"))));
                // line 29
                echo "
                    <tr>
                        <td class=\"text-center\">
                            <span class=\"label ";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["css_class"]) || array_key_exists("css_class", $context) ? $context["css_class"] : (function () { throw new Twig_Error_Runtime('Variable "css_class" does not exist.', 32, $this->getSourceContext()); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "status_code", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "status_code", array()), "n/a")) : ("n/a")), "html", null, true);
                echo "</span>
                        </td>
                        <td>
                            <span class=\"nowrap\">";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "ip", array()), "html", null, true);
                echo "</span>
                            ";
                // line 36
                if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 36, $this->getSourceContext()); })()), "session", array()))) {
                    // line 37
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_results", twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 37, $this->getSourceContext()); })()), "query", array()), "all", array()), array("ip" => twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "ip", array()), "token" => twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "token", array())))), "html", null, true);
                    echo "\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">";
                    // line 38
                    echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
                    echo "</span>
                                </a>
                            ";
                }
                // line 41
                echo "                        </td>
                        <td>
                            ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "method", array()), "html", null, true);
                echo "
                            ";
                // line 44
                if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 44, $this->getSourceContext()); })()), "session", array()))) {
                    // line 45
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_results", twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 45, $this->getSourceContext()); })()), "query", array()), "all", array()), array("method" => twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "method", array()), "token" => twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "token", array())))), "html", null, true);
                    echo "\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">";
                    // line 46
                    echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
                    echo "</span>
                                </a>
                            ";
                }
                // line 49
                echo "                        </td>
                        <td class=\"break-long-words\">
                            ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "url", array()), "html", null, true);
                echo "
                            ";
                // line 52
                if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 52, $this->getSourceContext()); })()), "session", array()))) {
                    // line 53
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_results", twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 53, $this->getSourceContext()); })()), "query", array()), "all", array()), array("url" => twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "url", array()), "token" => twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "token", array())))), "html", null, true);
                    echo "\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">";
                    // line 54
                    echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
                    echo "</span>
                                </a>
                            ";
                }
                // line 57
                echo "                        </td>
                        <td class=\"text-small\">
                            <span class=\"nowrap\">";
                // line 59
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "time", array()), "d-M-Y"), "html", null, true);
                echo "</span>
                            <span class=\"nowrap newline\">";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "time", array()), "H:i:s"), "html", null, true);
                echo "</span>
                        </td>
                        <td class=\"nowrap\"><a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["result"], "token", array()), "html", null, true);
                echo "</a></td>
                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 68
            echo "        <div class=\"empty\">
            <p>The query returned no result.</p>
        </div>
    ";
        }
        // line 72
        echo "
";
        
        $__internal_8efd8ad27897cfe15951528d2457b306edfcd76131c88994abf01e8f1df219ec->leave($__internal_8efd8ad27897cfe15951528d2457b306edfcd76131c88994abf01e8f1df219ec_prof);

        
        $__internal_58108f039fb7afdfc2052f4db7998e23885ec5dacadea8f0c848c1fabdec398b->leave($__internal_58108f039fb7afdfc2052f4db7998e23885ec5dacadea8f0c848c1fabdec398b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 72,  225 => 68,  220 => 65,  201 => 62,  196 => 60,  192 => 59,  188 => 57,  182 => 54,  177 => 53,  175 => 52,  171 => 51,  167 => 49,  161 => 46,  156 => 45,  154 => 44,  150 => 43,  146 => 41,  140 => 38,  135 => 37,  133 => 36,  129 => 35,  121 => 32,  116 => 29,  113 => 28,  96 => 27,  82 => 15,  80 => 14,  74 => 12,  65 => 11,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block summary %}
    <div class=\"status\">
        <div class=\"container\">
            <h2>Profile Search</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ tokens ? tokens|length : 'No' }} results found</h2>

    {% if tokens %}
        <table id=\"search-results\">
            <thead>
                <tr>
                    <th scope=\"col\" class=\"text-center\">Status</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                    <th scope=\"col\">Token</th>
                </tr>
            </thead>
            <tbody>
                {% for result in tokens %}
                    {% set css_class = result.status_code|default(0) > 399 ? 'status-error' : result.status_code|default(0) > 299 ? 'status-warning' : 'status-success' %}

                    <tr>
                        <td class=\"text-center\">
                            <span class=\"label {{ css_class }}\">{{ result.status_code|default('n/a') }}</span>
                        </td>
                        <td>
                            <span class=\"nowrap\">{{ result.ip }}</span>
                            {% if request.session is not null %}
                                <a href=\"{{ path('_profiler_search_results', request.query.all|merge({'ip': result.ip, 'token': result.token})) }}\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">{{ include('@WebProfiler/Icon/search.svg') }}</span>
                                </a>
                            {% endif %}
                        </td>
                        <td>
                            {{ result.method }}
                            {% if request.session is not null %}
                                <a href=\"{{ path('_profiler_search_results', request.query.all|merge({'method': result.method, 'token': result.token})) }}\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">{{ include('@WebProfiler/Icon/search.svg') }}</span>
                                </a>
                            {% endif %}
                        </td>
                        <td class=\"break-long-words\">
                            {{ result.url }}
                            {% if request.session is not null %}
                                <a href=\"{{ path('_profiler_search_results', request.query.all|merge({'url': result.url, 'token': result.token})) }}\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">{{ include('@WebProfiler/Icon/search.svg') }}</span>
                                </a>
                            {% endif %}
                        </td>
                        <td class=\"text-small\">
                            <span class=\"nowrap\">{{ result.time|date('d-M-Y') }}</span>
                            <span class=\"nowrap newline\">{{ result.time|date('H:i:s') }}</span>
                        </td>
                        <td class=\"nowrap\"><a href=\"{{ path('_profiler', { token: result.token }) }}\">{{ result.token }}</a></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>The query returned no result.</p>
        </div>
    {% endif %}

{% endblock %}
", "@WebProfiler/Profiler/results.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\results.html.twig");
    }
}

<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_09470b55fecec64e262f8615ffc52b8b34bc014948ff5ae9ab1678c52455a790 extends Twig_Template
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
        $__internal_e9929a06d7e55f07c704f506da106811dea98435cc293ee25e430f8ad9b4ea9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9929a06d7e55f07c704f506da106811dea98435cc293ee25e430f8ad9b4ea9a->enter($__internal_e9929a06d7e55f07c704f506da106811dea98435cc293ee25e430f8ad9b4ea9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_56eee67fd09a208b55f2b51de20f5a9f1c0103912e4363c0206135299bbea868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56eee67fd09a208b55f2b51de20f5a9f1c0103912e4363c0206135299bbea868->enter($__internal_56eee67fd09a208b55f2b51de20f5a9f1c0103912e4363c0206135299bbea868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e9929a06d7e55f07c704f506da106811dea98435cc293ee25e430f8ad9b4ea9a->leave($__internal_e9929a06d7e55f07c704f506da106811dea98435cc293ee25e430f8ad9b4ea9a_prof);

        
        $__internal_56eee67fd09a208b55f2b51de20f5a9f1c0103912e4363c0206135299bbea868->leave($__internal_56eee67fd09a208b55f2b51de20f5a9f1c0103912e4363c0206135299bbea868_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}

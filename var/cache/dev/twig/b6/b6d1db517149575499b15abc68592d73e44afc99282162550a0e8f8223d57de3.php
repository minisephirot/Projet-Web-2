<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_29514805f766e8ba6f2f277e9cd6df4d52460ca4cc489c046f3d7cb7850c3546 extends Twig_Template
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
        $__internal_c50c89afe2c6533bc550343f42ba44d629df5b2515aab3e8a5f6c42bb2e11ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c50c89afe2c6533bc550343f42ba44d629df5b2515aab3e8a5f6c42bb2e11ed1->enter($__internal_c50c89afe2c6533bc550343f42ba44d629df5b2515aab3e8a5f6c42bb2e11ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_3379ec245c448e65d5eb430deef8f06bc63e6e677c31dd6bad239a640a2e8a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3379ec245c448e65d5eb430deef8f06bc63e6e677c31dd6bad239a640a2e8a11->enter($__internal_3379ec245c448e65d5eb430deef8f06bc63e6e677c31dd6bad239a640a2e8a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c50c89afe2c6533bc550343f42ba44d629df5b2515aab3e8a5f6c42bb2e11ed1->leave($__internal_c50c89afe2c6533bc550343f42ba44d629df5b2515aab3e8a5f6c42bb2e11ed1_prof);

        
        $__internal_3379ec245c448e65d5eb430deef8f06bc63e6e677c31dd6bad239a640a2e8a11->leave($__internal_3379ec245c448e65d5eb430deef8f06bc63e6e677c31dd6bad239a640a2e8a11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}

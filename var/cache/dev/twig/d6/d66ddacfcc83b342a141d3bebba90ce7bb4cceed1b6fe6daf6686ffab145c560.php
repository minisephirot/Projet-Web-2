<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_29ea97043b3b5e4b6e1faac109c06b0c36984ad1be1c7cdf8fe7ab8d4337a5a5 extends Twig_Template
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
        $__internal_3a85e7f839fb81192b4ce98218125e216a8c68a963d196fccfce3ba6bc32529b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a85e7f839fb81192b4ce98218125e216a8c68a963d196fccfce3ba6bc32529b->enter($__internal_3a85e7f839fb81192b4ce98218125e216a8c68a963d196fccfce3ba6bc32529b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3e644128e52357b1c55b8e9456786cc18d4d9f5d701019aa54fa9fc41c2f91d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e644128e52357b1c55b8e9456786cc18d4d9f5d701019aa54fa9fc41c2f91d3->enter($__internal_3e644128e52357b1c55b8e9456786cc18d4d9f5d701019aa54fa9fc41c2f91d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_3a85e7f839fb81192b4ce98218125e216a8c68a963d196fccfce3ba6bc32529b->leave($__internal_3a85e7f839fb81192b4ce98218125e216a8c68a963d196fccfce3ba6bc32529b_prof);

        
        $__internal_3e644128e52357b1c55b8e9456786cc18d4d9f5d701019aa54fa9fc41c2f91d3->leave($__internal_3e644128e52357b1c55b8e9456786cc18d4d9f5d701019aa54fa9fc41c2f91d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}

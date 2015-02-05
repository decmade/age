<?php

/* AgeCalcBundle:Default:input.html.twig */
class __TwigTemplate_4ca40bce1406c3f655cf8de03927b9ab7e8748d35d9026fac8854ca2faaf2ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Age Calculator";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "
<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$('[name=\"form\"]').attr('action', \"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("age_calc_calculate");
        echo "\" );
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "AgeCalcBundle:Default:input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  65 => 14,  62 => 13,  55 => 9,  51 => 8,  47 => 7,  44 => 6,  38 => 3,  11 => 1,);
    }
}

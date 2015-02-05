<?php

/* AgeCalcBundle:Default:calculate.html.twig */
class __TwigTemplate_ac5c66e0aeb9adce9a384576bffb7159712b244d13f9659b7ce310c13ba00f4e extends Twig_Template
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Results:</h1>
<p>
\tSince you were born on ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["age"]) ? $context["age"] : $this->getContext($context, "age")), "getBirthDate", array(), "method"), "format", array(0 => "l, F n, Y"), "method"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["age"]) ? $context["age"] : $this->getContext($context, "age")), "getFullAge", array(), "method"), "html", null, true);
        echo " have passed.
</p>
";
    }

    public function getTemplateName()
    {
        return "AgeCalcBundle:Default:calculate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}

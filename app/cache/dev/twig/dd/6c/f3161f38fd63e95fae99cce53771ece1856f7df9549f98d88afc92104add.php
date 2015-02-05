<?php

/* AgeCalcBundle:Default:index.html.twig */
class __TwigTemplate_dd6cf3161f38fd63e95fae99cce53771ece1856f7df9549f98d88afc92104add extends Twig_Template
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
        // line 1
        echo "<p>
\tYour age breakdown is:
\t";
        // line 3
        echo (isset($context["calculation"]) ? $context["calculation"] : $this->getContext($context, "calculation"));
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "AgeCalcBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}

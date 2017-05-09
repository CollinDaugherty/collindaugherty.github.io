<?php

/* modular/hero.html.twig */
class __TwigTemplate_eb0273ecdd76b73c2c7045c884a10dd5d404d3467899a030e99fd4884b658427 extends Twig_Template
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
        echo "<header class=\"text-center content-section\">
  <div class=\"small-container\">
    ";
        // line 3
        echo ($context["content"] ?? null);
        echo "
  </div>
</header>";
    }

    public function getTemplateName()
    {
        return "modular/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"text-center content-section\">
  <div class=\"small-container\">
    {{content}}
  </div>
</header>", "modular/hero.html.twig", "/Users/collin/Sites/website2/user/themes/prime/templates/modular/hero.html.twig");
    }
}

<?php

/* modular/services.html.twig */
class __TwigTemplate_e0c980e3dbb243cb179a43e40f2d13d65cd63562a4d57387ff6aa569c68bbf37 extends Twig_Template
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
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 2
        echo "

      <div class=\"container padding-bottom\">
            <div class=\"row\">

              <div class=\"small-40\">
                <img class=\"responsive-image\" src=\"";
        // line 8
        echo $this->getAttribute(($context["image"] ?? null), "url", array());
        echo "\">
              </div>

              <div class=\"small-60\">
                ";
        // line 12
        echo ($context["content"] ?? null);
        echo "
              </div>

            </div>   
      </div>
";
    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 12,  29 => 8,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set image = page.media.images|first %}


      <div class=\"container padding-bottom\">
            <div class=\"row\">

              <div class=\"small-40\">
                <img class=\"responsive-image\" src=\"{{image.url}}\">
              </div>

              <div class=\"small-60\">
                {{ content }}
              </div>

            </div>   
      </div>
", "modular/services.html.twig", "/Users/collin/Sites/website2/user/themes/prime/templates/modular/services.html.twig");
    }
}

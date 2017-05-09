<?php

/* modular/testimonials.html.twig */
class __TwigTemplate_8de0008d41ead884b499896b0a81c35c4be0b4387d37cf8731f0be10cacc89ff extends Twig_Template
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
        echo "<section class=\"content-section\">
      <div class=\"container padding-bottom\">
        <h1 class=\"text-center\">";
        // line 3
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>

        <div class=\"row\">
          
          ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "<hr />"));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 8
            echo "            <div class=\"small-50\">
              <blockquote>
                ";
            // line 10
            echo $context["column"];
            echo "
              </blockquote>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "          
        </div>
      </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "modular/testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  38 => 10,  34 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"content-section\">
      <div class=\"container padding-bottom\">
        <h1 class=\"text-center\">{{page.title}}</h1>

        <div class=\"row\">
          
          {% for column in page.content|split('<hr />') %}
            <div class=\"small-50\">
              <blockquote>
                {{ column }}
              </blockquote>
            </div>
          {% endfor %}
          
        </div>
      </div>
    </section>", "modular/testimonials.html.twig", "/Users/collin/Sites/website2/user/themes/prime/templates/modular/testimonials.html.twig");
    }
}

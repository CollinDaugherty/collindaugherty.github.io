<?php

/* modular/features.html.twig */
class __TwigTemplate_230fcc2e71fc6611bdc300767172a752d10a88afc13e56f955676402044070e9 extends Twig_Template
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
        echo "<section class=\"content-section padding-bottom\">
      <div class=\"container text-center\">
        <div class=\"row padding-bottom\">
          
          ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "<hr />"));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 6
            echo "            <div class=\"small-33\">
              ";
            // line 7
            echo $context["column"];
            echo "
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
        </div>
      </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  32 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"content-section padding-bottom\">
      <div class=\"container text-center\">
        <div class=\"row padding-bottom\">
          
          {% for column in page.content|split('<hr />') %}
            <div class=\"small-33\">
              {{ column }}
            </div>
          {% endfor %}

        </div>
      </div>
</section>

", "modular/features.html.twig", "/Users/collin/Sites/website2/user/themes/prime/templates/modular/features.html.twig");
    }
}

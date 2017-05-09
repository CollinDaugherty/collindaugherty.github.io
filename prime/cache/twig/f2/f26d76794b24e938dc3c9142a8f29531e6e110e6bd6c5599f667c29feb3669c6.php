<?php

/* modular.html.twig */
class __TwigTemplate_329a642a57f55855fb26d8910121cb503fe16839d024b2fe458289ee49eedb3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->blocks = array(
            'top' => array($this, 'block_top'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_top($context, array $blocks = array())
    {
        // line 4
        echo "
  ";
        // line 5
        $this->displayParentBlock("top", $context, $blocks);
        echo "

  ";
        // line 7
        $context["hero"] = twig_first($this->env, $this->getAttribute(($context["page"] ?? null), "collection", array()));
        // line 8
        echo "
  ";
        // line 9
        $context["hero_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["hero"] ?? null), "media", array()), "images", array()));
        // line 10
        echo "
  <div class=\"background-img colored-background\" style=\"background-image:url(";
        // line 11
        echo $this->getAttribute(($context["hero_image"] ?? null), "url", array());
        echo ")\">
    ";
        // line 12
        echo $this->getAttribute(($context["hero"] ?? null), "content", array());
        echo "
  </div>

";
    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        // line 19
        echo "
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array()));
        foreach ($context['_seq'] as $context["name"] => $context["module"]) {
            // line 21
            echo "
    ";
            // line 22
            if (($context["name"] != "_hero")) {
                // line 23
                echo "      ";
                echo $this->getAttribute($context["module"], "content", array());
                echo "
    ";
            }
            // line 25
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
";
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  83 => 25,  77 => 23,  75 => 22,  72 => 21,  68 => 20,  65 => 19,  62 => 18,  54 => 12,  50 => 11,  47 => 10,  45 => 9,  42 => 8,  40 => 7,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"partials/base.html.twig\" %}

{% block top %}

  {{ parent() }}

  {% set hero = page.collection|first %}

  {% set hero_image = hero.media.images|first %}

  <div class=\"background-img colored-background\" style=\"background-image:url({{hero_image.url}})\">
    {{hero.content}}
  </div>

{% endblock %}


{% block main %}

  {% for name, module in page.collection %}

    {% if name != \"_hero\" %}
      {{module.content}}
    {% endif %}

  {% endfor %}

{% endblock %}", "modular.html.twig", "/Users/collin/Sites/website2/user/themes/prime/templates/modular.html.twig");
    }
}

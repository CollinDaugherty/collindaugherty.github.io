<?php

/* default.html.twig */
class __TwigTemplate_f9197aabb16f4a7a422ad91edbb172059665512bd3de16061e82843a123a2a1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["hero_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <header class=\"text-center content-section background-img colored-background\" style=\"background-image:url(";
        echo $this->getAttribute(($context["hero_image"] ?? null), "url", array());
        echo ")\">
        <div class=\"small-container\">
          <h1>";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
        </div>
    </header>

<section class=\"content-section\">
    <div class=\"small-container padding-bottom\">
        ";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  40 => 8,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
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

{% set hero_image = page.media.images|first %}

{% block content %}
    <header class=\"text-center content-section background-img colored-background\" style=\"background-image:url({{hero_image.url}})\">
        <div class=\"small-container\">
          <h1>{{page.title}}</h1>
        </div>
    </header>

<section class=\"content-section\">
    <div class=\"small-container padding-bottom\">
        {{ page.content }}
    </div>
</section>
{% endblock %}", "default.html.twig", "/Users/collin/Sites/website2/user/themes/prime/templates/default.html.twig");
    }
}

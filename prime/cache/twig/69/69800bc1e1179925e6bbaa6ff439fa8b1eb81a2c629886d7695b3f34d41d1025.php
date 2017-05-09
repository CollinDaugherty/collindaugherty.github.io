<?php

/* contact.html.twig */
class __TwigTemplate_52e4824c90991e53c3d8be676f4cadb07546009c6cc9a95f41e79d7c85920ea3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "contact.html.twig", 1);
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
      ";
        // line 15
        $this->loadTemplate("forms/form.html.twig", "contact.html.twig", 15)->display($context);
        // line 16
        echo "    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  53 => 15,  49 => 14,  40 => 8,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
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
      {% include \"forms/form.html.twig\" %}
    </div>
</section>
{% endblock %}", "contact.html.twig", "/Users/collin/Sites/website2/user/themes/prime/templates/contact.html.twig");
    }
}

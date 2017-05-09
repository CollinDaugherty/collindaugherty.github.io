<?php

/* item.html.twig */
class __TwigTemplate_6ab122c905ef348128c4ed76a902ece08c525495e7e9e2a4254d384d7d0b83cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "        <article class=\"content-section\">
            <div class=\"small-container padding-bottom\">

            <div class=\"row text-center padding-bottom\">
                <div class=\"small-100\">
                    ";
        // line 9
        echo twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        echo "
                    <h1 class=\"no-margin-bottom\">";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
                    <cite>";
        // line 11
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "M d, Y");
        echo "</cite>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"small-100\">
                    ";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
                </div>
            </div>

            </div>
        </article>

    ";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  46 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
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

    {% block content %}
        <article class=\"content-section\">
            <div class=\"small-container padding-bottom\">

            <div class=\"row text-center padding-bottom\">
                <div class=\"small-100\">
                    {{page.media.images|first}}
                    <h1 class=\"no-margin-bottom\">{{page.title}}</h1>
                    <cite>{{page.date | date(\"M d, Y\")}}</cite>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"small-100\">
                    {{page.content}}
                </div>
            </div>

            </div>
        </article>

    {% endblock %}", "item.html.twig", "/Users/collin/Sites/website2/user/themes/prime/templates/item.html.twig");
    }
}

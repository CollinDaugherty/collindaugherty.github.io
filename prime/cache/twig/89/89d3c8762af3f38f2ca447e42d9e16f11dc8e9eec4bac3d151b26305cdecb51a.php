<?php

/* blog.html.twig */
class __TwigTemplate_6da09bd21d0f2cc43552665018b62762e2d61f01b6baacb165ff2658e6a2d570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
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
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 5
        $context["hero_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <header class=\"text-center content-section background-img colored-background\" style=\"background-image:url(";
        echo $this->getAttribute(($context["hero_image"] ?? null), "url", array());
        echo ")\">
        <div class=\"small-container\">
          <h1>";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
        </div>
    </header>


    <section class=\"content-section\">
        <div class=\"medium-container padding-bottom\">
            
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 19
            echo "                <div class=\"row\">
                    <div class=\"small-20\">
                        <div class=\"thumbnail\"><a href=\"";
            // line 21
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">";
            echo twig_first($this->env, $this->getAttribute($this->getAttribute($context["page"], "media", array()), "images", array()));
            echo "</a></div>
                    </div>

                    <div class=\"small-80 inline-block\">
                        <h3><a href=\"";
            // line 25
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["page"], "title", array());
            echo "</a></h3>
                        <p>";
            // line 26
            echo $this->getAttribute($context["page"], "summary", array());
            echo "</p>
                    </div>

                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
            ";
        // line 32
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 33
            echo "                ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 33)->display(array_merge($context, array("base_url" => $this->getAttribute(($context["page"] ?? null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 34
            echo "            ";
        }
        // line 35
        echo "            
        </div>
    </section>
    ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 35,  95 => 34,  92 => 33,  90 => 32,  87 => 31,  76 => 26,  70 => 25,  61 => 21,  57 => 19,  53 => 18,  42 => 10,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
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

    {% set collection = page.collection() %}

    {% set hero_image = page.media.images|first %}

    {% block content %}
    <header class=\"text-center content-section background-img colored-background\" style=\"background-image:url({{hero_image.url}})\">
        <div class=\"small-container\">
          <h1>{{page.title}}</h1>
        </div>
    </header>


    <section class=\"content-section\">
        <div class=\"medium-container padding-bottom\">
            
            {% for page in collection %}
                <div class=\"row\">
                    <div class=\"small-20\">
                        <div class=\"thumbnail\"><a href=\"{{page.url}}\">{{page.media.images|first}}</a></div>
                    </div>

                    <div class=\"small-80 inline-block\">
                        <h3><a href=\"{{page.url}}\">{{page.title}}</a></h3>
                        <p>{{page.summary}}</p>
                    </div>

                </div>
            {% endfor %}

            {% if config.plugins.pagination.enabled and collection.params.pagination %}
                {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
            {% endif %}
            
        </div>
    </section>
    {% endblock %}", "blog.html.twig", "/Users/collin/Sites/website2/user/themes/prime/templates/blog.html.twig");
    }
}

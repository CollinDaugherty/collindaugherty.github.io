<?php

/* modular/blogfeed.html.twig */
class __TwigTemplate_b57c2b4a18424238ad283e9e6a2fb43f0a3ae8cee41e05bfc05ce8641f1b5997 extends Twig_Template
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
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 2
        echo "
<section class=\"content-section alternate-background\">
        <div class=\"medium-container\">
            <h1 class=\"text-center\">";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
            
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 8
            echo "                <div class=\"row\">
                    <div class=\"small-20\">
                        <div class=\"thumbnail\"><a href=\"";
            // line 10
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">";
            echo twig_first($this->env, $this->getAttribute($this->getAttribute($context["page"], "media", array()), "images", array()));
            echo "</a></div>
                    </div>

                    <div class=\"small-80 inline-block\">
                        <h3><a href=\"";
            // line 14
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["page"], "title", array());
            echo "</a></h3>
                        <p>";
            // line 15
            echo $this->getAttribute($context["page"], "summary", array());
            echo "</p>
                    </div>

                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
        <div class=\"row text-center padding-top\">
            <a class=\"button accent-button\" href=\"/blog\">Full Blog <i class=\"fa fa-arrow-right\"></i></a>
        </div>
            
        </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "modular/blogfeed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  54 => 15,  48 => 14,  39 => 10,  35 => 8,  31 => 7,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set collection = page.collection() %}

<section class=\"content-section alternate-background\">
        <div class=\"medium-container\">
            <h1 class=\"text-center\">{{page.title}}</h1>
            
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

        <div class=\"row text-center padding-top\">
            <a class=\"button accent-button\" href=\"/blog\">Full Blog <i class=\"fa fa-arrow-right\"></i></a>
        </div>
            
        </div>
    </section>", "modular/blogfeed.html.twig", "/Users/collin/Sites/website2/user/themes/prime/templates/modular/blogfeed.html.twig");
    }
}

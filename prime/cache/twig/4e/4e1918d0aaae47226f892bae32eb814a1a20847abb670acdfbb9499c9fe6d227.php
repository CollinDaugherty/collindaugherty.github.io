<?php

/* error.html.twig */
class __TwigTemplate_65ae8bf00b641223f82dc83982359c65c9d81b9d00d5d38207b6ce0cf293714a extends Twig_Template
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
        echo "<h1>";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_ERROR.ERROR");
        echo " ";
        echo $this->getAttribute(($context["header"] ?? null), "http_response_code", array());
        echo "</h1>

<p>";
        // line 3
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>{{ 'PLUGIN_ERROR.ERROR'|t }} {{ header.http_response_code }}</h1>

<p>{{ page.content|raw }}</p>
", "error.html.twig", "/Users/collin/Sites/website2/user/plugins/error/templates/error.html.twig");
    }
}

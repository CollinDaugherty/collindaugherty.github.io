<?php

/* partials/nav-user-details.html.twig */
class __TwigTemplate_95ee2a3dc2126bf9493cca368db47c250ab0fda73becd5ee172b68ea278e7bfd extends Twig_Template
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
        echo "<div id=\"admin-user-details\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
        echo "/user/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "user", array()), "username", array()));
        echo "\">
        ";
        // line 3
        $this->loadTemplate("partials/nav-user-avatar.html.twig", "partials/nav-user-details.html.twig", 3)->display($context);
        // line 4
        echo "
        <div class=\"admin-user-names\">
            <h4>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "user", array()), "fullname", array()));
        echo "</h4>
            <h5>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "user", array()), "title", array()));
        echo "</h5>
        </div>
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/nav-user-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  34 => 6,  30 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"admin-user-details\">
    <a href=\"{{ base_url_relative }}/user/{{ admin.user.username|e }}\">
        {% include 'partials/nav-user-avatar.html.twig' %}

        <div class=\"admin-user-names\">
            <h4>{{ admin.user.fullname|e }}</h4>
            <h5>{{ admin.user.title|e }}</h5>
        </div>
    </a>
</div>
", "partials/nav-user-details.html.twig", "/Users/collin/Sites/website2/user/plugins/admin/themes/grav/templates/partials/nav-user-details.html.twig");
    }
}

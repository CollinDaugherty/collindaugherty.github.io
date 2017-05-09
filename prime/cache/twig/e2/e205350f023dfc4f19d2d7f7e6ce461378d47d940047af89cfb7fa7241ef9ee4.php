<?php

/* forms/fields/order/order.html.twig */
class __TwigTemplate_b5372df8ee21fdefa7ef42023a7cccc7604ddd6d48d788083ea59883712bcf64 extends Twig_Template
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
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
        // line 2
        $context["siblings"] = $this->getAttribute($this->getAttribute(($context["data"] ?? null), "parent", array()), "children", array());
        // line 3
        $context["canOrder"] = $this->getAttribute(($context["data"] ?? null), "order", array());
        // line 4
        echo "
<div class=\"form-field grid pure-g\">
    <div class=\"form-label block size-1-3 pure-u-1-3\">
        <label>
            ";
        // line 8
        if ($this->getAttribute(($context["field"] ?? null), "help", array())) {
            // line 9
            echo "            <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "help", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", array())), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 11
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", array())), "html", null, true);
            echo "
            ";
        }
        // line 13
        echo "            ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
        </label>
    </div>
    <div class=\"form-data block size-2-3 pure-u-2-3\">
        <div class=\"form-order-wrapper ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
        echo "\">

            <input
                type=\"hidden\"
                data-order
                ";
        // line 22
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 23
        echo "                name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
        echo "\"
                value=\"\" />
            ";
        // line 25
        if ( !($context["canOrder"] ?? null)) {
            // line 26
            echo "                <div class=\"notice\">";
            echo $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_PAGE_NO_PREFIX");
            echo "</div>
            ";
        }
        // line 28
        echo "
            ";
        // line 29
        if ((twig_length_filter($this->env, ($context["siblings"] ?? null)) < 200)) {
            // line 30
            echo "                ";
            $context["sortable_count"] = 0;
            // line 31
            echo "\t\t\t\t<ul id=\"ordering\" class=\"orderable ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
            echo "\">
\t\t\t    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["siblings"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                if ($this->getAttribute($context["page"], "order", array())) {
                    // line 33
                    echo "\t\t\t\t\t<li class=\"drag-handle\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "slug", array()), "html", null, true);
                    echo "\" ";
                    echo ((($this->getAttribute($context["page"], "slug", array()) == $this->getAttribute(($context["data"] ?? null), "slug", array()))) ? ("data-active-id") : (""));
                    echo "><span class=\"page-order\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "order", array()), "html", null, true);
                    echo "</span> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()));
                    echo " <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->getPageUrl($context, $context["page"]), "html", null, true);
                    echo "\"><i class=\"fa fa-external-link\"></i></a></li>
                    ";
                    // line 34
                    $context["sortable_count"] = $this->getAttribute($context["loop"], "index", array());
                    // line 35
                    echo "                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t\t\t</ul>
                ";
            // line 37
            if ((($context["sortable_count"] ?? null) < twig_length_filter($this->env, ($context["siblings"] ?? null)))) {
                // line 38
                echo "                <label>Unsortable Pages</label>
                <ul class=\"orderable disabled\">
                    ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["siblings"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    if ( !$this->getAttribute($context["page"], "order", array())) {
                        // line 41
                        echo "                        <li ";
                        echo ((($this->getAttribute($context["page"], "slug", array()) == $this->getAttribute(($context["data"] ?? null), "slug", array()))) ? ("data-active-id") : (""));
                        echo ">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()));
                        echo " <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->getPageUrl($context, $context["page"]), "html", null, true);
                        echo "\"><i class=\"fa fa-external-link\"></i></a></li>
                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "                </ul>
                ";
            }
            // line 45
            echo "\t\t\t";
        } else {
            // line 46
            echo "                <div class=\"notice\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_TOO_MANY_SIBLINGS"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 48
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/order/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 48,  165 => 46,  162 => 45,  158 => 43,  144 => 41,  139 => 40,  135 => 38,  133 => 37,  130 => 36,  120 => 35,  118 => 34,  105 => 33,  94 => 32,  89 => 31,  86 => 30,  84 => 29,  81 => 28,  75 => 26,  73 => 25,  67 => 23,  63 => 22,  55 => 17,  47 => 13,  41 => 11,  33 => 9,  31 => 8,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set value = (value is null ? field.default : value) %}
{% set siblings = data.parent.children %}
{% set canOrder = data.order %}

<div class=\"form-field grid pure-g\">
    <div class=\"form-label block size-1-3 pure-u-1-3\">
        <label>
            {% if field.help %}
            <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|e|tu }}\">{{ field.label|tu }}</span>
            {% else %}
            {{ field.label|tu }}
            {% endif %}
            {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
        </label>
    </div>
    <div class=\"form-data block size-2-3 pure-u-2-3\">
        <div class=\"form-order-wrapper {{ field.size }}\">

            <input
                type=\"hidden\"
                data-order
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                name=\"{{ (scope ~ field.name)|fieldName }}\"
                value=\"\" />
            {% if not canOrder %}
                <div class=\"notice\">{{ \"PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_PAGE_NO_PREFIX\"|tu|raw }}</div>
            {% endif %}

            {% if siblings|length < 200 %}
                {% set sortable_count = 0 %}
\t\t\t\t<ul id=\"ordering\" class=\"orderable {{ field.classes }}\">
\t\t\t    {% for page in siblings if page.order %}
\t\t\t\t\t<li class=\"drag-handle\" data-id=\"{{ page.slug }}\" {{ page.slug == data.slug ? 'data-active-id' : ''}}><span class=\"page-order\">{{ page.order }}</span> {{ page.title|e }} <a href=\"{{ getPageUrl(page) }}\"><i class=\"fa fa-external-link\"></i></a></li>
                    {% set sortable_count = loop.index %}
                {% endfor %}
\t\t\t\t</ul>
                {% if sortable_count < siblings|length %}
                <label>Unsortable Pages</label>
                <ul class=\"orderable disabled\">
                    {% for page in siblings if not page.order %}
                        <li {{ page.slug == data.slug ? 'data-active-id' : ''}}>{{ page.title|e }} <a href=\"{{ getPageUrl(page) }}\"><i class=\"fa fa-external-link\"></i></a></li>
                    {% endfor %}
                </ul>
                {% endif %}
\t\t\t{% else %}
                <div class=\"notice\">{{ \"PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_TOO_MANY_SIBLINGS\"|tu }}</div>
\t\t\t{% endif %}
        </div>
    </div>
</div>
", "forms/fields/order/order.html.twig", "/Users/collin/Sites/website2/user/plugins/admin/themes/grav/templates/forms/fields/order/order.html.twig");
    }
}

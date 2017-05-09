<?php

/* login.html.twig */
class __TwigTemplate_12a8d5fc1244f6734f3c70212e4d786aff442dffa59086922728a492f4f35ab2 extends Twig_Template
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
        $this->loadTemplate("login.html.twig", "login.html.twig", 1, "168362175")->display(array_merge($context, array("title" => "Grav Admin Login")));
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/login.html.twig' with {title:'Grav Admin Login'} %}

    {% block form %}

        {% if grav.user.username and grav.user.authenticated %}

            <div class=\"form-actions primary-accent\">
                <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGOUT'|tu }}</button>
            </div>

        {% else %}
            {% for field in form.fields %}
                {% if field.type %}
                    <div>
                        {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                    </div>
                {% endif %}
            {% endfor %}

            <div class=\"form-actions primary-accent\">
                {% if notAuthorized %}
                    <a class=\"button secondary\" onclick=\"window.history.back()\"><i class=\"fa fa-reply\"></i> {{ 'PLUGIN_ADMIN.BACK'|tu }}</a>
                    <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGOUT'|tu }}</button>
                {% else %}
                    {% if not authenticated %}
                        <a class=\"button secondary\" href=\"{{ base_url_relative }}/forgot\"><i class=\"fa fa-exclamation-circle\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN_FORGOT'|tu }}</a>
                        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN'|tu }}</button>
                    {% else %}
                        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGOUT'|tu }}</button>
                    {% endif %}
                {% endif %}
            </div>

        {% endif %}

    {% endblock %}

{% endembed %}
", "login.html.twig", "/Users/collin/Sites/website2/user/plugins/admin/themes/grav/templates/login.html.twig");
    }
}


/* login.html.twig */
class __TwigTemplate_12a8d5fc1244f6734f3c70212e4d786aff442dffa59086922728a492f4f35ab2_168362175 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/login.html.twig", "login.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form($context, array $blocks = array())
    {
        // line 4
        echo "
        ";
        // line 5
        if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "authenticated", array()))) {
            // line 6
            echo "
            <div class=\"form-actions primary-accent\">
                <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGOUT"), "html", null, true);
            echo "</button>
            </div>

        ";
        } else {
            // line 12
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 13
                echo "                ";
                if ($this->getAttribute($context["field"], "type", array())) {
                    // line 14
                    echo "                    <div>
                        ";
                    // line 15
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "login.html.twig", 15)->display($context);
                    // line 16
                    echo "                    </div>
                ";
                }
                // line 18
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "
            <div class=\"form-actions primary-accent\">
                ";
            // line 21
            if (($context["notAuthorized"] ?? null)) {
                // line 22
                echo "                    <a class=\"button secondary\" onclick=\"window.history.back()\"><i class=\"fa fa-reply\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
                echo "</a>
                    <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGOUT"), "html", null, true);
                echo "</button>
                ";
            } else {
                // line 25
                echo "                    ";
                if ( !($context["authenticated"] ?? null)) {
                    // line 26
                    echo "                        <a class=\"button secondary\" href=\"";
                    echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                    echo "/forgot\"><i class=\"fa fa-exclamation-circle\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGIN_BTN_FORGOT"), "html", null, true);
                    echo "</a>
                        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login\"><i class=\"fa fa-sign-in\"></i> ";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGIN_BTN"), "html", null, true);
                    echo "</button>
                    ";
                } else {
                    // line 29
                    echo "                        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGOUT"), "html", null, true);
                    echo "</button>
                    ";
                }
                // line 31
                echo "                ";
            }
            // line 32
            echo "            </div>

        ";
        }
        // line 35
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 35,  217 => 32,  214 => 31,  208 => 29,  203 => 27,  196 => 26,  193 => 25,  188 => 23,  183 => 22,  181 => 21,  177 => 19,  163 => 18,  159 => 16,  157 => 15,  154 => 14,  151 => 13,  133 => 12,  126 => 8,  122 => 6,  120 => 5,  117 => 4,  114 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/login.html.twig' with {title:'Grav Admin Login'} %}

    {% block form %}

        {% if grav.user.username and grav.user.authenticated %}

            <div class=\"form-actions primary-accent\">
                <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGOUT'|tu }}</button>
            </div>

        {% else %}
            {% for field in form.fields %}
                {% if field.type %}
                    <div>
                        {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                    </div>
                {% endif %}
            {% endfor %}

            <div class=\"form-actions primary-accent\">
                {% if notAuthorized %}
                    <a class=\"button secondary\" onclick=\"window.history.back()\"><i class=\"fa fa-reply\"></i> {{ 'PLUGIN_ADMIN.BACK'|tu }}</a>
                    <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGOUT'|tu }}</button>
                {% else %}
                    {% if not authenticated %}
                        <a class=\"button secondary\" href=\"{{ base_url_relative }}/forgot\"><i class=\"fa fa-exclamation-circle\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN_FORGOT'|tu }}</a>
                        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN'|tu }}</button>
                    {% else %}
                        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGOUT'|tu }}</button>
                    {% endif %}
                {% endif %}
            </div>

        {% endif %}

    {% endblock %}

{% endembed %}
", "login.html.twig", "/Users/collin/Sites/website2/user/plugins/admin/themes/grav/templates/login.html.twig");
    }
}

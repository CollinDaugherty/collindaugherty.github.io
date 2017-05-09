<?php

/* forms/default/form.html.twig */
class __TwigTemplate_5be7c8331a47d515212391941dd890a68789d7cedad7b097a4572ddc92f90fb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_classes' => array($this, 'block_form_classes'),
            'inner_markup_fields_start' => array($this, 'block_inner_markup_fields_start'),
            'inner_markup_fields_end' => array($this, 'block_inner_markup_fields_end'),
            'inner_markup_buttons_start' => array($this, 'block_inner_markup_buttons_start'),
            'button_classes' => array($this, 'block_button_classes'),
            'inner_markup_buttons_end' => array($this, 'block_inner_markup_buttons_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((null === ($context["form"] ?? null))) {
            // line 2
            echo "    ";
            $context["form"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", array()), "getFlashObject", array(0 => "form"), "method");
        }
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute(($context["form"] ?? null), "message", array())) {
            // line 6
            echo "    ";
            if (($this->getAttribute(($context["form"] ?? null), "inline_errors", array()) && $this->getAttribute(($context["form"] ?? null), "messages", array()))) {
                // line 7
                echo "        <div class=\"alert notices ";
                echo (($this->getAttribute(($context["form"] ?? null), "message_color", array())) ? ($this->getAttribute(($context["form"] ?? null), "message_color", array())) : ("green"));
                echo "\"><p>";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("FORM.VALIDATION_FAIL");
                echo "</p></div>
    ";
            } else {
                // line 9
                echo "        <div class=\"alert notices ";
                echo (($this->getAttribute(($context["form"] ?? null), "message_color", array())) ? ($this->getAttribute(($context["form"] ?? null), "message_color", array())) : ("green"));
                echo "\"><p>";
                echo $this->getAttribute(($context["form"] ?? null), "message", array());
                echo "</p></div>
    ";
            }
        }
        // line 12
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 13
        $context["multipart"] = "";
        // line 14
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute(($context["form"] ?? null), "method", array())), "POST");
        // line 15
        echo "
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 17
            echo "    ";
            if (((($context["method"] ?? null) == "POST") && ($this->getAttribute($context["field"], "type", array()) == "file"))) {
                // line 18
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 19
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
";
        // line 22
        $context["action"] = (($this->getAttribute(($context["form"] ?? null), "action", array())) ? ((($context["base_url"] ?? null) . $this->getAttribute(($context["form"] ?? null), "action", array()))) : (((($context["base_url"] ?? null) . $this->getAttribute(($context["page"] ?? null), "route", array())) . $this->getAttribute(($context["uri"] ?? null), "params", array()))));
        // line 23
        echo "
";
        // line 24
        if ((($context["action"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 25
            echo "    ";
            $context["action"] = ((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", array()));
        }
        // line 27
        echo "
<form name=\"";
        // line 28
        echo $this->getAttribute(($context["form"] ?? null), "name", array());
        echo "\"
      action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\"
      method=\"";
        // line 30
        echo ($context["method"] ?? null);
        echo "\"";
        echo ($context["multipart"] ?? null);
        echo "
      ";
        // line 31
        if ($this->getAttribute(($context["form"] ?? null), "id", array())) {
            echo "id=\"";
            echo $this->getAttribute(($context["form"] ?? null), "id", array());
            echo "\"";
        }
        // line 32
        echo "      ";
        $this->displayBlock('form_classes', $context, $blocks);
        // line 35
        echo ">

  ";
        // line 37
        $this->displayBlock('inner_markup_fields_start', $context, $blocks);
        // line 38
        echo "
  ";
        // line 39
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
            // line 40
            echo "    ";
            if (($this->getAttribute($context["field"], "type", array()) == "file")) {
                // line 41
                echo "        ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "plugin://form/assets/form.min.js"), "method");
                // line 42
                echo "    ";
            }
            // line 43
            echo "    ";
            $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
            // line 44
            echo "    ";
            try {
                $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "forms/default/form.html.twig", 44)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 45
            echo "  ";
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
        // line 46
        echo "
  ";
        // line 47
        $this->loadTemplate("forms/fields/formname/formname.html.twig", "forms/default/form.html.twig", 47)->display($context);
        // line 48
        echo "
  ";
        // line 49
        $this->displayBlock('inner_markup_fields_end', $context, $blocks);
        // line 50
        echo "
  ";
        // line 51
        $this->displayBlock('inner_markup_buttons_start', $context, $blocks);
        // line 54
        echo "
  ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "buttons", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 56
            echo "      ";
            if ($this->getAttribute($context["button"], "outerclasses", array(), "any", true, true)) {
                echo "<div class=\"";
                echo $this->getAttribute($context["button"], "outerclasses", array());
                echo "\">";
            }
            // line 57
            echo "          ";
            if ($this->getAttribute($context["button"], "url", array())) {
                // line 58
                echo "              <a href=\"";
                echo (((is_string($__internal_6637fbe390f9687521246a144e1438dffec2f46af7cfe12a49687a59a38fae31 = $this->getAttribute($context["button"], "url", array())) && is_string($__internal_05f3e42c32d3f1197bee4074c0f173a38f712648003cdcd12ef1674528f20f89 = "http") && ('' === $__internal_05f3e42c32d3f1197bee4074c0f173a38f712648003cdcd12ef1674528f20f89 || 0 === strpos($__internal_6637fbe390f9687521246a144e1438dffec2f46af7cfe12a49687a59a38fae31, $__internal_05f3e42c32d3f1197bee4074c0f173a38f712648003cdcd12ef1674528f20f89)))) ? ($this->getAttribute($context["button"], "url", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute($context["button"], "url", array()))));
                echo "\">
          ";
            }
            // line 60
            echo "          <button
                ";
            // line 61
            if ($this->getAttribute($context["button"], "id", array())) {
                echo "id=\"";
                echo $this->getAttribute($context["button"], "id", array());
                echo "\"";
            }
            // line 62
            echo "                ";
            $this->displayBlock('button_classes', $context, $blocks);
            // line 65
            echo "                ";
            if ($this->getAttribute($context["button"], "disabled", array())) {
                echo "disabled=\"disabled\"";
            }
            // line 66
            echo "
                type=\"";
            // line 67
            echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
            echo "\"

                ";
            // line 69
            if ($this->getAttribute($context["button"], "task", array())) {
                // line 70
                echo "                    name=\"task\" value=\"";
                echo $this->getAttribute($context["button"], "task", array());
                echo "\"
                ";
            }
            // line 72
            echo "            >
                ";
            // line 73
            echo _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($context["button"], "value", array())), "Submit");
            echo "
          </button>
          ";
            // line 75
            if ($this->getAttribute($context["button"], "url", array())) {
                // line 76
                echo "              </a>
          ";
            }
            // line 78
            echo "      ";
            if ($this->getAttribute($context["button"], "outerclasses", array(), "any", true, true)) {
                echo "</div>";
            }
            // line 79
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
  ";
        // line 81
        $this->displayBlock('inner_markup_buttons_end', $context, $blocks);
        // line 84
        echo "
  ";
        // line 85
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
</form>
";
    }

    // line 32
    public function block_form_classes($context, array $blocks = array())
    {
        // line 33
        echo "      ";
        if ($this->getAttribute(($context["form"] ?? null), "classes", array())) {
            echo "class=\"";
            echo $this->getAttribute(($context["form"] ?? null), "classes", array());
            echo "\"";
        }
        // line 34
        echo "      ";
    }

    // line 37
    public function block_inner_markup_fields_start($context, array $blocks = array())
    {
    }

    // line 49
    public function block_inner_markup_fields_end($context, array $blocks = array())
    {
    }

    // line 51
    public function block_inner_markup_buttons_start($context, array $blocks = array())
    {
        // line 52
        echo "  <div class=\"buttons\">
  ";
    }

    // line 62
    public function block_button_classes($context, array $blocks = array())
    {
        // line 63
        echo "                class=\"";
        echo (($this->getAttribute(($context["button"] ?? null), "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["button"] ?? null), "classes", array()), "button")) : ("button"));
        echo "\"
                ";
    }

    // line 81
    public function block_inner_markup_buttons_end($context, array $blocks = array())
    {
        // line 82
        echo "  </div>
  ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 82,  356 => 81,  349 => 63,  346 => 62,  341 => 52,  338 => 51,  333 => 49,  328 => 37,  324 => 34,  317 => 33,  314 => 32,  307 => 85,  304 => 84,  302 => 81,  299 => 80,  285 => 79,  280 => 78,  276 => 76,  274 => 75,  269 => 73,  266 => 72,  260 => 70,  258 => 69,  253 => 67,  250 => 66,  245 => 65,  242 => 62,  236 => 61,  233 => 60,  227 => 58,  224 => 57,  217 => 56,  200 => 55,  197 => 54,  195 => 51,  192 => 50,  190 => 49,  187 => 48,  185 => 47,  182 => 46,  168 => 45,  160 => 44,  157 => 43,  154 => 42,  151 => 41,  148 => 40,  131 => 39,  128 => 38,  126 => 37,  122 => 35,  119 => 32,  113 => 31,  107 => 30,  103 => 29,  99 => 28,  96 => 27,  92 => 25,  90 => 24,  87 => 23,  85 => 22,  82 => 21,  75 => 19,  72 => 18,  69 => 17,  65 => 16,  62 => 15,  60 => 14,  58 => 13,  56 => 12,  47 => 9,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{% if form.message %}
    {% if form.inline_errors and form.messages %}
        <div class=\"alert notices {{ form.message_color ?: 'green' }}\"><p>{{ \"FORM.VALIDATION_FAIL\"|t|raw }}</p></div>
    {% else %}
        <div class=\"alert notices {{ form.message_color ?: 'green' }}\"><p>{{ form.message|raw }}</p></div>
    {% endif %}
{% endif %}
{% set scope = scope ?: 'data.' %}
{% set multipart = '' %}
{% set method = form.method|upper|default('POST') %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = form.action ? base_url ~ form.action : base_url ~ page.route ~ uri.params %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' ~ page.slug %}
{% endif %}

<form name=\"{{ form.name }}\"
      action=\"{{ action }}\"
      method=\"{{ method }}\"{{ multipart }}
      {% if form.id %}id=\"{{ form.id }}\"{% endif %}
      {% block form_classes %}
      {% if form.classes %}class=\"{{ form.classes }}\"{% endif %}
      {% endblock %}
>

  {% block inner_markup_fields_start %}{% endblock %}

  {% for field in form.fields %}
    {% if field.type == 'file' %}
        {% do assets.addJs('plugin://form/assets/form.min.js') %}
    {% endif %}
    {% set value = form.value(field.name) %}
    {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
  {% endfor %}

  {% include \"forms/fields/formname/formname.html.twig\" %}

  {% block inner_markup_fields_end %}{% endblock %}

  {% block inner_markup_buttons_start %}
  <div class=\"buttons\">
  {% endblock %}

  {% for button in form.buttons %}
      {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}
          {% if button.url %}
              <a href=\"{{ button.url starts with 'http' ? button.url : url(button.url) }}\">
          {% endif %}
          <button
                {% if button.id %}id=\"{{ button.id }}\"{% endif %}
                {% block button_classes %}
                class=\"{{ button.classes|default('button') }}\"
                {% endblock %}
                {% if button.disabled %}disabled=\"disabled\"{% endif %}

                type=\"{{ button.type|default('submit') }}\"

                {% if button.task %}
                    name=\"task\" value=\"{{ button.task }}\"
                {% endif %}
            >
                {{ button.value|t|default('Submit') }}
          </button>
          {% if button.url %}
              </a>
          {% endif %}
      {% if button.outerclasses is defined %}</div>{% endif %}
  {% endfor %}

  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}

  {{ nonce_field('form', 'form-nonce')|raw }}
</form>
", "forms/default/form.html.twig", "/Users/collin/Sites/website2/user/plugins/form/templates/forms/default/form.html.twig");
    }
}

<?php

/* partials/base.html.twig */
class __TwigTemplate_2dada15deaf29f6a11e443df9d8bb63c8ab2292e76a185894059e26b0b3bfe8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'top' => array($this, 'block_top'),
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

    ";
        // line 9
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css"), "method");
        // line 10
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/main.min.css"), "method");
        // line 11
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 12
        echo "    
      ";
        // line 13
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 15
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery"), "method");
        // line 16
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/navigation.js"), "method");
        // line 17
        echo "
      ";
        // line 18
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

    <link rel=\"icon\" href=\"";
        // line 20
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon.png");
        echo "\">

</head>

<body>
    
";
        // line 26
        $this->displayBlock('top', $context, $blocks);
        // line 49
        echo "
  ";
        // line 50
        $this->displayBlock('main', $context, $blocks);
        // line 58
        echo "
    

  <div class=\"padding-top padding-bottom alternate-background\" id=\"footer\">
  <div class=\"container\">
    <div class=\"row\">
    
    <div class=\"small-50 text-center\">
      <a href=\"https://www.collindaugherty.com/\">Theme <i class=\"fa fa-code\"></i> by Collin Daugherty</a>
    </div>

    <div class=\"small-50 text-center\">
      <ul class=\"clean-list\">
          ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 72
            echo "              <li>
                  <a href=\"";
            // line 73
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">
                      ";
            // line 74
            echo $this->getAttribute($context["page"], "menu", array());
            echo "
                  </a>
              </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "      </ul>
    </div>
  </div>

  </div>
  </div>


</body>
</html>";
    }

    // line 26
    public function block_top($context, array $blocks = array())
    {
        // line 27
        echo "    <section class=\"navigation\">
      <div class=\"nav-container\">
        <div class=\"brand\">
          <a href=\"";
        // line 30
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
              ";
        // line 31
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
        echo "
          </a>
        </div>
        <nav>
          <div class=\"nav-mobile\"><a id=\"nav-toggle\" href=\"#!\"><span></span></a></div>
          <ul class=\"nav-list\">
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 38
            echo "                <li>
                    <a href=\"";
            // line 39
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">
                        ";
            // line 40
            echo $this->getAttribute($context["page"], "menu", array());
            echo "
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "          </ul>
        </nav>
      </div>
    </section>
";
    }

    // line 50
    public function block_main($context, array $blocks = array())
    {
        // line 51
        echo "    <main>

        ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "
    </main>
  ";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        // line 54
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 54,  198 => 53,  192 => 55,  190 => 53,  186 => 51,  183 => 50,  175 => 44,  165 => 40,  161 => 39,  158 => 38,  154 => 37,  145 => 31,  141 => 30,  136 => 27,  133 => 26,  120 => 78,  110 => 74,  106 => 73,  103 => 72,  99 => 71,  84 => 58,  82 => 50,  79 => 49,  77 => 26,  68 => 20,  63 => 18,  60 => 17,  57 => 16,  55 => 15,  50 => 13,  47 => 12,  44 => 11,  41 => 10,  39 => 9,  30 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>{% if header.title %}{{ header.title|e('html')}} - {% endif %}{{ site.title|e('html') }}</title>

    {% do assets.addCss('https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css') %}
    {% do assets.addCss('theme://css/main.min.css') %}
    {% do assets.addCss('theme://css/custom.css') %}
    
      {{ assets.css() }}

    {% do assets.addJs('jquery') %}
    {% do assets.addJs('theme://js/navigation.js') %}

      {{ assets.js() }}

    <link rel=\"icon\" href=\"{{ url('theme://img/favicon.png') }}\">

</head>

<body>
    
{% block top %}
    <section class=\"navigation\">
      <div class=\"nav-container\">
        <div class=\"brand\">
          <a href=\"{{ base_url == '' ? '/' : base_url }}\">
              {{ config.site.title }}
          </a>
        </div>
        <nav>
          <div class=\"nav-mobile\"><a id=\"nav-toggle\" href=\"#!\"><span></span></a></div>
          <ul class=\"nav-list\">
            {% for page in pages.children.visible %}
                <li>
                    <a href=\"{{ page.url }}\">
                        {{ page.menu }}
                    </a>
                </li>
            {% endfor %}
          </ul>
        </nav>
      </div>
    </section>
{% endblock %}

  {% block main %}
    <main>

        {% block content %}
        {% endblock %}

    </main>
  {% endblock %}

    

  <div class=\"padding-top padding-bottom alternate-background\" id=\"footer\">
  <div class=\"container\">
    <div class=\"row\">
    
    <div class=\"small-50 text-center\">
      <a href=\"https://www.collindaugherty.com/\">Theme <i class=\"fa fa-code\"></i> by Collin Daugherty</a>
    </div>

    <div class=\"small-50 text-center\">
      <ul class=\"clean-list\">
          {% for page in pages.children.visible %}
              <li>
                  <a href=\"{{ page.url }}\">
                      {{ page.menu }}
                  </a>
              </li>
          {% endfor %}
      </ul>
    </div>
  </div>

  </div>
  </div>


</body>
</html>", "partials/base.html.twig", "/Users/collin/Sites/website2/user/themes/prime/templates/partials/base.html.twig");
    }
}

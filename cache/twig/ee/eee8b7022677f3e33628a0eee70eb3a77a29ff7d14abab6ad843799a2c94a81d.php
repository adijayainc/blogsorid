<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* featured.html.twig */
class __TwigTemplate_707f78fae94adb6ee69a1f3d361db0818db1213f483bfbce24a100154eff0d2d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->loadTemplate("featured.html.twig", "featured.html.twig", 1, "135424744")->display($context);
    }

    public function getTemplateName()
    {
        return "featured.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}
{% block body %}
<body class=\"post-template page\" itemscope itemtype=\"https://schema.org/WebPage\">
{% endblock %}
{% block header %}{% endblock %}

{% block content %}
    <main id=\"summer-page-container\" class=\"summer-page-container\" role=\"main\">
        <header class=\"summer-page-header\">
            <div class=\"summer-page-menu-header\">
                <a class=\"summer-blog-logo\" href=\"{{ base_url_absolute }}\">
                    <img src=\"{{ base_url_relative }}{{ site.logo }}\" alt=\"Blog Logo\" />
                </a>

                {% include 'partials/navigation.html.twig' %}
            </div>
            <div class=\"summer-page-title row\">
                <div class=\"small-12 columns\">
                    <h1>{{ page.title }}</h1>
                </div>
            </div>
        </header>
        <article class=\"summer-page-content\">
            <div>{% set featured = taxonomy.findTaxonomy({'tag':'featured'}) %}
                <ul class=\"post-list\">
                    {% for post in featured %}
                      <li><article><i class=\"fa fa-star-half-o\"></i> <a href=\"{{ post.url }}\">{{ post.title }} <span class=\"entry-date\"><time datetime=\"{{ post.date | date(site.date_long) }}\">{{ post.date | date(\"d M Y\") }}</time></span></a></article></li>
                  {% endfor %}
              </ul></div>
          </article>
          <div class=\"cf\"></div>
          {% include 'partials/footer.html.twig' %}
      </main>
{% endblock %}
{% block footer %}{% endblock %}
{% endembed %}
", "featured.html.twig", "/var/www/blogs/user/themes/notepad/templates/featured.html.twig");
    }
}


/* featured.html.twig */
class __TwigTemplate_707f78fae94adb6ee69a1f3d361db0818db1213f483bfbce24a100154eff0d2d___135424744 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "featured.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "<body class=\"post-template page\" itemscope itemtype=\"https://schema.org/WebPage\">
";
    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        // line 8
        echo "    <main id=\"summer-page-container\" class=\"summer-page-container\" role=\"main\">
        <header class=\"summer-page-header\">
            <div class=\"summer-page-menu-header\">
                <a class=\"summer-blog-logo\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "logo", []), "html", null, true);
        echo "\" alt=\"Blog Logo\" />
                </a>

                ";
        // line 15
        $this->loadTemplate("partials/navigation.html.twig", "featured.html.twig", 15)->display($context);
        // line 16
        echo "            </div>
            <div class=\"summer-page-title row\">
                <div class=\"small-12 columns\">
                    <h1>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "</h1>
                </div>
            </div>
        </header>
        <article class=\"summer-page-content\">
            <div>";
        // line 24
        $context["featured"] = $this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", [0 => ["tag" => "featured"]], "method");
        // line 25
        echo "                <ul class=\"post-list\">
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["featured"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 27
            echo "                      <li><article><i class=\"fa fa-star-half-o\"></i> <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", []), "html", null, true);
            echo " <span class=\"entry-date\"><time datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", []), $this->getAttribute(($context["site"] ?? null), "date_long", [])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", []), "d M Y"), "html", null, true);
            echo "</time></span></a></article></li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "              </ul></div>
          </article>
          <div class=\"cf\"></div>
          ";
        // line 32
        $this->loadTemplate("partials/footer.html.twig", "featured.html.twig", 32)->display($context);
        // line 33
        echo "      </main>
";
    }

    // line 35
    public function block_footer($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "featured.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 35,  199 => 33,  197 => 32,  192 => 29,  177 => 27,  173 => 26,  170 => 25,  168 => 24,  160 => 19,  155 => 16,  153 => 15,  146 => 12,  142 => 11,  137 => 8,  134 => 7,  129 => 5,  124 => 3,  121 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}
{% block body %}
<body class=\"post-template page\" itemscope itemtype=\"https://schema.org/WebPage\">
{% endblock %}
{% block header %}{% endblock %}

{% block content %}
    <main id=\"summer-page-container\" class=\"summer-page-container\" role=\"main\">
        <header class=\"summer-page-header\">
            <div class=\"summer-page-menu-header\">
                <a class=\"summer-blog-logo\" href=\"{{ base_url_absolute }}\">
                    <img src=\"{{ base_url_relative }}{{ site.logo }}\" alt=\"Blog Logo\" />
                </a>

                {% include 'partials/navigation.html.twig' %}
            </div>
            <div class=\"summer-page-title row\">
                <div class=\"small-12 columns\">
                    <h1>{{ page.title }}</h1>
                </div>
            </div>
        </header>
        <article class=\"summer-page-content\">
            <div>{% set featured = taxonomy.findTaxonomy({'tag':'featured'}) %}
                <ul class=\"post-list\">
                    {% for post in featured %}
                      <li><article><i class=\"fa fa-star-half-o\"></i> <a href=\"{{ post.url }}\">{{ post.title }} <span class=\"entry-date\"><time datetime=\"{{ post.date | date(site.date_long) }}\">{{ post.date | date(\"d M Y\") }}</time></span></a></article></li>
                  {% endfor %}
              </ul></div>
          </article>
          <div class=\"cf\"></div>
          {% include 'partials/footer.html.twig' %}
      </main>
{% endblock %}
{% block footer %}{% endblock %}
{% endembed %}
", "featured.html.twig", "/var/www/blogs/user/themes/notepad/templates/featured.html.twig");
    }
}

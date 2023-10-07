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

/* categories.html.twig */
class __TwigTemplate_363b00c216dd77f75198c805c892cbd32774ea8aa0154555f86581e94114ec9a extends \Twig\Template
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
        $this->loadTemplate("categories.html.twig", "categories.html.twig", 1, "555742349")->display($context);
    }

    public function getTemplateName()
    {
        return "categories.html.twig";
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
        <div>
          {% set tags = taxonomy.taxonomy['tag'] %}

            <ul class=\"tag-box inline\">
              {% for tag, items in tags %}
                <li><a href=\"#{{ tag }}\">{{ tag }} <span>{{ items|length }}</span></a></li>
              {% endfor %}
            </ul>

            {% for tag, items in tags %}
              <article>
                <h2 id=\"{{ tag }}\">{{ tag }}</h2>
                <ul class=\"post-list\">
                  {% for path, slug in items %}
                    {% set post = grav['pages'].get(path) %}
                      {% if post.title != null %}
                        <li><a href=\"{{ post.url }}\" title=\"{{ post.title }}\">{{ post.title }}<span class=\"entry-date\"><time datetime=\"{{ post.date | date(site.date_long) }}\">{{ post.date | date(\"d M Y\") }}</time></a></li>
                      {% endif %}
                    {% endfor %}
                  </ul>
                </article><!-- /.hentry -->
              {% endfor %}

            </div>
          </article>
          <div class=\"cf\"></div>
          {% include 'partials/footer.html.twig' %}
      </main>
{% endblock %}
{% block footer %}{% endblock %}
{% endembed %}
", "categories.html.twig", "/var/www/blogs/user/themes/notepad/templates/categories.html.twig");
    }
}


/* categories.html.twig */
class __TwigTemplate_363b00c216dd77f75198c805c892cbd32774ea8aa0154555f86581e94114ec9a___555742349 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "categories.html.twig", 1);
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
        $this->loadTemplate("partials/navigation.html.twig", "categories.html.twig", 15)->display($context);
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
        <div>
          ";
        // line 25
        $context["tags"] = $this->getAttribute($this->getAttribute(($context["taxonomy"] ?? null), "taxonomy", []), "tag", [], "array");
        // line 26
        echo "
            <ul class=\"tag-box inline\">
              ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["tag"] => $context["items"]) {
            // line 29
            echo "                <li><a href=\"#";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo " <span>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["items"]), "html", null, true);
            echo "</span></a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tag'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </ul>

            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["tag"] => $context["items"]) {
            // line 34
            echo "              <article>
                <h2 id=\"";
            // line 35
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</h2>
                <ul class=\"post-list\">
                  ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["items"]);
            foreach ($context['_seq'] as $context["path"] => $context["slug"]) {
                // line 38
                echo "                    ";
                $context["post"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "pages", [], "array"), "get", [0 => $context["path"]], "method");
                // line 39
                echo "                      ";
                if (($this->getAttribute(($context["post"] ?? null), "title", []) != null)) {
                    // line 40
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "url", []), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", []), "html", null, true);
                    echo "<span class=\"entry-date\"><time datetime=\"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", []), $this->getAttribute(($context["site"] ?? null), "date_long", [])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", []), "d M Y"), "html", null, true);
                    echo "</time></a></li>
                      ";
                }
                // line 42
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['slug'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                  </ul>
                </article><!-- /.hentry -->
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tag'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
            </div>
          </article>
          <div class=\"cf\"></div>
          ";
        // line 50
        $this->loadTemplate("partials/footer.html.twig", "categories.html.twig", 50)->display($context);
        // line 51
        echo "      </main>
";
    }

    // line 53
    public function block_footer($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 53,  274 => 51,  272 => 50,  266 => 46,  258 => 43,  252 => 42,  238 => 40,  235 => 39,  232 => 38,  228 => 37,  221 => 35,  218 => 34,  214 => 33,  210 => 31,  197 => 29,  193 => 28,  189 => 26,  187 => 25,  178 => 19,  173 => 16,  171 => 15,  164 => 12,  160 => 11,  155 => 8,  152 => 7,  147 => 5,  142 => 3,  139 => 2,  30 => 1,);
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
        <div>
          {% set tags = taxonomy.taxonomy['tag'] %}

            <ul class=\"tag-box inline\">
              {% for tag, items in tags %}
                <li><a href=\"#{{ tag }}\">{{ tag }} <span>{{ items|length }}</span></a></li>
              {% endfor %}
            </ul>

            {% for tag, items in tags %}
              <article>
                <h2 id=\"{{ tag }}\">{{ tag }}</h2>
                <ul class=\"post-list\">
                  {% for path, slug in items %}
                    {% set post = grav['pages'].get(path) %}
                      {% if post.title != null %}
                        <li><a href=\"{{ post.url }}\" title=\"{{ post.title }}\">{{ post.title }}<span class=\"entry-date\"><time datetime=\"{{ post.date | date(site.date_long) }}\">{{ post.date | date(\"d M Y\") }}</time></a></li>
                      {% endif %}
                    {% endfor %}
                  </ul>
                </article><!-- /.hentry -->
              {% endfor %}

            </div>
          </article>
          <div class=\"cf\"></div>
          {% include 'partials/footer.html.twig' %}
      </main>
{% endblock %}
{% block footer %}{% endblock %}
{% endembed %}
", "categories.html.twig", "/var/www/blogs/user/themes/notepad/templates/categories.html.twig");
    }
}

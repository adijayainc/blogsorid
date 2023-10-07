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

/* post.html.twig */
class __TwigTemplate_1eec4d70d125c3d6755d6efcbc3bc3b2f667cd43400d3400b27daeaa660b02ba extends \Twig\Template
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
        $this->loadTemplate("post.html.twig", "post.html.twig", 1, "772702770")->display($context);
    }

    public function getTemplateName()
    {
        return "post.html.twig";
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
<body class=\"post-template\" itemscope itemtype=\"https://schema.org/WebPage\">
{% endblock %}
{% block header %}{% endblock %}

{% block content %}
 <main id=\"summer-post-container\" class=\"summer-post-container intro-effect-sliced\" role=\"main\">
  <header class=\"summer-post-header\">
    <div class=\"bg-img\"></div>
    <div class=\"summer-post-menu-header\">
      <a class=\"summer-blog-logo\" href=\"{{ base_url_absolute }}\">
        <img src=\"{{ base_url }}{{ site.logo }}\" alt=\"Blog Logo\" />
      </a>
      {% include 'partials/navigation.html.twig' %}
    </div>
    <div class=\"summer-post-title bg-check\">
      <h1>{{ page.title }}</h1>
      <p>by <strong>{{ site.owner.name }}</strong> &#8212; on {% for tag in page.taxonomy.tag %}<a href=\"{{ base_url_absolute }}/tag:{{ tag }}\" data-toggle=\"tooltip\" title=\"Posts tagged with {{ tag }}\" rel=\"tag\">{{ tag }}</a>{%if not loop.last %}&nbsp;&comma;&nbsp;{% endif %}{% endfor %} <strong><time datetime=\"{{ page.date | date(site.date_long) }}\">{{ page.date | date(\"d M Y\") }}</time></strong></p>
    </div>
    <div class=\"bg-img\"></div>
  </header>

  <button class=\"trigger bg-check\" data-info=\"Read more\"><span>Trigger</span></button>

  {% if page.header.image %}<img src=\"{{ page.media[page.header.image].url }}\" alt=\"cover-image\" />{% endif %}

    <article class=\"summer-post-content post\">
      <div>
        {{ content|raw }}
      </div>
    </article>
    <div class=\"cf\"></div>
    <br />

    {% include 'partials/footer.html.twig' %}
    <div class=\"cf\"></div>
  </main>
{% endblock %}

{% block footer %}{% endblock %}
{% endembed %}
", "post.html.twig", "/var/www/blogs/user/themes/notepad/templates/post.html.twig");
    }
}


/* post.html.twig */
class __TwigTemplate_1eec4d70d125c3d6755d6efcbc3bc3b2f667cd43400d3400b27daeaa660b02ba___772702770 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "post.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "<body class=\"post-template\" itemscope itemtype=\"https://schema.org/WebPage\">
";
    }

    // line 6
    public function block_header($context, array $blocks = [])
    {
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        // line 9
        echo " <main id=\"summer-post-container\" class=\"summer-post-container intro-effect-sliced\" role=\"main\">
  <header class=\"summer-post-header\">
    <div class=\"bg-img\"></div>
    <div class=\"summer-post-menu-header\">
      <a class=\"summer-blog-logo\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "\">
        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "logo", []), "html", null, true);
        echo "\" alt=\"Blog Logo\" />
      </a>
      ";
        // line 16
        $this->loadTemplate("partials/navigation.html.twig", "post.html.twig", 16)->display($context);
        // line 17
        echo "    </div>
    <div class=\"summer-post-title bg-check\">
      <h1>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "</h1>
      <p>by <strong>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "name", []), "html", null, true);
        echo "</strong> &#8212; on ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
            echo "/tag:";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"Posts tagged with ";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "\" rel=\"tag\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</a>";
            if ( !$this->getAttribute($context["loop"], "last", [])) {
                echo "&nbsp;&comma;&nbsp;";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " <strong><time datetime=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), $this->getAttribute(($context["site"] ?? null), "date_long", [])), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "d M Y"), "html", null, true);
        echo "</time></strong></p>
    </div>
    <div class=\"bg-img\"></div>
  </header>

  <button class=\"trigger bg-check\" data-info=\"Read more\"><span>Trigger</span></button>

  ";
        // line 27
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", [])) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", []), [], "array"), "url", []), "html", null, true);
            echo "\" alt=\"cover-image\" />";
        }
        // line 28
        echo "
    <article class=\"summer-post-content post\">
      <div>
        ";
        // line 31
        echo ($context["content"] ?? null);
        echo "
      </div>
    </article>
    <div class=\"cf\"></div>
    <br />

    ";
        // line 37
        $this->loadTemplate("partials/footer.html.twig", "post.html.twig", 37)->display($context);
        // line 38
        echo "    <div class=\"cf\"></div>
  </main>
";
    }

    // line 42
    public function block_footer($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 42,  247 => 38,  245 => 37,  236 => 31,  231 => 28,  225 => 27,  170 => 20,  166 => 19,  162 => 17,  160 => 16,  154 => 14,  150 => 13,  144 => 9,  141 => 8,  136 => 6,  131 => 4,  128 => 3,  30 => 1,);
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
<body class=\"post-template\" itemscope itemtype=\"https://schema.org/WebPage\">
{% endblock %}
{% block header %}{% endblock %}

{% block content %}
 <main id=\"summer-post-container\" class=\"summer-post-container intro-effect-sliced\" role=\"main\">
  <header class=\"summer-post-header\">
    <div class=\"bg-img\"></div>
    <div class=\"summer-post-menu-header\">
      <a class=\"summer-blog-logo\" href=\"{{ base_url_absolute }}\">
        <img src=\"{{ base_url }}{{ site.logo }}\" alt=\"Blog Logo\" />
      </a>
      {% include 'partials/navigation.html.twig' %}
    </div>
    <div class=\"summer-post-title bg-check\">
      <h1>{{ page.title }}</h1>
      <p>by <strong>{{ site.owner.name }}</strong> &#8212; on {% for tag in page.taxonomy.tag %}<a href=\"{{ base_url_absolute }}/tag:{{ tag }}\" data-toggle=\"tooltip\" title=\"Posts tagged with {{ tag }}\" rel=\"tag\">{{ tag }}</a>{%if not loop.last %}&nbsp;&comma;&nbsp;{% endif %}{% endfor %} <strong><time datetime=\"{{ page.date | date(site.date_long) }}\">{{ page.date | date(\"d M Y\") }}</time></strong></p>
    </div>
    <div class=\"bg-img\"></div>
  </header>

  <button class=\"trigger bg-check\" data-info=\"Read more\"><span>Trigger</span></button>

  {% if page.header.image %}<img src=\"{{ page.media[page.header.image].url }}\" alt=\"cover-image\" />{% endif %}

    <article class=\"summer-post-content post\">
      <div>
        {{ content|raw }}
      </div>
    </article>
    <div class=\"cf\"></div>
    <br />

    {% include 'partials/footer.html.twig' %}
    <div class=\"cf\"></div>
  </main>
{% endblock %}

{% block footer %}{% endblock %}
{% endembed %}
", "post.html.twig", "/var/www/blogs/user/themes/notepad/templates/post.html.twig");
    }
}

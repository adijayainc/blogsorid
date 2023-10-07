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

/* page.html.twig */
class __TwigTemplate_c12e864418d072be72f5d460dca9525d45ec89fd1ae6376876df6ee05548a6d9 extends \Twig\Template
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
        $this->loadTemplate("page.html.twig", "page.html.twig", 1, "702160068")->display($context);
    }

    public function getTemplateName()
    {
        return "page.html.twig";
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
                <a class=\"summer-blog-logo\" href=\"{{ basebase_url_absolute_url }}\">
                    <img src=\"{{ base_url }}{{ site.logo }}\" alt=\"Blog Logo\" /></a>
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
            <div>{{ content|raw }}</div>
        </article>
        <div class=\"cf\"></div>
        {% include 'partials/footer.html.twig' %}
    </main>
{% endblock %}

{% block footer %}{% endblock %}
{% endembed %}
", "page.html.twig", "/var/www/blogs/user/themes/notepad/templates/page.html.twig");
    }
}


/* page.html.twig */
class __TwigTemplate_c12e864418d072be72f5d460dca9525d45ec89fd1ae6376876df6ee05548a6d9___702160068 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "page.html.twig", 1);
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
        echo twig_escape_filter($this->env, ($context["basebase_url_absolute_url"] ?? null), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "logo", []), "html", null, true);
        echo "\" alt=\"Blog Logo\" /></a>
                </a>

                ";
        // line 15
        $this->loadTemplate("partials/navigation.html.twig", "page.html.twig", 15)->display($context);
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
        echo ($context["content"] ?? null);
        echo "</div>
        </article>
        <div class=\"cf\"></div>
        ";
        // line 27
        $this->loadTemplate("partials/footer.html.twig", "page.html.twig", 27)->display($context);
        // line 28
        echo "    </main>
";
    }

    // line 31
    public function block_footer($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 31,  172 => 28,  170 => 27,  164 => 24,  156 => 19,  151 => 16,  149 => 15,  142 => 12,  138 => 11,  133 => 8,  130 => 7,  125 => 5,  120 => 3,  117 => 2,  30 => 1,);
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
                <a class=\"summer-blog-logo\" href=\"{{ basebase_url_absolute_url }}\">
                    <img src=\"{{ base_url }}{{ site.logo }}\" alt=\"Blog Logo\" /></a>
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
            <div>{{ content|raw }}</div>
        </article>
        <div class=\"cf\"></div>
        {% include 'partials/footer.html.twig' %}
    </main>
{% endblock %}

{% block footer %}{% endblock %}
{% endembed %}
", "page.html.twig", "/var/www/blogs/user/themes/notepad/templates/page.html.twig");
    }
}

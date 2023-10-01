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

/* partials/pagination.html.twig */
class __TwigTemplate_9c1b38c0e85c611174ec1b148f8af15783c7727ba6ff5468d16150f4b33fa0a3 extends \Twig\Template
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
        if ((($context["base_url"] ?? null) == "")) {
            // line 2
            echo "    ";
            $context["base_url"] = "/";
        }
        // line 4
        echo "<nav class=\"pagination\" role=\"navigation\">
    ";
        // line 5
        if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", [])) {
            // line 6
            echo "        ";
            $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute(($context["pagination"] ?? null), "nextUrl", [])), ["//" => "/"]);
            // line 7
            echo "        <a class=\"older-posts\" href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\">&larr; Older posts</a>
    ";
        }
        // line 9
        echo "    <span class=\"page-number\">Page ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "currentPage", []), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["pagination"] ?? null)), "html", null, true);
        echo "</span>
    ";
        // line 10
        if ($this->getAttribute(($context["pagination"] ?? null), "hasPrev", [])) {
            // line 11
            echo "            ";
            $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute(($context["pagination"] ?? null), "prevUrl", [])), ["//" => "/"]);
            // line 12
            echo "        <a class=\"newer-posts\" href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\">Newer posts &rarr;</a>
    ";
        }
        // line 14
        echo "</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  62 => 12,  59 => 11,  57 => 10,  50 => 9,  44 => 7,  41 => 6,  39 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if base_url == '' %}
    {% set base_url = '/' %}
{% endif %}
<nav class=\"pagination\" role=\"navigation\">
    {% if pagination.hasNext %}
        {% set url = (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
        <a class=\"older-posts\" href=\"{{ url }}\">&larr; Older posts</a>
    {% endif %}
    <span class=\"page-number\">Page {{ uri.currentPage }} of {{ pagination|length }}</span>
    {% if pagination.hasPrev %}
            {% set url = (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
        <a class=\"newer-posts\" href=\"{{ url }}\">Newer posts &rarr;</a>
    {% endif %}
</nav>
", "partials/pagination.html.twig", "/var/www/blogs/user/themes/notepad/templates/partials/pagination.html.twig");
    }
}

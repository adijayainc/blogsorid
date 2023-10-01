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

/* partials/article.html.twig */
class __TwigTemplate_b139b276e859ca4394dc4e2155f12ad117160eb37af4ce8a36656f051ab66427 extends \Twig\Template
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
        echo "<article class=\"summer-index-post post row\">
    <div class=\"small-12 medium-3 large-2 columns datetime\">
        <span class=\"summer-post-meta\">
            <time datetime=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", []), $this->getAttribute(($context["site"] ?? null), "date_long", [])), "html", null, true);
        echo "\">
                <span class=\"day\">
                    ";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", []), "d"), "html", null, true);
        echo "
                </span>
                <span class=\"month-year\">
                    ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", []), "M Y"), "html", null, true);
        echo "
                </span>
            </time>
        </span>
    </div>
    <div class=\"small-12 medium-9 large-10 columns\">
        <header class=\"summer-post-header\">
            ";
        // line 16
        if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "header", []), "link", [])) {
            // line 17
            echo "               <h3 class=\"summer-post-title\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "url", []), "html", null, true);
            echo "\" rel=\"bookmark\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", []), "html", null, true);
            echo "\" itemprop=\"url\"><i class=\"fa fa-angle-double-right\"></i></a> <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "header", []), "link", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", []), "html", null, true);
            echo "</a></h3>
            ";
        } else {
            // line 19
            echo "             <h3 class=\"summer-post-title\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "url", []), "html", null, true);
            echo "\" itemprop=\"url\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", []), "html", null, true);
            echo "</a></h3>
            ";
        }
        // line 21
        echo "        </header>
        <section class=\"summer-post-excerpt\">
           <p>";
        // line 23
        echo Grav\Common\Utils::truncate(strip_tags($this->getAttribute(($context["post"] ?? null), "content", [])), 40);
        echo "</p>
       </section>

       <div class=\"summer-index-post-tags\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["post"] ?? null), "taxonomy", []), "tag", []));
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
            echo "<span class=\"post-tag-";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
            echo "/tag";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []), "html", null, true);
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</a></span>";
            if ( !$this->getAttribute($context["loop"], "last", [])) {
                echo " ";
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
        // line 28
        echo "        </div>

    </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "partials/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 28,  89 => 27,  82 => 23,  78 => 21,  70 => 19,  58 => 17,  56 => 16,  46 => 9,  40 => 6,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"summer-index-post post row\">
    <div class=\"small-12 medium-3 large-2 columns datetime\">
        <span class=\"summer-post-meta\">
            <time datetime=\"{{ post.date | date(site.date_long) }}\">
                <span class=\"day\">
                    {{ post.date | date(\"d\") }}
                </span>
                <span class=\"month-year\">
                    {{ post.date | date(\"M Y\") }}
                </span>
            </time>
        </span>
    </div>
    <div class=\"small-12 medium-9 large-10 columns\">
        <header class=\"summer-post-header\">
            {% if post.header.link %}
               <h3 class=\"summer-post-title\"><a href=\"{{ post.url }}\" rel=\"bookmark\" title=\"{{ post.title }}\" itemprop=\"url\"><i class=\"fa fa-angle-double-right\"></i></a> <a href=\"{{ post.header.link }}\">{{ post.title }}</a></h3>
            {% else %}
             <h3 class=\"summer-post-title\"><a href=\"{{ post.url }}\" itemprop=\"url\">{{ post.title }}</a></h3>
            {% endif %}
        </header>
        <section class=\"summer-post-excerpt\">
           <p>{{ post.content | striptags | truncate(40) |raw }}</p>
       </section>

       <div class=\"summer-index-post-tags\">
        {% for tag in post.taxonomy.tag %}<span class=\"post-tag-{{tag}}\"><a href=\"{{ base_url_absolute }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a></span>{%if not loop.last %} {% endif %}{% endfor %}
        </div>

    </div>
</article>
", "partials/article.html.twig", "/var/www/blogs/user/themes/notepad/templates/partials/article.html.twig");
    }
}

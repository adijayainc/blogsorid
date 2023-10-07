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

/* partials/base.html.twig */
class __TwigTemplate_62bd267516312ebe9ea9b7fed8e750c30a5e96bead6577055bf95426639d8b5a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <!-- (1) Optimize for mobile versions: https://goo.gl/EOpFl -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- (1) force latest IE rendering engine: bit.ly/1c8EiC9 -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        }
        echo "</title>
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <meta name=\"HandheldFriendly\" content=\"True\" />
    <meta name=\"MobileOptimized\" content=\"320\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">

    <link rel=\"canonical\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [], "method"), "html", null, true);
        echo "\">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,latin-ext' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,600&amp;subset=latin,latin-ext' rel='stylesheet'>

    <!-- Icons -->
    <!-- 16x16 -->
    <link rel=\"shortcut icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/favicon.ico\">
    <!-- 32x32 -->
    <link rel=\"shortcut icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/logo.png\">
    <!-- 57x57 (precomposed) for iPhone 3GS, pre-2011 iPod Touch and older Android devices -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/apple-touch-icon-precomposed.png\">
    <!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/apple-touch-icon-72x72-precomposed.png\">
    <!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and post-2011 iPod Touch -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/apple-touch-icon-114x114-precomposed.png\">
    <!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["theme_url"] ?? null), "html", null, true);
        echo "/images/apple-touch-icon-144x144-precomposed.png\">

    ";
        // line 36
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "
    ";
        // line 48
        $this->displayBlock('assets', $context, $blocks);
        // line 51
        echo " </head>
";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "    ";
        $context["home"] = $this->getAttribute(($context["pages"] ?? null), "find", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "home", []), "alias", [])], "method");
        // line 56
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 74
        echo "
        ";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "
        ";
        // line 79
        $this->displayBlock('footer', $context, $blocks);
        // line 82
        echo "
        ";
        // line 83
        $this->loadTemplate("partials/scripts.html.twig", "partials/base.html.twig", 83)->display($context);
        // line 84
        echo "
        ";
        // line 85
        $this->displayBlock('bottom', $context, $blocks);
        // line 89
        echo "    </body>
    </html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 36
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 37
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/font-awesome.min.css"], "method");
        // line 38
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/vendor/normalizeb146.css"], "method");
        // line 39
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/vendor/foundation.minb146.css"], "method");
        // line 40
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/styleb146.css"], "method");
        // line 41
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/postb146.css"], "method");
        // line 42
        echo "    ";
    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        // line 45
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/vendor/modernizrb146.js"], "method");
        // line 46
        echo "    ";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 48
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 49
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        // line 53
        echo "    <body class=\"home-template\" itemscope itemtype=\"https://schema.org/WebPage\">
    ";
    }

    // line 56
    public function block_header($context, array $blocks = [])
    {
        // line 57
        echo "            <header class=\"summer-site-head\">
                <div class=\"summer-site-head-menu\">
                    <a class=\"summer-blog-logo\" href=\"";
        // line 59
        (((($context["base_url"] ?? null) == "")) ? (print ("/")) : (print (twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true))));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "logo", []), "html", null, true);
        echo "\" alt=\"Blog Logo\" /></a>
                    ";
        // line 60
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 60)->display($context);
        // line 61
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"summer-site-head-content\" >
                    <div class=\"summer-site-head-bg\"></div>
                    <h1 class=\"summer-blog-title\">
                        <span class=\"summer-site-head-title-bg\">
                            ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "
                        </span>
                    </h1>
                    <h2 class=\"summer-blog-description\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "description", []), "html", null, true);
        echo "</h2>
                </div>
            </header>
        ";
    }

    // line 75
    public function block_content($context, array $blocks = [])
    {
        // line 76
        echo "            ";
        echo ($context["content"] ?? null);
        echo "
        ";
    }

    // line 79
    public function block_footer($context, array $blocks = [])
    {
        // line 80
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 80)->display($context);
        // line 81
        echo "        ";
    }

    // line 85
    public function block_bottom($context, array $blocks = [])
    {
        // line 86
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
            ";
        // line 87
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
        ";
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
        return array (  282 => 87,  277 => 86,  274 => 85,  270 => 81,  267 => 80,  264 => 79,  257 => 76,  254 => 75,  246 => 70,  240 => 67,  232 => 61,  230 => 60,  223 => 59,  219 => 57,  216 => 56,  211 => 53,  208 => 52,  200 => 49,  197 => 48,  188 => 46,  185 => 45,  182 => 44,  178 => 42,  175 => 41,  172 => 40,  169 => 39,  166 => 38,  163 => 37,  160 => 36,  153 => 89,  151 => 85,  148 => 84,  146 => 83,  143 => 82,  141 => 79,  138 => 78,  136 => 75,  133 => 74,  130 => 56,  127 => 55,  125 => 52,  122 => 51,  120 => 48,  117 => 47,  115 => 44,  112 => 43,  110 => 36,  105 => 34,  100 => 32,  95 => 30,  90 => 28,  85 => 26,  80 => 24,  71 => 18,  63 => 12,  61 => 11,  53 => 10,  42 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
    <meta charset=\"utf-8\">
    <!-- (1) Optimize for mobile versions: https://goo.gl/EOpFl -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- (1) force latest IE rendering engine: bit.ly/1c8EiC9 -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>{% if page.title %}{{ page.title }}{% else %}{{ site.title }}{% endif %}</title>
    {% include 'partials/metadata.html.twig' %}

    <meta name=\"HandheldFriendly\" content=\"True\" />
    <meta name=\"MobileOptimized\" content=\"320\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">

    <link rel=\"canonical\" href=\"{{ page.url() }}\">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,latin-ext' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,600&amp;subset=latin,latin-ext' rel='stylesheet'>

    <!-- Icons -->
    <!-- 16x16 -->
    <link rel=\"shortcut icon\" href=\"{{ theme_url }}/images/favicon.ico\">
    <!-- 32x32 -->
    <link rel=\"shortcut icon\" href=\"{{ theme_url }}/images/logo.png\">
    <!-- 57x57 (precomposed) for iPhone 3GS, pre-2011 iPod Touch and older Android devices -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ theme_url }}/images/apple-touch-icon-precomposed.png\">
    <!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ theme_url }}/images/apple-touch-icon-72x72-precomposed.png\">
    <!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and post-2011 iPod Touch -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ theme_url }}/images/apple-touch-icon-114x114-precomposed.png\">
    <!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ theme_url }}/images/apple-touch-icon-144x144-precomposed.png\">

    {% block stylesheets %}
        {% do assets.addCss('theme://css/font-awesome.min.css') %}
        {% do assets.addCss('theme://css/vendor/normalizeb146.css') %}
        {% do assets.addCss('theme://css/vendor/foundation.minb146.css') %}
        {% do assets.addCss('theme://css/styleb146.css') %}
        {% do assets.addCss('theme://css/postb146.css') %}
    {% endblock %}

    {% block javascripts %}
        {% do assets.addJs('theme://js/vendor/modernizrb146.js') %}
    {% endblock %}

    {% block assets deferred %}
        {{ assets.css()|raw }}
    {% endblock %}
 </head>
{% block body %}
    <body class=\"home-template\" itemscope itemtype=\"https://schema.org/WebPage\">
    {% endblock %}
    {% set home = pages.find(config.system.home.alias) %}
        {% block header %}
            <header class=\"summer-site-head\">
                <div class=\"summer-site-head-menu\">
                    <a class=\"summer-blog-logo\" href=\"{{ base_url == '' ? '/' : base_url }}\"><img src=\"{{ base_url_relative }}{{ site.logo }}\" alt=\"Blog Logo\" /></a>
                    {% include 'partials/navigation.html.twig' %}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"summer-site-head-content\" >
                    <div class=\"summer-site-head-bg\"></div>
                    <h1 class=\"summer-blog-title\">
                        <span class=\"summer-site-head-title-bg\">
                            {{ site.title }}
                        </span>
                    </h1>
                    <h2 class=\"summer-blog-description\">{{ site.description }}</h2>
                </div>
            </header>
        {% endblock %}

        {% block content %}
            {{ content|raw }}
        {% endblock %}

        {% block footer %}
            {% include 'partials/footer.html.twig' %}
        {% endblock %}

        {% include 'partials/scripts.html.twig' %}

        {% block bottom %}
            {{ assets.js()|raw }}
            {{ assets.js('bottom')|raw }}
        {% endblock %}
    </body>
    </html>
", "partials/base.html.twig", "/var/www/blogs/user/themes/notepad/templates/partials/base.html.twig");
    }
    private $deferred;
}

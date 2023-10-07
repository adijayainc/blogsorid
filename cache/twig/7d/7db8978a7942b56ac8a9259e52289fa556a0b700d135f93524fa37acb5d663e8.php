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

/* partials/footer.html.twig */
class __TwigTemplate_e3d38857a296b1b9d8422d657b6fbff73b046a30100c8868cd20118560ee3bc4 extends \Twig\Template
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
        echo "<footer class=\"summer-site-footer\">
    <div class=\"copyright\">
         <section>All content copyright <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["base_url_absolute"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "name", []), "html", null, true);
        echo "</a> &copy; All rights reserved.</section>
         <section>Proudly published with <a class=\"icon-ghost\" href=\"https://jekyllrb.com/\">Grav</a></section>
    </div>
    <div class=\"social-icons\">
        
        ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "twitter", [])) {
            // line 9
            echo "        <a href=\"https://twitter.com/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "twitter", []), "html", null, true);
            echo "\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-twitter fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 16
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "google_plus", [])) {
            // line 17
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "google_plus", []), "html", null, true);
            echo "\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-google-plus fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 24
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "instagram", [])) {
            // line 25
            echo "        <a href=\"https://instagram.com/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "instagram", []), "html", null, true);
            echo "\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-instagram fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 32
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "github", [])) {
            // line 33
            echo "        <a href=\"https://github.com/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "github", []), "html", null, true);
            echo "\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-github fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 40
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "facebook", [])) {
            // line 41
            echo "        <a href=\"https://facebook.com/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "owner", []), "facebook", []), "html", null, true);
            echo "\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-facebook fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 48
        echo "    </div>
    
    <div class=\"cf\"></div>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 48,  102 => 41,  99 => 40,  88 => 33,  85 => 32,  74 => 25,  71 => 24,  60 => 17,  57 => 16,  46 => 9,  44 => 8,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"summer-site-footer\">
    <div class=\"copyright\">
         <section>All content copyright <a href=\"{{ base_url_absolute }}\">{{ site.owner.name }}</a> &copy; All rights reserved.</section>
         <section>Proudly published with <a class=\"icon-ghost\" href=\"https://jekyllrb.com/\">Grav</a></section>
    </div>
    <div class=\"social-icons\">
        
        {% if site.owner.twitter %}
        <a href=\"https://twitter.com/{{ site.owner.twitter }}\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-twitter fa-stack-1x\"></i>
            </span>
        </a>
        {% endif %}
        {% if site.owner.google_plus %}
        <a href=\"{{ site.owner.google_plus }}\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-google-plus fa-stack-1x\"></i>
            </span>
        </a>
        {% endif %}
        {% if site.owner.instagram %}
        <a href=\"https://instagram.com/{{ site.owner.instagram }}\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-instagram fa-stack-1x\"></i>
            </span>
        </a>
        {% endif %}
        {% if site.owner.github %}
        <a href=\"https://github.com/{{ site.owner.github }}\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-github fa-stack-1x\"></i>
            </span>
        </a>
        {% endif %}
        {% if site.owner.facebook %}
        <a href=\"https://facebook.com/{{ site.owner.facebook }}\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-facebook fa-stack-1x\"></i>
            </span>
        </a>
        {% endif %}
    </div>
    
    <div class=\"cf\"></div>
</footer>", "partials/footer.html.twig", "/var/www/blogs/user/themes/notepad/templates/partials/footer.html.twig");
    }
}

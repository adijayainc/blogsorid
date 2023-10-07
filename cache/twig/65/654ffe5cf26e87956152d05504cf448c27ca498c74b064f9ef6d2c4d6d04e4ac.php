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

/* forms/fields/fieldset/fieldset.html.twig */
class __TwigTemplate_65e6f4e6df38d60f362134bf9922c322eb4dc36225ec2053a2305532956ac798 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'contents' => [$this, 'block_contents'],
            'label' => [$this, 'block_label'],
            'actions' => [$this, 'block_actions'],
            'group' => [$this, 'block_group'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/fieldset/fieldset.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        // line 4
        echo "  <div class=\"form-fieldset";
        if (($context["vertical"] ?? null)) {
            echo " vertical";
        }
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
        }
        echo "\">
    ";
        // line 5
        $this->displayBlock('contents', $context, $blocks);
        // line 80
        echo "  </div>
";
    }

    // line 5
    public function block_contents($context, array $blocks = [])
    {
        // line 6
        echo "      <input type=\"checkbox\" class=\"hidden\" id=\"fieldset_collapsible_";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
        echo "\"";
        if (( !$this->getAttribute(($context["field"] ?? null), "collapsible", []) ||  !$this->getAttribute(($context["field"] ?? null), "collapsed", []))) {
            echo " checked=\"checked\"";
        }
        echo " />

      <div class=\"form-label form-fieldset--label\">
        <h2>
          <label";
        // line 10
        if ($this->getAttribute(($context["field"] ?? null), "collapsible", [])) {
            echo " for=\"fieldset_collapsible_";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
            echo "\" class=\"form-fieldset--cursor\"";
        }
        echo ">
            ";
        // line 11
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 12
            echo "            <span class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])), "html", null, true);
            echo "\">
            ";
        }
        // line 14
        echo "            ";
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "          ";
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 25
            echo "          </span>
          ";
        }
        // line 27
        echo "
          ";
        // line 29
        echo "          <span class=\"actions\">
            ";
        // line 30
        $this->displayBlock('actions', $context, $blocks);
        // line 38
        echo "          </span>
        </label>
      </h2>
      </div>
      <div class=\"form-data\"
        ";
        // line 48
        echo "      >

          ";
        // line 50
        $this->displayBlock('group', $context, $blocks);
        // line 78
        echo "      </div>
    ";
    }

    // line 14
    public function block_label($context, array $blocks = [])
    {
        // line 15
        echo "              ";
        if ($this->getAttribute(($context["field"] ?? null), "icon", [])) {
            // line 16
            echo "                <i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "icon", []), "html", null, true);
            echo "\"></i>
              ";
        }
        // line 18
        echo "              ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "title", [])), "html", null, true);
        echo "
              ";
        // line 19
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
              ";
        // line 20
        if ($this->getAttribute(($context["field"] ?? null), "info", [])) {
            // line 21
            echo "                <span class=\"form-fieldset--info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "info", [])), "html", null, true);
            echo "</span>
              ";
        }
        // line 23
        echo "            ";
    }

    // line 30
    public function block_actions($context, array $blocks = [])
    {
        // line 31
        echo "              ";
        if ($this->getAttribute(($context["field"] ?? null), "collapsible", [])) {
            // line 32
            echo "                <span class=\"form-fieldset--collapsible\">
                  <i class=\"fa fa-chevron-down open\"></i>
                  <i class=\"fa fa-chevron-up close\"></i>
                </span>
              ";
        }
        // line 37
        echo "            ";
    }

    // line 50
    public function block_group($context, array $blocks = [])
    {
        // line 51
        echo "              ";
        if ($this->getAttribute(($context["field"] ?? null), "text", [])) {
            // line 52
            echo "                ";
            echo (($this->getAttribute(($context["field"] ?? null), "markdown", [])) ? ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "text", [])))) : ((("<p>" . $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "text", []))) . "</p>")));
            echo "
              ";
        }
        // line 54
        echo "
              ";
        // line 55
        if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
            // line 56
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "fields", []));
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
            foreach ($context['_seq'] as $context["child_name"] => $context["child"]) {
                // line 57
                echo "                      ";
                $context["child"] = $this->env->getExtension('Grav\Plugin\Form\TwigExtension')->prepareFormField($context, $context["child"], $context["child_name"], $this->getAttribute(($context["field"] ?? null), "name", []), ["key" => ($context["key"] ?? null)]);
                // line 58
                echo "                      ";
                if ($context["child"]) {
                    // line 59
                    echo "                        ";
                    $context["default_layout"] = "text";
                    // line 60
                    echo "                        ";
                    if ((($this->getAttribute($context["child"], "type", []) == "key") || ($this->getAttribute($context["child"], "key", []) == true))) {
                        // line 61
                        echo "                            ";
                        // line 62
                        echo "                            ";
                        $context["default_layout"] = "key";
                        // line 63
                        echo "                            ";
                        $context["child_value"] = ($context["key"] ?? null);
                        // line 64
                        echo "                        ";
                    } elseif (($this->getAttribute($context["child"], "name", []) == "value")) {
                        // line 65
                        echo "                            ";
                        // line 66
                        echo "                            ";
                        $context["child"] = twig_array_merge($context["child"], ["name" => $this->getAttribute(($context["field"] ?? null), "name", [])]);
                        // line 67
                        echo "                            ";
                        $context["child_value"] = ($context["value"] ?? null);
                        // line 68
                        echo "                        ";
                    } else {
                        // line 69
                        echo "                          ";
                        $context["child_value"] = ((($context["form"] ?? null)) ? ($this->getAttribute(($context["form"] ?? null), "value", [0 => $this->getAttribute($context["child"], "name", [])], "method")) : ($this->getAttribute(($context["data"] ?? null), "value", [0 => $this->getAttribute($context["child"], "name", [])], "method")));
                        // line 70
                        echo "                        ";
                    }
                    // line 71
                    echo "
                        ";
                    // line 72
                    $context["field_templates"] = $this->env->getExtension('Grav\Plugin\Form\TwigExtension')->includeFormField($this->getAttribute($context["child"], "type", []), ($context["field_layout"] ?? null), ($context["default_layout"] ?? null));
                    // line 73
                    echo "                        ";
                    $this->loadTemplate(($context["field_templates"] ?? null), "forms/fields/fieldset/fieldset.html.twig", 73)->display(twig_array_merge($context, ["field" => $context["child"], "value" => ($context["child_value"] ?? null), "originalValue" => null]));
                    // line 74
                    echo "                      ";
                }
                // line 75
                echo "                  ";
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
            unset($context['_seq'], $context['_iterated'], $context['child_name'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "              ";
        }
        // line 77
        echo "          ";
    }

    public function getTemplateName()
    {
        return "forms/fields/fieldset/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 77,  281 => 76,  267 => 75,  264 => 74,  261 => 73,  259 => 72,  256 => 71,  253 => 70,  250 => 69,  247 => 68,  244 => 67,  241 => 66,  239 => 65,  236 => 64,  233 => 63,  230 => 62,  228 => 61,  225 => 60,  222 => 59,  219 => 58,  216 => 57,  198 => 56,  196 => 55,  193 => 54,  187 => 52,  184 => 51,  181 => 50,  177 => 37,  170 => 32,  167 => 31,  164 => 30,  160 => 23,  154 => 21,  152 => 20,  148 => 19,  143 => 18,  137 => 16,  134 => 15,  131 => 14,  126 => 78,  124 => 50,  120 => 48,  113 => 38,  111 => 30,  108 => 29,  105 => 27,  101 => 25,  98 => 24,  95 => 14,  89 => 12,  87 => 11,  79 => 10,  67 => 6,  64 => 5,  59 => 80,  57 => 5,  46 => 4,  43 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
  <div class=\"form-fieldset{% if vertical %} vertical{% endif %}{% if field.classes is defined %} {{ field.classes }}{% endif %}\">
    {% block contents %}
      <input type=\"checkbox\" class=\"hidden\" id=\"fieldset_collapsible_{{ field.name }}\"{% if not field.collapsible or not field.collapsed %} checked=\"checked\"{% endif %} />

      <div class=\"form-label form-fieldset--label\">
        <h2>
          <label{% if field.collapsible %} for=\"fieldset_collapsible_{{ field.name }}\" class=\"form-fieldset--cursor\"{% endif %}>
            {% if field.help %}
            <span class=\"hint--bottom\" data-hint=\"{{ field.help|t }}\">
            {% endif %}
            {% block label %}
              {% if field.icon %}
                <i class=\"fa fa-fw fa-{{ field.icon }}\"></i>
              {% endif %}
              {{ field.title|t }}
              {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
              {% if field.info %}
                <span class=\"form-fieldset--info\">{{ field.info|t }}</span>
              {% endif %}
            {% endblock %}
          {% if field.help %}
          </span>
          {% endif %}

          {# Actions panel #}
          <span class=\"actions\">
            {% block actions %}
              {% if field.collapsible %}
                <span class=\"form-fieldset--collapsible\">
                  <i class=\"fa fa-chevron-down open\"></i>
                  <i class=\"fa fa-chevron-up close\"></i>
                </span>
              {% endif %}
            {% endblock %}
          </span>
        </label>
      </h2>
      </div>
      <div class=\"form-data\"
        {#{% block global_attributes %}
          data-grav-field=\"{{ field.type }}\"
          data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
          data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
        {% endblock %}#}
      >

          {% block group %}
              {% if field.text %}
                {{ field.markdown ? field.text|t|markdown : ('<p>' ~ field.text|t ~ '</p>')|raw }}
              {% endif %}

              {% if field.fields %}
                  {% for child_name, child in field.fields %}
                      {% set child = prepare_form_field(child, child_name, field.name, {key: key}) %}
                      {% if child %}
                        {% set default_layout = 'text' %}
                        {% if child.type == 'key' or child.key == true %}
                            {# Special handling for the key field #}
                            {% set default_layout = 'key' %}
                            {% set child_value = key %}
                        {% elseif child.name == 'value' %}
                            {# Special handling for the value field #}
                            {% set child = child|merge({ name: field.name }) %}
                            {% set child_value = value %}
                        {% else %}
                          {% set child_value = form ? form.value(child.name) : data.value(child.name) %}
                        {% endif %}

                        {% set field_templates = include_form_field(child.type, field_layout, default_layout) %}
                        {% include field_templates with { field: child, value: child_value, originalValue: null } %}
                      {% endif %}
                  {% endfor %}
              {% endif %}
          {% endblock %}
      </div>
    {% endblock %}
  </div>
{% endblock %}
", "forms/fields/fieldset/fieldset.html.twig", "/var/www/blogs/user/plugins/admin/themes/grav/templates/forms/fields/fieldset/fieldset.html.twig");
    }
}

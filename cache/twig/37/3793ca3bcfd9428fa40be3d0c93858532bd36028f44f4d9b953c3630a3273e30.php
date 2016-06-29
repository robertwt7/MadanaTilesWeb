<?php

/* forms/fields/pages/pages.html.twig */
class __TwigTemplate_ab5a6e71f2b9afa57a0220f07d4eb73cb2e41865db6edd79b34d1e66fda023bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/pages/pages.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 32
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 33
        echo "    data-grav-selectize=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array(), "any", true, true)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array())) : (array()))), "html_attr");
        echo "\"
    data-grav-field=\"select\"
    data-grav-disabled=\"";
        // line 35
        echo (((null === (isset($context["originalValue"]) ? $context["originalValue"] : null))) ? ("true") : ("false"));
        echo "\"
    data-grav-default=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())), "html_attr");
        echo "\"
";
    }

    // line 39
    public function block_input($context, array $blocks = array())
    {
        // line 40
        echo "    <div class=\"form-select-wrapper ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo "\">
        <select class=\"";
        // line 41
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array());
        echo "\" name=\"";
        echo ($this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))) . (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array())) ? ("[]") : ("")));
        echo "\"
                ";
        // line 42
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 43
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 44
        echo "                ";
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 45
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "multiple=\"multiple\"";
        }
        // line 46
        echo "                >
            ";
        // line 47
        echo $this->getAttribute($this, "options", array(0 => (isset($context["field"]) ? $context["field"] : null), 1 => (isset($context["pages"]) ? $context["pages"] : null), 2 => (isset($context["value"]) ? $context["value"] : null), 3 => 0), "method");
        echo "
        </select>
    </div>
";
    }

    // line 3
    public function getoptions($__field__ = null, $__pages__ = null, $__value__ = null, $__depth__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "pages" => $__pages__,
            "value" => $__value__,
            "depth" => $__depth__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "
    ";
            // line 5
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()) && ((isset($context["depth"]) ? $context["depth"] : null) == 0))) {
                // line 6
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 7
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html_attr");
                    echo "\">";
                    echo $this->env->getExtension('GravTwigExtension')->translate($context["value"]);
                    echo "</option>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "    ";
            }
            // line 10
            echo "    
    ";
            // line 11
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "show_root", array()) && ((isset($context["depth"]) ? $context["depth"] : null) == 0))) {
                // line 12
                echo "        <option value=\"/\">/ (Root)</option>
        ";
                // line 13
                $context["depth"] = ((isset($context["depth"]) ? $context["depth"] : null) + 1);
                // line 14
                echo "    ";
            }
            // line 15
            echo "
    ";
            // line 16
            $context["indent"] = ((((isset($context["depth"]) ? $context["depth"] : null) == 0)) ? ("") : (($this->env->getExtension('GravTwigExtension')->repeatFunc("-", (isset($context["depth"]) ? $context["depth"] : null)) . " ")));
            // line 17
            echo "
    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 19
                echo "        ";
                if (($this->getAttribute($context["page"], "routable", array(), "method") || $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "show_all", array()))) {
                    // line 20
                    echo "            <option ";
                    if (($this->getAttribute($context["page"], "route", array()) == (isset($context["value"]) ? $context["value"] : null))) {
                        echo "selected=\"selected\"";
                    }
                    echo " value=\"";
                    echo $this->getAttribute($context["page"], "route", array());
                    echo "\">
                ";
                    // line 21
                    echo (isset($context["indent"]) ? $context["indent"] : null);
                    echo " ";
                    echo $this->getAttribute($context["page"], "menu", array());
                    echo "
            </option>
        ";
                }
                // line 24
                echo "        ";
                if (((twig_length_filter($this->env, $this->getAttribute($context["page"], "children", array())) > 0) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "show_modular", array()) ||  !$this->getAttribute($context["page"], "modular", array(), "method")))) {
                    // line 25
                    echo "
            ";
                    // line 26
                    echo $this->getAttribute($this, "options", array(0 => (isset($context["field"]) ? $context["field"] : null), 1 => $context["page"], 2 => (isset($context["value"]) ? $context["value"] : null), 3 => ((isset($context["depth"]) ? $context["depth"] : null) + 1)), "method");
                    echo "

        ";
                }
                // line 29
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/pages/pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 29,  182 => 26,  179 => 25,  176 => 24,  168 => 21,  159 => 20,  156 => 19,  152 => 18,  149 => 17,  147 => 16,  144 => 15,  141 => 14,  139 => 13,  136 => 12,  134 => 11,  131 => 10,  128 => 9,  117 => 7,  112 => 6,  110 => 5,  107 => 4,  92 => 3,  84 => 47,  81 => 46,  76 => 45,  71 => 44,  66 => 43,  62 => 42,  56 => 41,  51 => 40,  48 => 39,  42 => 36,  38 => 35,  32 => 33,  29 => 32,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* */
/* {% macro options(field, pages, value, depth) %}*/
/* */
/*     {% if field.options and depth == 0 %}*/
/*         {% for key, value in field.options %}*/
/*             <option value="{{ key|e('html_attr') }}">{{ value|t }}</option>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     */
/*     {% if field.show_root and depth == 0 %}*/
/*         <option value="/">/ (Root)</option>*/
/*         {% set depth = depth +1 %}*/
/*     {% endif %}*/
/* */
/*     {% set indent = depth == 0 ? '' : repeat('-',depth) ~ ' ' %}*/
/* */
/*     {% for page in pages.children %}*/
/*         {% if page.routable() or field.show_all  %}*/
/*             <option {% if page.route == value %}selected="selected"{% endif %} value="{{ page.route }}">*/
/*                 {{indent}} {{ page.menu }}*/
/*             </option>*/
/*         {% endif %}*/
/*         {% if page.children|length > 0 and (field.show_modular or not page.modular()) %}*/
/* */
/*             {{ _self.options(field, page,value, depth + 1) }}*/
/* */
/*         {% endif %}*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* {% block global_attributes %}*/
/*     data-grav-selectize="{{ (field.selectize is defined ? field.selectize : {})|json_encode()|e('html_attr') }}"*/
/*     data-grav-field="select"*/
/*     data-grav-disabled="{{ originalValue is null ? 'true' : 'false' }}"*/
/*     data-grav-default="{{ field.default|json_encode()|e('html_attr') }}"*/
/* {% endblock %}*/
/* */
/* {% block input %}*/
/*     <div class="form-select-wrapper {{ field.size }}">*/
/*         <select class="{{ field.classes }}" name="{{ (scope ~ field.name)|fieldName ~ (field.multiple ? '[]' : '') }}"*/
/*                 {% if field.autofocus in ['on', 'true', 1] %}autofocus="autofocus"{% endif %}*/
/*                 {% if field.novalidate in ['on', 'true', 1] %}novalidate="novalidate"{% endif %}*/
/*                 {% if field.validate.required in ['on', 'true', 1] %}required="required"{% endif %}*/
/*                 {% if field.multiple in ['on', 'true', 1] %}multiple="multiple"{% endif %}*/
/*                 >*/
/*             {{ _self.options(field,pages,value, 0) }}*/
/*         </select>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */

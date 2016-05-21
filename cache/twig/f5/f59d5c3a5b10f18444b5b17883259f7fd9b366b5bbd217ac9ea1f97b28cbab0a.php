<?php

/* forms/fields/toggle/toggle.html.twig */
class __TwigTemplate_cb3ad29d47b940cb9a4eb08f76c00b21ef80baa877c5bfad9fb6867d0f1606a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/toggle/toggle.html.twig", 1);
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
        // line 3
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 4
        $context["value"] = ((((isset($context["value"]) ? $context["value"] : null) === false)) ? (0) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 6
        $context["has_hidden"] = false;
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 8
            if (twig_test_empty($context["key"])) {
                // line 9
                $context["has_hidden"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
    data-grav-field-name=\"";
        // line 15
        echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()));
        echo "\"
";
    }

    // line 22
    public function block_input($context, array $blocks = array())
    {
        // line 23
        echo "
    <div class=\"switch-toggle switch-grav ";
        // line 24
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo " switch-";
        echo twig_length_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        echo "\">
        ";
        // line 25
        $context["maxLen"] = 0;
        // line 26
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 27
            echo "            ";
            $context["translation"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) ? ($this->env->getExtension('AdminTwigExtension')->tuFilter($context["text"])) : ($this->env->getExtension('GravTwigExtension')->translate($context["text"])));
            // line 28
            echo "            ";
            $context["maxLen"] = max(twig_length_filter($this->env, (isset($context["translation"]) ? $context["translation"] : null)), (isset($context["maxLen"]) ? $context["maxLen"] : null));
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 32
            echo "            ";
            $context["id"] = (("toggle_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())) . $context["key"]);
            // line 33
            echo "            ";
            $context["translation"] = trim((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) ? ($this->env->getExtension('AdminTwigExtension')->tuFilter($context["text"])) : ($this->env->getExtension('GravTwigExtension')->translate($context["text"]))));
            // line 34
            echo "
            <input type=\"radio\"
                value=\"";
            // line 36
            echo $context["key"];
            echo "\"
                id=\"";
            // line 37
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\"
                name=\"";
            // line 38
            echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
            echo "\"
                ";
            // line 39
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "highlight", array(), "any", true, true)) {
                // line 40
                echo "                class=\"";
                echo ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "highlight", array()) == ("" . $context["key"]))) ? ("highlight") : (""));
                echo "\"
                ";
            }
            // line 42
            echo "                ";
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "toggleable", array())) {
                // line 43
                echo "                    ";
                if ((("" . $context["key"]) == ("" . (isset($context["value"]) ? $context["value"] : null)))) {
                    echo "checked=\"checked\" ";
                }
                // line 44
                echo "                    ";
                if ((array_key_exists("value", $context) && (($context["key"] == 1) || ($context["key"] == "1")))) {
                    echo "checked=\"checked\" ";
                }
                // line 45
                echo "                ";
            } else {
                // line 46
                echo "                    ";
                if ((("" . $context["key"]) == ("" . (isset($context["value"]) ? $context["value"] : null)))) {
                    echo "checked=\"checked\" ";
                }
                // line 47
                echo "                ";
            }
            // line 48
            echo "                ";
            if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                echo "required=\"required\"";
            }
            // line 49
            echo "            />
            <label for=\"";
            // line 50
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\">";
            echo trim($this->getAttribute($this, "spanToggle", array(0 => (isset($context["translation"]) ? $context["translation"] : null), 1 => (isset($context["maxLen"]) ? $context["maxLen"] : null)), "method"));
            echo "</label>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        <a></a>
    </div>
";
    }

    // line 18
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 19
            echo "    ";
            echo (($this->env->getExtension('GravTwigExtension')->repeatFunc("&nbsp;&nbsp;", (((isset($context["length"]) ? $context["length"] : null) - twig_length_filter($this->env, (isset($context["input"]) ? $context["input"] : null))) / 2)) . (isset($context["input"]) ? $context["input"] : null)) . $this->env->getExtension('GravTwigExtension')->repeatFunc("&nbsp;&nbsp;", (((isset($context["length"]) ? $context["length"] : null) - twig_length_filter($this->env, (isset($context["input"]) ? $context["input"] : null))) / 2)));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/toggle/toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 19,  179 => 18,  173 => 52,  163 => 50,  160 => 49,  155 => 48,  152 => 47,  147 => 46,  144 => 45,  139 => 44,  134 => 43,  131 => 42,  125 => 40,  123 => 39,  119 => 38,  115 => 37,  111 => 36,  107 => 34,  104 => 33,  101 => 32,  97 => 31,  94 => 30,  88 => 29,  85 => 28,  82 => 27,  77 => 26,  75 => 25,  69 => 24,  66 => 23,  63 => 22,  57 => 15,  52 => 14,  49 => 13,  45 => 1,  38 => 9,  36 => 8,  32 => 7,  30 => 6,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* */
/* {% set value = (value is null ? field.default : value) %}*/
/* {% set value = (value is same as(false) ? 0 : value) %}*/
/* */
/* {% set has_hidden = false %}*/
/* {% for key, text in field.options %}*/
/*     {% if key is empty %}*/
/*       {% set has_hidden = true %}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
/* {% block global_attributes %}*/
/*     {{ parent() }}*/
/*     data-grav-field-name="{{ field.name|fieldName }}"*/
/* {% endblock %}*/
/* */
/* {% macro spanToggle(input, length) %}*/
/*     {{ repeat('&nbsp;&nbsp;', (length - input|length) / 2) ~ input ~ repeat('&nbsp;&nbsp;', (length - input|length) / 2) }}*/
/* {% endmacro %}*/
/* */
/* {% block input %}*/
/* */
/*     <div class="switch-toggle switch-grav {{ field.size }} switch-{{ field.options|length }}">*/
/*         {% set maxLen = 0 %}*/
/*         {% for text in field.options %}*/
/*             {% set translation = grav.twig.twig.filters['tu'] is defined ? text|tu : text|t %}*/
/*             {% set maxLen = max(translation|length, maxLen) %}*/
/*         {% endfor %}*/
/* */
/*         {% for key, text in field.options %}*/
/*             {% set id = "toggle_" ~ field.name ~ key %}*/
/*             {% set translation = (grav.twig.twig.filters['tu'] is defined ? text|tu : text|t)|trim %}*/
/* */
/*             <input type="radio"*/
/*                 value="{{ key }}"*/
/*                 id="{{ id }}"*/
/*                 name="{{ (scope ~ field.name)|fieldName }}"*/
/*                 {% if field.highlight is defined %}*/
/*                 class="{{ field.highlight == '' ~ key ? 'highlight' : '' }}"*/
/*                 {% endif %}*/
/*                 {% if field.toggleable %}*/
/*                     {% if '' ~ key == '' ~ value %}checked="checked" {% endif %}*/
/*                     {% if value is defined and (key == 1 or key == '1') %}checked="checked" {% endif %}*/
/*                 {% else %}*/
/*                     {% if '' ~ key == '' ~ value %}checked="checked" {% endif %}*/
/*                 {% endif %}*/
/*                 {% if field.validate.required in ['on', 'true', 1] %}required="required"{% endif %}*/
/*             />*/
/*             <label for="{{ id }}">{{ _self.spanToggle(translation, maxLen)|trim }}</label>*/
/*         {% endfor %}*/
/*         <a></a>*/
/*     </div>*/
/* {% endblock %}*/
/* */

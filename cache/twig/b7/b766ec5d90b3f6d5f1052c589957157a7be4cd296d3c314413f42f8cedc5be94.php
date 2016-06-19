<?php

/* forms/fields/select/select.html.twig */
class __TwigTemplate_03284cdf50eeebb268b1f90b528f9ad9e6de1a1864281e2ecac434cc4d414074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/select/select.html.twig", 1);
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

    // line 3
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 4
        echo "    data-grav-selectize=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array(), "any", true, true)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array())) : (array()))), "html_attr");
        echo "\"
    ";
        // line 5
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_input($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"form-select-wrapper ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo "\">
        <select name=\"";
        // line 10
        echo ($this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))) . (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array())) ? ("[]") : ("")));
        echo "\"
                ";
        // line 11
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array(), "any", true, true)) {
            echo "class=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array());
            echo "\" ";
        }
        // line 12
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
            echo "\" ";
        }
        // line 13
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array()));
            echo "\" ";
        }
        // line 14
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array())) {
            echo "disabled=\"disabled\"";
        }
        // line 15
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 16
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 17
        echo "                ";
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 18
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "multiple=\"multiple\"";
        }
        // line 19
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "form", array())) {
            echo "form=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "form", array());
            echo "\"";
        }
        // line 20
        echo "                >
            ";
        // line 21
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array())) {
            echo "<option value=\"\" disabled selected>";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array());
            echo "</option>";
        }
        // line 22
        echo "
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 24
            echo "            <option ";
            if ((($context["key"] == (isset($context["value"]) ? $context["value"] : null)) || ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array()) && twig_in_filter($context["text"], (isset($context["value"]) ? $context["value"] : null))))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array())) ? ($context["text"]) : ($context["key"]));
            echo "\">";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter($context["text"]);
            } else {
                echo $this->env->getExtension('GravTwigExtension')->translate($context["text"]);
            }
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </select>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/select/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 26,  123 => 24,  119 => 23,  116 => 22,  110 => 21,  107 => 20,  100 => 19,  95 => 18,  90 => 17,  85 => 16,  80 => 15,  75 => 14,  68 => 13,  61 => 12,  55 => 11,  51 => 10,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* */
/* {% block global_attributes %}*/
/*     data-grav-selectize="{{ (field.selectize is defined ? field.selectize : {})|json_encode()|e('html_attr') }}"*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block input %}*/
/*     <div class="form-select-wrapper {{ field.size }}">*/
/*         <select name="{{ (scope ~ field.name)|fieldName ~ (field.multiple ? '[]' : '') }}"*/
/*                 {% if field.classes is defined %}class="{{ field.classes }}" {% endif %}*/
/*                 {% if field.id is defined %}id="{{ field.id|e }}" {% endif %}*/
/*                 {% if field.style is defined %}style="{{ field.style|e }}" {% endif %}*/
/*                 {% if field.disabled %}disabled="disabled"{% endif %}*/
/*                 {% if field.autofocus in ['on', 'true', 1] %}autofocus="autofocus"{% endif %}*/
/*                 {% if field.novalidate in ['on', 'true', 1] %}novalidate="novalidate"{% endif %}*/
/*                 {% if field.validate.required in ['on', 'true', 1] %}required="required"{% endif %}*/
/*                 {% if field.multiple in ['on', 'true', 1] %}multiple="multiple"{% endif %}*/
/*                 {% if field.form %}form="{{ field.form }}"{% endif %}*/
/*                 >*/
/*             {% if field.placeholder %}<option value="" disabled selected>{{ field.placeholder}}</option>{% endif %}*/
/* */
/*             {% for key, text in field.options %}*/
/*             <option {% if key == value or (field.multiple and text in value) %}selected="selected"{% endif %} value="{{ field.multiple ? text : key }}">{% if grav.twig.twig.filters['tu'] is defined %}{{ text|tu }}{% else %}{{ text|t }}{% endif %}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*     </div>*/
/* {% endblock %}*/
/* */

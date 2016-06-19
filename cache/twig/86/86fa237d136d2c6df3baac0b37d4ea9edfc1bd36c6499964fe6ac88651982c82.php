<?php

/* forms/fields/dateformat/dateformat.html.twig */
class __TwigTemplate_a4a63f20f9b6067ad2ba810ce2efabc39a7b429cc223134b2d3283ce66a2d5b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/dateformat/dateformat.html.twig", 1);
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
    data-grav-field=\"select\"
    ";
        // line 6
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_input($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"form-select-wrapper ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo "\">
        <select class=\"";
        // line 11
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array());
        echo "\" name=\"";
        echo ($this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))) . (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array())) ? ("[]") : ("")));
        echo "\"
                ";
        // line 12
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 13
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 14
        echo "                ";
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 15
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "multiple=\"multiple\"";
        }
        // line 16
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "form", array())) {
            echo "form=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "form", array());
            echo "\"";
        }
        // line 17
        echo "                >
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 19
            echo "            <option ";
            if ((($context["key"] == (isset($context["value"]) ? $context["value"] : null)) || twig_in_filter($context["text"], (isset($context["value"]) ? $context["value"] : null)))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array())) ? ($context["text"]) : ($context["key"]));
            echo "\">";
            echo ((twig_test_empty($context["key"])) ? ($context["text"]) : (twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", $context["key"]))));
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </select>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/dateformat/dateformat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 21,  91 => 19,  87 => 18,  84 => 17,  77 => 16,  72 => 15,  67 => 14,  62 => 13,  58 => 12,  52 => 11,  47 => 10,  44 => 9,  38 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* */
/* {% block global_attributes %}*/
/*     data-grav-selectize="{{ (field.selectize is defined ? field.selectize : {})|json_encode()|e('html_attr') }}"*/
/*     data-grav-field="select"*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block input %}*/
/*     <div class="form-select-wrapper {{ field.size }}">*/
/*         <select class="{{ field.classes }}" name="{{ (scope ~ field.name)|fieldName ~ (field.multiple ? '[]' : '') }}"*/
/*                 {% if field.autofocus in ['on', 'true', 1] %}autofocus="autofocus"{% endif %}*/
/*                 {% if field.novalidate in ['on', 'true', 1] %}novalidate="novalidate"{% endif %}*/
/*                 {% if field.validate.required in ['on', 'true', 1] %}required="required"{% endif %}*/
/*                 {% if field.multiple in ['on', 'true', 1] %}multiple="multiple"{% endif %}*/
/*                 {% if field.form %}form="{{ field.form }}"{% endif %}*/
/*                 >*/
/*             {% for key, text in field.options %}*/
/*             <option {% if key == value or text in value %}selected="selected"{% endif %} value="{{ field.multiple ? text : key }}">{{ key is empty ? text : "now"|date(key)|e }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*     </div>*/
/* {% endblock %}*/
/* */

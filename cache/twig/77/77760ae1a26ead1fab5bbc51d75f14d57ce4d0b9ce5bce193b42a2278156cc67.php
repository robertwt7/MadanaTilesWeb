<?php

/* forms/fields/datetime/datetime.html.twig */
class __TwigTemplate_7ca2a114250fbbfe48f656eed089bf5e13ebf7c8eb3a5908a0a0dd56fa5d172c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/datetime/datetime.html.twig", 1);
        $this->blocks = array(
            'input_attributes' => array($this, 'block_input_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["default_php_dateformat"] = "d-m-Y H:i";
        // line 4
        $context["php_dateformat"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "dateformat", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "dateformat", array()), "default", array())) : ((isset($context["default_php_dateformat"]) ? $context["default_php_dateformat"] : null)));
        // line 5
        $context["js_dateformat"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "dateformat2Kendo", array(0 => (isset($context["php_dateformat"]) ? $context["php_dateformat"] : null)), "method");
        // line 6
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 7
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ((isset($context["value"]) ? $context["value"] : null)) : (twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : null), (isset($context["php_dateformat"]) ? $context["php_dateformat"] : null))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 11
        echo "    type=\"text\"
    data-grav-field-datetime
    data-date-formats=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("format" => (isset($context["js_dateformat"]) ? $context["js_dateformat"] : null))), "html_attr");
        echo "\"
    ";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "min", array())) {
            echo "min=\"";
            echo (((null === $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "min", array()))) ? ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "min", array())) : (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "min", array()), (isset($context["php_dateformat"]) ? $context["php_dateformat"] : null))));
            echo "\"";
        }
        // line 15
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "max", array())) {
            echo "max=\"";
            echo (((null === $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "max", array()))) ? ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "max", array())) : (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "max", array()), (isset($context["php_dateformat"]) ? $context["php_dateformat"] : null))));
            echo "\"";
        }
        // line 16
        echo "    ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/datetime/datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  56 => 15,  50 => 14,  46 => 13,  42 => 11,  39 => 10,  35 => 1,  33 => 7,  31 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* */
/* {% set default_php_dateformat = "d-m-Y H:i" %}*/
/* {% set php_dateformat = config.system.pages.dateformat.default ?: default_php_dateformat %}*/
/* {% set js_dateformat = admin.dateformat2Kendo(php_dateformat) %}*/
/* {% set value = (value is null ? field.default : value) %}*/
/* {% set value = (value is null ? value : value|date(php_dateformat)) %}*/
/* */
/* */
/* {% block input_attributes %}*/
/*     type="text"*/
/*     data-grav-field-datetime*/
/*     data-date-formats="{{ {'format': js_dateformat} | json_encode | e('html_attr') }}"*/
/*     {% if field.validate.min %}min="{{ (field.validate.min is null ? field.validate.min : field.validate.min|date(php_dateformat)) }}"{% endif %}*/
/*     {% if field.validate.max %}max="{{ (field.validate.max is null ? field.validate.max : field.validate.max|date(php_dateformat)) }}"{% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */

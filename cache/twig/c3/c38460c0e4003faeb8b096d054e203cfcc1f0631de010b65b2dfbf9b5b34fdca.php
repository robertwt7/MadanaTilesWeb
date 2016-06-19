<?php

/* forms/fields/themeselect/themeselect.html.twig */
class __TwigTemplate_acb220e14b086ab0d52e586893e6d83a1bf38c21a9700f6d3493e3dbb3d7a776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/themeselect/themeselect.html.twig", 1);
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
        $context["options"] = array();
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "themes", array()));
        foreach ($context['_seq'] as $context["slug"] => $context["package"]) {
            // line 5
            $context["option"] = array($context["slug"] => $this->getAttribute($this->getAttribute($context["package"], "toArray", array(), "method"), "name", array()));
            // line 6
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), (isset($context["option"]) ? $context["option"] : null));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 10
        echo "    data-grav-selectize=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array(), "any", true, true)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array())) : (array()))), "html_attr");
        echo "\"
    data-grav-field=\"select\"
    data-grav-disabled=\"";
        // line 12
        echo (((null === (isset($context["originalValue"]) ? $context["originalValue"] : null))) ? ("true") : ("false"));
        echo "\"
    data-grav-default=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())), "html_attr");
        echo "\"
";
    }

    // line 16
    public function block_input($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"form-select-wrapper ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo "\">
        <select class=\"";
        // line 18
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array());
        echo "\" name=\"";
        echo ($this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))) . (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array())) ? ("[]") : ("")));
        echo "\"
                ";
        // line 19
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 20
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 21
        echo "                ";
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 22
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "multiple=\"multiple\"";
        }
        // line 23
        echo "                >
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 25
            echo "                <option ";
            if ((($context["key"] == (isset($context["value"]) ? $context["value"] : null)) || twig_in_filter($context["text"], (isset($context["value"]) ? $context["value"] : null)))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array())) ? ($context["text"]) : ($context["key"]));
            echo "\">";
            echo $context["text"];
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </select>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/themeselect/themeselect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 27,  103 => 25,  99 => 24,  96 => 23,  91 => 22,  86 => 21,  81 => 20,  77 => 19,  71 => 18,  66 => 17,  63 => 16,  57 => 13,  53 => 12,  47 => 10,  44 => 9,  40 => 1,  34 => 6,  32 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* */
/* {% set options = {} %}*/
/* {% for slug, package in admin.themes %}*/
/*     {% set option = {(slug): package.toArray().name} %}*/
/*     {% set options = options|merge(option) %}*/
/* {% endfor %}*/
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
/*             {% for key, text in options %}*/
/*                 <option {% if key == value or text in value %}selected="selected"{% endif %} value="{{ field.multiple ? text : key }}">{{ text }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */

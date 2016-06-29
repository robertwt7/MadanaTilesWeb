<?php

/* forms/fields/textarea/textarea.html.twig */
class __TwigTemplate_cc9309d18ec7cc509671549a70d89092de863fddba3ef61ef15279a04efa460e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/textarea/textarea.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
            'input_attributes' => array($this, 'block_input_attributes'),
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
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"form-textarea-wrapper ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo "\">
        <textarea
            class=\" form-control ";
        // line 6
        echo (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array()), "input")) : ("input"));
        echo "\"

            ";
        // line 9
        echo "            name=\"";
        echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        echo "\"
            ";
        // line 11
        echo "            ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 27
        echo "            >";
        echo twig_escape_filter($this->env, trim((isset($context["value"]) ? $context["value"] : null)), "html");
        echo "</textarea>
    </div>
";
    }

    // line 11
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 12
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array(), "any", true, true)) {
            echo "class=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array());
            echo "\" ";
        }
        // line 13
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
            echo "\" ";
        }
        // line 14
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array()));
            echo "\" ";
        }
        // line 15
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array())) {
            echo "disabled=\"disabled\"";
        }
        // line 16
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array())) {
            echo "placeholder=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array());
            echo "\"";
        }
        // line 17
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 18
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 19
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 20
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array());
            echo "\"";
        }
        // line 21
        echo "                ";
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 22
        echo "                ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array())) {
            echo "pattern=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array());
            echo "\"";
        }
        // line 23
        echo "                ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())) {
            echo "title=\"";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                echo call_user_func_array($this->env->getFilter('tu')->getCallable(), array(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array()))));
            } else {
                echo $this->env->getExtension('GravTwigExtension')->translate(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())));
            }
            echo "\"";
        }
        // line 24
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "rows", array(), "any", true, true)) {
            echo "rows=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "rows", array());
            echo "\"";
        }
        // line 25
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "cols", array(), "any", true, true)) {
            echo "cols=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "cols", array());
            echo "\"";
        }
        // line 26
        echo "            ";
    }

    public function getTemplateName()
    {
        return "forms/fields/textarea/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 26,  147 => 25,  140 => 24,  129 => 23,  122 => 22,  117 => 21,  110 => 20,  105 => 19,  100 => 18,  95 => 17,  88 => 16,  83 => 15,  76 => 14,  69 => 13,  62 => 12,  59 => 11,  51 => 27,  48 => 11,  43 => 9,  38 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* */
/* {% block input %}*/
/*     <div class="form-textarea-wrapper {{ field.size }}">*/
/*         <textarea*/
/*             class=" form-control {{ field.classes|default('input') }}"*/
/* */
/*             {# required attribute structures #}*/
/*             name="{{ (scope ~ field.name)|fieldName }}"*/
/*             {# input attribute structures #}*/
/*             {% block input_attributes %}*/
/*                 {% if field.classes is defined %}class="{{ field.classes }}" {% endif %}*/
/*                 {% if field.id is defined %}id="{{ field.id|e }}" {% endif %}*/
/*                 {% if field.style is defined %}style="{{ field.style|e }}" {% endif %}*/
/*                 {% if field.disabled %}disabled="disabled"{% endif %}*/
/*                 {% if field.placeholder %}placeholder="{{ field.placeholder }}"{% endif %}*/
/*                 {% if field.autofocus in ['on', 'true', 1] %}autofocus="autofocus"{% endif %}*/
/*                 {% if field.novalidate in ['on', 'true', 1] %}novalidate="novalidate"{% endif %}*/
/*                 {% if field.readonly in ['on', 'true', 1] %}readonly="readonly"{% endif %}*/
/*                 {% if field.autocomplete in ['on', 'off'] %}autocomplete="{{ field.autocomplete }}"{% endif %}*/
/*                 {% if field.validate.required in ['on', 'true', 1] %}required="required"{% endif %}*/
/*                 {% if field.validate.pattern %}pattern="{{ field.validate.pattern }}"{% endif %}*/
/*                 {% if field.validate.message %}title="{% if grav.twig.twig.filters['tu'] is defined %}{{ field.validate.message|e|tu }}{% else %}{{ field.validate.message|e|t }}{% endif %}"{% endif %}*/
/*                 {% if field.rows is defined %}rows="{{ field.rows }}"{% endif %}*/
/*                 {% if field.cols is defined %}cols="{{ field.cols }}"{% endif %}*/
/*             {% endblock %}*/
/*             >{{ value|trim|e('html') }}</textarea>*/
/*     </div>*/
/* {% endblock %}*/
/* */

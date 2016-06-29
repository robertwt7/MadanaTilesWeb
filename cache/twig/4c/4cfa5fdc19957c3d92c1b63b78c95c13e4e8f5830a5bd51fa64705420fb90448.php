<?php

/* forms/fields/array/array.html.twig */
class __TwigTemplate_bfbdbadfa4f3c7b1b80c580344653a74b0034abcc20b292e63a8c81f10a59f86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/array/array.html.twig", 1);
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
        echo "    data-grav-array-name=\"";
        echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()));
        echo "\"
    data-grav-array-keyname=\"";
        // line 5
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder_key", array())));
        echo "\"
    data-grav-array-valuename=\"";
        // line 6
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder_value", array())));
        echo "\"
    ";
        // line 7
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_input($context, array $blocks = array())
    {
        // line 11
        echo "    <div data-grav-array-type=\"container\"";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value_only", array())) {
            echo " data-grav-array-mode=\"value_only\"";
        }
        echo ">
        ";
        // line 12
        if (twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null))) {
            // line 13
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["text"]) {
                // line 14
                echo "<div class=\"form-row";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value_only", array())) {
                    echo " array-field-value_only";
                }
                echo "\" data-grav-array-type=\"row\">

                    ";
                // line 16
                if (twig_test_iterable($context["text"])) {
                    // line 17
                    echo "                        <div class=\"grid\" style=\"display: flex\">
                            <div class=\"block size-1-4\">
                                <input data-grav-array-type=\"keyArray\" type=\"text\" value=\"";
                    // line 19
                    echo $context["key"];
                    echo "\" placeholder=\"";
                    echo $this->env->getExtension('AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder_key", array())));
                    echo "\" style=\"float: none; width: 90%\" />
                            </div>

                            <div class=\"block size-3-4\">
                                ";
                    // line 23
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["text"]);
                    foreach ($context['_seq'] as $context["subkey"] => $context["subtext"]) {
                        // line 24
                        echo "<div class=\"form-row\" data-grav-array-type=\"subrow\">
                                        <input data-grav-array-type=\"keyArraySubelement\" type=\"text\" value=\"";
                        // line 25
                        echo $context["subkey"];
                        echo "\" />
                                        <input data-grav-array-type=\"value\" type=\"text\" subkey=\"";
                        // line 26
                        echo $context["subkey"];
                        echo "\" name=\"";
                        echo ((((($this->env->getExtension('GravTwigExtension')->fieldNameFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())) . "[") . $context["key"]) . "][") . $context["subkey"]) . "]");
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, twig_join_filter($context["subtext"], ", "));
                        echo "\" />

                                        <span data-grav-array-action=\"remArrayItem\" class=\"fa fa-minus-square\"></span>
                                        <span data-grav-array-action=\"addArrayItem\" class=\"fa fa-plus-square\"></span>
                                    </div>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['subkey'], $context['subtext'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "
                                <div class=\"form-row";
                    // line 33
                    if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value_only", array())) {
                        echo " array-field-value_only";
                    }
                    echo "\" data-grav-array-type=\"subrow\">
                                    <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
                                    <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
                                </div>
                            </div>
                        </div>
                    ";
                } else {
                    // line 40
                    echo "                        ";
                    if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value_only", array()) != true)) {
                        // line 41
                        echo "                            ";
                        if ((($context["key"] == "0") && ($context["text"] == ""))) {
                            // line 42
                            echo "                                ";
                            $context["key"] = "";
                            // line 43
                            echo "                            ";
                        }
                        // line 44
                        echo "
                            <input data-grav-array-type=\"key\" type=\"text\" value=\"";
                        // line 45
                        echo $context["key"];
                        echo "\" placeholder=\"";
                        echo $this->env->getExtension('AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder_key", array())));
                        echo "\" />
                        ";
                    }
                    // line 47
                    echo "
                        <input data-grav-array-type=\"value\" type=\"text\" name=\"";
                    // line 48
                    echo ((($this->env->getExtension('GravTwigExtension')->fieldNameFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())) . "[") . $context["key"]) . "]");
                    echo "\" value=";
                    if (($context["text"] == "true")) {
                        echo "true";
                    } elseif (($context["text"] == "false")) {
                        echo "false";
                    } else {
                        echo "\"";
                        echo twig_escape_filter($this->env, twig_join_filter($context["text"], ", "));
                        echo "\"";
                    }
                    echo " placeholder=\"";
                    echo $this->env->getExtension('AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder_value", array())));
                    echo "\" />

                        <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
                        <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
                    ";
                }
                // line 53
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 56
            echo "<div class=\"form-row\" data-grav-array-type=\"row\">
                <input data-grav-array-type=\"key\" type=\"text\" placeholder=\"";
            // line 57
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder_key", array())));
            echo "\" />
                <input data-grav-array-type=\"value\" type=\"text\" placeholder=\"";
            // line 58
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder_value", array())));
            echo "\" />
                <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
                <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
            </div>";
        }
        // line 63
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/array/array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 63,  193 => 58,  189 => 57,  186 => 56,  178 => 53,  158 => 48,  155 => 47,  148 => 45,  145 => 44,  142 => 43,  139 => 42,  136 => 41,  133 => 40,  121 => 33,  118 => 32,  102 => 26,  98 => 25,  95 => 24,  91 => 23,  82 => 19,  78 => 17,  76 => 16,  68 => 14,  63 => 13,  61 => 12,  54 => 11,  51 => 10,  45 => 7,  41 => 6,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* */
/* {% block global_attributes %}*/
/*     data-grav-array-name="{{ field.name|fieldName }}"*/
/*     data-grav-array-keyname="{{ field.placeholder_key|e|tu }}"*/
/*     data-grav-array-valuename="{{ field.placeholder_value|e|tu }}"*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block input %}*/
/*     <div data-grav-array-type="container"{% if field.value_only %} data-grav-array-mode="value_only"{% endif %}>*/
/*         {% if value|length %}*/
/*             {% for key, text in value -%}*/
/*                 <div class="form-row{% if field.value_only %} array-field-value_only{% endif %}" data-grav-array-type="row">*/
/* */
/*                     {% if text is iterable %}*/
/*                         <div class="grid" style="display: flex">*/
/*                             <div class="block size-1-4">*/
/*                                 <input data-grav-array-type="keyArray" type="text" value="{{ key }}" placeholder="{{ field.placeholder_key|e|tu }}" style="float: none; width: 90%" />*/
/*                             </div>*/
/* */
/*                             <div class="block size-3-4">*/
/*                                 {% for subkey, subtext in text -%}*/
/*                                     <div class="form-row" data-grav-array-type="subrow">*/
/*                                         <input data-grav-array-type="keyArraySubelement" type="text" value="{{ subkey }}" />*/
/*                                         <input data-grav-array-type="value" type="text" subkey="{{ subkey }}" name="{{ (field.name|fieldName) ~ '[' ~ key ~ '][' ~ subkey ~ ']'  }}" value="{{ subtext|join(', ')|e }}" />*/
/* */
/*                                         <span data-grav-array-action="remArrayItem" class="fa fa-minus-square"></span>*/
/*                                         <span data-grav-array-action="addArrayItem" class="fa fa-plus-square"></span>*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/* */
/*                                 <div class="form-row{% if field.value_only %} array-field-value_only{% endif %}" data-grav-array-type="subrow">*/
/*                                     <span data-grav-array-action="rem" class="fa fa-minus"></span>*/
/*                                     <span data-grav-array-action="add" class="fa fa-plus"></span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         {% if field.value_only != true %}*/
/*                             {% if key == '0' and text == '' %}*/
/*                                 {% set key = '' %}*/
/*                             {% endif %}*/
/* */
/*                             <input data-grav-array-type="key" type="text" value="{{ key }}" placeholder="{{ field.placeholder_key|e|tu }}" />*/
/*                         {% endif %}*/
/* */
/*                         <input data-grav-array-type="value" type="text" name="{{ (field.name|fieldName) ~ '[' ~ key ~ ']'  }}" value={% if text == 'true' %}true{% elseif text == 'false' %}false{% else %}"{{ text|join(', ')|e }}"{% endif %} placeholder="{{ field.placeholder_value|e|tu }}" />*/
/* */
/*                         <span data-grav-array-action="rem" class="fa fa-minus"></span>*/
/*                         <span data-grav-array-action="add" class="fa fa-plus"></span>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {%- else -%}*/
/*             <div class="form-row" data-grav-array-type="row">*/
/*                 <input data-grav-array-type="key" type="text" placeholder="{{ field.placeholder_key|e|tu }}" />*/
/*                 <input data-grav-array-type="value" type="text" placeholder="{{ field.placeholder_value|e|tu }}" />*/
/*                 <span data-grav-array-action="rem" class="fa fa-minus"></span>*/
/*                 <span data-grav-array-action="add" class="fa fa-plus"></span>*/
/*             </div>*/
/*         {%- endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */

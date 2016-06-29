<?php

/* forms/fields/order/order.html.twig */
class __TwigTemplate_4609c806266ae74896e83f122033214f1604e30f641a04f504b2e1e7d0d7e28f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        $context["siblings"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "parent", array()), "children", array()), "visible", array());
        // line 3
        echo "

<div class=\"form-field grid pure-g\">
    <div class=\"form-label block size-1-3 pure-u-1-3\">
        <label>
            ";
        // line 8
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) {
            // line 9
            echo "            <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())));
            echo "\">";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()));
            echo "</span>
            ";
        } else {
            // line 11
            echo "            ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()));
            echo "
            ";
        }
        // line 13
        echo "            ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
        </label>
    </div>
    <div class=\"form-data block size-2-3 pure-u-2-3\">
        <div class=\"form-order-wrapper ";
        // line 17
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo "\">
            <input type=\"hidden\" data-order name=\"";
        // line 18
        echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        echo "\" value=\"";
        echo (isset($context["value"]) ? $context["value"] : null);
        echo "\" />
            ";
        // line 19
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "parent", array()), "header", array()), "content", array()), "items", array())) {
            // line 20
            echo "                <span class=\"note\">Parent setting order, ordering disabled</span>
            ";
        } elseif ( !$this->getAttribute(        // line 21
(isset($context["data"]) ? $context["data"] : null), "visible", array())) {
            // line 22
            echo "                <span class=\"note\">Page is not visible, ordering disabled</span>
            ";
        }
        // line 24
        echo "
            ";
        // line 25
        if ((twig_length_filter($this->env, (isset($context["siblings"]) ? $context["siblings"] : null)) < 200)) {
            // line 26
            echo "\t\t\t\t<ul id=\"ordering\" class=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array());
            echo "\">
\t\t\t    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["siblings"]) ? $context["siblings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 28
                echo "\t\t\t\t\t<li class=\"";
                if (($this->getAttribute($context["page"], "order", array()) == (isset($context["value"]) ? $context["value"] : null))) {
                    echo "drag-handle";
                } else {
                    echo "ignore";
                }
                echo "\" data-id=\"";
                echo $this->getAttribute($context["page"], "slug", array());
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()));
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t\t\t</ul>
\t\t\t";
        } else {
            // line 32
            echo "                <span class=\"note\">Ordering via the admin is unsupported because there are more than 200 siblings</span>
\t\t\t";
        }
        // line 34
        echo "        </div>
    </div>
    <script>
        jQuery(function(){
            var el = jQuery('#ordering');
            new Sortable(el[0], {
                filter: \".ignore\",
                onUpdate: function(evt){
                    var index = el.children().index(jQuery(evt.item)) + 1;
                    jQuery('[data-order]').val(index);
                }
                // draggable: \".drag-handle\"
            });
        });
    </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/order/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  110 => 32,  106 => 30,  89 => 28,  85 => 27,  80 => 26,  78 => 25,  75 => 24,  71 => 22,  69 => 21,  66 => 20,  64 => 19,  58 => 18,  54 => 17,  46 => 13,  40 => 11,  32 => 9,  30 => 8,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set value = (value is null ? field.default : value) %}*/
/* {% set siblings = data.parent.children.visible %}*/
/* */
/* */
/* <div class="form-field grid pure-g">*/
/*     <div class="form-label block size-1-3 pure-u-1-3">*/
/*         <label>*/
/*             {% if field.help %}*/
/*             <span class="tooltip" data-asTooltip-position="w" title="{{ field.help|e|tu }}">{{ field.label|tu }}</span>*/
/*             {% else %}*/
/*             {{ field.label|tu }}*/
/*             {% endif %}*/
/*             {{ field.validate.required in ['on', 'true', 1] ? '<span class="required">*</span>' }}*/
/*         </label>*/
/*     </div>*/
/*     <div class="form-data block size-2-3 pure-u-2-3">*/
/*         <div class="form-order-wrapper {{ field.size }}">*/
/*             <input type="hidden" data-order name="{{ (scope ~ field.name)|fieldName }}" value="{{ value }}" />*/
/*             {% if data.parent.header.content.items %}*/
/*                 <span class="note">Parent setting order, ordering disabled</span>*/
/*             {% elseif not data.visible %}*/
/*                 <span class="note">Page is not visible, ordering disabled</span>*/
/*             {% endif %}*/
/* */
/*             {% if siblings|length < 200 %}*/
/* 				<ul id="ordering" class="{{ field.classes }}">*/
/* 			    {% for page in siblings %}*/
/* 					<li class="{% if page.order  == value %}drag-handle{% else %}ignore{% endif %}" data-id="{{ page.slug }}">{{ page.title|e }}</li>*/
/*                 {% endfor %}*/
/* 				</ul>*/
/* 			{% else %}*/
/*                 <span class="note">Ordering via the admin is unsupported because there are more than 200 siblings</span>*/
/* 			{% endif %}*/
/*         </div>*/
/*     </div>*/
/*     <script>*/
/*         jQuery(function(){*/
/*             var el = jQuery('#ordering');*/
/*             new Sortable(el[0], {*/
/*                 filter: ".ignore",*/
/*                 onUpdate: function(evt){*/
/*                     var index = el.children().index(jQuery(evt.item)) + 1;*/
/*                     jQuery('[data-order]').val(index);*/
/*                 }*/
/*                 // draggable: ".drag-handle"*/
/*             });*/
/*         });*/
/*     </script>*/
/* </div>*/
/* */

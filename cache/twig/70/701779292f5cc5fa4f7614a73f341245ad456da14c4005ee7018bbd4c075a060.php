<?php

/* partials/page-move.html.twig */
class __TwigTemplate_801cdd8a7ce12dcb297743e85a71220ce663bba30b6df0c53beb0acc2b1b59e5 extends Twig_Template
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
        $context["form_id"] = (((isset($context["form_id"]) ? $context["form_id"] : null)) ? ((isset($context["form_id"]) ? $context["form_id"] : null)) : ("blueprints"));
        // line 2
        echo "
<form id=\"";
        // line 3
        echo (isset($context["form_id"]) ? $context["form_id"] : null);
        echo "\" method=\"post\" data-grav-form=\"";
        echo (isset($context["form_id"]) ? $context["form_id"] : null);
        echo "\" data-page-move>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blueprints"]) ? $context["blueprints"] : null), "fields", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 5
            echo "        ";
            if ($this->getAttribute($context["field"], "type", array())) {
                // line 6
                echo "            ";
                $context["value"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                // line 7
                echo "            <div class=\"block block-";
                echo $this->getAttribute($context["field"], "type", array());
                echo "\">
                ";
                // line 8
                $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "partials/page-move.html.twig", 8)->display($context);
                // line 9
                echo "            </div>
        ";
            }
            // line 11
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    <div class=\"button-bar\">
        <a class=\"button secondary remodal-cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 14
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL");
        echo "</a>
        <button class=\"button primary\" name=\"task\" value=\"save\" form=\"blueprints\">";
        // line 15
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE");
        echo "</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "partials/page-move.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 15,  82 => 14,  78 => 12,  64 => 11,  60 => 9,  58 => 8,  53 => 7,  50 => 6,  47 => 5,  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set form_id = form_id ? form_id : 'blueprints' %}*/
/* */
/* <form id="{{ form_id }}" method="post" data-grav-form="{{ form_id }}" data-page-move>*/
/*     {% for field in blueprints.fields %}*/
/*         {% if field.type %}*/
/*             {% set value = data.value(field.name) %}*/
/*             <div class="block block-{{field.type}}">*/
/*                 {% include ["forms/fields/#{field.type}/#{field.type}.html.twig", 'forms/fields/text/text.html.twig'] %}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     <div class="button-bar">*/
/*         <a class="button secondary remodal-cancel" href="#"><i class="fa fa-fw fa-close"></i> {{ "PLUGIN_ADMIN.CANCEL"|tu }}</a>*/
/*         <button class="button primary" name="task" value="save" form="blueprints">{{ "PLUGIN_ADMIN.CONTINUE"|tu }}</button>*/
/*     </div>*/
/* </form>*/
/* */

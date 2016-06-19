<?php

/* forms/fields/tabs/tabs.html.twig */
class __TwigTemplate_2525d8d6f304b438f7f75587b620e59de25e6d542370df61e395f169edea5803 extends Twig_Template
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
        echo "<div class=\"form-tabs\">

";
        // line 3
        if ($this->getAttribute($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "params", array()), "tab", array())) {
            // line 4
            echo "    ";
            $context["active"] = $this->getAttribute($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "params", array()), "tab", array());
        } elseif ($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "active", array())) {
            // line 6
            echo "    ";
            $context["active"] = $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "active", array());
        } else {
            // line 8
            echo "    ";
            $context["active"] = 1;
        }
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 13
                echo "        ";
                if (($this->getAttribute($context["tab"], "type", array()) == "tab")) {
                    // line 14
                    echo "        <input type=\"radio\" name=\"tab\" id=\"tab";
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" class=\"tab-head\" ";
                    echo ((((isset($context["active"]) ? $context["active"] : null) == $this->getAttribute($context["loop"], "index", array()))) ? ("checked=\"checked\"") : (""));
                    echo "/>
        <label for=\"tab";
                    // line 15
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\">
            ";
                    // line 16
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                        echo $this->env->getExtension('AdminTwigExtension')->tuFilter($this->getAttribute($context["tab"], "title", array()));
                    } else {
                        echo $this->env->getExtension('GravTwigExtension')->translate($this->getAttribute($context["tab"], "title", array()));
                    }
                    // line 17
                    echo "        </label>
        ";
                }
                // line 19
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    <div class=\"tab-body-wrapper\">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "fields", array()));
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
                // line 22
                echo "            ";
                if (($this->getAttribute($context["field"], "type", array()) == "tab")) {
                    // line 23
                    echo "                ";
                    $context["value"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                    // line 24
                    echo "                <div id=\"tab-body-";
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" class=\"tab-body\">
                    ";
                    // line 25
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/tabs/tabs.html.twig", 25)->display($context);
                    // line 26
                    echo "                </div>
            ";
                }
                // line 28
                echo "        ";
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
            // line 29
            echo "    </div>
";
        }
        // line 31
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "forms/fields/tabs/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 31,  150 => 29,  136 => 28,  132 => 26,  130 => 25,  125 => 24,  122 => 23,  119 => 22,  102 => 21,  99 => 20,  85 => 19,  81 => 17,  75 => 16,  71 => 15,  64 => 14,  61 => 13,  43 => 12,  41 => 11,  38 => 10,  34 => 8,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="form-tabs">*/
/* */
/* {% if uri.params.tab %}*/
/*     {% set active = uri.params.tab %}*/
/* {% elseif field.active %}*/
/*     {% set active = field.active %}*/
/* {% else %}*/
/*     {% set active = 1 %}*/
/* {% endif %}*/
/* */
/* {% if field.fields %}*/
/*     {% for tab in field.fields %}*/
/*         {% if tab.type == 'tab' %}*/
/*         <input type="radio" name="tab" id="tab{{ loop.index }}" class="tab-head" {{ active == loop.index ? 'checked="checked"' : '' }}/>*/
/*         <label for="tab{{ loop.index }}">*/
/*             {% if grav.twig.twig.filters['tu'] is defined %}{{ tab.title|tu }}{% else %}{{ tab.title|t }}{% endif %}*/
/*         </label>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/*     <div class="tab-body-wrapper">*/
/*         {% for field in field.fields %}*/
/*             {% if field.type == 'tab' %}*/
/*                 {% set value = data.value(field.name) %}*/
/*                 <div id="tab-body-{{ loop.index }}" class="tab-body">*/
/*                     {% include ["forms/fields/#{field.type}/#{field.type}.html.twig", 'forms/fields/text/text.html.twig'] %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endif %}*/
/* </div>*/
/* */
/* */

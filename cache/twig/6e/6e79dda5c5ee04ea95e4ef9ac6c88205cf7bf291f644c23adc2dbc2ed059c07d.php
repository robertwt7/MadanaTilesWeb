<?php

/* partials/blueprints.html.twig */
class __TwigTemplate_d52dba7c0a63966be6d08d1d6f932ae133fcc42c0a6281943af9d6b203242a8a extends Twig_Template
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
";
        // line 3
        $context["multipart"] = "";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blueprints"]) ? $context["blueprints"] : null), "fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 5
            echo "    ";
            if (($this->getAttribute($context["field"], "type", array()) == "file")) {
                // line 6
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 7
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
<form id=\"";
        // line 10
        echo (isset($context["form_id"]) ? $context["form_id"] : null);
        echo "\" method=\"post\" data-grav-form=\"";
        echo (isset($context["form_id"]) ? $context["form_id"] : null);
        echo "\" data-grav-keepalive=\"true\"";
        echo (isset($context["multipart"]) ? $context["multipart"] : null);
        echo ">
    ";
        // line 11
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
            // line 12
            echo "        ";
            if ($this->getAttribute($context["field"], "type", array())) {
                // line 13
                echo "            ";
                $context["value"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                // line 14
                echo "
            <div class=\"block block-";
                // line 15
                echo $this->getAttribute($context["field"], "type", array());
                echo "\">
                ";
                // line 16
                $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "partials/blueprints.html.twig", 16)->display($context);
                // line 17
                echo "            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    ";
        // line 21
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "extra", array())) {
            // line 22
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "extra", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 23
                echo "        ";
                if (!twig_in_filter($context["name"], array(0 => "_json", 1 => "task", 2 => "admin-nonce"))) {
                    // line 24
                    echo "            ";
                    $context["field"] = array("name" => ("_json." . $context["name"]));
                    // line 25
                    echo "            ";
                    $context["value"] = twig_escape_filter($this->env, twig_jsonencode_filter($context["value"]));
                    // line 26
                    echo "            ";
                    $this->loadTemplate("forms/fields/hidden/hidden.html.twig", "partials/blueprints.html.twig", 26)->display($context);
                    // line 27
                    echo "        ";
                }
                // line 28
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
        // line 30
        echo "
    ";
        // line 31
        echo $this->env->getExtension('GravTwigExtension')->nonceFieldFunc("admin-form", "admin-nonce");
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "partials/blueprints.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 31,  159 => 30,  156 => 29,  142 => 28,  139 => 27,  136 => 26,  133 => 25,  130 => 24,  127 => 23,  109 => 22,  107 => 21,  104 => 20,  90 => 19,  86 => 17,  84 => 16,  80 => 15,  77 => 14,  74 => 13,  71 => 12,  54 => 11,  46 => 10,  43 => 9,  36 => 7,  33 => 6,  30 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set form_id = form_id ? form_id : 'blueprints' %}*/
/* */
/* {% set multipart = '' %}*/
/* {% for field in blueprints.fields %}*/
/*     {% if field.type == 'file' %}*/
/*         {% set multipart = ' enctype="multipart/form-data"' %}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
/* <form id="{{ form_id }}" method="post" data-grav-form="{{ form_id }}" data-grav-keepalive="true"{{ multipart }}>*/
/*     {% for field in blueprints.fields %}*/
/*         {% if field.type %}*/
/*             {% set value = data.value(field.name) %}*/
/* */
/*             <div class="block block-{{ field.type }}">*/
/*                 {% include ["forms/fields/#{field.type}/#{field.type}.html.twig", 'forms/fields/text/text.html.twig'] %}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {% if data.extra %}*/
/*     {% for name, value in data.extra %}*/
/*         {% if name not in ['_json','task','admin-nonce'] %}*/
/*             {% set field = {name: '_json.' ~ name} %}*/
/*             {% set value = value|json_encode|e %}*/
/*             {% include 'forms/fields/hidden/hidden.html.twig' %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/*     {% endif %}*/
/* */
/*     {{ nonce_field('admin-form', 'admin-nonce') }}*/
/* </form>*/
/* */

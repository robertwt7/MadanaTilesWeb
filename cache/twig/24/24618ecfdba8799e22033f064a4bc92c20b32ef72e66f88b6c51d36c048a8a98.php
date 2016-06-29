<?php

/* form.html.twig */
class __TwigTemplate_6301efd5c36d9df9736909330fb630dffde8ca4a3c78ccaa57d4baa6c057ba45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "form.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container-fluid contact\" style=\"padding: 50px 100px 20px 100px\">
        <div class=\"row text-center\">
            <span class=\"dot1\"></span>
            <h1 style=\"display:inline-block\"> CONTACT US </h1>
            <span class=\"dot1\"></span><br><br>
        </div>
        <div class=\"row\">
            <h4>Get in touch with us!</h4>
        </div>
    ";
        // line 13
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array())) {
            echo "<div class=\"alert\">";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array());
            echo "</div>";
        }
        // line 14
        echo "    ";
        $context["multipart"] = "";
        // line 15
        echo "    ";
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "method", array())), "POST");
        // line 16
        echo "
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 18
            echo "        ";
            if ((((isset($context["method"]) ? $context["method"] : null) == "POST") && ($this->getAttribute($context["field"], "type", array()) == "file"))) {
                // line 19
                echo "            ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 20
                echo "        ";
            }
            // line 21
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    <div class=\"row\">
        <div class=\"col-xs-11 col-sm-6 col-md-6 col-lg-6\">
            <form name=\"";
        // line 24
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array());
        echo "\"
                action=\"";
        // line 25
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array())) ? (((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array()))) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array())));
        echo "\"
                method=\"";
        // line 26
        echo (isset($context["method"]) ? $context["method"] : null);
        echo "\"";
        echo (isset($context["multipart"]) ? $context["multipart"] : null);
        echo ">

            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
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
            // line 29
            echo "                ";
            $context["value"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
            // line 30
            echo "                <div class=\"row\">
                    ";
            // line 31
            $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "form.html.twig", 31)->display($context);
            // line 32
            echo "                </div>
            ";
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
        // line 34
        echo "
                <div class=\"buttons\">
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 37
            echo "                    <button class=\"";
            echo (($this->getAttribute($context["button"], "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "classes", array()), "button")) : ("button"));
            echo " btn btn-default\" id=\"";
            echo $this->getAttribute($context["button"], "id", array());
            echo "\" type=\"";
            echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
            echo "\">";
            echo _twig_default_filter($this->env->getExtension('GravTwigExtension')->translate($this->getAttribute($context["button"], "value", array())), "Submit");
            echo "</button>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </div>

            ";
        // line 41
        echo $this->env->getExtension('GravTwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
            </form>
        </div>
        <div class=\"col-xs-12 col-md-6 col-lg-6 col-sm-3\">Jl. Kalimanjang 9 Surabaya<br>HP: ....<br>Fax: ...</div>
    </div>
            <h3>LOCATION</h3>
        <div class=\"row\">
            <div id=\"map\"></div>
        </div><br><br>
    </div>
";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 41,  158 => 39,  143 => 37,  139 => 36,  135 => 34,  120 => 32,  118 => 31,  115 => 30,  112 => 29,  95 => 28,  88 => 26,  84 => 25,  80 => 24,  76 => 22,  70 => 21,  67 => 20,  64 => 19,  61 => 18,  57 => 17,  54 => 16,  51 => 15,  48 => 14,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "partials/base.html.twig" %}*/
/* {# Ketika kita declare halaman form ini sebagai extends atau turunan, maka block yang kosong di halaman yang di extends akan digantikan dengan ini #}*/
/* {% block content %}*/
/*     <div class="container-fluid contact" style="padding: 50px 100px 20px 100px">*/
/*         <div class="row text-center">*/
/*             <span class="dot1"></span>*/
/*             <h1 style="display:inline-block"> CONTACT US </h1>*/
/*             <span class="dot1"></span><br><br>*/
/*         </div>*/
/*         <div class="row">*/
/*             <h4>Get in touch with us!</h4>*/
/*         </div>*/
/*     {% if form.message %}<div class="alert">{{ form.message }}</div>{% endif %}*/
/*     {% set multipart = '' %}*/
/*     {% set method = form.method|upper|default('POST') %}*/
/* */
/*     {% for field in form.fields %}*/
/*         {% if (method == 'POST' and field.type == 'file') %}*/
/*             {% set multipart = ' enctype="multipart/form-data"' %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/*     <div class="row">*/
/*         <div class="col-xs-11 col-sm-6 col-md-6 col-lg-6">*/
/*             <form name="{{ form.name }}"*/
/*                 action="{{ form.action ? base_url ~ form.action : page.url }}"*/
/*                 method="{{ method }}"{{ multipart }}>*/
/* */
/*             {% for field in form.fields %}*/
/*                 {% set value = form.value(field.name) %}*/
/*                 <div class="row">*/
/*                     {% include "forms/fields/#{field.type}/#{field.type}.html.twig" %}*/
/*                 </div>*/
/*             {% endfor %}*/
/* */
/*                 <div class="buttons">*/
/*                 {% for button in form.buttons %}*/
/*                     <button class="{{ button.classes|default('button') }} btn btn-default" id="{{ button.id }}" type="{{ button.type|default('submit') }}">{{ button.value|t|default('Submit') }}</button>*/
/*                 {% endfor %}*/
/*                 </div>*/
/* */
/*             {{ nonce_field('form', 'form-nonce') }}*/
/*             </form>*/
/*         </div>*/
/*         <div class="col-xs-12 col-md-6 col-lg-6 col-sm-3">Jl. Kalimanjang 9 Surabaya<br>HP: ....<br>Fax: ...</div>*/
/*     </div>*/
/*             <h3>LOCATION</h3>*/
/*         <div class="row">*/
/*             <div id="map"></div>*/
/*         </div><br><br>*/
/*     </div>*/
/* {% endblock %}*/

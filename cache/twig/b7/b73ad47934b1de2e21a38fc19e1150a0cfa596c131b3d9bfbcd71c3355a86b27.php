<?php

/* partials/langswitcher.html.twig */
class __TwigTemplate_3560124ae556539ece1fd44bffa3e81bd9f5e055145323e73683f51bf2a4e6d1 extends Twig_Template
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
        // line 6
        echo "
<ul class=\"langswitcher\">
";
        // line 8
        $context["langobj"] = $this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array(), "array");
        // line 9
        echo "
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "languages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 11
            echo "
    ";
            // line 12
            if (($context["key"] == $this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "current", array()))) {
                // line 13
                echo "        ";
                $context["lang_url"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                // line 14
                echo "        ";
                $context["active_class"] = " active";
                // line 15
                echo "    ";
            } else {
                // line 16
                echo "        ";
                $context["lang_url"] = (((((isset($context["base_url_simple"]) ? $context["base_url_simple"] : null) . $this->getAttribute((isset($context["langobj"]) ? $context["langobj"] : null), "getLanguageURLPrefix", array(0 => $context["key"]), "method")) . $this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "page_route", array()))) ? ((((isset($context["base_url_simple"]) ? $context["base_url_simple"] : null) . $this->getAttribute((isset($context["langobj"]) ? $context["langobj"] : null), "getLanguageURLPrefix", array(0 => $context["key"]), "method")) . $this->getAttribute((isset($context["langswitcher"]) ? $context["langswitcher"] : null), "page_route", array()))) : ("/"));
                // line 17
                echo "        ";
                $context["active_class"] = "";
                // line 18
                echo "    ";
            }
            // line 19
            echo "
    <li><a href=\"";
            // line 20
            echo ((isset($context["lang_url"]) ? $context["lang_url"] : null) . $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "params", array()));
            echo "\" class=\"external";
            echo (isset($context["active_class"]) ? $context["active_class"] : null);
            echo "\">";
            echo twig_upper_filter($this->env, $context["key"]);
            echo "</a></li>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "partials/langswitcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  58 => 20,  55 => 19,  52 => 18,  49 => 17,  46 => 16,  43 => 15,  40 => 14,  37 => 13,  35 => 12,  32 => 11,  28 => 10,  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {# Based on langswitcher.html.twig from Grav team #}*/
/* {# https://github.com/getgrav/grav-plugin-langswitcher/blob/develop/templates/partials/langswitcher.html.twig#}*/
/* {# Modified for use of Madana Web#}*/
/* {# Benyamin Limanto - (C) 2016#}*/
/* {# language.nativeName|capitalize - dapatkan nama language full #}*/
/* */
/* <ul class="langswitcher">*/
/* {% set langobj = grav['language'] %}*/
/* */
/* {% for key in langswitcher.languages %}*/
/* */
/*     {% if key == langswitcher.current %}*/
/*         {% set lang_url = page.url %}*/
/*         {% set active_class = ' active' %}*/
/*     {% else %}*/
/*         {% set lang_url = base_url_simple ~ langobj.getLanguageURLPrefix(key)~langswitcher.page_route ?: '/' %}*/
/*         {% set active_class = '' %}*/
/*     {% endif %}*/
/* */
/*     <li><a href="{{ lang_url ~ uri.params }}" class="external{{ active_class }}">{{  key|upper }}</a></li>*/
/* */
/* {% endfor %}*/
/* </ul>*/
/* */

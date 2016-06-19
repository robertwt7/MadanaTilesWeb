<?php

/* themes.html.twig */
class __TwigTemplate_a24a4eac286e9c64bd4e0100520e3f94a77457827dd46a256ed468eb22d101b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "themes.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) {
            // line 4
            $context["installing"] = (is_string($__internal_17868838668d33b56e76bdd1ccd5e8f58b76cff4b866aa6c109ca2a7dc3b87ce = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) && is_string($__internal_126e8739adf47eb2db74effd7e805665a7b21443594a55f6b1d25da46d577d27 = "install") && ('' === $__internal_126e8739adf47eb2db74effd7e805665a7b21443594a55f6b1d25da46d577d27 || 0 === strpos($__internal_17868838668d33b56e76bdd1ccd5e8f58b76cff4b866aa6c109ca2a7dc3b87ce, $__internal_126e8739adf47eb2db74effd7e805665a7b21443594a55f6b1d25da46d577d27)));
            // line 5
            $context["installed"] = true;
            // line 8
            $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "themes", array(0 => true), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
            // line 9
            if ( !(isset($context["package"]) ? $context["package"] : null)) {
                // line 10
                $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "themes", array(0 => false), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
                // line 11
                $context["installed"] = false;
            }
            // line 14
            $context["theme"] = $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "toArray", array(), "method");
            // line 15
            $context["title"] = (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME") . ": ") . twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array())));
        } else {
            // line 17
            $context["title"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEMES");
        }
        // line 20
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
        // line 23
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        // line 27
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/codemirror-compressed.js")), "method");
        // line 28
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/mdeditor.js")), "method");
        // line 29
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    // line 33
    public function block_titlebar($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 35
            echo "        <div class=\"button-bar\">
        ";
            // line 36
            if ((isset($context["installing"]) ? $context["installing"] : null)) {
                // line 37
                echo "            <a class=\"button\" href=\"";
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/themes\"><i class=\"fa fa-reply\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
                echo "</a>
        ";
            } else {
                // line 39
                echo "            <a class=\"button\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/\"><i class=\"fa fa-reply\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
                echo "</a>
            <a class=\"button\" href=\"";
                // line 40
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/themes/install\"><i class=\"fa fa-plus\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD");
                echo "</a>
            ";
                // line 41
                if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
                    // line 42
                    echo "                <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
                    echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHECK_FOR_UPDATES");
                    echo "</button>
            ";
                }
                // line 44
                echo "        ";
            }
            // line 45
            echo "        </div>
        <h1><i class=\"fa fa-fw fa-tint\"></i> ";
            // line 46
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEMES");
            echo "</h1>
    ";
        } else {
            // line 48
            echo "        ";
            if ((isset($context["installed"]) ? $context["installed"] : null)) {
                // line 49
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 50
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/themes\"><i class=\"fa fa-arrow-left\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_THEMES");
                echo "</a>
            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
                // line 51
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE");
                echo "</button>
        </div>
        ";
            } else {
                // line 54
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 55
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/themes/install\"><i class=\"fa fa-arrow-left\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_THEMES");
                echo "</a>
        </div>
        ";
            }
            // line 58
            echo "        <h1><i class=\"fa fa-fw fa-tint\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME");
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array()));
            echo "</h1>
    ";
        }
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        // line 63
        echo "
    <div class=\"gpm gpm-themes\">

        ";
        // line 66
        $this->loadTemplate("partials/messages.html.twig", "themes.html.twig", 66)->display($context);
        // line 67
        echo "
        ";
        // line 68
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 69
            echo "            ";
            $this->loadTemplate("partials/themes-list.html.twig", "themes.html.twig", 69)->display($context);
            // line 70
            echo "        ";
        } else {
            // line 71
            echo "            ";
            $this->loadTemplate("partials/themes-details.html.twig", "themes.html.twig", 71)->display($context);
            // line 72
            echo "        ";
        }
        // line 73
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "themes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 73,  201 => 72,  198 => 71,  195 => 70,  192 => 69,  190 => 68,  187 => 67,  185 => 66,  180 => 63,  177 => 62,  167 => 58,  159 => 55,  156 => 54,  150 => 51,  144 => 50,  141 => 49,  138 => 48,  133 => 46,  130 => 45,  127 => 44,  121 => 42,  119 => 41,  113 => 40,  106 => 39,  98 => 37,  96 => 36,  93 => 35,  90 => 34,  87 => 33,  80 => 29,  77 => 28,  74 => 27,  71 => 26,  64 => 23,  61 => 22,  58 => 21,  54 => 1,  51 => 20,  48 => 17,  45 => 15,  43 => 14,  40 => 11,  38 => 10,  36 => 9,  34 => 8,  32 => 5,  30 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% if admin.route %}*/
/*     {% set installing = admin.route starts with 'install' %}*/
/*     {% set installed = true %}*/
/* */
/*     {# Try installed packages first, then remote #}*/
/*     {% set package = admin.themes(true)[admin.route] %}*/
/*     {% if (not package) %}*/
/*         {% set package = admin.themes(false)[admin.route] %}*/
/*         {% set installed = false %}*/
/*     {% endif %}*/
/* */
/*     {% set theme = package.toArray() %}*/
/*     {% set title = "PLUGIN_ADMIN.THEME"|tu ~ ": " ~ theme.name|e %}*/
/* {% else %}*/
/*     {% set title = "PLUGIN_ADMIN.THEMES"|tu %}*/
/* {% endif %}*/
/* */
/* {% if admin.route or installing %}*/
/*     {% block stylesheets %}*/
/*         {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* */
/*     {% block javascripts %}*/
/*         {% do assets.addJs(theme_url~'/js/codemirror-compressed.js') %}*/
/*         {% do assets.addJs(theme_url~'/js/mdeditor.js') %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endif %}*/
/* */
/* {% block titlebar %}*/
/*     {% if not admin.route or installing %}*/
/*         <div class="button-bar">*/
/*         {% if (installing) %}*/
/*             <a class="button" href="{{ base_url_relative }}/themes"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*         {% else %}*/
/*             <a class="button" href="{{ base_url }}/"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*             <a class="button" href="{{ base_url_relative }}/themes/install"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.ADD"|tu }}</a>*/
/*             {% if authorize(['admin.maintenance', 'admin.super']) %}*/
/*                 <button data-gpm-checkupdates="" class="button"><i class="fa fa-refresh"></i> {{ "PLUGIN_ADMIN.CHECK_FOR_UPDATES"|tu }}</button>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         </div>*/
/*         <h1><i class="fa fa-fw fa-tint"></i> {{ "PLUGIN_ADMIN.THEMES"|tu }}</h1>*/
/*     {% else %}*/
/*         {% if (installed) %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ base_url_relative }}/themes"><i class="fa fa-arrow-left"></i> {{ "PLUGIN_ADMIN.BACK_TO_THEMES"|tu }}</a>*/
/*             <button class="button" type="submit" name="task" value="save" form="blueprints"><i class="fa fa-check"></i> {{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ base_url_relative }}/themes/install"><i class="fa fa-arrow-left"></i> {{ "PLUGIN_ADMIN.BACK_TO_THEMES"|tu }}</a>*/
/*         </div>*/
/*         {% endif %}*/
/*         <h1><i class="fa fa-fw fa-tint"></i> {{ "PLUGIN_ADMIN.THEME"|tu }}: {{ theme.name|e }}</h1>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="gpm gpm-themes">*/
/* */
/*         {% include 'partials/messages.html.twig' %}*/
/* */
/*         {% if not admin.route or installing %}*/
/*             {%  include 'partials/themes-list.html.twig' %}*/
/*         {% else %}*/
/*             {% include 'partials/themes-details.html.twig' %}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */

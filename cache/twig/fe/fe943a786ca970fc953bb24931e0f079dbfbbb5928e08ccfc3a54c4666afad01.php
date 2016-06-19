<?php

/* plugins.html.twig */
class __TwigTemplate_697ce9738ac108cb7f8c13425d2833ba3f5f3ed6c5cfd59ccef6d51212b84814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "plugins.html.twig", 1);
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
            $context["installing"] = (is_string($__internal_6fe459f0c8a64a8428ae80973147df7bee7e6f9baf655820eafa28e5205062a7 = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) && is_string($__internal_5feccc89393817cdb86ea34bc4375b672b44c40895ddbb145725dda3c5c73c52 = "install") && ('' === $__internal_5feccc89393817cdb86ea34bc4375b672b44c40895ddbb145725dda3c5c73c52 || 0 === strpos($__internal_6fe459f0c8a64a8428ae80973147df7bee7e6f9baf655820eafa28e5205062a7, $__internal_5feccc89393817cdb86ea34bc4375b672b44c40895ddbb145725dda3c5c73c52)));
            // line 5
            $context["installed"] = true;
            // line 8
            $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array(0 => true), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
            // line 9
            if ( !(isset($context["package"]) ? $context["package"] : null)) {
                // line 10
                $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array(0 => false), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
                // line 11
                $context["installed"] = false;
            }
            // line 14
            $context["plugin"] = $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "toArray", array(), "method");
            // line 15
            $context["title"] = (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN") . ": ") . twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name", array())));
        } else {
            // line 17
            $context["title"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGINS");
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
                echo "/plugins\"><i class=\"fa fa-reply\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
                echo "</a>
        ";
            } else {
                // line 39
                echo "            <a class=\"button\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "\"><i class=\"fa fa-reply\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
                echo "</a>
            <a class=\"button\" href=\"";
                // line 40
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/plugins/install\"><i class=\"fa fa-plus\"></i> ";
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
        <h1><i class=\"fa fa-fw fa-plug\"></i> ";
            // line 46
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGINS");
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
                echo "/plugins\"><i class=\"fa fa-arrow-left\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_PLUGINS");
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
                echo "/plugins/install\"><i class=\"fa fa-arrow-left\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_PLUGINS");
                echo "</a>
        </div>
        ";
            }
            // line 58
            echo "
        <h1><i class=\"fa fa-fw fa-plug\"></i> ";
            // line 59
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN");
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name", array()));
            echo "</h1>

    ";
        }
    }

    // line 64
    public function block_content($context, array $blocks = array())
    {
        // line 65
        echo "
    <div class=\"gpm gpm-plugins\">

        ";
        // line 68
        $this->loadTemplate("partials/messages.html.twig", "plugins.html.twig", 68)->display($context);
        // line 69
        echo "
        ";
        // line 70
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 71
            echo "            ";
            $this->loadTemplate("partials/plugins-list.html.twig", "plugins.html.twig", 71)->display($context);
            // line 72
            echo "        ";
        } else {
            // line 73
            echo "            ";
            $this->loadTemplate("partials/plugins-details.html.twig", "plugins.html.twig", 73)->display($context);
            // line 74
            echo "        ";
        }
        // line 75
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "plugins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 75,  204 => 74,  201 => 73,  198 => 72,  195 => 71,  193 => 70,  190 => 69,  188 => 68,  183 => 65,  180 => 64,  170 => 59,  167 => 58,  159 => 55,  156 => 54,  150 => 51,  144 => 50,  141 => 49,  138 => 48,  133 => 46,  130 => 45,  127 => 44,  121 => 42,  119 => 41,  113 => 40,  106 => 39,  98 => 37,  96 => 36,  93 => 35,  90 => 34,  87 => 33,  80 => 29,  77 => 28,  74 => 27,  71 => 26,  64 => 23,  61 => 22,  58 => 21,  54 => 1,  51 => 20,  48 => 17,  45 => 15,  43 => 14,  40 => 11,  38 => 10,  36 => 9,  34 => 8,  32 => 5,  30 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% if admin.route %}*/
/*     {% set installing = admin.route starts with 'install' %}*/
/*     {% set installed = true %}*/
/* */
/*     {# Try installed packages first, then remote #}*/
/*     {% set package = admin.plugins(true)[admin.route] %}*/
/*     {% if (not package) %}*/
/*         {% set package = admin.plugins(false)[admin.route] %}*/
/*         {% set installed = false %}*/
/*     {% endif %}*/
/* */
/*     {% set plugin = package.toArray() %}*/
/*     {% set title = "PLUGIN_ADMIN.PLUGIN"|tu ~ ": " ~ plugin.name|e %}*/
/* {% else %}*/
/*     {% set title = "PLUGIN_ADMIN.PLUGINS"|tu %}*/
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
/*             <a class="button" href="{{ base_url_relative }}/plugins"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*         {% else %}*/
/*             <a class="button" href="{{ base_url }}"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*             <a class="button" href="{{ base_url_relative }}/plugins/install"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.ADD"|tu }}</a>*/
/*             {% if authorize(['admin.maintenance', 'admin.super']) %}*/
/*                 <button data-gpm-checkupdates="" class="button"><i class="fa fa-refresh"></i> {{ "PLUGIN_ADMIN.CHECK_FOR_UPDATES"|tu }}</button>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         </div>*/
/*         <h1><i class="fa fa-fw fa-plug"></i> {{ "PLUGIN_ADMIN.PLUGINS"|tu }}</h1>*/
/*     {% else %}*/
/*         {% if (installed) %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ base_url_relative }}/plugins"><i class="fa fa-arrow-left"></i> {{ "PLUGIN_ADMIN.BACK_TO_PLUGINS"|tu }}</a>*/
/*             <button class="button" type="submit" name="task" value="save" form="blueprints"><i class="fa fa-check"></i> {{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ base_url_relative }}/plugins/install"><i class="fa fa-arrow-left"></i> {{ "PLUGIN_ADMIN.BACK_TO_PLUGINS"|tu }}</a>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         <h1><i class="fa fa-fw fa-plug"></i> {{ "PLUGIN_ADMIN.PLUGIN"|tu }}: {{ plugin.name|e }}</h1>*/
/* */
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="gpm gpm-plugins">*/
/* */
/*         {% include 'partials/messages.html.twig' %}*/
/* */
/*         {% if not admin.route or installing %}*/
/*             {%  include 'partials/plugins-list.html.twig' %}*/
/*         {% else %}*/
/*             {% include 'partials/plugins-details.html.twig' %}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */

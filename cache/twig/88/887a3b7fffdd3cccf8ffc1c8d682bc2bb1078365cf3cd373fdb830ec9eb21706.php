<?php

/* config.html.twig */
class __TwigTemplate_07f4b4ea943275b398787728552f6f4b39256662e12dc86daa8c7dfe1f97daa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "config.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content_top' => array($this, 'block_content_top'),
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
        $context["config_slug"] = $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "basename", array());
        // line 4
        $context["isInfo"] = ((isset($context["config_slug"]) ? $context["config_slug"] : null) == "info");
        // line 6
        $context["title"] = (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION") . ": ") . $this->env->getExtension('AdminTwigExtension')->tuFilter(("PLUGIN_ADMIN." . twig_upper_filter($this->env, (isset($context["config_slug"]) ? $context["config_slug"] : null)))));
        // line 8
        if ( !(isset($context["isInfo"]) ? $context["isInfo"] : null)) {
            // line 9
            $context["data"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => ("config/" . (isset($context["config_slug"]) ? $context["config_slug"] : null))), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
        // line 14
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/codemirror-compressed.js")), "method");
        // line 19
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/mdeditor.js")), "method");
        // line 20
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 23
    public function block_titlebar($context, array $blocks = array())
    {
        // line 24
        echo "    <div class=\"button-bar\">
        <a class=\"button\" href=\"";
        // line 25
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\"><i class=\"fa fa-reply\"></i> ";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
        echo "</a>
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
        // line 26
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE");
        echo "</button>
    </div>
    <h1><i class=\"fa fa-fw fa-wrench\"></i> ";
        // line 28
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION");
        echo " - ";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter(("PLUGIN_ADMIN." . twig_upper_filter($this->env, (isset($context["config_slug"]) ? $context["config_slug"] : null))));
        echo "</h1>
";
    }

    // line 31
    public function block_content_top($context, array $blocks = array())
    {
        // line 32
        echo "    <div class=\"alert notice\">";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION");
        echo ": <b>";
        echo twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "file", array()), "filename", array()), array((isset($context["base_path"]) ? $context["base_path"] : null) => ""));
        echo "</b></div>
    <ul class=\"tab-bar\">  
        <li ";
        // line 34
        if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "system")) {
            echo "class=\"active\"";
        }
        echo ">
            ";
        // line 35
        if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "system")) {
            echo "<span>";
        } else {
            echo "<a href=\"";
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/config/system\">";
        }
        // line 36
        echo "            ";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SYSTEM");
        echo "
            ";
        // line 37
        if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "system")) {
            echo "</span>";
        } else {
            echo "</a>";
        }
        // line 38
        echo "        </li>
        <li ";
        // line 39
        if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "site")) {
            echo "class=\"active\"";
        }
        echo ">
            ";
        // line 40
        if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "site")) {
            echo "<span>";
        } else {
            echo "<a href=\"";
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/config/site\">";
        }
        // line 41
        echo "            ";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SITE");
        echo "
            ";
        // line 42
        if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "site")) {
            echo "</span>";
        } else {
            echo "</a>";
        }
        // line 43
        echo "        </li>
        
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "configurations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["configuration"]) {
            // line 46
            echo "            ";
            $context["current_blueprints"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => ("config/" . $context["configuration"])), "method"), "blueprints", array()), "toArray", array(), "method");
            // line 47
            echo "            ";
            if ((((($context["configuration"] != "system") && ($context["configuration"] != "site")) &&  !$this->getAttribute($this->getAttribute((isset($context["current_blueprints"]) ? $context["current_blueprints"] : null), "form", array()), "hidden", array())) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["current_blueprints"]) ? $context["current_blueprints"] : null), "form", array()), "fields", array())))) {
                // line 48
                echo "                <li ";
                if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == $context["configuration"])) {
                    echo "class=\"active\"";
                }
                echo ">
                    ";
                // line 49
                if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == $context["configuration"])) {
                    echo "<span>";
                } else {
                    echo "<a href=\"";
                    echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                    echo "/config/";
                    echo $context["configuration"];
                    echo "\">";
                }
                // line 50
                echo "                    ";
                echo twig_capitalize_string_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter($context["configuration"]));
                echo "
                    ";
                // line 51
                if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == $context["configuration"])) {
                    echo "</span>";
                } else {
                    echo "</a>";
                }
                // line 52
                echo "                </li>
            ";
            }
            // line 54
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configuration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
        <li ";
        // line 56
        if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "info")) {
            echo "class=\"active\"";
        }
        echo ">
            ";
        // line 57
        if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "info")) {
            echo "<span>";
        } else {
            echo "<a href=\"";
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/config/info\">";
        }
        // line 58
        echo "            ";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INFO");
        echo "
            ";
        // line 59
        if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "info")) {
            echo "</span>";
        } else {
            echo "</a>";
        }
        // line 60
        echo "        </li>
    </ul>
";
    }

    // line 64
    public function block_content($context, array $blocks = array())
    {
        // line 65
        echo "    ";
        if ((isset($context["isInfo"]) ? $context["isInfo"] : null)) {
            // line 66
            echo "        <div id=\"phpinfo\">
            ";
            // line 67
            echo $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "phpinfo", array());
            echo "
        </div>
    ";
        } else {
            // line 70
            echo "        ";
            $this->loadTemplate("partials/blueprints.html.twig", "config.html.twig", 70)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blueprints", array()), "data" => (isset($context["data"]) ? $context["data"] : null))));
            // line 71
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 71,  263 => 70,  257 => 67,  254 => 66,  251 => 65,  248 => 64,  242 => 60,  236 => 59,  231 => 58,  223 => 57,  217 => 56,  214 => 55,  208 => 54,  204 => 52,  198 => 51,  193 => 50,  183 => 49,  176 => 48,  173 => 47,  170 => 46,  166 => 45,  162 => 43,  156 => 42,  151 => 41,  143 => 40,  137 => 39,  134 => 38,  128 => 37,  123 => 36,  115 => 35,  109 => 34,  101 => 32,  98 => 31,  90 => 28,  85 => 26,  79 => 25,  76 => 24,  73 => 23,  66 => 20,  63 => 19,  60 => 18,  57 => 17,  50 => 14,  47 => 13,  44 => 12,  40 => 1,  37 => 9,  35 => 8,  33 => 6,  31 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% set config_slug = uri.basename %}*/
/* {% set isInfo = (config_slug == 'info') %}*/
/* */
/* {% set title = "PLUGIN_ADMIN.CONFIGURATION"|tu ~ ": " ~ ("PLUGIN_ADMIN." ~ config_slug|upper)|tu %}*/
/* */
/* {% if not isInfo %}*/
/*     {% set data = admin.data('config/' ~ config_slug) %}*/
/* {% endif %}*/
/* */
/* {% block stylesheets %}*/
/*     {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {% do assets.addJs(theme_url~'/js/codemirror-compressed.js') %}*/
/*     {% do assets.addJs(theme_url~'/js/mdeditor.js') %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block titlebar %}*/
/*     <div class="button-bar">*/
/*         <a class="button" href="{{ base_url }}"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*         <button class="button" type="submit" name="task" value="save" form="blueprints"><i class="fa fa-check"></i> {{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*     </div>*/
/*     <h1><i class="fa fa-fw fa-wrench"></i> {{ "PLUGIN_ADMIN.CONFIGURATION"|tu }} - {{ ("PLUGIN_ADMIN." ~ config_slug|upper)|tu }}</h1>*/
/* {% endblock %}*/
/* */
/* {% block content_top %}*/
/*     <div class="alert notice">{{ "PLUGIN_ADMIN.SAVE_LOCATION"|tu }}: <b>{{ data.file.filename|replace({(base_path):''}) }}</b></div>*/
/*     <ul class="tab-bar">  */
/*         <li {% if config_slug == 'system' %}class="active"{% endif %}>*/
/*             {% if config_slug == 'system' %}<span>{% else %}<a href="{{ base_url_relative }}/config/system">{% endif %}*/
/*             {{ "PLUGIN_ADMIN.SYSTEM"|tu }}*/
/*             {% if config_slug == 'system' %}</span>{% else %}</a>{% endif %}*/
/*         </li>*/
/*         <li {% if config_slug == 'site' %}class="active"{% endif %}>*/
/*             {% if config_slug == 'site' %}<span>{% else %}<a href="{{ base_url_relative }}/config/site">{% endif %}*/
/*             {{ "PLUGIN_ADMIN.SITE"|tu }}*/
/*             {% if config_slug == 'site' %}</span>{% else %}</a>{% endif %}*/
/*         </li>*/
/*         */
/*         {% for configuration in admin.configurations %}*/
/*             {% set current_blueprints = admin.data('config/' ~ configuration).blueprints.toArray() %}*/
/*             {% if configuration != 'system' and configuration != 'site' and not current_blueprints.form.hidden and current_blueprints.form.fields is not empty %}*/
/*                 <li {% if config_slug == configuration %}class="active"{% endif %}>*/
/*                     {% if config_slug == configuration %}<span>{% else %}<a href="{{ base_url_relative }}/config/{{configuration}}">{% endif %}*/
/*                     {{ configuration|tu|capitalize }}*/
/*                     {% if config_slug == configuration %}</span>{% else %}</a>{% endif %}*/
/*                 </li>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*         <li {% if config_slug == 'info' %}class="active"{% endif %}>*/
/*             {% if config_slug == 'info' %}<span>{% else %}<a href="{{ base_url_relative }}/config/info">{% endif %}*/
/*             {{ "PLUGIN_ADMIN.INFO"|tu }}*/
/*             {% if config_slug == 'info' %}</span>{% else %}</a>{% endif %}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {% if isInfo %}*/
/*         <div id="phpinfo">*/
/*             {{ admin.phpinfo }}*/
/*         </div>*/
/*     {% else %}*/
/*         {% include 'partials/blueprints.html.twig' with { blueprints: data.blueprints, data: data } %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* */

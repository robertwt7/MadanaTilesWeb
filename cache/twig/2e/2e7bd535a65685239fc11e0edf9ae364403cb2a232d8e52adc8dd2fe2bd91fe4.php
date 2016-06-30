<?php

/* partials/themes-details.html.twig */
class __TwigTemplate_dea601d83966d20f30c42af9fec9417e24e733d1629d4bdd63e17ed56d0bfcc1 extends Twig_Template
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
        $context["gpm"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "gpm", array(), "method");
        // line 2
        $context["installed"] = $this->getAttribute((isset($context["gpm"]) ? $context["gpm"] : null), "isThemeInstalled", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())), "method");
        // line 3
        echo "
<div class=\"grav-update theme\" data-gpm-theme=\"";
        // line 4
        echo $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array());
        echo "\">
    ";
        // line 5
        if (((isset($context["installed"]) ? $context["installed"] : null) && $this->getAttribute((isset($context["gpm"]) ? $context["gpm"] : null), "isThemeUpdatable", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())), "method"))) {
            // line 6
            echo "    ";
            $context["remote"] = $this->getAttribute((isset($context["gpm"]) ? $context["gpm"] : null), "getRepositoryTheme", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())), "method");
            // line 7
            echo "        <p>
            <i class=\"fa fa-bullhorn\"></i>
            <strong>v";
            // line 9
            echo $this->getAttribute((isset($context["remote"]) ? $context["remote"] : null), "available", array());
            echo "</strong> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.OF_THIS_THEME_IS_NOW_AVAILABLE");
            echo "!
            <a class=\"button button-small secondary\" href=\"";
            // line 10
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((((isset($context["base_url"]) ? $context["base_url"] : null) . "/themes/") . $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "slug", array())) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "update"), 1 => "admin-nonce", 2 => "admin-nonce"), "method");
            echo "\">";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.UPDATE_THEME");
            echo "</a>
        </p>
    ";
        }
        // line 13
        echo "</div>

<h1>
    ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array()));
        echo "
    ";
        // line 17
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isTeamGrav", array(0 => (isset($context["theme"]) ? $context["theme"] : null)), "method")) {
            // line 18
            echo "        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"Grav Official Theme\"></i></span></small>
    ";
        }
        // line 20
        echo "    ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "symlink", array())) {
            // line 21
            echo "    <small class=\"hint--bottom\"  data-hint=\"";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED");
            echo "\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    ";
        }
        // line 25
        echo "    <small>";
        echo (($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "version", array())) ? (("v" . twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "version", array())))) : (""));
        echo "</small>
</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-";
        // line 28
        echo $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "icon", array());
        echo "\"></i>
    <table>
        ";
        // line 30
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "version", array())) {
            // line 31
            echo "        <tr>
            <td>";
            // line 32
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VERSION");
            echo ":</td>
            <td>";
            // line 33
            echo $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "version", array());
            echo "</td>
        </tr>
        ";
        }
        // line 36
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array())) {
            // line 37
            echo "            <tr>
                <td>";
            // line 38
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AUTHOR");
            echo ":</td>
                <td>
                    ";
            // line 40
            if ($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "url", array())) {
                // line 41
                echo "                        <a href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "url", array());
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "name", array());
                echo "</a>
                    ";
            } else {
                // line 43
                echo "                        ";
                echo $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "name", array());
                echo "
                    ";
            }
            // line 45
            echo "                    ";
            if ($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "email", array())) {
                // line 46
                echo "                         - <a href=\"mailto:";
                echo $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "email", array());
                echo "\">";
                echo $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "author", array()), "email", array());
                echo "</a>
                    ";
            }
            // line 48
            echo "                </td>
            </tr>
        ";
        }
        // line 51
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "homepage", array())) {
            // line 52
            echo "        <tr>
            <td>";
            // line 53
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.HOMEPAGE");
            echo ":</td>
            <td><a href=\"";
            // line 54
            echo $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "homepage", array());
            echo "\" target=\"_blank\">";
            echo $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "homepage", array());
            echo "</a></td>
        </tr>
        ";
        }
        // line 57
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "demo", array())) {
            // line 58
            echo "        <tr>
            <td>";
            // line 59
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DEMO");
            echo ":</td>
            <td><a href=\"";
            // line 60
            echo $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "demo", array());
            echo "\" target=\"_blank\">";
            echo $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "demo", array());
            echo "</a></td>
        </tr>
        ";
        }
        // line 63
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "bugs", array())) {
            // line 64
            echo "            <tr>
                <td>";
            // line 65
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BUG_TRACKER");
            echo ":</td>
                <td><a href=\"";
            // line 66
            echo $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "bugs", array());
            echo "\" target=\"_blank\">";
            echo $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "bugs", array());
            echo "</a></td>
            </tr>
        ";
        }
        // line 69
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "keywords", array())) {
            // line 70
            echo "            <tr>
                <td>";
            // line 71
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.KEYWORDS");
            echo ":</td>
                <td>";
            // line 72
            echo $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "keywords", array());
            echo "</td>
            </tr>
        ";
        }
        // line 75
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "license", array())) {
            // line 76
            echo "            <tr>
                <td>";
            // line 77
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LICENSE");
            echo ":</td>
                <td>";
            // line 78
            echo $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "license", array());
            echo "</td>
            </tr>
        ";
        }
        // line 81
        echo "        ";
        if ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "description", array())) {
            // line 82
            echo "            <tr>
                <td>";
            // line 83
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DESCRIPTION");
            echo ":</td>
                <td>";
            // line 84
            echo $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "description_html", array());
            echo "</td>
            </tr>
        ";
        }
        // line 87
        echo "
        ";
        // line 88
        if (($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "readme", array()) || $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "homepage", array()))) {
            // line 89
            echo "            ";
            $context["readme_link"] = (($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "readme", array())) ? ($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "readme", array())) : (($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "homepage", array()) . "/blob/master/README.md")));
            // line 90
            echo "            <tr>
                <td>";
            // line 91
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.README");
            echo ":</td>
                <td><a href=\"";
            // line 92
            echo (isset($context["readme_link"]) ? $context["readme_link"] : null);
            echo "\" target=\"_blank\">";
            echo (isset($context["readme_link"]) ? $context["readme_link"] : null);
            echo "</a></td>
            </tr>
        ";
        }
        // line 95
        echo "    </table>
</div>

";
        // line 98
        if ((isset($context["installed"]) ? $context["installed"] : null)) {
            // line 99
            echo "    ";
            $context["data"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => ("themes/" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()))), "method");
            // line 100
            echo "    ";
            $this->loadTemplate("partials/blueprints.html.twig", "partials/themes-details.html.twig", 100)->display(array_merge($context, array("data" => (isset($context["data"]) ? $context["data"] : null), "blueprints" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blueprints", array()))));
            // line 101
            echo "
    ";
            // line 102
            if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "system.pages.theme"), "method") != $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()))) {
                // line 103
                echo "    <div class=\"button-bar danger\">
        <span class=\"danger-zone\"></span>
        <a class=\"button\" href=\"";
                // line 105
                echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/themes/") . $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "slug", array())) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "uninstall"), 1 => "admin-form", 2 => "admin-nonce"), "method");
                echo "\"><i class=\"fa fa-fw fa-warning\"></i>";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.REMOVE_THEME");
                echo "</a>
    </div>
    ";
            }
        } else {
            // line 109
            echo "    <div class=\"button-bar success\">
        <a class=\"button\" href=\"";
            // line 110
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/themes/") . $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "slug", array())) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "install"), 1 => "admin-form", 2 => "admin-nonce"), "method");
            echo "\"><i class=\"fa fa-fw fa-plus\"></i>";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALL_THEME");
            echo "</a>
    </div>
";
        }
        // line 113
        echo "



";
    }

    public function getTemplateName()
    {
        return "partials/themes-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 113,  308 => 110,  305 => 109,  296 => 105,  292 => 103,  290 => 102,  287 => 101,  284 => 100,  281 => 99,  279 => 98,  274 => 95,  266 => 92,  262 => 91,  259 => 90,  256 => 89,  254 => 88,  251 => 87,  245 => 84,  241 => 83,  238 => 82,  235 => 81,  229 => 78,  225 => 77,  222 => 76,  219 => 75,  213 => 72,  209 => 71,  206 => 70,  203 => 69,  195 => 66,  191 => 65,  188 => 64,  185 => 63,  177 => 60,  173 => 59,  170 => 58,  167 => 57,  159 => 54,  155 => 53,  152 => 52,  149 => 51,  144 => 48,  136 => 46,  133 => 45,  127 => 43,  119 => 41,  117 => 40,  112 => 38,  109 => 37,  106 => 36,  100 => 33,  96 => 32,  93 => 31,  91 => 30,  86 => 28,  79 => 25,  71 => 21,  68 => 20,  64 => 18,  62 => 17,  58 => 16,  53 => 13,  45 => 10,  39 => 9,  35 => 7,  32 => 6,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set gpm = admin.gpm() %}*/
/* {% set installed = gpm.isThemeInstalled(admin.route) %}*/
/* */
/* <div class="grav-update theme" data-gpm-theme="{{ admin.route }}">*/
/*     {% if installed and gpm.isThemeUpdatable(admin.route) %}*/
/*     {% set remote = gpm.getRepositoryTheme(admin.route) %}*/
/*         <p>*/
/*             <i class="fa fa-bullhorn"></i>*/
/*             <strong>v{{ remote.available }}</strong> {{ "PLUGIN_ADMIN.OF_THIS_THEME_IS_NOW_AVAILABLE"|tu }}!*/
/*             <a class="button button-small secondary" href="{{ uri.addNonce(base_url ~ '/themes/' ~ theme.slug ~ '/task' ~ config.system.param_sep ~ 'update', 'admin-nonce', 'admin-nonce') }}">{{ "PLUGIN_ADMIN.UPDATE_THEME"|tu }}</a>*/
/*         </p>*/
/*     {% endif %}*/
/* </div>*/
/* */
/* <h1>*/
/*     {{ theme.name|e }}*/
/*     {% if admin.isTeamGrav(theme) %}*/
/*         <small><span class="info-reverse"><i class="fa fa-check-circle" title="Grav Official Theme"></i></span></small>*/
/*     {% endif %}*/
/*     {% if theme.symlink %}*/
/*     <small class="hint--bottom"  data-hint="{{ "PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED"|tu }}">*/
/*         <i class="fa fa-fw fa-link"></i>*/
/*     </small>*/
/*     {% endif %}*/
/*     <small>{{ theme.version ? 'v' ~ theme.version|e }}</small>*/
/* </h1>*/
/* <div class="gpm-item-info">*/
/*     <i class="gpm-item-icon fa fa-fw fa-{{  theme.icon }}"></i>*/
/*     <table>*/
/*         {% if theme.version %}*/
/*         <tr>*/
/*             <td>{{ "PLUGIN_ADMIN.VERSION"|tu }}:</td>*/
/*             <td>{{ theme.version }}</td>*/
/*         </tr>*/
/*         {% endif %}*/
/*         {% if theme.author %}*/
/*             <tr>*/
/*                 <td>{{ "PLUGIN_ADMIN.AUTHOR"|tu }}:</td>*/
/*                 <td>*/
/*                     {% if theme.author.url %}*/
/*                         <a href="{{ theme.author.url }}" target="_blank">{{ theme.author.name }}</a>*/
/*                     {% else %}*/
/*                         {{ theme.author.name }}*/
/*                     {% endif %}*/
/*                     {% if theme.author.email %}*/
/*                          - <a href="mailto:{{ theme.author.email }}">{{ theme.author.email }}</a>*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endif %}*/
/*         {% if theme.homepage %}*/
/*         <tr>*/
/*             <td>{{ "PLUGIN_ADMIN.HOMEPAGE"|tu }}:</td>*/
/*             <td><a href="{{ theme.homepage }}" target="_blank">{{ theme.homepage }}</a></td>*/
/*         </tr>*/
/*         {% endif %}*/
/*         {% if theme.demo %}*/
/*         <tr>*/
/*             <td>{{ "PLUGIN_ADMIN.DEMO"|tu }}:</td>*/
/*             <td><a href="{{ theme.demo }}" target="_blank">{{ theme.demo }}</a></td>*/
/*         </tr>*/
/*         {% endif %}*/
/*         {% if theme.bugs %}*/
/*             <tr>*/
/*                 <td>{{ "PLUGIN_ADMIN.BUG_TRACKER"|tu }}:</td>*/
/*                 <td><a href="{{ theme.bugs }}" target="_blank">{{ theme.bugs }}</a></td>*/
/*             </tr>*/
/*         {% endif %}*/
/*         {% if theme.keywords %}*/
/*             <tr>*/
/*                 <td>{{ "PLUGIN_ADMIN.KEYWORDS"|tu }}:</td>*/
/*                 <td>{{ theme.keywords }}</td>*/
/*             </tr>*/
/*         {% endif %}*/
/*         {% if theme.license %}*/
/*             <tr>*/
/*                 <td>{{ "PLUGIN_ADMIN.LICENSE"|tu }}:</td>*/
/*                 <td>{{ theme.license }}</td>*/
/*             </tr>*/
/*         {% endif %}*/
/*         {% if theme.description %}*/
/*             <tr>*/
/*                 <td>{{ "PLUGIN_ADMIN.DESCRIPTION"|tu }}:</td>*/
/*                 <td>{{ theme.description_html }}</td>*/
/*             </tr>*/
/*         {% endif %}*/
/* */
/*         {% if theme.readme or theme.homepage %}*/
/*             {% set readme_link = theme.readme ?: theme.homepage ~ '/blob/master/README.md' %}*/
/*             <tr>*/
/*                 <td>{{ "PLUGIN_ADMIN.README"|tu }}:</td>*/
/*                 <td><a href="{{ readme_link }}" target="_blank">{{ readme_link }}</a></td>*/
/*             </tr>*/
/*         {% endif %}*/
/*     </table>*/
/* </div>*/
/* */
/* {% if (installed) %}*/
/*     {% set data = admin.data('themes/' ~ admin.route) %}*/
/*     {% include 'partials/blueprints.html.twig' with { data: data, blueprints: data.blueprints } %}*/
/* */
/*     {% if (config.get('system.pages.theme') != admin.route) %}*/
/*     <div class="button-bar danger">*/
/*         <span class="danger-zone"></span>*/
/*         <a class="button" href="{{ uri.addNonce(base_url_relative ~ '/themes/' ~ theme.slug ~ '/task' ~ config.system.param_sep ~ 'uninstall', 'admin-form', 'admin-nonce') }}"><i class="fa fa-fw fa-warning"></i>{{ "PLUGIN_ADMIN.REMOVE_THEME"|tu }}</a>*/
/*     </div>*/
/*     {% endif %}*/
/* {% else %}*/
/*     <div class="button-bar success">*/
/*         <a class="button" href="{{ uri.addNonce(base_url_relative ~ '/themes/' ~ theme.slug ~ '/task' ~ config.system.param_sep ~ 'install', 'admin-form', 'admin-nonce') }}"><i class="fa fa-fw fa-plus"></i>{{ "PLUGIN_ADMIN.INSTALL_THEME"|tu }}</a>*/
/*     </div>*/
/* {% endif %}*/
/* */
/* */
/* */
/* */
/* */

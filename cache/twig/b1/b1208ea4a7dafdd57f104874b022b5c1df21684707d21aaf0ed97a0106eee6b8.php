<?php

/* partials/themes-list.html.twig */
class __TwigTemplate_5ccdb234d2632286ca927808c6758c26862802b56cd8d98e4775720a66338260 extends Twig_Template
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
        echo "<div class=\"grav-update themes\"></div>

<h1>
    ";
        // line 4
        echo (((isset($context["installing"]) ? $context["installing"] : null)) ? ($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AVAILABLE_THEMES")) : ($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALLED_THEMES")));
        echo "
</h1>

<div class=\"themes card-row grid fixed-blocks pure-g\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('GravTwigExtension')->ksortFilter($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "themes", array(0 =>  !(isset($context["installing"]) ? $context["installing"] : null)), "method"), "toArray", array())));
        foreach ($context['_seq'] as $context["slug"] => $context["theme"]) {
            // line 9
            echo "        ";
            $context["state"] = "inactive";
            // line 10
            echo "        ";
            if ((isset($context["installing"]) ? $context["installing"] : null)) {
                $context["state"] = "installing";
            }
            // line 11
            echo "        ";
            if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "system.pages.theme"), "method") == $context["slug"])) {
                $context["state"] = "active";
            }
            // line 12
            echo "
        <div class=\"theme card-item pure-u-1-3 ";
            // line 13
            echo (isset($context["state"]) ? $context["state"] : null);
            echo "-theme\" data-gpm-theme=\"";
            echo twig_urlencode_filter($context["slug"]);
            echo "\">
            <div class=\"gpm-name\">
                <i class=\"fa fa-fw fa-";
            // line 15
            echo $this->getAttribute($context["theme"], "icon", array());
            echo "\"></i>
                <a href=\"";
            // line 16
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/themes/";
            echo twig_urlencode_filter($context["slug"]);
            echo "\">";
            echo $this->getAttribute($context["theme"], "name", array());
            echo "</a>
                ";
            // line 17
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isTeamGrav", array(0 => $context["theme"]), "method")) {
                // line 18
                echo "                    <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.GRAV_OFFICIAL_THEME");
                echo "\"></i></span></small>
                ";
            }
            // line 20
            echo "                ";
            if ($this->getAttribute($context["theme"], "symlink", array())) {
                // line 21
                echo "                    <span class=\"hint--bottom\"  data-hint=\"";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED");
                echo "\">
                    <i class=\"fa fa-fw fa-link\"></i>
                </span>
                ";
            }
            // line 25
            echo "                <span class=\"gpm-version\">v";
            echo $this->getAttribute($context["theme"], "version", array());
            echo "</span>
            </div>
            <div class=\"gpm-screenshot\">
                ";
            // line 28
            $context["thumb"] = (((isset($context["installing"]) ? $context["installing"] : null)) ? (("//getgrav.org/images/" . $this->getAttribute($context["theme"], "screenshot", array()))) : ($this->getAttribute($context["theme"], "thumbnail", array())));
            // line 29
            echo "                <a href=\"";
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/themes/";
            echo twig_urlencode_filter($context["slug"]);
            echo "\"><img src=\"";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" /></a>
            </div>
            ";
            // line 31
            if (((isset($context["state"]) ? $context["state"] : null) == "installing")) {
                // line 32
                echo "                <div class=\"gpm-actions\">
                    <a class=\"button\" href=\"";
                // line 33
                echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/themes/") . $context["slug"]) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "install"), 1 => "admin-form", 2 => "admin-nonce"), "method");
                echo "\"><i class=\"fa fa-plus\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALL");
                echo "</a>
                </div>
            ";
            } elseif ((            // line 35
(isset($context["state"]) ? $context["state"] : null) == "active")) {
                // line 36
                echo "                <div class=\"gpm-actions\">
                    <i class=\"fa fa-star\"></i> ";
                // line 37
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACTIVE_THEME");
                echo "
                </div>
            ";
            } else {
                // line 40
                echo "                <a data-remodal-target=\"theme-switch-warn\" href=\"";
                echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/themes/") . $context["slug"]) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "activate"), 1 => "admin-form", 2 => "admin-nonce"), "method");
                echo "\" class=\"gpm-actions\">
                    ";
                // line 41
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACTIVATE");
                echo "
                </a>
            ";
            }
            // line 44
            echo "

        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</div>

<div class=\"remodal theme-switcher\" data-remodal-id=\"theme-switch-warn\" data-remodal-options=\"hashTracking: false\">
    <form>
        <h1>";
        // line 52
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SWITCHING_TO");
        echo " <strong>{theme_name}</strong></h1>
        <p class=\"bigger\">
            ";
        // line 54
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SWITCHING_TO_DESCRIPTION");
        echo "
        </p>
        <p class=\"bigger\">
            ";
        // line 57
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SWITCHING_TO_CONFIRMATION");
        echo " <strong>{theme_name}</strong>?
        </p>
        <br>
        <div class=\"button-bar\">
            <a class=\"button secondary remodal-cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 61
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL");
        echo "</a>
            <a class=\"button continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i>";
        // line 62
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE");
        echo "</a>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/themes-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 62,  175 => 61,  168 => 57,  162 => 54,  157 => 52,  151 => 48,  142 => 44,  136 => 41,  131 => 40,  125 => 37,  122 => 36,  120 => 35,  113 => 33,  110 => 32,  108 => 31,  98 => 29,  96 => 28,  89 => 25,  81 => 21,  78 => 20,  72 => 18,  70 => 17,  62 => 16,  58 => 15,  51 => 13,  48 => 12,  43 => 11,  38 => 10,  35 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }
}
/* <div class="grav-update themes"></div>*/
/* */
/* <h1>*/
/*     {{ installing ? "PLUGIN_ADMIN.AVAILABLE_THEMES"|tu : "PLUGIN_ADMIN.INSTALLED_THEMES"|tu }}*/
/* </h1>*/
/* */
/* <div class="themes card-row grid fixed-blocks pure-g">*/
/*     {% for slug, theme in admin.themes(not installing).toArray|ksort %}*/
/*         {% set state = 'inactive' %}*/
/*         {% if (installing) %}{% set state = 'installing' %}{% endif %}*/
/*         {% if (config.get('system.pages.theme') == slug) %}{% set state = 'active' %}{% endif %}*/
/* */
/*         <div class="theme card-item pure-u-1-3 {{ state }}-theme" data-gpm-theme="{{ slug|url_encode }}">*/
/*             <div class="gpm-name">*/
/*                 <i class="fa fa-fw fa-{{ theme.icon }}"></i>*/
/*                 <a href="{{ base_url_relative }}/themes/{{ slug|url_encode }}">{{ theme.name }}</a>*/
/*                 {% if admin.isTeamGrav(theme) %}*/
/*                     <small><span class="info-reverse"><i class="fa fa-check-circle" title="{{ "PLUGIN_ADMIN.GRAV_OFFICIAL_THEME"|tu }}"></i></span></small>*/
/*                 {% endif %}*/
/*                 {% if theme.symlink %}*/
/*                     <span class="hint--bottom"  data-hint="{{ "PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED"|tu }}">*/
/*                     <i class="fa fa-fw fa-link"></i>*/
/*                 </span>*/
/*                 {% endif %}*/
/*                 <span class="gpm-version">v{{ theme.version }}</span>*/
/*             </div>*/
/*             <div class="gpm-screenshot">*/
/*                 {% set thumb = installing ? '//getgrav.org/images/' ~ theme.screenshot : theme.thumbnail %}*/
/*                 <a href="{{ base_url_relative }}/themes/{{ slug|url_encode }}"><img src="{{ thumb }}" /></a>*/
/*             </div>*/
/*             {% if (state == 'installing') %}*/
/*                 <div class="gpm-actions">*/
/*                     <a class="button" href="{{ uri.addNonce(base_url_relative ~ '/themes/' ~ slug ~ '/task' ~ config.system.param_sep ~ 'install', 'admin-form', 'admin-nonce') }}"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.INSTALL"|tu }}</a>*/
/*                 </div>*/
/*             {% elseif state == 'active' %}*/
/*                 <div class="gpm-actions">*/
/*                     <i class="fa fa-star"></i> {{ "PLUGIN_ADMIN.ACTIVE_THEME"|tu }}*/
/*                 </div>*/
/*             {% else %}*/
/*                 <a data-remodal-target="theme-switch-warn" href="{{ uri.addNonce(base_url_relative ~ '/themes/' ~ slug ~ '/task' ~ config.system.param_sep ~ 'activate', 'admin-form', 'admin-nonce') }}" class="gpm-actions">*/
/*                     {{ "PLUGIN_ADMIN.ACTIVATE"|tu }}*/
/*                 </a>*/
/*             {% endif %}*/
/* */
/* */
/*         </div>*/
/*     {% endfor %}*/
/* </div>*/
/* */
/* <div class="remodal theme-switcher" data-remodal-id="theme-switch-warn" data-remodal-options="hashTracking: false">*/
/*     <form>*/
/*         <h1>{{ "PLUGIN_ADMIN.SWITCHING_TO"|tu }} <strong>{theme_name}</strong></h1>*/
/*         <p class="bigger">*/
/*             {{ "PLUGIN_ADMIN.SWITCHING_TO_DESCRIPTION"|tu }}*/
/*         </p>*/
/*         <p class="bigger">*/
/*             {{ "PLUGIN_ADMIN.SWITCHING_TO_CONFIRMATION"|tu }} <strong>{theme_name}</strong>?*/
/*         </p>*/
/*         <br>*/
/*         <div class="button-bar">*/
/*             <a class="button secondary remodal-cancel" href="#"><i class="fa fa-fw fa-close"></i> {{ "PLUGIN_ADMIN.CANCEL"|tu }}</a>*/
/*             <a class="button continue" href="#"><i class="fa fa-fw fa-check"></i>{{ "PLUGIN_ADMIN.CONTINUE"|tu }}</a>*/
/*         </div>*/
/*     </form>*/
/* </div>*/
/* */

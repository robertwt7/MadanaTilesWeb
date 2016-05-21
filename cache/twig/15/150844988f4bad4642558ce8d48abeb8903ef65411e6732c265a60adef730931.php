<?php

/* partials/plugins-list.html.twig */
class __TwigTemplate_d37562655bd24cbf09fad2f3d34378ce15d903fba32d08d08c41770c8df4a46c extends Twig_Template
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
        echo "<div class=\"grav-update plugins\"></div>

<h1>
    ";
        // line 4
        echo (((isset($context["installing"]) ? $context["installing"] : null)) ? ($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AVAILABLE_PLUGINS")) : ($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALLED_PLUGINS")));
        echo "
</h1>

<table>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('GravTwigExtension')->ksortFilter($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array(0 =>  !(isset($context["installing"]) ? $context["installing"] : null)), "method"), "toArray", array())));
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
        foreach ($context['_seq'] as $context["slug"] => $context["plugin"]) {
            // line 9
            echo "        ";
            $context["data"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => ("plugins/" . $context["slug"])), "method");
            // line 10
            echo "
        <tr data-gpm-plugin=\"";
            // line 11
            echo twig_urlencode_filter($context["slug"]);
            echo "\">
            <td class=\"gpm-name\">
                <i class=\"fa fa-fw fa-";
            // line 13
            echo $this->getAttribute($context["plugin"], "icon", array());
            echo "\"></i>
                <a href=\"";
            // line 14
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/plugins/";
            echo twig_urlencode_filter($context["slug"]);
            echo "\">";
            echo $this->getAttribute($context["plugin"], "name", array());
            echo "</a>
                ";
            // line 15
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isTeamGrav", array(0 => $context["plugin"]), "method")) {
                // line 16
                echo "                    <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN");
                echo "\"></i></span></small>
                ";
            }
            // line 18
            echo "                ";
            if ($this->getAttribute($context["plugin"], "symlink", array())) {
                // line 19
                echo "                <span class=\"hint--bottom\"  data-hint=\"";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED");
                echo "\">
                    <i class=\"fa fa-fw fa-link\"></i>
                </span>
                ";
            }
            // line 23
            echo "                <span class=\"gpm-version\">v";
            echo $this->getAttribute($context["plugin"], "version", array());
            echo "</span>
            </td>
            <td class=\"gpm-actions\">
                ";
            // line 26
            if (( !(isset($context["installing"]) ? $context["installing"] : null) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "form", array()), "fields", array()), "enabled", array()), "type", array()) != "hidden"))) {
                // line 27
                echo "                    <a class=\"";
                echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "get", array(0 => "enabled"), "method")) ? ("enabled") : ("disabled"));
                echo "\" href=\"";
                echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/plugins/") . $context["slug"]) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "get", array(0 => "enabled"), "method")) ? ("disable") : ("enable"))), 1 => "admin-form", 2 => "admin-nonce"), "method");
                echo "\">
                        <i class=\"fa fa-fw fa-toggle-";
                // line 28
                echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "get", array(0 => "enabled"), "method")) ? ("on") : ("off"));
                echo "\"></i>
                    </a>
                ";
            } elseif (            // line 30
(isset($context["installing"]) ? $context["installing"] : null)) {
                // line 31
                echo "                    <a class=\"button\" href=\"";
                echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/plugins/") . $context["slug"]) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "install"), 1 => "admin-form", 2 => "admin-nonce"), "method");
                echo "\"><i class=\"fa fa-plus\"></i> Install</a>
                ";
            }
            // line 33
            echo "                <span class=\"gpm-details-expand\"><i class=\"fa fa-chevron-down\"></i></span>
            </td>
            <td class=\"gpm-details\">
                <div class=\"table-wrapper\">
                    ";
            // line 37
            $this->loadTemplate("partials/plugin-data.html.twig", "partials/plugins-list.html.twig", 37)->display(array_merge($context, array("plugin" => $context["plugin"])));
            // line 38
            echo "                </div>
            </td>
        </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "partials/plugins-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 42,  127 => 38,  125 => 37,  119 => 33,  113 => 31,  111 => 30,  106 => 28,  99 => 27,  97 => 26,  90 => 23,  82 => 19,  79 => 18,  73 => 16,  71 => 15,  63 => 14,  59 => 13,  54 => 11,  51 => 10,  48 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }
}
/* <div class="grav-update plugins"></div>*/
/* */
/* <h1>*/
/*     {{ installing ? "PLUGIN_ADMIN.AVAILABLE_PLUGINS"|tu : "PLUGIN_ADMIN.INSTALLED_PLUGINS"|tu }}*/
/* </h1>*/
/* */
/* <table>*/
/*     {% for slug, plugin in admin.plugins(not installing).toArray|ksort %}*/
/*         {% set data = admin.data('plugins/' ~ slug) %}*/
/* */
/*         <tr data-gpm-plugin="{{ slug|url_encode }}">*/
/*             <td class="gpm-name">*/
/*                 <i class="fa fa-fw fa-{{ plugin.icon }}"></i>*/
/*                 <a href="{{ base_url_relative }}/plugins/{{ slug|url_encode }}">{{ plugin.name }}</a>*/
/*                 {% if admin.isTeamGrav(plugin) %}*/
/*                     <small><span class="info-reverse"><i class="fa fa-check-circle" title="{{ "PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN"|tu }}"></i></span></small>*/
/*                 {% endif %}*/
/*                 {% if plugin.symlink %}*/
/*                 <span class="hint--bottom"  data-hint="{{ "PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED"|tu }}">*/
/*                     <i class="fa fa-fw fa-link"></i>*/
/*                 </span>*/
/*                 {% endif %}*/
/*                 <span class="gpm-version">v{{ plugin.version }}</span>*/
/*             </td>*/
/*             <td class="gpm-actions">*/
/*                 {% if (not installing and (plugin.form.fields.enabled.type != 'hidden')) %}*/
/*                     <a class="{{ data.get('enabled') ? 'enabled' : 'disabled' }}" href="{{ uri.addNonce(base_url_relative ~ '/plugins/' ~ slug ~ '/task' ~ config.system.param_sep ~ (data.get('enabled') ? 'disable' : 'enable'), 'admin-form', 'admin-nonce') }}">*/
/*                         <i class="fa fa-fw fa-toggle-{{ data.get('enabled') ? 'on' : 'off' }}"></i>*/
/*                     </a>*/
/*                 {% elseif (installing) %}*/
/*                     <a class="button" href="{{ uri.addNonce(base_url_relative ~ '/plugins/' ~ slug ~ '/task' ~ config.system.param_sep ~ 'install', 'admin-form', 'admin-nonce') }}"><i class="fa fa-plus"></i> Install</a>*/
/*                 {% endif %}*/
/*                 <span class="gpm-details-expand"><i class="fa fa-chevron-down"></i></span>*/
/*             </td>*/
/*             <td class="gpm-details">*/
/*                 <div class="table-wrapper">*/
/*                     {% include 'partials/plugin-data.html.twig' with { plugin: plugin } %}*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* </table>*/
/* */

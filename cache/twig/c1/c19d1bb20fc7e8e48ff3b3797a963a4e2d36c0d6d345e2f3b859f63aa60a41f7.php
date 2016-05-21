<?php

/* partials/plugin-data.html.twig */
class __TwigTemplate_f2650424d86eb48bad73a14334a24ff7b205c0dff1905e87a880c3d3d4e9f6a7 extends Twig_Template
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
        echo "<table>
    ";
        // line 2
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "author", array())) {
            // line 3
            echo "    <tr>
        <td>";
            // line 4
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AUTHOR");
            echo ":</td>
        <td>
            ";
            // line 6
            if ($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "author", array()), "url", array())) {
                // line 7
                echo "                <a href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "author", array()), "url", array());
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "author", array()), "name", array());
                echo "</a>
            ";
            } else {
                // line 9
                echo "                ";
                echo $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "author", array()), "name", array());
                echo "
            ";
            }
            // line 11
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "author", array()), "email", array())) {
                // line 12
                echo "                - <a href=\"mailto:";
                echo $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "author", array()), "email", array());
                echo "\">";
                echo $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "author", array()), "email", array());
                echo "</a>
            ";
            }
            // line 14
            echo "        </td>
    </tr>
    ";
        }
        // line 17
        echo "    ";
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "homepage", array())) {
            // line 18
            echo "        <tr>
            <td>";
            // line 19
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.HOMEPAGE");
            echo ":</td>
            <td><a href=\"";
            // line 20
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "homepage", array());
            echo "\" target=\"_blank\">";
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "homepage", array());
            echo "</a></td>
        </tr>
    ";
        }
        // line 23
        echo "    ";
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "demo", array())) {
            // line 24
            echo "        <tr>
            <td>";
            // line 25
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DEMO");
            echo ":</td>
            <td><a href=\"";
            // line 26
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "demo", array());
            echo "\" target=\"_blank\">";
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "demo", array());
            echo "</a></td>
        </tr>
    ";
        }
        // line 29
        echo "    ";
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "bugs", array())) {
            // line 30
            echo "        <tr>
            <td>";
            // line 31
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BUG_TRACKER");
            echo ":</td>
            <td><a href=\"";
            // line 32
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "bugs", array());
            echo "\" target=\"_blank\">";
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "bugs", array());
            echo "</a></td>
        </tr>
    ";
        }
        // line 35
        echo "    ";
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "keywords", array())) {
            // line 36
            echo "        <tr>
            <td>";
            // line 37
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.KEYWORDS");
            echo ":</td>
            <td>";
            // line 38
            echo twig_join_filter($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "keywords", array()), ", ");
            echo "</td>
        </tr>
    ";
        }
        // line 41
        echo "    ";
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "license", array())) {
            // line 42
            echo "        <tr>
            <td>";
            // line 43
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LICENSE");
            echo ":</td>
            <td>";
            // line 44
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "license", array());
            echo "</td>
        </tr>
    ";
        }
        // line 47
        echo "
    ";
        // line 48
        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "description", array())) {
            // line 49
            echo "        <tr>
            <td>";
            // line 50
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DESCRIPTION");
            echo ":</td>
            <td>";
            // line 51
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "description_html", array());
            echo "</td>
        </tr>
    ";
        }
        // line 54
        echo "
    ";
        // line 55
        if (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "readme", array()) || $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "homepage", array()))) {
            // line 56
            echo "        ";
            $context["readme_link"] = (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "readme", array())) ? ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "readme", array())) : ((($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "docs", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "docs", array()), ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "homepage", array()) . "/blob/master/README.md"))) : (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "homepage", array()) . "/blob/master/README.md")))));
            // line 57
            echo "        <tr>
            <td>";
            // line 58
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.README");
            echo ":</td>
            <td><a href=\"";
            // line 59
            echo (isset($context["readme_link"]) ? $context["readme_link"] : null);
            echo "\" target=\"_blank\">";
            echo (isset($context["readme_link"]) ? $context["readme_link"] : null);
            echo "</a></td>
        </tr>
    ";
        }
        // line 62
        echo "
</table>
";
    }

    public function getTemplateName()
    {
        return "partials/plugin-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 62,  183 => 59,  179 => 58,  176 => 57,  173 => 56,  171 => 55,  168 => 54,  162 => 51,  158 => 50,  155 => 49,  153 => 48,  150 => 47,  144 => 44,  140 => 43,  137 => 42,  134 => 41,  128 => 38,  124 => 37,  121 => 36,  118 => 35,  110 => 32,  106 => 31,  103 => 30,  100 => 29,  92 => 26,  88 => 25,  85 => 24,  82 => 23,  74 => 20,  70 => 19,  67 => 18,  64 => 17,  59 => 14,  51 => 12,  48 => 11,  42 => 9,  34 => 7,  32 => 6,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <table>*/
/*     {% if plugin.author %}*/
/*     <tr>*/
/*         <td>{{ "PLUGIN_ADMIN.AUTHOR"|tu }}:</td>*/
/*         <td>*/
/*             {% if plugin.author.url %}*/
/*                 <a href="{{ plugin.author.url }}" target="_blank">{{ plugin.author.name }}</a>*/
/*             {% else %}*/
/*                 {{ plugin.author.name }}*/
/*             {% endif %}*/
/*             {% if plugin.author.email %}*/
/*                 - <a href="mailto:{{ plugin.author.email }}">{{ plugin.author.email }}</a>*/
/*             {% endif %}*/
/*         </td>*/
/*     </tr>*/
/*     {% endif %}*/
/*     {% if plugin.homepage %}*/
/*         <tr>*/
/*             <td>{{ "PLUGIN_ADMIN.HOMEPAGE"|tu }}:</td>*/
/*             <td><a href="{{ plugin.homepage }}" target="_blank">{{ plugin.homepage }}</a></td>*/
/*         </tr>*/
/*     {% endif %}*/
/*     {% if plugin.demo %}*/
/*         <tr>*/
/*             <td>{{ "PLUGIN_ADMIN.DEMO"|tu }}:</td>*/
/*             <td><a href="{{ plugin.demo }}" target="_blank">{{ plugin.demo }}</a></td>*/
/*         </tr>*/
/*     {% endif %}*/
/*     {% if plugin.bugs %}*/
/*         <tr>*/
/*             <td>{{ "PLUGIN_ADMIN.BUG_TRACKER"|tu }}:</td>*/
/*             <td><a href="{{ plugin.bugs }}" target="_blank">{{ plugin.bugs }}</a></td>*/
/*         </tr>*/
/*     {% endif %}*/
/*     {% if plugin.keywords %}*/
/*         <tr>*/
/*             <td>{{ "PLUGIN_ADMIN.KEYWORDS"|tu }}:</td>*/
/*             <td>{{ plugin.keywords|join(', ') }}</td>*/
/*         </tr>*/
/*     {% endif %}*/
/*     {% if plugin.license %}*/
/*         <tr>*/
/*             <td>{{ "PLUGIN_ADMIN.LICENSE"|tu }}:</td>*/
/*             <td>{{ plugin.license }}</td>*/
/*         </tr>*/
/*     {% endif %}*/
/* */
/*     {% if plugin.description %}*/
/*         <tr>*/
/*             <td>{{ "PLUGIN_ADMIN.DESCRIPTION"|tu }}:</td>*/
/*             <td>{{ plugin.description_html }}</td>*/
/*         </tr>*/
/*     {% endif %}*/
/* */
/*     {% if plugin.readme or plugin.homepage %}*/
/*         {% set readme_link = plugin.readme ?: plugin.docs|default(plugin.homepage ~ '/blob/master/README.md') %}*/
/*         <tr>*/
/*             <td>{{ "PLUGIN_ADMIN.README"|tu }}:</td>*/
/*             <td><a href="{{ readme_link }}" target="_blank">{{ readme_link }}</a></td>*/
/*         </tr>*/
/*     {% endif %}*/
/* */
/* </table>*/
/* */

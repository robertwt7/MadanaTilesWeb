<?php

/* users.html.twig */
class __TwigTemplate_98050bb4002edf0d348083be01347d00df0e737ecf17cb34b7e3eecc2f7a1169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "users.html.twig", 1);
        $this->blocks = array(
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
            $context["user"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => ("users/" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()))), "method");
            // line 5
            $context["title"] = (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.USER") . ": ") . twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())));
        } else {
            // line 8
            $context["title"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.USERS");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_titlebar($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if ( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) {
            // line 14
            echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\"><i class=\"fa fa-plus\"></i> ";
            // line 15
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_ACCOUNT");
            echo "</a>
        </div>
        <h1><i class=\"fa fa-fw fa-users\"></i> ";
            // line 17
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.USERS");
            echo "</h1>
    ";
        } else {
            // line 19
            echo "        <div class=\"button-bar\">
            ";
            // line 20
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin-pro", array(), "array"), "enabled", array())) {
                // line 21
                echo "            <a class=\"button\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/users\"><i class=\"fa fa-reply\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
                echo "</a>
            ";
            }
            // line 23
            echo "            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE");
            echo "</button>
        </div>
        <h1><i class=\"fa fa-fw fa-user\"></i> ";
            // line 25
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.USER");
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()));
            echo "</h1>
    ";
        }
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "    <div>
        ";
        // line 31
        $this->loadTemplate("partials/messages.html.twig", "users.html.twig", 31)->display($context);
        // line 32
        echo "
        ";
        // line 33
        if ( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) {
            // line 34
            echo "            ";
            $this->loadTemplate("partials/users-list.html.twig", "users.html.twig", 34)->display($context);
            // line 35
            echo "
            <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
                ";
            // line 37
            $this->loadTemplate("partials/blueprints-new.html.twig", "users.html.twig", 37)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "user/account_new"), "method"))));
            // line 38
            echo "            </div>
        ";
        } else {
            // line 40
            echo "            ";
            $this->loadTemplate("partials/users-details.html.twig", "users.html.twig", 40)->display($context);
            // line 41
            echo "        ";
        }
        // line 42
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 42,  116 => 41,  113 => 40,  109 => 38,  107 => 37,  103 => 35,  100 => 34,  98 => 33,  95 => 32,  93 => 31,  90 => 30,  87 => 29,  78 => 25,  72 => 23,  64 => 21,  62 => 20,  59 => 19,  54 => 17,  49 => 15,  46 => 14,  43 => 13,  40 => 12,  36 => 1,  33 => 8,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% if admin.route %}*/
/*     {% set user = admin.data('users/' ~ admin.route) %}*/
/*     {% set title = "PLUGIN_ADMIN.USER"|tu ~ ": " ~ admin.route|e %}*/
/* */
/* {% else %}*/
/*     {% set title = "PLUGIN_ADMIN.USERS"|tu %}*/
/* {% endif %}*/
/* */
/* */
/* {% block titlebar %}*/
/*     {% if not admin.route %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="#modal" data-remodal-target="modal"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.ADD_ACCOUNT"|tu }}</a>*/
/*         </div>*/
/*         <h1><i class="fa fa-fw fa-users"></i> {{ "PLUGIN_ADMIN.USERS"|tu }}</h1>*/
/*     {% else %}*/
/*         <div class="button-bar">*/
/*             {% if config.plugins["admin-pro"].enabled %}*/
/*             <a class="button" href="{{ base_url }}/users"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*             {% endif %}*/
/*             <button class="button" type="submit" name="task" value="save" form="blueprints"><i class="fa fa-check"></i> {{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*         </div>*/
/*         <h1><i class="fa fa-fw fa-user"></i> {{ "PLUGIN_ADMIN.USER"|tu }}: {{ user.username|e }}</h1>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div>*/
/*         {% include 'partials/messages.html.twig' %}*/
/* */
/*         {% if not admin.route %}*/
/*             {% include 'partials/users-list.html.twig' %}*/
/* */
/*             <div class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking: false">*/
/*                 {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('user/account_new') } %}*/
/*             </div>*/
/*         {% else %}*/
/*             {% include 'partials/users-details.html.twig' %}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */

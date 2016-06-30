<?php

/* login.html.twig */
class __TwigTemplate_04a1330383ef41cc4796031818aa09e814d9cc02c8fdb4ed9bf0046ddb24b8e5 extends Twig_Template
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
        $this->loadTemplate("login.html.twig", "login.html.twig", 1, "1162723116")->display(array_merge($context, array("title" => "Grav Admin Login")));
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* login.html.twig */
class __TwigTemplate_04a1330383ef41cc4796031818aa09e814d9cc02c8fdb4ed9bf0046ddb24b8e5_1162723116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/login.html.twig", "login.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "form", array()), "fields", array()));
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
            // line 5
            echo "            ";
            if ($this->getAttribute($context["field"], "type", array())) {
                // line 6
                echo "                <div>
                    ";
                // line 7
                $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "login.html.twig", 7)->display($context);
                // line 8
                echo "                </div>
            ";
            }
            // line 10
            echo "        ";
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
        // line 11
        echo "
        <div class=\"form-actions secondary-accent\">
            ";
        // line 13
        if ((isset($context["notAuthorized"]) ? $context["notAuthorized"] : null)) {
            // line 14
            echo "                <a class=\"button secondary\" onclick=\"window.history.back()\"><i class=\"fa fa-reply\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
            echo "</a>
                <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> ";
            // line 15
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGOUT");
            echo "</button>
            ";
        } else {
            // line 17
            echo "                ";
            if ( !(isset($context["authenticated"]) ? $context["authenticated"] : null)) {
                // line 18
                echo "                    <a class=\"button secondary\" href=\"";
                echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                echo "/forgot\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGIN_BTN_FORGOT");
                echo "</a>
                    <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login\"><i class=\"fa fa-sign-in\"></i> ";
                // line 19
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGIN_BTN");
                echo "</button>
                ";
            } else {
                // line 21
                echo "                    <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"logout\"><i class=\"fa fa-sign-in\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGOUT");
                echo "</button>
                ";
            }
            // line 23
            echo "            ";
        }
        // line 24
        echo "        </div>

    ";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 24,  147 => 23,  141 => 21,  136 => 19,  129 => 18,  126 => 17,  121 => 15,  116 => 14,  114 => 13,  110 => 11,  96 => 10,  92 => 8,  90 => 7,  87 => 6,  84 => 5,  66 => 4,  63 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/login.html.twig' with {title:'Grav Admin Login'} %}*/
/* */
/*     {% block form %}*/
/*         {% for field in page.header.form.fields %}*/
/*             {% if field.type %}*/
/*                 <div>*/
/*                     {% include ["forms/fields/#{field.type}/#{field.type}.html.twig", 'forms/fields/text/text.html.twig'] %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*         <div class="form-actions secondary-accent">*/
/*             {% if notAuthorized %}*/
/*                 <a class="button secondary" onclick="window.history.back()"><i class="fa fa-reply"></i> {{ 'PLUGIN_ADMIN.BACK'|tu }}</a>*/
/*                 <button type="submit" class="button primary" name="task" value="logout"><i class="fa fa-sign-in"></i> {{ 'PLUGIN_ADMIN.LOGOUT'|tu }}</button>*/
/*             {% else %}*/
/*                 {% if not authenticated %}*/
/*                     <a class="button secondary" href="{{ base_url_relative }}/forgot"><i class="fa fa-exclamation-circle"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN_FORGOT'|tu }}</a>*/
/*                     <button type="submit" class="button primary" name="task" value="login"><i class="fa fa-sign-in"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN'|tu }}</button>*/
/*                 {% else %}*/
/*                     <button type="submit" class="button primary" name="task" value="logout"><i class="fa fa-sign-in"></i> {{ 'PLUGIN_ADMIN.LOGOUT'|tu }}</button>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*     {% endblock %}*/
/* */
/* {% endembed %}*/
/* */

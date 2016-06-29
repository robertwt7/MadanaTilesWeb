<?php

/* forms/fields/markdown/markdown.html.twig */
class __TwigTemplate_139b419eaeb26f6ff6c064bc1d3de443adb1236b5085497e6cb93d6f3acbaa09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('label', $context, $blocks);
        // line 9
        $this->displayBlock('field', $context, $blocks);
    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array())) {
            // line 5
            echo "        ";
            $context["hint"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) ? ((("data-hint=\"" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) . "\"")) : (""));
            // line 6
            echo "        <div class=\"form-label form-field hint--bottom\" ";
            echo (isset($context["hint"]) ? $context["hint"] : null);
            echo ">";
            echo $this->env->getExtension('GravTwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()));
            echo "</div>
    ";
        }
    }

    // line 9
    public function block_field($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"form-field\">
        <div class=\"form-data form-markdown-wrapper cm-s-paper\">
            <textarea data-grav-mdeditor=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("markdown" => true)), "html_attr");
        echo "\" name=\"";
        echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        echo "\" ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "showPreview", array())) {
            echo "data-grav-preview-enabled=\"true\"";
        }
        echo " data-grav-urlpreview=\"";
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/media/";
        echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
        echo ".json\">";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), "
"), "html");
        echo "</textarea>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/markdown/markdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  54 => 10,  51 => 9,  41 => 6,  38 => 5,  35 => 4,  32 => 3,  28 => 9,  26 => 3,  23 => 2,  21 => 1,);
    }
}
/* {% set value = (value is null ? field.default : value) %}*/
/* */
/* {% block label %}*/
/*     {% if field.label %}*/
/*         {% set hint = field.help ? 'data-hint="' ~ field.help ~ '"': '' %}*/
/*         <div class="form-label form-field hint--bottom" {{ hint }}>{{ field.label|t }}</div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* {% block field %}*/
/*     <div class="form-field">*/
/*         <div class="form-data form-markdown-wrapper cm-s-paper">*/
/*             <textarea data-grav-mdeditor="{{ { 'markdown': true }|json_encode|e('html_attr') }}" name="{{ (scope ~ field.name)|fieldName }}" {% if field.showPreview %}data-grav-preview-enabled="true"{% endif %} data-grav-urlpreview="{{ base_url }}/media/{{ admin.route|trim('/') }}.json">{{ value|join("\n")|e('html') }}</textarea>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/

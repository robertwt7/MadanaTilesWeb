<?php

/* home.html.twig */
class __TwigTemplate_dbccc78f13ba00a5b58878803a8780070fe838d4fbf1f6824f9919416213b467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"kotak\">
\t\t<div class=\"pertama\"></div>
\t\t<div class=\"kedua\"></div>
\t\t<div class=\"ketiga\"></div>
\t\t<div class=\"keempat\">";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* 	<div class="kotak">*/
/* 		<div class="pertama"></div>*/
/* 		<div class="kedua"></div>*/
/* 		<div class="ketiga"></div>*/
/* 		<div class="keempat">{{ page.content }}</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */

<?php

/* techspec.html.twig */
class __TwigTemplate_233f9581db15aacb1a2611f1e4769a4287e237b4cd6aa58142aa6862f42c48a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "techspec.html.twig", 1);
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
        echo "    <div class=\"container\">
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-8\"><br>
            <span class=\"dot1\"></span>
            <h1 style=\"display:inline-block\"> Spesifikasi Teknis </h1>
            <span class=\"dot1\"></span><br><br>
            <h3>Spesifikasi Produk</h3>
            <div class=\"col-sm-8\">
                ";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
            </div>
            <div class=\"col-sm-4\" style=\"padding-top:30px\"><img id=\"techpic\"></div>
        </div>
        <div class=\"col-sm-2\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "techspec.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="container">*/
/*         <div class="col-sm-2"></div>*/
/*         <div class="col-sm-8"><br>*/
/*             <span class="dot1"></span>*/
/*             <h1 style="display:inline-block"> Spesifikasi Teknis </h1>*/
/*             <span class="dot1"></span><br><br>*/
/*             <h3>Spesifikasi Produk</h3>*/
/*             <div class="col-sm-8">*/
/*                 {{ page.content }}*/
/*             </div>*/
/*             <div class="col-sm-4" style="padding-top:30px"><img id="techpic"></div>*/
/*         </div>*/
/*         <div class="col-sm-2"></div>*/
/*     </div>*/
/* {% endblock %}*/

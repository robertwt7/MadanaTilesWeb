<?php

/* pattern.html.twig */
class __TwigTemplate_da3314223464cfddd2d11355ceb2394bae97fc8e1071d4cece9fe74e2887e85b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "pattern.html.twig", 1);
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
        echo "<div class=\"container\"><br><br>
        <div class=\"row text-center\"><span class=\"dot3\"></span>
            <h3 style=\"display:inline-block\"> PATTERN </h3>
            <span class=\"dot3\"></span><br></div>
        <div class=\"row\"><br>
            <div class=\"col-sm-1\"></div>
            <div class=\"col-sm-10\">
            <h3 id=\"sq\">SQUARE</h3><br>
                <div class=\"row pattern\">
                    ";
        // line 13
        echo $this->env->getExtension('twih')->bagianS();
        echo "
                    ";
        // line 15
        echo "            <br><br><br>
            <h3 id=\"he\">HEXAGONAL</h3><br>
                <div class=\"row pattern\">
                    ";
        // line 18
        echo $this->env->getExtension('twih')->bagianH();
        echo "
                    ";
        // line 20
        echo "            <br><br><br>
            <br><br><br>
            <h3 id=\"etc\">COLONIAL</h3><br>
                <div class=\"row pattern\">
                    ";
        // line 24
        echo $this->env->getExtension('twih')->bagianE();
        echo "
            </div>
        </div>
        <div class=\"col-sm-1\"></div>
    </div><br><br><br><br><br>
    <div id=\"zoomshow\">
        <div>
            <div class=\"pattern-block\">
                <button role=\"button\" class=\"btn btn-default\" id=\"closezoom\">X</button>
                <img class=\"img-responsive zoomi\">
                <div class=\"pattern-text\"></div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "pattern.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 24,  55 => 20,  51 => 18,  46 => 15,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* <div class="container"><br><br>*/
/*         <div class="row text-center"><span class="dot3"></span>*/
/*             <h3 style="display:inline-block"> PATTERN </h3>*/
/*             <span class="dot3"></span><br></div>*/
/*         <div class="row"><br>*/
/*             <div class="col-sm-1"></div>*/
/*             <div class="col-sm-10">*/
/*             <h3 id="sq">SQUARE</h3><br>*/
/*                 <div class="row pattern">*/
/*                     {{ bagianS() }}*/
/*                     {#div closenya ada di php#}*/
/*             <br><br><br>*/
/*             <h3 id="he">HEXAGONAL</h3><br>*/
/*                 <div class="row pattern">*/
/*                     {{ bagianH() }}*/
/*                     {#div closenya ada di php#}*/
/*             <br><br><br>*/
/*             <br><br><br>*/
/*             <h3 id="etc">COLONIAL</h3><br>*/
/*                 <div class="row pattern">*/
/*                     {{ bagianE() }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-1"></div>*/
/*     </div><br><br><br><br><br>*/
/*     <div id="zoomshow">*/
/*         <div>*/
/*             <div class="pattern-block">*/
/*                 <button role="button" class="btn btn-default" id="closezoom">X</button>*/
/*                 <img class="img-responsive zoomi">*/
/*                 <div class="pattern-text"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */

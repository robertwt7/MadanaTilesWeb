<?php

/* shape.html.twig */
class __TwigTemplate_d02ce4f1ac4e2aca1df0c07698e312c5935c9da722182f69042d5e5d37662eea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "shape.html.twig", 1);
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
        <h3 style=\"display:inline-block\"> SHAPE </h3>
        <span class=\"dot3\"></span><br></div>
    <div class=\"row\"><br>
        <div class=\"col-sm-4\"></div>
        <div class=\"col-sm-4\">
    <h4>Enchaustic tile shape</h4><br>
            <div class=\"col-sm-4 text-center\">
                <div class=\"img-responsive\" id=\"shape4\"></div><br>
                20x20cm
                <h6>SQUARE</h6>
            </div>
            <div class=\"col-sm-4 text-center\">
                <div class=\"img-responsive\" id=\"shape2\"></div><br>
                20x20cm
                <h6>HEXAGONAL</h6>
            </div>
            <div class=\"col-sm-4 text-center\">
                <div class=\"img-responsive\" id=\"shape3\"></div><br>
                20x20cm
                <h6>COLONIAL</h6>
            </div>
        </div>
        <div class=\"col-sm-4\"></div>
    </div>
    <br><br><br><div class=\"row text-center\"><span class=\"dot3\"></span>
        <h3 style=\"display:inline-block\"> COLOR </h3>
        <span class=\"dot3\"></span><br></div><br>
    <div class=\"row\">
        ";
        // line 35
        echo "        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-8\">
            ";
        // line 37
        echo $this->env->getExtension('twih')->shapecolor();
        echo "
        </div>
        <div class=\"col-sm-2\"></div>
    </div><br><hr><br><br><br><br>
</div>
";
    }

    public function getTemplateName()
    {
        return "shape.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 37,  63 => 35,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* <div class="container"><br><br>*/
/*     <div class="row text-center"><span class="dot3"></span>*/
/*         <h3 style="display:inline-block"> SHAPE </h3>*/
/*         <span class="dot3"></span><br></div>*/
/*     <div class="row"><br>*/
/*         <div class="col-sm-4"></div>*/
/*         <div class="col-sm-4">*/
/*     <h4>Enchaustic tile shape</h4><br>*/
/*             <div class="col-sm-4 text-center">*/
/*                 <div class="img-responsive" id="shape4"></div><br>*/
/*                 20x20cm*/
/*                 <h6>SQUARE</h6>*/
/*             </div>*/
/*             <div class="col-sm-4 text-center">*/
/*                 <div class="img-responsive" id="shape2"></div><br>*/
/*                 20x20cm*/
/*                 <h6>HEXAGONAL</h6>*/
/*             </div>*/
/*             <div class="col-sm-4 text-center">*/
/*                 <div class="img-responsive" id="shape3"></div><br>*/
/*                 20x20cm*/
/*                 <h6>COLONIAL</h6>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-4"></div>*/
/*     </div>*/
/*     <br><br><br><div class="row text-center"><span class="dot3"></span>*/
/*         <h3 style="display:inline-block"> COLOR </h3>*/
/*         <span class="dot3"></span><br></div><br>*/
/*     <div class="row">*/
/*         {#Tempat warna#}*/
/*         <div class="col-sm-2"></div>*/
/*         <div class="col-sm-8">*/
/*             {{ shapecolor() }}*/
/*         </div>*/
/*         <div class="col-sm-2"></div>*/
/*     </div><br><hr><br><br><br><br>*/
/* </div>*/
/* {% endblock %}*/
/* */

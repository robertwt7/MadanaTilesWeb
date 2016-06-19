<?php

/* contact.html.twig */
class __TwigTemplate_02eac542000158ab923dcb0f0ca0daece6826bd9a50399a56aa02b90e7890393 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "contact.html.twig", 1);
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
        echo "\t<div class=\"container-fluid contact\" style=\"background-color:#ffeeee\">
        <br><br><h3 class=\"text-center\">CONTACT US</h3><br>
        <div class=\"row\">
            <h6>GET TOUCH WITH US!</h6>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div class=\"row\">
                    <div class=\"col-sm-3 color-white\">Name</div>
                    <div class=\"col-sm-9\"><input type=\"text\" style=\"width:100%\"></div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-3 color-white\">Email</div>
                    <div class=\"col-sm-9\"><input type=\"text\" style=\"width:100%\"></div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-3 color-white\">Message</div>
                    <div class=\"col-sm-9\"><input type=\"text\" style=\"width:100%\"></div>
                </div>
            </div>
            <div class=\"col-sm-3\">Jl. Kalimanjang 9 Surabaya<br>HP: ....<br>Fax: ...</div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-5 text-center\"><input type=\"button\" value=\"Submit\"></div>
        </div>
        <div class=\"row\">
            <h6>LOCATION</h6>
        </div>
        <div class=\"row\">
            <img src=\"#\" alt=\"location\">
        </div><br><br>
    </div>
";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* 	<div class="container-fluid contact" style="background-color:#ffeeee">*/
/*         <br><br><h3 class="text-center">CONTACT US</h3><br>*/
/*         <div class="row">*/
/*             <h6>GET TOUCH WITH US!</h6>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-4">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-3 color-white">Name</div>*/
/*                     <div class="col-sm-9"><input type="text" style="width:100%"></div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-sm-3 color-white">Email</div>*/
/*                     <div class="col-sm-9"><input type="text" style="width:100%"></div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-sm-3 color-white">Message</div>*/
/*                     <div class="col-sm-9"><input type="text" style="width:100%"></div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-3">Jl. Kalimanjang 9 Surabaya<br>HP: ....<br>Fax: ...</div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-5 text-center"><input type="button" value="Submit"></div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <h6>LOCATION</h6>*/
/*         </div>*/
/*         <div class="row">*/
/*             <img src="#" alt="location">*/
/*         </div><br><br>*/
/*     </div>*/
/* {% endblock %}*/
/* */

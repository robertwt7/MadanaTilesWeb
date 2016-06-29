<?php

/* partials/socialbutton.html.twig */
class __TwigTemplate_924e29cbc0adb799051e2d4a4b58273560ce90f73d83c510fba568cd32e17365 extends Twig_Template
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
        echo "<ul class=\"sos\">
    ";
        // line 2
        if ($this->getAttribute((isset($context["sosbut"]) ? $context["sosbut"] : null), "ienabled", array())) {
            // line 3
            echo "        <li class=\"ig\">
            <a href=\"";
            // line 4
            echo $this->getAttribute((isset($context["sosbut"]) ? $context["sosbut"] : null), "instagramloc", array());
            echo "\"></a>
        <li>
    ";
        }
        // line 7
        echo "    ";
        if ($this->getAttribute((isset($context["sosbut"]) ? $context["sosbut"] : null), "fenabled", array())) {
            // line 8
            echo "        <li class=\"fb\">
            <a href=\"";
            // line 9
            echo $this->getAttribute((isset($context["sosbut"]) ? $context["sosbut"] : null), "facebookloc", array());
            echo "\"></a>
        <li>
    ";
        }
        // line 12
        echo "    ";
        if ($this->getAttribute((isset($context["sosbut"]) ? $context["sosbut"] : null), "tenabled", array())) {
            // line 13
            echo "        <li class=\"tw\">
            <a href=\"";
            // line 14
            echo $this->getAttribute((isset($context["sosbut"]) ? $context["sosbut"] : null), "twitterloc", array());
            echo "\"></a>
        <li>
    ";
        }
        // line 17
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "partials/socialbutton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  51 => 14,  48 => 13,  45 => 12,  39 => 9,  36 => 8,  33 => 7,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="sos">*/
/*     {%if sosbut.ienabled %}*/
/*         <li class="ig">*/
/*             <a href="{{ sosbut.instagramloc }}"></a>*/
/*         <li>*/
/*     {% endif %}*/
/*     {%if sosbut.fenabled %}*/
/*         <li class="fb">*/
/*             <a href="{{ sosbut.facebookloc }}"></a>*/
/*         <li>*/
/*     {% endif %}*/
/*     {%if sosbut.tenabled %}*/
/*         <li class="tw">*/
/*             <a href="{{ sosbut.twitterloc }}"></a>*/
/*         <li>*/
/*     {% endif %}*/
/* </ul>*/

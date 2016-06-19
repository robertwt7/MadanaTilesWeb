<?php

/* partials/base.html.twig */
class __TwigTemplate_2aa15b5b2ebd10951a3ca696027b1488b9403e9842a670fb7dcbfe0c6916e36a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'socialbutton' => array($this, 'block_socialbutton'),
            'langswitcher' => array($this, 'block_langswitcher'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
<head>

";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 33
        echo "</head>
<body class=\"";
        // line 34
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
        ";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 81
        echo "
        ";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "\t\t
        ";
        // line 88
        $this->displayBlock('footer', $context, $blocks);
        // line 91
        echo "</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "\t";
        // line 19
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
\t
\t";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "\t\t";
        // line 14
        echo "\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/main.css", 1 => 101), "method");
        // line 15
        echo "\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bootstrap.min.css", 1 => 102), "method");
        // line 16
        echo "\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pages.css", 1 => 103), "method");
        // line 17
        echo "    ";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js", 1 => 101), "method");
        // line 23
        echo "\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/bootstrap.min.js"), "method");
        // line 24
        echo "
\t\t";
        // line 25
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 26
            echo "\t\t\t";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "method");
            // line 27
            echo "\t\t\t";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            // line 28
            echo "\t\t";
        }
        // line 29
        echo "
\t\t";
        // line 30
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
\t";
    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        // line 36
        echo "        <header id=\"header\">
\t\t\t<div class=\"container\">
                <div class=\"sbut\">
                    ";
        // line 39
        $this->displayBlock('socialbutton', $context, $blocks);
        // line 44
        echo "                </div>
\t\t\t\t<div class=\"bahasa\">
\t\t\t\t\t";
        // line 47
        echo "\t\t\t\t\t";
        $this->displayBlock('langswitcher', $context, $blocks);
        // line 52
        echo "\t\t\t\t</div>
\t\t\t\t<a href=\"";
        // line 53
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\" id=\"logo\"></a>
\t\t\t\t
\t\t\t</div>
        </header>
\t\t<nav class=\"navbar navbar-default\">
\t\t\t<div class=\"container-fluid\">
\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t<div class=\"navbar-header\">
\t\t\t  <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t  </button>
\t\t\t</div>

\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t<div id=\"navbar\" class=\"collapse navbar-collapse\">
\t\t\t\t";
        // line 72
        echo "\t\t\t\t";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 75
        echo "\t\t\t\t";
        // line 76
        echo "\t\t\t</div><!-- /.navbar-collapse -->
\t\t  </div><!-- /.container-fluid -->
\t\t</nav>
\t\t
        ";
    }

    // line 39
    public function block_socialbutton($context, array $blocks = array())
    {
        // line 40
        echo "\t\t\t\t\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "socialbutton", array()), "enabled", array())) {
            // line 41
            echo "\t\t\t\t\t\t";
            $this->loadTemplate("partials/socialbutton.html.twig", "partials/base.html.twig", 41)->display($context);
            // line 42
            echo "\t\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t\t";
    }

    // line 47
    public function block_langswitcher($context, array $blocks = array())
    {
        // line 48
        echo "\t\t\t\t\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 49
            echo "\t\t\t\t\t\t";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 49)->display($context);
            // line 50
            echo "\t\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t";
    }

    // line 72
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 73
        echo "\t\t\t\t";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 73)->display($context);
        // line 74
        echo "\t\t\t\t";
    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
        // line 83
        echo "        <section id=\"body\" class=\"container\">
            ";
        // line 84
        $this->displayBlock('content', $context, $blocks);
        // line 85
        echo "        </section>
        ";
    }

    // line 84
    public function block_content($context, array $blocks = array())
    {
    }

    // line 88
    public function block_footer($context, array $blocks = array())
    {
        // line 89
        echo "\t\t\t";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 89)->display($context);
        // line 90
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 90,  270 => 89,  267 => 88,  262 => 84,  257 => 85,  255 => 84,  252 => 83,  249 => 82,  245 => 74,  242 => 73,  239 => 72,  235 => 51,  232 => 50,  229 => 49,  226 => 48,  223 => 47,  219 => 43,  216 => 42,  213 => 41,  210 => 40,  207 => 39,  199 => 76,  197 => 75,  194 => 72,  173 => 53,  170 => 52,  167 => 47,  163 => 44,  161 => 39,  156 => 36,  153 => 35,  147 => 30,  144 => 29,  141 => 28,  138 => 27,  135 => 26,  133 => 25,  130 => 24,  127 => 23,  124 => 22,  121 => 21,  117 => 17,  114 => 16,  111 => 15,  108 => 14,  106 => 13,  103 => 12,  99 => 21,  93 => 19,  91 => 18,  89 => 12,  84 => 10,  80 => 9,  71 => 7,  68 => 6,  65 => 5,  59 => 91,  57 => 88,  54 => 87,  52 => 82,  49 => 81,  47 => 35,  43 => 34,  40 => 33,  38 => 5,  32 => 2,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getActive ?: theme_config.default_lang }}">*/
/* <head>*/
/* */
/* {% block head %}*/
/*     <meta charset="utf-8" />*/
/*     <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*     <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png', true) }}" />*/
/*     <link rel="canonical" href="{{ page.url(true, true) }}" />*/
/* */
/*     {% block stylesheets %}*/
/* 		{#Ini angka 101, 10 adalah default, 1 adalah urutan penempatan, 1 berarti duluan diatas#}*/
/* 		{% do assets.addCss('theme://css/main.css',101) %}*/
/* 		{% do assets.addCss('theme://css/bootstrap.min.css',102) %}*/
/* 		{% do assets.addCss('theme://css/pages.css',103) %}*/
/*     {% endblock %}*/
/* 	{#Rendering CSS Below...#}*/
/*     {{ assets.css() }}*/
/* 	*/
/* 	{% block javascripts %}*/
/* 		{% do assets.add('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', 101) %}*/
/* 		{% do assets.add('theme://js/bootstrap.min.js') %}*/
/* */
/* 		{% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/* 			{% do assets.add('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') %}*/
/* 			{% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}*/
/* 		{% endif %}*/
/* */
/* 		{{ assets.js() }}*/
/* 	{% endblock %}*/
/* {% endblock head%}*/
/* </head>*/
/* <body class="{{ page.header.body_classes }}">*/
/*         {% block header %}*/
/*         <header id="header">*/
/* 			<div class="container">*/
/*                 <div class="sbut">*/
/*                     {% block socialbutton %}*/
/* 						{% if config.plugins.socialbutton.enabled %}*/
/* 						{% include 'partials/socialbutton.html.twig' %}*/
/* 						{% endif %}*/
/* 					{% endblock %}*/
/*                 </div>*/
/* 				<div class="bahasa">*/
/* 					{# Bahasa Cuman 2 #}*/
/* 					{% block langswitcher %}*/
/* 						{% if config.plugins.langswitcher.enabled %}*/
/* 						{% include 'partials/langswitcher.html.twig' %}*/
/* 						{% endif %}*/
/* 					{% endblock %}*/
/* 				</div>*/
/* 				<a href="{{ base_url == '' ? '/' : base_url }}" id="logo"></a>*/
/* 				*/
/* 			</div>*/
/*         </header>*/
/* 		<nav class="navbar navbar-default">*/
/* 			<div class="container-fluid">*/
/* 			<!-- Brand and toggle get grouped for better mobile display -->*/
/* 			<div class="navbar-header">*/
/* 			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">*/
/* 				<span class="sr-only">Toggle navigation</span>*/
/* 				<span class="icon-bar"></span>*/
/* 				<span class="icon-bar"></span>*/
/* 				<span class="icon-bar"></span>*/
/* 			  </button>*/
/* 			</div>*/
/* */
/* 			<!-- Collect the nav links, forms, and other content for toggling -->*/
/* 			<div id="navbar" class="collapse navbar-collapse">*/
/* 				{#Menu Bar#}*/
/* 				{% block header_navigation %}*/
/* 				{% include 'partials/navigation.html.twig' %}*/
/* 				{% endblock %}*/
/* 				{#Menu Bar#}*/
/* 			</div><!-- /.navbar-collapse -->*/
/* 		  </div><!-- /.container-fluid -->*/
/* 		</nav>*/
/* 		*/
/*         {% endblock %}*/
/* */
/*         {% block body %}*/
/*         <section id="body" class="container">*/
/*             {% block content %}{% endblock %}*/
/*         </section>*/
/*         {% endblock %}*/
/* 		*/
/*         {% block footer %}*/
/* 			{% include 'partials/footer.html.twig' %}*/
/*         {% endblock %}*/
/* </body>*/
/* </html>*/
/* */

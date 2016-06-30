<?php

/* tiles.html.twig */
class __TwigTemplate_c8f5fa437f4da3770eee2435b24cbc436cd01642687d3be788660b684ce84b80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "tiles.html.twig", 1);
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
        echo "\t<div class=\"mine\" style=\"padding:30px;text-align:center;\">
\t\t<h2>Untuk Mengubah Tiles dan Warna, Klik tombol dibawah ini</h2>
\t\t<form method=\"POST\" target=\"tiles\" action=\"";
        // line 6
        echo $this->env->getExtension('twih')->location();
        echo "/settings.php\">
\t\t<input type=\"hidden\" name=\"username\" value=\"admin\">
\t\t<input type=\"hidden\" name=\"password\" value=\"admin\">
\t\t<button type=\"submit\" id=\"openframe\">Buka Pengaturan Tiles</button>
\t\t</form>
\t</div>
\t<div id=\"hidden\">
\t\t<div>
\t\t\t<iframe name=\"tiles\"></iframe>
\t\t\t<button class=\"close\"><h2>X</h2></button>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "tiles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* 	<div class="mine" style="padding:30px;text-align:center;">*/
/* 		<h2>Untuk Mengubah Tiles dan Warna, Klik tombol dibawah ini</h2>*/
/* 		<form method="POST" target="tiles" action="{{ lokasi() }}/settings.php">*/
/* 		<input type="hidden" name="username" value="admin">*/
/* 		<input type="hidden" name="password" value="admin">*/
/* 		<button type="submit" id="openframe">Buka Pengaturan Tiles</button>*/
/* 		</form>*/
/* 	</div>*/
/* 	<div id="hidden">*/
/* 		<div>*/
/* 			<iframe name="tiles"></iframe>*/
/* 			<button class="close"><h2>X</h2></button>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */

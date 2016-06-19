<?php

/* partials/navigation.html.twig */
class __TwigTemplate_9ee21ce6814e937914379dabf7d6b937e74b099e4ce6cd300ae4937135d43781 extends Twig_Template
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
        // line 13
        echo "
";
        // line 37
        echo "
";
        // line 55
        echo "
<ul class=\"nav navbar-nav\">
    ";
        // line 57
        echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
        echo "
</ul>

";
        // line 60
        echo $this->getAttribute($this, "third", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
    }

    // line 2
    public function getloopc($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 4
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 5
                echo "        <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\">
            <a href=\"";
                // line 6
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">
                ";
                // line 7
                if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 8
                echo "                ";
                echo $this->getAttribute($context["p"], "menu", array());
                echo "
            </a>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 16
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 17
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 18
                    echo "\t\t\t\t<li class=\"";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo " dropdown\">
\t\t\t\t\t<a href=\"";
                    // line 19
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\" class=\"drop-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t";
                    // line 20
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></i>";
                    }
                    // line 21
                    echo "\t\t\t\t\t\t";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo " <span class=\"diamond-icon\"></span>
\t\t\t\t\t</a>\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t";
                    // line 24
                    echo $this->getAttribute($this, "loopc", array(0 => $context["p"]), "method");
                    echo "
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t";
                } else {
                    // line 28
                    echo "\t\t\t\t<li class=\"";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo "\">
\t\t\t\t\t<a href=\"";
                    // line 29
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">
\t\t\t\t\t\t";
                    // line 30
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></i>";
                    }
                    // line 31
                    echo "\t\t\t\t\t\t";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
\t\t\t\t\t</a>\t\t\t\t
\t\t\t\t</li>
            ";
                }
                // line 35
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 42
    public function getthird($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 43
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 44
                echo "            ";
                if ((($this->getAttribute($this->getAttribute($context["p"], "children", array()), "count", array()) > 0) && ($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array())))) {
                    // line 45
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["p"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["pp"]) {
                        // line 46
                        echo "\t\t\t\t\t    ";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($context["pp"], "children", array()), "visible", array()), "count", array()) > 0)) {
                            // line 47
                            echo "\t\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-child\">
\t\t\t\t\t\t\t\t";
                            // line 48
                            echo $this->getAttribute($this, "loopc", array(0 => $context["pp"]), "method");
                            echo "
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                        }
                        // line 51
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pp'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    echo "            ";
                }
                // line 53
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 53,  227 => 52,  221 => 51,  215 => 48,  212 => 47,  209 => 46,  204 => 45,  201 => 44,  196 => 43,  184 => 42,  169 => 35,  161 => 31,  155 => 30,  151 => 29,  146 => 28,  139 => 24,  132 => 21,  126 => 20,  122 => 19,  117 => 18,  114 => 17,  111 => 16,  106 => 15,  94 => 14,  74 => 8,  68 => 7,  64 => 6,  59 => 5,  56 => 4,  51 => 3,  39 => 2,  35 => 60,  29 => 57,  25 => 55,  22 => 37,  19 => 13,);
    }
}
/* {#Ini untuk load sampai ke Childnya - Based On Antimetter Grav#}*/
/* {% macro loopc(page) %}*/
/*     {% for p in page.children.visible %}*/
/*         {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}*/
/*         <li class="{{ current_page }}">*/
/*             <a href="{{ p.url }}">*/
/*                 {% if p.header.icon %}<i class="fa fa-{{ p.header.icon }}"></i>{% endif %}*/
/*                 {{ p.menu }}*/
/*             </a>*/
/*         </li>*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* {% macro loop(page) %}*/
/*     {% for p in page.children.visible %}*/
/*         {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}*/
/*             {% if p.children.visible.count > 0 %}*/
/* 				<li class="{{ current_page }} dropdown">*/
/* 					<a href="{{ p.url }}" class="drop-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/* 						{% if p.header.icon %}<i class="fa fa-{{ p.header.icon }}"></i>{% endif %}*/
/* 						{{ p.menu }} <span class="diamond-icon"></span>*/
/* 					</a>				*/
/* 					<ul class="dropdown-menu">*/
/* 						{{ _self.loopc(p) }}*/
/* 					</ul>*/
/* 				</li>*/
/* 			{% else %}*/
/* 				<li class="{{ current_page }}">*/
/* 					<a href="{{ p.url }}">*/
/* 						{% if p.header.icon %}<i class="fa fa-{{ p.header.icon }}"></i>{% endif %}*/
/* 						{{ p.menu }}*/
/* 					</a>				*/
/* 				</li>*/
/*             {% endif %}*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* {# Third finding : Benyamin Limanto 2016 #}*/
/* {# ----- Mencari Anak di setelah 3 ----- #}*/
/* {# ---- Jalan kalau parent ditempati --- #}*/
/* {# ----- Mencari Anak di setelah 3 ----- #}*/
/* {% macro third(page) %}*/
/*     {% for p in page.children.visible %}*/
/*             {% if p.children.count > 0 and (p.active or p.activeChild)%}*/
/* 				{% for pp in p.children %}*/
/* 					    {% if pp.children.visible.count > 0 %}*/
/* 							<ul class="nav navbar-nav navbar-child">*/
/* 								{{ _self.loopc(pp) }}*/
/* 							</ul>*/
/* 						{% endif %}*/
/* 				{% endfor %}*/
/*             {% endif %}*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* <ul class="nav navbar-nav">*/
/*     {{ _self.loop(pages) }}*/
/* </ul>*/
/* */
/* {{ _self.third(pages) }}*/

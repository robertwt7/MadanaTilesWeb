<?php

/* coba.html.twig */
class __TwigTemplate_b611ffd3ae0a1235d426bbc4c02541387ff306b2bba3c58da766d57869dfc6d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "coba.html.twig", 1);
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
        echo "\t
        <div class=\"row\">
            <div class=\"col-md-2\">
                <br><br><br>
                <div class=\"listTiles\">
                    <ul class=\"listg\">
                    \t";
        // line 9
        echo $this->env->getExtension('twih')->fetchGambar();
        echo "
                    </ul>
                </div>
            </div>
            <div class=\"col-md-5\">
                <div class=\"col-md-7\">
                    <br><br>
                    <h4 class=\"text-center\">TEKEL ANDA</h4>
                    <h4 class=\"text-center\"><span id=\"bRotasi\" class=\"glyphicon  glyphicon-repeat\" role=\"button\"></span></h4>
                    <canvas id=\"that\" width=\"230\" height=\"230\"></canvas>
                    <img src=\"";
        // line 19
        echo $this->env->getExtension('twih')->location();
        echo "motive/sqr/6.png\" width=\"230\" height=\"230\" class=\"gambar\">
                    <!--<input type=\"color\" id=\"cpik\">-->
                    <button class=\"btn btn-default clear\">Clear</button><br>
                    <div class=\"hidden\">
                        <canvas id=\"rotate\" width=\"230\" height=\"230\"></canvas>
                        <canvas id=\"temp\" width=\"800\" height=\"500\"></canvas>
                        <canvas id=\"trap\" width=\"800\" height=\"500\"></canvas>
                        <canvas id=\"hsim\" width=\"800\" height=\"500\"></canvas>
                    </div>
                    <img src=\"\" alt=\"\" id=\"himg\"><br><br>
                    <div id=\"prevc\" style=\"width:70px; height: 70px; background:#000000; margin:auto; border: 8px solid #bbbbbb\"></div>
                </div>
                <div class=\"col-md-5\" style=\"background: #222222; color: #ffffff; padding: 100px 15px 100px 15px\">
                \t";
        // line 32
        echo $this->env->getExtension('twih')->fetchWarna();
        echo "    
                </div>
            </div>
            <span class=\"dot1\"></span>
            <h2 style=\"display:inline-block\"> Simulasi </h2>
            <span class=\"dot1\"></span><br><br>
            <h5 style=\"display:inline-block\"> PILIH DAN COBA TEKEL ANDA DISINI </h5>
            <div class=\"col-md-5 ruangan\">
                <div class=\"row\">
                    <!-- Baris 1 -->
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"thumbnail\">
                            <a href=\"#\"><img src=\"";
        // line 44
        echo $this->env->getExtension('twih')->location();
        echo "r1.png\" id=\"r1\"></a>
                            <div class=\"caption\">
                                <h6 id=\"hh\">Ruang Keluarga 1</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"thumbnail\">
                            <a href=\"#\"><img src=\"";
        // line 52
        echo $this->env->getExtension('twih')->location();
        echo "r2.png\" id=\"r2\"></a>
                            <div class=\"caption\">
                                <h6>Ruang Keluarga 2</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"thumbnail\">
                            <a href=\"#\"><img src=\"";
        // line 60
        echo $this->env->getExtension('twih')->location();
        echo "r3.png\" id=\"r3\"></a>
                            <div class=\"caption\">
                                <h6>Kamar Mandi</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Baris 2 -->
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"thumbnail\">
                            <a href=\"#\"><img src=\"";
        // line 69
        echo $this->env->getExtension('twih')->location();
        echo "r4.png\" id=\"r4\"></a>
                            <div class=\"caption\">
                                <h6>Ruang Makan</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"thumbnail\">
                            <a href=\"#\"><img src=\"";
        // line 77
        echo $this->env->getExtension('twih')->location();
        echo "r5.png\" id=\"r5\"></a>
                            <div class=\"caption\">
                                <h6>Kamar Tidur</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"thumbnail\">
                            <a href=\"#\"><img src=\"";
        // line 85
        echo $this->env->getExtension('twih')->location();
        echo "r6.png\" id=\"r6\"></a>
                            <div class=\"caption\">
                                <h6>Ruang Masuk</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Baris 3 -->
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"thumbnail\">
                            <a href=\"#\"><img src=\"";
        // line 94
        echo $this->env->getExtension('twih')->location();
        echo "r7.png\" id=\"r7\"></a>
                            <div class=\"caption\">
                                <h6>Ruang Kerja</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"thumbnail\">
                            <a href=\"#\"><img src=\"";
        // line 102
        echo $this->env->getExtension('twih')->location();
        echo "r8.png\" id=\"r8\"></a>
                            <div class=\"caption\">
                                <h6>Dapur</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-4\">
                        <div class=\"thumbnail\">
                            <a href=\"#\"><img src=\"";
        // line 110
        echo $this->env->getExtension('twih')->location();
        echo "r9.png\" id=\"r9\"></a>
                            <div class=\"caption\">
                                <h6>Virtual Floor</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div> <!-- clossing row body -->
    </div> <!-- clossing Container body -->
    <div id=\"virtualfloor\">
        <div>
            <a href='#' class='btn btn-default cvt' role='button'>X</a>
            <a href='#' class='btn btn-default dvt' role='button'>Clear the floor</a>
            ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "   
                ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                echo "<img class=\"floor\">";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "coba.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 127,  195 => 125,  189 => 124,  172 => 110,  161 => 102,  150 => 94,  138 => 85,  127 => 77,  116 => 69,  104 => 60,  93 => 52,  82 => 44,  67 => 32,  51 => 19,  38 => 9,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}	*/
/*         <div class="row">*/
/*             <div class="col-md-2">*/
/*                 <br><br><br>*/
/*                 <div class="listTiles">*/
/*                     <ul class="listg">*/
/*                     	{{ gambar() }}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-5">*/
/*                 <div class="col-md-7">*/
/*                     <br><br>*/
/*                     <h4 class="text-center">TEKEL ANDA</h4>*/
/*                     <h4 class="text-center"><span id="bRotasi" class="glyphicon  glyphicon-repeat" role="button"></span></h4>*/
/*                     <canvas id="that" width="230" height="230"></canvas>*/
/*                     <img src="{{ lokasi() }}motive/sqr/6.png" width="230" height="230" class="gambar">*/
/*                     <!--<input type="color" id="cpik">-->*/
/*                     <button class="btn btn-default clear">Clear</button><br>*/
/*                     <div class="hidden">*/
/*                         <canvas id="rotate" width="230" height="230"></canvas>*/
/*                         <canvas id="temp" width="800" height="500"></canvas>*/
/*                         <canvas id="trap" width="800" height="500"></canvas>*/
/*                         <canvas id="hsim" width="800" height="500"></canvas>*/
/*                     </div>*/
/*                     <img src="" alt="" id="himg"><br><br>*/
/*                     <div id="prevc" style="width:70px; height: 70px; background:#000000; margin:auto; border: 8px solid #bbbbbb"></div>*/
/*                 </div>*/
/*                 <div class="col-md-5" style="background: #222222; color: #ffffff; padding: 100px 15px 100px 15px">*/
/*                 	{{ color() }}    */
/*                 </div>*/
/*             </div>*/
/*             <span class="dot1"></span>*/
/*             <h2 style="display:inline-block"> Simulasi </h2>*/
/*             <span class="dot1"></span><br><br>*/
/*             <h5 style="display:inline-block"> PILIH DAN COBA TEKEL ANDA DISINI </h5>*/
/*             <div class="col-md-5 ruangan">*/
/*                 <div class="row">*/
/*                     <!-- Baris 1 -->*/
/*                     <div class="col-sm-6 col-md-4">*/
/*                         <div class="thumbnail">*/
/*                             <a href="#"><img src="{{ lokasi() }}r1.png" id="r1"></a>*/
/*                             <div class="caption">*/
/*                                 <h6 id="hh">Ruang Keluarga 1</h6>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-sm-6 col-md-4">*/
/*                         <div class="thumbnail">*/
/*                             <a href="#"><img src="{{ lokasi() }}r2.png" id="r2"></a>*/
/*                             <div class="caption">*/
/*                                 <h6>Ruang Keluarga 2</h6>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-sm-6 col-md-4">*/
/*                         <div class="thumbnail">*/
/*                             <a href="#"><img src="{{ lokasi() }}r3.png" id="r3"></a>*/
/*                             <div class="caption">*/
/*                                 <h6>Kamar Mandi</h6>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Baris 2 -->*/
/*                     <div class="col-sm-6 col-md-4">*/
/*                         <div class="thumbnail">*/
/*                             <a href="#"><img src="{{ lokasi() }}r4.png" id="r4"></a>*/
/*                             <div class="caption">*/
/*                                 <h6>Ruang Makan</h6>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-sm-6 col-md-4">*/
/*                         <div class="thumbnail">*/
/*                             <a href="#"><img src="{{ lokasi() }}r5.png" id="r5"></a>*/
/*                             <div class="caption">*/
/*                                 <h6>Kamar Tidur</h6>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-sm-6 col-md-4">*/
/*                         <div class="thumbnail">*/
/*                             <a href="#"><img src="{{ lokasi() }}r6.png" id="r6"></a>*/
/*                             <div class="caption">*/
/*                                 <h6>Ruang Masuk</h6>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- Baris 3 -->*/
/*                     <div class="col-sm-6 col-md-4">*/
/*                         <div class="thumbnail">*/
/*                             <a href="#"><img src="{{ lokasi() }}r7.png" id="r7"></a>*/
/*                             <div class="caption">*/
/*                                 <h6>Ruang Kerja</h6>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-sm-6 col-md-4">*/
/*                         <div class="thumbnail">*/
/*                             <a href="#"><img src="{{ lokasi() }}r8.png" id="r8"></a>*/
/*                             <div class="caption">*/
/*                                 <h6>Dapur</h6>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-sm-6 col-md-4">*/
/*                         <div class="thumbnail">*/
/*                             <a href="#"><img src="{{ lokasi() }}r9.png" id="r9"></a>*/
/*                             <div class="caption">*/
/*                                 <h6>Virtual Floor</h6>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>    */
/*         </div> <!-- clossing row body -->*/
/*     </div> <!-- clossing Container body -->*/
/*     <div id="virtualfloor">*/
/*         <div>*/
/*             <a href='#' class='btn btn-default cvt' role='button'>X</a>*/
/*             <a href='#' class='btn btn-default dvt' role='button'>Clear the floor</a>*/
/*             {% for i in 1..5 %}   */
/*                 {% for j in 1..8%}<img class="floor">{% endfor %}<br>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/

<?php
namespace Grav\Plugin;
use Grav\Common\Grav;
class twih extends \Twig_Extension //Membuat sebuah turunan object dari twig extension
{
    public function getName()
    {
        return 'twih';//Dia akan lembarkan object ini, dirinya sendiri ke dalam twig sehingga twig bisa membaca fungsi turunannya
    }
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('gambar', [$this, 'fetchGambar']),
            new \Twig_SimpleFunction('color', [$this, 'fetchWarna']),
            new \Twig_SimpleFunction('lokasi', [$this, 'location']),
            new \Twig_SimpleFunction('shapecolor', [$this, 'shapecolor']),
            new \Twig_SimpleFunction('bagianS', [$this, 'bagianS']),
            new \Twig_SimpleFunction('bagianH', [$this, 'bagianH']),
            new \Twig_SimpleFunction('bagianE', [$this, 'bagianE'])
        ];
    }
    public function fetchGambar()
    {
        $uri = Grav::instance()['base_url_absolute'];//Lokasi Absolute URL, jadi posisinya sebagai bapak
        $lokasi = $uri."/administrator";
        $lokasi2 = GRAV_ROOT."/administrator";
        $myfile = fopen($lokasi."/motive.txt", "r");
        while(!feof($myfile)) {
            //Dapatkan per line
            $f = fgets($myfile);
            // ??????
            $e = substr($f,0,strpos($f,'.')+4);
            $g = substr($f,strpos($f,'^')+1);
            //Menentukan dia tipe apa            
            if (substr($f,strpos($f,'.')+6,3)=="sqr"&&file_exists($lokasi2."/motive/sqr/".$e)) {
                echo "<li><img src='".$lokasi."/motive/sqr/".$e."' class='gambarpil'></li>";
            }
            if (substr($f,strpos($f,'.')+6,3)=="hex"&&file_exists($lokasi2."/motive/hex/".$e)) {
                echo "<li><img src='".$lokasi."/motive/hex/".$e."' class='gambarpil'></li>";
            }
            if (substr($f,strpos($f,'.')+6,3)=="etc"&&file_exists($lokasi2."/motive/etc/".$e)) {
                echo "<li><img src='".$lokasi."/motive/etc/".$e."' class='gambarpil'></li>";
            }
        }
        fclose($myfile);
        echo "asdasdadsad";
    }

    public function fetchWarna()
    {
        //Bagian dari Color 
        //Buka File Color
        $uri = Grav::instance()['base_url_absolute'];//Lokasi Absolute URL, jadi posisinya sebagai bapak
        $lokasi = $uri."/administrator";
        $myfile = fopen($lokasi."/colors.txt", "r");
        $count = 0;
        while(!feof($myfile)) {
            //Readline dari file
            $f = fgets($myfile);
            $c = substr($f,1,strpos($f,']')-1);
            //R
            $r = substr($c,0,strpos($c,','));
            $c = substr($c,strpos($c,',')+1);
            //G
            $g = substr($c,0,strpos($c,','));
            //B
            $b = substr($c,strpos($c,',')+1);
            if ($count % 3>0){
                /* Benyamin Editing 26 jun 2016 
                    Ketika pakai jquery, tidak bisa function yang tidak global di load, karena aku pakai even onready baru di addkan 
                    functionnya 

                    so this's the resolution
                    making an listener on .colorr class, di getkan attr-nya r g b-nya 
                */
                echo "<div style='float:left'>"; 
                echo "<div class='colorr' r=$r g=$g b=$b style='background:RGBA($r,$g,$b,255);width:40px;height:40px;float:left;margin:6px'></div>";
            }
            else {
                echo "<div style='float:left'>";
                    echo "<div style='clear:both;'>";
                    echo "<div class='colorr' r=$r g=$g b=$b style='background:RGBA($r,$g,$b,255);width:40px;height:40px;float:left; margin:6px'></div></div>";}
            
            if ($count+1<10) echo "<div class='text-center'>00".($count+1)."</div>";
            else if ($count+1<100) echo "<div class='text-center'>0".($count+1)."</div>";
            else echo "<div class='text-center'>".($count+1)."</div>";
                echo "</div>";
            $count++;
        }
        fclose($myfile);
    }

    public function location()
    {
        $uri = Grav::instance()['base_url_absolute'];//Lokasi Absolute URL, jadi posisinya sebagai bapak
        $lokasi = $uri."/administrator/";
        return $lokasi;
    }

    public function shapecolor(){
        $uri = Grav::instance()['base_url_absolute'];//Lokasi Absolute URL, jadi posisinya sebagai bapak
        $lokasi = $uri."/administrator";
        $myfile = fopen($lokasi."/colors.txt", "r");
        $count = 1;
        while(!feof($myfile)) {
            $f = fgets($myfile);
            $c = substr($f,1,strpos($f,']')-1);
            $r = substr($c,0,strpos($c,','));
            $c = substr($c,strpos($c,',')+1);
            $g = substr($c,0,strpos($c,','));
            $b = substr($c,strpos($c,',')+1);
            if ($count % 13 > 0) {
            echo "<div class='col-sm-1'style='padding:5px'>";
            echo "<div style='padding:5px;'>";
            echo "<div style='background:RGBA($r,$g,$b,255);width:100%;height:40px'></div>";
                    echo substr($f,strpos($f,']')+1);
            echo "</div></div>";
            } else {
                    echo "</div>";
                    echo "<div class='row'>";
                echo "<div class='col-sm-1'style='padding:5px'>";
            echo "<div style='padding:5px;'>";
            echo "<div style='background:RGBA($r,$g,$b,255);width:100%;height:40px'></div>";
                    echo substr($f,strpos($f,']')+1);
            echo "</div></div>";
            }
        }
        fclose($myfile);
    }

    public function bagianS(){
        $uri = Grav::instance()['base_url_absolute'];//Lokasi Absolute URL, jadi posisinya sebagai bapak
        $lokasi = $uri."/administrator";
        $myfile = fopen($lokasi."/motive.txt", "r");
        $lokasi2 = GRAV_ROOT."/administrator";
        $count = 1;
        if (isset($_GET['l'])) $l = $_GET['l'];
        else $l = 1;
        while(!feof($myfile)) {
            $f = fgets($myfile);
            $e = substr($f,0,strpos($f,'.')+4);
            $g = substr($f,strpos($f,'^')+1);
            if (substr($f,strpos($f,'.')+6,3)=="sqr" && file_exists($lokasi2."/motive/sqr/".$e) && $count <= $l*8) {
                if ($count % 5 > 0) {
                    echo "<div class='col-sm-3'>";
                    echo "<div class='pattern-block'>
                            <button role='button' class='btn-zoom'></button>";
                    echo "<img src=$lokasi/motive/sqr/".$e." class='img-responsive zoomi' style='width:100%;margin:5px;height:200px;background:#dddddd;padding:20px' alt='pattern1'>";
                    echo "<div class='pattern-text'>".$g."</div>";
                    echo "</div></div>";
                    $count++;
                } else {
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "<div class='col-sm-3'>";
                    echo "<div class='pattern-block'>
                            <button role='button' class='btn-zoom'></button>";
                    echo "<img src=$lokasi/motive/sqr/".$e." class='img-responsive zoomi' style='width:100%;margin:5px;height:200px;background:#dddddd;padding:20px' alt='pattern1'>";
                    echo "<div class='pattern-text'>".$g."</div>";
                    echo "</div></div>";
                    $count++;
                }
            }
        }
        fclose($myfile);
        echo "</div>";
        if ($count >= $l || $l < 100) {
            echo "<br><br>
                    <form method='get' action='#sq'>
                        <input type=hidden name=l value=999>
                        <button type='submit' class='loadmore' id='more1'></button>
                    </form>";
        }
    }

    public function bagianH(){
        $uri = Grav::instance()['base_url_absolute'];//Lokasi Absolute URL, jadi posisinya sebagai bapak
        $lokasi = $uri."/administrator";
        $myfile = fopen($lokasi."/motive.txt", "r");
        $lokasi2 = GRAV_ROOT."/administrator";
        $count = 1;
        if (isset($_GET['r'])) $r = $_GET['r'];
        else $r = 1;
        while(!feof($myfile)) {
            $f = fgets($myfile);
            $e = substr($f,0,strpos($f,'.')+4);
            $g = substr($f,strpos($f,'^')+1);
            if (substr($f,strpos($f,'.')+6,3)=="hex" && file_exists($lokasi2."/motive/hex/".$e) && $count <= $r*8) {
                if ($count % 5 > 0) {
                    echo "<div class='col-sm-3'>";
                    echo "<div class='pattern-block'>
                            <button role='button' class='btn-zoom'></button>
                    ";
                    echo "<img src=$lokasi/motive/hex/".$e." class='img-responsive zoomi' style='width:100%;margin:5px;height:200px;background:#dddddd;padding:20px' alt='pattern1'>";
                    echo "<div class='pattern-text'>".$g."</div>";
                    echo "</div></div>";
                    $count++;
                } else {
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "<div class='col-sm-3'>";
                    echo "<div class='pattern-block'>
                            <button role='button' class='btn-zoom'></button>";
                    echo "<img src=$lokasi/motive/hex/".$e." class='img-responsive zoomi' style='width:100%;margin:5px;height:200px;background:#dddddd;padding:20px' alt='pattern1'>";
                    echo "<div class='pattern-text'>".$g."</div>";
                    echo "</div></div>";
                    $count++;
                }
            }
        }
        fclose($myfile);
        echo "</div>";
        if ($count >= $r || $r < 100) {
            echo "<br><br>
                    <form method='get' action='#he'>
                        <input type=hidden name=r value=999>
                        <button type='submit' class='loadmore' id='more2'></button>
                    </form>";
        }
    }

    public function bagianE() {
        $uri = Grav::instance()['base_url_absolute'];//Lokasi Absolute URL, jadi posisinya sebagai bapak
        $lokasi = $uri."/administrator";
        $myfile = fopen($lokasi."/motive.txt", "r");
        $lokasi2 = GRAV_ROOT."/administrator";
        $count = 1;
        if (isset($_GET['d'])) $d = $_GET['d'];
        else $d = 1;
        while(!feof($myfile)) {
            $f = fgets($myfile);
            $e = substr($f,0,strpos($f,'.')+4);
            $g = substr($f,strpos($f,'^')+1);
            if (substr($f,strpos($f,'.')+6,3)=="etc" && file_exists($lokasi2."/motive/etc/".$e) && $count <= $d*8) {
                if ($count % 5 > 0) {
                    echo "<div class='col-sm-3'>";
                    echo "<div class='pattern-block'>
                            <button role='button' class='btn-zoom'></button>";
                    echo "<img src=$lokasi/motive/etc/".$e." class='img-responsive' style='width:100%;margin:5px;height:200px;background:#dddddd;padding:20px' alt='pattern1'>";
                    echo "<div class='pattern-text'>".$g."</div>";
                    echo "</div></div>";
                    $count++;
                } else {
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "<div class='col-sm-3'>";
                    echo "<div class='pattern-block'>
                            <button role='button' class='btn-zoom'></button>";
                    echo "<img src=$lokasi/motive/etc/".$e." class='img-responsive' style='width:100%;margin:5px;height:200px;background:#dddddd;padding:20px' alt='pattern1'>";
                    echo "<div class='pattern-text'>".$g."</div>";
                    echo "</div></div>";
                    $count++;
                }
            }
        }
        fclose($myfile);
        echo "</div>";
        if ($count >= $d || $d < 100) {
            echo "<br><br>
                    <form method='get' action='#etc'>
                        <input type=hidden name=d value=999>
                        <button type='submit' class='loadmore' id='more2'></button>
                    </form>";
        }
    }
}

?>
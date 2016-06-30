<?php
    if (isset($_POST["username"]) && isset($_POST["password"]) && !isset($_COOKIE['admin'])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
        if ($username == "admin" && $password == "admin") {
			setcookie("admin",$username,time()+3600);
		}
    }
    if((isset($_POST["username"]) && isset($_POST["password"])) || isset($_COOKIE['admin'])) {
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN</title>
<link rel="icon" href="#" type="image/png" />
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/pages.css" type="text/css" />
<link rel="stylesheet" href="main.css" type="text/css" />
<link rel="stylesheet" href="../../user/themes/madana/css/newcss.css" type="text/css" />
<script src="js/bootstrap.min.js" /></script>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body style="background-color:#ffbbbb">
    <div class="container-fluid contact">
        <br><h3 class="text-center">Motive List</h3>
        <h1 class="text-center">Madana Tiles</h1>
        <div class="row" style="background:#ffeedd">
            <div class="col-sm-6">
                <span id="t">Add a new motive</span><br>
                <form enctype="multipart/form-data" action="amotive.php" method="post">
                    Motive name : <input type="text" name="ds" id="ds"><br>
                    <div style="float:left">Motive shape : </div>
                    <div style="float:left"><input type="radio" name="mo" id="mo1" value="sqr">Square<br>
                    <input type="radio" name="mo" id="mo2" value="hex">Hexagonal<br>
                    <input type="radio" name="mo" id="mo3" value="etc">Colonial<br></div>
                    <div style="clear:both">
                    Rotate : <input type="checkbox" name="ro">Rotate<br>
                    Image : <input type="file" name="file" id="file" accept=".png"><br>
                    Preview :<br><img src="prev.jpg" id="prev" width="200" height="200"><br>
                    <input type="submit" name="submit" value="Add"></div>
                </form>
            </div>
            <div class="col-sm-6">
                <span id="t">Add a new color</span><br>
                <form action="acolor.php" method="get">
                    Color name : <input type="text" name="nm" id="nm"><br>
                    <input type="radio" name="cl" id="rad1">RGB<br>
                    <input type="radio" name="cl" id="rad2">HEX<br>
                    <div id="rgb" style="display:none">
                        <span><input type="color" id="cp"></span>
                        <div>
                        <span>R: <input type="number" name="r" id="r" value="0"></span><br>
                        <span>G: <input type="number" name="g" id="g" value="0"></span><br>
                        <span>B: <input type="number" name="b" id="b" value="0"></span><br>
                        <span>Ex: R: 100, G: 100, B: 100</span><br>
                        <input type="submit" id="submit1" value="Add"><br></div>
                    </div>
                    <div id="hex" style="display:none">
                        <span>Value: <input type="text" id="v" value="#000000"></span><br>
                        <span>Ex: Value: #ff69b4</span><br>
                        <input type="submit" id="submit2" value="Add"><br>
                    </div>
                </form>
                <div id="cprev" style="width:100px; height:100px; background: rgb(0,0,0);"></div>
            </div>
        </div>
        <?php
        echo "<hr><div class='row' style=''>SQUARE :<br>";
        $myfile = fopen("motive.txt", "r");
        $count = 1;
if (isset($_GET['l'])) $l = $_GET['l'];
else $l = 1;
        while(!feof($myfile)) {
            $f = fgets($myfile);
            $e = substr($f,0,strpos($f,'.')+4);
                    $g = substr($f,strpos($f,'^')+1);
            if (substr($f,strpos($f,'.')+6,3)=="sqr"&&file_exists("motive/sqr/".$e) && $count <= $l*12) {
                if ($count % 7 > 0) {
                    echo "<div class='col-sm-2 text-center'style='padding:5px'>";
                    echo "<div style='padding:5px; background:#ffeedd'>";
                    echo "<form action='change.php' method='post' enctype='multipart/form-data'>Name:<input type='text' name='dc' value='".$g."'>";
                    echo "<input type='hidden' name='ar' value=".$e.">";
                    echo "<input type='hidden' name='re' value='".$g."'>";
                    echo "<input type='hidden' name='ty' value='sqr'>";
                    echo 'Motive shape :<br>';
                    echo '<input type="radio" name="mo" id="mo1" value="sqr" checked="checked">Square<br>';
                    echo '<input type="radio" name="mo" id="mo2" value="hex">Hexagonal<br>';
                    echo '<input type="radio" name="mo" id="mo3" value="etc">Colonial<br>';
                    echo "<input type='submit' value='Change')></form><br>";
                    echo "<img src=motive/sqr/".$e." width='100%' height='200'><br>";
                    echo "rotate : ".substr($f,strpos($f,'.')+4,1)."<br>";
                    echo "<button type='button' onclick=\"window.location.assign('delt.php?de=sqr/".$g."')\">Delete</button>";
                    echo "</div></div>";
                    $count++;
                } else {
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "<div class='col-sm-2 text-center'style='padding:5px'>";
                    echo "<div style='padding:5px; background:#ffeedd'>";
                    echo "<form action='change.php' method='post' enctype='multipart/form-data'>Name:<input type='text' name='dc' value='".$g."'>";
                    echo "<input type='hidden' name='ar' value=".$e.">";
                    echo "<input type='hidden' name='re' value='".$g."'>";
                    echo "<input type='hidden' name='ty' value='sqr'>";
                    echo 'Motive shape :<br>';
                    echo '<input type="radio" name="mo" id="mo1" value="sqr" checked="checked">Square<br>';
                    echo '<input type="radio" name="mo" id="mo2" value="hex">Hexagonal<br>';
                    echo '<input type="radio" name="mo" id="mo3" value="etc">Colonial<br>';
                    echo "<input type='submit' value='Change')></form><br>";
                    echo "<img src=motive/sqr/".$e." width='100%' height='200'><br>";
                    echo "rotate : ".substr($f,strpos($f,'.')+4,1)."<br>";
                    echo "<button type='button' onclick=\"window.location.assign('delt.php?de=sqr/".$g."')\">Delete</button>";
                    echo "</div></div>";
                    $count++;
                }
            }
        }
        fclose($myfile);
        echo "</div>";
                if ($count >= $l || $l < 999) {
                    echo "<br><br><button class='loadmore' id='more3' onclick='location.replace(\"settings.php?l=999\");'></button>"; }
            echo "<hr>";
        echo "<div class='row'>HEXAGONAL :<br>";
        $myfile = fopen("motive.txt", "r");
        $count = 1;
if (isset($_GET['r'])) $r = $_GET['r'];
else $r = 1;
        while(!feof($myfile)) {
            $f = fgets($myfile);
            $e = substr($f,0,strpos($f,'.')+4);
                    $g = substr($f,strpos($f,'^')+1);
            if (substr($f,strpos($f,'.')+6,3)=="hex"&&file_exists("motive/hex/".$e) && $count <= $r*12) {
                if ($count % 7 > 0) {
                    echo "<div class='col-sm-2 text-center'style='padding:5px'>";
                    echo "<div style='padding:5px; background:#ffeedd'>";
                    echo "<form action='change.php' method='post' enctype='multipart/form-data'>Name:<input type='text' name='dc' value='".$g."'>";
                    echo "<input type='hidden' name='ar' value=".$e.">";
                    echo "<input type='hidden' name='re' value='".$g."'>";
                    echo "<input type='hidden' name='ty' value='hex'>";
                    echo 'Motive shape :<br>';
                    echo '<input type="radio" name="mo" id="mo1" value="sqr">Square<br>';
                    echo '<input type="radio" name="mo" id="mo2" value="hex" checked="checked">Hexagonal<br>';
                    echo '<input type="radio" name="mo" id="mo3" value="etc">Colonial<br>';
                    echo "<input type='submit' value='Change')></form><br>";
                    echo "<img src=motive/hex/".$e." width='100%' height='200'><br>";
                    echo "rotate : ".substr($f,strpos($f,'.')+4,1)."<br>";
                    echo "<button type='button' onclick=\"window.location.assign('delt.php?de=hex/".$e."')\">Delete</button>";
                    echo "</div></div>";
                    $count++;
                } else {
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "<div class='col-sm-2 text-center'style='padding:5px'>";
                    echo "<div style='padding:5px; background:#ffeedd'>";
                    echo "<form action='change.php' method='post' enctype='multipart/form-data'>Name:<input type='text' name='dc' value='".$g."'>";
                    echo "<input type='hidden' name='ar' value=".$e.">";
                    echo "<input type='hidden' name='re' value='".$g."'>";
                    echo "<input type='hidden' name='ty' value='hex'>";
                    echo 'Motive shape :<br>';
                    echo '<input type="radio" name="mo" id="mo1" value="sqr">Square<br>';
                    echo '<input type="radio" name="mo" id="mo2" value="hex" checked="checked">Hexagonal<br>';
                    echo '<input type="radio" name="mo" id="mo3" value="etc">Colonial<br>';
                    echo "<input type='submit' value='Change')></form><br>";
                    echo "<img src=motive/hex/".$e." width='100%' height='200'><br>";
                    echo "rotate : ".substr($f,strpos($f,'.')+4,1)."<br>";
                    echo "<button type='button' onclick=\"window.location.assign('delt.php?de=hex/".$e."')\">Delete</button>";
                    echo "</div></div>";
                    $count++;
                }
            }
        }
        fclose($myfile);
        echo "</div>";
                if ($count >= $r || $r < 999) {
                    echo "<br><br><button class='loadmore' id='more3' onclick='location.replace(\"settings.php?r=999\");'></button>"; }
            echo "<hr>";
        echo "<div class='row'>COLONIAL :<br>";
        $myfile = fopen("motive.txt", "r");
        $count = 1;
if (isset($_GET['d'])) $d = $_GET['d'];
else $d = 1;
        while(!feof($myfile)) {
            $f = fgets($myfile);
            $e = substr($f,0,strpos($f,'.')+4);
                    $g = substr($f,strpos($f,'^')+1);
            if (substr($f,strpos($f,'.')+6,3)=="etc"&&file_exists("motive/etc/".$e) && $count <= $d*12) {
                if ($count % 7 > 0) {
                    echo "<div class='col-sm-2 text-center'style='padding:5px'>";
                    echo "<div style='padding:5px; background:#ffeedd'>";
                    echo "<form action='change.php' method='post' enctype='multipart/form-data'>Name:<input type='text' name='dc' value='".$g."'>";
                    echo "<input type='hidden' name='ar' value=".$e.">";
                    echo "<input type='hidden' name='re' value='".$g."'>";
                    echo "<input type='hidden' name='ty' value='etc'>";
                    echo 'Motive shape :<br>';
                    echo '<input type="radio" name="mo" id="mo1" value="sqr">Square<br>';
                    echo '<input type="radio" name="mo" id="mo2" value="hex">Hexagonal<br>';
                    echo '<input type="radio" name="mo" id="mo3" value="etc" checked="checked">Colonial<br>';
                    echo "<input type='submit' value='Change')></form><br>";
                    echo "<img src=motive/etc/".$e." width='100%' height='200'><br>";
                    echo "rotate : ".substr($f,strpos($f,'.')+4,1)."<br>";
                    echo "<button type='button' onclick=\"window.location.assign('delt.php?de=etc/".$g."')\">Delete</button>";
                    echo "</div></div>";
                    $count++;
                } else {
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "<div class='col-sm-2 text-center'style='padding:5px'>";
                    echo "<div style='padding:5px; background:#ffeedd'>";
                    echo "<form action='change.php' method='post' enctype='multipart/form-data'>Name:<input type='text' name='dc' value='".$g."'>";
                    echo "<input type='hidden' name='ar' value=".$e.">";
                    echo "<input type='hidden' name='re' value='".$g."'>";
                    echo "<input type='hidden' name='ty' value='etc'>";
                    echo 'Motive shape :<br>';
                    echo '<input type="radio" name="mo" id="mo1" value="sqr">Square<br>';
                    echo '<input type="radio" name="mo" id="mo2" value="hex">Hexagonal<br>';
                    echo '<input type="radio" name="mo" id="mo3" value="etc" checked="checked">Colonial<br>';
                    echo "<input type='submit' value='Change')></form><br>";
                    echo "<img src=motive/etc/".$e." width='100%' height='200'><br>";
                    echo "rotate : ".substr($f,strpos($f,'.')+4,1)."<br>";
                    echo "<button type='button' onclick=\"window.location.assign('delt.php?de=etc/".$g."')\">Delete</button>";
                    echo "</div></div>";
                    $count++;
                }
            }
        }
        fclose($myfile);
        echo "</div>";
                if ($count >= $d || $d < 999) {
                    echo "<br><br><button class='loadmore' id='more3' onclick='location.replace(\"settings.php?d=999\");'></button>"; }
            echo "<hr>";
        echo "<div class='row'>";
        echo "Color list:";
        echo "</div>";
        echo "<div class='row'>";
        $myfile = fopen("colors.txt", "r");
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
            echo "<div style='padding:5px; background:#ffeedd'>";
                    echo "<form action='change.php' method='post' class='text-center'>Name:<input type='text' name='dd' style='width:80px' value=".substr($f,strpos($f,']')+1).">";
                    echo "<input type='hidden' name='te' value=".substr($f,strpos($f,']')+1).">";
                    echo "<input type='submit' value='Change'></form>";
            echo "<div style='background:RGBA($r,$g,$b,255);width:100%;height:20px'></div>";
            echo "Red: ".$r."<br>"."Green: ".$g."<br>"."Blue: ".$b;
            echo "<div class='text-center'><button type='button' onclick=\"window.location.assign('delt.php?dc=[".substr($f,1,strpos($f,']')-1)."]".substr($f,strpos($f,']')+1)."')\">Delete</button></div>";
            echo "</div></div>";
            } else {
                    echo "</div>";
                    echo "<div class='row'>";
                echo "<div class='col-sm-1'style='padding:5px'>";
            echo "<div style='padding:5px; background:#ffeedd'>";
                    echo "<form action='change.php' method='post' class='text-center'>Name:<input type='text' name='dd' style='width:80px' value=".substr($f,strpos($f,']')+1).">";
                    echo "<input type='hidden' name='te' value=".substr($f,strpos($f,']')+1).">";
                    echo "<input type='submit' value='Change'></form>";
            echo "<div style='background:RGBA($r,$g,$b,255);width:100%;height:20px'></div>";
            echo "Red: ".$r."<br>"."Green: ".$g."<br>"."Blue: ".$b;
            echo "<div class='text-center'><button type='button' onclick=\"window.location.assign('delt.php?dc=[".substr($f,1,strpos($f,']')-1)."]".substr($f,strpos($f,']')+1)."')\">Delete</button></div>";
            echo "</div></div>";
            }
        }
        fclose($myfile);
        echo "</div><br><hr>";
        echo "<div class='row text-center'>";
        echo "Copyright 2016";
        echo "</div>";
        ?>
    </div><br>
</body>
</html>
<?php
    } else {
		header('Location: 404');
	}
?>
<script>
    document.getElementById("rgb").style.display = 'none';
    document.getElementById("hex").style.display = 'none';
    document.getElementById('file').onchange = function() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("file").files[0]);
        oFReader.onload = function (oFREvent) {
            document.getElementById("prev").src = oFREvent.target.result;
        };
    };
    document.getElementById("rad1").onclick = function() {
        document.getElementById("rgb").style.display = 'block';
        document.getElementById("hex").style.display = 'none';
    };
    document.getElementById("rad2").onclick = function() {
        document.getElementById("rgb").style.display = 'none';
        document.getElementById("hex").style.display = 'block';
    };
    document.getElementById("cp").onchange = function() {
        document.getElementById("r").value = parseInt((cutHex(document.getElementById("cp").value)).substring(0,2),16);
        document.getElementById("g").value = parseInt((cutHex(document.getElementById("cp").value)).substring(2,4),16);
        document.getElementById("b").value = parseInt((cutHex(document.getElementById("cp").value)).substring(4,6),16);
        document.getElementById("cprev").style.background = 'rgb('+document.getElementById("r").value+','+document.getElementById("g").value+','+document.getElementById("b").value+')';
    };
    document.getElementById("r").onchange = function() {
        document.getElementById("cprev").style.background = 'rgb('+document.getElementById("r").value+','+document.getElementById("g").value+','+document.getElementById("b").value+')';
    };
    document.getElementById("g").onchange = function() {
        document.getElementById("cprev").style.background = 'rgb('+document.getElementById("r").value+','+document.getElementById("g").value+','+document.getElementById("b").value+')';
    };
    document.getElementById("b").onchange = function() {
        document.getElementById("cprev").style.background = 'rgb('+document.getElementById("r").value+','+document.getElementById("g").value+','+document.getElementById("b").value+')';
    };
    document.getElementById("v").onchange = function() {
        document.getElementById("r").value = parseInt((cutHex(document.getElementById("v").value)).substring(0,2),16);
        document.getElementById("g").value = parseInt((cutHex(document.getElementById("v").value)).substring(2,4),16);
        document.getElementById("b").value = parseInt((cutHex(document.getElementById("v").value)).substring(4,6),16);
        document.getElementById("cprev").style.background = document.getElementById("v").value;
    };
    function cutHex(h) {return (h.charAt(0)=="#") ? h.substring(1,7):h}
</script>
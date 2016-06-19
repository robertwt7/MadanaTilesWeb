<?php
    session_start();
	$loginSuccess = false;
    if (isset($_POST["username"]) && isset($_POST["password"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
        if ($username == "admin" && $password == "admin") {
			setcookie("admin",$username,time()+3600);
            $loginSuccess = true;
		}
    }
    if($loginSuccess) {
        $count = 1;
        $fi = new FilesystemIterator('motive', FilesystemIterator::SKIP_DOTS);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN</title>
<link rel="icon" href="#" type="image/png" />
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/pages.css" type="text/css" />
<script src="js/bootstrap.min.js" /></script>
</head>
<body style="background-color:#ffbbbb">
    <div class="container-fluid contact">
        <br><br><h3 class="text-center">Motive List</h3><br>
        <?php
        echo "<div class='row'>";
        while($count < iterator_count($fi)+100) {
            if (file_exists("motive/motive-".$count.".jpg")) {
                if ($count % 7 > 0) {
                    echo "<div class='col-sm-2 text-center'>";
                    echo "motive-".$count."<br>";
                    echo "<img src=motive/motive-".$count.".jpg width='100%' height='200'><br>";
                    echo "</div>";
                    $count++;
                } else {
                    echo "</div>";
                    echo "<div class='row'>";
                }
            } else {
                $count++;
                //break;
            }
        }
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col-sm-12'>";
        echo "To add a motive, add a picture to the motive folder.<br>";
        echo "To remove a motive, remove a picture to the motive folder.<br>";
        echo "To replace/modify a motive, replace the motive picture to the new one.<br>";
        echo "Note:<br>the pictures name must be 'motive-1','motive-2','motive-3',etc.<br>";
        echo "The number should be in order for better performances.<br>";
        echo "</div>";
        echo "</div><br>";
        echo "<div class='row'>";
        echo "Color list:";
        echo "</div>";
        $myfile = fopen("colors.txt", "r") or die("Unable to open colors file!");
        while(!feof($myfile)) {
            $f = fgets($myfile);
            $c = substr($f,1,strpos($f,']')-1);
            $r = substr($c,0,strpos($c,','));
            $c = substr($c,strpos($c,',')+1);
            $g = substr($c,0,strpos($c,','));
            $b = substr($c,strpos($c,',')+1);
            echo "<div class='col-sm-1'>";
            echo "<div style='background:RGBA($r,$g,$b,255);width:100%;height:20px'></div>";
            echo "Red: ".$r."<br>"."Green: ".$g."<br>"."Blue: ".$b;
            echo "</div>";
        }
        fclose($myfile);
        ?>
    </div>
</body>
</html>
<?php
    } else {
		header('Location:administrator.php');
	}
?>
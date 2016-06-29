<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet"  type="text/css" href="main.css">
    <script src="jquery.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <div class="container-fluid text-center" style="height: 120px;background:#ffeedd">
        <h2>Madana Custom Tiles</h2>
        </div>
    <div class="container">
    <br>
    <br>
        <div class="row">
            <div class="col-md-2">
                <div class="listTiles">
                    <ul class="listg">
                        <?php
        $myfile = fopen("motive.txt", "r");
        while(!feof($myfile)) {
            //Dapatkan per line
            $f = fgets($myfile);
            // ??????
            $e = substr($f,0,strpos($f,'.')+4);
            $g = substr($f,strpos($f,'^')+1);
            //Menentukan dia tipe apa
            if (substr($f,strpos($f,'.')+6,3)=="sqr"&&file_exists("motive/sqr/".$e)) {
            echo "<li><img src=motive/sqr/".$e." class='gambarpil'></li>";}
            if (substr($f,strpos($f,'.')+6,3)=="hex"&&file_exists("motive/hex/".$e)) {
            echo "<li><img src=motive/hex/".$e." class='gambarpil'></li>";}
            if (substr($f,strpos($f,'.')+6,3)=="etc"&&file_exists("motive/etc/".$e)) {
            echo "<li><img src=motive/etc/".$e." class='gambarpil'></li>";}
        }
            ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="col-md-8">
                    <canvas id="that" width="230" height="230"></canvas>
                    <img src="motive/sqr/6.png" width="230" height="230" class="gambar">
                    <!--<input type="color" id="cpik">-->
                    <button class="btn btn-default clear">Clear</button><br>
                    <div class="hidden">
                        <canvas id="rotate" width="230" height="230"></canvas>
                        <canvas id="temp" width="800" height="500"></canvas>
                        <canvas id="trap" width="800" height="500"></canvas>
                        <canvas id="hsim" width="800" height="500"></canvas>
                    </div>
                    <img src="" alt="" id="himg">
                </div>
                <div class="col-md-4">
                    <?php
                    //Bagian dari Color 
                    //Buka File Color
$myfile = fopen("colors.txt", "r");
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
            if ($count % 3>0)
                /* Benyamin Editing 26 jun 2016 
                    Ketika pakai jquery, tidak bisa function yang tidak global di load, karena aku pakai even onready baru di addkan 
                    functionnya 

                    so this's the resolution
                    making an listener on .colorr class, di getkan attr-nya r g b-nya 
                */ 
                echo "<div class='colorr' r=$r g=$g b=$b style='background:RGBA($r,$g,$b,255);width:40px;height:40px;float:left;'></div>";
                else {
                    echo "<div style='clear:both;'>";
                    echo "<div class='colorr' r=$r g=$g b=$b style='background:RGBA($r,$g,$b,255);width:40px;height:40px;float:left;'></div></div>";}
            $count++;
        }
        fclose($myfile);
?>
                    </div>
            </div>
            <div class="col-md-5 ruangan">
                <div class="row">
                    <!-- Baris 1 -->
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="#"><img src="r1.png" id="r1"></a>
                            <div class="caption">
                                <h6 id="hh">Ruang Keluarga 1</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="#"><img src="r2.png" id="r2"></a>
                            <div class="caption">
                                <h6>Ruang Keluarga 2</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="#"><img src="r3.png" id="r3"></a>
                            <div class="caption">
                                <h6>Kamar Mandi</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Baris 2 -->
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="#"><img src="r4.png" id="r4"></a>
                            <div class="caption">
                                <h6>Ruang Makan</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="#"><img src="r5.png" id="r5"></a>
                            <div class="caption">
                                <h6>Kamar Tidur</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="#"><img src="r6.png" id="r6"></a>
                            <div class="caption">
                                <h6>Ruang Masuk</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Baris 3 -->
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="#"><img src="r7.png" id="r7"></a>
                            <div class="caption">
                                <h6>Ruang Kerja</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="#"><img src="r8.png" id="r8"></a>
                            <div class="caption">
                                <h6>Dapur</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="#"><img src="r6.png" id="r6"></a>
                            <div class="caption">
                                <h6>Virtual Floor</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div> <!-- clossing row body -->
    </div> <!-- clossing Container body -->
    <button id="coba0">show</button>
    <br>
    <br>
    <div class="container-fluid text-center" style="height: 80px;background:#ffeedd">
        <h4>Copyright 2016</h4>
        </div>
</body>
</html>
<?php
if(isset($_GET['de']) && isset($_COOKIE['admin'])) {
$target_dir = "motive/";
$target_file = $target_dir.$_GET["de"].".png";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $fname = "motive.txt";
$data = substr($_GET["de"],strpos($_GET['de'],'/')+1).'.jpg*'.substr($_GET["de"],0,strpos($_GET['de'],'/')).'^'.substr($_GET["de"],strpos($_GET['de'],'/')+1);
$myfile = fopen("motive.txt", "r");
        $f = fread($myfile,filesize("motive.txt"));
        fclose($myfile);
    $f = str_replace($data.PHP_EOL, '', $f);
    $f = str_replace(PHP_EOL.$data, '', $f);
    $myfile = fopen("motive.txt", "w");
    fwrite($myfile, $f);
    fclose($myfile);
    unlink($target_file);}
if(isset($_GET['dc']) && isset($_COOKIE['admin'])) {
$fname = "colors.txt";
$data = $_GET['dc'];

$myfile = fopen("colors.txt", "r");
        $f = fread($myfile,filesize("colors.txt"));
        fclose($myfile);
    $f = str_replace(PHP_EOL.$data, '', $f);
    $f = str_replace($data.PHP_EOL, '', $f);
    $myfile = fopen("colors.txt", "w");
    fwrite($myfile, $f);
    fclose($myfile);
}
        header('Location:settings.php');
?>
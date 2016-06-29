<?php
if(isset($_POST['ty']) && isset($_COOKIE['admin'])){
$fname = "motive.txt";
$target_dir = "motive/".$_POST["mo"]."/";
$data = $_POST['dc'];
$target_file = $target_dir.$_POST["ar"];
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize("motive/".$_POST['ty']."/".$_POST["ar"]);
    if($check === false) {
        $uploadOk = 0;
        echo "dsaa";
    } else {
        echo"motive/".$_POST['ty']."/".$_POST["ar"].$target_file;
    if (rename("motive/".$_POST['ty']."/".$_POST["ar"], $target_file)) {
        echo"asd";
$myfile = fopen("motive.txt", "r");
        $f = fread($myfile,filesize("motive.txt"));
        fclose($myfile);
    $f = str_replace('*'.$_POST['ty'].'^'.$_POST['re'], '*'.$_POST['mo'].'^'.$data.PHP_EOL, $f);
    $myfile = fopen("motive.txt", "w");
    fwrite($myfile, $f);
    fclose($myfile);}
    }
}
if(isset($_POST['dd']) && isset($_COOKIE['admin'])){
$fname = "colors.txt";
$data = $_POST['dd'];

$myfile = fopen("colors.txt", "r");
        $f = fread($myfile,filesize("colors.txt"));
        fclose($myfile);
    $f = str_replace(']'.$_POST['te'], ']'.$_POST['dd'], $f);
    $myfile = fopen("colors.txt", "w");
    fwrite($myfile, $f);
    fclose($myfile);
}
header('Location:settings.php');
?>
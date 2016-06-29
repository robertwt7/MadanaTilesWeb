<?php
if(isset($_POST["ds"]) && isset($_POST["mo"]) && isset($_COOKIE['admin'])) {
$target_dir = "motive/".$_POST["mo"]."/";
 if(isset($_POST["ro"]))
$data = PHP_EOL.$_POST["ds"].".pngy*".$_POST["mo"]."^".$_POST["ds"];
    else
        $data = PHP_EOL.$_POST["ds"].".pngn*".$_POST["mo"]."^".$_POST["ds"];
$target_file = $target_dir.$_POST["ds"].".png";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check === false) {
        $uploadOk = 0;
    } else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
if (file_exists($target_file)) {
    $fname = "motive.txt";

$file = fopen($fname, 'a');
fwrite($file, $data);
}
fclose($file);
    }
}
}
        header('Location:settings.php');
?>
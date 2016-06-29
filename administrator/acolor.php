<?php
if(isset($_GET['cl']) && isset($_COOKIE['admin'])){
$fname = "colors.txt";
$data = PHP_EOL.'['.$_GET['r'].','.$_GET['g'].','.$_GET['b'].']';

$file = fopen($fname, 'a');
fwrite($file, $data);
fclose($file);
header('Location:settings.php');
}
?>
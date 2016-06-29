<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])) {
    $send = 'ggabriel_andreas@yahoo.com';
    $subject = 'php contact madana';
    $message = '';
    $nm = $_POST['name'];
    $em = $_POST['email'];
    $msg = $_POST['msg'];
    $header = 'From: '.$em."\r\n".'To: '.$send."\r\n".'Mailer: PHP/'.phpversion();
    mail($send,$subject,$msg,$header);
    header('contact.html.twig');
} else {
    header('contact.html.twig');
}
?>
<?php

$name = "";
$email = "";
$sujet = "";
$message = "";

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['sujet']) && isset($_POST['message'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];


    $retour = mail('quentin.rio@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
    if ($retour)
        echo '<p>Votre message à bien été envoyé.</p>';
}


?>
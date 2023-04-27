<?php

$name = "";
$email = "";
$sujet = "";
$message = "";

//if(isset($_POST['submit'])){
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['sujet']) && isset($_POST['message'])){
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $sujet = filter_var($_POST['sujet'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $sujet = $_POST['sujet'];
    // $message = $_POST['message'];


    $retour = mail('quentin.rio@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: quentin.rio@hotmail.fr');
    // if ($retour)
    //     echo '<p>Votre message a bien été envoyé.</p>';


if ($retour) {
    $message = "Votre message a bien été envoyé.";
    header("Location: https://quentin.gretacfalyon.com/portfolio/index.php?success_message=" . urlencode($message));
    exit();
}
}

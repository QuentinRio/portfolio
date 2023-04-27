<?php


if(isset($_POST['name'], $_POST['email'], $_POST['sujet'], $_POST['message'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $sujet = filter_var($_POST['sujet'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    $to = 'quentin.rio@gmail.com';
    $subject = 'Envoi depuis la page Contact';
    $headers = 'From: quentin.rio@hotmail.fr';
    $body = $message;

    if(mail($to, $subject, $body, $headers)) {
        $success_message = "Votre message a bien été envoyé.";
        header("Location: https://quentin.gretacfalyon.com/portfolio/index.php?success_message=" . urlencode($success_message));
        exit();
    }
}

?>



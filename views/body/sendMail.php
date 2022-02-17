<?php

    /* echo 'First';
    $name = 'Gianni';
    $message = 'TEST MAIL';

    $to = "gianni.jouve@gmail.com";
    $subject = "Vous avez recu un message de : $name";
    $body = "Vous avez recu un nouveau message depuis le formulaire de votre site perso.\n\n"."Voici les details :\nNom : $name\n\nMail : $email\n\nMessage :\n$message";
    $header = "From: noreply@GianniJouve.com\n";
    $header .= "Reply-To: $email";  

    if(!mail($to, $subject, $body, $header))
        http_response_code(500);
    else
        echo 'Second'; */
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        http_response_code(500);
        exit();
    }
    
    if (isset($_SESSION['count'])) $_SESSION['count']++;
    else $_SESSION['count'] = 0;
    if ($_SESSION['count'] == 3) {
        http_response_code(403);
        exit();
    }
    
    $name = strip_tags(htmlspecialchars($_POST['name']));
    $email = strip_tags(htmlspecialchars($_POST['email']));
    $message = strip_tags(htmlspecialchars($_POST['message']));
    
    $to = "gianni.jouve@gmail.com";
    $subject = "Vous avez recu un message de : $name";
    $body = "Vous avez recu un nouveau message depuis le formulaire de votre site perso.\n\n"."Voici les details :\nNom : $name\n\nMail : $email\n\nMessage :\n$message";
    $header = "From: noreply@GianniJouve.com\n";
    $header .= "Reply-To: $email";  
    $header = "Location: http://localhost:4000/\n";
    
    if(!mail($to, $subject, $body, $header))
        http_response_code(500);
?>

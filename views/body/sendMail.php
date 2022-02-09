<?php

    echo 'First';
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
        echo 'Second';
?>
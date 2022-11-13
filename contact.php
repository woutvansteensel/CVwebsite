<?php
    $name = $_POST['name'];
    $visitorEmail = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'wout_steensel@hotmail.com';
    $email_subject = 'Nieuw bericht website';
    $email_body = "Naam: $name.\n".
                    "Email: $visitorEmail.\n".
                        "Bericht: $message.\n";

    $to = "wout_steensel@hotmail.com";

    $headers = "From: $email_from \r\n";
    $headers = "Reply-To: $visitorEmail \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: contact.html");
    
?>
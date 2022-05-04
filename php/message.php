<?php
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $website = htmlspecialchars($_POST['website']);
    $message = htmlspecialchars($_POST['message']);
    if (!empty($email) && !empty($message) && !empty($phone)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $receiver = "info@consultoresprofesionalesopc.com";
            $subject = "From: $name <$email>";
            $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage:\n$message\n\nRegards,\n$name";
            $sender = "From: $email";
            if (mail($receiver, $subject, $body, $sender)) {
                echo "Tu mensaje ha sido enviado";
            } else {
                echo "Lo siento, No se ha podido enviar tu mensaje!";
            }
        } else {
            echo "Ingresa un correo válido!";
        }
    } else {
        echo "Es obligatorio ingresar los campos!";
    }
?>

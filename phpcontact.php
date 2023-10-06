<?php
if (isset($_POST['email'])) {
    $to = "yve17@hotmail.be"; 
    $subject = "Nouveau message depuis le formulaire de contact";
    $message = "Nom : " . $_POST['nom'] . "\n\n";
    $message .= "Adresse e-mail : " . $_POST['email'] . "\n\n";
    $message .= "Message : \n" . $_POST['message'];
    $headers = "From: webmaster@example.com" . "\r\n" .
        "Reply-To: " . $_POST['email'] . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo '<div class="alert alert-success" role="alert">Votre message a bien été envoyé.</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Une erreur s'est produite lors de l\'envoi du message. Veuillez réessayer plus tard.</div>';
    }
}
?>
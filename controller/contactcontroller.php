<?php

include_once 'config/config.php';

if (preg_match('@/success@i', $_SERVER['REQUEST_URI'])) {
    echo '<p>Vielen Dank für Ihre Anfrage</p>';
}

if (!empty($_POST['contactform_submit'])) {

    if ($_POST['first_name'] == "") {
        $errortext .= "Vorname / Nachname. ";
        $error = true;
    }

    if ($_POST['subject'] == "") {
        $errortext .= "Betreff. ";
        $error = true;
    }

    if ($_POST['message'] == "") {
        $errortext .= "Nachricht. ";
        $error = true;
    }

    if ($_POST['name'] != "") {
        header("Location: index.php");
        exit;
    }

    if ((!preg_match('/(\+41)\s(\d{2})\s(\d{3})\s(\d{2})\s(\d{2})/i', $_POST['phone'])) && (!preg_match('/(\+41)(\d{2})(\d{3})(\d{2})(\d{2})/i', $_POST['phone']))) {
        $errortext .= "Telefonnummer / ";
        $error = true;
    }

    if (!preg_match("/[.a-z0-9_-]+@+[.a-z0-9_-]+.+[.a-z0-9_-]{2,}/i", $_POST['email'])) {
        $errortext .= "E-Mail Adresse / ";
        $error = true;
    }

    if (!$error) {

        $admin = "info@ticsys.local";
        $subject = $_POST["betreff"];
        $message = "Kontaktnachricht von ticsys.local:\n\n";
        $message .= "Vorname: " . $_POST["first_name"];
        $message .= "\nE-Mail: " . $_POST["email"];
        $message .= "\nNachricht: " . $_POST["message"];

        mail($admin, $subject, $message);
        header("HTTP/1.1 303 See Other");
        header("Location: " . URI_KONTAKT . "/success");
    }


}

?>

<form id="contactform" action="<?php URI_KONTAKT ?>" method="post" name="contactform">
    <label for="contactform-first_name"> Vorname Nachname</label>
    <input type="text" id="contactform-first_name" name="first_name" placeholder="Vorname Nachname" required>

    <label for="contactform-phone">Telefon-Nr.</label>
    <input type="text" id="contactform-phone" name="phone" placeholder="+41791234567" required>

    <label for="contactform-email">Email-Adresse</label>
    <input type="text" id="contactform-email" name="email" placeholder="E-Mail Adresse" required>

    <label for="contactform-subject">Betreff</label>
    <input type="text" id="contactform-subject" name="subject" placeholder="Betreff" required>

    <label for="contactform-message">Mitteilung</label>
    <textarea id="contactform-message" name="message" rows="8" cols="50" placeholder="Ihre Nachricht"
              required></textarea>

    <label for="contactform-name"></label>
    <input type="text" id="contactform-name" name="name">

    <label for="contactform-newsletter">Newsletter abonnieren</label>
    <input type="checkbox" id="contactform-newsletter" name="newsletter" checked>

    <input type="hidden" name="contact" value="1">

    <input type="submit" name="contactform_submit" value="Senden" id="contactbutton">
    <input type="reset" value="Zurücksetzen" id="contactbutton">

    <?php
    if ($error) {
        echo "<div id='errormessage'>Bitte Überprüfen Sie die Gültigkeit Ihre Eingabe $errortext</div>";
    }
    ?>

</form>
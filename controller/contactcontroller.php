<form id="contactform" action="<?php URL_KONTAKT ?>" method="post" name="contactform">
    <label for="contactform-first_name"> Vorname Nachname</label>
    <input type="text" id="contactform-first_name" name="first_name" placeholder="Vorname Nachname">

    <label for="contactform-phone">Telefon-Nr.</label>
    <input type="text" id="contactform-phone" name="phone" placeholder="+41791234567">

    <label for="contactform-email">Email-Adresse</label>
    <input type="text" id="contactform-email" name="email" placeholder="E-Mail Adresse">

    <label for="contactform-subject">Betreff</label>
    <input type="text" id="contactform-subject" name="subject" placeholder="Betreff">

    <label for="contactform-message">Mitteilung</label>
    <textarea id="contactform-message" name="message" rows="8" cols="50" placeholder="Ihre Nachricht"></textarea>

    <label for="contactform-name"></label>
    <input type="text" id="contactform-name" name="name">

    <label for="contactform-newsletter">Newsletter abonnieren</label>
    <input type="checkbox" id="contactform-newsletter" name="newsletter" checked>

    <input type="hidden" name="contact" value="1">
    <input type="submit" name="contactform_submit" value="Senden">
</form>

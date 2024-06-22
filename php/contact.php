<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $name = $_POST['name'];
    $project = $_POST['project'];
    $email = $_POST['email'];

    // Recipient email address
    $to = "zayahanshah.18@gmail.com";

    // Email subject
    $subject = "New mail from $name";

    // Email message
    $message = "Name: $name\n";
    $message .= "Proeject: $project\n";
    $message .= "Email: $email\n";

    // Send email
    mail($to, $subject, $message);

    // Include thank-you pop-up
    // include('thank-you.html');
}
?>
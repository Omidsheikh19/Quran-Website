<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Process the data, for example, send an email
    $to = 'godalone12692@gmail.com';
    $subject = 'New message from your website';
    $body = "You have received a new message from $name ($email):\n\n$message";
    // Make sure to configure your server to send emails
    mail($to, $subject, $body);

    // Redirect or display a success message
    echo "Message sent successfully!";
}
?>

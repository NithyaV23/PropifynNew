<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name    = htmlspecialchars($_POST['username']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address
    $to = "Contact@propify-homes.com";

    // Subject of email
    $mail_subject = "New Contact Request from Website";

    // Email body content
    $body = "
    <h2>New Contact Request</h2>
    <p><strong>Name:</strong> {$name}</p>
    <p><strong>Email:</strong> {$email}</p>
    <p><strong>Phone:</strong> {$phone}</p>
    <p><strong>Location:</strong> {$subject}</p>
    <p><strong>Message:</strong><br>{$message}</p>
    ";

    // Email headers
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: {$name} <{$email}>" . "\r\n";

    // Send email
    if (mail($to, $mail_subject, $body, $headers)) {
        echo "<script>alert('Your request has been sent successfully!'); window.location.href='thank-you.html';</script>";
    } else {
        echo "<script>alert('Sorry! Something went wrong. Please try again.'); window.history.back();</script>";
    }
}
?>

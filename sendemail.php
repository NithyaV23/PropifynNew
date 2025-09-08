<?php
$to = "receiver@example.com"; // Replace with your email
$subject = "Test Email from XAMPP Localhost";
$message = "Hello! This is a test email sent from XAMPP using Gmail SMTP.";
$headers = "From: yourgmail@gmail.com";

if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>

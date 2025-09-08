<?php
$to = "madhumithakavi2006@gmail.com"; 
$subject = "Test Mail";
$message = "Hello! This is a test email from XAMPP.";
$headers = "From: nithyanithya12624@gmail.com";

if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
}
?>

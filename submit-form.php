<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Validate the form data
if (empty($name) || empty($email) || empty($message)) {
    echo "Please fill out all required fields.";
    exit;
}

// Send the email
$to = "officialbloogle@gmail.com";
$subject = "New message from contact form";
$body = "Name: $name\nEmail: $email\nMessage: $message";
$headers = "From: $email\nReply-To: $email\n";

if (mail($to, $subject, $body, $headers)) {
    echo "Your message has been sent!";
} else {
    echo "There was a problem sending your message. Please try again later.";
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "informas2013@gmail.com"; // Replace with your desired recipient email address
    $subject = "New Newsletter Subscription";
    $email = $_POST["email"];

    // You can add more fields here if needed
    // $name = $_POST["name"];
    // $message = $_POST["message"];

    // Compose the email body
    $message = "New subscriber email: " . $email . "\n";

    // If you want to include additional form fields in the email body, use the following format:
    // $message .= "Name: " . $name . "\n";
    // $message .= "Message: " . $message . "\n";

    // Set the email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to a "thank you" page after sending the email
        header("Location: thank_you.html");
        exit();
    } else {
        echo "Error: Unable to send the email.";
    }
}
?>

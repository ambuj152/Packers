<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fromloc = $_POST["fromloc"];
    $toloc = $_POST["toloc"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $to = "ambuj152@gmail.com"; // Enter your email address here
    $subject = "Message from $name";
    $body = "Fromloc:$fromloc\nToloc: $toloc  \nName: $name\nEmail: $email\nMessage: $phone";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'agyemannana336@gmail.com';
    $subject = 'New Form Submission';
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    if (mail($to, $subject, $body)) {
        echo 'Thank you for your submission!';
    } else {
        echo 'Oops! Something went wrong.';
    }
}
?>

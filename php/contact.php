<?php
// Prevent direct access
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize inputs
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Validation
    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.html?status=error");
        exit;
    }

    // Email Config
    $recipient = "c19561903@gmail.com";
    $subject = "New Contact from Portfolio: $name";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    $headers = "From: $name <$email>";

    // Send
    if (mail($recipient, $subject, $email_content, $headers)) {
        header("Location: ../index.html?status=success");
    } else {
        header("Location: ../index.html?status=server_error");
    }

} else {
    header("Location: ../index.html");
}
?>
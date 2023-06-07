<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email_address"];
  $message = $_POST["message"];

   // email address to receive the message
  $to = "adarshapandey2000@gmail.com";

  // Set the subject and body of the email
  $subject = "New Message from Portfolio Contact Form";
  $body = "Name: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Message: " . $message;

  // Set additional headers
  $headers = "From: " . $email . "\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";

  // Send the email
  mail($to, $subject, $body, $headers);

  // Redirect the user back to the portfolio page or a thank you page
  header("Location: index.html");
  exit();
}
?>

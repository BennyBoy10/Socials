<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);

  // Email settings
$to = "exclusiveben10@gmail.com";
$subject = "New Form Submission";
$message = "Name: " . $name . "\nEmail: " . $email;
$headers = "From: exclusiveben10@gmail.com";

  // Send the email
if (mail($to, $subject, $message, $headers)) {
echo "Email successfully sent to $to...";
} else {
  echo "Failed to send email...";
}
}
?>

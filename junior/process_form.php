<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = "micahk13@nycstudents.net";
  $subject = "New Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  
  mail($to, $subject, $body);
  
  // Redirect to a thank you page
  header("Location: thank_you.html");
}
?>

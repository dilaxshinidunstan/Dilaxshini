<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  if (empty($name) || empty($email) || empty($message)) {
    http_response_code(400);
    echo "Please fill in all fields.";
    exit;
  }

  // Process the form data here
  // You can perform any desired actions with the form data

  // Send a success response
  http_response_code(200);
  echo "Thank you! Your message has been received.";
} else {
  http_response_code(405);
  echo "Method Not Allowed";
}
?>

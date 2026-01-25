<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $subject = trim($_POST['subject']);
  $message = trim($_POST['message']);

  if (!$name || !$email || !$subject || !$message) {
    echo "Ploteso të gjitha fushat!";
    exit;
  }

  echo "Faleminderit $name, mesazhi u pranua!";
}
?>

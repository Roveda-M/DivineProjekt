<?php
session_start();
include_once 'config/db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db = new Database();
    $connection = $db->getConnection();

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Validimi bazik
    if (!$name || !$email || !$subject || !$message) {
        $_SESSION['error'] = "Ploteso te gjitha fushat!";
        header("Location: Contacts.php");
        exit;
    }

    // Validimi i email-it
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Email i pavlefshem!";
        header("Location: Contacts.php");
        exit;
    }

    // Ruajtja në DB me prepared statement
    try {
    $stmt = $connection->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (:name, :email, :subject, :message)");
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':subject' => $subject,
        ':message' => $message
    ]);
    $_SESSION['success'] = "Faleminderit $name, mesazhi juaj u pranua!";
} catch (PDOException $e) {
    $_SESSION['error'] = "Gabim gjatë dërgimit të mesazhit: " . $e->getMessage();
}

    header("Location: Contacts.php");
    exit;
}
?>






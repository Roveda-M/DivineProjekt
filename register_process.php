<?php
 include_once 'config/db.php';
include_once 'User.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

    // Get form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Register the user
    if ($user->register($fullname,  $email, $username, $password)) {
        header("Location: login.php"); // Redirect to login page
        exit;
    } else {
        echo "Error registering user!";
    }
}
?>
<?php
 include_once 'config/db.php';
include_once 'User.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

    // Get form data
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
     $email = $_POST['email'];
    $password = $_POST['password'];


    if($user->isUserExists($email,$username)){
      echo"ky email ose username egzistone tashme!";
      exit;
    }
    // Register the user
    if ($user->register($fullname,  $username, $email, $password)) {
        header("Location: login.php"); 
        exit;
    } else {
        echo "Error registering user!";
    }
}
?>





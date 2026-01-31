<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
    header("Location: login.php");
    exit;
}

include_once 'config/db.php';
include_once 'User.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id > 0) {
    // Mos fshi vetveten
    if ($id == $_SESSION['user_id']) {
        header("Location: admin.php?page=users&error=cannot_delete_self");
        exit;
    }

    $db = new Database();
    $connection = $db->getConnection();
    $userObj = new User($connection);

    if ($userObj->deleteUser($id)) {
        header("Location: admin.php?page=users&msg=deleted");
    } else {
        header("Location: admin.php?page=users&error=delete_failed");
    }
} else {
    header("Location: admin.php?page=users&error=invalid_id");
}
exit;

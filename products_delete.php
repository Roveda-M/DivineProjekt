<?php
session_start();


if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
    header("Location: login.php");
    exit;
}

include_once 'config/db.php';
include_once 'Product.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id > 0) {
    $db = new Database();
    $connection = $db->getConnection();
    $product = new Product($connection);
    
    if ($product->deleteProduct($id)) {
        header("Location: admin.php?page=products&msg=deleted");
    } else {
        header("Location: admin.php?page=products&error=delete_failed");
    }
} else {
    header("Location: admin.php?page=products&error=invalid_id");
}
exit;
?>
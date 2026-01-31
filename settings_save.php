<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
    header("Location: login.php");
    exit;
}

include_once 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: admin.php?page=settings");
    exit;
}

$db = new Database();
$conn = $db->getConnection();


$conn->exec("CREATE TABLE IF NOT EXISTS settings (
    setting_key VARCHAR(100) PRIMARY KEY,
    setting_value TEXT
)");

$site_name = trim($_POST['site_name'] ?? '');
$contact_email = trim($_POST['contact_email'] ?? '');
$contact_phone = trim($_POST['contact_phone'] ?? '');
$address = trim($_POST['address'] ?? '');

$stmt = $conn->prepare("INSERT INTO settings (setting_key, setting_value) VALUES (?, ?) ON DUPLICATE KEY UPDATE setting_value = VALUES(setting_value)");

$keys = ['site_name', 'contact_email', 'contact_phone', 'address'];
$values = [$site_name, $contact_email, $contact_phone, $address];

foreach ($keys as $i => $key) {
    $stmt->execute([$key, $values[$i]]);
}

header("Location: admin.php?page=settings&msg=saved");
exit;

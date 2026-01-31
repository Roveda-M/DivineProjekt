<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
    header("Location: login.php");
    exit;
}

include_once 'config/db.php';
include_once 'User.php';

$message = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $userObj = new User($connection);

    $fullname = trim($_POST['fullname'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $role = isset($_POST['role']) ? (int)$_POST['role'] : 0;

    if (empty($fullname)) {
        $error = "Emri i plotë është i detyrueshëm!";
    } elseif (empty($username)) {
        $error = "Username është i detyrueshëm!";
    } elseif (empty($email)) {
        $error = "Email është i detyrueshëm!";
    } elseif (empty($password) || strlen($password) < 4) {
        $error = "Fjalëkalimi duhet të ketë të paktën 4 karaktere!";
    } else {
        if ($userObj->addUser($fullname, $username, $email, $password, $role)) {
            $message = "Përdoruesi u shtua me sukses!";
        } else {
            $error = "Ky email ose username ekziston tashmë!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shto Përdorues - DIVINE.</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="admin-wrapper">
        <aside class="admin-sidebar">
            <div class="sidebar-header">
                <h2>DIVINE.</h2>
                <p>Admin Panel</p>
            </div>
            <nav class="sidebar-nav">
                <a href="admin.php" class="nav-item">
                    <i class="fas fa-arrow-left"></i>
                    <span>Kthehu te Admin</span>
                </a>
            </nav>
        </aside>
        <main class="admin-main">
            <header class="admin-header">
                <h1>Shto Përdorues të Ri</h1>
            </header>
            <div class="page-content active">
                <?php if ($message): ?>
                    <div class="alert success"><?= htmlspecialchars($message) ?></div>
                <?php endif; ?>
                <?php if ($error): ?>
                    <div class="alert danger"><?= htmlspecialchars($error) ?></div>
                <?php endif; ?>
                <form method="POST" class="settings-form">
                    <div class="form-group">
                        <label>Emri i plotë</label>
                        <input type="text" name="fullname" required placeholder="p.sh. Rinor Bajcinca">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" required placeholder="p.sh. rinori123">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" required placeholder="p.sh. email@example.com">
                    </div>
                    <div class="form-group">
                        <label>Fjalëkalimi</label>
                        <input type="password" name="password" required minlength="4" placeholder="Të paktën 4 karaktere">
                    </div>
                    <div class="form-group">
                        <label>Roli</label>
                        <select name="role">
                            <option value="0">Përdorues</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                    <button type="submit" class="btn-primary">
                        <i class="fas fa-plus"></i> Shto Përdorues
                    </button>
                    <a href="admin.php?page=users" class="btn-secondary">Anulo</a>
                </form>
            </div>
        </main>
    </div>
</body>
</html>

<?php
session_start();


if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
    header("Location: login.php");
    exit;
}

include_once 'config/db.php';
include_once 'Product.php';

$message = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $product = new Product($connection);

    $name = trim($_POST['name'] ?? '');
    $category = $_POST['category'] ?? '';
    $price = floatval($_POST['price'] ?? 0);
    $image_path = trim($_POST['image_path'] ?? '');
    $stock = intval($_POST['stock'] ?? 0);

    
    if (empty($name)) {
        $error = "Emri i produktit është i detyrueshëm!";
    } elseif (empty($category) || !in_array($category, ['femra', 'Meshkuj'])) {
        $error = "Zgjidhni kategorinë (Femra ose Meshkuj)!";
    } elseif ($price <= 0) {
        $error = "Çmimi duhet të jetë më i madh se 0!";
    } elseif (empty($image_path)) {
        $error = "Rruga e imazhit është e detyrueshme!";
    } else {
        if ($product->addProduct($name, $category, $price, $image_path, $stock)) {
            $message = "Produkti u shtua me sukses!";
        } else {
            $error = "Gabim gjatë shtimit të produktit.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shto Produkt - DIVINE.</title>
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
                <h1>Shto Produkt të Ri</h1>
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
                        <label>Emri i produktit</label>
                        <input type="text" name="name" required placeholder="p.sh. Crop Tank T-shirt">
                    </div>
                    <div class="form-group">
                        <label>Kategoria</label>
                        <select name="category" required>
                            <option value="">Zgjidhni...</option>
                            <option value="femra">Femra</option>
                            <option value="Meshkuj">Meshkuj</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Çmimi (€)</label>
                        <input type="number" name="price" step="0.01" min="0" required placeholder="9.99">
                    </div>
                    <div class="form-group">
                        <label>Rruga e imazhit</label>
                        <input type="text" name="image_path" required placeholder="imgF/p1.png ose imgM/p7.png">
                    </div>
                    <div class="form-group">
                        <label>Stoku</label>
                        <input type="number" name="stock" min="0" value="0" placeholder="0">
                    </div>
                    <button type="submit" class="btn-primary">
                        <i class="fas fa-plus"></i> Shto Produkt
                    </button>
                    <a href="admin.php" class="btn-secondary">Anulo</a>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Profile - DIVINE.</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="profile.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<?php include 'header1.php'; ?>
<div class="main-content">
<div class="profile-card">

  <!-- Foto/Ikona e përdoruesit -->
  <div class="profile-avatar">
    <i class="fa-regular fa-user"></i>
  </div>

  <!-- Email -->
  <p class="profile-email"><?php echo $_SESSION['email']; ?></p>


  <!-- Logout button -->
  <a href="logout.php" class="btn-logout">Logout</a>

</div>
</div>
<?php include 'footer.php'; ?>

</body>
</html>


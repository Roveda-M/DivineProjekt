<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>





<header>
  <a href="Index.php" style="font-size:24px;font-weight:bold;text-decoration:none;">
    DIVINE.
  </a>

  <button class="hamburger-menu">
    <i class="fa-solid fa-bars"></i>
  </button>

  <nav class="right-section">
    <div class="nav-links">
      <a href="Index.php">Home</a>
      <a href="Aboutus.php">About Us</a>
      <a href="Shop.php">Shop</a>
      <a href="Contacts.php">Contact</a>
    </div>

    <div class="nav-icons">

      <a href="Cart.php" class="cart-icon">
        <i class="fa-solid fa-bag-shopping"></i>
      </a>

      <?php if (isset($_SESSION['user_id'])): ?>
        <!-- NËSE ËSHTË LOGIN -->
        <a href="profile.php" class="account-icon">
          <i class="fa-regular fa-user"></i>
        </a>
      <?php else: ?>
        <!-- NËSE NUK ËSHTË LOGIN -->
        <a href="login.php" class="account-icon">
          <i class="fa-regular fa-user"></i>
        </a>
      <?php endif; ?>

    </div>
  </nav>
</header>

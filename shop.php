<?php
session_start();

// Kontrollo nese përdoruesi esht loguar
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit;
}

include_once 'config/db.php';
include_once 'Product.php';

$db = new Database();
$connection = $db->getConnection();
$productObj = new Product($connection);
$products = $productObj->getAllProducts();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DIVINE.</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style3.css" />
  </head>
  <body>
   <?php include 'header.php';
?>
    <div class="filter-section">
      <div class="dropdown">
        <button class="dropdown-btn">
          <i class="fa-solid fa-list"></i>
          Categories
        </button>
        <div class="dropdown-content">
          <a href="#" data-filter="femra">
            <i class="fa-solid fa-venus"></i>
            Femra
          </a>
          <a href="#" data-filter="Meshkuj">
            <i class="fa-solid fa-mars"></i>
            Meshkuj
          </a>
          <a href="#" data-filter="all">
            <i class="fa-solid fa-th"></i>
            Të gjitha
          </a>
        </div>
      </div>
    </div>

    <div class="product-container">
      <?php foreach ($products as $product): ?>
      <div class="product-card" data-category="<?= strtolower(htmlspecialchars($product['category'])) ?>">
        <img src="<?= htmlspecialchars($product['image_path']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" />
        <h2><?= htmlspecialchars($product['name']) ?></h2>
        <p>€<?= number_format($product['price'], 2) ?></p>
        <div class="product-info"><p><?= $product['category'] == 'femra' ? 'F' : 'M' ?></p></div>
        <button>Shto në Shportë</button>
      </div>
      <?php endforeach; ?>
    </div>

    <!--Slider-->
    <div id="kontenti">
      <header id="slideHeader">
        <h2 id="kapelaH1">Hats</h2>
        <img id="slideshow" src="kapuqat/kapela1.png" alt="Kapuqi 1" />
      </header>
      <button onclick="ndrroImg()">Next</button>
    </div>

      

    <script>
      const dropdownBtn = document.querySelector(".dropdown-btn");
      const dropdownContent = document.querySelector(".dropdown-content");

      dropdownBtn.addEventListener("click", () => {
        dropdownContent.classList.toggle("show");
      });

      const filterLinks = document.querySelectorAll(".dropdown-content a");
      const productCards = document.querySelectorAll(".product-card");

      filterLinks.forEach((link) => {
        link.addEventListener("click", (e) => {
          e.preventDefault();
          const filter = link.dataset.filter;

          filterLinks.forEach((l) => l.classList.remove("active"));
          link.classList.add("active");

          productCards.forEach((card) => {
            if (filter === "all" || card.dataset.category === filter) {
              card.style.display = "flex";
            } else {
              card.style.display = "none";
            }
          });

          dropdownContent.classList.remove("show");
        });
      });

      document.addEventListener("click", (e) => {
        if (
          !dropdownBtn.contains(e.target) &&
          !dropdownContent.contains(e.target)
        ) {
          dropdownContent.classList.remove("show");
        }
      });

      const hamburgerMenu = document.querySelector(".hamburger-menu");
      const navLinks = document.querySelector(".nav-links");
      const hamburgerIcon = hamburgerMenu?.querySelector("i");

      if (hamburgerMenu && navLinks && hamburgerIcon) {
        hamburgerMenu.addEventListener("click", () => {
          navLinks.classList.toggle("active");
          hamburgerIcon.classList.toggle("fa-bars");
          hamburgerIcon.classList.toggle("fa-times");
        });

        document.querySelectorAll(".nav-links a").forEach((link) => {
          link.addEventListener("click", () => {
            navLinks.classList.remove("active");
            hamburgerIcon.classList.remove("fa-times");
            hamburgerIcon.classList.add("fa-bars");
          });
        });
      }

      const imazhet = [
        "kapuqat/kapela1.png",
        "kapuqat/kapela2.png",
        "kapuqat/kapela3.png",
        "kapuqat/kapela4.png",
        "kapuqat/kapela5.png",
        "kapuqat/kapela6.png",
      ];

      let currentIndex = 0;

      function ndrroImg() {
        currentIndex++;
        if (currentIndex >= imazhet.length) currentIndex = 0;
        document.getElementById("slideshow").src = imazhet[currentIndex];
      }
    </script>
    <?php include 'footer.php';?>
  </body>
</html>

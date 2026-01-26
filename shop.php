<?php
session_start();

// Kontrollo nëse përdoruesi është loguar
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit;
}
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
          <a href="#" data-filter="man">
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
      <div class="product-card" data-category="femra">
        <img src="imgF/p1.png" alt="Foto Femra" />
        <h2>Crop Tank T-shirt</h2>
        <p>€9.99</p>
        <div class="product-info"><p>F</p></div>
        <button>Shto në Shportë</button>
      </div>
      <div class="product-card" data-category="femra">
        <img src="imgF/p2.png" alt="Foto Femra" />
        <h2>Zip-up Hoodie</h2>
        <p>€14.99</p>
        <div class="product-info"><p>F</p></div>
        <button>Shto në Shportë</button>
      </div>

      <div class="product-card" data-category="femra">
        <img src="imgF/p3.png" alt="Foto Femra" />
        <h2>Crop T-shirt</h2>
        <p>€9.99</p>
        <div class="product-info"><p>F</p></div>
        <button>Shto në Shportë</button>
      </div>

      <div class="product-card" data-category="femra">
        <img src="imgF/p4.png" alt="Foto Femra" />
        <h2>Jacket</h2>
        <p>€19.99</p>
        <div class="product-info"><p>F</p></div>
        <button>Shto në Shportë</button>
      </div>

      <div class="product-card" data-category="femra">
        <img src="imgF/p5.png" alt="Foto Femra" />
        <h2>T-shirt</h2>
        <p>€12.99</p>
        <div class="product-info"><p>F</p></div>
        <button>Shto në Shportë</button>
      </div>

      <div class="product-card" data-category="femra">
        <img src="imgF/p6.png" alt="Foto Femra" />
        <h2>Blouse</h2>
        <p>€12.99</p>
        <div class="product-info"><p>F</p></div>
        <button>Shto në Shportë</button>
      </div>

      <div class="product-card" data-category="man">
        <img src="imgM/p7.png" alt="Foto Meshkuj" />
        <h2>T-shirt</h2>
        <p>€17.99</p>
        <div class="product-info"><p>M</p></div>
        <button>Shto në Shportë</button>
      </div>

      <div class="product-card" data-category="man">
        <img src="imgM/p8.png" alt="Foto Meshkuj" />
        <h2>T-shirt</h2>
        <p>€14.99</p>
        <div class="product-info"><p>M</p></div>
        <button>Shto në Shportë</button>
      </div>

      <div class="product-card" data-category="man">
        <img src="imgM/p9.png" alt="Foto Meshkuj" />
        <h2>Zip-up Hoodie</h2>
        <p>€19.99</p>
        <div class="product-info"><p>M</p></div>
        <button>Shto në Shportë</button>
      </div>

      <div class="product-card" data-category="man">
        <img src="imgM/p10.png" alt="Foto Meshkuj" />
        <h2>Jacket</h2>
        <p>€22.99</p>
        <div class="product-info"><p>M</p></div>
        <button>Shto në Shportë</button>
      </div>

      <div class="product-card" data-category="man">
        <img src="imgM/p11.png" alt="Foto Meshkuj" />
        <h2>Hoodie</h2>
        <p>€19.99</p>
        <div class="product-info"><p>M</p></div>
        <button>Shto në Shportë</button>
      </div>

      <div class="product-card" data-category="man">
        <img src="imgM/p12.png" alt="Foto Meshkuj" />
        <h2>T-shirt</h2>
        <p>€14.99</p>
        <div class="product-info"><p>M</p></div>
        <button>Shto në Shportë</button>
      </div>
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

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
    <title>Cart - DIVINE.</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cart.css" />
  </head>
  <body>
     <?php include 'header.php';
?>
    <div class="shop-container">
      <h1>Shopping Cart</h1>
      <div class="cart-content">
        <div class="cart-items">
          <div class="cart-item">
            <div class="item-image">
              <img src="imgF/p1.png" alt="Crop Tank T-shirt" />
            </div>
            <div class="item-details">
              <h3>Crop Tank T-shirt</h3>
              <p class="item-description">
                Comfortable and stylish crop tank top
              </p>
              <p class="item-size">Size: M</p>
              <p class="item-price">€9.99</p>
            </div>
            <div class="item-controls">
              <div class="quantity-control">
                <button
                  class="qty-btn minus"
                  onclick="updateQuantity(this, -1)"
                >
                  <i class="fa-solid fa-minus"></i>
                </button>
                <span class="quantity">1</span>
                <button class="qty-btn plus" onclick="updateQuantity(this, 1)">
                  <i class="fa-solid fa-plus"></i>
                </button>
              </div>
              <button class="remove-btn" onclick="removeItem(this)">
                <i class="fa-solid fa-trash"></i>
                Remove
              </button>
            </div>
          </div>
          <div class="cart-item">
            <div class="item-image">
              <img src="imgF/p2.png" alt="Zip-up Hoodie" />
            </div>
            <div class="item-details">
              <h3>Zip-up Hoodie</h3>
              <p class="item-description">Warm and cozy zip-up hoodie</p>
              <p class="item-size">Size: L</p>
              <p class="item-price">€14.99</p>
            </div>
            <div class="item-controls">
              <div class="quantity-control">
                <button
                  class="qty-btn minus"
                  onclick="updateQuantity(this, -1)"
                >
                  <i class="fa-solid fa-minus"></i>
                </button>
                <span class="quantity">2</span>
                <button class="qty-btn plus" onclick="updateQuantity(this, 1)">
                  <i class="fa-solid fa-plus"></i>
                </button>
              </div>
              <button class="remove-btn" onclick="removeItem(this)">
                <i class="fa-solid fa-trash"></i>
                Remove
              </button>
            </div>
          </div>
          <div class="cart-item">
            <div class="item-image">
              <img src="imgF/p3.png" alt="Crop T-shirt" />
            </div>
            <div class="item-details">
              <h3>Crop T-shirt</h3>
              <p class="item-description">
                Classic crop t-shirt for everyday wear
              </p>
              <p class="item-size">Size: S</p>
              <p class="item-price">€9.99</p>
            </div>
            <div class="item-controls">
              <div class="quantity-control">
                <button
                  class="qty-btn minus"
                  onclick="updateQuantity(this, -1)"
                >
                  <i class="fa-solid fa-minus"></i>
                </button>
                <span class="quantity">1</span>
                <button class="qty-btn plus" onclick="updateQuantity(this, 1)">
                  <i class="fa-solid fa-plus"></i>
                </button>
              </div>
              <button class="remove-btn" onclick="removeItem(this)">
                <i class="fa-solid fa-trash"></i>
                Remove
              </button>
            </div>
          </div>
          <div class="cart-item">
            <div class="item-image">
              <img src="imgF/p4.png" alt="Jacket" />
            </div>
            <div class="item-details">
              <h3>Jacket</h3>
              <p class="item-description">Stylish jacket for all seasons</p>
              <p class="item-size">Size: M</p>
              <p class="item-price">€19.99</p>
            </div>
            <div class="item-controls">
              <div class="quantity-control">
                <button
                  class="qty-btn minus"
                  onclick="updateQuantity(this, -1)"
                >
                  <i class="fa-solid fa-minus"></i>
                </button>
                <span class="quantity">1</span>
                <button class="qty-btn plus" onclick="updateQuantity(this, 1)">
                  <i class="fa-solid fa-plus"></i>
                </button>
              </div>
              <button class="remove-btn" onclick="removeItem(this)">
                <i class="fa-solid fa-trash"></i>
                Remove
              </button>
            </div>
          </div>
          <div class="cart-item">
            <div class="item-image">
              <img src="imgM/p7.png" alt="T-shirt" />
            </div>
            <div class="item-details">
              <h3>T-shirt</h3>
              <p class="item-description">Classic men's t-shirt</p>
              <p class="item-size">Size: L</p>
              <p class="item-price">€17.99</p>
            </div>
            <div class="item-controls">
              <div class="quantity-control">
                <button
                  class="qty-btn minus"
                  onclick="updateQuantity(this, -1)"
                >
                  <i class="fa-solid fa-minus"></i>
                </button>
                <span class="quantity">1</span>
                <button class="qty-btn plus" onclick="updateQuantity(this, 1)">
                  <i class="fa-solid fa-plus"></i>
                </button>
              </div>
              <button class="remove-btn" onclick="removeItem(this)">
                <i class="fa-solid fa-trash"></i>
                Remove
              </button>
            </div>
          </div>

          <div class="cart-item">
            <div class="item-image">
              <img src="imgM/p9.png" alt="Zip-up Hoodie" />
            </div>
            <div class="item-details">
              <h3>Zip-up Hoodie</h3>
              <p class="item-description">Comfortable men's zip-up hoodie</p>
              <p class="item-size">Size: XL</p>
              <p class="item-price">€19.99</p>
            </div>
            <div class="item-controls">
              <div class="quantity-control">
                <button
                  class="qty-btn minus"
                  onclick="updateQuantity(this, -1)"
                >
                  <i class="fa-solid fa-minus"></i>
                </button>
                <span class="quantity">1</span>
                <button class="qty-btn plus" onclick="updateQuantity(this, 1)">
                  <i class="fa-solid fa-plus"></i>
                </button>
              </div>
              <button class="remove-btn" onclick="removeItem(this)">
                <i class="fa-solid fa-trash"></i>
                Remove
              </button>
            </div>
          </div>
        </div>
        <div class="cart-summary">
          <h2>Order Summary</h2>
          <div class="summary-details">
            <div class="summary-row">
              <span>Subtotal</span>
              <span class="subtotal">€92.95</span>
            </div>
            <div class="summary-row">
              <span>Shipping</span>
              <span class="shipping">€5.00</span>
            </div>
            <div class="summary-row">
              <span>Tax</span>
              <span class="tax">€7.44</span>
            </div>
            <div class="summary-divider"></div>
            <div class="summary-row total-row">
              <span>Total</span>
              <span class="total">€105.39</span>
            </div>
          </div>
          <button class="checkout-btn">Proceed to Checkout</button>
          <a href="Shop.php" class="continue-shopping">Continue Shopping</a>
        </div>
      </div>
    </div>

    <script>
      
      const hamburgerMenu = document.querySelector(".hamburger-menu");
      const navLinks = document.querySelector(".nav-links");
      const hamburgerIcon = hamburgerMenu?.querySelector("i");
      if (hamburgerMenu && navLinks && hamburgerIcon) {
        hamburgerMenu.addEventListener("click", () => {
          navLinks.classList.toggle("active");
          if (navLinks.classList.contains("active")) {
            hamburgerIcon.classList.remove("fa-bars");
            hamburgerIcon.classList.add("fa-times");
          } else {
            hamburgerIcon.classList.remove("fa-times");
            hamburgerIcon.classList.add("fa-bars");
          }
        });
        
        const navLinksItems = document.querySelectorAll(".nav-links a");
        navLinksItems.forEach((link) => {
          link.addEventListener("click", () => {
            navLinks.classList.remove("active");
            hamburgerIcon.classList.remove("fa-times");
            hamburgerIcon.classList.add("fa-bars");
          });
        });
      }
      
      function updateQuantity(btn, change) {
        const quantitySpan = btn.parentElement.querySelector(".quantity");
        let quantity = parseInt(quantitySpan.textContent);
        quantity += change;
        if (quantity < 1) quantity = 1;
        quantitySpan.textContent = quantity;
        updateTotal();
      }
      
      function removeItem(btn) {
        if (
          confirm(
            "A jeni të sigurt që dëshironi të hiqni këtë artikull nga shporta?"
          )
        ) {
          const cartItem = btn.closest(".cart-item");
          cartItem.style.animation = "fadeOut 0.3s ease";
          setTimeout(() => {
            cartItem.remove();
            updateTotal();
            updateCartCounter();
          }, 300);
        }
      }
      
      function updateTotal() {
        const items = document.querySelectorAll(".cart-item");
        let subtotal = 0;
        items.forEach((item) => {
          const priceText = item.querySelector(".item-price").textContent;
          const price = parseFloat(priceText.replace("€", ""));
          const quantity = parseInt(
            item.querySelector(".quantity").textContent
          );
          subtotal += price * quantity;
        });
        let shipping = 5.0;
        const tax = subtotal * 0.08;
        const total = subtotal + shipping + tax;
        document.querySelector(".subtotal").textContent = `€${subtotal.toFixed(
          2
        )}`;
        if (total >= 150) {
          shipping = 0;
          document.querySelector(".shipping").textContent = "€0.00";
        } else {
          shipping = 5.0;
          document.querySelector(".shipping").textContent = "€5.00";
        }
        document.querySelector(".tax").textContent = `€${tax.toFixed(2)}`;
        document.querySelector(".total").textContent = `€${total.toFixed(2)}`;
      }
      
      function updateCartCounter() {
        const itemCount = document.querySelectorAll(".cart-item").length;
        const cartCounter = document.querySelector(".cart-counter");
        if (cartCounter) {
          cartCounter.textContent = itemCount;
          if (itemCount === 0) {
            cartCounter.style.display = "none";
          }
        }
      }
      
      document.querySelector(".checkout-btn").addEventListener("click", () => {
        const itemCount = document.querySelectorAll(".cart-item").length;
        if (itemCount === 0) {
          alert("Shporta juaj është e zbrazët!");
        } else {
          alert("Duke u dërguar te checkout...");
        }
      });
    </script>
     <?php include 'footer.php';?>
  </body>
</html>

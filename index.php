
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
    <link rel="stylesheet" href="style1.css" />
  </head>
  <body>
   <?php include 'header.php';
?>
    <br />
    <video class="responsive-video" autoplay muted loop>
      <source src="homeVideo/v1.mp4" type="video/mp4" />
    </video>
    <br />
    <br />
    <br />
    <div class="mission">
      <h2>Our Vibe</h2>
      <p>
        Divine ka lindur nga guximi, i krijuar për ata që ecin me qëllim. Ne
        besojmë në stil me kuptim, modë të ngadaltë dhe autenticitet të pastër.
      </p>
    </div>
    <section class="flip-section">
      <div class="flip-wrapper">
        <div class="flip-box">
          <div class="flip-inner">
            <div class="flip-front">
              <img src="homecoll/i1.png" alt="Image 1" />
            </div>
            <div class="flip-back">
              <img src="homecoll/i4.png" alt="Image 1 Hover" />
            </div>
          </div>
        </div>

        <div class="flip-box">
          <div class="flip-inner">
            <div class="flip-front">
              <img src="homecoll/i2.png" alt="Image 2" />
            </div>
            <div class="flip-back">
              <img src="homecoll/i5.png" alt="Image 2 Hover" />
            </div>
          </div>
        </div>

        <div class="flip-box">
          <div class="flip-inner">
            <div class="flip-front">
              <img src="homecoll/i3.png" alt="Image 3" />
            </div>
            <div class="flip-back">
              <img src="homecoll/i5.png" alt="Image 3 Hover" />
            </div>
          </div>
        </div>

        <div class="flip-box">
          <div class="flip-inner">
            <div class="flip-front">
              <img src="homecoll/i7.png" alt="Image 3" />
            </div>
            <div class="flip-back">
              <img src="homecoll/i8.png" alt="Image 3 Hover" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <br />
    <video class="responsive-video" autoplay muted loop>
      <source src="homeVideo/v2.mp4" type="video/mp4" />
    </video>
    <ul class="accordion">
      <li>
        <input type="radio" name="accordion" id="first" checked />
        <label for="first"
          >Do I need to create an account to place an order?</label
        >
        <div class="content">
          <p>
            Yes,creating an account is required in order to place an order.This
            allows us to securely store your information ,provide faster
            checkout,and give you access to order tracking and purchase history.
          </p>
        </div>
      </li>
      <li>
        <input type="radio" name="accordion" id="second" />
        <label for="second">Do you offer Cash on Delivery?</label>
        <div class="content">
          <p>
            Yes,we offer Cash on Delivery as a payment option.You can pay for
            your order directly to the courier at the time of delivery.
          </p>
        </div>
      </li>
      <li>
        <input type="radio" name="accordion" id="third" />
        <label for="third">How much does the shipping cost?</label>
        <div class="content">
          <p>
            Shipping costs depend on your location and the total weight of your
            order. The base shipping fee starts at €5.00. Orders qualify for
            free shipping when the subtotal reaches €150.00 or more.
          </p>
        </div>
      </li>
    </ul>
    
  
    <script>
      
      const hamburgerMenu = document.querySelector(".hamburger-menu");
      const navLinks = document.querySelector(".nav-links");
      const hamburgerIcon = hamburgerMenu.querySelector("i");

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
    </script>
    <?php include 'footer.php';?>
  </body>
</html>

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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DIVINE.</title>
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style2.css">
</head>
<body>
      <?php include 'header.php';
?>

<br>
        <video class="responsive-video" autoplay muted loop>
            <source src="aboutusvideo/ourcollection.mp4" type="video/mp4">
        </video>
        <div class="container">
      <h2>From Us to You</h2>
      <p>
        Kur krijuam Divine, nuk nisëm thjesht një markë – ndërtuam një lëvizje.
        <br>
        Deshëm të sillnim diçka që nuk është vetëm për sy, por që ndjehet me shpirt. Një stil që flet pa folur. Për ata që ecin me vetëbesim të qetë, që ndjekin pasionet e tyre dhe nuk kënaqen me të zakonshmen – kjo është për ju.
        Divine është më shumë se veshje. Është një pasqyrim i asaj që jeni dhe asaj që po bëheni – të guximshëm, të qëllimshëm dhe të pandalshëm.
        <br>
        Faleminderit që jeni pjesë e këtij rrugëtimi.
        Kjo është vetëm fillimi.</p>
        <br>
		<h4>The Divine Crew🖤</h4>
      </p>
    </div>

 <section class="shop-ig">
    <div class="container">
      <h2>Visit us </h2>
      <p>Shfleto disa nga koleksionet tona të fundit të publikuara në Instagram</p>
      <div class="gallery">
        <img src="reklama/8.png" alt="Koleksioni 1">
        <img src="reklama/17.png" alt="Koleksioni 2">
        <img src="reklama/9.png" alt="Koleksioni 3">
        <img src="reklama/12.png" alt="Koleksioni 4">
        <img src="reklama/14.png" alt="Koleksioni 5">
        <img src="reklama/3.png" alt="Koleksioni 6">
        <img src="reklama/19.png" alt="Koleksioni 7">
        <img src="reklama/13.png" alt="Koleksioni 8">
        <img src="reklama/11.png" alt="Koleksioni 9">
        <img src="reklama/6.png" alt="Koleksioni 10">
        <img src="reklama/7.png" alt="Koleksioni 11">
        <img src="reklama/5.png" alt="Koleksioni 12">
        <img src="reklama/1.png" alt="Koleksioni 13">
        <img src="reklama/2.png" alt="Koleksioni 14">
        <img src="reklama/4.png" alt="Koleksioni 15">
        <img src="reklama/16.png" alt="Koleksioni 17">
        <img src="reklama/18.png" alt="Koleksioni 18">
        <img src="reklama/10.png" alt="Koleksioni 19">
        <img src="reklama/20.png" alt="Koleksioni 20">
        <img src="reklama/21.png" alt="Koleksioni 21">
      </div>
    </div>
  </section>

  

        <script>
          // Hamburger Menu Toggle
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

            // Close menu when clicking on a link
            const navLinksItems = document.querySelectorAll(".nav-links a");
            navLinksItems.forEach((link) => {
              link.addEventListener("click", () => {
                navLinks.classList.remove("active");
                hamburgerIcon.classList.remove("fa-times");
                hamburgerIcon.classList.add("fa-bars");
              });
            });
          }
        </script>
        <?php include 'footer.php';?>
        </body>
        </html>
<?php
session_start();

// Kontrollo nese përdoruesi eshte loguar
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
    <title>Contact - DIVINE.</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contacts.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
  </head>
  <body>
    <?php include 'header.php';
?>
    

   
    <div class="contact-container">
      <h2>Contact Us</h2>
      <p>
        Na kontaktoni duke plotësuar formularin ose vizitoni lokacionin tonë:
      </p>

      <div class="contact-content">
<form id="contactForm" action="contacts_process.php" method="POST">

          <div class="form-group">
            <label for="name">Full Name</label>
            <input
              type="text"
              id="name"
              name="name"
              placeholder="Roveda Marevci"
              required
            />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="you@example.com"
              required
            />
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input
              type="text"
              id="subject"
              name="subject"
              placeholder="Subject"
              required
            />
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea
              id="message"
              name="message"
              placeholder="Write your message..."
              required
            ></textarea>
          </div>
          <button type="submit">Send Message</button>
        </form>

        <div class="map-container">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2947.564304271592!2d21.1489995!3d42.37312379999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13547fda8b236933%3A0x1f1da3497f330537!2sThe%20Village%20-%20Shopping%20%26%20Fun!5e0!3m2!1sen!2srs!4v1765748051780!5m2!1sen!2srs"
            width="100%"
            height="100%"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          >
          </iframe>
        </div>
      </div>
    </div>

    
   

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

      const form=document.getElementById("contactForm");
      const name=document.getElementById("name");
      const email=document.getElementById("email");
      const subject=document.getElementById("subject");
      const message=document.getElementById("message");


    
const emailValid = (email) => {
  const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
  return emailRegex.test(email.toLowerCase());
};

// Validimi bëhet kur user klik "Send Message"
form.addEventListener("submit", function(e) {

  if(name.value.trim() === ""){
    alert("Ju lutem shtoni emrin e plotë");
    name.focus();
    e.preventDefault();
    return;
  }

  if(email.value.trim() === ""){
    alert("Ju lutem shtoni emailin");
    email.focus();
    e.preventDefault();
    return;
  }

  if(!emailValid(email.value)){
    alert("Ju lutem shtoni një email të vlefshëm");
    email.focus();
    e.preventDefault();
    return;
  }

  if(subject.value.trim() === ""){
    alert("Ju lutem plotësoni subjectin");
    subject.focus();
    e.preventDefault();
    return;
  }

  if(message.value.trim() === ""){
    alert("Ju lutem shtoni mesazhin");
    message.focus();
    e.preventDefault();
    return;
  }


});
    </script>
      <?php include 'footer.php';?>
  </body>
</html>

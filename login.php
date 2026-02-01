<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - DIVINE.</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
  </head>
  <body>
     <?php include 'header1.php';
   
?>

    <div class="login-container">
      <h2>Login to Your Account</h2>
      <form  id="LoginForm"action="login_process.php" method="POST">
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
          <label for="password">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Your password"
            required
          />
        </div>
        <button type="submit">Login</button>
        <p>Don't have an account? <a href="Register.php">Sign up</a></p>
      </form>

      <div class="divider"><span>OR</span></div>

      <div class="social-login">
        <button class="apple">
          <i class="fab fa-apple"></i> Login with Apple
        </button>
        <button class="google">
          <i class="fab fa-google"></i> Login with Google
        </button>
        <button class="microsoft">
          <i class="fab fa-microsoft"></i> Login with Microsoft
        </button>
      </div>
    </div>

    

    <script>
      // Hamburger Menu Toggle
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

      // Close menu when clicking on a link
      const navLinksItems = document.querySelectorAll(".nav-links a");
      navLinksItems.forEach((link) => {
        link.addEventListener("click", () => {
          navLinks.classList.remove("active");
          hamburgerIcon.classList.remove("fa-times");
          hamburgerIcon.classList.add("fa-bars");
        });
      });


 
      const form=document.getElementById("LoginForm");
     
      const email=document.getElementById("email");
      const password=document.getElementById("password");
     


    
const emailValid = (email) => {
  const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
  return emailRegex.test(email.toLowerCase());
};

// Validimi behet kur user klik "Send Message"
form.addEventListener("submit", function(e) {

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
  if(password.value.trim()===""){
    alert("fjalkalimi eshte i zbrazet");
    password.focus();
    e.preventDefault();
    return;
  }
});
    </script>
      <?php include 'footer.php';?>
  </body>
</html>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register - DIVINE.</title>
    <link rel="stylesheet" href="register.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
  </head>
  <body>
    
 <?php include 'header1.php';

?>

    <div class="login-container">
      <h2>Create Your Account</h2>
      <form id="registerform" action="register_process.php" method="POST">
        <div class="form-group">
          <label for="fullname">Full Name</label>
          <input
            type="text"
            id="fullname"
            name="fullname"
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
          <label for="username">Username</label>
          <input
            type="text"
            id="username"
            name="username"
            placeholder="Username"
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
        <div class="form-group">
          <label for="confirm-password">Confirm Password</label>
          <input
            type="password"
            id="confirm-password"
            name="confirm-password"
            placeholder="Confirm password"
            required
          />
        </div>
        <button type="submit">Register</button>
        <p>Already have an account? <a href="login.php">Login</a></p>
      </form>
      <div class="divider"><span>OR</span></div>
      <div class="social-login">
        <button class="apple">
          <i class="fab fa-apple"></i> Register with Apple
        </button>
        <button class="google">
          <i class="fab fa-google"></i> Register with Google
        </button>
        <button class="microsoft">
          <i class="fab fa-microsoft"></i> Register with Microsoft
        </button>
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
const form=document.getElementById("registerform");
const fullname=document.getElementById("fullname");
const email =document.getElementById("email");
const username=document.getElementById("username");
const password=document.getElementById("password");
const confirm =document.getElementById("confirm-password");

form.addEventListener("submit", function(e) {

  if(fullname.value.trim() === ""){
    alert("Ju lutem shtoni emrin e plote.");
    fullname.focus();
    e.preventDefault();
    return;
  }

  if(email.value.trim() === ""){
    alert("Ju lutem shtoni emailin.");
    email.focus();
    e.preventDefault();
    return;
  }

  if(!emailValid(email.value)){
    alert("Ju lutem shtoni nje email te vlefshem.");
    email.focus();
    e.preventDefault();
    return;
  }

  if(username.value.trim() === ""){
    alert("Ju lutem shtoni username.");
    username.focus();
    e.preventDefault();
    return;
  }

  if(password.value.trim() === ""){
    alert("Ju lutem shtoni password.");
    password.focus();
    e.preventDefault();
    return;
  }

  if(confirm.value.trim() === ""){
    alert("Ju lutem konfirmoni password-in.");
    confirm.focus();
    e.preventDefault();
    return;
  }

  if(password.value !== confirm.value){
    alert("Password dhe Confirm Password nuk perputhen.");
    confirm.focus();
    e.preventDefault();
    return;
  }

 
    alert("Password-i duhet të kete te pakten 6 karaktere.");
    password.focus();
    e.preventDefault();
    return;
  }

});
    </script>
     <?php include 'footer.php';?>
  </body>
</html>

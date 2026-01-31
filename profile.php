<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit;
}


$fullname = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : 'Divine User';
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'user';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'user@example.com';
$phone = isset($_SESSION['phone']) ? $_SESSION['phone'] : '';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile - DIVINE.</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="profile.css" />
  </head>
  <body>
    
<?php include 'header.php'; ?>

    <div class="profile-container">
      
      <aside class="profile-sidebar">
        <div class="profile-avatar">
          <div class="avatar-circle">
            <i class="fas fa-user"></i>
          </div>
          <h3><?php echo htmlspecialchars($username); ?></h3>
          <p class="member-since">Member since January 2025</p>
        </div>
        
        <nav class="profile-nav">
          <a href="#" class="profile-nav-item active" data-tab="account">
            <i class="fas fa-user-circle"></i>
            <span>Account Details</span>
          </a>
          <a href="#" class="profile-nav-item" data-tab="orders">
            <i class="fas fa-box"></i>
            <span>Order History</span>
          </a>
          <a href="#" class="profile-nav-item" data-tab="addresses">
            <i class="fas fa-map-marker-alt"></i>
            <span>Addresses</span>
          </a>
          <a href="#" class="profile-nav-item" data-tab="wishlist">
            <i class="fas fa-heart"></i>
            <span>Wishlist</span>
          </a>
          <a href="#" class="profile-nav-item" data-tab="security">
            <i class="fas fa-lock"></i>
            <span>Security</span>
          </a>
          <a href="logout.php" class="profile-nav-item logout">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
          </a>
        </nav>
      </aside>

    
      <main class="profile-content">
        
       
        <section class="profile-tab active" id="account-tab">
          <div class="section-header">
            <h2>Account Details</h2>
            <p>Manage your personal information</p>
          </div>
          
          <form class="profile-form" id="account-form">
            <div class="form-grid">
              <div class="form-group">
                <label for="full-name">Full Name</label>
                <input 
                  type="text" 
                  id="full-name" 
                  name="full_name" 
                  value="<?php echo htmlspecialchars($fullname); ?>"
                  required
                />
              </div>
              
              <div class="form-group">
                <label for="username">Username</label>
                <input 
                  type="text" 
                  id="username" 
                  name="username" 
                  value="<?php echo htmlspecialchars($username); ?>"
                  required
                />
              </div>
              
              <div class="form-group">
                <label for="email">Email Address</label>
                <input 
                  type="email" 
                  id="email" 
                  name="email" 
                  value="<?php echo htmlspecialchars($email); ?>"
                  required
                />
              </div>
              
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input 
                  type="tel" 
                  id="phone" 
                  name="phone" 
                  value="<?php echo htmlspecialchars($phone); ?>"
                  placeholder="+383 XX XXX XXX"
                />
              </div>
              
              <div class="form-group">
                <label for="birthday">Date of Birth</label>
                <input 
                  type="date" 
                  id="birthday" 
                  name="birthday"
                  value="<?php echo htmlspecialchars($birthday); ?>"
                />
              </div>
            </div>
            
            <button type="submit" class="btn-primary">
              <i class="fas fa-save"></i> Save Changes
            </button>
          </form>
        </section>

        
        <section class="profile-tab" id="orders-tab">
          <div class="section-header">
            <h2>Order History</h2>
            <p>Track and manage your orders</p>
          </div>
          
          <div class="orders-list">
            <div class="order-card">
              <div class="order-header">
                <div>
                  <span class="order-number">#DV2025001</span>
                  <span class="order-date">January 20, 2025</span>
                </div>
                <span class="order-status delivered">Delivered</span>
              </div>
              <div class="order-items">
                <div class="order-item">
                  <img src="homecoll/i1.png" alt="Product" />
                  <div class="order-item-details">
                    <h4>Divine Hoodie</h4>
                    <p>Size: M • Color: Black</p>
                    <p class="order-item-price">€85.00</p>
                  </div>
                </div>
              </div>
              <div class="order-footer">
                <span class="order-total">Total: €90.00</span>
                <a href="#" class="btn-secondary">View Details</a>
              </div>
            </div>

            <div class="order-card">
              <div class="order-header">
                <div>
                  <span class="order-number">#DV2025002</span>
                  <span class="order-date">January 15, 2025</span>
                </div>
                <span class="order-status processing">Processing</span>
              </div>
              <div class="order-items">
                <div class="order-item">
                  <img src="homecoll/i2.png" alt="Product" />
                  <div class="order-item-details">
                    <h4>Divine T-Shirt</h4>
                    <p>Size: L • Color: White</p>
                    <p class="order-item-price">€45.00</p>
                  </div>
                </div>
              </div>
              <div class="order-footer">
                <span class="order-total">Total: €50.00</span>
                <a href="#" class="btn-secondary">Track Order</a>
              </div>
            </div>
          </div>
        </section>

       
        <section class="profile-tab" id="addresses-tab">
          <div class="section-header">
            <h2>Saved Addresses</h2>
            <p>Manage your shipping addresses</p>
          </div>
          
          <div class="addresses-grid">
            <div class="address-card primary">
              <div class="address-badge">Default</div>
              <h4>Home Address</h4>
              <p>Rr. Fehmi Agani 23</p>
              <p>Prishtinë, 10000</p>
              <p>Kosovo</p>
              <div class="address-actions">
                <button class="btn-text"><i class="fas fa-edit"></i> Edit</button>
                <button class="btn-text danger"><i class="fas fa-trash"></i> Delete</button>
              </div>
            </div>
            
            <div class="address-card">
              <h4>Work Address</h4>
              <p>Bulevardi Nënë Tereza</p>
              <p>Prishtinë, 10000</p>
              <p>Kosovo</p>
              <div class="address-actions">
                <button class="btn-text"><i class="fas fa-edit"></i> Edit</button>
                <button class="btn-text danger"><i class="fas fa-trash"></i> Delete</button>
              </div>
            </div>
            
            <button class="address-card add-new">
              <i class="fas fa-plus"></i>
              <span>Add New Address</span>
            </button>
          </div>
        </section>

       
        <section class="profile-tab" id="wishlist-tab">
          <div class="section-header">
            <h2>Wishlist</h2>
            <p>Your saved items</p>
          </div>
          
          <div class="wishlist-grid">
            <div class="wishlist-item">
              <button class="remove-wishlist"><i class="fas fa-times"></i></button>
              <img src="imgF/p5.png" alt="Product" />
              <div class="wishlist-info">
                <h4>Divine T-Shirt</h4>
                <p class="wishlist-price">€20.00</p>
                <button class="btn-add-cart"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
              </div>
            </div>
            
            <div class="wishlist-item">
              <button class="remove-wishlist"><i class="fas fa-times"></i></button>
              <img src="imgM/p8.png" alt="Product" />
              <div class="wishlist-info">
                <h4>Divine T-Shirt</h4>
                <p class="wishlist-price">€25.00</p>
                <button class="btn-add-cart"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
              </div>
            </div>
          </div>
        </section>

       
        <section class="profile-tab" id="security-tab">
          <div class="section-header">
            <h2>Security Settings</h2>
            <p>Manage your password and account security</p>
          </div>
          
          <form class="profile-form" id="security-form">
            <div class="form-group">
              <label for="current-password">Current Password</label>
              <input 
                type="password" 
                id="current-password" 
                name="current_password"
                required
              />
            </div>
            
            <div class="form-group">
              <label for="new-password">New Password</label>
              <input 
                type="password" 
                id="new-password" 
                name="new_password"
                required
              />
            </div>
            
            <div class="form-group">
              <label for="confirm-password">Confirm New Password</label>
              <input 
                type="password" 
                id="confirm-password" 
                name="confirm_password"
                required
              />
            </div>
            
            <button type="submit" class="btn-primary">
              <i class="fas fa-key"></i> Update Password
            </button>
          </form>

          <div class="security-info">
            <h3>Two-Factor Authentication</h3>
            <p>Add an extra layer of security to your account</p>
            <button class="btn-secondary">
              <i class="fas fa-shield-alt"></i> Enable 2FA
            </button>
          </div>
        </section>

      </main>
    </div>

    <script>
      
      const navItems = document.querySelectorAll('.profile-nav-item');
      const tabs = document.querySelectorAll('.profile-tab');

      navItems.forEach(item => {
        item.addEventListener('click', (e) => {
          if (item.classList.contains('logout')) return;
          
          e.preventDefault();
          const targetTab = item.dataset.tab;

          
          navItems.forEach(nav => nav.classList.remove('active'));
          tabs.forEach(tab => tab.classList.remove('active'));

          
          item.classList.add('active');
          document.getElementById(`${targetTab}-tab`).classList.add('active');
        });
      });

      
      const hamburgerMenu = document.querySelector(".hamburger-menu");
      const navLinks = document.querySelector(".nav-links");
      const hamburgerIcon = hamburgerMenu?.querySelector("i");

      hamburgerMenu?.addEventListener("click", () => {
        navLinks.classList.toggle("active");
        if (navLinks.classList.contains("active")) {
          hamburgerIcon.classList.remove("fa-bars");
          hamburgerIcon.classList.add("fa-times");
        } else {
          hamburgerIcon.classList.remove("fa-times");
          hamburgerIcon.classList.add("fa-bars");
        }
      });

      
      document.getElementById('account-form')?.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const formData = new FormData(e.target);
        formData.append('action', 'update_account');
        
        try {
          const response = await fetch('update_profile.php', {
            method: 'POST',
            body: formData
          });
          
          const result = await response.json();
          
          if(result.success) {
            alert('✓ ' + result.message);
            
            setTimeout(() => location.reload(), 1000);
          } else {
            alert('✗ ' + result.message);
          }
        } catch (error) {
          alert('Error updating account. Please try again.');
        }
      });

      document.getElementById('security-form')?.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const newPass = document.getElementById('new-password').value;
        const confirmPass = document.getElementById('confirm-password').value;
        
        if (newPass !== confirmPass) {
          alert('✗ Passwords do not match!');
          return;
        }
        
        const formData = new FormData(e.target);
        formData.append('action', 'change_password');
        
        try {
          const response = await fetch('update_profile.php', {
            method: 'POST',
            body: formData
          });
          
          const result = await response.json();
          
          if(result.success) {
            alert('✓ ' + result.message);
            e.target.reset();
          } else {
            alert('✗ ' + result.message);
          }
        } catch (error) {
          alert('Error updating password. Please try again.');
        }
      });
    </script>

<?php include 'footer.php'; ?>

  </body>
</html>
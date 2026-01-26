<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - DIVINE.</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="admin-wrapper">
        
        <aside class="admin-sidebar">
            <div class="sidebar-header">
                <h2>DIVINE.</h2>
                <p>Admin Panel</p>
            </div>
            
            <nav class="sidebar-nav">
                <a href="#" class="nav-item active" data-page="dashboard">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
                <a href="#" class="nav-item" data-page="users">
                    <i class="fas fa-users"></i>
                    <span>Përdoruesit</span>
                </a>
                <a href="#" class="nav-item" data-page="products">
                    <i class="fas fa-box"></i>
                    <span>Produktet</span>
                </a>
                <a href="#" class="nav-item" data-page="orders">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Porositë</span>
                </a>
                <a href="#" class="nav-item" data-page="settings">
                    <i class="fas fa-cog"></i>
                    <span>Cilësimet</span>
                </a>
            </nav>
            
            <div class="sidebar-footer">
                <a href="index.php" class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Dil</span>
                </a>
            </div>
        </aside>

        
        <main class="admin-main">
           
            <header class="admin-header">
                <div class="header-left">
                    <button class="menu-toggle" id="menuToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1 id="page-title">Dashboard</h1>
                </div>
                <div class="header-right">
                    <div class="admin-profile">
                        <i class="fas fa-user-circle"></i>
                        <span>Admin</span>
                    </div>
                </div>
            </header>

            
            <div id="dashboard-page" class="page-content active">
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <h3>125</h3>
                            <p>Total Përdorues</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-box"></i>
                        </div>
                        <div class="stat-info">
                            <h3>48</h3>
                            <p>Total Produkte</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="stat-info">
                            <h3>89</h3>
                            <p>Porosi Aktive</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-euro-sign"></i>
                        </div>
                        <div class="stat-info">
                            <h3>€12,450</h3>
                            <p>Fitim Total</p>
                        </div>
                    </div>
                </div>

                <div class="content-grid">
                    <div class="content-card">
                        <h3>Përdoruesit e Fundit</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Emri</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#001</td>
                                    <td>John Doe</td>
                                    <td>john@example.com</td>
                                    <td><span class="badge success">Aktiv</span></td>
                                </tr>
                                <tr>
                                    <td>#002</td>
                                    <td>Jane Smith</td>
                                    <td>jane@example.com</td>
                                    <td><span class="badge success">Aktiv</span></td>
                                </tr>
                                <tr>
                                    <td>#003</td>
                                    <td>Mike Johnson</td>
                                    <td>mike@example.com</td>
                                    <td><span class="badge warning">Pezulluar</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="content-card">
                        <h3>Porositë e Fundit</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID Porosie</th>
                                    <th>Klienti</th>
                                    <th>Shuma</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#ORD-001</td>
                                    <td>John Doe</td>
                                    <td>€99.99</td>
                                    <td><span class="badge success">Përfunduar</span></td>
                                </tr>
                                <tr>
                                    <td>#ORD-002</td>
                                    <td>Jane Smith</td>
                                    <td>€149.50</td>
                                    <td><span class="badge info">Në Proces</span></td>
                                </tr>
                                <tr>
                                    <td>#ORD-003</td>
                                    <td>Mike Johnson</td>
                                    <td>€79.99</td>
                                    <td><span class="badge warning">Në Pritje</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

           
            <div id="users-page" class="page-content">
                <div class="page-header">
                    <h2>Menaxhim Përdoruesish</h2>
                    <button class="btn-primary">
                        <i class="fas fa-plus"></i> Shto Përdorues
                    </button>
                </div>
                <div class="content-card">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Emri i Plotë</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Status</th>
                                <th>Veprime</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#001</td>
                                <td>John Doe</td>
                                <td>john@example.com</td>
                                <td>johndoe</td>
                                <td><span class="badge success">Aktiv</span></td>
                                <td>
                                    <button class="btn-icon" title="Edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-icon danger" title="Fshi"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>#002</td>
                                <td>Jane Smith</td>
                                <td>jane@example.com</td>
                                <td>janesmith</td>
                                <td><span class="badge success">Aktiv</span></td>
                                <td>
                                    <button class="btn-icon" title="Edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-icon danger" title="Fshi"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>#003</td>
                                <td>Mike Johnson</td>
                                <td>mike@example.com</td>
                                <td>mikejohnson</td>
                                <td><span class="badge warning">Pezulluar</span></td>
                                <td>
                                    <button class="btn-icon" title="Edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-icon danger" title="Fshi"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            
            <div id="products-page" class="page-content">
                <div class="page-header">
                    <h2>Menaxhim Produktesh</h2>
                    <button class="btn-primary">
                        <i class="fas fa-plus"></i> Shto Produkt
                    </button>
                </div>
                <div class="content-card">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Emri</th>
                                <th>Kategoria</th>
                                <th>Çmimi</th>
                                <th>Stoku</th>
                                <th>Status</th>
                                <th>Veprime</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#001</td>
                                <td>Crop Tank T-shirt</td>
                                <td>Femra</td>
                                <td>€9.99</td>
                                <td>25</td>
                                <td><span class="badge success">Në Stok</span></td>
                                <td>
                                    <button class="btn-icon" title="Edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-icon danger" title="Fshi"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>#002</td>
                                <td>Zip-up Hoodie</td>
                                <td>Femra</td>
                                <td>€14.99</td>
                                <td>15</td>
                                <td><span class="badge success">Në Stok</span></td>
                                <td>
                                    <button class="btn-icon" title="Edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-icon danger" title="Fshi"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>#003</td>
                                <td>T-shirt</td>
                                <td>Meshkuj</td>
                                <td>€17.99</td>
                                <td>0</td>
                                <td><span class="badge danger">Jashtë Stokut</span></td>
                                <td>
                                    <button class="btn-icon" title="Edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-icon danger" title="Fshi"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            
            <div id="orders-page" class="page-content">
                <div class="page-header">
                    <h2>Menaxhim Porosish</h2>
                </div>
                <div class="content-card">
                    <table>
                        <thead>
                            <tr>
                                <th>ID Porosie</th>
                                <th>Klienti</th>
                                <th>Produktet</th>
                                <th>Shuma</th>
                                <th>Data</th>
                                <th>Status</th>
                                <th>Veprime</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#ORD-001</td>
                                <td>John Doe</td>
                                <td>3 Produkte</td>
                                <td>€99.99</td>
                                <td>15 Jan 2024</td>
                                <td><span class="badge success">Përfunduar</span></td>
                                <td>
                                    <button class="btn-icon" title="Shiko"><i class="fas fa-eye"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-002</td>
                                <td>Jane Smith</td>
                                <td>2 Produkte</td>
                                <td>€149.50</td>
                                <td>14 Jan 2024</td>
                                <td><span class="badge info">Në Proces</span></td>
                                <td>
                                    <button class="btn-icon" title="Shiko"><i class="fas fa-eye"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-003</td>
                                <td>Mike Johnson</td>
                                <td>1 Produkt</td>
                                <td>€79.99</td>
                                <td>13 Jan 2024</td>
                                <td><span class="badge warning">Në Pritje</span></td>
                                <td>
                                    <button class="btn-icon" title="Shiko"><i class="fas fa-eye"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            
            <div id="settings-page" class="page-content">
                <div class="page-header">
                    <h2>Cilësimet</h2>
                </div>
                <div class="content-card">
                    <h3>Informacione të Përgjithshme</h3>
                    <form class="settings-form">
                        <div class="form-group">
                            <label>Emri i Faqes</label>
                            <input type="text" value="DIVINE.">
                        </div>
                        <div class="form-group">
                            <label>Email Kontakti</label>
                            <input type="email" value="Divine@gmail.com">
                        </div>
                        <div class="form-group">
                            <label>Numri i Telefonit</label>
                            <input type="tel" value="+383 00 000 000">
                        </div>
                        <div class="form-group">
                            <label>Adresa</label>
                            <textarea rows="3">Ferizaj, Kosovo</textarea>
                        </div>
                        <button type="submit" class="btn-primary">Ruaj Ndryshimet</button>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <script>
        const navItems = document.querySelectorAll('.nav-item');
        const pages = document.querySelectorAll('.page-content');
        const pageTitle = document.getElementById('page-title');

        const pageTitles = {
            'dashboard': 'Dashboard',
            'users': 'Përdoruesit',
            'products': 'Produktet',
            'orders': 'Porositë',
            'settings': 'Cilësimet'
        };

        navItems.forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                const page = item.dataset.page;

                navItems.forEach(nav => nav.classList.remove('active'));
                item.classList.add('active');

                pages.forEach(p => p.classList.remove('active'));
                document.getElementById(`${page}-page`).classList.add('active');

                pageTitle.textContent = pageTitles[page];
            });
        });

        const menuToggle = document.getElementById('menuToggle');
        const sidebar = document.querySelector('.admin-sidebar');

        if (menuToggle) {
            menuToggle.addEventListener('click', () => {
                sidebar.classList.toggle('mobile-open');
            });
        }
    </script>
</body>
</html>
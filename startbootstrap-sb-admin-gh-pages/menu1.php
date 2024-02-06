
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cafe and Resto</title>
                <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>


    </head>

   
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
              <!-- Navbar Brand dengan logo dan nama kafe -->
        <a class="navbar-brand ps-3" href="index.php">
            <img src="cafe.png" alt="Cafe And Resto Logo" width="50" height="50" class="me-2"> <!-- Ganti logo.png dengan URL gambar logo Anda -->
            <span style="color: #fff; font-size: 24px; font-weight: bold;">Cafe And Resto - Pangkalan Kerinci</span> <!-- Ganti warna dan gaya teks sesuai keinginan Anda -->
        </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
             <!-- Navbar Search-->
             <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari...">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </form>

            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>Website</a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="https://sn613819@gmail.com">Gmail</a>
                      <a class="dropdown-item" href="https://www.instagram.com/siitinrhlz/?igshid=NzZlODBkYWE4Ng%3D%3D">Instagram</a>
                     <a class="dropdown-item" href="https://wa.me/68974395648">WhatsApp</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-workspace"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                            <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                            <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
                            </svg>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="bi bi-joystick"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-joystick" viewBox="0 0 16 16">
                                    <path d="M10 2a2 2 0 0 1-1.5 1.937v5.087c.863.083 1.5.377 1.5.726 0 .414-.895.75-2 .75s-2-.336-2-.75c0-.35.637-.643 1.5-.726V3.937A2 2 0 1 1 10 2z"/>
                                    <path d="M0 9.665v1.717a1 1 0 0 0 .553.894l6.553 3.277a2 2 0 0 0 1.788 0l6.553-3.277a1 1 0 0 0 .553-.894V9.665c0-.1-.06-.19-.152-.23L9.5 6.715v.993l5.227 2.178a.125.125 0 0 1 .001.23l-5.94 2.546a2 2 0 0 1-1.576 0l-5.94-2.546a.125.125 0 0 1 .001-.23L6.5 7.708l-.013-.988L.152 9.435a.25.25 0 0 0-.152.23z"/>
                                    </svg></div><div>Dashboard</div> 
                            </a>
                            <a class="nav-link" href="data-kuliner.php">
                            <div class="sb-nav-link-icon"><i class="bi bi-exclude"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclude" viewBox="0 0 16 16">
                                 <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm12 2H5a1 1 0 0 0-1 1v7h7a1 1 0 0 0 1-1V4z"/>
                                    </svg></div><div> Data Kuliner</div>
                                </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link" href="fasilitas.php">
                                <div class="sb-nav-link-icon"><i class="bi bi-box2-heart-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2-heart-fill" viewBox="0 0 16 16">
                                    <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM8.5 4h6l.5.667V5H1v-.333L1.5 4h6V1h1v3ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                                    </svg></div><div>Fasilitas</div>                                  
                            </a>
                            <a class="nav-link" href="promosi.php">
                                <div class="sb-nav-link-icon"><i class="bi bi-heart-fill"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                        </svg></div><div>Event Promosi</div>                                  
                            </a>
                            <a class="nav-link" href="menu1.php">
                                <div class="sb-nav-link-icon"><i class="bi bi-journals"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                                        <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z"/>
                                        <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z"/>
                                        </svg></div><div> Menu </div>
                         </a>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            
                            <a class="nav-link" href="help.php">
                                <div class="sb-nav-link-icon"><i class="bi bi-person-arms-up"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-arms-up" viewBox="0 0 16 16">
                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"/>
                                    <path d="m5.93 6.704-.846 8.451a.768.768 0 0 0 1.523.203l.81-4.865a.59.59 0 0 1 1.165 0l.81 4.865a.768.768 0 0 0 1.523-.203l-.845-8.451A1.492 1.492 0 0 1 10.5 5.5L13 2.284a.796.796 0 0 0-1.239-.998L9.634 3.84a.72.72 0 0 1-.33.235c-.23.074-.665.176-1.304.176-.64 0-1.074-.102-1.305-.176a.72.72 0 0 1-.329-.235L4.239 1.286a.796.796 0 0 0-1.24.998l2.5 3.216c.317.316.475.758.43 1.204Z"/>
                                    </svg></div><div>HelpDask</div>
                              
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
             <!-- Main Content -->
             <div id="layoutSidenav_content">
                <main>
                     <div class="container-fluid px-4">
                        <h2 class="mt-4">Menu Cafe And Resto</h2>
                        <a href="tambahmenu1.php" class="btn btn-primary mb-4"><i class="bi bi-bookmark-plus-fill">TAMBAH MENU</i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0
                            0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
                            </svg></a>
                        <input type="text" id="searchInput" class="form-control mb-4" placeholder="Search by Name or No" >
                        <div class="row" id="listPromotions">
                        <?php
                        include "koneksi.php"; // Sisipkan koneksi ke basis data

                        // Query untuk mengambil data dari tabel tbl_menu
                        $ambildata = mysqli_query($koneksi, "SELECT * FROM tbl_menu");

                        while ($tampil = mysqli_fetch_array($ambildata)) {
                        ?>
                            <div class="col-md-3 mt-2 event-promo">
                                <div class="card" style="width: 18rem;">
                                    <img src="<?php echo $tampil['gambar']; ?>" class="card-img-top menu-image" alt="Menu Image" style="width: 284px; height: 200px;">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $tampil['nama']; ?></h5>
                                        <p class="card-text"><?php echo $tampil['deksripsi']; ?></p>
                                        <p class="card-text">Rp <?php echo $tampil['harga']; ?></p>
                                        <button class="btn btn-primary" id="showLocation" data-lat="latitude" data-lng="longitude">
                                            <a href="https://wa.me/68974395648" style="color: white; text-decoration: none; "><i class="bi bi-cart2"></i>Pesan Sekarang</a>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                                </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </main>
            </div>
        </div>
        </style>

</html>
<script>
    const searchInput = document.getElementById('searchInput');
    const listPromotions = document.getElementById('listPromotions').querySelectorAll('.event-promo');

    searchInput.addEventListener('input', function () {
        const searchText = searchInput.value.toLowerCase();

        for (let promo of listPromotions) {
            const promoTitle = promo.querySelector('.card-title').textContent.toLowerCase();
            const promoNo = promoTitle.split(' ')[0];

            if (promoTitle.includes(searchText) || promoNo.includes(searchText)) {
                promo.style.display = 'block';
            } else {
                promo.style.display = 'none';
            }
        }
    });
</script>


     <!-- Bootstrap core JS-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
       

                    
            </body>
            </html>
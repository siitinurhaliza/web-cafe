<?php
// Data menu makanan
$menuItems = [
    ['001', 'Nasi Goreng Spesial', 25000, 'Nasi goreng dengan telur, ayam, sayuran, dan bumbu spesial.', 'assets\img\nasigoreng.jpg'],
    ['002', 'Mie Ayam Bakso', 28000, 'Mie ayam dengan bakso, pangsit, dan kuah ayam spesial.', 'assets\img\mieayam.jpg'],
    ['003', 'Roti Bakar', 15000, 'Roti bakar dengan selai cokelat atau keju.', 'assets\img\rotibakar.jpg'],
    ['004', 'Kopi Spesial', 18000, 'Segelas kopi spesial pilihan.', 'assets\img\kopispesial.jpg'],
    ['005', 'Nasi Kuning', 22000, 'Nasi kuning dengan telur, ayam goreng, dan bumbu khas.', 'assets\img\nasikuning.jpg'],
    ['006', 'Mie Goreng', 26000, 'Mie goreng dengan telur, ayam, sayuran, dan bumbu khas.', 'assets\img\miegor.jpg'],
    ['007', 'Pancake', 18000, 'Pancake dengan sirup maple dan potongan buah.', 'assets\img\pancake.jpg'],
    ['008', 'Teh Hangat', 15000, 'Segelas teh hangat pilihan.', 'assets\img\tehhangat.jpg'],
    ['009', 'Nasi Putih', 10000, 'Nasi putih yang lezat dan gurih.', 'assets\img\nasiputih.jpg'],
    ['010', 'Sate Ayam', 30000, 'Sate ayam dengan bumbu kacang dan lontong.', 'assets\img\sateayam.jpg'],
    ['011', 'Sop Buntut', 35000, 'Sop buntut dengan kuah kaya rasa.', 'assets\img\sopbuntut.jpg'],
    ['012', 'Es Teh Manis', 12000, 'Es teh manis dengan es batu.', 'assets\img\esteh.jpg'],
    ['013', 'Nasi Goreng Seafood', 28000, 'Nasi goreng dengan campuran seafood.', 'assets\img\nasigorengseafood.jpg'],
    ['014', 'Bakso Sapi', 25000, 'Bakso sapi dengan kuah panas.', 'assets\img\baksosapi.jpg'],
    ['015', 'Ayam Goreng', 24000, 'Ayam goreng renyah dengan bumbu khas.', 'assets\img\ayamgoreng.jpg'],
    ['016', 'Mie Rebus', 22000, 'Mie rebus dengan sayuran segar.', 'assets\img\mierebus.jpg'],
    ['017', 'Jus Jeruk', 14000, 'Segelas jus jeruk segar.', 'assets\img\jusjeruk.jpg'],
    ['018', 'Rendang', 32000, 'Rendang daging sapi dengan bumbu khas.', 'assets\img\rendang.jpg'],
    ['019', 'Sushi Mix', 35000, 'Sushi dengan berbagai pilihan rasa.', 'assets\img\sushi.jpg'],
    ['020', 'Kue Cokelat', 18000, 'Kue cokelat lezat dengan taburan cokelat.', 'assets\img\kuecokelat.jpg'],
    ['021', 'Capuccino', 20000, 'Minuman capuccino dengan busa susu.', 'assets\img\capuccino.jpg'],
    ['022', 'Nasi Goreng Pedas', 26000, 'Nasi goreng pedas dengan telur, ayam, dan cabai.', 'assets\img\nasigorengpedas.jpg'],
    ['023', 'Pisang Goreng', 15000, 'Pisang goreng gurih dengan gula.', 'assets\img\pisanggoreng.jpg'],
    ['024', 'Es Buah', 18000, 'Es buah segar dengan berbagai macam buah.', 'assets\img\esbuah.jpg'],
    ['025', 'Mie Ramen', 28000, 'Mie ramen dengan kuah gurih.', 'assets\img\mieramen.jpg'],
    ['026', 'Nasi Padang', 30000, 'Nasi Padang dengan berbagai lauk.', 'assets\img\nasipadang.jpg'],
    ['027', 'Kebab Ayam', 25000, 'Kebab ayam dengan saus keju.', 'assets\img\kebabayam.jpg'],
    ['028', 'Es Kopi Susu', 16000, 'Es kopi susu dengan es batu.', 'assets\img\eskopisusu.jpg'],
    ['029', 'Pizza Margherita', 32000, 'Pizza dengan saus tomat dan keju mozzarella.', 'assets\img\pizzamargherita.jpg'],
    ['030', 'Teh Tarik', 14000, 'Teh tarik Malaysia yang khas.', 'assets\img\tehtarik.jpg'],
    ['031', 'Ikan Bakar', 35000, 'Ikan bakar dengan bumbu khas.', 'assets\img\ikanbakar.jpg'],
    ['032', 'Nasi Uduk', 22000, 'Nasi uduk dengan ayam, tempe, dan sambal.', 'assets\img\nasiuduk.jpg'],
    ['033', 'Hot Chocolate', 20000, 'Minuman hot chocolate dengan marshmallow.', 'assets\img\hotchocolate.jpg'],
    ['034', 'Sate Kambing', 30000, 'Sate kambing dengan bumbu kacang.', 'assets\img\satekambing.jpg'],
    ['035', 'Es Krim Vanilla', 16000, 'Es krim rasa vanilla.', 'assets\img\eskrimvanilla.jpg'],
    ['036', 'Ayam Taliwang', 28000, 'Ayam taliwang dengan sambal pedas.', 'assets\img\ayamtaliwang.jpg'],
    ['037', 'Nasi Liwet', 25000, 'Nasi liwet dengan lauk khas.', 'assets\img\nasiliwet.jpg'],
    ['038', 'Es Kelapa Muda', 12000, 'Es kelapa muda segar.', 'assets\img\eskelapamuda.jpg'],
    ['039', 'Bubur Ayam', 18000, 'Bubur ayam dengan ayam suwir dan bawang goreng.', 'assets\img\buburayam.jpg'],
    ['040', 'Sop Ayam', 22000, 'Sop ayam dengan kuah bening dan sayuran.', 'assets\img\sopayam.jpg'],
    ['041', 'Nasi Kebuli', 32000, 'Nasi kebuli dengan daging kambing.', 'assets\img\nasikebuli.jpg'],
    ['042', 'Es Campur', 25000, 'Es campur dengan berbagai macam buah dan sirup.', 'assets\img\escampur.jpg'],
    ['043', 'Soto Ayam', 28000, 'Soto ayam dengan nasi, potongan ayam, dan kuah khas.', 'assets\img\soto.jpg'],
    ['044', 'Nasi Goreng Jawa', 26000, 'Nasi goreng ala Jawa dengan sambal terasi.', 'assets\img\nasigorengjawa.jpg'],
    ['045', 'Mie Ayam Jamur', 28000, 'Mie ayam dengan jamur segar dan kuah ayam.', 'assets\img\mieayamjamur.jpg'],
    ['046', 'Martabak Manis', 18000, 'Martabak manis dengan cokelat dan keju.', 'assets\img\martabakmanis.jpg'],
    ['047', 'Lemonade', 14000, 'Minuman lemonade segar.', 'assets\img\lemonade.jpg'],
    ['048', 'Nasi Goreng Sosis', 26000, 'Nasi goreng dengan sosis dan telur.', 'assets\img\nasigorengsosis.jpg'],
    ['049', 'Ayam Bakar', 30000, 'Ayam bakar dengan bumbu pedas.', 'assets\img\ayambakar.jpg'],
    ['050', 'Sop Kacang Merah', 22000, 'Sop kacang merah dengan daging sapi.', 'assets\img\sopkacangmerah.jpg'],
];
?>

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
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD591QIYicR65iaqukzvf/nwasF0nqhPay5w/91JmvM2hMDcnK1OnMGCdVK+iQrJ71zPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    #map {
        height: 96vh;
    }
    .menu-image {
        width: 300px; /* Sesuaikan dengan ukuran yang Anda inginkan */
        height: 200px; /* Sesuaikan dengan ukuran yang Anda inginkan */
    }
</style>

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
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>Profil</a>
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
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <nav class="navbar navbar-light bg-light">
                        <a class="navbar-brand">Menu Cafe & Resto</a>
                        <input type="text" id="searchInput" class="form-control mb-4" placeholder="Search by Name or No">
                        <form class="form-inline" id="formItem">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Login</a>
                                        <a class="dropdown-item" href="#!">Registrasi</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Log Out</a>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </nav>
                    <div class="row" id="listPromotions">
                            <?php
                            // Looping melalui setiap menu makanan
                            foreach ($menuItems as $item) {
                            ?>
                           <div class="col-md-3 mt-2 event-promo">
                                
                                <div class="card" style="width: 18rem;">
                                <img src="<?php echo $item[4]; ?>" class="card-img-top menu-image" alt="Menu Image" style="width: 284px; height: 200px;">

                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $item[1]; ?></h5>
                                        <p class="card-text"><?php echo $item[3]; ?></p>
                                        <p class="card-text">Rp <?php echo $item[2]; ?></p>
                                        <button class="btn btn-primary" id="showLocation" data-lat="latitude" data-lng="longitude">
                                        <a href="https://wa.me/68974395648" style="color: white; text-decoration: none;">Lihat Detail</a>
                                    </button>
                                  </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                      <style>
    .promo-img {
        width: 100%; /* Lebar gambar diatur 100% dari lebar parent (card) */
        height: auto; /* Tinggi gambar menyesuaikan untuk menjaga proporsi aspek */
    }
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
                        <?php
                        
                        ?>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-JuYw8ZYQc/iKEb81pOrr/1x0Zp+Xs3u3I6zqtlBlYOMKfIiBt9ACdMc9vwh2P6PdYmPPoZmM5o2/LJm1i+ORX4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>

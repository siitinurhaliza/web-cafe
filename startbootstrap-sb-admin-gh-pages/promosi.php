<?php
// Data event dan promosi Cafe & Resto
$eventPromotions = [
    ['001', 'Happy Hour Coffee', 'Nikmati kopi spesial selama happy hour!', 'assets\img\coffee-promo.jpg', '2023-10-30', 1.234, 3.456],
    ['002', 'Live Music Night', 'Bergabunglah dengan malam musik langsung dan makanan lezat!', 'assets\img\live-music.jpg', '2023-11-15', 2.345, 4.567],
    ['003', 'Brunch Keluarga', 'Ajak keluarga Anda untuk menikmati brunch spesial!', 'family-brunch.jpg', '2023-11-22', 3.456, 5.678],
    ['004', 'Festival Dessert', 'Nikmati beragam dessert lezat di festival kami!', 'assets\img\dessert-festival.jpg', '2023-12-05', 4.567, 6.789],
    ['005', 'Coffee Art Workshop', 'Pelajari seni membuat kopi dengan ahli!', 'assets\img\coffee-art-workshop.jpg', '2023-11-10', 2.345, 4.567],
    ['009', 'Cocktail Workshop', 'Pelajari cara membuat koktail favorit Anda!', 'assets\img\cocktail-workshop.jpg', '2023-11-28', 2.345, 4.567],
    ['010', 'Food Photography Class', 'Pelajari seni fotografi makanan bersama profesional!', 'assets\img\food-photography.jpg', '2023-12-15', 3.456, 5.678],
    ['006', 'Pizza Night', 'Nikmati berbagai jenis pizza dengan diskon besar!', 'assets\img\pizza-night.jpg', '2023-11-20', 2.345, 4.567],
    ['007', 'Karaoke Night', 'Bergabunglah dengan malam karaoke seru bersama teman-teman!', 'assets\img\karaoke-night.jpg', '2023-12-02', 3.456, 5.678],
    ['008', 'Sushi Festival', 'Jelajahi berbagai jenis sushi dan makanan Jepang!', 'assets\img\sushi-festival.jpg', '2023-12-12', 4.567, 6.789],
    ['011', 'BBQ Night', 'Nikmati hidangan BBQ yang lezat di bawah bintang-bintang!', 'assets\img\bbq-night.jpg', '2023-12-20', 4.567, 6.789],
    ['012', 'Wine and Cheese Tasting', 'Jelajahi kombinasi anggur dan keju yang sempurna!', 'assets\img\wine-cheese-tasting.jpg', '2023-12-18', 3.456, 5.678],
    ['013', 'Chocolate Lovers Festival', 'Suguhi diri Anda dengan berbagai cokelat eksotis!', 'assets\img\chocolate-festival.jpg', '2023-12-25', 2.345, 4.567],
    ['014', 'Asian Street Food Night', 'Cicipi hidangan jalan Asia yang autentik!', 'assets\img\asian-street-food.jpg', '2023-12-29', 3.456, 5.678],
    ['015', 'Sushi Making Workshop', 'Pelajari cara membuat sushi seperti seorang ahli!', 'assets\img\sushi-workshop.jpg', '2023-12-14', 2.345, 4.567],
    ['016', 'Burger Bonanza', 'Nikmati burger lezat dengan berbagai varian!', 'assets\img\burger-bonanza.jpg', '2023-12-31', 3.456, 5.678],
    ['017', 'Coffee and Art Exhibition', 'Jelajahi seni kopi sambil menikmati karya seni!', 'assets\img\coffee-art-exhibition.jpg', '2023-11-30', 2.345, 4.567],
    ['018', 'Thai Food Festival', 'Cicipi hidangan Thailand yang autentik!', 'assets\img\thai-food-festival.jpg', '2023-11-26', 4.567, 6.789],
    ['019', 'Dessert and Wine Pairing', 'Jelajahi pasangan sempurna antara dessert dan anggur!', 'assets\img\dessert-wine-pairing.jpg', '2023-12-14', 2.345, 4.567],
    ['020', 'Mediterranean Cuisine Night', 'Nikmati cita rasa Mediterania yang autentik!', 'assets\img\mediterranean-cuisine.jpg', '2023-11-29', 3.456, 5.678],
    ['021', 'Cocktail Mixology Class', 'Pelajari seni mencampur koktail dengan ahli!', 'assets\img\cocktail-mixology.jpg', '2023-12-08', 4.567, 6.789],
    ['022', 'Food Truck Festival', 'Jelajahi hidangan dari berbagai food truck!', 'assets\img\food-truck-festival.jpg', '2023-12-07', 2.345, 4.567],
    ['023', 'Pizza Making Workshop', 'Pelajari cara membuat pizza seperti seorang juru masak!', 'assets\img\pizza-workshop.jpg', '2023-12-16', 3.456, 5.678],
    ['024', 'Vegan Delights Night', 'Nikmati hidangan vegan yang lezat dan sehat!', 'assets\img\vegan-delights.jpg', '2023-12-09', 2.345, 4.567],
    ['025', 'International Buffet Night', 'Cicipi berbagai hidangan dari seluruh dunia!', 'assets\img\international-buffet.jpg', '2023-12-30', 4.567, 6.789],
    ['026', 'Sushi and Sake Tasting', 'Jelajahi kombinasi sushi dan sake yang lezat!', 'assets\img\sushi-sake-tasting.jpg', '2023-11-27', 3.456, 5.678],
    ['027', 'Wine Cellar Tour', 'Ikuti tur eksklusif ke dalam keller anggur kami!', 'assets\img\wine-cellar-tour.jpg', '2023-11-23', 2.345, 4.567],
    ['028', 'Tea and Pastry Pairing', 'Jelajahi pasangan sempurna antara teh dan kue!', 'assets\img\tea-pastry-pairing.jpg', '2023-12-17', 4.567, 6.789],
    ['029', 'Brewing Masterclass', 'Pelajari seni memanggang kopi bersama pakar!', 'assets\img\brewing-masterclass.jpg', '2023-12-13', 3.456, 5.678],
    ['030', 'Mongolian BBQ Night', 'Nikmati hidangan BBQ ala Mongolia yang lezat!', 'assets\img\mongolian-bbq.jpg', '2023-11-28', 2.345, 4.567],
    ['031', 'Champagne and Oyster Soiree', 'Cicipi kombinasi mewah antara sampanye dan tiram!', 'assets\img\champagne-oyster-soiree.jpg', '2023-12-20', 3.456, 5.678],
    ['032', 'Taco Tuesday', 'Bergabunglah dengan malam taco lezat setiap Selasa!', 'assets\img\taco-tuesday.jpg', '2023-11-21', 2.345, 4.567],
    ['033', 'Greek Food Festival', 'Cicipi hidangan Yunani yang autentik!', 'assets\img\greek-food-festival.jpg', '2023-12-21', 4.567, 6.789],
    ['034', 'Sushi and Ramen Night', 'Nikmati kombinasi sushi dan ramen yang lezat!', 'assets\img\sushi-ramen-night.jpg', '2023-11-24', 3.456, 5.678],
    ['035', 'Dumpling Making Workshop', 'Pelajari cara membuat dumpling seperti seorang ahli!', 'assets\img\dumpling-workshop.jpg', '2023-12-29', 2.345, 4.567],
    ['036', 'Bistro Brunch', 'Nikmati brunch ala bistro yang mewah!', 'assets\img\bistro-brunch.jpg', '2023-11-25', 3.456, 5.678],
    ['037', 'Tropical Smoothie Night', 'Cicipi hidangan smoothie segar di bawah bintang-bintang!', 'assets\img\tropical-smoothie.jpg', '2023-12-22', 4.567, 6.789],
    ['038', 'Fondue and Fondant Class', 'Pelajari seni fondue dan fondant dengan koki profesional!', 'assets\img\fondue-fondant-class.jpg', '2023-11-26', 2.345, 4.567],
    ['039', 'Cajun Cuisine Night', 'Nikmati hidangan khas Cajun yang pedas!', 'assets\img\cajun-cuisine.jpg', '2023-12-23', 3.456, 5.678],
    ['040', 'Beer Tasting Event', 'Jelajahi berbagai jenis bir di acara tasting kami!', 'assets\img\beer-tasting.jpg', '2023-11-29', 2.345, 4.567],
    ['041', 'Tapas and Sangria Night', 'Bergabunglah dengan malam tapas dan sangria yang seru!', 'assets\img\tapas-sangria-night.jpg', '2023-12-24', 3.456, 5.678],
    ['042', 'Cheese and Wine Pairing', 'Jelajahi pasangan sempurna antara keju dan anggur!', 'assets\img\cheese-wine-pairing.jpg', '2023-11-30', 2.345, 4.567],
    ['043', 'Dim Sum Delights', 'Cicipi hidangan dim sum yang autentik!', 'assets\img\dim-sum-delights.jpg', '2023-12-28', 4.567, 6.789],
    ['044', 'Chocolate and Coffee Tasting', 'Jelajahi kombinasi cokelat dan kopi yang lezat!', 'assets\img\chocolate-coffee-tasting.jpg', '2023-11-30', 3.456, 5.678],
    ['045', 'Cocktail Masterclass', 'Pelajari seni mencampur koktail dengan pakar!', 'assets\img\cocktail-masterclass.jpg', '2023-12-27', 2.345, 4.567],
    ['046', 'Tapas and Flamenco Night', 'Bergabunglah dengan malam tapas dan pertunjukan flamenco!', 'assets\img\tapas-flamenco-night.jpg', '2023-11-27', 3.456, 5.678],
    ['047', 'Molecular Gastronomy Workshop', 'Pelajari seni gastronomi molekuler bersama ahli!', 'assets\img\molecular-gastronomy-workshop.jpg', '2023-12-26', 2.345, 4.567],
    ['048', 'Indian Curry Night', 'Nikmati hidangan kari India yang lezat!', 'assets\img\indian-curry-night.jpg', '2023-11-28', 3.456, 5.678],
    ['049', 'Wine and Cheese Cruise', 'Jelajahi kombinasi anggur dan keju di kapal pesiar mewah!', 'assets\img\wine-cheese-cruise.jpg', '2023-12-25', 4.567, 6.789],
    ['050', 'Gourmet Patisserie Class', 'Pelajari seni patisserie dengan chef profesional!', 'assets\img\gourmet-patisserie-class.jpg', '2023-11-29', 2.345, 4.567]


   
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
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM" crossorigin=""></script>
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
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
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
                        <a class="navbar-brand">Event dan Promosi Cafe & Resto</a>
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
    // Looping melalui setiap event dan promosi, elemen card
    foreach ($eventPromotions as $promo) {
    ?>
    <div class="col-md-3 mt-2 event-promo">
        <div class="card">
            <img class="card-img promo-img" src="<?php echo $promo[3]; ?>" alt="Gambar Promo"style="width: 284px; height: 200px;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $promo[1]; ?></h5>
                <p class="card-text"><?php echo $promo[2]; ?></p>
                <p class="card-text">Tanggal: <?php echo $promo[4]; ?></p>
                <a class="btn btn-primary" href="index.php?"> <i class="bi bi-pin-map-fill"></i>
                    Tampilkan Lokasi <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
                    <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                    </svg></a>
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

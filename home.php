<?php 
session_start();


 ?>
<!DOCTYPE html>
<html>
<head>
     <title>Sewa Mobil</title>
     <link rel="shortcut icon" href="./images/logo_sewa.png" type="image/x-icon">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
     <link rel="stylesheet" href="./assets/style.css">
     <script src="./script.js"></script>

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap"
     rel="stylesheet">
</head>

<body>


<header class="header" data-header>
     
     <div class="overlay" data-overlay></div>

          <nav class="navbar navbar-expand-lg sticky-top" id="myNavbar">
               <div class="container">

                    <a class="navbar-brand" href="#">
                         <img src="./images/logo_sewa.png" alt="Logo" width="50" height="50" class="d-inline-block">
                         SewaBRO!
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown" style="padding-right:5%;">
                         <ul class="navbar-nav">
                              <li class="nav-item">
                                   <a class="nav-link active" aria-current="page" href="#home">Home</a>
                              </li>
                    
                              <li class="nav-item">
                                   <a class="nav-link" href="#featured-car">Features</a>
                              </li>
                              
                              <li class="nav-item">
                                   <a class="nav-link" href="#blog">Blog</a>
                              </li>
                         </ul>
                    </div>


                    <?php
                    if(!isset($_SESSION['user_name'])) {
                         echo '<div class="login_btn">                   
                              <a href="login.php" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">
                                   <i class="fas fa-user"></i> Log in
                                   </a>
                              </div><br>';

                    } else {
                         echo '<div class="logout_btn">
                              <a href="logout.php" class="btn btn-xs uppercase">
                              <i class="fas fa-sign-out-alt"></i> Log out
                              </a>
                              </div><br>

                              <div class="delete_btn">
                              <a href="delete-account.php" class="btn btn-xs uppercase">
                              <i class="fa fa-ban" aria-hidden="true"></i> Delete Account
                              </a>
                              </div><br>
                              
                              <div class="change-password_btn">
                              <a href="change-password.php" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">
                              <i class="fas fa-user"></i> Change Password
                              </a>
                              </div>';
                    }
                    ?> 
                    
               </div>
          </nav>
     </div>
</header>

<main>
    <article>

          <!-- 
          - #HERO
          -->

               <section class="section hero" id="home">
                    <div class="container">

                         <div class="hero-content">
                              <h2 class="h1 hero-title">Temukan mobil ternyaman untuk menemani liburan anda</h2>
                              <p class="hero-text">
                              Mobil berkualitas <strong>Harga Terjangkau</strong>
                              </p>
                         </div>

                         <div class="hero-banner"></div>

                              <form action="" class="hero-form">

                                   <div class="input-wrapper">
                                        <label for="input-1" class="input-label">Mobil, Model, atau Merk</label>

                                        <input type="text" name="car-model" id="input-1" class="input-field"
                                        placeholder="Mobil apa yang anda cari?">
                                   </div>

                                   <div class="input-wrapper">
                                        <label for="input-2" class="input-label">Range Harga Sewa</label>

                                        <input type="text" name="monthly-pay" id="input-2" class="input-field" placeholder="Masukkan Range Harga">
                                   </div>

                                   <div class="input-wrapper">
                                        <label for="input-3" class="input-label">Tahun Produksi</label>

                                        <input type="text" name="year" id="input-3" class="input-field" placeholder="Minimal tahun produksi">
                                   </div>

                                   <button type="submit" class="btn">Search</button>

                         </form>
                    </div>
               </section>

          <!-- Features Section-->

          <!-- 
          - #FEATURED CAR
          -->

          <section class="section featured-car" id="featured-car">
               <div class="container">

                    <div class="title-wrapper">
                         <h2 class="h2 section-title">Paling Banyak Dicari</h2>

                         <a href="#" class="featured-car-link">
                              <span>Lihat lebih banyak</span>
                              <ion-icon name="arrow-forward-outline"></ion-icon>
                         </a>
                    </div>

                         <ul class="featured-car-list">

                              <li>
                                   <div class="featured-car-card">

                                        <figure class="card-banner">
                                             <img src="./images/c-1.jpg" alt="Toyota RAV4 2021" loading="lazy" 
                                             width="440" height="300" class="w-100">
                                        </figure>

                                        <div class="card-content">

                                             <div class="card-title-wrapper">
                                                  <h3 class="h3 card-title">
                                                  <a href="#">Toyota RAV4</a>
                                                  </h3>
                                                  <data class="year" value="2021">2021</data>
                                             </div>

                                             <ul class="card-list">

                                                  <li class="card-list-item">
                                                  <ion-icon name="people-outline"></ion-icon>
                                                  <span class="card-item-text">4 Orang</span>
                                                  </li>

                                                  <li class="card-list-item">
                                                  <ion-icon name="flash-outline"></ion-icon>
                                                  <span class="card-item-text">Hybrid</span>
                                                  </li>

                                                  <li class="card-list-item">
                                                  <ion-icon name="speedometer-outline"></ion-icon>
                                                  <span class="card-item-text">6.1km / 1-liter</span>
                                                  </li>

                                                  <li class="card-list-item">
                                                  <ion-icon name="hardware-chip-outline"></ion-icon>
                                                  <span class="card-item-text">Automatic</span>
                                                  </li>

                                             </ul>

                                             <div class="card-price-wrapper">

                                                  <p class="card-price">
                                                       <strong>Rp6.800k</strong> /bulan
                                                  </p>

                                                  <button class="btn fav-btn" aria-label="Add to favourite list">
                                                       <ion-icon name="heart-outline"></ion-icon>
                                                  </button>

                                                  <button class="btn">Sewa</button>

                                             </div>

                                        </div>
                                   </div>
                              </li>

                              <li>
                                   <div class="featured-car-card">

                                        <figure class="card-banner">
                                             <img src="./images/c-2.jpg" alt="Honda Civic RS 2024" loading="lazy" 
                                             width="440" height="300" class="w-100">
                                        </figure>

                                        <div class="card-content">

                                             <div class="card-title-wrapper">
                                                  <h3 class="h3 card-title">
                                                       <a href="#">Honda Civic RS</a>
                                                  </h3>
                                                  <data class="year" value="2024">2024</data>
                                             </div>

                                             <ul class="card-list">

                                                  <li class="card-list-item">
                                                  <ion-icon name="people-outline"></ion-icon>
                                                  <span class="card-item-text">4 Orang</span>
                                                  </li>

                                                  <li class="card-list-item">
                                                  <ion-icon name="flash-outline"></ion-icon>
                                                  <span class="card-item-text">Gasoline</span>
                                                  </li>

                                                  <li class="card-list-item">
                                                  <ion-icon name="speedometer-outline"></ion-icon>
                                                  <span class="card-item-text">14km / 1-liter</span>
                                                  </li>

                                                  <li class="card-list-item">
                                                  <ion-icon name="hardware-chip-outline"></ion-icon>
                                                  <span class="card-item-text">Automatic</span>
                                                  </li>

                                             </ul>

                                             <div class="card-price-wrapper">

                                                  <p class="card-price">
                                                  <strong>Rp9.400k</strong> / bulan
                                                  </p>

                                                  <button class="btn fav-btn" aria-label="Add to favourite list">
                                                  <ion-icon name="heart-outline"></ion-icon>
                                                  </button>

                                                  <button class="btn">Sewa</button>

                                             </div>

                                        </div>
                                   </div>
                              </li>

                              <li>
                              <div class="featured-car-card">

                                   <figure class="card-banner">
                                   <img src="./images/c-3.jpg" alt="Volkswagen T-Cross 2020" loading="lazy" width="440"
                                        height="300" class="w-100">
                                   </figure>

                                   <div class="card-content">

                                        <div class="card-title-wrapper">
                                             <h3 class="h3 card-title">
                                             <a href="#">Volkswagen T-Cross</a>
                                             </h3>

                                             <data class="year" value="2020">2020</data>
                                        </div>

                                        <ul class="card-list">

                                             <li class="card-list-item">
                                             <ion-icon name="people-outline"></ion-icon>
                                             <span class="card-item-text">4 Orang</span>
                                             </li>

                                             <li class="card-list-item">
                                             <ion-icon name="flash-outline"></ion-icon>
                                             <span class="card-item-text">Gasoline</span>
                                             </li>

                                             <li class="card-list-item">
                                             <ion-icon name="speedometer-outline"></ion-icon>
                                             <span class="card-item-text">5.3km / 1-liter</span>
                                             </li>

                                             <li class="card-list-item">
                                             <ion-icon name="hardware-chip-outline"></ion-icon>
                                             <span class="card-item-text">Automatic</span>
                                             </li>

                                        </ul>

                                        <div class="card-price-wrapper">

                                             <p class="card-price">
                                             <strong>Rp6.200k</strong> /bulan
                                             </p>

                                             <button class="btn fav-btn" aria-label="Add to favourite list">
                                             <ion-icon name="heart-outline"></ion-icon>
                                             </button>
                                        
                                             <button class="btn">Sewa</button>

                                        </div>

                                   </div>
                              </div>
                              </li>

                              <li>
                                   <div class="featured-car-card">

                                        <figure class="card-banner">
                                             <img src="./images/c-4.jpg" alt="Cadillac Escalade 2020" loading="lazy" 
                                             width="440" height="300" class="w-100">
                                        </figure>

                                        <div class="card-content">

                                             <div class="card-title-wrapper">
                                                  <h3 class="h3 card-title">
                                                       <a href="#">Cadillac Escalade</a>
                                                  </h3>
                                                  <data class="year" value="2020">2020</data>
                                             </div>

                                             <ul class="card-list">

                                                  <li class="card-list-item">
                                                  <ion-icon name="people-outline"></ion-icon>
                                                  <span class="card-item-text">4 Orang</span>
                                                  </li>

                                                  <li class="card-list-item">
                                                  <ion-icon name="flash-outline"></ion-icon>
                                                  <span class="card-item-text">Gasoline</span>
                                                  </li>

                                                  <li class="card-list-item">
                                                  <ion-icon name="speedometer-outline"></ion-icon>
                                                  <span class="card-item-text">7.7km / 1-liter</span>
                                                  </li>

                                                  <li class="card-list-item">
                                                  <ion-icon name="hardware-chip-outline"></ion-icon>
                                                  <span class="card-item-text">Automatic</span>
                                                  </li>

                                             </ul>

                                             <div class="card-price-wrapper">

                                                  <p class="card-price">
                                                       <strong>Rp9.600k</strong> /bulan
                                                  </p>

                                                  <button class="btn fav-btn" aria-label="Add to favourite list">
                                                       <ion-icon name="heart-outline"></ion-icon>
                                                  </button>

                                                  <button class="btn">Sewa</button>

                                             </div>

                                        </div>
                                   </div>
                              </li>

                              <li>
                                   <div class="featured-car-card">

                                        <figure class="card-banner">
                                             <img src="./images/c-5.jpg" alt="BMW 4 Series GTI 2021" loading="lazy" 
                                             width="440" height="300" class="w-100">
                                        </figure>

                                        <div class="card-content">

                                             <div class="card-title-wrapper">
                                                  <h3 class="h3 card-title">
                                                  <a href="#">BMW 4 Series GTI</a>
                                                  </h3>
                                                  <data class="year" value="2021">2021</data>
                                             </div>

                                             <ul class="card-list">

                                                  <li class="card-list-item">
                                                  <ion-icon name="people-outline"></ion-icon>
                                                  <span class="card-item-text">4 Orang</span>
                                                  </li>

                                                  <li class="card-list-item">
                                                  <ion-icon name="flash-outline"></ion-icon>
                                                  <span class="card-item-text">Gasoline</span>
                                                  </li>

                                                  <li class="card-list-item">
                                                  <ion-icon name="speedometer-outline"></ion-icon>
                                                  <span class="card-item-text">7.6km / 1-liter</span>
                                                  </li>

                                                  <li class="card-list-item">
                                                  <ion-icon name="hardware-chip-outline"></ion-icon>
                                                  <span class="card-item-text">Automatic</span>
                                                  </li>

                                             </ul>

                                             <div class="card-price-wrapper">

                                                  <p class="card-price">
                                                  <strong>Rp8.200k</strong> /bulan
                                                  </p>

                                                  <button class="btn fav-btn" aria-label="Add to favourite list">
                                                  <ion-icon name="heart-outline"></ion-icon>
                                                  </button>
                                                  <button class="btn">Sewa</button>

                                             </div>

                                        </div>
                                   </div>
                              </li>

                              <li>
                                   <div class="featured-car-card">

                                        <figure class="card-banner">
                                             <img src="./images/c-6.jpg" alt="Pajero Sport Dakar Ultimate" loading="lazy" 
                                             width="440" height="300" class="w-100">
                                        </figure>

                                        <div class="card-content">

                                             <div class="card-title-wrapper">
                                                  <h3 class="h3 card-title">
                                                  <a href="#">Pajero Sport</a>
                                                  </h3>
                                                  <data class="year" value="2021">2021</data>
                                             </div>

                                             <ul class="card-list">

                                                  <li class="card-list-item">
                                                  <ion-icon name="people-outline"></ion-icon>
                                                  <span class="card-item-text">7 Orang</span>
                                                  </li>

                                                  <li class="card-list-item">
                                                  <ion-icon name="flash-outline"></ion-icon>
                                                  <span class="card-item-text">Diesel</span>
                                                  </li>

                                                  <li class="card-list-item">
                                                  <ion-icon name="speedometer-outline"></ion-icon>
                                                  <span class="card-item-text">10.9km / 1-liter</span>
                                                  </li>

                                                  <li class="card-list-item">
                                                  <ion-icon name="hardware-chip-outline"></ion-icon>
                                                  <span class="card-item-text">Automatic</span>
                                                  </li>

                                             </ul>

                                             <div class="card-price-wrapper">

                                                  <p class="card-price">
                                                  <strong>Rp10.200k</strong> /bulan
                                                  </p>

                                                  <button class="btn fav-btn" aria-label="Add to favourite list">
                                                  <ion-icon name="heart-outline"></ion-icon>
                                                  </button>
                                                  <button class="btn">Sewa</button>

                                             </div>

                                        </div>
                                   </div>
                              </li>

                         </ul>

               </div>
          </section>


          <!-- 
          - #GET START
          -->

          <section class="section get-start">
               <div class="container">

                    <h2 class="h2 section-title">Mulai dengan 4 langkah</h2>

                    <ul class="get-start-list">

                         <li>
                              <div class="get-start-card">

                                   <div class="card-icon icon-1">
                                        <ion-icon name="person-add-outline"></ion-icon>
                                   </div>

                                   <h3 class="card-title">Daftar</h3>

                                   <p class="card-text">
                                        Untuk bisa mengakses fitur sewa, kamu harus membuat akun dan login terlebih dahulu
                                   </p>

                                   <a href="index.php" class="card-link">Get started</a>
                              </div>
                         </li>

                         <li>
                              <div class="get-start-card">

                                   <div class="card-icon icon-2">
                                   <ion-icon name="car-outline"></ion-icon>
                                   </div>

                                   <h3 class="card-title">Mobil apa yang kamu inginkan?</h3>

                                   <p class="card-text">
                                   Berbagai macam variasi mobil telah kami sediakan, saatnya memilih!
                                   </p>
                              </div>
                         </li>

                         <li>
                              <div class="get-start-card">

                                   <div class="card-icon icon-3">
                                   <ion-icon name="person-outline"></ion-icon>
                                   </div>

                                   <h3 class="card-title">Buat Kesepakatan</h3>

                                   <p class="card-text">
                                   Buatlah kesepakatan terkait harga dan waktu bersama
                                   </p>
                              </div>
                         </li>

                         <li>
                              <div class="get-start-card">

                                   <div class="card-icon icon-4">
                                   <ion-icon name="card-outline"></ion-icon>
                                   </div>

                                   <h3 class="card-title">Sewa Sekarang</h3>

                                   <p class="card-text">
                                   Tunggu apa lagi? Saatnya sewa dan gunakan mobilnya
                                   </p>
                              </div>
                         </li>

                    </ul>
               </div>
          </section>


          <!-- 
          - #BLOG
          -->

          <section class="section blog" id="blog">
               <div class="container">
                    <h2 class="h2 section-title">Blog</h2>

                    <ul class="blog-list has-scrollbar">

                         <li>
                              <div class="blog-card">

                                   <figure class="card-banner">
                                        <a href="#">
                                             <img src="./images/blog-1.jpg" alt="Pembukaan Perusahaan" loading="lazy"
                                             class="w-100">
                                        </a>

                                        <a href="#" class="btn card-badge">Perusahaan</a>
                                   </figure>

                                   <div class="card-content">

                                        <h3 class="h3 card-title">
                                             <a href="#">Pembukaan Perusahaan</a>
                                        </h3>

                                        <div class="card-meta">

                                             <div class="publish-date">
                                                  <ion-icon name="time-outline"></ion-icon>
                                                  <time datetime="2022-01-14">December 23, 2022</time>
                                             </div>

                                             <div class="comments">
                                                  <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                                  <data value="114">114</data>
                                             </div>

                                        </div>
                                   </div>
                              </div>
                         </li>

                         <li>
                              <div class="blog-card">

                                   <figure class="card-banner">
                                        <a href="#">
                                             <img src="./images/blog-2.jpg" alt="Mobil apa yang paling rentan" loading="lazy"
                                             class="w-100">
                                        </a>
                                        <a href="#" class="btn card-badge">Perbaikan</a>
                                   </figure>

                                   <div class="card-content">

                                        <h3 class="h3 card-title">
                                             <a href="#">Mobil apa yang paling rentan</a>
                                        </h3>

                                        <div class="card-meta">

                                             <div class="publish-date">
                                                  <ion-icon name="time-outline"></ion-icon>
                                                  <time datetime="2022-01-14">January 14, 2023</time>
                                                  </div>

                                                  <div class="comments">
                                                  <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                                  <data value="114">114</data>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </li>

                         <li>
                              <div class="blog-card">

                                   <figure class="card-banner">
                                        <a href="#">
                                             <img src="./images/blog-3.jpg" alt="Statistik menunjukkan berapa usia rata-rata" loading="lazy"
                                             class="w-100">
                                        </a>
                                        <a href="#" class="btn card-badge">Mobil</a>
                                   </figure>

                                   <div class="card-content">

                                        <h3 class="h3 card-title">
                                             <a href="#">Statistik menunjukkan berapa usia rata-rata</a>
                                        </h3>

                                        <div class="card-meta">

                                             <div class="publish-date">
                                                  <ion-icon name="time-outline"></ion-icon>
                                                  <time datetime="2022-01-14">Agustus 8, 2022</time>
                                             </div>

                                             <div class="comments">
                                                  <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                                  <data value="114">114</data>
                                             </div>

                                        </div>
                                   </div>
                              </div>
                         </li>

                         <li>
                              <div class="blog-card">

                                   <figure class="card-banner">
                                        <a href="#">
                                             <img src="./images/blog-4.jpg" alt="Apa saja yang diperlukan saat menyewa mobil?" loading="lazy"
                                             class="w-100">
                                        </a>
                                        <a href="#" class="btn card-badge">Mobil</a>
                                   </figure>

                                   <div class="card-content">

                                        <h3 class="h3 card-title">
                                             <a href="#">Apa saja yang diperlukan saat menyewa mobil?</a>
                                        </h3>

                                        <div class="card-meta">

                                             <div class="publish-date">
                                                  <ion-icon name="time-outline"></ion-icon>
                                                  <time datetime="2022-01-14">September 6, 2022</time>
                                             </div>

                                             <div class="comments">
                                                  <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                                  <data value="114">114</data>
                                             </div>

                                        </div>
                                   </div>
                              </div>
                         </li>

                         <li>
                              <div class="blog-card">

                                   <figure class="card-banner">
                                        <a href="#">
                                             <img src="./images/blog-5.jpg" alt="Aturan baru untuk menggunakan mobil" loading="lazy"
                                             class="w-100">
                                        </a>
                                        <a href="#" class="btn card-badge">Perusahaan</a>
                                   </figure>

                                   <div class="card-content">

                                        <h3 class="h3 card-title">
                                             <a href="#">Aturan baru untuk menggunakan mobil</a>
                                        </h3>

                                        <div class="card-meta">

                                             <div class="publish-date">
                                             <ion-icon name="time-outline"></ion-icon>
                                             <time datetime="2022-01-14">April 26, 2023</time>
                                             </div>

                                             <div class="comments">
                                             <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                             <data value="114">114</data>
                                             </div>

                                        </div>

                                   </div>
                              </div>
                         </li>

                    </ul>
               </div>
          </section>

     </article>
</main>

  
<footer class="footer">
     <div class="container">

          <div class="footer-top">

               <div class="footer-brand">
                    <a href="#" class="logo">
                    <img src="./images/logo_sewa.png" alt="Logo" width="80" height="80" class="d-inline-block">
                    </a>

                    <p class="footer-text">
                    Perusahaan rental mobil terbesar di Sumatera Selatan
                    </p>
               </div>

               <ul class="footer-list">

                    <li>
                         <p class="footer-list-title">Perusahaan</p>
                    </li>

                    <li>
                         <a href="#" class="footer-link">Tentang Kami</a>
                    </li>

                    <li>
                         <a href="#" class="footer-link">List Harga</a>
                    </li>

                    <li>
                         <a href="#" class="footer-link">Blog</a>
                    </li>

                    <li>
                         <a href="#" class="footer-link">Kontak</a>
                    </li>

               </ul>

               <ul class="footer-list">

                    <li>
                         <p class="footer-list-title">Support</p>
                    </li>

                    <li>
                         <a href="#" class="footer-link">Layanan Pengguna</a>
                    </li>

                    <li>
                         <a href="#" class="footer-link">Ajukan Pertanyaan</a>
                    </li>

                    <li>
                         <a href="#" class="footer-link">Privacy policy</a>
                    </li>

                    <li>
                         <a href="#" class="footer-link">Syarat & Ketentuan</a>
                    </li>

               </ul>

               <ul class="footer-list">

                    <li>
                         <p class="footer-list-title">Cabang Perusahaan</p>
                    </li>

                    <li>
                         <a href="#" class="footer-link">Palembang</a>
                    </li>

                    <li>
                         <a href="#" class="footer-link">Indralaya</a>
                    </li>

                    <li>
                         <a href="#" class="footer-link">Lahat</a>
                    </li>

                    <li>
                         <a href="#" class="footer-link">Linggau</a>
                    </li>

                    <li>
                         <a href="#" class="footer-link">Prabumulih</a>
                    </li>

                    <li>
                         <a href="#" class="footer-link">Muara Enim</a>
                    </li>

                    <li>
                         <a href="#" class="footer-link">Lampung</a>
                    </li>

                    <li>
                         <a href="#" class="footer-link">Jambi</a>
                    </li>

               </ul>

          </div>

          <div class="footer-bottom">

               <ul class="social-list">

                    <li>
                    <a href="#" class="social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    </li>

                    <li>
                    <a href="#" class="social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    </li>

                    <li>
                    <a href="#" class="social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    </li>

                    <li>
                    <a href="#" class="social-link">
                    <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                    </li>

                    <li>
                    <a href="#" class="social-link">
                    <ion-icon name="logo-skype"></ion-icon>
                    </a>
                    </li>

                    <li>
                    <a href="#" class="social-link">
                    <ion-icon name="mail-outline"></ion-icon>
                    </a>
                    </li>

               </ul>

               <p class="copyright">
                    &copy; 2024 <a href="#">paddkk</a>. All Rights Reserved
               </p>

          </div>

     </div>
</footer>

</body>
</html>
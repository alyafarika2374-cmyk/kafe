
<!DOCTYPE html>
<html lang="id">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Farika</title>

    <!-- Kodingan Favicon Tab Browser -->
    <link rel="icon" type="image/png" href="ast/img/gallery/cafe/logo-farikaa.png">

    <link rel="stylesheet" href="ast/css/theme.css">

    <style>

        body {
            font-family: 'Source Sans Pro', sans-serif;
            color: #3d2618;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'Playfair Display', serif;
        }

        .cafe-navbar {
            background: #ffffff;
        }

        .cafe-logo {
            width: 48px;
            height: 48px;
            object-fit: contain;
        }

        .hero-section {
            min-height: 620px;
            padding-top: 90px;
            background:
                linear-gradient(
                    90deg,
                    rgba(37, 21, 12, 0.95) 0%,
                    rgba(37, 21, 12, 0.78) 45%,
                    rgba(37, 21, 12, 0.20) 100%
                ),
                url('ast/img/gallery/cafe/hero-kopi.jpg') center/cover no-repeat;
        }

        .hero-title {
            font-size: 65px;
            line-height: 1.1;
            color: #ffffff;
        }

        .hero-text {
            color: #ffffff;
            font-size: 20px;
            max-width: 520px;
        }

        .btn-cafe {
            background: #7b421d;
            border-color: #7b421d;
            color: #ffffff;
        }

        .btn-cafe:hover {
            background: #5f3015;
            border-color: #5f3015;
            color: #ffffff;
        }

        .btn-outline-cafe {
            border: 2px solid #7b421d;
            color: #7b421d;
            background: #ffffff;
        }

        .btn-outline-cafe:hover {
            background: #7b421d;
            color: #ffffff;
        }

        .section-label {
            color: #9a5b2d;
            letter-spacing: 3px;
            font-weight: 700;
            font-size: 14px;
        }

        .about-image {
            width: 100%;
            height: 430px;
            object-fit: cover;
            border-radius: 15px;
        }

        .feature-icon {
            width: 65px;
            height: 65px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
            border-radius: 50%;
            background: #f7eee7;
            color: #7b421d;
            font-size: 25px;
        }

        .menu-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .menu-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.13);
        }

        .menu-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .price {
            color: #7b421d;
            font-weight: 700;
            font-size: 18px;
        }

        .rating {
            color: #c4873d;
        }

        .why-section {
            background: #f8f3ee;
        }

        .reservation-section {
            background: #47c100;
        }

        .reservation-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 15px;
        }

        .reservation-card {
            border: none;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
        }

        .form-control,
        .form-select {
            min-height: 48px;
            border-radius: 7px;
        }

        .footer-cafe {
            background: #28180e;
            color: #ffffff;
        }

        .footer-cafe a {
            color: #d8c4b5;
            text-decoration: none;
        }

        .footer-cafe a:hover {
            color: #ffffff;
        }

        .social-icon {
            width: 38px;
            height: 38px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #b99b86;
            border-radius: 50%;
            margin-right: 8px;
        }

        @media (max-width: 768px) {

            .hero-title {
                font-size: 43px;
            }

            .hero-section {
                min-height: 650px;
            }

        }

    </style>

</head>


<body>


<!-- ============================================ -->
<!-- NAVBAR -->
<!-- ============================================ -->

<nav class="navbar navbar-expand-lg navbar-light fixed-top cafe-navbar shadow-sm">

    <div class="container">

        <a
            class="navbar-brand d-flex align-items-center"
            href="#home"
        >

        <img
            src="ast/img/gallery/cafe/logo-farikaa.png"
            class="cafe-logo"
            alt="Cafe Farika"
        >

            <span class="fs-3 fw-bold ms-2">
                Cafe Farika
            </span>

        </a>


        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCafe"
        >

            <span class="navbar-toggler-icon"></span>

        </button>


        <div
            class="collapse navbar-collapse"
            id="navbarCafe"
        >

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a
                        class="nav-link fw-semibold mx-2"
                        href="#home"
                    >
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link fw-semibold mx-2"
                        href="#about"
                    >
                        Tentang Kami
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link fw-semibold mx-2"
                        href="#menu"
                    >
                        Menu
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link fw-semibold mx-2"
                        href="#contact"
                    >
                        Kontak
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link fw-semibold mx-2"
                        href="{{route('login')}}"
                    >
                        Masuk
                    </a>
                </li>

            </ul>


            <a
                href="#rvation"
                class="resebtn btn-cafe px-4"
            >

                <i class="fas fa-calendar-alt me-2"></i>

                Reservasi Meja

            </a>

        </div>

    </div>

</nav>



<!-- ============================================ -->
<!-- HERO -->
<!-- ============================================ -->

<section
    class="hero-section d-flex align-items-center"
    id="home"
>
    <div class="container">
        <div class="row align-items-center">

            <!-- Kiri: Teks Hero -->
            <div class="col-lg-7">
                <div class="d-flex align-items-center mb-2">
                    >
                    <p class="text-warning fw-bold letter-spacing mb-0">
                        SELAMAT DATANG DI
                    </p>
                </div>

                <h1 class="hero-title fw-bold">
                    Cafe Farika
                </h1>

                <p class="hero-text mt-4 mb-5">
                    Nikmati kopi berkualitas, makanan lezat,
                    dan suasana nyaman untuk menemani setiap
                    cerita berharga bersama orang tercinta.
                </p>

                <div class="d-flex flex-wrap gap-3">
                    <a href="#menu" class="btn btn-warning btn-lg px-4">
                        <i class="fas fa-coffee me-2"></i>
                        Lihat Menu
                    </a>

                    <a href="#reservation" class="btn btn-light btn-lg px-4">
                        <i class="fas fa-calendar-check me-2"></i>
                        Reservasi Meja
                    </a>
                </div>
            </div>

            <!-- Kanan: Logo / Gambar Besar mengisi area kosong -->
            <div class="col-lg-5 text-center mt-4 mt-lg-0">
                <img 
                    src="ast/img/gallery/cafe/logo-farikaa.png" 
                    alt="Logo Cafe Farika Besar" 
                    class="img-fluid drop-shadow"
                    style="max-height: 380px; filter: drop-shadow(0px 10px 20px rgba(0,0,0,0.5));"
                >
            </div>

        </div>
    </div>
</section>



<!-- ============================================ -->
<!-- ABOUT -->
<!-- ============================================ -->

<section
    class="py-7"
    id="about"
>

    <div class="container">

        <div class="row align-items-center g-5">


            <div class="col-lg-6">

                <img
                    src="ast/img/gallery/cafe/interior-cafe.jpg"
                    class="about-image"
                    alt="Interior Cafe Farika"
                >

            </div>


            <div class="col-lg-6">

                <p class="section-label mb-2">
                    TENTANG KAMI
                </p>


                <h2 class="display-5 fw-bold mb-4">
                    Lebih dari Sekadar Kopi
                </h2>


                <p class="text-700">

                    Cafe Farika adalah tempat di mana kualitas,
                    kenyamanan, dan kebersamaan berpadu.

                    Kami menghadirkan pengalaman terbaik melalui
                    sajian pilihan dan pelayanan yang hangat.

                </p>


                <div class="row mt-5">


                    <div class="col-6 col-md-3 text-center mb-4">

                        <img
                          src="ast/img/gallery/cafe/kopi-berkualitas.jpg"
                          class="rounded-circle mb-3"
                          width="100"
                          height="100"
                          style="object-fit: cover;"
                          alt="Kopi Berkualitas"
                        >

                        <h6 class="fw-bold">
                            Kopi Berkualitas
                        </h6>

                        <small class="text-600">
                            Biji kopi pilihan terbaik
                        </small>
                      </div>

                      <div class="col-6 col-md-3 text-center">
                        <img
                            src="ast/img/gallery/cafe/menu-lezat.png"
                            class="rounded-circle mb-3"
                            width="100"
                            height="100"
                            style="object-fit: cover;"
                            alt="Menu Lezat"
                          >
                        <h6 class="fw-bold">
                            Menu Lezat
                        </h6>

                        <small class="text-600">
                            Beragam menu untuk semua
                        </small>
                      </div>

                       <div class="col-6 col-md-3 text-center">
                        <img
                          src="ast/img/gallery/cafe/suasana-nyaman.jpg"
                          class="rounded-circle mb-3"
                          width="100"
                          height="100"
                          style="object-fit: cover;"
                          alt="Suasana Nyaman"
                        >
                        <h6 class="fw-bold">
                            Suasana Nyaman
                        </h6>
                        <small class="text-600">
                            Cozy dan menyenangkan
                        </small>
                      </div>

                       <div class="col-6 col-md-3 text-center">
                         <img
                            src="ast/img/gallery/cafe/pelayanan-ramah.jpg"
                            class="rounded-circle mb-3"
                            width="100"
                            height="100"
                            style="object-fit: cover;"
                            alt="Pelayanan Ramah"
                          >
                        <h6 class="fw-bold">
                            Pelayanan Ramah
                        </h6>
                        <small class="text-600">
                            Melayani dengan sepenuh hati
                        </small>
                         </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- ============================================ -->
<!-- MENU -->
<!-- ============================================ -->

<section
    class="py-7 bg-100"
    id="menu"
>

    <div class="container">


        <div class="text-center mb-5">

            <p class="section-label mb-2">
                MENU POPULER
            </p>

            <h2 class="display-5 fw-bold">
                Menu Favorit Kami
            </h2>

            <p class="text-600">
                Pilihan menu yang paling disukai pelanggan Cafe Farika.
            </p>

        </div>


        <div class="row g-4">


            <!-- MENU 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="card menu-card h-100">
                    <img
                        src="ast/img/gallery/cafe/americano.jpg"
                        class="menu-image"
                        alt="iced americano"
                    >

                    <div class="card-body">
                        <div class="rating mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>


                        <h5 class="fw-bold">
                            Americano
                        </h5>

                        <p class="text-600 small">
                            Kopi espresso dengan rasa kuat, segar, 
                            dan sedikit pahit yang nikmat.

                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <span class="price">
                                Rp15.000
                            </span>

                            <button class="btn btn-cafe btn-sm">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- MENU 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="card menu-card h-100">
                    <img
                        src="ast/img/gallery/cafe/iced-coklat.jpg"
                        class="menu-image"
                        alt="Iced Coklat"
                    >

                    <div class="card-body">
                        <div class="rating mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>

                        </div>

                        <h5 class="fw-bold">
                            Cokelat
                        </h5>

                        <p class="text-600 small">
                            Cokelat dingin yang creamy dengan rasa manis 
                            dan cokelat yang nikmat.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <span class="price">
                                Rp30.000
                            </span>

                            <button class="btn btn-cafe btn-sm">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>
            </div>



            <!-- MENU 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="card menu-card h-100">
                    <img
                        src="ast/img/gallery/cafe/iced-matcha.jpg"
                        class="menu-image"
                        alt="Iced Matcha"
                    >
                    <div class="card-body">
                        <div class="rating mb-2">

                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>

                        </div>

                        <h5 class="fw-bold">
                            Matcha
                        </h5>

                        <p class="text-600 small">
                            Matcha creamy dengan rasa manis 
                            dan aroma teh hijau yang menyegarkan.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">
                                Rp30.000
                            </span>
                            <button class="btn btn-cafe btn-sm">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MENU 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="card menu-card h-100">
                    <img
                        src="ast/img/gallery/cafe/iced-coffee.jpg"
                        class="menu-image"
                        alt="Es Kopi Susu"
                    >
                    <div class="card-body">
                        <div class="rating mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <h5 class="fw-bold">
                            Es Kopi Susu
                        </h5>
                        <p class="text-600 small">
                            Kopi susu segar dengan perpaduan
                            rasa yang pas.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">
                                Rp22.000
                            </span>
                            <button class="btn btn-cafe btn-sm">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>
            </div>


             <!-- MENU 5 -->
            <div class="col-md-6 col-lg-3">
                <div class="card menu-card h-100">
                    <img
                        src="ast/img/gallery/cafe/Campuran.jpg"
                        class="menu-image"
                        alt="campuran"
                    >

                    <div class="card-body">
                        <div class="rating mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>


                        <h5 class="fw-bold">
                            Fast Food
                        </h5>

                        <p class="text-600 small">
                            Aneka fast food lezat berupa sosis, kentang, 
                            dan nugget yang renyah dan cocok untuk camilan.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <span class="price">
                                Rp25.000
                            </span>

                            <button class="btn btn-cafe btn-sm">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        
    
             <!-- MENU 6 -->
            <div class="col-md-6 col-lg-3">
                <div class="card menu-card h-100">
                    <img
                        src="ast/img/gallery/cafe/carbonara.jpg"
                        class="menu-image"
                        alt="Creamy Carbonara"
                    >

                    <div class="card-body">
                        <div class="rating mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>

                        </div>

                        <h5 class="fw-bold">
                            Creamy Carbonara
                        </h5>

                        <p class="text-600 small">
                            Spaghetti creamy dengan topping
                            smoked beef pilihan.
                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <span class="price">
                                Rp30.000
                            </span>

                            <button class="btn btn-cafe btn-sm">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>
            </div>

             <!-- MENU 7 -->
            <div class="col-md-6 col-lg-3">
                <div class="card menu-card h-100">
                    <img
                        src="ast/img/gallery/cafe/roti-bakar.jpg"
                        class="menu-image"
                        alt="Roti Bakar"
                    >

                    <div class="card-body">
                        <div class="rating mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>

                        </div>

                        <h5 class="fw-bold">
                            Roti Bakar
                        </h5>

                        <p class="text-600 small">
                            Roti bakar hangat dengan tekstur renyah di luar, 
                            lembut di dalam, dan rasa manis yang lezat.”
                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <span class="price">
                                Rp20.000
                            </span>

                            <button class="btn btn-cafe btn-sm">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            
             <!-- MENU 8 -->
            <div class="col-md-6 col-lg-3">
                <div class="card menu-card h-100">
                    <img
                        src="ast/img/gallery/cafe/Pisang-Goreng.jpg"
                        class="menu-image"
                        alt="Pisang Goreng"
                    >

                    <div class="card-body">
                        <div class="rating mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>

                        </div>

                        <h5 class="fw-bold">
                            Pisang Goreng
                        </h5>

                        <p class="text-600 small">
                            Pisang goreng hangat dengan tekstur 
                            renyah di luar dan lembut manis di dalam.”
                        </p>

                        <div class="d-flex justify-content-between align-items-center">

                            <span class="price">
                                Rp20.000
                            </span>

                            <button class="btn btn-cafe btn-sm">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="text-center mt-5">
            <a
                href="#"
                class="btn btn-cafe btn-lg px-5"
            >
                Lihat Semua Menu

                <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>



<!-- ============================================ -->
<!-- WHY CHOOSE US -->
<!-- ============================================ -->

<section class="py-6 why-section">
    <div class="container">
        <div class="text-center mb-5">
            <p class="section-label mb-2">
                KENAPA MEMILIH KAMI?
            </p>

            <h2 class="fw-bold">
                Alasan Memilih Cafe Farika
            </h2>
        </div>

        <div class="row g-4">
            <div class="col-md-3 text-center">
                 <img
                          src="ast/img/gallery/cafe/kopi-berkualitas.jpg"
                          class="rounded-circle mb-3"
                          width="100"
                          height="100"
                          style="object-fit: cover;"
                          alt="Kopi Berkualitas"
                        >
                <h5 class="fw-bold">
                    Biji Kopi Pilihan
                </h5>

                <p class="text-600">
                    Kami menggunakan biji kopi berkualitas
                    dari pilihan terbaik.
                </p>
            </div>

            <div class="col-md-3 text-center">
                <img
                          src="ast/img/gallery/cafe/pelayanan-ramah.jpg"
                          class="rounded-circle mb-3"
                          width="100"
                          height="100"
                          style="object-fit: cover;"
                          alt="Kopi Berkualitas"
                        >
                <h5 class="fw-bold">
                    Prlayanan Ramah
                </h5>
                <p class="text-600">
                    Bahan makanan selalu segar dan
                    dipilih dengan teliti.
                </p>
            </div>

            <div class="col-md-3 text-center">
               <img
                          src="ast/img/gallery/cafe/menu-beragam.jpg"
                          class="rounded-circle mb-3"
                          width="100"
                          height="100"
                          style="object-fit: cover;"
                          alt="Kopi Berkualitas"
                        >
                <h5 class="fw-bold">
                    Menu Beragam
                </h5>

                <p class="text-600">
                    Tersedia berbagai pilihan makanan dan 
                    minuman yang dapat dinikmati sesuai selera.
                </p>
            </div>

            <div class="col-md-3 text-center">
                <img
                          src="ast/img/gallery/cafe/suasana-nyaman.jpg"
                          class="rounded-circle mb-3"
                          width="100"
                          height="100"
                          style="object-fit: cover;"
                          alt="Kopi Berkualitas"
                        >

                <h5 class="fw-bold">
                    Tempat Nyaman
                </h5>

                <p class="text-600">
                    Suasana kafe yang nyaman cocok untuk bersantai, 
                    berkumpul, atau mengerjakan tugas.
                </p>
            </div>

        </div>

    </div>

</section>



<!-- ============================================ -->
<!-- RESERVATION -->
<!-- ============================================ -->

<section
    class="py-7 reservation-section"
    id="reservation"
>

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- GAMBAR -->
            <div class="col-lg-5">

                <img
                    src="ast/img/gallery/cafe/reserved-table.jpg"
                    class="reservation-image"
                    alt="Meja Reservasi"
                >

            </div>


            <!-- FORM RESERVASI -->
            <div class="col-lg-7">

                <p class="section-label mb-2">
                    RESERVASI MEJA
                </p>

                <h2 class="display-5 fw-bold mb-3">
                    Reservasi Meja Anda
                </h2>

                <p class="text-600 mb-4">
                    Pastikan tempat terbaik Anda di Cafe Farika
                    dengan melakukan reservasi terlebih dahulu.
                </p>


                <div class="card reservation-card">

                    <div class="card-body p-4">

                        <!-- FORM CUMA SATU -->
                        <form
                            action="{{ route('landing.reservasi') }}"
                            method="POST"
                        >

                            @csrf

                            <div class="row g-3">

                                <!-- NAMA -->
                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Nama Lengkap
                                    </label>

                                    <input
                                        type="text"
                                        name="nama"
                                        class="form-control"
                                        placeholder="Masukkan nama Anda"
                                        required
                                    >

                                </div>


                                <!-- TELEPON -->
                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Nomor Telepon
                                    </label>

                                    <input
                                        type="text"
                                        name="telepon"
                                        class="form-control"
                                        placeholder="Masukkan nomor telepon"
                                        required
                                    >

                                </div>


                                <!-- TANGGAL -->
                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Tanggal
                                    </label>

                                    <input
                                        type="date"
                                        name="tanggal"
                                        class="form-control"
                                        required
                                    >

                                </div>


                                <!-- JAM -->
                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Jam
                                    </label>

                                    <input
                                        type="time"
                                        name="jam"
                                        class="form-control"
                                        required
                                    >

                                </div>


                                <!-- JUMLAH ORANG -->
                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Jumlah Orang
                                    </label>

                                    <input
                                        type="number"
                                        name="orang"
                                        class="form-control"
                                        placeholder="Contoh: 4 orang"
                                        min="1"
                                        required
                                    >

                                </div>


                                <!-- LOKASI -->
                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Lokasi
                                    </label>

                                    <select
                                        name="lokasi"
                                        class="form-select"
                                        required
                                    >

                                        <option value="">
                                            Pilih lokasi
                                        </option>

                                        <option value="Indoor">
                                            Indoor
                                        </option>

                                        <option value="Outdoor">
                                            Outdoor
                                        </option>

                                    </select>

                                </div>


                                <!-- CATATAN -->
                                <div class="col-12">

                                    <label class="form-label fw-semibold">
                                        Catatan
                                    </label>

                                    <textarea
                                        name="catatan"
                                        class="form-control"
                                        rows="3"
                                        placeholder="Tambahkan catatan jika ada..."
                                    ></textarea>

                                </div>


                                <!-- TOMBOL -->
                                <div class="col-12">

                                    <button
                                        type="submit"
                                        class="btn btn-primary w-100"
                                    >

                                        <i class="fas fa-calendar-check me-2"></i>

                                        Kirim Reservasi

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ============================================ -->
<!-- FOOTER -->
<!-- ============================================ -->

<footer class="footer-cafe pt-6 pb-3">

    <div class="container">

        <div class="row">


            <div class="col-md-4 mb-4">

                <div class="d-flex align-items-center mb-3">

                    <img
                      src="ast/img/gallery/cafe/logo-farikaa.png"
                      class="cafe-logo"
                      alt="Cafe Farika"
                    >

                    <span class="fs-3 fw-bold ms-2">
                        Cafe Farika
                    </span>

                </div>


                <p class="text-400">

                    Nikmati kopi, makanan lezat,
                    dan suasana nyaman hanya di
                    Cafe Farika.

                </p>


                <div class="mt-4">

                    <a
                        href="#"
                        class="social-icon"
                    >
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a
                        href="#"
                        class="social-icon"
                    >
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a
                        href="#"
                        class="social-icon"
                    >
                        <i class="fab fa-tiktok"></i>
                    </a>

                </div>

            </div>



            <div class="col-md-4 mb-4">

                <h5 class="fw-bold mb-4">
                    Navigasi
                </h5>

                <p>
                    <a href="#home">
                        Home
                    </a>
                </p>

                <p>
                    <a href="#about">
                        Tentang Kami
                    </a>
                </p>

                <p>
                    <a href="#menu">
                        Menu
                    </a>
                </p>

                <p>
                    <a href="#reservation">
                        Reservasi
                    </a>
                </p>

                <p>
                    <a href="#contact">
                        Kontak
                    </a>
                </p>

            </div>



            <div class="col-md-4 mb-4">

                <h5 class="fw-bold mb-4">
                    Kontak Kami
                </h5>

                <p class="text-400">

                    <i class="fas fa-map-marker-alt me-2"></i>

                    Jl. Kopi No. 10, Jakarta

                </p>


                <p class="text-400">

                    <i class="fas fa-phone me-2"></i>

                    0812-3456-7890

                </p>


                <p class="text-400">

                    <i class="fas fa-envelope me-2"></i>

                    info@cafefarika.com

                </p>

            </div>

        </div>


        <hr class="border-secondary">


        <div class="text-center">

            <p class="text-400 mb-0">

                © 2026 Cafe Farika.
                All Rights Reserved.

            </p>

        </div>

    </div>

</footer>



<!-- ============================================ -->
<!-- JAVASCRIPT -->
<!-- ============================================ -->

<script src="vendors/@popperjs/popper.min.js"></script>

<script src="vendors/bootstrap/bootstrap.min.js"></script>

<script src="vendors/is/is.min.js"></script>

<script src="vendors/fontawesome/all.min.js"></script>

<script src="ast/js/theme.js"></script>


</body>

</html>

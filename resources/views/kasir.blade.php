<!DOCTYPE html>
<html lang="id">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Farika - Sistem Kasir Digital</title>

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
                url('ast/img/gallery/cafe/hero-kasir.jpg') center/cover no-repeat;
        }

        .hero-title {
            font-size: 60px;
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
            text-align: center;
            padding: 40px 20px;
        }

        .menu-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.13);
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
            background: #ffffff;
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

        /* Khusus halaman kasir */
        .pricing-card {
            border: none;
            border-radius: 14px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
            height: 100%;
        }

        .pricing-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.13);
        }

        .pricing-card.pricing-highlight {
            border: 2px solid #7b421d;
        }

        .pricing-badge {
            background: #7b421d;
            color: #fff;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1px;
            padding: 5px 14px;
            border-radius: 20px;
        }

        .pricing-amount {
            font-size: 34px;
            font-weight: 700;
            color: #7b421d;
        }

        .pricing-amount span {
            font-size: 14px;
            font-weight: 400;
            color: #6b5c4f;
        }

        .pricing-list {
            list-style: none;
            padding-left: 0;
            margin-bottom: 0;
        }

        .pricing-list li {
            padding: 6px 0;
            color: #3d2618;
        }

        .pricing-list li i {
            color: #7b421d;
            margin-right: 8px;
        }

        @media (max-width: 768px) {

            .hero-title {
                font-size: 40px;
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
            alt="Kasir Farika"
        >

            <span class="fs-3 fw-bold ms-2">
                Kasir Farika
            </span>

        </a>


        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarKasir"
        >

            <span class="navbar-toggler-icon"></span>

        </button>


        <div
            class="collapse navbar-collapse"
            id="navbarKasir"
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
                        Tentang
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link fw-semibold mx-2"
                        href="#fitur"
                    >
                        Fitur
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link fw-semibold mx-2"
                        href="#harga"
                    >
                        Harga
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link fw-semibold mx-2"
                        href="#kontak"
                    >
                        Kontak
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link fw-semibold mx-2"
                        href="{{ route('login') }}"
                    >
                        Masuk
                    </a>
                </li>

            </ul>


            <a
                href="#demo"
                class="resebtn btn-cafe px-4"
            >

                <i class="fas fa-rocket me-2"></i>

                Coba Gratis

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
                    <p class="text-warning fw-bold letter-spacing mb-0">
                        SOLUSI KASIR DIGITAL
                    </p>
                </div>

                <h1 class="hero-title fw-bold">
                    Kasir Farika
                </h1>

                <p class="hero-text mt-4 mb-5">
                    Kelola transaksi, stok, dan laporan penjualan
                    tokomu dalam satu aplikasi kasir yang cepat,
                    mudah, dan bisa diakses kapan saja.
                </p>

                <div class="d-flex flex-wrap gap-3">
                    <a href="#fitur" class="btn btn-warning btn-lg px-4">
                        <i class="fas fa-list-check me-2"></i>
                        Lihat Fitur
                    </a>

                    <a href="#demo" class="btn btn-light btn-lg px-4">
                        <i class="fas fa-rocket me-2"></i>
                        Coba Gratis
                    </a>
                </div>
            </div>

            <!-- Kanan: Logo / Gambar Besar mengisi area kosong -->
            <div class="col-lg-5 text-center mt-4 mt-lg-0">
                <img
                    src="ast/img/gallery/cafe/logo-farikaa.png"
                    alt="Kasir Farika"
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
                    src="ast/img/gallery/cafe/kasir-dashboard.jpg"
                    class="about-image"
                    alt="Dashboard Kasir Farika"
                >

            </div>


            <div class="col-lg-6">

                <p class="section-label mb-2">
                    KENAPA BUTUH KASIR DIGITAL
                </p>


                <h2 class="display-5 fw-bold mb-4">
                    Lebih dari Sekadar Mesin Kasir
                </h2>


                <p class="text-700">

                    Kasir Farika membantu pemilik usaha mencatat
                    setiap transaksi secara akurat, memantau stok
                    barang, dan melihat laporan penjualan tanpa
                    perlu pembukuan manual.

                    Cocok untuk cafe, restoran, toko, hingga
                    usaha rumahan yang ingin operasional lebih rapi.

                </p>


                <div class="row mt-5">


                    <div class="col-6 col-md-3 text-center mb-4">

                        <div class="feature-icon mb-3">
                            <i class="fas fa-bolt"></i>
                        </div>

                        <h6 class="fw-bold">
                            Transaksi Cepat
                        </h6>

                        <small class="text-600">
                            Proses jual tanpa antre lama
                        </small>
                      </div>

                      <div class="col-6 col-md-3 text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-boxes-stacked"></i>
                        </div>

                        <h6 class="fw-bold">
                            Stok Otomatis
                        </h6>

                        <small class="text-600">
                            Stok berkurang otomatis tiap transaksi
                        </small>
                      </div>

                       <div class="col-6 col-md-3 text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-chart-line"></i>
                        </div>

                        <h6 class="fw-bold">
                            Laporan Real-Time
                        </h6>

                        <small class="text-600">
                            Pantau omzet kapan saja
                        </small>
                      </div>

                       <div class="col-6 col-md-3 text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-headset"></i>
                        </div>

                        <h6 class="fw-bold">
                            Support Siap Bantu
                        </h6>
                        <small class="text-600">
                            Tim kami siap membantu kendala
                        </small>
                         </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- ============================================ -->
<!-- FITUR -->
<!-- ============================================ -->

<section
    class="py-7 bg-100"
    id="fitur"
>

    <div class="container">


        <div class="text-center mb-5">

            <p class="section-label mb-2">
                FITUR UTAMA
            </p>

            <h2 class="display-5 fw-bold">
                Semua yang Dibutuhkan Kasirmu
            </h2>

            <p class="text-600">
                Fitur lengkap yang dirancang khusus untuk kebutuhan
                operasional toko, cafe, dan restoran sehari-hari.
            </p>

        </div>


        <div class="row g-4">


            <!-- FITUR 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card menu-card h-100">

                    <div class="feature-icon mb-3">
                        <i class="fas fa-cash-register"></i>
                    </div>

                    <h5 class="fw-bold">
                        Transaksi Cepat & Mudah
                    </h5>

                    <p class="text-600 small">
                        Tampilan kasir sederhana sehingga
                        pegawai baru pun cepat terbiasa.
                    </p>
                </div>
            </div>


            <!-- FITUR 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card menu-card h-100">

                    <div class="feature-icon mb-3">
                        <i class="fas fa-boxes-stacked"></i>
                    </div>

                    <h5 class="fw-bold">
                        Manajemen Stok
                    </h5>

                    <p class="text-600 small">
                        Stok bahan dan produk otomatis
                        terupdate setiap kali ada penjualan.
                    </p>
                </div>
            </div>


            <!-- FITUR 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card menu-card h-100">

                    <div class="feature-icon mb-3">
                        <i class="fas fa-chart-pie"></i>
                    </div>

                    <h5 class="fw-bold">
                        Laporan Penjualan
                    </h5>

                    <p class="text-600 small">
                        Lihat laporan harian, mingguan, hingga
                        bulanan lengkap dengan grafik.
                    </p>
                </div>
            </div>


            <!-- FITUR 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="card menu-card h-100">

                    <div class="feature-icon mb-3">
                        <i class="fas fa-credit-card"></i>
                    </div>

                    <h5 class="fw-bold">
                        Multi Metode Pembayaran
                    </h5>

                    <p class="text-600 small">
                        Terima pembayaran tunai, QRIS, kartu
                        debit/kredit, hingga e-wallet.
                    </p>
                </div>
            </div>


            <!-- FITUR 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="card menu-card h-100">

                    <div class="feature-icon mb-3">
                        <i class="fas fa-print"></i>
                    </div>

                    <h5 class="fw-bold">
                        Cetak Struk Otomatis
                    </h5>

                    <p class="text-600 small">
                        Cetak atau kirim struk digital ke
                        pelanggan setelah transaksi selesai.
                    </p>
                </div>
            </div>


            <!-- FITUR 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="card menu-card h-100">

                    <div class="feature-icon mb-3">
                        <i class="fas fa-users-gear"></i>
                    </div>

                    <h5 class="fw-bold">
                        Multi User & Hak Akses
                    </h5>

                    <p class="text-600 small">
                        Atur peran pemilik, admin, dan kasir
                        dengan hak akses berbeda.
                    </p>
                </div>
            </div>

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
                Alasan Memilih Kasir Farika
            </h2>
        </div>

        <div class="row g-4">
            <div class="col-md-3 text-center">
                <div class="feature-icon mb-3">
                    <i class="fas fa-gauge-high"></i>
                </div>
                <h5 class="fw-bold">
                    Mudah Digunakan
                </h5>

                <p class="text-600">
                    Antarmuka simpel, tidak perlu pelatihan
                    lama untuk mulai memakainya.
                </p>
            </div>

            <div class="col-md-3 text-center">
                <div class="feature-icon mb-3">
                    <i class="fas fa-shield-halved"></i>
                </div>
                <h5 class="fw-bold">
                    Aman & Terpercaya
                </h5>
                <p class="text-600">
                    Data transaksi tersimpan aman dan
                    dapat dicadangkan secara berkala.
                </p>
            </div>

            <div class="col-md-3 text-center">
                <div class="feature-icon mb-3">
                    <i class="fas fa-mobile-screen"></i>
                </div>
                <h5 class="fw-bold">
                    Bisa Diakses Dimana Saja
                </h5>

                <p class="text-600">
                    Pantau toko dari HP maupun laptop,
                    kapan pun dan di mana pun.
                </p>
            </div>

            <div class="col-md-3 text-center">
                <div class="feature-icon mb-3">
                    <i class="fas fa-headset"></i>
                </div>

                <h5 class="fw-bold">
                    Support 24/7
                </h5>

                <p class="text-600">
                    Tim support siap membantu jika
                    ada kendala kapan saja.
                </p>
            </div>

        </div>

    </div>

</section>



<!-- ============================================ -->
<!-- HARGA -->
<!-- ============================================ -->

<section
    class="py-7"
    id="harga"
>

    <div class="container">

        <div class="text-center mb-5">

            <p class="section-label mb-2">
                PAKET HARGA
            </p>

            <h2 class="display-5 fw-bold">
                Pilih Paket Sesuai Kebutuhan
            </h2>

            <p class="text-600">
                Mulai dari usaha kecil hingga cabang banyak,
                tersedia paket yang sesuai.
            </p>

        </div>

        <div class="row g-4 justify-content-center">

            <!-- PAKET BASIC -->
            <div class="col-md-6 col-lg-4">
                <div class="card pricing-card p-4">

                    <h5 class="fw-bold mb-1">
                        Basic
                    </h5>

                    <p class="text-600 small mb-3">
                        Untuk usaha yang baru mulai
                    </p>

                    <div class="pricing-amount mb-3">
                        Rp99.000
                        <span>/ bulan</span>
                    </div>

                    <ul class="pricing-list mb-4">
                        <li><i class="fas fa-check"></i>1 outlet & 1 kasir</li>
                        <li><i class="fas fa-check"></i>Transaksi tak terbatas</li>
                        <li><i class="fas fa-check"></i>Laporan penjualan harian</li>
                        <li><i class="fas fa-check"></i>Cetak struk</li>
                    </ul>

                    <a href="#demo" class="btn btn-outline-cafe w-100 mt-auto">
                        Pilih Paket
                    </a>
                </div>
            </div>


            <!-- PAKET PRO -->
            <div class="col-md-6 col-lg-4">
                <div class="card pricing-card pricing-highlight p-4">

                    <span class="pricing-badge mb-3" style="width: fit-content;">
                        PALING DIMINATI
                    </span>

                    <h5 class="fw-bold mb-1 mt-3">
                        Pro
                    </h5>

                    <p class="text-600 small mb-3">
                        Untuk cafe & restoran berkembang
                    </p>

                    <div class="pricing-amount mb-3">
                        Rp199.000
                        <span>/ bulan</span>
                    </div>

                    <ul class="pricing-list mb-4">
                        <li><i class="fas fa-check"></i>1 outlet, kasir tak terbatas</li>
                        <li><i class="fas fa-check"></i>Manajemen stok otomatis</li>
                        <li><i class="fas fa-check"></i>Laporan lengkap + grafik</li>
                        <li><i class="fas fa-check"></i>Multi metode pembayaran</li>
                        <li><i class="fas fa-check"></i>Multi user & hak akses</li>
                    </ul>

                    <a href="#demo" class="btn btn-cafe w-100 mt-auto">
                        Pilih Paket
                    </a>
                </div>
            </div>


            <!-- PAKET BISNIS -->
            <div class="col-md-6 col-lg-4">
                <div class="card pricing-card p-4">

                    <h5 class="fw-bold mb-1">
                        Bisnis
                    </h5>

                    <p class="text-600 small mb-3">
                        Untuk usaha dengan banyak cabang
                    </p>

                    <div class="pricing-amount mb-3">
                        Rp399.000
                        <span>/ bulan</span>
                    </div>

                    <ul class="pricing-list mb-4">
                        <li><i class="fas fa-check"></i>Outlet & kasir tak terbatas</li>
                        <li><i class="fas fa-check"></i>Laporan gabungan semua cabang</li>
                        <li><i class="fas fa-check"></i>Semua fitur paket Pro</li>
                        <li><i class="fas fa-check"></i>Support prioritas</li>
                    </ul>

                    <a href="#demo" class="btn btn-outline-cafe w-100 mt-auto">
                        Pilih Paket
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- ============================================ -->
<!-- FORM COBA GRATIS / DEMO -->
<!-- ============================================ -->

<section
    class="py-7 reservation-section"
    id="demo"
>

    <div class="container">

        <div class="row align-items-center g-5">

            <!-- GAMBAR -->
            <div class="col-lg-5">

                <img
                    src="ast/img/gallery/cafe/kasir-demo.jpg"
                    class="reservation-image"
                    alt="Coba Kasir Farika"
                >

            </div>


            <!-- FORM COBA GRATIS -->
            <div class="col-lg-7">

                <p class="section-label mb-2">
                    COBA GRATIS
                </p>

                <h2 class="display-5 fw-bold mb-3">
                    Mulai Pakai Kasir Farika
                </h2>

                <p class="text-600 mb-4">
                    Isi data di bawah ini, tim kami akan menghubungi
                    Anda untuk aktivasi akun uji coba gratis.
                </p>


                <div class="card reservation-card">

                    <div class="card-body p-4">

                        <form
                            action="{{ route('landing.kasir.demo') }}"
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


                                <!-- NAMA USAHA -->
                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Nama Usaha
                                    </label>

                                    <input
                                        type="text"
                                        name="nama_usaha"
                                        class="form-control"
                                        placeholder="Contoh: Cafe Farika"
                                        required
                                    >

                                </div>


                                <!-- NOMOR TELEPON -->
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


                                <!-- EMAIL -->
                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Email
                                    </label>

                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="Masukkan email aktif"
                                        required
                                    >

                                </div>


                                <!-- JENIS USAHA -->
                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Jenis Usaha
                                    </label>

                                    <select
                                        name="jenis_usaha"
                                        class="form-select"
                                        required
                                    >

                                        <option value="">
                                            Pilih jenis usaha
                                        </option>

                                        <option value="Cafe">
                                            Cafe
                                        </option>

                                        <option value="Restoran">
                                            Restoran
                                        </option>

                                        <option value="Toko/Retail">
                                            Toko / Retail
                                        </option>

                                        <option value="Lainnya">
                                            Lainnya
                                        </option>

                                    </select>

                                </div>


                                <!-- JUMLAH OUTLET -->
                                <div class="col-md-6">

                                    <label class="form-label fw-semibold">
                                        Jumlah Outlet
                                    </label>

                                    <input
                                        type="number"
                                        name="jumlah_outlet"
                                        class="form-control"
                                        placeholder="Contoh: 1"
                                        min="1"
                                        required
                                    >

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
                                        placeholder="Ceritakan kebutuhan kasir Anda..."
                                    ></textarea>

                                </div>


                                <!-- TOMBOL -->
                                <div class="col-12">

                                    <button
                                        type="submit"
                                        class="btn btn-cafe w-100"
                                    >

                                        <i class="fas fa-rocket me-2"></i>

                                        Kirim & Coba Gratis

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

<footer class="footer-cafe pt-6 pb-3" id="kontak">

    <div class="container">

        <div class="row">


            <div class="col-md-4 mb-4">

                <div class="d-flex align-items-center mb-3">

                    <img
                      src="ast/img/gallery/cafe/logo-farikaa.png"
                      class="cafe-logo"
                      alt="Kasir Farika"
                    >

                    <span class="fs-3 fw-bold ms-2">
                        Kasir Farika
                    </span>

                </div>


                <p class="text-400">

                    Sistem kasir digital yang membantu bisnismu
                    mencatat transaksi, stok, dan laporan
                    penjualan lebih mudah.

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
                    <a href="#fitur">
                        Fitur
                    </a>
                </p>

                <p>
                    <a href="#harga">
                        Harga
                    </a>
                </p>

                <p>
                    <a href="#demo">
                        Coba Gratis
                    </a>
                </p>

                <p>
                    <a href="#kontak">
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

                    kasir@cafefarika.com

                </p>

            </div>

        </div>


        <hr class="border-secondary">


        <div class="text-center">

            <p class="text-400 mb-0">

                © 2026 Kasir Farika.
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
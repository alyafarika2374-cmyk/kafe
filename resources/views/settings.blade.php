@extends('layout.app')
@section('title','Pengaturan')
@section('content')

<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">
        <!-- Heading -->
        <div class="page-heading d-flex justify-content-between align-items-center mb-4">
            <div class="page-heading-copy">
                <span class="page-icon">
                    <i class="bi bi-gear-fill"></i>
                </span>
                <div>
                    <p class="eyebrow mb-1">Manajemen Kafe</p>
                    <h1 class="h3 mb-1">
                        Pengaturan
                    </h1>
                    <p class="text-muted mb-0">
                        Kelola informasi kafe, akun admin, dan preferensi sistem.
                    </p>
                </div>
            </div>
            <button class="btn btn-success">
                <i class="bi bi-check-circle me-2"></i>
                Simpan Perubahan
            </button>
        </div>
        <div class="row g-4">
            <!-- Informasi Kafe -->
            <div class="col-lg-6">
                <div class="panel">
                    <div class="panel-header">
                        <h4>
                            <i class="bi bi-shop me-2"></i>
                            Informasi Kafe
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div class="mb-3">
                            <label class="form-label">
                                Nama Kafe
                            </label>
                            <input
                                type="text"
                                class="form-control"
                                value="Cafe Farika">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                Alamat
                            </label>
                            <textarea
                                class="form-control"
                                rows="3">Jl. Contoh No.123 Jakarta</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                Nomor Telepon
                            </label>
                            <input
                                type="text"
                                class="form-control"
                                value="0812xxxxxxxx">
                        </div>
                        <div>
                            <label class="form-label">
                                Email
                            </label>
                            <input
                                type="email"
                                class="form-control"
                                value="cafefarika@gmail.com">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akun Admin -->
            <div class="col-lg-6">
                <div class="panel">
                    <div class="panel-header">
                        <h4>
                            <i class="bi bi-person-circle me-2"></i>
                            Akun Admin
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div class="mb-3">
                            <label class="form-label">
                                Nama Admin
                            </label>
                            <input
                                type="text"
                                class="form-control"
                                value="Admin Cafe">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                Username
                            </label>
                            <input
                                type="text"
                                class="form-control"
                                value="admin">
                        </div>
                        <div>
                            <label class="form-label">
                                Password Baru
                            </label>
                            <input
                                type="password"
                                class="form-control"
                                placeholder="********">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Preferensi -->
            <div class="col-lg-6">
                <div class="panel">
                    <div class="panel-header">
                        <h4>
                            <i class="bi bi-sliders me-2"></i>
                            Preferensi
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div class="form-check form-switch mb-3">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                checked>
                            <label class="form-check-label">
                                Aktifkan Notifikasi
                            </label>
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                checked>
                            <label class="form-check-label">
                                Mode Gelap
                            </label>
                        </div>
                        <div class="form-check form-switch">
                            <input
                                class="form-check-input"
                                type="checkbox">
                            <label class="form-check-label">
                                Backup Otomatis
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Jam Operasional -->
            <div class="col-lg-6">
                <div class="panel">
                    <div class="panel-header">
                        <h4>
                            <i class="bi bi-clock-history me-2"></i>
                            Jam Operasional
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label">
                                    Buka
                                </label>

                                <input
                                    type="time"
                                    class="form-control"
                                    value="08:00">

                            </div>

                            <div class="col-6">

                                <label class="form-label">

                                    Tutup

                                </label>

                                <input
                                    type="time"
                                    class="form-control"
                                    value="22:00">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection
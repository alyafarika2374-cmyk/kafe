@extends('layout.app')

@section('title', 'Meja & Reservasi')

@section('content')

<main class="dashboard-content">

    <div class="container-fluid px-3 px-lg-4 py-4">

        <!-- HEADER -->
        <div class="page-heading d-flex justify-content-between align-items-center mb-4">

            <div class="page-heading-copy">

                <span class="page-icon">
                    <i class="bi bi-grid-3x3-gap-fill"></i>
                </span>

                <div>

                    <p class="eyebrow mb-1">
                        Manajemen Kafe
                    </p>

                    <h1 class="h3 mb-1">
                        Meja & Reservasi
                    </h1>

                    <p class="text-muted mb-0">
                        Kelola seluruh meja dan reservasi pelanggan.
                    </p>

                </div>

            </div>


            <!-- TOMBOL TAMBAH MEJA -->
            <button
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#modalTambahMeja">

                <i class="bi bi-plus-circle me-2"></i>

                Tambah Meja

            </button>

        </div>


        <!-- STATISTIK -->
        <div class="row g-3 mb-4">

            <div class="col-lg-3">

                <div class="metric-card metric-primary">

                    <div class="metric-top">

                        <span>Total Meja</span>

                        <i class="bi bi-grid"></i>

                    </div>

                    <h2>
                        {{ $stats['total_meja'] ?? 0 }}
                    </h2>

                    <small>
                        Total meja
                    </small>

                </div>

            </div>


            <div class="col-lg-3">

                <div class="metric-card metric-success">

                    <div class="metric-top">

                        <span>Kosong</span>

                        <i class="bi bi-check-circle"></i>

                    </div>

                    <h2>
                        {{ $stats['kosong'] ?? 0 }}
                    </h2>

                    <small>
                        Siap digunakan
                    </small>

                </div>

            </div>


            <div class="col-lg-3">

                <div class="metric-card metric-warning">

                    <div class="metric-top">

                        <span>Terisi</span>

                        <i class="bi bi-people-fill"></i>

                    </div>

                    <h2>
                        {{ $stats['terisi'] ?? 0 }}
                    </h2>

                    <small>
                        Sedang digunakan
                    </small>

                </div>

            </div>


            <div class="col-lg-3">

                <div class="metric-card metric-danger">

                    <div class="metric-top">

                        <span>Reservasi</span>

                        <i class="bi bi-calendar-check"></i>

                    </div>

                    <h2>
                        {{ $stats['total_reservasi'] ?? 0 }}
                    </h2>

                    <small>
                        Total reservasi
                    </small>

                </div>

            </div>

        </div>


        <!-- DAFTAR RESERVASI -->
        <div class="card shadow-sm border-0">

            <div class="card-header bg-white py-3">

                <h5 class="mb-1 fw-bold">

                    <i class="bi bi-calendar-check me-2"></i>

                    Daftar Reservasi Pelanggan

                </h5>

                <small class="text-muted">
                    Data reservasi dari Landing Page.
                </small>

            </div>


            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead>

                            <tr>
                                <th>Nama</th>
                                <th>Telepon</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Jumlah Orang</th>
                                <th>Lokasi</th>
                                <th>Catatan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>


                        <tbody>
                            @forelse($reservasis as $reservasi)

                                <tr>
                                    <td>
                                        <strong>
                                            {{ $reservasi->nama }}
                                        </strong>
                                    </td>

                                    <td>
                                        {{ $reservasi->telepon }}
                                    </td>

                                    <td>
                                        {{ $reservasi->tanggal }}
                                    </td>

                                    <td>
                                        {{ $reservasi->jam }}
                                    </td>

                                    <td>
                                        {{ $reservasi->orang }} Orang
                                    </td>

                                    <td>
                                        @if($reservasi->lokasi == 'Indoor')
                                            <span class="badge bg-primary">
                                                Indoor
                                            </span>
                                        @elseif($reservasi->lokasi == 'Outdoor')
                                            <span class="badge bg-success">
                                                Outdoor
                                            </span>
                                        @else
                                            <span class="text-muted">
                                                -
                                            </span>
                                        @endif
                                    </td>

                                    <td>
                                        {{ $reservasi->catatan ?? '-' }}
                                    </td>

                                    <td>
                                        @if($reservasi->status == 'Menunggu')
                                            <span class="badge bg-warning text-dark">
                                                Menunggu
                                            </span>
                                        @elseif($reservasi->status == 'Dikonfirmasi')
                                            <span class="badge bg-success">
                                                Dikonfirmasi
                                            </span>
                                        @elseif($reservasi->status == 'Selesai')
                                            <span class="badge bg-primary">
                                                Selesai
                                            </span>
                                        @elseif($reservasi->status == 'Dibatalkan')
                                            <span class="badge bg-danger">
                                                Dibatalkan
                                            </span>
                                        @else
                                            <span class="badge bg-secondary">
                                                {{ $reservasi->status }}
                                            </span>
                                        @endif
                                    </td>

                                    <td>
                                        <form
                                            action="{{ route('reservasi.destroy', $reservasi->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus reservasi ini?')"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-sm btn-danger"
                                            >
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                            @empty

                                <tr>
                                    <td colspan="9" class="text-center text-muted py-5">
                                        Belum ada reservasi pelanggan.
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>
                </div>
            </div>
        </div>
        <!-- ============================== -->
        <!-- MODAL TAMBAH MEJA -->
        <!-- ============================== -->
        <div
            class="modal fade"
            id="modalTambahMeja"
            tabindex="-1"
            aria-hidden="true"
        >
            <div class="modal-dialog">

                <div class="modal-content">


                    <div class="modal-header">

                        <h5 class="modal-title">
                            Tambah Meja
                        </h5>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>

                    </div>


                    <!-- FORM TAMBAH MEJA -->
                    <form
                        action="{{ route('meja.store') }}"
                        method="POST"
                    >

                        @csrf


                        <div class="modal-body">


                            <!-- NOMOR MEJA -->
                            <div class="mb-3">

                                <label class="form-label">
                                    Nomor Meja
                                </label>

                                <input
                                    type="text"
                                    name="nomor_meja"
                                    class="form-control"
                                    placeholder="Contoh: Meja 05"
                                    required
                                >

                            </div>


                            <!-- KAPASITAS -->
                            <div class="mb-3">

                                <label class="form-label">
                                    Kapasitas
                                </label>

                                <select
                                    name="kapasitas"
                                    class="form-select"
                                    required
                                >

                                    <option value="">
                                        Pilih kapasitas
                                    </option>

                                    <option value="2 Orang">
                                        2 Orang
                                    </option>

                                    <option value="4 Orang">
                                        4 Orang
                                    </option>

                                    <option value="6 Orang">
                                        6 Orang
                                    </option>

                                    <option value="8 Orang">
                                        8 Orang
                                    </option>

                                </select>

                            </div>


                            <!-- STATUS -->
                            <div class="mb-3">

                                <label class="form-label">
                                    Status
                                </label>

                                <select
                                    name="status"
                                    class="form-select"
                                    required
                                >

                                    <option value="Kosong">
                                        Kosong
                                    </option>

                                    <option value="Terisi">
                                        Terisi
                                    </option>

                                    <option value="Reservasi">
                                        Reservasi
                                    </option>

                                </select>

                            </div>


                            <!-- LOKASI -->
                            <div class="mb-3">

                                <label class="form-label">
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


                            <!-- KETERANGAN -->
                            <div class="mb-3">

                                <label class="form-label">
                                    Keterangan
                                </label>

                                <textarea
                                    name="keterangan"
                                    class="form-control"
                                    rows="3"
                                    placeholder="Keterangan meja"
                                ></textarea>

                            </div>

                        </div>


                        <div class="modal-footer">

                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal"
                            >
                                Batal
                            </button>


                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                Simpan Meja
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</main>

@endsection
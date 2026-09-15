@extends('layout.app')

@section('title','Stok Bahan')

@section('content')

<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">

        <!-- Heading -->
        <div class="page-heading d-flex justify-content-between align-items-center mb-4">
            <div class="page-heading-copy">
                <span class="page-icon">
                    <i class="bi bi-box-seam-fill"></i>
                </span>
                <div>
                    <p class="eyebrow mb-1">Manajemen Kafe</p>
                    <h1 class="h3 mb-1">Stok Bahan</h1>
                    <p class="text-muted mb-0">
                        Kelola persediaan bahan baku makanan dan minuman.
                    </p>
                </div>
            </div>

            <button class="btn btn-primary" type="button"
            data-bs-toggle="modal"
            data-bs-target="#tambahBahanModal">
                <i class="bi bi-plus-circle me-2"></i>
                Tambah Bahan
            </button>
        </div>

        <!-- Statistik -->
        <!-- Statistik -->
<div class="row g-3 mb-4">

    <!-- Total Bahan -->
    <div class="col-lg-3 col-md-6">
        <div class="metric-card metric-primary">
            <div class="metric-top">
                <span>Total Bahan</span>
                <i class="bi bi-box"></i>
            </div>

            <h2>{{ $stats['total'] }}</h2>
            <small>Seluruh bahan</small>
        </div>
    </div>

    <!-- Stok Aman -->
    <div class="col-lg-3 col-md-6">
        <div class="metric-card metric-success">
            <div class="metric-top">
                <span>Stok Aman</span>
                <i class="bi bi-check-circle"></i>
            </div>

            <h2>{{ $stats['aman'] }}</h2>
            <small>Tersedia</small>
        </div>
    </div>

    <!-- Hampir Habis -->
    <div class="col-lg-3 col-md-6">
        <div class="metric-card metric-warning">
            <div class="metric-top">
                <span>Hampir Habis</span>
                <i class="bi bi-exclamation-circle"></i>
            </div>

            <h2>{{ $stats['hampir_habis'] }}</h2>
            <small>Perlu Restock</small>
        </div>
    </div>

    <!-- Stok Habis -->
    <div class="col-lg-3 col-md-6">
        <div class="metric-card metric-danger">
            <div class="metric-top">
                <span>Stok Habis</span>
                <i class="bi bi-x-circle"></i>
            </div>

            <h2>{{ $stats['habis'] }}</h2>
            <small>Segera Beli</small>
        </div>
    </div>

</div>

        <!-- Tabel Stok -->
        <div class="panel">

            <div class="panel-header d-flex justify-content-between align-items-center">

                <div>
                    <h4 class="mb-1">Daftar Bahan</h4>
                    <p class="text-muted mb-0">
                        Data persediaan bahan baku kafe.
                    </p>
                </div>

                <input
                    class="form-control"
                    style="max-width:250px"
                    type="search"
                    placeholder="Cari Bahan..."
                    data-table-search="stokTable">

            </div>

            <div class="table-responsive">

                <table class="table table-hover align-middle" id="stokTable">

                    <thead>

                        <tr>
                            <th>No</th>
                            <th>Nama Bahan</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Satuan</th>
                            <th>Status</th>
                            <th>Terakhir Update</th>
                            <th class="text-end">Aksi</th>
                        </tr>

                    </thead>

                   <tbody>
                    @forelse ($stoks as $stok)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $stok->nama_bahan }}</td>

                            <td>{{ $stok->kategori }}</td>

                            <td>{{ $stok->jumlah_stok }}</td>

                            <td>{{ $stok->satuan }}</td>

                        <td>
                            @if ($stok->status == 'Aman')
                                <span class="badge bg-success">Aman</span>
                            @elseif ($stok->status == 'Hampir Habis')
                                <span class="badge bg-warning text-dark">Hampir Habis</span>
                            @else
                                <span class="badge bg-danger">Habis</span>
                            @endif
                        </td>

                        <td>
                            {{ $stok->updated_at ? $stok->updated_at->format('d F Y') : '-' }}
                        </td>

                        <td class="text-end">

                            <!-- Tombol Edit -->
                            <button
                                class="btn btn-warning btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#editBahan{{ $stok->id }}">
                                <i class="bi bi-pencil"></i>
                                Edit
                            </button>

                            <!-- Tombol Hapus -->
                            <form
                                action="{{ route('stok.destroy', $stok->id) }}"
                                method="POST"
                                class="d-inline"
                                onsubmit="return confirm('Yakin ingin menghapus bahan ini?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                    Hapus
                                </button>
                            </form>

                        </td>
                    </tr>

        <!-- Modal Edit -->
                    <div class="modal fade" id="editBahan{{ $stok->id }}" tabindex="-1">

                        <div class="modal-dialog modal-lg modal-dialog-centered">

                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold">
                                        Edit Bahan
                                    </h5>

                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal">
                                    </button>
                                </div>

                                <form
                                    action="{{ route('stok.update', $stok->id) }}"
                                    method="POST">

                                    @csrf
                                    @method('PUT')

                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">
                                                Nama Bahan
                                            </label>

                                            <input
                                                type="text"
                                                name="nama_bahan"
                                                class="form-control"
                                                value="{{ $stok->nama_bahan }}"
                                                required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">
                                                Kategori
                                            </label>

                                            <select
                                                name="kategori"
                                                class="form-select"
                                                required>

                                                <option value="Kopi"
                                                    {{ $stok->kategori == 'Kopi' ? 'selected' : '' }}>
                                                    Kopi
                                                </option>

                                                <option value="Minuman"
                                                    {{ $stok->kategori == 'Minuman' ? 'selected' : '' }}>
                                                    Minuman
                                                </option>

                                                <option value="Makanan"
                                                    {{ $stok->kategori == 'Makanan' ? 'selected' : '' }}>
                                                    Makanan
                                                </option>

                                                <option value="Pemanis"
                                                    {{ $stok->kategori == 'Pemanis' ? 'selected' : '' }}>
                                                    Pemanis
                                                </option>

                                                <option value="Lainnya"
                                                    {{ $stok->kategori == 'Lainnya' ? 'selected' : '' }}>
                                                    Lainnya
                                                </option>

                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">
                                                Jumlah Stok
                                            </label>

                                            <input
                                                type="number"
                                                name="jumlah_stok"
                                                class="form-control"
                                                value="{{ $stok->jumlah_stok }}"
                                                min="0"
                                                required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">
                                                Satuan
                                            </label>

                                            <select
                                                name="satuan"
                                                class="form-select"
                                                required>

                                                <option value="Kg"
                                                    {{ $stok->satuan == 'Kg' ? 'selected' : '' }}>
                                                    Kg
                                                </option>

                                                <option value="Gram"
                                                    {{ $stok->satuan == 'Gram' ? 'selected' : '' }}>
                                                    Gram
                                                </option>

                                                <option value="Liter"
                                                    {{ $stok->satuan == 'Liter' ? 'selected' : '' }}>
                                                    Liter
                                                </option>

                                                <option value="Ml"
                                                    {{ $stok->satuan == 'Ml' ? 'selected' : '' }}>
                                                    Ml
                                                </option>

                                                <option value="Pcs"
                                                    {{ $stok->satuan == 'Pcs' ? 'selected' : '' }}>
                                                    Pcs
                                                </option>

                                                <option value="Botol"
                                                    {{ $stok->satuan == 'Botol' ? 'selected' : '' }}>
                                                    Botol
                                                </option>

                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label fw-semibold">
                                                Stok Minimum
                                            </label>

                                            <input
                                                type="number"
                                                name="stok_minimum"
                                                class="form-control"
                                                value="{{ $stok->stok_minimum ?? 5 }}"
                                                min="0">
                                        </div>

                                    </div>

                                    <div class="modal-footer">

                                        <button
                                            type="button"
                                            class="btn btn-secondary"
                                            data-bs-dismiss="modal">
                                            Batal
                                        </button>

                                        <button
                                            type="submit"
                                            class="btn btn-primary">
                                            <i class="bi bi-check-circle me-1"></i>
                                            Simpan Perubahan
                                        </button>

                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-4">
                            Belum ada data bahan.
                        </td>
                    </tr>

                @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<!-- Modal Tambah Bahan -->
<div class="modal fade" id="tambahBahanModal" tabindex="-1"
     aria-labelledby="tambahBahanModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="tambahBahanModalLabel">
                    Tambah Bahan
                </h5>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>

            <form action="{{ route('stok.store') }}" method="POST">
                @csrf

    <div class="modal-body">

           <div class="modal-body">

    <form action="{{ route('stok.store') }}" method="POST">
        @csrf

        <!-- Nama Bahan -->
        <div class="mb-3">
            <label class="form-label fw-semibold">
                Nama Bahan
            </label>

            <input type="text"
                   name="nama_bahan"
                   class="form-control"
                   placeholder="Contoh: Biji Kopi Arabika"
                   required>
        </div>

        <!-- Kategori -->
        <div class="mb-3">
            <label class="form-label fw-semibold">
                Kategori
            </label>

            <select name="kategori" class="form-select" required>
                <option value="" selected disabled>
                    Pilih kategori
                </option>
                <option value="Kopi">Kopi</option>
                <option value="Minuman">Minuman</option>
                <option value="Makanan">Makanan</option>
                <option value="Pemanis">Pemanis</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>

        <!-- Jumlah Stok -->
        <div class="mb-3">
            <label class="form-label fw-semibold">
                Jumlah Stok
            </label>

            <input type="number"
                   name="jumlah_stok"
                   class="form-control"
                   placeholder="Contoh: 15"
                   min="0"
                   required>
        </div>

        <!-- Satuan -->
        <div class="mb-3">
            <label class="form-label fw-semibold">
                Satuan
            </label>

            <select name="satuan" class="form-select" required>
                <option value="" selected disabled>
                    Pilih satuan
                </option>
                <option value="Kg">Kg</option>
                <option value="Gram">Gram</option>
                <option value="Liter">Liter</option>
                <option value="Ml">Ml</option>
                <option value="Pcs">Pcs</option>
                <option value="Botol">Botol</option>
            </select>
        </div>

        <!-- Stok Minimum -->
        <div class="mb-3">
            <label class="form-label fw-semibold">
                Stok Minimum
            </label>

            <input type="number"
                   name="stok_minimum"
                   class="form-control"
                   value="5"
                   min="0">
        </div>
           

    </form>

</div>

           <div class="modal-footer">

            <button type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">
                Batal
            </button>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-check-circle me-1"></i>
                Simpan Bahan
            </button>

            </div>

            </form>

        </div>
    </div>
</div>

@endsection
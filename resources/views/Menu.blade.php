@extends('layout.app')
@section('title','Menu Makanan & Minuman')
@section('content')

<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">

        <!-- Flash Messages -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mb-4" role="alert">
                <i class="bi bi-check-circle-fill me-2 fs-5"></i>
                <div>{{ session('success') }}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                <div class="fw-bold mb-1"><i class="bi bi-exclamation-triangle-fill me-2"></i>Terjadi Kesalahan:</div>
                <ul class="mb-0 ps-3">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Heading -->
        <div class="page-heading d-flex justify-content-between align-items-center mb-4">
            <div class="page-heading-copy">
                <span class="page-icon">
                    <i class="bi bi-cup-hot-fill"></i>
                </span>
                <div>
                    <p class="eyebrow mb-1">Katalog Produk</p>
                    <h1 class="h3 mb-1">Menu Makanan & Minuman</h1>
                    <p class="text-muted mb-0">
                        Kelola seluruh daftar menu makanan, minuman, harga, dan stok yang tersedia di KafeKu.
                    </p>
                </div>
            </div>

            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tambahMenuModal">
                <i class="bi bi-plus-circle me-2"></i>
                Tambah Menu
            </button>
        </div>

        <!-- Statistik -->
        <div class="row g-3 mb-4">
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="metric-card metric-primary">
                    <div class="metric-top">
                        <span class="metric-label">Total Menu</span>
                        <span class="metric-icon"><i class="bi bi-card-list"></i></span>
                    </div>
                    <div class="metric-value">{{ $stats['total'] ?? $menus->count() }}</div>
                    <div class="metric-meta">
                        <span class="text-primary">{{ $stats['makanan'] ?? 0 }} Makanan • {{ $stats['minuman'] ?? 0 }} Minuman</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="metric-card metric-success">
                    <div class="metric-top">
                        <span class="metric-label">Menu Tersedia</span>
                        <span class="metric-icon"><i class="bi bi-check-circle"></i></span>
                    </div>
                    <div class="metric-value">{{ $stats['tersedia'] ?? 0 }} Item</div>
                    <div class="metric-meta">
                        <span class="text-success">Siap dipesan pelanggan</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="metric-card metric-danger">
                    <div class="metric-top">
                        <span class="metric-label">Stok Habis / Kosong</span>
                        <span class="metric-icon"><i class="bi bi-x-circle"></i></span>
                    </div>
                    <div class="metric-value">{{ $stats['habis'] ?? 0 }} Item</div>
                    <div class="metric-meta">
                        <span class="text-danger">Perlu restock bahan</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="metric-card metric-warning">
                    <div class="metric-top">
                        <span class="metric-label">Kategori Aktif</span>
                        <span class="metric-icon"><i class="bi bi-tags"></i></span>
                    </div>
                    <div class="metric-value">2 Kategori</div>
                    <div class="metric-meta">
                        <span class="text-warning">Makanan & Minuman</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter & Search Toolbar -->
        <div class="panel mb-4 p-3">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                <div class="btn-group" role="group" id="filterKategoriBtns">
                    <button type="button" class="btn btn-outline-primary btn-sm active" data-filter="Semua">Semua Menu</button>
                    <button type="button" class="btn btn-outline-primary btn-sm" data-filter="Makanan">Makanan</button>
                    <button type="button" class="btn btn-outline-primary btn-sm" data-filter="Minuman">Minuman</button>
                </div>

                <div class="input-group input-group-sm" style="max-width: 280px;">
                    <span class="input-group-text bg-white"><i class="bi bi-search text-muted"></i></span>
                    <input type="search" class="form-control" placeholder="Cari nama menu..." id="searchMenuInput">
                </div>
            </div>
        </div>

        <!-- Menu Cards Grid -->
        <div class="row g-4" id="menuCardsContainer">
            @forelse($menus as $menu)
            <div class="col-lg-4 col-md-6 menu-card-item" data-kategori="{{ $menu->kategori }}" data-nama="{{ strtolower($menu->nama) }}">
                <div class="card shadow-sm border-0 h-100 position-relative overflow-hidden">
                    <span class="position-absolute top-0 end-0 m-3 badge {{ $menu->kategori === 'Makanan' ? 'bg-warning text-dark' : 'bg-info text-dark' }}">
                        {{ $menu->kategori }}
                    </span>

                    <img src="{{ $menu->image_url }}"
                         class="card-img-top"
                         alt="{{ $menu->nama }}"
                         style="height: 220px; object-fit: cover;"
                         onerror="this.onerror=null; this.src='{{ asset('ast/img/gallery/cafe/americano.jpg') }}';">

                    <div class="card-body d-flex flex-column">
                        <h4 class="fw-bold mb-1">{{ $menu->nama }}</h4>
                        @if($menu->deskripsi)
                            <p class="text-muted small mb-2 text-truncate" title="{{ $menu->deskripsi }}">{{ $menu->deskripsi }}</p>
                        @endif

                        <h5 class="text-primary fw-bold my-2">
                            Rp {{ number_format($menu->harga, 0, ',', '.') }}
                        </h5>

                        <div class="d-flex justify-content-between align-items-center mt-auto pt-2">
                            <div>
                                <strong>Stok:</strong> {{ $menu->stok }}
                            </div>
                            <div>
                                @if($menu->stok > 0)
                                    <span class="badge bg-success">Tersedia</span>
                                @else
                                    <span class="badge bg-danger">Tidak Tersedia</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-white border-0 pt-0 pb-3 d-flex gap-2">
                        <button type="button" class="btn btn-warning btn-sm flex-grow-1 btn-edit-menu"
                            data-bs-toggle="modal"
                            data-bs-target="#editMenuModal"
                            data-id="{{ $menu->id }}"
                            data-nama="{{ $menu->nama }}"
                            data-kategori="{{ $menu->kategori }}"
                            data-harga="{{ (int)$menu->harga }}"
                            data-stok="{{ $menu->stok }}"
                            data-deskripsi="{{ $menu->deskripsi }}">
                            <i class="bi bi-pencil me-1"></i>Edit
                        </button>
                        <button type="button" class="btn btn-danger btn-sm btn-delete-menu"
                            data-bs-toggle="modal"
                            data-bs-target="#hapusMenuModal"
                            data-id="{{ $menu->id }}"
                            data-nama="{{ $menu->nama }}">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <i class="bi bi-cup fs-1 text-muted d-block mb-3"></i>
                <h5 class="text-muted">Belum ada menu terdaftar di database.</h5>
                <p class="text-muted small">Klik tombol "Tambah Menu" di atas untuk menambahkan menu baru.</p>
            </div>
            @endforelse
        </div>
    </div>
</main>

<!-- ========================================================================= -->
<!-- MODALS                                                                    -->
<!-- ========================================================================= -->

<!-- 1. Modal Tambah Menu -->
<div class="modal fade" id="tambahMenuModal" tabindex="-1" aria-labelledby="tambahMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="tambahMenuModalLabel">
                    <i class="bi bi-plus-circle-fill text-primary me-2"></i>Tambah Menu Baru
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nama Menu <span class="text-danger">*</span></label>
                            <input type="text" name="nama" class="form-control" placeholder="Contoh: Americano" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Kategori <span class="text-danger">*</span></label>
                            <select name="kategori" class="form-select" required>
                                <option value="" selected disabled>Pilih kategori</option>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Harga (Rp) <span class="text-danger">*</span></label>
                            <input type="number" name="harga" class="form-control" placeholder="Contoh: 25000" min="0" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Jumlah Stok <span class="text-danger">*</span></label>
                            <input type="number" name="stok" class="form-control" placeholder="Contoh: 20" min="0" required>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Deskripsi Menu</label>
                            <textarea name="deskripsi" class="form-control" rows="2" placeholder="Deskripsi singkat rasa atau komposisi menu..."></textarea>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Foto / Gambar Menu</label>
                            <input type="file" name="gambar_menu" class="form-control" accept="image/*">
                            <small class="text-muted">Format: JPG, PNG, WEBP (Maksimal 2MB).</small>
                        </div>
                    </div>
                </div>

                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-circle me-1"></i>Simpan Menu
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- 2. Modal Edit Menu -->
<div class="modal fade" id="editMenuModal" tabindex="-1" aria-labelledby="editMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="editMenuModalLabel">
                    <i class="bi bi-pencil-square text-warning me-2"></i>Edit Data Menu
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="formEditMenu" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body p-4">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nama Menu <span class="text-danger">*</span></label>
                            <input type="text" name="nama" class="form-control" id="editNamaMenu" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Kategori <span class="text-danger">*</span></label>
                            <select name="kategori" class="form-select" id="editKategoriMenu" required>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Harga (Rp) <span class="text-danger">*</span></label>
                            <input type="number" name="harga" class="form-control" id="editHargaMenu" min="0" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Jumlah Stok <span class="text-danger">*</span></label>
                            <input type="number" name="stok" class="form-control" id="editStokMenu" min="0" required>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Deskripsi Menu</label>
                            <textarea name="deskripsi" class="form-control" id="editDeskripsiMenu" rows="2"></textarea>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Ganti Foto Menu</label>
                            <input type="file" name="gambar_menu" class="form-control" accept="image/*">
                            <small class="text-muted">Biarkan kosong jika tidak ingin mengubah foto menu.</small>
                        </div>
                    </div>
                </div>

                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-warning">
                        <i class="bi bi-check-circle me-1"></i>Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- 3. Modal Hapus Menu -->
<div class="modal fade" id="hapusMenuModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title d-flex align-items-center gap-2">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    <span>Konfirmasi Hapus Menu</span>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formHapusMenu" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body p-4 text-center">
                    <div class="text-danger mb-3">
                        <i class="bi bi-trash-fill" style="font-size: 3.5rem;"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Hapus Menu Ini?</h5>
                    <p class="text-muted mb-0">
                        Apakah Anda yakin ingin menghapus <strong id="deleteMenuNama">Menu</strong> dari katalog KafeKu?
                    </p>
                </div>
                <div class="modal-footer bg-light justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash-fill me-1"></i>Hapus Menu
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // 1. Live Filter & Search
    const searchInput = document.getElementById('searchMenuInput');
    const filterBtns = document.querySelectorAll('#filterKategoriBtns button');
    const items = document.querySelectorAll('.menu-card-item');

    let currentKategori = 'Semua';

    function filterCards() {
        const query = (searchInput.value || '').toLowerCase();

        items.forEach(item => {
            const itemKategori = item.getAttribute('data-kategori');
            const itemNama = item.getAttribute('data-nama');

            const matchKategori = (currentKategori === 'Semua') || (itemKategori === currentKategori);
            const matchSearch = !query || itemNama.includes(query);

            if (matchKategori && matchSearch) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        });
    }

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            currentKategori = this.getAttribute('data-filter');
            filterCards();
        });
    });

    if (searchInput) searchInput.addEventListener('input', filterCards);

    // 2. Data binding untuk Modal Edit
    document.querySelectorAll('.btn-edit-menu').forEach(btn => {
        btn.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            const nama = this.getAttribute('data-nama');
            const kategori = this.getAttribute('data-kategori');
            const harga = this.getAttribute('data-harga');
            const stok = this.getAttribute('data-stok');
            const deskripsi = this.getAttribute('data-deskripsi');

            document.getElementById('formEditMenu').action = '/Menu/' + id;
            document.getElementById('editNamaMenu').value = nama;
            document.getElementById('editKategoriMenu').value = kategori;
            document.getElementById('editHargaMenu').value = harga;
            document.getElementById('editStokMenu').value = stok;
            document.getElementById('editDeskripsiMenu').value = deskripsi || '';
        });
    });

    // 3. Data binding untuk Modal Hapus
    document.querySelectorAll('.btn-delete-menu').forEach(btn => {
        btn.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            const nama = this.getAttribute('data-nama');

            document.getElementById('deleteMenuNama').textContent = nama;
            document.getElementById('formHapusMenu').action = '/Menu/' + id;
        });
    });
});
</script>

@endsection
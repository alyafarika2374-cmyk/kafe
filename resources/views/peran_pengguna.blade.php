@extends('layout.app')

@section('title', 'Peran & Hak Akses Pengguna')

@section('content')

<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">

        <!-- Notifikasi Flash Message -->
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

        <!-- Heading Halaman -->
        <div class="page-heading d-flex justify-content-between align-items-center mb-4">
            <div class="page-heading-copy">
                <span class="page-icon">
                    <i class="bi bi-shield-lock-fill"></i>
                </span>
                <div>
                    <h1 class="h3 mb-1">Peran Pengguna</h1>
                    <p class="text-muted mb-0">
                        Kelola struktur peran staf, wewenang modul, serta akun pengguna sistem KafeKu.
                    </p>
                </div>
            </div>

            <div class="heading-actions">
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahPengguna">
                    <i class="bi bi-person-plus-fill me-1"></i>
                    Tambah Pengguna
                </button>
            </div>
        </div>

        <!-- Statistik Ringkasan -->
        <div class="row g-3 mb-4">
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="metric-card metric-primary">
                    <div class="metric-top">
                        <span class="metric-label">Total Pengguna</span>
                        <span class="metric-icon"><i class="bi bi-people-fill"></i></span>
                    </div>
                    <div class="metric-value">{{ $stats['total'] ?? $roles->count() }}</div>
                    <div class="metric-meta">
                        <span class="text-success"><i class="bi bi-check-circle-fill me-1"></i>{{ $stats['aktif'] ?? 0 }} Aktif</span>
                        <span>• {{ $stats['nonaktif'] ?? 0 }} Nonaktif</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="metric-card metric-success">
                    <div class="metric-top">
                        <span class="metric-label">Akun Aktif</span>
                        <span class="metric-icon"><i class="bi bi-shield-check"></i></span>
                    </div>
                    <div class="metric-value">{{ $stats['aktif'] ?? 0 }} Akun</div>
                    <div class="metric-meta">
                        <span class="text-success">Siap Mengakses Sistem</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="metric-card metric-warning">
                    <div class="metric-top">
                        <span class="metric-label">Staf Operasional</span>
                        <span class="metric-icon"><i class="bi bi-person-badge-fill"></i></span>
                    </div>
                    <div class="metric-value">{{ $stats['staf'] ?? 0 }} Staf</div>
                    <div class="metric-meta">
                        <span class="text-warning">Kasir, Barista & Pelayan</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="metric-card metric-danger">
                    <div class="metric-top">
                        <span class="metric-label">Administrator</span>
                        <span class="metric-icon"><i class="bi bi-key-fill"></i></span>
                    </div>
                    <div class="metric-value">{{ $stats['admin'] ?? 0 }} Akun</div>
                    <div class="metric-meta">
                        <span class="text-danger">Akses Penuh Pengelolaan</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Data Pengguna -->
        <div class="panel mb-4">
            <div class="panel-header d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                <div>
                    <h4 class="mb-1"><i class="bi bi-people me-2"></i>Daftar Akun Pengguna</h4>
                    <p class="text-muted mb-0 small">
                        Kelola data login, peran yang diberikan, dan status aktif staf kafe.
                    </p>
                </div>

                <div class="d-flex flex-wrap align-items-center gap-2">
                    <!-- Filter Peran -->
                    <select class="form-select form-select-sm" id="filterRoleSelect" style="width: auto;">
                        <option value="">Semua Peran</option>
                        <option value="Administrator">Administrator</option>
                        <option value="Manajer Kafe">Manajer Kafe</option>
                        <option value="Kasir">Kasir</option>
                        <option value="Barista">Barista</option>
                        <option value="Pelayan">Pelayan</option>
                    </select>

                    <!-- Filter Status -->
                    <select class="form-select form-select-sm" id="filterStatusSelect" style="width: auto;">
                        <option value="">Semua Status</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Nonaktif">Nonaktif</option>
                    </select>

                    <!-- Pencarian Live Table -->
                    <div class="input-group input-group-sm" style="max-width: 240px;">
                        <span class="input-group-text bg-white"><i class="bi bi-search text-muted"></i></span>
                        <input
                            type="search"
                            class="form-control"
                            placeholder="Cari pengguna..."
                            id="userSearchInput">
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" id="userRolesTable">
                    <thead>
                        <tr>
                            <th style="width: 50px;">No</th>
                            <th>Pengguna</th>
                            <th>Kontak</th>
                            <th>Peran (Role)</th>
                            <th>Status</th>
                            <th class="text-end" style="width: 140px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($roles as $index => $role)
                        <tr data-role="{{ $role->peran }}" data-status="{{ $role->status_akun ? 'Aktif' : 'Nonaktif' }}">
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <div>
                                        <div class="fw-bold text-dark user-fullname">{{ $role->nama }}</div>
                                        <small class="text-muted">{{ $role->email }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div><code class="text-primary">{{ $role->telepon ?: '-' }}</code></div>
                            </td>
                            <td>
                                @if($role->peran === 'Administrator')
                                    <span class="badge bg-primary"><i class="bi bi-shield-lock-fill me-1"></i>{{ $role->peran }}</span>
                                @elseif($role->peran === 'Manajer Kafe')
                                    <span class="badge bg-info text-dark"><i class="bi bi-briefcase-fill me-1"></i>{{ $role->peran }}</span>
                                @elseif($role->peran === 'Kasir')
                                    <span class="badge bg-success"><i class="bi bi-cash-coin me-1"></i>{{ $role->peran }}</span>
                                @elseif($role->peran === 'Barista')
                                    <span class="badge bg-warning text-dark"><i class="bi bi-cup-hot-fill me-1"></i>{{ $role->peran }}</span>
                                @else
                                    <span class="badge bg-secondary"><i class="bi bi-person-lines-fill me-1"></i>{{ $role->peran }}</span>
                                @endif
                            </td>
                            <td>
                                @if($role->status_akun)
                                    <span class="badge bg-success"><span class="status-dot d-inline-block me-1" style="width:6px; height:6px;"></span>Aktif</span>
                                @else
                                    <span class="badge bg-danger"><span class="status-dot bg-white d-inline-block me-1" style="width:6px; height:6px;"></span>Nonaktif</span>
                                @endif
                            </td>
                            <td class="text-end">
                                <div class="btn-group btn-group-sm">
                                    <button type="button" class="btn btn-light text-primary btn-detail-user"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalDetailPengguna"
                                        title="Detail Pengguna"
                                        data-name="{{ $role->nama }}"
                                        data-email="{{ $role->email }}"
                                        data-phone="{{ $role->telepon ?: '-' }}"
                                        data-role="{{ $role->peran }}"
                                        data-status="{{ $role->status_akun ? 'Aktif' : 'Nonaktif' }}"
                                        data-created="{{ $role->created_at ? $role->created_at->format('d M Y, H:i') : '-' }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-light text-warning btn-edit-user"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalEditPengguna"
                                        title="Edit Pengguna"
                                        data-id="{{ $role->id }}"
                                        data-name="{{ $role->nama }}"
                                        data-email="{{ $role->email }}"
                                        data-phone="{{ $role->telepon }}"
                                        data-role="{{ $role->peran }}"
                                        data-status="{{ $role->status_akun ? '1' : '0' }}">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button type="button" class="btn btn-light text-danger btn-delete-user"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalHapusPengguna"
                                        title="Hapus Pengguna"
                                        data-id="{{ $role->id }}"
                                        data-name="{{ $role->nama }}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">
                                <i class="bi bi-person-x fs-1 d-block mb-2 text-secondary"></i>
                                Belum ada data pengguna.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Table Footer -->
            <div class="panel-body border-top py-3 d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2">
                <span class="text-muted small">
                    Menampilkan <strong id="visibleCount">{{ $roles->count() }}</strong> dari <strong>{{ $roles->count() }}</strong> pengguna
                </span>
            </div>
        </div>
    </div>
</main>

<!-- ========================================================================= -->
<!-- MODALS                                                                    -->
<!-- ========================================================================= -->

<!-- 1. Modal Tambah Pengguna -->
<div class="modal fade" id="modalTambahPengguna" tabindex="-1" aria-labelledby="modalTambahPenggunaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center gap-2" id="modalTambahPenggunaLabel">
                    <i class="bi bi-person-plus-fill text-primary"></i>
                    <span>Tambah Akun Pengguna Baru</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('peran_pengguna.store') }}" method="POST">
                @csrf
                <div class="modal-body p-4">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text" name="nama" class="form-control" placeholder="Contoh: Alya Farika" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" placeholder="nama@kafeku.com" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nomor WhatsApp / Telepon</label>
                            <input type="tel" name="telepon" class="form-control" placeholder="0812-xxxx-xxxx">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Pilih Peran (Role) <span class="text-danger">*</span></label>
                            <select name="peran" class="form-select" required>
                                <option value="" selected disabled>-- Pilih Peran --</option>
                                <option value="Administrator">Administrator (Akses Penuh)</option>
                                <option value="Manajer Kafe">Manajer Kafe (Supervisor)</option>
                                <option value="Kasir">Kasir (POS & Billing)</option>
                                <option value="Barista">Barista & Dapur (Kitchen)</option>
                                <option value="Pelayan">Pelayan (Layanan Meja)</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Password <span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control" placeholder="Minimal 6 karakter" required minlength="6">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Status Akun</label>
                            <div class="form-check form-switch mt-2">
                                <input class="form-check-input" type="checkbox" role="switch" name="status_akun" value="1" id="statusSwitchNew" checked>
                                <label class="form-check-label" for="statusSwitchNew">Akun Langsung Aktif</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-1"></i>Simpan Pengguna
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- 2. Modal Edit Pengguna -->
<div class="modal fade" id="modalEditPengguna" tabindex="-1" aria-labelledby="modalEditPenggunaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center gap-2" id="modalEditPenggunaLabel">
                    <i class="bi bi-pencil-square text-warning"></i>
                    <span>Edit Data Pengguna</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formEditPengguna" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body p-4">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text" name="nama" class="form-control" id="editName" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" id="editEmail" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nomor WhatsApp / Telepon</label>
                            <input type="tel" name="telepon" class="form-control" id="editPhone">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Peran (Role) <span class="text-danger">*</span></label>
                            <select name="peran" class="form-select" id="editRole" required>
                                <option value="Administrator">Administrator (Akses Penuh)</option>
                                <option value="Manajer Kafe">Manajer Kafe (Supervisor)</option>
                                <option value="Kasir">Kasir (POS & Billing)</option>
                                <option value="Barista">Barista & Dapur (Kitchen)</option>
                                <option value="Pelayan">Pelayan (Layanan Meja)</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Status Akun</label>
                            <div class="form-check form-switch mt-2">
                                <input class="form-check-input" type="checkbox" role="switch" name="status_akun" value="1" id="editStatusSwitch">
                                <label class="form-check-label" for="editStatusSwitch" id="editStatusLabel">Aktif</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="p-3 bg-light rounded border">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1 fw-bold"><i class="bi bi-key me-1"></i>Ubah Password Akun</h6>
                                        <small class="text-muted">Kosongkan jika tidak ingin mengubah password.</small>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-outline-warning" onclick="document.getElementById('passwordSection').classList.toggle('d-none');">
                                        Ganti Password
                                    </button>
                                </div>
                                <div id="passwordSection" class="row g-2 mt-2 d-none">
                                    <div class="col-md-12">
                                        <input type="password" name="password" class="form-control form-control-sm" placeholder="Password Baru (minimal 6 karakter)">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-warning">
                        <i class="bi bi-check2-circle me-1"></i>Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- 3. Modal Detail Pengguna -->
<div class="modal fade" id="modalDetailPengguna" tabindex="-1" aria-labelledby="modalDetailPenggunaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center gap-2" id="modalDetailPenggunaLabel">
                    <i class="bi bi-person-bounding-box text-primary"></i>
                    <span>Informasi Akun Pengguna</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="text-center mb-4">
                    <div class="avatar-circle mx-auto mb-2 bg-primary text-white d-flex align-items-center justify-content-center rounded-circle fs-2" style="width: 70px; height: 70px;">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <h5 class="fw-bold mb-0" id="detailName">Nama Pengguna</h5>
                    <p class="text-muted small mb-2" id="detailEmailText">email@kafeku.com</p>
                    <span class="badge bg-primary" id="detailRoleBadge">Administrator</span>
                    <span class="badge bg-success ms-1" id="detailStatusBadge">Aktif</span>
                </div>

                <div class="list-group list-group-flush border-top">
                    <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <span class="text-muted"><i class="bi bi-envelope me-2"></i>Email</span>
                        <strong id="detailEmail">email@kafeku.com</strong>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <span class="text-muted"><i class="bi bi-telephone me-2"></i>Nomor HP</span>
                        <strong id="detailPhone">0812-xxxx</strong>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                        <span class="text-muted"><i class="bi bi-calendar-check me-2"></i>Terdaftar Sejak</span>
                        <strong id="detailCreated">-</strong>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- 4. Modal Konfirmasi Hapus -->
<div class="modal fade" id="modalHapusPengguna" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title d-flex align-items-center gap-2">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    <span>Konfirmasi Hapus Pengguna</span>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formHapusPengguna" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body p-4 text-center">
                    <div class="text-danger mb-3">
                        <i class="bi bi-person-x-fill" style="font-size: 3.5rem;"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Hapus Akun Pengguna?</h5>
                    <p class="text-muted mb-0">
                        Apakah Anda yakin ingin menghapus akun <strong id="deleteUserName">Pengguna</strong> secara permanen dari sistem KafeKu?
                    </p>
                </div>
                <div class="modal-footer bg-light justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash-fill me-1"></i>Hapus Permanen
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Script Interaktivitas Halaman -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    // 1. Live Filter Peran & Status & Search
    const roleSelect = document.getElementById('filterRoleSelect');
    const statusSelect = document.getElementById('filterStatusSelect');
    const searchInput = document.getElementById('userSearchInput');
    const table = document.getElementById('userRolesTable');
    const rows = table.querySelectorAll('tbody tr');
    const visibleCountEl = document.getElementById('visibleCount');

    function filterTable() {
        const selectedRole = (roleSelect.value || '').toLowerCase();
        const selectedStatus = (statusSelect.value || '').toLowerCase();
        const searchTerm = (searchInput.value || '').toLowerCase();
        let visibleCount = 0;

        rows.forEach(row => {
            if (row.cells.length < 6) return; // Skip empty row
            const role = (row.getAttribute('data-role') || '').toLowerCase();
            const status = (row.getAttribute('data-status') || '').toLowerCase();
            const textContent = row.textContent.toLowerCase();

            const matchRole = !selectedRole || role.includes(selectedRole);
            const matchStatus = !selectedStatus || status === selectedStatus;
            const matchSearch = !searchTerm || textContent.includes(searchTerm);

            if (matchRole && matchStatus && matchSearch) {
                row.style.display = '';
                visibleCount++;
            } else {
                row.style.display = 'none';
            }
        });

        if (visibleCountEl) visibleCountEl.textContent = visibleCount;
    }

    if (roleSelect) roleSelect.addEventListener('change', filterTable);
    if (statusSelect) statusSelect.addEventListener('change', filterTable);
    if (searchInput) searchInput.addEventListener('input', filterTable);

    // 2. Data binding untuk Modal Detail
    document.querySelectorAll('.btn-detail-user').forEach(button => {
        button.addEventListener('click', function () {
            const name = this.getAttribute('data-name');
            const email = this.getAttribute('data-email');
            const phone = this.getAttribute('data-phone');
            const role = this.getAttribute('data-role');
            const status = this.getAttribute('data-status');
            const created = this.getAttribute('data-created');

            document.getElementById('detailName').textContent = name;
            document.getElementById('detailEmailText').textContent = email;
            document.getElementById('detailEmail').textContent = email;
            document.getElementById('detailPhone').textContent = phone;
            document.getElementById('detailRoleBadge').textContent = role;
            document.getElementById('detailCreated').textContent = created;

            const statusBadge = document.getElementById('detailStatusBadge');
            statusBadge.textContent = status;
            statusBadge.className = status === 'Aktif' ? 'badge bg-success ms-1' : 'badge bg-danger ms-1';
        });
    });

    // 3. Data binding untuk Modal Edit
    document.querySelectorAll('.btn-edit-user').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            const name = this.getAttribute('data-name');
            const email = this.getAttribute('data-email');
            const phone = this.getAttribute('data-phone');
            const role = this.getAttribute('data-role');
            const status = this.getAttribute('data-status');

            document.getElementById('formEditPengguna').action = '/peran_pengguna/' + id;
            document.getElementById('editName').value = name;
            document.getElementById('editEmail').value = email;
            document.getElementById('editPhone').value = phone || '';
            document.getElementById('editRole').value = role;

            const statusSwitch = document.getElementById('editStatusSwitch');
            statusSwitch.checked = (status === '1');
            document.getElementById('editStatusLabel').textContent = (status === '1') ? 'Aktif' : 'Nonaktif';
        });
    });

    // 4. Data binding untuk Modal Hapus
    document.querySelectorAll('.btn-delete-user').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            const name = this.getAttribute('data-name');

            document.getElementById('deleteUserName').textContent = name;
            document.getElementById('formHapusPengguna').action = '/peran_pengguna/' + id;
        });
    });
});
</script>

@endsection

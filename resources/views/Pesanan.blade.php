@extends('layout.app')
@section('title','Pesanan')
@section('content')


    <nav class="navbar admin-navbar navbar-expand bg-white">
        <div class="container-fluid px-3 px-lg-4">
          <button class="sidebar-toggle" type="button" data-sidebar-toggle aria-controls="adminSidebar" aria-expanded="true" aria-label="Toggle sidebar">
            <span></span>
            <span></span>
            <span></span>
          </button>

          <form class="d-none d-md-flex ms-3 flex-grow-1" role="search">
            <input class="form-control search-input" type="search" placeholder="Cari menu, pesanan, atau pelanggan, " aria-label="Search">
          </form>

          <div class="navbar-actions ms-auto">
            <button class="icon-button theme-toggle" type="button" data-theme-toggle aria-label="Switch color theme" title="Switch color theme">
              <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
            </button>
            <div class="dropdown">
              <button class="icon-button" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Notifications">
                <span class="notification-dot"></span>
                <i class="bi bi-bell" aria-hidden="true"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end notification-menu">
                <div class="dropdown-header fw-bold text-body">Pesanan baru masuk</div>
                <a class="dropdown-item" href="users.html">
                  <span class="notification-title">Stok Susu hampir habis</span>
                  <span class="notification-time">4 minutes ago</span>
                </a>
                <a class="dropdown-item" href="charts.html">
                  <span class="notification-title">Pelanggan melakukan reservasi</span>
                  <span class="notification-time">32 minutes ago</span>
                </a>
                <a class="dropdown-item" href="settings.html">
                  <span class="notification-title">Promo berhasil diaktifkan</span>
                  <span class="notification-time">1 hour ago</span>
                </a>
              </div>
            </div>

            <div class="dropdown">
              <button class="profile-button dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="avatar-img avatar-sm" src="../assets/images/avatar/avatar.jpg" alt="Admin Kafe">
                <span class="profile-name d-none d-sm-inline">Admin Kafe</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                <li><a class="dropdown-item" href="settings.html">Account settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="login.html">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    

            <div class="container-fluid px-3 px-lg-4 py-4">

                <!-- Heading -->
                <div class="page-heading">

                    <div class="page-heading-copy">

                        <span class="page-icon">
                            <i class="bi bi-receipt-cutoff"></i>
                        </span>

                        <div>
                            <p class="eyebrow mb-1">Manajemen Kafe</p>
                            <h1 class="h3 mb-1">Pesanan</h1>
                            <p class="text-muted mb-0">
                                Kelola seluruh pesanan pelanggan.
                            </p>
                        </div>

                    </div>

                    <div class="heading-actions">

                        <!-- <button class="btn btn-primary">
                            <i class="bi bi-plus-circle"></i>
                            Tambah Pesanan
                        </button> -->

                    </div>

                </div>

                <!-- Statistik -->

                <div class="row g-3 mb-4">

                    <div class="col-lg-3">
                        <div class="metric-card metric-primary">
                            <div class="metric-top">
                                <span>Total Pesanan</span>
                                <i class="bi bi-receipt"></i>
                            </div>

                            <h2>145</h2>
                            <small>Semua pesanan</small>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="metric-card metric-warning">
                            <div class="metric-top">
                                <span>Diproses</span>
                                <i class="bi bi-hourglass-split"></i>
                            </div>

                            <h2>18</h2>
                            <small>Sedang dibuat</small>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="metric-card metric-success">
                            <div class="metric-top">
                                <span>Selesai</span>
                                <i class="bi bi-check-circle"></i>
                            </div>

                            <h2>119</h2>
                            <small>Sudah disajikan</small>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="metric-card metric-danger">
                            <div class="metric-top">
                                <span>Dibatalkan</span>
                                <i class="bi bi-x-circle"></i>
                            </div>

                            <h2>8</h2>
                            <small>Pesanan batal</small>
                        </div>
                    </div>

                </div>

                <!-- Daftar Pesanan -->

                <div class="panel">

                    <div class="panel-header d-flex justify-content-between align-items-center">

                        <div>
                            <h4 class="mb-1">Daftar Pesanan</h4>
                            <p class="text-muted mb-0">
                                Seluruh transaksi pelanggan hari ini.
                            </p>
                        </div>

                        <input
                            class="form-control"
                            style="max-width:250px"
                            type="search"
                            placeholder="Cari Pesanan..."
                            data-table-search="orderTable">

                    </div>

                    <div class="table-responsive">

                        <table class="table table-hover align-middle mb-0" id="orderTable">

                            <thead>

                                <tr>
                                    <th>No</th>
                                    <th>ID</th>
                                    <th>Pelanggan</th>
                                    <th>Menu</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>#PS001</td>
                                    <td>Alya Farika</td>
                                    <td>Es Kopi Susu</td>
                                    <td>2</td>
                                    <td>Rp50.000</td>

                                    <td>
                                        <span class="badge bg-warning">
                                            Diproses
                                        </span>
                                    </td>

                                    <td>

                                        <button class="btn btn-sm btn-info">
                                            Detail
                                        </button>

                                        <button class="btn btn-sm btn-warning">
                                            Edit
                                        </button>

                                        <button class="btn btn-sm btn-danger">
                                            Hapus
                                        </button>

                                    </td>

                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>#PS002</td>
                                    <td>Budi</td>
                                    <td>Cappuccino</td>
                                    <td>1</td>
                                    <td>Rp28.000</td>

                                    <td>
                                        <span class="badge bg-success">
                                            Selesai
                                        </span>
                                    </td>

                                    <td>

                                        <button class="btn btn-sm btn-info">
                                            Detail
                                        </button>

                                        <button class="btn btn-sm btn-warning">
                                            Edit
                                        </button>

                                        <button class="btn btn-sm btn-danger">
                                            Hapus
                                        </button>

                                    </td>

                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>#PS003</td>
                                    <td>Siti</td>
                                    <td>French Fries</td>
                                    <td>3</td>
                                    <td>Rp66.000</td>

                                    <td>
                                        <span class="badge bg-danger">
                                            Dibatalkan
                                        </span>
                                    </td>

                                    <td>

                                        <button class="btn btn-sm btn-info">
                                            Detail
                                        </button>

                                        <button class="btn btn-sm btn-warning">
                                            Edit
                                        </button>

                                        <button class="btn btn-sm btn-danger">
                                            Hapus
                                        </button>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </main>

    </div>

</div>


@endsection
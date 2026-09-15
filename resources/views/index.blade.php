@extends('layout.app')
@section('title', 'cafe farika - halaman utama')

@section('content')
  <div class="admin-shell">
    <div class="sidebar-backdrop" data-sidebar-close></div>

    <div class="admin-main">
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
                <img class="avatar-img avatar-sm" src="../assets/images/avatar/avatar.jpg" alt="{{ auth()->user()->name }}">
                <span class="profile-name d-none d-sm-inline">{{ auth()->user()->name }}</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                <li><a class="dropdown-item" href="settings.html">Account settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="{{ route('logout') }}" method="POST" class="m-0">
                    @csrf
                    <button type="submit" class="dropdown-item">Sign out</button>
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Halaman</p>
                <h1 class="h3 mb-1">Halaman Utama Kafeku</h1>
                <p class="text-muted mb-0">Selamat datang di Dashboard KafeKu. Pantau seluruh aktivitas operasional kafe secara real-time.</p>
              </div>
            </div>
            <!-- <div class="heading-actions">
              <button class="btn btn-outline-secondary btn-sm" type="button"><i class="bi bi-download" aria-hidden="true">
                </i> 
                Ekspor Laporan
              </button>
              <button class="btn btn-primary btn-sm" type="button">
                <i class="bi bi-file-earmark-plus" aria-hidden="true"></i> 
                Tambah Menu
              </button></div> -->
          </div>

          <section class="row g-3 mt-1" aria-label="Dashboard metrics">
            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-primary">
                <div class="metric-top">
                  <span class="metric-label">Total Penjualan</span>
                  <span class="metric-icon"><i class="bi bi-currency-dollar" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">Rp 12.450.000</div>
                <div class="metric-meta">
                  <span class="text-success">+15%</span>
                  <span>dibanding kemarin</span>
                </div>
              </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-success">
                <div class="metric-top">
                  <span class="metric-label">Pesanan Hari Ini</span>
                  <span class="metric-icon"><i class="bi bi-bag-check" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">245 Pesanan</div>
                <div class="metric-meta">
                  <span class="text-success">+18</span>
                  <span>Pesanan Baru</span>
                </div>
              </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-warning">
                <div class="metric-top">
                  <span class="metric-label">Pelanggan Hari Ini</span>
                  <span class="metric-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">98 Orang</div>
                <div class="metric-meta">
                  <span class="text-success">+10</span>
                  <span>Pelanggan Baru</span>
                </div>
              </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-danger">
                <div class="metric-top">
                  <span class="metric-label">Stok Bahan</span>
                  <span class="metric-icon"><i class="bi bi-life-preserver" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">15 Item</div>
                <div class="metric-meta">
                  <span class="text-danger">3 Item</span>
                  <span>Hampir Habis</span>
                </div>
              </article>
            </div>
          </section>

          <section class="row g-3 mt-1">
            <div class="col-12 col-xl-8">
              <div class="panel">
                <div class="panel-header">
                  <div>
                    <h2 class="h5 mb-1 section-title"><i class="bi bi-graph-up-arrow" aria-hidden="true"></i><span>Grafik Penjualan Bulanan</span></h2>
                    <p class="text-muted mb-0">Jumlah penjualan makanan dan minuman setiap bulan.</p>
                  </div>
                  <a class="btn btn-light btn-sm" href="charts.html">Lihat Detail</a>
                </div>

                <div class="chart-bars" aria-label="Sales performance chart">
                  <div class="chart-column bar-42"><span></span><small>Jan</small></div>
                  <div class="chart-column bar-58"><span></span><small>Feb</small></div>
                  <div class="chart-column bar-51"><span></span><small>Mar</small></div>
                  <div class="chart-column bar-72"><span></span><small>Apr</small></div>
                  <div class="chart-column bar-66"><span></span><small>May</small></div>
                  <div class="chart-column bar-83"><span></span><small>Jun</small></div>
                </div>
              </div>
            </div>

            <div class="col-12 col-xl-4">
              <div class="panel h-100">
                <div class="panel-header">
                  <div>
                    <h2 class="h5 mb-1 section-title"><i class="bi bi-activity" aria-hidden="true"></i><span>Aktivitas Kafe</span></h2>
                    <p class="text-muted mb-0">Aktivitas operasional terbaru di kafe.</p>
                  </div>
                </div>

                <div class="activity-list">
                  <div class="activity-item"><span class="activity-dot bg-primary"></span><div><p class="mb-1 fw-semibold">Pesanan Baru Masuk</p><p class="text-muted small mb-0">Pesanan #PS001 dari Alya Farika telah diterima.</p></div></div>
                  <div class="activity-item"><span class="activity-dot bg-success"></span><div><p class="mb-1 fw-semibold">Pembayaran Berhasil</p><p class="text-muted small mb-0">Pembayaran pesanan #PS001 sebesar Rp45.000 berhasil.</p></div></div>
                  <div class="activity-item"><span class="activity-dot bg-warning"></span><div><p class="mb-1 fw-semibold">Reservasi Baru</p><p class="text-muted small mb-0">Meja nomor 5 telah dipesan untuk pukul 18.30.</p></div></div>
                </div>
              </div>
            </div>
          </section>

          <section class="panel mt-3">
            <div class="panel-header">
              <div>
                <h2 class="h5 mb-1 section-title"><i class="bi bi-people" aria-hidden="true"></i><span>Pelanggan Terbaru</span></h2>
                <p class="text-muted mb-0">Daftar pelanggan yang baru melakukan transaksi.</p>
              </div>
              <a class="btn btn-outline-secondary btn-sm" href="users.html">Kelola Pelanggan</a>
            </div>
            <div class="table-responsive">
              <table class="table align-middle mb-0">
                <thead><tr><th scope="col">No Pesanan</th><th scope="col">Pelanggan</th><th scope="col">Menu</th><th scope="col">Total</th><th scope="col">Status</th><th scope="col" class="text-end">Aksi</th></tr></thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <!-- <img class="avatar-img avatar-sm" src="../assets/images/avatar/avatar-1.jpg" alt="Sarah Ahmed"> -->
                        <div>
                          <p class="fw-semibold mb-0">PS001</p>
                          <!-- <p class="text-muted small mb-0">Farika</p> -->
                        </div>
                      </div>
                    </td>
                    <td>Farika</td>
                    <td>Cappuccino + Croissant</td>
                    <td><span class="badge text-bg-success">Rp45.000</span></td>
                    <td>Selesai</td>
                    <td class="text-end"><a class="btn btn-light btn-sm" href="user-details.html">Detail</a></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <!-- <img class="avatar-img avatar-sm" src="../assets/images/avatar/avatar-2.jpg" alt="Rafi Khan"> -->
                        <div>
                          <p class="fw-semibold mb-0">PS002</p>
                          <!-- <p class="text-muted small mb-0">rafi@example.com</p>
                        </div> -->
                      </div>
                    </td>
                    <td>Azka</td>
                    <td>Latte</td>
                    <td><span class="badge text-bg-success">Rp28.000</span></td>
                    <td>Diproses</td>
                    <td class="text-end"><a class="btn btn-light btn-sm" href="user-details.html">Detail</a></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <!-- <img class="avatar-img avatar-sm" src="../assets/images/avatar/avatar-3.jpg" alt="Nadia Islam"> -->
                        <div>
                          <p class="fw-semibold mb-0">PS003</p>
                          <!-- <p class="text-muted small mb-0">nadia@example.com</p>
                        </div> -->
                      </div>
                    </td>
                    <td>Alya</td>
                    <td>Nasi Goreng</td>
                    <td><span class="badge text-bg-warning">Rp35.000</span></td>
                    <td>Menunggu</td>
                    <td class="text-end"><a class="btn btn-light btn-sm" href="user-details.html">Detail</a></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <!-- <img class="avatar-img avatar-sm" src="../assets/images/avatar/avatar-4.jpg" alt="Mina Torres"> -->
                        <div>
                          <p class="fw-semibold mb-0">PS004</p>
                          <!-- <p class="text-muted small mb-0">mina@example.com</p> -->
                        </div>
                      </div>
                    </td>
                    <td>Adziman</td>
                    <td>Americano

                    </td>
                    <td><span class="badge text-bg-secondary">Rp20.000</span></td>
                    <td>Dibayar</td>
                    <td class="text-end"><a class="btn btn-light btn-sm" href="user-details.html">Detail</a></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <!-- <img class="avatar-img avatar-sm" src="../assets/images/avatar/avatar-5.jpg" alt="Jon Oliver"> -->
                        <div>
                          <p class="fw-semibold mb-0">PS005</p>
                          <!-- <p class="text-muted small mb-0">jon@example.com</p> -->
                        </div>
                      </div>
                    </td>
                    <td>Mohammad</td>
                    <td>Es Kopi Susu</td>
                    <td><span class="badge text-bg-success">Rp25.000</span></td>
                    <td>Selesai</td>
                    <td class="text-end"><a class="btn btn-light btn-sm" href="user-details.html">Detail</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </main>

          <aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
            <div class="sidebar-user">
              <img class="avatar-img avatar-md sidebar-user-avatar" src="../assets/images/avatar/avatar.jpg" alt="Admin Kafe">
              <strong>Admin Farika</strong>
              <small>Administrator Kafe</small>
           </div>


           <div class="sidebar-footer">
             <span class="status-dot"></span>
             <span class="sidebar-footer-text">Sistem Kafe Berjalan Normal</span>
           </div>
          </aside>

      <footer class="admin-footer">
        <div class="container-fluid px-3 px-lg-4">
          <span>© 2026 KafeKu. All Rights Reserved.</span>
         <span>Sistem Informasi Manajemen Kafe</span>
        </div>
      </footer>
    </div>
  </div>
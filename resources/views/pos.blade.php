<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farika Cafe - Point of Sales (POS)</title>
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{ asset('ast/img/gallery/cafe/logo-farikaa.png') }}">
  
  <!-- Google Fonts: Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  
  <!-- POS Stylesheet -->
  <link rel="stylesheet" href="{{ asset('ast/css/pos.css') }}">
</head>
<body>

  <div class="pos-app">
    
    <!-- ==========================================
         SIDEBAR KIRI (HANYA 5 MENU)
         ========================================== -->
    <aside class="pos-sidebar">
      <div>
        <!-- Logo & Nama Cafe -->
        <div class="sidebar-header">
          <div class="cafe-logo-wrap">
            <img class="cafe-logo-img" src="{{ asset('ast/img/gallery/cafe/logo-farikaa.png') }}" alt="Farika Cafe Logo" onerror="this.style.display='none'; document.getElementById('logoFallback').style.display='block';">
            <span id="logoFallback" class="cafe-logo-fallback" style="display: none;">FC</span>
          </div>
          <div class="cafe-info">
            <span class="cafe-name">Farika Cafe</span>
            <span class="cafe-tagline">Coffee & Eatery POS</span>
          </div>
        </div>

        <!-- Judul Bagian Menu -->
        <div class="sidebar-nav-title">Menu Utama</div>

        <!-- 5 Menu Sidebar Sesuai Ketentuan -->
        <ul class="sidebar-menu">
          <!-- 1. Dashboard -->
          <li>
            <button type="button" class="menu-item-btn active" data-view="dashboard">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <rect x="3" y="3" width="7" height="7" rx="1.5"></rect>
                <rect x="14" y="3" width="7" height="7" rx="1.5"></rect>
                <rect x="14" y="14" width="7" height="7" rx="1.5"></rect>
                <rect x="3" y="14" width="7" height="7" rx="1.5"></rect>
              </svg>
              <span>Dashboard</span>
            </button>
          </li>

          <!-- 2. Menu -->
          <li>
            <button type="button" class="menu-item-btn" data-view="menu">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                <line x1="6" y1="1" x2="6" y2="4"></line>
                <line x1="10" y1="1" x2="10" y2="4"></line>
                <line x1="14" y1="1" x2="14" y2="4"></line>
              </svg>
              <span>Menu</span>
            </button>
          </li>

          <!-- 3. Riwayat Pembelian -->
          <li>
            <button type="button" class="menu-item-btn" data-view="history">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
              </svg>
              <span>Riwayat Pembelian</span>
            </button>
          </li>

          <!-- 4. Pembayaran -->
          <li>
            <button type="button" class="menu-item-btn" data-view="payment">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                <line x1="1" y1="10" x2="23" y2="10"></line>
              </svg>
              <span>Pembayaran</span>
            </button>
          </li>

          <!-- 5. Promosi -->
          <li>
            <button type="button" class="menu-item-btn" data-view="promotions">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <line x1="19" y1="5" x2="5" y2="19"></line>
                <circle cx="6.5" cy="6.5" r="2.5"></circle>
                <circle cx="17.5" cy="17.5" r="2.5"></circle>
              </svg>
              <span>Promosi</span>
            </button>
          </li>
        </ul>
      </div>

      <!-- Info Kasir di Bawah Sidebar -->
      <div class="sidebar-footer">
        <div class="cashier-badge-card">
          <div class="cashier-avatar">FK</div>
          <div class="cashier-meta">
            <span class="cashier-name">Kasir Farika</span>
            <span class="cashier-role">Shift Aktif</span>
          </div>
        </div>
      </div>
    </aside>

    <!-- ==========================================
         KONTEN UTAMA
         ========================================== -->
    <div class="pos-main-wrapper">
      
      <!-- Topbar Header -->
      <header class="pos-topbar">
        <div class="topbar-left">
          <div class="page-headline-wrap">
            <h1 class="page-headline-title" id="topbar-title">Dashboard Ringkasan</h1>
            <span class="page-headline-subtitle" id="topbar-subtitle">Pantau performa penjualan, pesanan, dan tren cafe hari ini</span>
          </div>
        </div>

        <div class="topbar-right">
          <!-- Jam & Tanggal Realtime -->
          <div class="live-datetime">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <circle cx="12" cy="12" r="10"></circle>
              <polyline points="12 6 12 12 16 14"></polyline>
            </svg>
            <span id="live-clock">Memuat waktu...</span>
          </div>
        </div>
      </header>

      <!-- Viewport Area Konten -->
      <main class="pos-content-viewport">
        
        <!-- ==========================================
             1. HALAMAN DASHBOARD
             ========================================== -->
        <section class="pos-view active" id="view-dashboard">
          <div class="dashboard-view-inner">
            
            <!-- 4 Metric Cards Sesuai Instruksi -->
            <div class="metrics-grid">
              
              <!-- Total Penjualan Hari Ini -->
              <div class="metric-card">
                <div class="metric-top">
                  <div class="metric-icon-box coffee">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <line x1="12" y1="1" x2="12" y2="23"></line>
                      <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg>
                  </div>
                  <span class="metric-badge up">+14.2%</span>
                </div>
                <div class="metric-body">
                  <span class="metric-label">Total Penjualan Hari Ini</span>
                  <span class="metric-value" id="dash-total-sales">Rp 0</span>
                </div>
              </div>

              <!-- Total Pembelian -->
              <div class="metric-card">
                <div class="metric-top">
                  <div class="metric-icon-box green">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                      <line x1="3" y1="6" x2="21" y2="6"></line>
                      <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                  </div>
                  <span class="metric-badge up">+8.5%</span>
                </div>
                <div class="metric-body">
                  <span class="metric-label">Total Pembelian</span>
                  <span class="metric-value" id="dash-total-purchases">0 Transaksi</span>
                </div>
              </div>

              <!-- Pesanan Hari Ini -->
              <div class="metric-card">
                <div class="metric-top">
                  <div class="metric-icon-box blue">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                      <polyline points="14 2 14 8 20 8"></polyline>
                      <line x1="16" y1="13" x2="8" y2="13"></line>
                      <line x1="16" y1="17" x2="8" y2="17"></line>
                      <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                  </div>
                  <span class="metric-badge neutral">Normal</span>
                </div>
                <div class="metric-body">
                  <span class="metric-label">Pesanan Hari Ini</span>
                  <span class="metric-value" id="dash-today-orders">0 Porsi</span>
                </div>
              </div>

              <!-- Promosi Aktif -->
              <div class="metric-card">
                <div class="metric-top">
                  <div class="metric-icon-box purple">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <line x1="19" y1="5" x2="5" y2="19"></line>
                      <circle cx="6.5" cy="6.5" r="2.5"></circle>
                      <circle cx="17.5" cy="17.5" r="2.5"></circle>
                    </svg>
                  </div>
                  <span class="metric-badge up">Aktif</span>
                </div>
                <div class="metric-body">
                  <span class="metric-label">Promosi Aktif</span>
                  <span class="metric-value" id="dash-active-promos">0 Promo</span>
                </div>
              </div>

            </div>

            <!-- Ringkasan Penjualan (Grafik Visual Trend) -->
            <div class="dash-card">
              <div class="dash-card-header">
                <div>
                  <h2 class="dash-card-title">Ringkasan Penjualan Hari Ini</h2>
                  <span style="font-size: 12px; color: var(--text-muted);">Tren pesanan per jam operasional Farika Cafe</span>
                </div>
                <span class="dash-pill-btn">Hari Ini</span>
              </div>

              <div class="sales-chart-wrap">
                <div class="chart-bar-group">
                  <div class="chart-bar" style="height: 35%;">
                    <div class="chart-bar-tooltip">09:00 • Rp 420.000</div>
                  </div>
                  <span class="chart-bar-label">09:00</span>
                </div>
                <div class="chart-bar-group">
                  <div class="chart-bar" style="height: 55%;">
                    <div class="chart-bar-tooltip">11:00 • Rp 780.000</div>
                  </div>
                  <span class="chart-bar-label">11:00</span>
                </div>
                <div class="chart-bar-group">
                  <div class="chart-bar" style="height: 90%;">
                    <div class="chart-bar-tooltip">13:00 • Rp 1.250.000</div>
                  </div>
                  <span class="chart-bar-label">13:00</span>
                </div>
                <div class="chart-bar-group">
                  <div class="chart-bar" style="height: 75%;">
                    <div class="chart-bar-tooltip">15:00 • Rp 980.000</div>
                  </div>
                  <span class="chart-bar-label">15:00</span>
                </div>
                <div class="chart-bar-group">
                  <div class="chart-bar" style="height: 60%;">
                    <div class="chart-bar-tooltip">17:00 • Rp 840.000</div>
                  </div>
                  <span class="chart-bar-label">17:00</span>
                </div>
                <div class="chart-bar-group">
                  <div class="chart-bar" style="height: 85%;">
                    <div class="chart-bar-tooltip">19:00 • Rp 1.150.000</div>
                  </div>
                  <span class="chart-bar-label">19:00</span>
                </div>
                <div class="chart-bar-group">
                  <div class="chart-bar" style="height: 45%;">
                    <div class="chart-bar-tooltip">21:00 • Rp 590.000</div>
                  </div>
                  <span class="chart-bar-label">21:00</span>
                </div>
              </div>

              <div class="sales-meta-strip">
                <div class="sales-meta-item">
                  <span class="sales-meta-label">Rata-rata Transaksi</span>
                  <span class="sales-meta-val">Rp 48.500</span>
                </div>
                <div class="sales-meta-item">
                  <span class="sales-meta-label">Jam Paling Ramai</span>
                  <span class="sales-meta-val">13:00 - 15:00 WIB</span>
                </div>
                <div class="sales-meta-item">
                  <span class="sales-meta-label">Metode Terbanyak</span>
                  <span class="sales-meta-val">QRIS (58%)</span>
                </div>
              </div>
            </div>

            <!-- 2 Kolom Bawah: Transaksi Terbaru & Menu Paling Banyak Dibeli -->
            <div class="dashboard-grid-dual">
              
              <!-- Transaksi Terbaru -->
              <div class="dash-card">
                <div class="dash-card-header">
                  <h2 class="dash-card-title">Transaksi Terbaru</h2>
                  <button class="dash-pill-btn" onclick="document.querySelector('[data-view=\'history\']').click()">Lihat Semua</button>
                </div>
                <div class="recent-trx-table-wrap">
                  <table class="simple-table">
                    <thead>
                      <tr>
                        <th>No. TRX</th>
                        <th>Waktu</th>
                        <th>Menu</th>
                        <th>Total</th>
                        <th>Metode</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody id="dashboard-recent-trx-body">
                      <!-- Render via JavaScript -->
                    </tbody>
                  </table>
                </div>
              </div>

              <!-- Menu yang Paling Banyak Dibeli -->
              <div class="dash-card">
                <div class="dash-card-header">
                  <h2 class="dash-card-title">Menu Terlaris Hari Ini</h2>
                  <span style="font-size: 12px; color: var(--text-muted);">Top 5 Menu</span>
                </div>
                <div class="top-menu-list" id="dashboard-top-menu-list">
                  <!-- Render via JavaScript -->
                </div>
              </div>

            </div>

          </div>
        </section>

        <!-- ==========================================
             2. HALAMAN MENU & KERANJANG PESANAN (3 KOLOM)
             ========================================== -->
        <section class="pos-view" id="view-menu">
          <div class="menu-view-container">
            
            <!-- Kolom Tengah: Konten Menu & Filter -->
            <div class="menu-center-pane">
              
              <!-- Kontrol Menu: Search Bar & Kategori -->
              <div class="menu-controls-header">
                
                <!-- Search Bar "Cari menu..." -->
                <div class="menu-search-bar">
                  <svg class="search-icon-left" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                  </svg>
                  <input type="text" id="menu-search-input" class="menu-search-input" placeholder="Cari menu kopi, makanan, atau snack...">
                  <button type="button" id="search-clear-btn" class="search-clear-btn" title="Hapus pencarian">✕</button>
                </div>

                <!-- Filter Kategori: Semua, Coffee, Non Coffee, Makanan, Snack, Dessert -->
                <div class="category-filter-strip" id="category-filter-strip">
                  <!-- Render via JavaScript -->
                </div>

              </div>

              <!-- Grid Menu Cafe -->
              <div class="menu-cards-grid" id="menu-cards-grid">
                <!-- Render via JavaScript -->
              </div>

            </div>

            <!-- ==========================================
                 KERANJANG PESANAN ("PESANAN SAYA") (KOLOM KANAN)
                 ========================================== -->
            <aside class="pos-cart-panel">
              
              <!-- Header Keranjang -->
              <div class="cart-header">
                <div class="cart-header-top">
                  <div class="cart-title-row">
                    <h2 class="cart-main-title">Pesanan Saya</h2>
                    <span class="cart-count-badge" id="cart-count-badge">0 item</span>
                  </div>
                  <button type="button" class="cart-clear-btn" id="cart-clear-btn" title="Kosongkan keranjang">
                    Kosongkan
                  </button>
                </div>

                <!-- Tipe Pesanan: Dine In / Take Away -->
                <div class="order-type-switch">
                  <button type="button" class="order-type-btn active" id="btn-order-dinein">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"></path>
                      <path d="M7 2v20"></path>
                      <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"></path>
                    </svg>
                    Dine In
                  </button>
                  <button type="button" class="order-type-btn" id="btn-order-takeaway">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                      <line x1="3" y1="6" x2="21" y2="6"></line>
                      <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                    Take Away
                  </button>
                </div>
              </div>

              <!-- Daftar Item Pesanan -->
              <div class="cart-items-list" id="cart-items-list">
                <!-- Render via JavaScript -->
              </div>

              <!-- Ringkasan Bawah & Tombol Bayar -->
              <div class="cart-footer-summary">
                
                <!-- Input Kode Promo -->
                <div class="coupon-input-wrap">
                  <input type="text" id="coupon-input" class="coupon-input" placeholder="Kode promo (misal: NGOPIHEMAT)">
                  <button type="button" id="coupon-apply-btn" class="coupon-apply-btn">Gunakan</button>
                </div>

                <!-- Tag Promo Terpasang -->
                <div class="applied-promo-tag" id="applied-promo-tag">
                  <span id="applied-promo-code-text">PROMO TERPASANG</span>
                  <button type="button" id="remove-promo-btn" class="remove-promo-btn" title="Hapus promo">✕</button>
                </div>

                <!-- Rincian Harga: Subtotal, Diskon, Total -->
                <div class="price-breakdown">
                  <div class="price-row">
                    <span>Subtotal</span>
                    <span id="cart-subtotal">Rp 0</span>
                  </div>
                  <div class="price-row discount-row">
                    <span>Diskon</span>
                    <span id="cart-discount">Rp 0</span>
                  </div>
                  <div class="price-row total-row">
                    <span>Total Pembayaran</span>
                    <span class="total-amount" id="cart-total">Rp 0</span>
                  </div>
                </div>

                <!-- Tombol Utama "Bayar Sekarang" -->
                <button type="button" class="btn-checkout-now" id="btn-checkout-now">
                  <span>Bayar Sekarang</span>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </button>

              </div>

            </aside>

          </div>
        </section>

        <!-- ==========================================
             3. HALAMAN RIWAYAT PEMBELIAN
             ========================================== -->
        <section class="pos-view" id="view-history">
          <div class="history-view-inner">
            
            <!-- Toolbar Filter & Search -->
            <div class="history-filter-bar">
              <div class="history-search-box">
                <svg class="history-search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="11" cy="11" r="8"></circle>
                  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input type="text" id="history-search-input" class="history-search-input" placeholder="Cari nomor transaksi, nama menu...">
              </div>

              <div class="history-select-filters">
                <!-- Filter Tanggal -->
                <select id="history-date-filter" class="filter-select">
                  <option value="semua">Semua Periode</option>
                  <option value="hari-ini">Hari Ini</option>
                  <option value="kemarin">Kemarin</option>
                  <option value="7-hari">7 Hari Terakhir</option>
                </select>

                <!-- Filter Metode Pembayaran -->
                <select id="history-method-filter" class="filter-select">
                  <option value="semua">Semua Metode</option>
                  <option value="Cash">Cash (Tunai)</option>
                  <option value="QRIS">QRIS</option>
                  <option value="Debit">Kartu Debit</option>
                  <option value="Credit">Kartu Kredit</option>
                </select>
              </div>
            </div>

            <!-- Tabel Riwayat Pembelian Sesuai Instruksi -->
            <div class="history-table-card">
              <table class="simple-table">
                <thead>
                  <tr>
                    <th>No. Transaksi</th>
                    <th>Tanggal & Waktu</th>
                    <th>Menu Dipesan</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Metode</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="history-table-body">
                  <tr></tr>
                  <tr></tr>
                  <tr></tr>
                  <tr></tr>
                  <tr></tr>
                  <tr></tr>
                  <tr></tr>
                  <tr></tr>
                </tbody>
              </table>
            </div>

          </div>
        </section>

        <!-- ==========================================
             4. HALAMAN PEMBAYARAN
             ========================================== -->
        <section class="pos-view" id="view-payment">
          <div class="payment-view-inner">
            
            <div class="payment-layout-dual">
              
              <!-- Kolom Kiri: Rincian Daftar Pesanan -->
              <div class="checkout-order-summary-card">
                <div class="dash-card-header">
                  <h2 class="dash-card-title">Daftar Pesanan</h2>
                  <span style="font-size: 12px; color: var(--text-muted);">Verifikasi sebelum bayar</span>
                </div>

                <div class="order-items-preview-list" id="pay-order-items-list">
                  <!-- Render via JavaScript -->
                </div>

                <div class="price-breakdown" style="padding-top: 14px; border-top: 1px solid var(--border-light);">
                  <div class="price-row">
                    <span>Subtotal</span>
                    <span id="pay-subtotal-text">Rp 0</span>
                  </div>
                  <div class="price-row discount-row">
                    <span>Diskon Promo</span>
                    <span id="pay-discount-text">Rp 0</span>
                  </div>
                  <div class="price-row total-row">
                    <span>Total Tagihan</span>
                    <span class="total-amount" id="pay-total-text">Rp 0</span>
                  </div>
                </div>
              </div>

              <!-- Kolom Kanan: Pilihan Metode Pembayaran & Kalkulasi Cash -->
              <div class="payment-action-card">
                <div>
                  <h2 class="dash-card-title">Metode Pembayaran</h2>
                  <span style="font-size: 12px; color: var(--text-muted);">Pilih metode yang diinginkan pelanggan</span>
                </div>

                <!-- 4 Pilihan Metode: Cash, QRIS, Debit, Credit -->
                <div class="payment-methods-grid">
                  <button type="button" class="pay-method-btn active" data-method="Cash">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="2" y="6" width="20" height="12" rx="2"></rect>
                      <circle cx="12" cy="12" r="2"></circle>
                      <path d="M6 12h.01M18 12h.01"></path>
                    </svg>
                    <span>Cash</span>
                  </button>

                  <button type="button" class="pay-method-btn" data-method="QRIS">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="3" y="3" width="7" height="7"></rect>
                      <rect x="14" y="3" width="7" height="7"></rect>
                      <rect x="14" y="14" width="7" height="7"></rect>
                      <rect x="3" y="14" width="7" height="7"></rect>
                    </svg>
                    <span>QRIS</span>
                  </button>

                  <button type="button" class="pay-method-btn" data-method="Debit">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                      <line x1="1" y1="10" x2="23" y2="10"></line>
                    </svg>
                    <span>Debit</span>
                  </button>

                  <button type="button" class="pay-method-btn" data-method="Credit">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <rect x="2" y="5" width="20" height="14" rx="2"></rect>
                      <line x1="2" y1="10" x2="22" y2="10"></line>
                    </svg>
                    <span>Credit</span>
                  </button>
                </div>

                <!-- Form Khusus Cash (Uang Dibayar & Kembalian Otomatis) -->
                <div class="cash-input-box" id="cash-calculation-box">
                  <div class="quick-cash-row">
                    <button type="button" class="quick-cash-btn" data-amount="exact">Uang Pas</button>
                    <button type="button" class="quick-cash-btn" data-amount="50000">Rp 50.000</button>
                    <button type="button" class="quick-cash-btn" data-amount="100000">Rp 100.000</button>
                    <button type="button" class="quick-cash-btn" data-amount="200000">Rp 200.000</button>
                  </div>

                  <div class="cash-field-group">
                    <label class="cash-field-label" for="cash-amount-input">Uang Dibayar (Tunai)</label>
                    <div class="cash-input-wrapper">
                      <span class="cash-prefix">Rp</span>
                      <input type="number" id="cash-amount-input" class="cash-amount-input" placeholder="0" min="0" step="1000">
                    </div>
                  </div>

                  <!-- Kembalian Terhitung Otomatis -->
                  <div class="change-display-strip">
                    <span class="change-label">Kembalian:</span>
                    <span class="change-value" id="change-value-display">Rp 0</span>
                  </div>
                </div>

                <!-- Tampilan Mock QRIS -->
                <div class="qris-display-box" id="qris-display-box">
                  <div class="qris-qr-frame">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=140x140&data=FARIKA_CAFE_QRIS_DEMO" alt="QRIS Farika Cafe" style="width: 140px; height: 140px;" onerror="this.alt='QRIS Simulation';">
                  </div>
                  <div style="font-weight: 700; font-size: 14px; color: var(--text-main);">Scan QRIS Farika Cafe</div>
                  <div style="font-size: 12px; color: var(--text-muted);">Mendukung GoPay, OVO, Dana, ShopeePay & Mobile Banking</div>
                </div>

                <!-- Tampilan Mock Debit / Credit -->
                <div class="card-pay-box" id="card-pay-box">
                  <div style="font-weight: 700; font-size: 14px; color: var(--text-main);">Mesin EDC Kasir Farika</div>
                  <div style="font-size: 12px; color: var(--text-secondary);">Silakan gesek atau tap kartu nasabah pada mesin EDC, lalu masukkan nomor approval / referensi kartu.</div>
                  <input type="text" class="menu-search-input" style="height: 42px; padding: 0 14px;" placeholder="No. Referensi / Batch EDC (Otomatis)">
                </div>

                <!-- Tombol Konfirmasi Pembayaran -->
                <button type="button" class="btn-confirm-payment" id="btn-confirm-payment">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>Konfirmasi Pembayaran</span>
                </button>

              </div>

            </div>

          </div>
        </section>

        <!-- ==========================================
             5. HALAMAN PROMOSI
             ========================================== -->
        <section class="pos-view" id="view-promotions">
          <div class="promo-view-inner">
            <div class="promo-cards-grid" id="promo-cards-grid">
              <!-- Render via JavaScript -->
            </div>
          </div>
        </section>

      </main>

    </div>

  </div>

  <!-- ==========================================
       MODAL 1: DETAIL TRANSAKSI (RIWAYAT)
       ========================================== -->
  <div class="pos-modal-overlay" id="trx-detail-modal">
    <div class="pos-modal-box">
      <div class="pos-modal-header">
        <h3 class="pos-modal-title">Rincian Transaksi</h3>
        <button type="button" class="pos-modal-close-btn" id="detail-modal-close">✕</button>
      </div>
      <div class="pos-modal-body" id="detail-modal-body-content">
        <!-- Render via JavaScript -->
      </div>
      <div class="pos-modal-footer">
        <button type="button" class="dash-pill-btn" onclick="document.getElementById('trx-detail-modal').classList.remove('active')">Tutup</button>
      </div>
    </div>
  </div>

  <!-- ==========================================
       MODAL 2: PEMBAYARAN BERHASIL & STRUK
       ========================================== -->
  <div class="pos-modal-overlay" id="payment-success-modal">
    <div class="pos-modal-box">
      <div class="pos-modal-body" style="padding-top: 32px;">
        <div class="success-check-badge">
          <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
            <polyline points="20 6 9 17 4 12"></polyline>
          </svg>
        </div>
        <h2 class="success-modal-title">Pembayaran Berhasil!</h2>
        <p class="success-modal-desc">Transaksi telah sukses dicatat ke dalam sistem Farika Cafe</p>

        <!-- Kartu Struk Ringkas -->
        <div class="receipt-card" id="success-receipt-content">
          <!-- Render via JavaScript -->
        </div>
      </div>

      <div class="pos-modal-footer" style="justify-content: space-between;">
        <button type="button" class="dash-pill-btn" id="btn-print-receipt">
          🖨️ Cetak Struk
        </button>
        <button type="button" class="btn-promo-action" id="btn-new-transaction">
          Transaksi Baru ➔
        </button>
      </div>
    </div>
  </div>

  <!-- Toast Notification -->
  <div class="pos-toast" id="pos-toast">
    <span id="toast-message">Notifikasi</span>
  </div>

  <!-- POS Script Logic -->
  <script src="{{ asset('ast/js/pos.js') }}"></script>
</body>
</html>

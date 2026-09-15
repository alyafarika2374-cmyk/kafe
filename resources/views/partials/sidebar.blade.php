   <aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
      <div class="sidebar-header">
        <a class="brand-mark" href="index.html" aria-label="adminHMD dashboard">
          <img 
              src="ast/img/gallery/cafe/logo-farikaa.png"
              alt="Logo KafeKu"
              class="brand-logo"
              style="width: 45px; height: 45px; object-fit: contain; margin-right: 10px;"
          >
          

            <span class="brand-copy">
                <span class="brand-title">KafeKu</span>
                <span class="brand-subtitle">Admin Dashboard</span>
            </span>

        </a>
      </div>

      <nav class="sidebar-nav">
         <a class="nav-link" href="{{ route('index') }}"aria-expended="false"aria-controls="index">
          <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
          <span class="nav-text">Halaman utama</span>
        </a>
        
         <a class="nav-link" href="{{ route('peran_pengguna') }}"aria-expended="false"aria-controls="peran_pengguna">
          <span class="nav-icon"><i class="bi bi-person-circle" aria-hidden="true"></i></span>
          <span class="nav-text">Peran Pengguna</span>
        </a>

         <a class="nav-link" href="{{ route('Menu') }}"aria-expended="false"aria-controls="Menu">
          <span class="nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
          <span class="nav-text">Menu</span>
        </a>
       
         <a class="nav-link" href="{{ route('Meja&Reservasi') }}"aria-expended="false"aria-controls="Meja&Reservasi">
          <span class="nav-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
          <span class="nav-text">Meja & Reservasi</span>
        </a>
         <a class="nav-link" href="{{ route('Stok') }}"aria-expended="false"aria-controls="Stok">
          <span class="nav-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
          <span class="nav-text">Stok Bahan</span>
        </a>
       
         <!-- <a class="nav-link" href="{{ route('Laporan') }}"aria-expnded="false"aria-controls="Laporan">
          <span class="nav-icon"><i class="bi bi-grid-3x3-gap" aria-hidden="true"></i></span>
          <span class="nav-text">Laporan</span> -->
        </a>
      </nav>

      <!-- <div class="sidebar-user">
        <img class="avatar-img avatar-md sidebar-user-avatar" src="../assets/images/avatar/avatar.jpg" alt="Admin Kafe">
        <strong>Admin Farika</strong>
        <small>Administrator Kafe</small>
      </div> -->


      <!-- <div class="sidebar-footer">
        <span class="status-dot"></span>
        <span class="sidebar-footer-text">Sistem Kafe Berjalan Normal</span>
      </div> -->
    </aside> 
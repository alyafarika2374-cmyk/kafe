@extends('layout.app')
@section('title','Penjualan')

@section('content')

<main class="dashboard-content">

    <div class="container-fluid px-3 px-lg-4 py-4">

        <!-- Heading -->
        <div class="page-heading d-flex justify-content-between align-items-center mb-4">

            <div class="page-heading-copy">

                <span class="page-icon">
                    <i class="bi bi-cash-stack"></i>
                </span>

                <div>
                    <p class="eyebrow mb-1">Manajemen Kafe</p>
                    <h1 class="h3 mb-1">Penjualan</h1>
                    <p class="text-muted mb-0">
                        Kelola seluruh transaksi penjualan kafe.
                    </p>
                </div>

            </div>

            <button class="btn btn-primary">
                <i class="bi bi-plus-circle me-2"></i>
                Transaksi Baru
            </button>

        </div>

        <!-- Statistik -->
        <div class="row g-3 mb-4">

            <div class="col-lg-3">
                <div class="metric-card metric-primary">
                    <div class="metric-top">
                        <span>Total Penjualan</span>
                        <i class="bi bi-receipt"></i>
                    </div>

                    <h2>250</h2>
                    <small>Transaksi</small>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="metric-card metric-success">
                    <div class="metric-top">
                        <span>Pendapatan Hari Ini</span>
                        <i class="bi bi-currency-dollar"></i>
                    </div>

                    <h2>Rp2,5 Jt</h2>
                    <small>06 Agustus 2026</small>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="metric-card metric-warning">
                    <div class="metric-top">
                        <span>Pesanan Selesai</span>
                        <i class="bi bi-check-circle"></i>
                    </div>

                    <h2>180</h2>
                    <small>Berhasil</small>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="metric-card metric-danger">
                    <div class="metric-top">
                        <span>Pesanan Batal</span>
                        <i class="bi bi-x-circle"></i>
                    </div>

                    <h2>12</h2>
                    <small>Dibatalkan</small>
                </div>
            </div>

        </div>

        <!-- Tabel -->
        <div class="panel">

            <div class="panel-header d-flex justify-content-between align-items-center">

                <div>
                    <h4 class="mb-1">Riwayat Penjualan</h4>
                    <p class="text-muted mb-0">
                        Seluruh transaksi penjualan pelanggan.
                    </p>
                </div>

                <input
                    class="form-control"
                    style="max-width:250px"
                    type="search"
                    placeholder="Cari Transaksi..."
                    data-table-search="penjualanTable">

            </div>

            <div class="table-responsive">

                <table class="table table-hover align-middle" id="penjualanTable">

                    <thead>

                        <tr>
                            <th>No</th>
                            <th>ID Transaksi</th>
                            <th>Pelanggan</th>
                            <th>Kasir</th>
                            <th>Total</th>
                            <th>Pembayaran</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th class="text-end">Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>TRX001</td>
                            <td>Alya Farika</td>
                            <td>Admin</td>
                            <td>Rp85.000</td>
                            <td>Tunai</td>
                            <td><span class="badge bg-success">Lunas</span></td>
                            <td>06/08/2026</td>
                            <td class="text-end">
                                <button class="btn btn-info btn-sm">Detail</button>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>TRX002</td>
                            <td>Rizky</td>
                            <td>Admin</td>
                            <td>Rp47.000</td>
                            <td>QRIS</td>
                            <td><span class="badge bg-success">Lunas</span></td>
                            <td>06/08/2026</td>
                            <td class="text-end">
                                <button class="btn btn-info btn-sm">Detail</button>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>TRX003</td>
                            <td>Salsa</td>
                            <td>Admin</td>
                            <td>Rp120.000</td>
                            <td>Debit</td>
                            <td><span class="badge bg-warning text-dark">Diproses</span></td>
                            <td>06/08/2026</td>
                            <td class="text-end">
                                <button class="btn btn-info btn-sm">Detail</button>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>TRX004</td>
                            <td>Budi</td>
                            <td>Admin</td>
                            <td>Rp63.000</td>
                            <td>Tunai</td>
                            <td><span class="badge bg-danger">Batal</span></td>
                            <td>05/08/2026</td>
                            <td class="text-end">
                                <button class="btn btn-info btn-sm">Detail</button>
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</main>

@endsection
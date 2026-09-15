@extends('layout.app')
@section('title','Laporan')
@section('content')

<main class="dashboard-content">

    <div class="container-fluid px-3 px-lg-4 py-4">

        <!-- Heading -->
        <div class="page-heading d-flex justify-content-between align-items-center mb-4">

            <div class="page-heading-copy">

                <span class="page-icon">
                    <i class="bi bi-bar-chart-line-fill"></i>
                </span>

                <div>
                    <p class="eyebrow mb-1">Manajemen Kafe</p>

                    <h1 class="h3 mb-1">
                        Laporan Penjualan
                    </h1>

                    <p class="text-muted mb-0">
                        Ringkasan transaksi penjualan dan aktivitas kafe.
                    </p>
                </div>

            </div>

            <!-- <button class="btn btn-success">
                <i class="bi bi-download me-2"></i>
                Export PDF
            </button> -->

        </div>


        <!-- Statistik -->
        <div class="row g-3 mb-4">

            <div class="col-lg-3">
                <div class="metric-card metric-primary">

                    <div class="metric-top">
                        <span>Total Penjualan</span>
                        <i class="bi bi-cash-stack"></i>
                    </div>

                    <h2>Rp15.800.000</h2>
                    <small>Bulan Agustus</small>

                </div>
            </div>


            <div class="col-lg-3">
                <div class="metric-card metric-success">

                    <div class="metric-top">
                        <span>Total Transaksi</span>
                        <i class="bi bi-receipt-cutoff"></i>
                    </div>

                    <h2>432</h2>
                    <small>Transaksi berhasil</small>

                </div>
            </div>


            <div class="col-lg-3">
                <div class="metric-card metric-warning">

                    <div class="metric-top">
                        <span>Menu Terjual</span>
                        <i class="bi bi-cup-hot-fill"></i>
                    </div>

                    <h2>1.278</h2>
                    <small>Porsi terjual</small>

                </div>
            </div>


            <div class="col-lg-3">
                <div class="metric-card metric-danger">

                    <div class="metric-top">
                        <span>Pesanan Batal</span>
                        <i class="bi bi-x-circle-fill"></i>
                    </div>

                    <h2>18</h2>
                    <small>Bulan ini</small>

                </div>
            </div>

        </div>


        <!-- Filter -->
        <div class="panel mb-4">

            <div class="panel-header">
                <h4>Filter Laporan</h4>
            </div>

            <div class="panel-body">

                <div class="row g-3">

                    <div class="col-md-4">

                        <label class="form-label">
                            Tanggal Awal
                        </label>

                        <input
                            type="date"
                            class="form-control"
                        >

                    </div>


                    <div class="col-md-4">

                        <label class="form-label">
                            Tanggal Akhir
                        </label>

                        <input
                            type="date"
                            class="form-control"
                        >

                    </div>


                    <div class="col-md-4">

                        <label class="form-label">
                            Jenis Laporan
                        </label>

                        <select class="form-select">

                            <option>Penjualan</option>
                            <option>Pesanan</option>
                            <option>Stok Bahan</option>
                            <option>Pendapatan</option>

                        </select>

                    </div>

                </div>

            </div>

        </div>


        <!-- Data Transaksi -->
        <div class="panel">

            <div class="panel-header d-flex justify-content-between align-items-center">

                <div>

                    <h4 class="mb-1">
                        Data Transaksi
                    </h4>

                    <p class="text-muted mb-0">
                        Seluruh transaksi penjualan pelanggan.
                    </p>

                </div>

                <input
                    type="search"
                    class="form-control"
                    style="max-width:250px"
                    placeholder="Cari Transaksi..."
                    data-table-search="laporanTable"
                >

            </div>


            <div class="table-responsive">

                <table
                    class="table table-hover align-middle"
                    id="laporanTable"
                >

                    <thead>

                        <tr>

                            <th>No</th>
                            <th>Tanggal</th>
                            <th>ID Transaksi</th>
                            <th>Pelanggan</th>
                            <th>Kasir</th>
                            <th>Total</th>
                            <th>Pembayaran</th>
                            <th>Status</th>
                            <th class="text-end">Aksi</th>

                        </tr>

                    </thead>


                    <tbody>

                        <tr>

                            <td>1</td>
                            <td>06 Agustus 2026</td>
                            <td>TRX001</td>
                            <td>Alya Farika</td>
                            <td>Admin</td>
                            <td>Rp85.000</td>
                            <td>Tunai</td>

                            <td>
                                <span class="badge bg-success">
                                    Lunas
                                </span>
                            </td>

                            <td class="text-end">

                                <button class="btn btn-info btn-sm">
                                    Detail
                                </button>

                            </td>

                        </tr>


                        <tr>

                            <td>2</td>
                            <td>06 Agustus 2026</td>
                            <td>TRX002</td>
                            <td>Rizky</td>
                            <td>Admin</td>
                            <td>Rp47.000</td>
                            <td>QRIS</td>

                            <td>
                                <span class="badge bg-success">
                                    Lunas
                                </span>
                            </td>

                            <td class="text-end">

                                <button class="btn btn-info btn-sm">
                                    Detail
                                </button>

                            </td>

                        </tr>


                        <tr>

                            <td>3</td>
                            <td>05 Agustus 2026</td>
                            <td>TRX003</td>
                            <td>Salsa</td>
                            <td>Admin</td>
                            <td>Rp120.000</td>
                            <td>Debit</td>

                            <td>
                                <span class="badge bg-warning text-dark">
                                    Diproses
                                </span>
                            </td>

                            <td class="text-end">

                                <button class="btn btn-info btn-sm">
                                    Detail
                                </button>

                            </td>

                        </tr>


                        <tr>

                            <td>4</td>
                            <td>05 Agustus 2026</td>
                            <td>TRX004</td>
                            <td>Budi</td>
                            <td>Admin</td>
                            <td>Rp63.000</td>
                            <td>Tunai</td>

                            <td>
                                <span class="badge bg-danger">
                                    Batal
                                </span>
                            </td>

                            <td class="text-end">

                                <button class="btn btn-info btn-sm">
                                    Detail
                                </button>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</main>

@endsection
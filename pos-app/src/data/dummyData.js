// ==============================================
// FARIKA CAFE POS - DUMMY DATA
// Semua data bersifat statis, tidak ada koneksi database
// ==============================================

// ---- MENU ITEMS ----
export const menuItems = [
  // COFFEE
  { id: 1, name: 'Espresso', category: 'Coffee', price: 18000, stock: 50, isAvailable: true, image: '☕' },
  { id: 2, name: 'Americano', category: 'Coffee', price: 20000, stock: 40, isAvailable: true, image: '☕' },
  { id: 3, name: 'Cappuccino', category: 'Coffee', price: 28000, stock: 35, isAvailable: true, image: '☕' },
  { id: 4, name: 'Caffe Latte', category: 'Coffee', price: 30000, stock: 45, isAvailable: true, image: '☕' },
  { id: 5, name: 'Mocha', category: 'Coffee', price: 32000, stock: 30, isAvailable: true, image: '☕' },
  { id: 6, name: 'Flat White', category: 'Coffee', price: 35000, stock: 20, isAvailable: true, image: '☕' },
  { id: 7, name: 'Cold Brew', category: 'Coffee', price: 28000, stock: 15, isAvailable: true, image: '🧊' },
  { id: 8, name: 'Es Kopi Susu', category: 'Coffee', price: 25000, stock: 60, isAvailable: true, image: '🥛' },
  { id: 9, name: 'Vietnam Drip', category: 'Coffee', price: 22000, stock: 0, isAvailable: false, image: '☕' },
  // NON-COFFEE
  { id: 10, name: 'Matcha Latte', category: 'Non-Coffee', price: 30000, stock: 25, isAvailable: true, image: '🍵' },
  { id: 11, name: 'Chocolate', category: 'Non-Coffee', price: 25000, stock: 30, isAvailable: true, image: '🍫' },
  { id: 12, name: 'Taro Latte', category: 'Non-Coffee', price: 28000, stock: 20, isAvailable: true, image: '🌿' },
  { id: 13, name: 'Thai Tea', category: 'Non-Coffee', price: 22000, stock: 35, isAvailable: true, image: '🧋' },
  { id: 14, name: 'Lemon Tea', category: 'Non-Coffee', price: 18000, stock: 40, isAvailable: true, image: '🍋' },
  { id: 15, name: 'Strawberry Smoothie', category: 'Non-Coffee', price: 32000, stock: 0, isAvailable: false, image: '🍓' },
  { id: 16, name: 'Mango Juice', category: 'Non-Coffee', price: 25000, stock: 18, isAvailable: true, image: '🥭' },
  // MAKANAN
  { id: 17, name: 'Nasi Goreng Spesial', category: 'Makanan', price: 35000, stock: 20, isAvailable: true, image: '🍳' },
  { id: 18, name: 'Roti Bakar Coklat', category: 'Makanan', price: 22000, stock: 30, isAvailable: true, image: '🍞' },
  { id: 19, name: 'Club Sandwich', category: 'Makanan', price: 38000, stock: 15, isAvailable: true, image: '🥪' },
  { id: 20, name: 'Pasta Carbonara', category: 'Makanan', price: 45000, stock: 10, isAvailable: true, image: '🍝' },
  { id: 21, name: 'Soto Ayam', category: 'Makanan', price: 30000, stock: 12, isAvailable: true, image: '🍲' },
  { id: 22, name: 'Mie Goreng Cafe', category: 'Makanan', price: 32000, stock: 0, isAvailable: false, image: '🍜' },
  // SNACK
  { id: 23, name: 'Kentang Goreng', category: 'Snack', price: 18000, stock: 50, isAvailable: true, image: '🍟' },
  { id: 24, name: 'Onion Ring', category: 'Snack', price: 20000, stock: 30, isAvailable: true, image: '🧅' },
  { id: 25, name: 'Nugget Ayam', category: 'Snack', price: 22000, stock: 25, isAvailable: true, image: '🍗' },
  { id: 26, name: 'Pisang Goreng', category: 'Snack', price: 15000, stock: 20, isAvailable: true, image: '🍌' },
  { id: 27, name: 'Dimsum Goreng', category: 'Snack', price: 25000, stock: 15, isAvailable: true, image: '🥟' },
  // DESSERT
  { id: 28, name: 'Tiramisu', category: 'Dessert', price: 35000, stock: 10, isAvailable: true, image: '🍰' },
  { id: 29, name: 'Lava Cake', category: 'Dessert', price: 38000, stock: 8, isAvailable: true, image: '🎂' },
  { id: 30, name: 'Pudding Susu', category: 'Dessert', price: 20000, stock: 15, isAvailable: true, image: '🍮' },
  { id: 31, name: 'Cheesecake', category: 'Dessert', price: 40000, stock: 0, isAvailable: false, image: '🧁' },
  { id: 32, name: 'Ice Cream Scoop', category: 'Dessert', price: 28000, stock: 20, isAvailable: true, image: '🍨' },
];

// ---- TRANSACTIONS / RIWAYAT ----
export const transactions = [
  {
    id: 'TRX-0048',
    date: '17 Sep 2026, 12:45',
    customerName: 'Budi Santoso',
    items: [
      { name: 'Es Kopi Susu', qty: 2, price: 25000 },
      { name: 'Nasi Goreng Spesial', qty: 1, price: 35000 },
    ],
    totalItems: 3,
    total: 85000,
    paymentMethod: 'QRIS',
    status: 'Diproses',
  },
  {
    id: 'TRX-0047',
    date: '17 Sep 2026, 12:31',
    customerName: 'Siti Aisyah',
    items: [
      { name: 'Cappuccino', qty: 1, price: 28000 },
      { name: 'Tiramisu', qty: 1, price: 35000 },
      { name: 'Kentang Goreng', qty: 1, price: 18000 },
    ],
    totalItems: 3,
    total: 81000,
    paymentMethod: 'Cash',
    status: 'Selesai',
  },
  {
    id: 'TRX-0046',
    date: '17 Sep 2026, 12:10',
    customerName: 'Rudi Hermawan',
    items: [
      { name: 'Americano', qty: 2, price: 20000 },
    ],
    totalItems: 2,
    total: 40000,
    paymentMethod: 'Debit',
    status: 'Selesai',
  },
  {
    id: 'TRX-0045',
    date: '17 Sep 2026, 11:55',
    customerName: 'Dewi Rahayu',
    items: [
      { name: 'Matcha Latte', qty: 1, price: 30000 },
      { name: 'Club Sandwich', qty: 1, price: 38000 },
      { name: 'Lava Cake', qty: 1, price: 38000 },
    ],
    totalItems: 3,
    total: 106000,
    paymentMethod: 'E-Wallet',
    status: 'Selesai',
  },
  {
    id: 'TRX-0044',
    date: '17 Sep 2026, 11:30',
    customerName: 'Ahmad Fauzi',
    items: [
      { name: 'Cold Brew', qty: 2, price: 28000 },
      { name: 'Pasta Carbonara', qty: 1, price: 45000 },
    ],
    totalItems: 3,
    total: 101000,
    paymentMethod: 'Cash',
    status: 'Dibatalkan',
  },
  {
    id: 'TRX-0043',
    date: '17 Sep 2026, 11:05',
    customerName: 'Rina Kartika',
    items: [
      { name: 'Thai Tea', qty: 3, price: 22000 },
      { name: 'Pisang Goreng', qty: 2, price: 15000 },
    ],
    totalItems: 5,
    total: 96000,
    paymentMethod: 'QRIS',
    status: 'Selesai',
  },
  {
    id: 'TRX-0042',
    date: '17 Sep 2026, 10:45',
    customerName: 'Hendra Gunawan',
    items: [
      { name: 'Flat White', qty: 1, price: 35000 },
      { name: 'Roti Bakar Coklat', qty: 2, price: 22000 },
    ],
    totalItems: 3,
    total: 79000,
    paymentMethod: 'Debit',
    status: 'Selesai',
  },
  {
    id: 'TRX-0041',
    date: '17 Sep 2026, 10:20',
    customerName: 'Yanti Susilo',
    items: [
      { name: 'Cheesecake', qty: 1, price: 40000 },
      { name: 'Caffe Latte', qty: 2, price: 30000 },
    ],
    totalItems: 3,
    total: 100000,
    paymentMethod: 'E-Wallet',
    status: 'Diproses',
  },
  {
    id: 'TRX-0040',
    date: '17 Sep 2026, 09:58',
    customerName: 'Doni Prasetyo',
    items: [
      { name: 'Espresso', qty: 2, price: 18000 },
      { name: 'Nugget Ayam', qty: 1, price: 22000 },
    ],
    totalItems: 3,
    total: 58000,
    paymentMethod: 'Cash',
    status: 'Selesai',
  },
  {
    id: 'TRX-0039',
    date: '17 Sep 2026, 09:35',
    customerName: 'Mega Wulandari',
    items: [
      { name: 'Mocha', qty: 1, price: 32000 },
      { name: 'Taro Latte', qty: 1, price: 28000 },
      { name: 'Tiramisu', qty: 2, price: 35000 },
    ],
    totalItems: 4,
    total: 130000,
    paymentMethod: 'Debit',
    status: 'Selesai',
  },
  {
    id: 'TRX-0038',
    date: '17 Sep 2026, 09:10',
    customerName: 'Bambang Setiawan',
    items: [
      { name: 'Soto Ayam', qty: 2, price: 30000 },
      { name: 'Lemon Tea', qty: 2, price: 18000 },
    ],
    totalItems: 4,
    total: 96000,
    paymentMethod: 'QRIS',
    status: 'Dibatalkan',
  },
  {
    id: 'TRX-0037',
    date: '17 Sep 2026, 08:45',
    customerName: 'Fitri Handayani',
    items: [
      { name: 'Es Kopi Susu', qty: 3, price: 25000 },
      { name: 'Onion Ring', qty: 1, price: 20000 },
    ],
    totalItems: 4,
    total: 95000,
    paymentMethod: 'Cash',
    status: 'Selesai',
  },
];

// ---- PROMOTIONS ----
export const promotions = [
  {
    id: 1,
    name: 'Diskon Weekend',
    description: 'Dapatkan diskon 20% untuk semua menu Coffee setiap hari Sabtu dan Minggu.',
    discountType: 'percentage',
    discountValue: 20,
    minPurchase: 50000,
    startDate: '01 Sep 2026',
    endDate: '30 Sep 2026',
    isActive: true,
    code: 'WEEKEND20',
  },
  {
    id: 2,
    name: 'Buy 1 Get 1 Coffee',
    description: 'Beli 1 minuman Coffee ukuran Large, gratis 1 minuman Coffee ukuran Regular.',
    discountType: 'nominal',
    discountValue: 20000,
    minPurchase: 30000,
    startDate: '15 Sep 2026',
    endDate: '15 Oct 2026',
    isActive: true,
    code: 'B1G1COFFEE',
  },
  {
    id: 3,
    name: 'Happy Hour',
    description: 'Diskon 15% untuk semua pesanan antara pukul 14.00 - 17.00 WIB.',
    discountType: 'percentage',
    discountValue: 15,
    minPurchase: 0,
    startDate: '01 Sep 2026',
    endDate: '31 Dec 2026',
    isActive: true,
    code: 'HAPPYHOUR',
  },
  {
    id: 4,
    name: 'Promo Member',
    description: 'Member terdaftar mendapatkan potongan Rp10.000 untuk setiap transaksi minimum Rp75.000.',
    discountType: 'nominal',
    discountValue: 10000,
    minPurchase: 75000,
    startDate: '01 Jan 2026',
    endDate: '31 Dec 2026',
    isActive: true,
    code: 'MEMBER10K',
  },
  {
    id: 5,
    name: 'Student Discount',
    description: 'Tunjukkan kartu pelajar/mahasiswa dan dapatkan diskon 10% untuk semua menu.',
    discountType: 'percentage',
    discountValue: 10,
    minPurchase: 0,
    startDate: '01 Aug 2026',
    endDate: '31 Oct 2026',
    isActive: true,
    code: 'PELAJAR10',
  },
  {
    id: 6,
    name: 'Birthday Special',
    description: 'Di bulan ulang tahunmu, nikmati 1 porsi Lava Cake gratis untuk setiap transaksi.',
    discountType: 'nominal',
    discountValue: 38000,
    minPurchase: 100000,
    startDate: '01 Sep 2026',
    endDate: '30 Sep 2026',
    isActive: false,
    code: 'BIRTHDAY',
  },
  {
    id: 7,
    name: 'Free Dessert Monday',
    description: 'Setiap hari Senin, beli makanan utama dan dapatkan dessert pilihan gratis.',
    discountType: 'nominal',
    discountValue: 20000,
    minPurchase: 45000,
    startDate: '01 Sep 2026',
    endDate: '30 Sep 2026',
    isActive: false,
    code: 'MONDESSERT',
  },
];

// ---- DASHBOARD STATS ----
export const dashboardStats = {
  todaySales: 2450000,
  todayOrders: 48,
  totalMenu: 32,
  processingOrders: 5,
};

// ---- SALES SUMMARY (7 hari terakhir) ----
export const salesSummary = [
  { day: 'Senin', date: '11 Sep', sales: 1850000 },
  { day: 'Selasa', date: '12 Sep', sales: 2100000 },
  { day: 'Rabu', date: '13 Sep', sales: 1650000 },
  { day: 'Kamis', date: '14 Sep', sales: 2350000 },
  { day: "Jum'at", date: '15 Sep', sales: 3100000 },
  { day: 'Sabtu', date: '16 Sep', sales: 3800000 },
  { day: 'Minggu', date: '17 Sep', sales: 2450000 },
];

// ---- TOP PRODUCTS ----
export const topProducts = [
  { name: 'Es Kopi Susu', category: 'Coffee', sold: 124, revenue: 3100000 },
  { name: 'Cappuccino', category: 'Coffee', sold: 98, revenue: 2744000 },
  { name: 'Nasi Goreng Spesial', category: 'Makanan', sold: 87, revenue: 3045000 },
  { name: 'Tiramisu', category: 'Dessert', sold: 75, revenue: 2625000 },
  { name: 'Kentang Goreng', category: 'Snack', sold: 112, revenue: 2016000 },
];

// ---- RECENT ORDERS (5 terbaru untuk dashboard) ----
export const recentOrders = transactions.slice(0, 5);

// ---- DUMMY CART (untuk halaman Pesanan) ----
export const dummyCart = [
  { id: 8, name: 'Es Kopi Susu', price: 25000, qty: 2 },
  { id: 17, name: 'Nasi Goreng Spesial', price: 35000, qty: 1 },
  { id: 23, name: 'Kentang Goreng', price: 18000, qty: 1 },
  { id: 28, name: 'Tiramisu', price: 35000, qty: 1 },
];

// ---- PAYMENT DATA ----
export const paymentData = [
  {
    id: 'PAY-0048',
    transactionId: 'TRX-0048',
    customerName: 'Budi Santoso',
    amount: 85000,
    method: 'QRIS',
    status: 'Menunggu',
    datetime: '17 Sep 2026, 12:45',
    notes: 'Menunggu konfirmasi pembayaran QRIS',
  },
  {
    id: 'PAY-0047',
    transactionId: 'TRX-0047',
    customerName: 'Siti Aisyah',
    amount: 81000,
    method: 'Cash',
    status: 'Lunas',
    datetime: '17 Sep 2026, 12:31',
    notes: 'Pembayaran tunai diterima',
  },
  {
    id: 'PAY-0046',
    transactionId: 'TRX-0046',
    customerName: 'Rudi Hermawan',
    amount: 40000,
    method: 'Debit',
    status: 'Lunas',
    datetime: '17 Sep 2026, 12:10',
    notes: 'Kartu debit BCA',
  },
  {
    id: 'PAY-0045',
    transactionId: 'TRX-0045',
    customerName: 'Dewi Rahayu',
    amount: 106000,
    method: 'E-Wallet',
    status: 'Lunas',
    datetime: '17 Sep 2026, 11:55',
    notes: 'GoPay',
  },
  {
    id: 'PAY-0044',
    transactionId: 'TRX-0044',
    customerName: 'Ahmad Fauzi',
    amount: 101000,
    method: 'Cash',
    status: 'Dibatalkan',
    datetime: '17 Sep 2026, 11:30',
    notes: 'Pesanan dibatalkan pelanggan',
  },
  {
    id: 'PAY-0043',
    transactionId: 'TRX-0043',
    customerName: 'Rina Kartika',
    amount: 96000,
    method: 'QRIS',
    status: 'Lunas',
    datetime: '17 Sep 2026, 11:05',
    notes: 'Scan QRIS berhasil',
  },
  {
    id: 'PAY-0042',
    transactionId: 'TRX-0042',
    customerName: 'Hendra Gunawan',
    amount: 79000,
    method: 'Debit',
    status: 'Lunas',
    datetime: '17 Sep 2026, 10:45',
    notes: 'Kartu debit Mandiri',
  },
  {
    id: 'PAY-0041',
    transactionId: 'TRX-0041',
    customerName: 'Yanti Susilo',
    amount: 100000,
    method: 'E-Wallet',
    status: 'Menunggu',
    datetime: '17 Sep 2026, 10:20',
    notes: 'OVO - menunggu pembayaran',
  },
];

// ---- HELPER: Format Rupiah ----
export const formatRupiah = (amount) =>
  'Rp ' + amount.toLocaleString('id-ID');

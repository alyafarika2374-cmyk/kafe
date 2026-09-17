/**
 * FARIKA CAFE - POINT OF SALES (POS) JAVASCRIPT
 * Frontend Logic, State Management, Mock Data & Interactivity
 */

document.addEventListener('DOMContentLoaded', () => {
  // ==========================================
  // 1. DATA MASTER & MOCK DATA
  // ==========================================

  const MENU_DATA = [
    {
      id: 1,
      name: 'Es Kopi Susu',
      category: 'Coffee',
      price: 18000,
      image: 'ast/img/gallery/cafe/iced-coffee.jpg',
      fallback: 'https://images.unsplash.com/photo-1517701604599-bb29b565090c?w=500&auto=format&fit=crop&q=60',
      available: true
    },
    {
      id: 2,
      name: 'Americano',
      category: 'Coffee',
      price: 15000,
      image: 'ast/img/gallery/cafe/americano.jpg',
      fallback: 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=500&auto=format&fit=crop&q=60',
      available: true
    },
    {
      id: 3,
      name: 'Cafe Latte',
      category: 'Coffee',
      price: 20000,
      image: 'ast/img/gallery/cafe/kopi-berkualitas.jpg',
      fallback: 'https://images.unsplash.com/photo-1534778101976-62847782c213?w=500&auto=format&fit=crop&q=60',
      available: true
    },
    {
      id: 4,
      name: 'Matcha Latte',
      category: 'Non Coffee',
      price: 22000,
      image: 'ast/img/gallery/cafe/iced-matcha.jpg',
      fallback: 'https://images.unsplash.com/photo-1536256263959-770b48d82b0a?w=500&auto=format&fit=crop&q=60',
      available: true
    },
    {
      id: 5,
      name: 'Chocolate',
      category: 'Non Coffee',
      price: 20000,
      image: 'ast/img/gallery/cafe/iced-coklat.jpg',
      fallback: 'https://images.unsplash.com/photo-1542990253-0d0f5be5f0ed?w=500&auto=format&fit=crop&q=60',
      available: true
    },
    {
      id: 6,
      name: 'Croffle',
      category: 'Snack',
      price: 18000,
      image: 'https://images.unsplash.com/photo-1598373182133-52452f7691ef?w=500&auto=format&fit=crop&q=60',
      fallback: 'ast/img/gallery/cafe/roti-bakar.jpg',
      available: true
    },
    {
      id: 7,
      name: 'French Fries',
      category: 'Snack',
      price: 15000,
      image: 'https://images.unsplash.com/photo-1573080496219-bb080dd4f877?w=500&auto=format&fit=crop&q=60',
      fallback: 'ast/img/gallery/cafe/Pisang-Goreng.jpg',
      available: true
    },
    {
      id: 8,
      name: 'Rice Bowl Teriyaki',
      category: 'Makanan',
      price: 25000,
      image: 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=500&auto=format&fit=crop&q=60',
      fallback: 'ast/img/gallery/cafe/nasi-goreng.jpg',
      available: true
    },
    {
      id: 9,
      name: 'Caramel Macchiato',
      category: 'Coffee',
      price: 24000,
      image: 'https://images.unsplash.com/photo-1485808191679-5f86510681a2?w=500&auto=format&fit=crop&q=60',
      fallback: 'ast/img/gallery/cafe/iced-coffee.jpg',
      available: true
    },
    {
      id: 10,
      name: 'Taro Latte',
      category: 'Non Coffee',
      price: 22000,
      image: 'ast/img/gallery/cafe/iced-taro.jpg',
      fallback: 'https://images.unsplash.com/photo-1551024709-8f23befc6f87?w=500&auto=format&fit=crop&q=60',
      available: true
    },
    {
      id: 11,
      name: 'Red Velvet Latte',
      category: 'Non Coffee',
      price: 22000,
      image: 'ast/img/gallery/cafe/iced-red-velvet.jpg',
      fallback: 'https://images.unsplash.com/photo-1551024709-8f23befc6f87?w=500&auto=format&fit=crop&q=60',
      available: true
    },
    {
      id: 12,
      name: 'Beef Burger Deluxe',
      category: 'Makanan',
      price: 32000,
      image: 'ast/img/gallery/cafe/beef-burger.jpg',
      fallback: 'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=500&auto=format&fit=crop&q=60',
      available: true
    },
    {
      id: 13,
      name: 'Nasi Goreng Farika',
      category: 'Makanan',
      price: 28000,
      image: 'ast/img/gallery/cafe/nasi-goreng.jpg',
      fallback: 'https://images.unsplash.com/photo-1603133872878-684f208fb84b?w=500&auto=format&fit=crop&q=60',
      available: true
    },
    {
      id: 14,
      name: 'Spaghetti Carbonara',
      category: 'Makanan',
      price: 30000,
      image: 'ast/img/gallery/cafe/carbonara.jpg',
      fallback: 'https://images.unsplash.com/photo-1612874742237-6526221588e3?w=500&auto=format&fit=crop&q=60',
      available: true
    },
    {
      id: 15,
      name: 'Roti Bakar Coklat',
      category: 'Snack',
      price: 18000,
      image: 'ast/img/gallery/cafe/roti-bakar.jpg',
      fallback: 'https://images.unsplash.com/photo-1584776296944-ab6fb57b0bdd?w=500&auto=format&fit=crop&q=60',
      available: true
    },
    {
      id: 16,
      name: 'Pisang Goreng Crispy',
      category: 'Snack',
      price: 16000,
      image: 'ast/img/gallery/cafe/Pisang-Goreng.jpg',
      fallback: 'https://images.unsplash.com/photo-1603532648955-039310d9ed75?w=500&auto=format&fit=crop&q=60',
      available: true
    },
    {
      id: 17,
      name: 'Dimsum Platter',
      category: 'Snack',
      price: 22000,
      image: 'ast/img/gallery/cafe/dimsum.jpg',
      fallback: 'https://images.unsplash.com/photo-1496116218417-1a781b1c416c?w=500&auto=format&fit=crop&q=60',
      available: true
    },
    {
      id: 18,
      name: 'Chocolate Cake',
      category: 'Dessert',
      price: 26000,
      image: 'ast/img/gallery/cafe/chocolate-cake.jpg',
      fallback: 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=500&auto=format&fit=crop&q=60',
      available: true
    },
    {
      id: 19,
      name: 'Tiramisu Classic',
      category: 'Dessert',
      price: 28000,
      image: 'https://images.unsplash.com/photo-1571877227200-a0d98ea607e9?w=500&auto=format&fit=crop&q=60',
      fallback: 'ast/img/gallery/cafe/chocolate-cake.jpg',
      available: true
    },
    {
      id: 20,
      name: 'Churros Cinnamon',
      category: 'Dessert',
      price: 18000,
      image: 'https://images.unsplash.com/photo-1624300629298-e9de39c13be5?w=500&auto=format&fit=crop&q=60',
      fallback: 'ast/img/gallery/cafe/roti-bakar.jpg',
      available: true
    }
  ];

  const PROMO_DATA = [
    {
      id: 'promo-1',
      code: 'NGOPIHEMAT',
      title: 'Promo Ngopi Hemat',
      desc: 'Diskon 20% untuk semua varian Kopi pilihan dengan minimal transaksi Rp 50.000.',
      type: 'percentage',
      discountValue: 0.20,
      minPurchase: 50000,
      period: '1 Sep - 30 Sep 2024',
      status: 'Aktif',
      image: 'https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?w=600&auto=format&fit=crop&q=60'
    },
    {
      id: 'promo-2',
      code: 'BUY2GET1',
      title: 'Buy 2 Get 1 Free',
      desc: 'Beli 2 cup minuman varian apa saja, gratis 1 Americano dingin.',
      type: 'fixed',
      discountValue: 15000,
      minPurchase: 36000,
      period: 'Setiap Hari Selasa & Kamis',
      status: 'Aktif',
      image: 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=600&auto=format&fit=crop&q=60'
    },
    {
      id: 'promo-3',
      code: 'SARAPAN10',
      title: 'Paket Sarapan Seru',
      desc: 'Potongan Rp 10.000 untuk kombinasi Coffee + Croffle/Croissant sebelum jam 11.00 WIB.',
      type: 'fixed',
      discountValue: 10000,
      minPurchase: 35000,
      period: '07:00 - 11:00 WIB Setiap Hari',
      status: 'Aktif',
      image: 'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=600&auto=format&fit=crop&q=60'
    },
    {
      id: 'promo-4',
      code: 'WEEKEND15',
      title: 'Weekend Santai Snack',
      desc: 'Diskon 15% untuk semua menu kategori Snack dan Dessert favorit.',
      type: 'percentage',
      discountValue: 0.15,
      minPurchase: 40000,
      period: 'Sabtu & Minggu',
      status: 'Aktif',
      image: 'https://images.unsplash.com/photo-1579888944880-d98341245702?w=600&auto=format&fit=crop&q=60'
    },
    {
      id: 'promo-5',
      code: 'PELAJAR10',
      title: 'Diskon Mahasiswa & Pelajar',
      desc: 'Potongan hemat 10% untuk nongkrong nugas santai setiap Senin - Kamis.',
      type: 'percentage',
      discountValue: 0.10,
      minPurchase: 30000,
      period: 'Senin - Kamis',
      status: 'Aktif',
      image: 'https://images.unsplash.com/photo-1521017432531-fbd92d768814?w=600&auto=format&fit=crop&q=60'
    },
    {
      id: 'promo-6',
      code: 'SWEET12',
      title: 'Sweet Treats Dessert',
      desc: 'Potongan langsung Rp 12.000 untuk pembelian cake & dessert manis pilihan.',
      type: 'fixed',
      discountValue: 12000,
      minPurchase: 45000,
      period: 'Periode Berakhir Agustus 2024',
      status: 'Berakhir',
      image: 'https://images.unsplash.com/photo-1587314168485-3236d6710814?w=600&auto=format&fit=crop&q=60'
    }
  ];

  let TRANSACTIONS_DATA = [
    {
      trxId: 'TRX-20240917-001',
      date: '17 Sep 2024, 11:42',
      dateFilter: 'hari-ini',
      items: [
        { name: 'Es Kopi Susu', qty: 2, price: 18000, subtotal: 36000 },
        { name: 'Croffle', qty: 1, price: 18000, subtotal: 18000 }
      ],
      totalItems: 3,
      subtotal: 54000,
      discount: 0,
      total: 54000,
      paymentMethod: 'QRIS',
      status: 'Selesai'
    },
    {
      trxId: 'TRX-20240917-002',
      date: '17 Sep 2024, 11:15',
      dateFilter: 'hari-ini',
      items: [
        { name: 'Americano', qty: 1, price: 15000, subtotal: 15000 },
        { name: 'French Fries', qty: 1, price: 15000, subtotal: 15000 }
      ],
      totalItems: 2,
      subtotal: 30000,
      discount: 0,
      total: 30000,
      paymentMethod: 'Cash',
      status: 'Selesai'
    },
    {
      trxId: 'TRX-20240917-003',
      date: '17 Sep 2024, 10:30',
      dateFilter: 'hari-ini',
      items: [
        { name: 'Matcha Latte', qty: 1, price: 22000, subtotal: 22000 },
        { name: 'Rice Bowl Teriyaki', qty: 1, price: 25000, subtotal: 25000 },
        { name: 'Chocolate Cake', qty: 1, price: 26000, subtotal: 26000 }
      ],
      totalItems: 3,
      subtotal: 73000,
      discount: 10000,
      total: 63000,
      paymentMethod: 'Debit',
      status: 'Selesai'
    },
    {
      trxId: 'TRX-20240917-004',
      date: '17 Sep 2024, 09:50',
      dateFilter: 'hari-ini',
      items: [
        { name: 'Es Kopi Susu', qty: 3, price: 18000, subtotal: 54000 },
        { name: 'Dimsum Platter', qty: 1, price: 22000, subtotal: 22000 }
      ],
      totalItems: 4,
      subtotal: 76000,
      discount: 15200,
      total: 60800,
      paymentMethod: 'QRIS',
      status: 'Selesai'
    },
    {
      trxId: 'TRX-20240916-015',
      date: '16 Sep 2024, 19:20',
      dateFilter: 'kemarin',
      items: [
        { name: 'Cafe Latte', qty: 2, price: 20000, subtotal: 40000 },
        { name: 'Beef Burger Deluxe', qty: 1, price: 32000, subtotal: 32000 }
      ],
      totalItems: 3,
      subtotal: 72000,
      discount: 0,
      total: 72000,
      paymentMethod: 'Credit',
      status: 'Selesai'
    },
    {
      trxId: 'TRX-20240916-014',
      date: '16 Sep 2024, 16:45',
      dateFilter: 'kemarin',
      items: [
        { name: 'Chocolate', qty: 2, price: 20000, subtotal: 40000 },
        { name: 'Pisang Goreng Crispy', qty: 1, price: 16000, subtotal: 16000 }
      ],
      totalItems: 3,
      subtotal: 56000,
      discount: 8400,
      total: 47600,
      paymentMethod: 'Cash',
      status: 'Selesai'
    },
    {
      trxId: 'TRX-20240915-021',
      date: '15 Sep 2024, 15:10',
      dateFilter: '7-hari',
      items: [
        { name: 'Spaghetti Carbonara', qty: 2, price: 30000, subtotal: 60000 },
        { name: 'Americano', qty: 2, price: 15000, subtotal: 30000 }
      ],
      totalItems: 4,
      subtotal: 90000,
      discount: 18000,
      total: 72000,
      paymentMethod: 'QRIS',
      status: 'Selesai'
    },
    {
      trxId: 'TRX-20240914-008',
      date: '14 Sep 2024, 14:05',
      dateFilter: '7-hari',
      items: [
        { name: 'Taro Latte', qty: 1, price: 22000, subtotal: 22000 },
        { name: 'Tiramisu Classic', qty: 1, price: 28000, subtotal: 28000 }
      ],
      totalItems: 2,
      subtotal: 50000,
      discount: 0,
      total: 50000,
      paymentMethod: 'Cash',
      status: 'Selesai'
    }
  ];

  // ==========================================
  // 2. STATE APLIKASI
  // ==========================================

  let currentView = 'dashboard';
  let activeCategory = 'Semua';
  let searchQuery = '';
  let orderType = 'dine-in';
  let appliedPromo = null; // { code, discountValue, type }
  
  // Cart items: { id, name, price, qty, image, category }
  let cart = [
    {
      id: 1,
      name: 'Es Kopi Susu',
      category: 'Coffee',
      price: 18000,
      qty: 2,
      image: 'ast/img/gallery/cafe/iced-coffee.jpg'
    },
    {
      id: 6,
      name: 'Croffle',
      category: 'Snack',
      price: 18000,
      qty: 1,
      image: 'https://images.unsplash.com/photo-1598373182133-52452f7691ef?w=500&auto=format&fit=crop&q=60'
    }
  ];

  // Payment state
  let selectedPaymentMethod = 'Cash'; // Cash, QRIS, Debit, Credit
  let cashPaidAmount = 0;

  // ==========================================
  // 3. ELEMEN DOM UTAMA
  // ==========================================

  // Nav buttons
  const navButtons = document.querySelectorAll('.menu-item-btn');
  const viewElements = {
    dashboard: document.getElementById('view-dashboard'),
    menu: document.getElementById('view-menu'),
    history: document.getElementById('view-history'),
    payment: document.getElementById('view-payment'),
    promotions: document.getElementById('view-promotions')
  };

  const topbarTitle = document.getElementById('topbar-title');
  const topbarSubtitle = document.getElementById('topbar-subtitle');
  const liveClockEl = document.getElementById('live-clock');

  // Menu Elements
  const menuSearchInput = document.getElementById('menu-search-input');
  const searchClearBtn = document.getElementById('search-clear-btn');
  const categoryFiltersContainer = document.getElementById('category-filter-strip');
  const menuGridContainer = document.getElementById('menu-cards-grid');

  // Cart Elements
  const cartItemsList = document.getElementById('cart-items-list');
  const cartCountBadge = document.getElementById('cart-count-badge');
  const cartClearBtn = document.getElementById('cart-clear-btn');
  const orderTypeDineIn = document.getElementById('btn-order-dinein');
  const orderTypeTakeAway = document.getElementById('btn-order-takeaway');
  const subtotalDisplay = document.getElementById('cart-subtotal');
  const discountDisplay = document.getElementById('cart-discount');
  const totalDisplay = document.getElementById('cart-total');
  const checkoutBtn = document.getElementById('btn-checkout-now');
  const couponInput = document.getElementById('coupon-input');
  const couponApplyBtn = document.getElementById('coupon-apply-btn');
  const appliedPromoTag = document.getElementById('applied-promo-tag');
  const appliedPromoCodeText = document.getElementById('applied-promo-code-text');
  const removePromoBtn = document.getElementById('remove-promo-btn');

  // Payment Page Elements
  const payOrderItemsList = document.getElementById('pay-order-items-list');
  const paySubtotalText = document.getElementById('pay-subtotal-text');
  const payDiscountText = document.getElementById('pay-discount-text');
  const payTotalText = document.getElementById('pay-total-text');
  const payMethodButtons = document.querySelectorAll('.pay-method-btn');
  const cashBox = document.getElementById('cash-calculation-box');
  const qrisBox = document.getElementById('qris-display-box');
  const cardBox = document.getElementById('card-pay-box');
  const cashInput = document.getElementById('cash-amount-input');
  const changeValueDisplay = document.getElementById('change-value-display');
  const confirmPaymentBtn = document.getElementById('btn-confirm-payment');

  // History Elements
  const historyTableBody = document.getElementById('history-table-body');
  const historySearchInput = document.getElementById('history-search-input');
  const historyDateFilter = document.getElementById('history-date-filter');
  const historyMethodFilter = document.getElementById('history-method-filter');

  // Modals
  const detailModal = document.getElementById('trx-detail-modal');
  const detailModalClose = document.getElementById('detail-modal-close');
  const detailModalContent = document.getElementById('detail-modal-body-content');
  
  const successModal = document.getElementById('payment-success-modal');
  const successReceiptContent = document.getElementById('success-receipt-content');
  const printReceiptBtn = document.getElementById('btn-print-receipt');
  const newTrxBtn = document.getElementById('btn-new-transaction');

  // Toast
  const posToast = document.getElementById('pos-toast');
  const toastMessage = document.getElementById('toast-message');

  // ==========================================
  // 4. FORMATTERS & UTILS
  // ==========================================

  const formatRupiah = (number) => {
    return 'Rp ' + Number(number || 0).toLocaleString('id-ID');
  };

  const showToast = (message) => {
    if (!posToast) return;
    toastMessage.textContent = message;
    posToast.classList.add('show');
    clearTimeout(window.toastTimer);
    window.toastTimer = setTimeout(() => {
      posToast.classList.remove('show');
    }, 2800);
  };

  // Live Clock
  const updateClock = () => {
    if (!liveClockEl) return;
    const now = new Date();
    const options = { weekday: 'short', day: 'numeric', month: 'short', hour: '2-digit', minute: '2-digit' };
    liveClockEl.textContent = now.toLocaleDateString('id-ID', options) + ' WIB';
  };
  setInterval(updateClock, 1000);
  updateClock();

  // ==========================================
  // 5. NAVIGATION SWITCHER (HANYA 5 MENU)
  // ==========================================

  const viewTitles = {
    dashboard: {
      title: 'Dashboard Ringkasan',
      subtitle: 'Pantau performa penjualan, pesanan, dan tren cafe hari ini'
    },
    menu: {
      title: 'Menu Cafe Farika',
      subtitle: 'Pilih kopi, minuman segar, dan hidangan cafe untuk pesanan pelanggan'
    },
    history: {
      title: 'Riwayat Pembelian',
      subtitle: 'Daftar semua transaksi yang telah selesai beserta status pembayaran'
    },
    payment: {
      title: 'Pembayaran & Checkout',
      subtitle: 'Selesaikan transaksi dengan berbagai metode pembayaran kasir'
    },
    promotions: {
      title: 'Promosi & Penawaran Spesial',
      subtitle: 'Kupon diskon dan promosi aktif untuk memanjakan pelanggan'
    }
  };

  const switchView = (targetView) => {
    currentView = targetView;

    // Update nav active
    navButtons.forEach(btn => {
      if (btn.dataset.view === targetView) {
        btn.classList.add('active');
      } else {
        btn.classList.remove('active');
      }
    });

    // Toggle view visibility
    Object.keys(viewElements).forEach(viewKey => {
      const el = viewElements[viewKey];
      if (el) {
        if (viewKey === targetView) {
          el.classList.add('active');
        } else {
          el.classList.remove('active');
        }
      }
    });

    // Update Topbar
    if (viewTitles[targetView]) {
      topbarTitle.textContent = viewTitles[targetView].title;
      topbarSubtitle.textContent = viewTitles[targetView].subtitle;
    }

    // View specific init
    if (targetView === 'dashboard') {
      renderDashboard();
    } else if (targetView === 'menu') {
      renderMenuCards();
      renderCart();
    } else if (targetView === 'payment') {
      renderPaymentPage();
    } else if (targetView === 'history') {
      renderHistoryTable();
    } else if (targetView === 'promotions') {
      renderPromotions();
    }
  };

  navButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const view = btn.dataset.view;
      if (view) switchView(view);
    });
  });

  // ==========================================
  // 6. DASHBOARD LOGIC & RENDERING
  // ==========================================

  const renderDashboard = () => {
    // Calculate dashboard statistics from TRANSACTIONS_DATA
    const todayTrx = TRANSACTIONS_DATA.filter(t => t.dateFilter === 'hari-ini');
    const totalSalesToday = todayTrx.reduce((acc, t) => acc + t.total, 0);
    const totalTrxCount = TRANSACTIONS_DATA.length;
    const totalOrdersToday = todayTrx.reduce((acc, t) => acc + t.totalItems, 0);
    const activePromosCount = PROMO_DATA.filter(p => p.status === 'Aktif').length;

    // KPI Elements
    document.getElementById('dash-total-sales').textContent = formatRupiah(totalSalesToday);
    document.getElementById('dash-total-purchases').textContent = `${totalTrxCount} Transaksi`;
    document.getElementById('dash-today-orders').textContent = `${totalOrdersToday} Porsi`;
    document.getElementById('dash-active-promos').textContent = `${activePromosCount} Promo`;

    // Render Recent Transactions
    const recentTrxBody = document.getElementById('dashboard-recent-trx-body');
    if (recentTrxBody) {
      recentTrxBody.innerHTML = '';
      const recents = TRANSACTIONS_DATA.slice(0, 5);
      recents.forEach(trx => {
        const itemNames = trx.items.map(i => `${i.name} (x${i.qty})`).join(', ');
        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td><strong>${trx.trxId}</strong></td>
          <td>${trx.date}</td>
          <td style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" title="${itemNames}">${itemNames}</td>
          <td><strong>${formatRupiah(trx.total)}</strong></td>
          <td><span class="pay-badge">${trx.paymentMethod}</span></td>
          <td><span class="status-pill success"><span style="font-size: 8px;">●</span> Selesai</span></td>
        `;
        recentTrxBody.appendChild(tr);
      });
    }

    // Render Top Selling Items
    const topMenuList = document.getElementById('dashboard-top-menu-list');
    if (topMenuList) {
      const topSellingItems = [
        { name: 'Es Kopi Susu', category: 'Coffee', sold: 74, rev: 1332000, img: 'ast/img/gallery/cafe/iced-coffee.jpg' },
        { name: 'Croffle', category: 'Snack', sold: 48, rev: 864000, img: 'https://images.unsplash.com/photo-1598373182133-52452f7691ef?w=500&auto=format&fit=crop&q=60' },
        { name: 'Americano', category: 'Coffee', sold: 36, rev: 540000, img: 'ast/img/gallery/cafe/americano.jpg' },
        { name: 'French Fries', category: 'Snack', sold: 31, rev: 465000, img: 'https://images.unsplash.com/photo-1573080496219-bb080dd4f877?w=500&auto=format&fit=crop&q=60' },
        { name: 'Matcha Latte', category: 'Non Coffee', sold: 28, rev: 616000, img: 'ast/img/gallery/cafe/iced-matcha.jpg' }
      ];

      topMenuList.innerHTML = '';
      topSellingItems.forEach((item, idx) => {
        const row = document.createElement('div');
        row.className = 'top-menu-row';
        row.innerHTML = `
          <div class="top-menu-left">
            <span class="rank-badge ${idx === 0 ? 'gold' : ''}">#${idx + 1}</span>
            <img class="top-menu-thumb" src="${item.img}" alt="${item.name}" onerror="this.src='https://images.unsplash.com/photo-1517701604599-bb29b565090c?w=200&auto=format&fit=crop&q=60'">
            <div class="top-menu-info">
              <span class="top-menu-title">${item.name}</span>
              <span class="top-menu-category">${item.category}</span>
            </div>
          </div>
          <div class="top-menu-right">
            <span class="top-menu-sold">${item.sold} Terjual</span>
            <span class="top-menu-rev">${formatRupiah(item.rev)}</span>
          </div>
        `;
        topMenuList.appendChild(row);
      });
    }
  };

  // ==========================================
  // 7. MENU & CATEGORY FILTERING LOGIC
  // ==========================================

  const renderCategoryFilters = () => {
    if (!categoryFiltersContainer) return;
    const categories = ['Semua', 'Coffee', 'Non Coffee', 'Makanan', 'Snack', 'Dessert'];
    categoryFiltersContainer.innerHTML = '';

    categories.forEach(cat => {
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.className = `cat-pill-btn ${cat === activeCategory ? 'active' : ''}`;
      
      const count = cat === 'Semua' 
        ? MENU_DATA.length 
        : MENU_DATA.filter(m => m.category.toLowerCase() === cat.toLowerCase()).length;

      btn.innerHTML = `${cat} <span class="cat-badge-count">${count}</span>`;
      btn.addEventListener('click', () => {
        activeCategory = cat;
        renderCategoryFilters();
        renderMenuCards();
      });
      categoryFiltersContainer.appendChild(btn);
    });
  };

  const renderMenuCards = () => {
    if (!menuGridContainer) return;
    menuGridContainer.innerHTML = '';

    // Filter by Category
    let filtered = MENU_DATA;
    if (activeCategory !== 'Semua') {
      filtered = filtered.filter(item => item.category.toLowerCase() === activeCategory.toLowerCase());
    }

    // Filter by Search Query
    if (searchQuery.trim() !== '') {
      const query = searchQuery.toLowerCase().trim();
      filtered = filtered.filter(item => 
        item.name.toLowerCase().includes(query) ||
        item.category.toLowerCase().includes(query)
      );
    }

    if (filtered.length === 0) {
      menuGridContainer.innerHTML = `
        <div class="empty-menu-state">
          <svg class="empty-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            <line x1="8" y1="11" x2="14" y2="11"></line>
          </svg>
          <div style="font-weight: 700; font-size: 15px; color: var(--text-main);">Menu tidak ditemukan</div>
          <div style="font-size: 13px; margin-top: 4px;">Coba gunakan kata kunci lain atau pilih kategori Semua.</div>
        </div>
      `;
      return;
    }

    filtered.forEach(item => {
      const card = document.createElement('div');
      card.className = 'menu-card-item';
      card.innerHTML = `
        <div class="menu-img-wrap">
          <img src="${item.image}" alt="${item.name}" loading="lazy" onerror="this.onerror=null; this.src='${item.fallback}';">
          <span class="menu-card-badge">${item.category}</span>
          <span class="menu-avail-badge">Tersedia</span>
        </div>
        <div class="menu-card-body">
          <div>
            <div class="menu-title-text">${item.name}</div>
            <div class="menu-category-text">${item.category}</div>
          </div>
          <div class="menu-card-footer">
            <span class="menu-price-text">${formatRupiah(item.price)}</span>
            <button class="btn-add-item" data-id="${item.id}" title="Tambah ke Pesanan">
              +
            </button>
          </div>
        </div>
      `;

      const addBtn = card.querySelector('.btn-add-item');
      addBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        addToCart(item);
      });

      menuGridContainer.appendChild(card);
    });
  };

  // Menu Search Listeners
  if (menuSearchInput) {
    menuSearchInput.addEventListener('input', (e) => {
      searchQuery = e.target.value;
      if (searchClearBtn) {
        searchClearBtn.style.display = searchQuery ? 'block' : 'none';
      }
      renderMenuCards();
    });
  }

  if (searchClearBtn) {
    searchClearBtn.addEventListener('click', () => {
      menuSearchInput.value = '';
      searchQuery = '';
      searchClearBtn.style.display = 'none';
      menuSearchInput.focus();
      renderMenuCards();
    });
  }

  // ==========================================
  // 8. KERANJANG PESANAN ("PESANAN SAYA")
  // ==========================================

  const addToCart = (item) => {
    const existing = cart.find(c => c.id === item.id);
    if (existing) {
      existing.qty += 1;
    } else {
      cart.push({
        id: item.id,
        name: item.name,
        price: item.price,
        qty: 1,
        image: item.image,
        fallback: item.fallback,
        category: item.category
      });
    }
    renderCart();
    showToast(`${item.name} ditambahkan ke pesanan`);
  };

  const updateCartQty = (id, delta) => {
    const item = cart.find(c => c.id === id);
    if (!item) return;

    item.qty += delta;
    if (item.qty <= 0) {
      removeFromCart(id);
      return;
    }
    renderCart();
  };

  const removeFromCart = (id) => {
    const index = cart.findIndex(c => c.id === id);
    if (index > -1) {
      const removed = cart.splice(index, 1);
      renderCart();
      if (removed[0]) {
        showToast(`${removed[0].name} dihapus dari pesanan`);
      }
    }
  };

  const clearCart = () => {
    cart = [];
    appliedPromo = null;
    if (appliedPromoTag) appliedPromoTag.classList.remove('visible');
    renderCart();
    showToast('Keranjang pesanan dikosongkan');
  };

  if (cartClearBtn) {
    cartClearBtn.addEventListener('click', clearCart);
  }

  // Order type switcher
  if (orderTypeDineIn && orderTypeTakeAway) {
    orderTypeDineIn.addEventListener('click', () => {
      orderType = 'dine-in';
      orderTypeDineIn.classList.add('active');
      orderTypeTakeAway.classList.remove('active');
    });
    orderTypeTakeAway.addEventListener('click', () => {
      orderType = 'take-away';
      orderTypeTakeAway.classList.add('active');
      orderTypeDineIn.classList.remove('active');
    });
  }

  // Calculate Totals
  const calculateTotals = () => {
    const subtotal = cart.reduce((acc, item) => acc + (item.price * item.qty), 0);
    let discount = 0;

    if (appliedPromo && subtotal > 0) {
      if (subtotal >= (appliedPromo.minPurchase || 0)) {
        if (appliedPromo.type === 'percentage') {
          discount = Math.round(subtotal * appliedPromo.discountValue);
        } else if (appliedPromo.type === 'fixed') {
          discount = appliedPromo.discountValue;
        }
      } else {
        // Not meeting min purchase
        discount = 0;
      }
    }

    // Cap discount to subtotal
    if (discount > subtotal) discount = subtotal;
    const total = Math.max(0, subtotal - discount);

    return { subtotal, discount, total };
  };

  const renderCart = () => {
    if (!cartItemsList) return;

    const totalCount = cart.reduce((acc, item) => acc + item.qty, 0);
    if (cartCountBadge) {
      cartCountBadge.textContent = `${totalCount} item`;
    }

    if (cart.length === 0) {
      cartItemsList.innerHTML = `
        <div class="cart-empty-box">
          <svg class="cart-empty-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <circle cx="9" cy="21" r="1"></circle>
            <circle cx="20" cy="21" r="1"></circle>
            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
          </svg>
          <div class="cart-empty-title">Pesanan Masih Kosong</div>
          <div class="cart-empty-desc">Pilih menu di sebelah kiri untuk menambah ke keranjang</div>
        </div>
      `;
      if (subtotalDisplay) subtotalDisplay.textContent = formatRupiah(0);
      if (discountDisplay) discountDisplay.textContent = formatRupiah(0);
      if (totalDisplay) totalDisplay.textContent = formatRupiah(0);
      if (checkoutBtn) checkoutBtn.disabled = true;
      return;
    }

    if (checkoutBtn) checkoutBtn.disabled = false;
    cartItemsList.innerHTML = '';

    cart.forEach(item => {
      const card = document.createElement('div');
      card.className = 'cart-item-card';
      card.innerHTML = `
        <img class="cart-item-img" src="${item.image}" alt="${item.name}" onerror="this.onerror=null; this.src='${item.fallback || 'ast/img/gallery/cafe/iced-coffee.jpg'}';">
        <div class="cart-item-info">
          <span class="cart-item-name">${item.name}</span>
          <span class="cart-item-price">${formatRupiah(item.price)}</span>
        </div>
        <div class="cart-item-controls">
          <button class="qty-btn btn-minus" data-id="${item.id}">-</button>
          <span class="qty-display">${item.qty}</span>
          <button class="qty-btn btn-plus" data-id="${item.id}">+</button>
          <button class="cart-remove-item" data-id="${item.id}" title="Hapus item">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="3 6 5 6 21 6"></polyline>
              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
            </svg>
          </button>
        </div>
      `;

      card.querySelector('.btn-minus').addEventListener('click', () => updateCartQty(item.id, -1));
      card.querySelector('.btn-plus').addEventListener('click', () => updateCartQty(item.id, 1));
      card.querySelector('.cart-remove-item').addEventListener('click', () => removeFromCart(item.id));

      cartItemsList.appendChild(card);
    });

    const { subtotal, discount, total } = calculateTotals();
    if (subtotalDisplay) subtotalDisplay.textContent = formatRupiah(subtotal);
    if (discountDisplay) discountDisplay.textContent = discount > 0 ? `- ${formatRupiah(discount)}` : formatRupiah(0);
    if (totalDisplay) totalDisplay.textContent = formatRupiah(total);
  };

  // Promo code apply logic
  const applyPromoCode = (code) => {
    if (!code) return;
    const foundPromo = PROMO_DATA.find(p => p.code.toUpperCase() === code.toUpperCase().trim());
    if (!foundPromo) {
      showToast('Kode promo tidak ditemukan!');
      return;
    }
    if (foundPromo.status !== 'Aktif') {
      showToast('Maaf, promo ini sudah berakhir');
      return;
    }

    const { subtotal } = calculateTotals();
    if (foundPromo.minPurchase && subtotal < foundPromo.minPurchase) {
      showToast(`Minimal transaksi untuk kode ini adalah ${formatRupiah(foundPromo.minPurchase)}`);
      return;
    }

    appliedPromo = foundPromo;
    if (appliedPromoTag && appliedPromoCodeText) {
      appliedPromoCodeText.textContent = `${appliedPromo.code} - ${appliedPromo.title}`;
      appliedPromoTag.classList.add('visible');
    }
    renderCart();
    showToast(`Promo ${appliedPromo.code} berhasil dipasang!`);
  };

  if (couponApplyBtn && couponInput) {
    couponApplyBtn.addEventListener('click', () => {
      applyPromoCode(couponInput.value);
      couponInput.value = '';
    });
  }

  if (removePromoBtn) {
    removePromoBtn.addEventListener('click', () => {
      appliedPromo = null;
      if (appliedPromoTag) appliedPromoTag.classList.remove('visible');
      renderCart();
      showToast('Promo berhasil dihapus');
    });
  }

  // Click "Bayar Sekarang" -> Redirect to Payment View
  if (checkoutBtn) {
    checkoutBtn.addEventListener('click', () => {
      if (cart.length === 0) {
        showToast('Keranjang masih kosong!');
        return;
      }
      switchView('payment');
    });
  }

  // ==========================================
  // 9. PEMBAYARAN (CHECKOUT INTERACTION)
  // ==========================================

  const renderPaymentPage = () => {
    if (!payOrderItemsList) return;

    payOrderItemsList.innerHTML = '';
    const { subtotal, discount, total } = calculateTotals();

    if (cart.length === 0) {
      payOrderItemsList.innerHTML = `
        <div style="text-align: center; padding: 24px; color: var(--text-muted); font-size: 13px;">
          Belum ada pesanan aktif. Silakan pilih menu di tab Menu.
        </div>
      `;
      if (confirmPaymentBtn) confirmPaymentBtn.disabled = true;
    } else {
      if (confirmPaymentBtn) confirmPaymentBtn.disabled = false;
      cart.forEach(item => {
        const row = document.createElement('div');
        row.className = 'order-item-preview-row';
        row.innerHTML = `
          <div class="preview-left">
            <span class="preview-qty">${item.qty}x</span>
            <span class="preview-title">${item.name}</span>
          </div>
          <span class="preview-price">${formatRupiah(item.price * item.qty)}</span>
        `;
        payOrderItemsList.appendChild(row);
      });
    }

    if (paySubtotalText) paySubtotalText.textContent = formatRupiah(subtotal);
    if (payDiscountText) payDiscountText.textContent = discount > 0 ? `- ${formatRupiah(discount)}` : formatRupiah(0);
    if (payTotalText) payTotalText.textContent = formatRupiah(total);

    // Reset or set default cash suggestion
    updateCashChange();
  };

  // Payment method switcher
  payMethodButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      payMethodButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      selectedPaymentMethod = btn.dataset.method;

      if (selectedPaymentMethod === 'Cash') {
        if (cashBox) cashBox.style.display = 'flex';
        if (qrisBox) qrisBox.classList.remove('active');
        if (cardBox) cardBox.classList.remove('active');
      } else if (selectedPaymentMethod === 'QRIS') {
        if (cashBox) cashBox.style.display = 'none';
        if (qrisBox) qrisBox.classList.add('active');
        if (cardBox) cardBox.classList.remove('active');
      } else {
        if (cashBox) cashBox.style.display = 'none';
        if (qrisBox) qrisBox.classList.remove('active');
        if (cardBox) cardBox.classList.add('active');
      }
    });
  });

  // Calculate Cash Change
  const updateCashChange = () => {
    if (!changeValueDisplay) return;
    const { total } = calculateTotals();
    const paid = Number(cashInput ? cashInput.value : 0) || 0;

    if (selectedPaymentMethod !== 'Cash') {
      changeValueDisplay.textContent = formatRupiah(0);
      changeValueDisplay.classList.remove('underpaid');
      return;
    }

    if (paid < total && paid > 0) {
      const shortage = total - paid;
      changeValueDisplay.textContent = `Kurang ${formatRupiah(shortage)}`;
      changeValueDisplay.classList.add('underpaid');
    } else {
      const change = Math.max(0, paid - total);
      changeValueDisplay.textContent = formatRupiah(change);
      changeValueDisplay.classList.remove('underpaid');
    }
  };

  if (cashInput) {
    cashInput.addEventListener('input', () => {
      cashPaidAmount = Number(cashInput.value) || 0;
      updateCashChange();
    });
  }

  // Quick cash buttons
  const quickCashButtons = document.querySelectorAll('.quick-cash-btn');
  quickCashButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const val = btn.dataset.amount;
      const { total } = calculateTotals();
      if (val === 'exact') {
        cashInput.value = total;
      } else {
        cashInput.value = val;
      }
      cashPaidAmount = Number(cashInput.value) || 0;
      updateCashChange();
    });
  });

  // Confirm Payment Button
  if (confirmPaymentBtn) {
    confirmPaymentBtn.addEventListener('click', () => {
      const { subtotal, discount, total } = calculateTotals();
      if (cart.length === 0) {
        showToast('Keranjang masih kosong!');
        return;
      }

      if (selectedPaymentMethod === 'Cash') {
        const paid = Number(cashInput.value) || 0;
        if (paid < total) {
          showToast(`Uang dibayar kurang! Minimal ${formatRupiah(total)}`);
          if (cashInput) cashInput.focus();
          return;
        }
      }

      // Generate New Transaction Record
      const newTrxId = `TRX-${new Date().getFullYear()}${String(new Date().getMonth()+1).padStart(2,'0')}${String(new Date().getDate()).padStart(2,'0')}-${String(TRANSACTIONS_DATA.length + 1).padStart(3, '0')}`;
      const now = new Date();
      const dateFormatted = now.toLocaleDateString('id-ID', { day: 'numeric', month: 'short', year: 'numeric' }) + ', ' + now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' });

      const newTrx = {
        trxId: newTrxId,
        date: dateFormatted,
        dateFilter: 'hari-ini',
        items: cart.map(item => ({
          name: item.name,
          qty: item.qty,
          price: item.price,
          subtotal: item.price * item.qty
        })),
        totalItems: cart.reduce((acc, i) => acc + i.qty, 0),
        subtotal: subtotal,
        discount: discount,
        total: total,
        paymentMethod: selectedPaymentMethod,
        status: 'Selesai',
        cashPaid: selectedPaymentMethod === 'Cash' ? (Number(cashInput.value) || total) : total,
        change: selectedPaymentMethod === 'Cash' ? Math.max(0, (Number(cashInput.value) || total) - total) : 0
      };

      // Add to transactions data (at top)
      TRANSACTIONS_DATA.unshift(newTrx);

      // Render and Open Success Modal
      if (successReceiptContent) {
        successReceiptContent.innerHTML = `
          <div class="receipt-row">
            <span>No. Transaksi</span>
            <strong>${newTrx.trxId}</strong>
          </div>
          <div class="receipt-row">
            <span>Waktu</span>
            <span>${newTrx.date}</span>
          </div>
          <div class="receipt-row">
            <span>Metode</span>
            <span class="pay-badge">${newTrx.paymentMethod}</span>
          </div>
          <div class="receipt-row">
            <span>Tipe Pesanan</span>
            <span>${orderType === 'dine-in' ? 'Dine In' : 'Take Away'}</span>
          </div>
          <div style="border-top: 1px dashed var(--border-color); margin: 6px 0;"></div>
          ${newTrx.items.map(i => `
            <div class="receipt-row">
              <span>${i.name} (x${i.qty})</span>
              <span>${formatRupiah(i.subtotal)}</span>
            </div>
          `).join('')}
          <div class="receipt-row" style="margin-top: 4px;">
            <span>Subtotal</span>
            <span>${formatRupiah(newTrx.subtotal)}</span>
          </div>
          ${newTrx.discount > 0 ? `
            <div class="receipt-row" style="color: var(--success);">
              <span>Diskon Promo</span>
              <span>- ${formatRupiah(newTrx.discount)}</span>
            </div>
          ` : ''}
          <div class="receipt-row bold">
            <span>TOTAL AKHIR</span>
            <span style="color: var(--primary-coffee);">${formatRupiah(newTrx.total)}</span>
          </div>
          ${newTrx.paymentMethod === 'Cash' ? `
            <div class="receipt-row">
              <span>Uang Diterima</span>
              <span>${formatRupiah(newTrx.cashPaid)}</span>
            </div>
            <div class="receipt-row" style="color: var(--success); font-weight: 700;">
              <span>Kembalian</span>
              <span>${formatRupiah(newTrx.change)}</span>
            </div>
          ` : ''}
        `;
      }

      if (successModal) {
        successModal.classList.add('active');
      }
    });
  }

  // Print Receipt Simulator
  if (printReceiptBtn) {
    printReceiptBtn.addEventListener('click', () => {
      showToast('Mencetak struk pembayaran...');
      setTimeout(() => {
        window.print();
      }, 300);
    });
  }

  // New Transaction Button inside Success Modal
  if (newTrxBtn) {
    newTrxBtn.addEventListener('click', () => {
      if (successModal) successModal.classList.remove('active');
      // Clear cart
      cart = [];
      appliedPromo = null;
      if (cashInput) cashInput.value = '';
      renderCart();
      // Navigate back to Menu
      switchView('menu');
      showToast('Siap melayani transaksi baru');
    });
  }

  // ==========================================
  // 10. RIWAYAT PEMBELIAN (HISTORY & MODAL DETAIL)
  // ==========================================

  const renderHistoryTable = () => {
    if (!historyTableBody) return;
    historyTableBody.innerHTML = '';

    let filtered = TRANSACTIONS_DATA;

    // Search filter
    const query = historySearchInput ? historySearchInput.value.toLowerCase().trim() : '';
    if (query) {
      filtered = filtered.filter(t => 
        t.trxId.toLowerCase().includes(query) ||
        t.items.some(i => i.name.toLowerCase().includes(query)) ||
        t.paymentMethod.toLowerCase().includes(query)
      );
    }

    // Date filter
    const dateVal = historyDateFilter ? historyDateFilter.value : 'semua';
    if (dateVal !== 'semua') {
      filtered = filtered.filter(t => t.dateFilter === dateVal);
    }

    // Method filter
    const methodVal = historyMethodFilter ? historyMethodFilter.value : 'semua';
    if (methodVal !== 'semua') {
      filtered = filtered.filter(t => t.paymentMethod.toLowerCase() === methodVal.toLowerCase());
    }

    if (filtered.length === 0) {
      historyTableBody.innerHTML = `
        <tr>
          <td colspan="7" style="text-align: center; padding: 40px; color: var(--text-muted);">
            Tidak ada data transaksi yang sesuai filter.
          </td>
        </tr>
      `;
      return;
    }

    filtered.forEach(trx => {
      const itemSummary = trx.items.map(i => `${i.name} (x${i.qty})`).join(', ');
      const tr = document.createElement('tr');
      tr.innerHTML = `
        <td><strong>${trx.trxId}</strong></td>
        <td>${trx.date}</td>
        <td style="max-width: 220px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" title="${itemSummary}">${itemSummary}</td>
        <td>${trx.totalItems} item</td>
        <td><strong>${formatRupiah(trx.total)}</strong></td>
        <td><span class="pay-badge">${trx.paymentMethod}</span></td>
        <td><span class="status-pill success"><span style="font-size: 8px;">●</span> ${trx.status}</span></td>
        <td>
          <button class="btn-trx-detail" data-id="${trx.trxId}">Detail</button>
        </td>
      `;

      tr.querySelector('.btn-trx-detail').addEventListener('click', () => {
        openDetailModal(trx);
      });

      historyTableBody.appendChild(tr);
    });
  };

  const openDetailModal = (trx) => {
    if (!detailModal || !detailModalContent) return;

    detailModalContent.innerHTML = `
      <div class="receipt-row">
        <span>No. Transaksi</span>
        <strong>${trx.trxId}</strong>
      </div>
      <div class="receipt-row">
        <span>Tanggal & Waktu</span>
        <span>${trx.date}</span>
      </div>
      <div class="receipt-row">
        <span>Metode Pembayaran</span>
        <span class="pay-badge">${trx.paymentMethod}</span>
      </div>
      <div class="receipt-row">
        <span>Status</span>
        <span class="status-pill success">● ${trx.status}</span>
      </div>

      <div style="border-top: 1px solid var(--border-light); margin: 6px 0;"></div>
      
      <div style="font-size: 13px; font-weight: 700; color: var(--text-main);">Daftar Item:</div>
      <div style="display: flex; flex-direction: column; gap: 8px;">
        ${trx.items.map(i => `
          <div style="display: flex; justify-content: space-between; font-size: 12px; background: var(--bg-subtle); padding: 8px 10px; border-radius: 6px;">
            <div>
              <strong>${i.name}</strong> <span style="color: var(--text-muted);">x${i.qty}</span>
              <div style="font-size: 11px; color: var(--text-muted);">${formatRupiah(i.price)} / porsi</div>
            </div>
            <strong>${formatRupiah(i.subtotal || (i.price * i.qty))}</strong>
          </div>
        `).join('')}
      </div>

      <div class="receipt-card" style="margin-top: 8px;">
        <div class="receipt-row">
          <span>Subtotal</span>
          <span>${formatRupiah(trx.subtotal)}</span>
        </div>
        ${trx.discount > 0 ? `
          <div class="receipt-row" style="color: var(--success);">
            <span>Diskon Promo</span>
            <span>- ${formatRupiah(trx.discount)}</span>
          </div>
        ` : ''}
        <div class="receipt-row bold">
          <span>TOTAL TRANSAKSI</span>
          <span style="color: var(--primary-coffee); font-size: 16px;">${formatRupiah(trx.total)}</span>
        </div>
      </div>
    `;

    detailModal.classList.add('active');
  };

  if (detailModalClose) {
    detailModalClose.addEventListener('click', () => {
      if (detailModal) detailModal.classList.remove('active');
    });
  }

  // Filter Event Listeners for History
  if (historySearchInput) {
    historySearchInput.addEventListener('input', renderHistoryTable);
  }
  if (historyDateFilter) {
    historyDateFilter.addEventListener('change', renderHistoryTable);
  }
  if (historyMethodFilter) {
    historyMethodFilter.addEventListener('change', renderHistoryTable);
  }

  // ==========================================
  // 11. PROMOSI (PROMOTION CARDS)
  // ==========================================

  const renderPromotions = () => {
    const promoGrid = document.getElementById('promo-cards-grid');
    if (!promoGrid) return;
    promoGrid.innerHTML = '';

    PROMO_DATA.forEach(promo => {
      const card = document.createElement('div');
      card.className = 'promo-card';
      const isActive = promo.status === 'Aktif';

      card.innerHTML = `
        <div class="promo-banner-wrap">
          <img src="${promo.image}" alt="${promo.title}">
          <span class="promo-status-badge ${isActive ? 'active' : 'expired'}">${promo.status}</span>
          <span class="promo-discount-tag">
            ${promo.type === 'percentage' ? `Diskon ${promo.discountValue * 100}%` : `Potongan ${formatRupiah(promo.discountValue)}`}
          </span>
        </div>
        <div class="promo-body">
          <div class="promo-main-info">
            <div class="promo-title">${promo.title}</div>
            <div class="promo-desc">${promo.desc}</div>
            <div class="promo-period">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
              </svg>
              ${promo.period}
            </div>
          </div>
          <div class="promo-footer-strip">
            <div class="promo-code-box" title="Klik untuk salin">${promo.code}</div>
            <button class="btn-promo-action ${!isActive ? 'disabled' : ''}" data-code="${promo.code}" ${!isActive ? 'disabled' : ''}>
              ${isActive ? 'Gunakan Promo' : 'Berakhir'}
            </button>
          </div>
        </div>
      `;

      if (isActive) {
        const actionBtn = card.querySelector('.btn-promo-action');
        actionBtn.addEventListener('click', () => {
          applyPromoCode(promo.code);
          switchView('menu');
        });

        const codeBox = card.querySelector('.promo-code-box');
        codeBox.style.cursor = 'pointer';
        codeBox.addEventListener('click', () => {
          navigator.clipboard.writeText(promo.code);
          showToast(`Kode promo ${promo.code} disalin!`);
        });
      }

      promoGrid.appendChild(card);
    });
  };

  // Close modals on backdrop click
  window.addEventListener('click', (e) => {
    if (e.target === detailModal) detailModal.classList.remove('active');
    if (e.target === successModal) successModal.classList.remove('active');
  });

  // ==========================================
  // 12. INITIALIZATION
  // ==========================================
  renderCategoryFilters();
  renderMenuCards();
  renderCart();
  renderDashboard();
});

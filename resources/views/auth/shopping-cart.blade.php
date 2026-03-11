<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Shopping Cart') | IL² RMUTTO</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">
</head>
<body>
    <div class="dashboard-wrapper">
        <!-- Header -->
        <header class="top-header">
            <div class="header-left">
                <a href="{{ route('dashboard.1') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo" style="max-width: 120px;">
                </a>
                <a href="{{ route('category') }}" class="category-select-btn">
                    Categories
                    <div class="category-select-arrows">
                        <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>
                        <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                </a>
                <div class="search-bar">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <input type="text" placeholder="Search here">
                </div>
            </div>

            <div class="header-right">
                <button class="icon-btn" title="Wishlist">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l8.78-8.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                </button>
                <a href="{{ route('shopping.cart') }}" class="icon-btn" title="Cart">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                </a>
                <button class="icon-btn" title="Notifications">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                    <span class="notification-badge">2</span>
                </button>
                <a href="{{ route('account') }}" class="user-profile-btn" style="text-decoration: none;">
                    <img src="{{ asset('images/default_avatar.png') }}" alt="Avatar" class="user-avatar-small">
                    <span class="user-name-small">Student</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
                </a>
            </div>
        </header>

        <!-- Sidebar -->
        <aside class="sidebar">
            <a href="{{ route('dashboard.1') }}" class="sidebar-item {{ Request::routeIs('dashboard.1') ? 'active' : '' }}">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                <span>Dashboard</span>
            </a>
            <a href="{{ route('calendar') }}" class="sidebar-item {{ Request::routeIs('calendar') ? 'active' : '' }}">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                <span>Calendar</span>
            </a>
            <a href="{{ route('learning') }}" class="sidebar-item {{ Request::routeIs('learning') || Request::routeIs('learning.p2') ? 'active' : '' }}">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                <span>Learning</span>
            </a>
            <a href="#" class="sidebar-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                <span>Exam</span>
            </a>
            <a href="#" class="sidebar-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                <span>Quiz</span>
            </a>
            <a href="{{ route('account') }}" class="sidebar-item {{ Request::routeIs('account') || Request::routeIs('password.change') ? 'active' : '' }}">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                <span>Account</span>
            </a>
            <a href="#" class="sidebar-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h8"></path><line x1="3" y1="10" x2="21" y2="10"></line><path d="M16 19h6"></path><path d="M19 16l3 3-3 3"></path></svg>
                <span>Wallet Address</span>
            </a>
            <a href="{{ route('transaction') }}" class="sidebar-item {{ Request::routeIs('transaction') || Request::routeIs('refund') ? 'active' : '' }}">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                <span>Transaction</span>
            </a>
            <a href="{{ route('shopping.cart') }}" class="sidebar-item {{ Request::routeIs('shopping.cart') || Request::routeIs('payment.method') ? 'active' : '' }}">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                <span>Payment</span>
            </a>
            <a href="{{ route('login') }}" class="sidebar-item" style="margin-top: auto; color: #e53e3e;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4M16 17l5-5-5-5M21 12H9"/></svg>
                <span>Logout</span>
            </a>
        </aside>

        <!-- Main Content -->
        <main class="content-area-dashboard">
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom: 25px;">
                <h2 style="font-size: 18px; font-weight: 700; color: #2d3748;">Shopping Cart</h2>
                <button class="btn-clear-all">Clear All</button>
            </div>

            <div class="payment-methods-grid">
                <!-- Cart Items List -->
                <div class="cart-list">
                    <!-- Item 1 -->
                    <div class="cart-item">
                        <div class="cart-item-check checked"></div>
                        <div class="cart-thumb" style="background-image: url('{{ asset('images/learning.png') }}'); background-size: cover;"></div>
                        <div class="cart-info">
                            <div style="display:flex; justify-content:space-between; align-items: flex-start;">
                                <div>
                                    <h4>Guide 2 Maths</h4>
                                    <p>In other words the smallest 2-digits number is 10</p>
                                    <div style="display:flex; align-items:center; gap:8px;">
                                        <div style="width:24px; height:24px; border-radius:50%; background:#e2e8f0;"></div>
                                        <span style="font-size:11px; color:#718096;">Created by Teacher 1</span>
                                    </div>
                                </div>
                                <div class="cart-price">$5.99</div>
                            </div>
                            <div class="cart-btn-actions">
                                <button class="btn-saved-later">Saved for later</button>
                                <button class="btn-delete">Delete</button>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="cart-item">
                        <div class="cart-item-check"></div>
                        <div class="cart-thumb" style="background-image: url('{{ asset('images/robotics.png') }}'); background-size: cover;"></div>
                        <div class="cart-info">
                            <div style="display:flex; justify-content:space-between; align-items: flex-start;">
                                <div>
                                    <h4>Guide 2 Maths</h4>
                                    <p>In other words the smallest 2-digits number is 10</p>
                                    <div style="display:flex; align-items:center; gap:8px;">
                                        <div style="width:24px; height:24px; border-radius:50%; background:#e2e8f0;"></div>
                                        <span style="font-size:11px; color:#718096;">Created by Teacher 1</span>
                                    </div>
                                </div>
                                <div class="cart-price">$5.99</div>
                            </div>
                            <div class="cart-btn-actions">
                                <button class="btn-saved-later">Saved for later</button>
                                <button class="btn-delete">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Summary Panel -->
                <div class="summary-panel">
                    <div class="summary-card">
                        <div class="summary-header">
                            <h3 class="summary-title">Payment Summary</h3>
                        </div>
                        <div class="summary-body">
                            <div class="summary-row">
                                <span>Subtotal</span>
                                <span style="font-weight:700; color:var(--deep-navy);">$5.99</span>
                            </div>
                            <div class="summary-row">
                                <span>Taxes</span>
                                <span style="font-weight:700; color:var(--deep-navy);">$0</span>
                            </div>
                        </div>
                        <div class="summary-total-row">
                            <span>Total</span>
                            <span>$11.98</span>
                        </div>
                    </div>
                    <div style="margin-top: 20px; text-align: right;">
                        <a href="{{ route('payment.method') }}" class="btn-checkout" style="text-decoration:none; display:inline-block;">Checkout</a>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="footer-bottom-bar">
            <div class="footer-brand-section">
                <div class="footer-logo-box">
                    <img src="{{ asset('images/logo.png') }}" alt="IL2 Logo">
                </div>
                <p class="footer-tagline">Learn anytime and anywhere<br>from IL2 career skills</p>
            </div>
            
            <div class="footer-links-grid">
                <div class="footer-col">
                    <a href="#">Teach on IL2</a>
                    <a href="#">About Us</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Help and Support</a>
                </div>
                <div class="footer-col">
                    <a href="#">Terms</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Cookies Policy</a>
                    <a href="#">Career</a>
                </div>
            </div>

            <div class="footer-action-row">
                <select class="footer-lang-select">
                    <option>English</option>
                </select>
                
                <div class="footer-socials">
                    <a href="#" class="social-circle"><svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
                    <a href="#" class="social-circle"><svg width="24" height="24" viewBox="0 0 24 24" fill="url(#ig-grad2)"><defs><linearGradient id="ig-grad2" x1="0%" y1="100%" x2="100%" y2="0%"><stop offset="0%" stop-color="#fd5949"/><stop offset="50%" stop-color="#d6249f"/><stop offset="100%" stop-color="#285AEB"/></linearGradient></defs><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm3.98-10.95a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z"/></svg></a>
                    <a href="#" class="social-circle"><svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.419-4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a>
                </div>

                <div class="app-badges-row">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg" alt="App Store">
                </div>
            </div>
        </footer>
    </div>
</body>
</html>

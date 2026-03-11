<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Payment Method') | IL² RMUTTO</title>
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
                <h3 style="font-size: 16px; font-weight: 700; color: #111827;">Payment Methods</h3>
                <h3 style="font-size: 16px; font-weight: 700; color: #111827;">Basket Summary</h3>
            </div>

            <div class="payment-methods-grid">
                <!-- Payment Options -->
                <div class="payment-options-card">
                    <div class="payment-method-item active">
                         <div class="payment-logo-box">
                             <img src="https://upload.wikimedia.org/wikipedia/commons/b/ba/Stripe_Logo%2C_revised_2016.svg" alt="Stripe">
                         </div>
                         <div class="payment-name">Stripe</div>
                    </div>
                    <div class="payment-method-item">
                         <div class="payment-logo-box">
                             <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="Paypal" class="paypal-logo">
                         </div>
                         <div class="payment-name">Paypal</div>
                    </div>

                    <div class="payment-actions">
                        <a href="{{ route('shopping.cart') }}" class="btn-back-gray" style="text-decoration: none; display: flex; align-items: center; justify-content: center;">Back</a>
                        <button class="btn-confirm">Confirm Payment</button>
                    </div>
                </div>

                <!-- Basket Summary Panel -->
                <div class="summary-card">
                    <div class="summary-body" style="padding: 30px;">
                         <!-- Small Item 1 -->
                         <div class="summary-item-row">
                             <div class="summary-item-left">
                                 <div class="thumbnail-placeholder"></div>
                                 <div class="item-name">Guide 2 Maths</div>
                             </div>
                             <div class="item-price">$5.99</div>
                         </div>
                         <div class="summary-divider"></div>
                         <!-- Small Item 2 -->
                         <div class="summary-item-row">
                             <div class="summary-item-left">
                                 <div class="thumbnail-placeholder"></div>
                                 <div class="item-name">Guide 3 Maths</div>
                             </div>
                             <div class="item-price">$5.99</div>
                         </div>
                    </div>
                    <div class="summary-total-bar">
                        <span style="font-weight: 700;">Total</span>
                        <span style="font-weight: 700;">$11.98</span>
                    </div>
                </div>
            </div>

            <div style="margin-top: 20px; text-align: right;">
                 <button class="btn-metamask">Add Metamask</button>
            </div>

            <!-- Stripe Modal Overlay (Visual Representation) -->
            <div class="payment-modal-overlay">
                 <div class="premium-payment-modal">
                     <button class="modal-close-btn">&times;</button>
                     <div class="modal-header-premium">
                         <h3 class="modal-title-premium">TutorX</h3>
                         <p class="modal-subtitle-premium">Make payment with Stripe</p>
                     </div>

                     <div class="premium-form">
                         <div class="form-row-group">
                             <div class="premium-input-wrapper">
                                 <svg class="input-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                 <input type="email" placeholder="Email">
                             </div>
                             <div class="premium-input-wrapper">
                                 <svg class="input-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                 <input type="text" placeholder="Card Number">
                             </div>
                             <div class="grid-inputs">
                                <div class="premium-input-wrapper">
                                    <svg class="input-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                    <input type="text" placeholder="MM/YY">
                                </div>
                                <div class="premium-input-wrapper">
                                    <svg class="input-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input type="text" placeholder="CVC">
                                </div>
                             </div>
                         </div>
                         
                         <div class="premium-modal-actions">
                             <button class="btn-pay-premium">Pay $11.98</button>
                             <button class="btn-cancel-premium">Cancel</button>
                         </div>
                     </div>
                 </div>
            </div>

        </main>

        <!-- Footer -->
        <footer class="main-footer">
            <div class="footer-top">
                <div class="footer-brand">
                    <div class="logo-circle">
                        <img src="{{ asset('images/logo.png') }}" alt="IL2 Logo">
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>

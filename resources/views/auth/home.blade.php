<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | IL² RMUTTO</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v={{ time() }}">
</head>
<body>
    <!-- Header / Navigation -->
    <header class="home-header">
        <div class="home-header-inner">
            <div class="header-left">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="IL2 Logo" class="logo" style="max-width: 50px;">
                </a>
                <a href="{{ route('category') }}" class="category-select-btn">
                    Categories
                    <div class="category-select-arrows">
                        <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>
                        <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                </a>
                <div class="search-bar" style="position:relative;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <input type="text" placeholder="Search here" id="homeSearchInput">
                    <button class="search-close-btn" style="position:absolute; right:10px; top:50%; transform:translateY(-50%); background:none; border:none; cursor:pointer; color:#a0aec0;">&times;</button>
                    <!-- Search Dropdown -->
                    <div class="search-dropdown" id="searchDropdown">
                        <div class="search-tabs">
                            <span class="search-tab active">Schedule</span>
                            <span class="search-tab">Course</span>
                            <span class="search-tab">Task</span>
                            <span class="search-tab">Class</span>
                        </div>
                        <div class="search-results">
                            <div class="search-result-item">
                                <div class="search-result-icon">📘</div>
                                <span class="search-result-text">Example</span>
                                <span class="search-result-type">Course</span>
                            </div>
                            <div class="search-result-item">
                                <div class="search-result-icon">📘</div>
                                <span class="search-result-text">Example</span>
                                <span class="search-result-type">Class</span>
                            </div>
                            <div class="search-result-item">
                                <div class="search-result-icon">📘</div>
                                <span class="search-result-text">Example</span>
                                <span class="search-result-type">Task</span>
                            </div>
                            <div class="search-result-item">
                                <div class="search-result-icon">📘</div>
                                <span class="search-result-text">Example</span>
                                <span class="search-result-type">Schedule</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-right">
                <button class="icon-btn" title="Wishlist">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l8.78-8.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                </button>
                <button class="icon-btn" title="Cart">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                </button>
                <button class="icon-btn" title="Notifications">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                    <span class="notification-badge">2</span>
                </button>
                <div class="user-profile-btn">
                    <img src="{{ asset('images/default_avatar.png') }}" alt="Avatar" class="user-avatar-small">
                    <span class="user-name-small">Student</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
                </div>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="hero-inner">
            <div class="hero-image">
                <img src="{{ asset('images/learning.png') }}" alt="Hero Image" style="width:100%; height:100%; object-fit:cover; border-radius: 20px;">
            </div>
            <div class="hero-content">
                <div class="hero-deco">
                    <img src="https://cdn-icons-png.flaticon.com/512/3655/3655580.png" alt="Magnifier" style="width:80px; opacity:0.8; position:absolute; top:-10px; right:0;">
                </div>
                <h1 class="hero-title">Investing in<br>Knowledge and<br>your future</h1>
                <p class="hero-desc">Tutor simulates a physical learning environment with interactive learning that allows instructors and students to engage with one another.</p>
                <div class="hero-btns">
                    <a href="{{ route('login') }}" class="btn-hero-login">Login</a>
                    <a href="{{ route('register') }}" class="btn-hero-signup">Signup</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES ROW -->
    <section class="features-section">
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon" style="background:#fff3e0;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#f57c00" stroke-width="2"><path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>
                </div>
                <div>
                    <h4>Great Deals for you</h4>
                    <p>Get some great black and discounts on courses. Avail Now, Happy teaching and learning, everyone!</p>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-icon" style="background:#e3f2fd;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#1976d2" stroke-width="2"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>
                </div>
                <div>
                    <h4>Audio & Video</h4>
                    <p>High-quality audio and video courses make it easy to learn and teach new skills. Get started right away!</p>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-icon" style="background:#e8f5e9;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#388e3c" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <div>
                    <h4>Virtual Classroom</h4>
                    <p>Tutor simulates a physical learning environment with interactive learning that allows instructors and students to engage.</p>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-icon" style="background:#fce4ec;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#c62828" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <div>
                    <h4>Group learning</h4>
                    <p>Put your heads together and increase your knowledge base. With the right platform, transform your course into an interactive group experience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WIDE RANGE SECTION -->
    <section class="wide-range-section">
        <div class="wide-range-inner">
            <div class="wide-range-left">
                <h2 class="section-heading">A wide range of<br>courses to spark<br>your creativity</h2>
                <div class="wide-range-images">
                    <img src="{{ asset('images/learning.png') }}" alt="Robotics Learning" class="wide-img wide-img-1">
                    <img src="{{ asset('images/learning.png') }}" alt="Hands-on robotics" class="wide-img wide-img-2">
                    <img src="{{ asset('images/learning.png') }}" alt="Stem education" class="wide-img wide-img-3">
                </div>
            </div>
            <div class="wide-range-right">
                <div class="category-cards-grid">
                    <div class="category-card-item">
                        <div class="cat-icon" style="background:#fff3e0;"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f57c00" stroke-width="2"><path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/></svg></div>
                        <div>
                            <h5>Modern</h5>
                            <p>Art & Ideas</p>
                        </div>
                    </div>
                    <div class="category-card-item">
                        <div class="cat-icon" style="background:#fce4ec;"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#c62828" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
                        <div>
                            <h5>Ignite Your</h5>
                            <p>Everyday Creativity</p>
                        </div>
                    </div>
                    <div class="category-card-item">
                        <div class="cat-icon" style="background:#e3f2fd;"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1565c0" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
                        <div>
                            <h5>Electrodynamics</h5>
                            <p>Specialization</p>
                        </div>
                    </div>
                    <div class="category-card-item">
                        <div class="cat-icon" style="background:#e8f5e9;"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2e7d32" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></div>
                        <div>
                            <h5>Postwar</h5>
                            <p>Abstract Painting</p>
                        </div>
                    </div>
                </div>
                <ul class="wide-range-list">
                    <li>Find the top course that fits you from a wide range of online topics available with new additions published frequently and expand your career opportunities.</li>
                    <li>Explore our different categories to expand your creative skillset.</li>
                </ul>
                <a href="{{ route('register') }}" class="btn-get-started">Get Started</a>
            </div>
        </div>
    </section>

    <!-- CAREER PERSPECTIVE SECTION -->
    <section class="career-section">
        <h2 class="section-heading-center">Construct a stunning career perspective</h2>
        <p class="section-sub-center">We just don't give our students only lecture but <em>real life experience</em></p>
        <div class="live-classes-grid">
            <div class="live-class-card">
                <div class="live-class-thumb">
                    <img src="{{ asset('images/learning.png') }}" alt="Live Class">
                </div>
                <div class="live-class-info">
                    <span class="live-class-teacher">Teacher</span>
                    <div class="live-class-title-row">
                        <h4>Mastering Maths</h4>
                        <span class="live-badge">🔴 Live</span>
                    </div>
                    <p class="live-class-desc">Topic Description</p>
                    <div class="live-class-meta">
                        <span>📅 22 June 2023</span>
                        <span>🕐 02:00 PM</span>
                    </div>
                </div>
            </div>
            <div class="live-class-card">
                <div class="live-class-thumb">
                    <img src="{{ asset('images/robotics.png') }}" alt="Live Class">
                </div>
                <div class="live-class-info">
                    <span class="live-class-teacher">Teacher</span>
                    <div class="live-class-title-row">
                        <h4>Mastering Maths</h4>
                        <span class="live-badge">🔴 Live</span>
                    </div>
                    <p class="live-class-desc">Topic Description</p>
                    <div class="live-class-meta">
                        <span>📅 22 June 2023</span>
                        <span>🕐 02:00 PM</span>
                    </div>
                </div>
            </div>
            <div class="live-class-card">
                <div class="live-class-thumb">
                    <img src="{{ asset('images/robotics.png') }}" alt="Live Class">
                </div>
                <div class="live-class-info">
                    <span class="live-class-teacher">Teacher</span>
                    <div class="live-class-title-row">
                        <h4>Mastering Maths</h4>
                        <span class="live-badge">🔴 Live</span>
                    </div>
                    <p class="live-class-desc">Topic Description</p>
                    <div class="live-class-meta">
                        <span>📅 22 June 2023</span>
                        <span>🕐 02:00 PM</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FREE SESSION COURSES -->
    <section class="course-section">
        <div class="course-section-header">
            <div>
                <h2 class="section-heading">Pick a free session course<br>to get started</h2>
                <p class="section-sub">Once you done with your free videos, for continue you have to subscribe the course</p>
            </div>
            <div class="carousel-arrows">
                <button class="arrow-btn">‹</button>
                <button class="arrow-btn">›</button>
            </div>
        </div>
        <div class="course-cards-row">
            @for($i = 0; $i < 4; $i++)
            <a href="{{ route('course.detail') }}" class="course-card-home-main" style="text-decoration:none; color:inherit;">
                <div class="course-card-home">
                    <div class="course-card-thumb">
                        <img src="{{ asset('images/learning.png') }}" alt="Course">
                        <span class="free-badge">Free</span>
                    </div>
                    <div class="course-card-body">
                        <h4>The most complete scien..</h4>
                        <p>Topic Description Lorem ipsum dolor sit amet, consectetur adip...</p>
                        <div class="course-card-footer">
                            <div class="course-card-avatar"></div>
                            <div class="course-card-stats">
                                <span>👁 4k</span>
                                <span>👥 200</span>
                                <span>⭐ 4.5</span>
                            </div>
                            <button class="heart-btn">♡</button>
                        </div>
                    </div>
                </div>
            </a>
            @endfor
        </div>
    </section>

    <!-- ONGOING COURSES -->
    <section class="course-section">
        <div class="course-section-header">
            <h2 class="section-heading">Ongoing Courses</h2>
            <div class="carousel-arrows">
                <button class="arrow-btn">‹</button>
                <button class="arrow-btn">›</button>
            </div>
        </div>
        <div class="course-cards-row">
            @for($i = 0; $i < 4; $i++)
            <a href="{{ route('course.detail') }}" class="course-card-home-main" style="text-decoration:none; color:inherit;">
                <div class="course-card-home">
                    <div class="course-card-thumb">
                        <img src="{{ asset('images/robotics.png') }}" alt="Course">
                        <span class="free-badge">Free</span>
                    </div>
                    <div class="course-card-body">
                        <h4>The most complete scien..</h4>
                        <p>Topic Description Lorem ipsum dolor sit amet, consectetur adip...</p>
                        <div class="course-card-footer">
                            <div class="course-card-avatar"></div>
                            <div class="course-card-stats">
                                <span>👁 4k</span>
                                <span>👥 200</span>
                                <span>⭐ 4.5</span>
                            </div>
                            <button class="heart-btn">♡</button>
                        </div>
                    </div>
                </div>
            </a>
            @endfor
        </div>
    </section>

    <!-- POPULAR COURSES -->
    <section class="course-section">
        <div class="course-section-header">
            <h2 class="section-heading">Popular Courses</h2>
            <div class="carousel-arrows">
                <button class="arrow-btn">‹</button>
                <button class="arrow-btn">›</button>
            </div>
        </div>
        <div class="course-cards-row">
            @for($i = 0; $i < 4; $i++)
            <a href="{{ route('course.detail') }}" class="course-card-home-main" style="text-decoration:none; color:inherit;">
                <div class="course-card-home">
                    <div class="course-card-thumb">
                        <img src="{{ asset('images/robotics.png') }}" alt="Course">
                        <span class="free-badge">Free</span>
                    </div>
                    <div class="course-card-body">
                        <h4>The most complete scien..</h4>
                        <p>Topic Description Lorem ipsum dolor sit amet, consectetur adip...</p>
                        <div class="course-card-footer">
                            <div class="course-card-avatar"></div>
                            <div class="course-card-stats">
                                <span>👁 4k</span>
                                <span>👥 200</span>
                                <span>⭐ 4.5</span>
                            </div>
                            <button class="heart-btn">♡</button>
                        </div>
                    </div>
                </div>
            </a>
            @endfor
        </div>
    </section>

    <!-- COMPLETED COURSES -->
    <section class="course-section">
        <div class="course-section-header">
            <h2 class="section-heading">Completed Courses</h2>
            <div class="carousel-arrows">
                <button class="arrow-btn">‹</button>
                <button class="arrow-btn">›</button>
            </div>
        </div>
        <div class="course-cards-row">
            @for($i = 0; $i < 4; $i++)
            <a href="{{ route('course.detail') }}" class="course-card-home-main" style="text-decoration:none; color:inherit;">
                <div class="course-card-home">
                    <div class="course-card-thumb">
                        <img src="{{ asset('images/robotics.png') }}" alt="Course">
                        <span class="free-badge">Free</span>
                    </div>
                    <div class="course-card-body">
                        <h4>The most complete scien..</h4>
                        <p>Topic Description Lorem ipsum dolor sit amet, consectetur adip...</p>
                        <div class="course-card-footer">
                            <div class="course-card-avatar"></div>
                            <div class="course-card-stats">
                                <span>👁 4k</span>
                                <span>👥 200</span>
                                <span>⭐ 4.5</span>
                            </div>
                            <button class="heart-btn">♡</button>
                        </div>
                    </div>
                </div>
            </a>
            @endfor
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="home-footer">
        <div class="home-footer-inner">
            <div class="footer-brand-section">
                <div class="footer-logo-circle">
                    <img src="{{ asset('images/logo.png') }}" alt="IL2 Logo">
                </div>
                <p>Learn anytime and anywhere from IL2 career skills</p>
            </div>
            
            <div class="footer-links-column">
                <ul>
                    <li><a href="#">Teach on IL2</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Help and Support</a></li>
                </ul>
            </div>

            <div class="footer-links-column">
                <ul>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookies Policy</a></li>
                    <li><a href="#">Career</a></li>
                </ul>
            </div>

            <div class="footer-right-section">
                <select class="footer-lang-select">
                    <option>English</option>
                    <option>Thai</option>
                </select>
                
                <div class="footer-socials">
                    <a href="#" class="social-icon facebook">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </a>
                    <a href="#" class="social-icon instagram">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                    </a>
                    <a href="#" class="social-icon twitter">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                    </a>
                </div>

                <div class="app-btns">
                    <a href="#" class="app-btn-img">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play">
                    </a>
                    <a href="#" class="app-btn-img">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg" alt="App Store">
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Search dropdown toggle
        const searchInput = document.getElementById('homeSearchInput');
        const searchDropdown = document.getElementById('searchDropdown');
        searchInput.addEventListener('focus', () => { searchDropdown.style.display = 'block'; });
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.search-bar')) searchDropdown.style.display = 'none';
        });
        // Search tabs
        document.querySelectorAll('.search-tab').forEach(tab => {
            tab.addEventListener('click', () => {
                document.querySelectorAll('.search-tab').forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
            });
        });
    </script>
</body>
</html>

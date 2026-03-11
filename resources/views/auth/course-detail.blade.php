<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Detail | IL² RMUTTO</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v={{ time() }}">
    <style>
        /* Course Specific Styles */
        .course-detail-container {
            padding: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }
        .course-header-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
            background: #fff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.04);
        }
        .course-info-left h1 {
            font-size: 32px;
            font-weight: 800;
            color: #1a202c;
            margin-bottom: 10px;
        }
        .course-meta-top {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }
        .instructor-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #e2e8f0;
        }
        .price-badge {
            font-size: 24px;
            font-weight: 800;
            color: #f97316;
        }
        .course-desc-short {
            font-size: 14px;
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 25px;
        }
        .course-actions {
            display: flex;
            gap: 15px;
        }
        .btn-subscribe {
            padding: 12px 25px;
            background: var(--deep-navy, #002b5c);
            color: #fff;
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
        }
        .btn-add-cart {
            padding: 12px 25px;
            background: #eef2ff;
            color: var(--deep-navy, #002b5c);
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
        }
        .video-player-wrapper {
            width: 100%;
            aspect-ratio: 16/9;
            background: #000;
            border-radius: 15px;
            overflow: hidden;
            position: relative;
        }
        .video-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #2d3748;
        }
        .play-btn-large {
            width: 70px;
            height: 70px;
            background: #ef4444;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            cursor: pointer;
        }
        
        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }
        .stat-card {
            background: #fff;
            padding: 20px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.03);
        }
        .stat-icon {
            width: 45px;
            height: 45px;
            border-radius: 10px;
            background: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }
        .stat-info h5 {
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 2px;
        }
        .stat-info p {
            font-size: 12px;
            color: #718096;
        }

        /* Tabs Section */
        .course-tabs-wrapper {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.04);
            margin-bottom: 40px;
        }
        .course-tabs-header {
            display: flex;
            border-bottom: 1px solid #e2e8f0;
            padding: 0 20px;
        }
        .tab-item {
            padding: 20px 25px;
            font-size: 14px;
            font-weight: 600;
            color: #718096;
            cursor: pointer;
            position: relative;
        }
        .tab-item.active {
            color: var(--deep-navy, #002b5c);
        }
        .tab-item.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--deep-navy, #002b5c);
        }
        .tab-content {
            padding: 40px;
        }
        
        /* About Tab Content */
        .tab-columns {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 60px;
        }
        .content-section h3 {
            font-size: 18px;
            font-weight: 800;
            margin-bottom: 20px;
            color: #1a202c;
        }
        .learn-list {
            list-style: none;
            padding: 0;
        }
        .learn-list li {
            font-size: 14px;
            color: #64748b;
            margin-bottom: 12px;
            display: flex;
            gap: 10px;
        }
        .learn-list li::before {
            content: '✓';
            color: #388e3c;
            font-weight: bold;
        }
        
        .skills-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }
        .skill-tag {
            padding: 8px 16px;
            background: #f1f5f9;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            color: #475569;
        }

        .free-sessions-box {
            background: #f0f9ff;
            border: 1px solid #bae6fd;
            border-radius: 15px;
            padding: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .btn-free {
            padding: 10px 25px;
            background: var(--deep-navy, #002b5c);
            color: #fff;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
        }

        /* Recommendation Section */
        .recom-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }
        .recom-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
    </style>
</head>
<body style="background: #f8fafc;">
    <div class="dashboard-wrapper">
        <!-- Header copied from learning.blade.php but adapted for home style -->
        <header class="top-header" style="background:#fff; border-bottom:1px solid #e2e8f0; position:sticky; top:0; z-index:100; padding: 0 40px; height: 65px; display:flex; align-items:center; justify-content:space-between; width:100%;">
            <div class="header-left" style="display:flex; align-items:center; gap:20px;">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="IL2 Logo" class="logo" style="max-width: 50px;">
                </a>
                <button class="category-dropdown" style="background:none; border:none; display:flex; align-items:center; gap:8px; font-weight:600; color:#4a5568; cursor:pointer;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12h18M3 6h18M3 18h18"/></svg>
                    Categories
                </button>
                <div class="search-bar" style="background:#f1f5f9; border-radius:10px; padding:0 15px; display:flex; align-items:center; gap:10px; width:350px; height:40px;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <input type="text" placeholder="Search here" style="background:none; border:none; width:100%; outline:none; font-size:14px;">
                </div>
            </div>

            <div class="header-right" style="display:flex; align-items:center; gap:20px;">
                <button class="icon-btn" style="background:none; border:none; color:#718096; cursor:pointer;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l8.78-8.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                </button>
                <button class="icon-btn" style="background:none; border:none; color:#718096; cursor:pointer;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                </button>
                <button class="icon-btn" style="background:none; border:none; color:#718096; cursor:pointer; position:relative;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                    <span style="position:absolute; top:-5px; right:-5px; background:#f97316; color:#fff; font-size:10px; width:16px; height:16px; border-radius:50%; display:flex; align-items:center; justify-content:center; border:2px solid #fff;">2</span>
                </button>
                <div class="user-profile-btn" style="display:flex; align-items:center; gap:10px; cursor:pointer;">
                    <img src="{{ asset('images/default_avatar.png') }}" alt="Avatar" style="width:32px; height:32px; border-radius:50%;">
                    <span style="font-size:14px; font-weight:600; color:#4a5568;">Student</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
                </div>
            </div>
        </header>

        <div style="display:flex;">
            <!-- Sidebar -->
            <aside class="sidebar" style="width:240px; background:#fff; height:calc(100vh - 65px); border-right:1px solid #e2e8f0; padding:20px 0; position:sticky; top:65px; flex-shrink:0;">
                <a href="{{ route('dashboard.1') }}" class="sidebar-item" style="padding:12px 25px; display:flex; align-items:center; gap:12px; color:#718096; text-decoration:none; font-size:14px; font-weight:500;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('calendar') }}" class="sidebar-item" style="padding:12px 25px; display:flex; align-items:center; gap:12px; color:#718096; text-decoration:none; font-size:14px; font-weight:500;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <span>Calendar</span>
                </a>
                <a href="{{ route('learning') }}" class="sidebar-item active" style="padding:12px 25px; display:flex; align-items:center; gap:12px; color:var(--deep-navy, #002b5c); background:#eff6ff; border-right:3px solid var(--deep-navy, #002b5c); text-decoration:none; font-size:14px; font-weight:600;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                    <span>Learning</span>
                </a>
                <a href="#" class="sidebar-item" style="padding:12px 25px; display:flex; align-items:center; gap:12px; color:#718096; text-decoration:none; font-size:14px; font-weight:500;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                    <span>Exam</span>
                </a>
                <!-- ... other items -->
            </aside>

            <!-- Main Content -->
            <main style="flex:1; padding:30px; background:#f8fafc;">
                <div class="course-detail-container">
                    
                    <!-- Course Header Card -->
                    <div class="course-header-section">
                        <div class="course-info-left">
                            <div class="course-meta-top">
                                <div class="instructor-avatar"></div>
                                <div>
                                    <p style="font-size:12px; color:#a0aec0;">Created by <span style="color:var(--deep-navy, #002b5c); font-weight:600;">Teacher</span></p>
                                    <p style="font-size:11px; color:#718096;">⭐ 5 Ratings &nbsp; 👥 0 Students</p>
                                </div>
                            </div>
                            <h1>Mathematic Class</h1>
                            <p class="price-badge">$10.99</p>
                            <p style="font-size:12px; color:#a0aec0; margin-bottom:15px;">🕐 Last updated 26 June 2023</p>
                            <p class="course-desc-short">Tutor simulates a physical learning environment with interactive learning that allows instructors and students to engage with one another.</p>
                            
                            <div style="font-size:12px; color:#64748b; margin-bottom:25px;">
                                <p>Course start date: <span style="color:var(--deep-navy, #002b5c); font-weight:600;">26 June 2023</span> &nbsp; Course end date: <span style="color:var(--deep-navy, #002b5c); font-weight:600;">26 June 2023</span></p>
                            </div>

                            <div class="course-actions">
                                <a href="#" class="btn-subscribe">Subscribe Now</a>
                                <a href="#" class="btn-add-cart">Add to Cart</a>
                            </div>
                        </div>
                        <div class="course-video-right">
                            <div class="video-player-wrapper">
                                <div class="video-placeholder">
                                    <img src="{{ asset('images/learning.png') }}" alt="Course Main" style="width:100%; height:100%; object-fit:cover; opacity:0.5;">
                                    <div class="play-btn-large" style="position:absolute;">
                                        <svg width="30" height="30" viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Row -->
                    <div class="stats-grid">
                        <div class="stat-card">
                            <div class="stat-icon" style="color:#3b82f6;">⏱</div>
                            <div class="stat-info">
                                <h5>Duration</h5>
                                <p>33 Days</p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon" style="color:#f59e0b;">📅</div>
                            <div class="stat-info">
                                <h5>Weekly Study</h5>
                                <p>32 Hours</p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon" style="color:#10b981;">💻</div>
                            <div class="stat-info">
                                <h5>100% Online</h5>
                                <p>Learn at your pace</p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon" style="color:#8b5cf6;">📝</div>
                            <div class="stat-info">
                                <h5>Quiz</h5>
                                <p>Total Quizzes: 2</p>
                            </div>
                        </div>
                    </div>

                    <!-- Tabs Card -->
                    <div class="course-tabs-wrapper">
                        <div class="course-tabs-header">
                            <div class="tab-item active">About</div>
                            <div class="tab-item">Outcomes</div>
                            <div class="tab-item">Modules</div>
                            <div class="tab-item">Recommendations</div>
                            <div class="tab-item">Resources</div>
                            <div class="tab-item">Reviews</div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-columns">
                                <div class="tab-left-col">
                                    <div class="content-section">
                                        <h3>What you'll learn</h3>
                                        <ul class="learn-list">
                                            <li>Understand essential e-commerce strategies and practices</li>
                                            <li>Explain what e-commerce stores and platforms are and how they work</li>
                                            <li>Create an engaging customer experience online using best practices</li>
                                            <li>Set up a reach e-commerce store using Shopify</li>
                                        </ul>
                                    </div>
                                    <div class="content-section" style="margin-top:40px;">
                                        <h3>Skills you'll gain</h3>
                                        <div class="skills-grid">
                                            <span class="skill-tag">Target Audience</span>
                                            <span class="skill-tag">Digital Advertising</span>
                                            <span class="skill-tag">E-Commerce</span>
                                            <span class="skill-tag">Market Trend</span>
                                            <span class="skill-tag">Shipping and Receiving</span>
                                            <span class="skill-tag">Market Research</span>
                                            <span class="skill-tag">Customer Experience Improvement</span>
                                            <span class="skill-tag">Order Fulfillment</span>
                                            <span class="skill-tag">Process Optimization</span>
                                            <span class="skill-tag">Sales</span>
                                            <span class="skill-tag" style="background:var(--deep-navy, #002b5c); color:#fff;">Show all</span>
                                        </div>
                                    </div>
                                    <div class="content-section" style="margin-top:40px;">
                                        <h3>Tools you'll learn</h3>
                                        <div class="skills-grid">
                                            <span class="skill-tag" style="background:#fff7ed; color:#c2410c; border:1px solid #ffedd5;">Google Ads</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-right-col">
                                    <div class="content-section">
                                        <h3>About this course</h3>
                                        <p style="font-size:11px; color:#a0aec0; margin-bottom:20px;">24,152,873,745,809</p>
                                        <div class="free-sessions-box">
                                            <div>
                                                <h4 style="font-size:14px; margin-bottom:5px;">Get a free sessions - hello maths</h4>
                                                <p style="font-size:11px; color:#7dd3fc;">Watch your favorite guide's free content</p>
                                            </div>
                                            <a href="#" class="btn-free">Free</a>
                                        </div>

                                        <div style="margin-top:40px; display:grid; gap:15px;">
                                            <div class="stat-card" style="box-shadow:none; border:1px solid #f1f5f9;">
                                                <div class="stat-icon" style="background:#eff6ff;">⏱</div>
                                                <div class="stat-info">
                                                    <h5>Duration</h5>
                                                    <p>33 Days</p>
                                                </div>
                                            </div>
                                            <div class="stat-card" style="box-shadow:none; border:1px solid #f1f5f9;">
                                                <div class="stat-icon" style="background:#fff7ed;">📅</div>
                                                <div class="stat-info">
                                                    <h5>Weekly Study</h5>
                                                    <p>32 Hours</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recommendation Section -->
                    <div class="recom-section">
                        <div class="recom-header">
                            <div>
                                <h2 style="font-size:24px; font-weight:800; color:#1a202c;">More course you might like</h2>
                                <p style="font-size:13px; color:#718096;">Students who joined this course have also enjoyed these courses.</p>
                            </div>
                            <div class="carousel-arrows">
                                <button class="arrow-btn">‹</button>
                                <button class="arrow-btn">›</button>
                            </div>
                        </div>
                        <div class="recom-grid">
                            @for($i = 0; $i < 4; $i++)
                            <div class="course-card-home">
                                <div class="course-card-thumb" style="height:140px;">
                                    <img src="{{ asset('images/learning.png') }}" alt="Course">
                                    <span class="free-badge">Free</span>
                                </div>
                                <div class="course-card-body">
                                    <h4 style="font-size:12px;">The most complete scien..</h4>
                                    <p style="font-size:10px;">Topic Description Lorem ipsum...</p>
                                    <div class="course-card-footer">
                                        <div class="instructor-avatar" style="width:24px; height:24px;"></div>
                                        <div class="course-card-stats" style="font-size:10px;">
                                            <span>👁 4k</span>
                                            <span>👥 200</span>
                                            <span>⭐ 4.5</span>
                                        </div>
                                        <button class="heart-btn" style="font-size:14px;">♡</button>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>

                </div>
            </main>
        </div>
        
        <!-- Footerrevamped -->
        <footer class="home-footer" style="padding: 40px; margin-top:20px;">
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
                        <a href="#" class="social-icon facebook"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                        <a href="#" class="social-icon instagram"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
                        <a href="#" class="social-icon twitter"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>

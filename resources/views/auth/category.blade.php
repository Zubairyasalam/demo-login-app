<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories | IL² RMUTTO</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">
    <style>
        body {
            background-color: #F3F4F6;
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }
        
        .category-page-wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        /* Categories Header Button */
        .category-select-btn {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background-color: #F0F2F5;
            color: #4B5563;
            padding: 8px 12px 8px 20px;
            border-radius: 24px;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            border: 1px solid #E5E7EB;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .category-select-btn:hover {
            background-color: #E5E7EB;
        }
        
        .category-select-arrows {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 2px;
            background: white;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        }
        
        .category-select-arrows svg {
            width: 8px;
            height: 8px;
            stroke: #6B7280;
            stroke-width: 3;
        }

        /* Category page layout */
        .category-layout {
            display: flex;
            padding: 24px;
            gap: 24px;
            max-width: 1440px;
            margin: 0 auto;
            width: 100%;
            flex: 1;
        }

        /* Sidebar Filters */
        .filter-sidebar {
            width: 260px;
            background: white;
            border-radius: 12px;
            padding: 24px 20px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
            flex-shrink: 0;
            height: fit-content;
        }

        .filter-sidebar h3 {
            font-size: 14px;
            font-weight: 600;
            color: #111827;
            margin-bottom: 24px;
            padding-bottom: 12px;
            border-bottom: 1px solid #E5E7EB;
        }

        .filter-group {
            margin-bottom: 24px;
        }

        .filter-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            font-weight: 500;
            color: #374151;
            margin-bottom: 16px;
            cursor: pointer;
        }
        
        .filter-header svg {
            color: #9CA3AF;
        }

        .filter-options {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .filter-checkbox {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        .filter-checkbox input {
            appearance: none;
            width: 16px;
            height: 16px;
            border: 1.5px solid #D1D5DB;
            border-radius: 4px;
            background: #F9FAFB;
            cursor: pointer;
            transition: all 0.2s;
            position: relative;
        }

        .filter-checkbox input:checked {
            background: #2563EB;
            border-color: #2563EB;
        }

        .filter-checkbox input:checked::after {
            content: '';
            position: absolute;
            left: 5px;
            top: 2px;
            width: 3px;
            height: 7px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .filter-checkbox span {
            font-size: 13px;
            color: #6B7280;
            flex: 1;
        }

        .filter-checkbox .count {
            color: #9CA3AF;
            font-size: 12px;
        }

        /* Main Content Grid */
        .category-main {
            flex: 1;
            background: #F3F4F6;
            border-radius: 16px;
            padding: 0;
            /* box-shadow: 0 1px 3px rgba(0,0,0,0.05); */
        }

        .category-header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .category-header-top h1 {
            font-size: 18px;
            font-weight: 700;
            color: #111827;
            margin: 0;
        }

        .sort-by-wrap {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            color: #6B7280;
        }

        .sort-select-btn {
            display: flex;
            align-items: center;
            gap: 32px;
            background: white;
            border: 1px solid #E5E7EB;
            padding: 8px 16px;
            border-radius: 20px;
            color: #374151;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            position: relative;
            min-width: 140px;
            justify-content: space-between;
        }

        .sort-dropdown {
            position: absolute;
            top: calc(100% + 8px);
            right: 0;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            padding: 8px 0;
            min-width: 160px;
            z-index: 100;
            display: none;
        }
        
        .sort-dropdown.active {
            display: block;
        }

        .sort-option {
            padding: 10px 16px;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            font-size: 13px;
            color: #4B5563;
        }

        .sort-option:hover {
            background: #F3F4F6;
        }

        .sort-option.active {
            color: #111827;
            font-weight: 500;
        }

        /* Category Grid */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .category-card {
            border-radius: 16px;
            overflow: hidden;
            position: relative;
            background: #F9FAFB;
            aspect-ratio: 16/10;
            cursor: pointer;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .category-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .category-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .category-card-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(30, 58, 138, 0.9) 0%, rgba(30, 58, 138, 0.7) 40%, transparent 100%);
            padding: 30px 20px 20px;
        }

        .category-title {
            color: white;
            font-size: 16px;
            font-weight: 700;
        }

    </style>
</head>
<body>
    <div class="category-page-wrapper">
        <!-- Header -->
        <header class="top-header" style="background: white; border-bottom: 1px solid #E5E7EB; padding: 12px 24px; display: flex; justify-content: space-between; align-items: center;">
            <div class="header-left" style="display: flex; align-items: center; gap: 24px;">
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
                
                <div class="search-bar" style="background: #F3F4F6; border: none; padding: 10px 16px; border-radius: 20px; display: flex; align-items: center; gap: 10px; width: 300px;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#9CA3AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <input type="text" placeholder="Search here" style="border: none; background: transparent; outline: none; flex: 1; font-size: 14px;">
                </div>
            </div>

            <div class="header-right" style="display: flex; align-items: center; gap: 16px;">
                <button class="icon-btn" title="Wishlist" style="background: none; border: none; color: #4B5563; cursor: pointer;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l8.78-8.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                </button>
                <a href="{{ route('shopping.cart') }}" class="icon-btn" title="Cart" style="background: none; border: none; color: #4B5563; cursor: pointer;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                </a>
                <button class="icon-btn" title="Notifications" style="background: none; border: none; color: #4B5563; cursor: pointer; position: relative;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                    <span class="notification-badge" style="position: absolute; top: -5px; right: -5px; background: #EF4444; color: white; font-size: 10px; font-weight: 700; width: 16px; height: 16px; border-radius: 50%; display: flex; align-items: center; justify-content: center; border: 2px solid white;">2</span>
                </button>
                <a href="{{ route('account') }}" class="user-profile-btn" style="text-decoration: none; display: flex; align-items: center; gap: 8px; background: white; border: 1px solid #E5E7EB; padding: 6px 16px 6px 6px; border-radius: 30px; margin-left: 8px;">
                    <img src="{{ asset('images/default_avatar.png') }}" alt="Avatar" class="user-avatar-small" style="width: 32px; height: 32px; border-radius: 50%; object-fit: cover;">
                    <span class="user-name-small" style="font-size: 14px; font-weight: 500; color: #111827;">Student</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#6B7280" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
                </a>
            </div>
        </header>

        <!-- Main Content -->
        <div class="category-layout">
            <!-- Sidebar -->
            <aside class="filter-sidebar">
                <h3>Filters:</h3>
                
                <div class="filter-group">
                    <div class="filter-header">
                        Category
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
                    </div>
                    <div class="filter-options">
                        <label class="filter-checkbox">
                            <input type="checkbox" checked>
                            <span>Category 1</span>
                            <span class="count">0</span>
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox">
                            <span>Category 1</span>
                            <span class="count">4</span>
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox">
                            <span>Category 1</span>
                            <span class="count">4</span>
                        </label>
                    </div>
                </div>

                <div class="filter-group">
                    <div class="filter-header">
                        Sub-Category
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 15l-6-6-6 6"/></svg>
                    </div>
                    <div class="filter-options">
                        <label class="filter-checkbox">
                            <input type="checkbox" checked>
                            <span>Lorem Ipsum</span>
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox">
                            <span>Lorem Ipsum</span>
                        </label>
                    </div>
                </div>

                <div class="filter-group">
                    <div class="filter-header">
                        Subject
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                    </div>
                </div>

                <div class="filter-group">
                    <div class="filter-header">
                        Class
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                    </div>
                </div>

                <div class="filter-group">
                    <div class="filter-header">
                        Tutor
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 15l-6-6-6 6"/></svg>
                    </div>
                    <div class="filter-options">
                        <label class="filter-checkbox">
                            <input type="checkbox">
                            <span>Verified</span>
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox">
                            <span>Experienced</span>
                        </label>
                    </div>
                </div>

                <div class="filter-group">
                    <div class="filter-header">
                        Course Price
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                    </div>
                </div>
                
                <div class="filter-group">
                    <div class="filter-header">
                        Ratings
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                    </div>
                </div>

                <div class="filter-group">
                    <div class="filter-header">
                        Duration
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                    </div>
                </div>

                <div class="filter-group" style="margin-bottom: 0;">
                    <div class="filter-header">
                        Language
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                    </div>
                </div>

            </aside>

            <!-- Grid Content -->
            <main class="category-main">
                <div class="category-header-top">
                    <h1>Categories</h1>
                    <div class="sort-by-wrap">
                        <span>Sort by</span>
                        <div class="sort-select-btn" onclick="document.getElementById('sortDrop').classList.toggle('active')">
                            Default
                            <div class="category-select-arrows" style="width: 20px; height: 20px;">
                                <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round" style="width: 6px; height: 6px;"><polyline points="18 15 12 9 6 15"></polyline></svg>
                                <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round" style="width: 6px; height: 6px;"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </div>
                            
                            <div id="sortDrop" class="sort-dropdown active" style="top: calc(100% + 4px);">
                                <div class="sort-option active">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#111827" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    Default
                                </div>
                                <div class="sort-option">
                                    <div style="width: 16px;"></div>
                                    Most Popular
                                </div>
                                <div class="sort-option">
                                    <div style="width: 16px;"></div>
                                    Most Rated
                                </div>
                                <div class="sort-option">
                                    <div style="width: 16px;"></div>
                                    Date
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cards-grid">
                    @for($i = 0; $i < 9; $i++)
                    <div class="category-card">
                        <img src="{{ asset('images/category-robotics.jpg') }}" alt="Business Category">
                        <div class="category-card-overlay">
                            <span class="category-title">Business</span>
                        </div>
                    </div>
                    @endfor
                </div>
            </main>
        </div>
        
    </div>

    <script>
        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('sortDrop');
            const btn = dropdown.parentElement;
            if (!btn.contains(event.target)) {
                dropdown.classList.remove('active');
            }
        });
    </script>
</body>
</html>

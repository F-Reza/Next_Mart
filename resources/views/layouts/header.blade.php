<!-- Header -->
<header class="main-header">
    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand-lg theme-navbar bg-info-subtle">
        <div class="container">
            <!-- Logo and Mobile Toggle -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <h2 class="text-light text-logo">Next Mart</h2>
            </a>

            <div class="d-flex align-items-center order-lg-3">
                <!-- Header Actions (Cart, Wishlist, User) -->
                <div class="header-actions">
                    <button class="action-btn d-lg-none" id="mobileMenuToggle">
                        <i class="fas fa-bars action-icon"></i>
                    </button>

                    <a href="{{ url('/user-dash') }}">
                        <button class="action-btn">
                            <i class="fas fa-heart action-icon"></i>
                            <span class="action-text">Wishlist</span>
                            <span class="action-badge">5</span>
                        </button>
                    </a>

                    <a href="{{ url('/cart-list/product') }}">
                        <button class="action-btn">
                            <i class="fas fa-shopping-cart action-icon"></i>
                            <span class="action-text">Cart</span>
                            <span class="action-badge">3</span>
                        </button>
                    </a>

                    <div class="dropdown user-dropdown">
                        <button class="action-btn dropdown-toggle" type="button" id="userDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user action-icon"></i>
                            <span class="action-text">Account</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="{{ url('/user-dash') }}"><i class="fas fa-user me-2"></i>
                                    My
                                    Profile</a></li>
                            <li><a class="dropdown-item" href="{{ url('/user-dash') }}"><i
                                        class="fas fa-shopping-bag me-2"></i>
                                    Orders</a></li>
                            <li><a class="dropdown-item" href="{{ url('/user-dash') }}"><i
                                        class="fas fa-heart me-2"></i>
                                    Wishlist</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ url('/user-dash') }}"><i
                                        class="fas fa-sign-in-alt me-2"></i>
                                    Login</a></li>
                            <li><a class="dropdown-item" href="{{ url('/user-dash') }}"><i
                                        class="fas fa-user-plus me-2"></i>
                                    Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Search Box -->
            <div class="collapse navbar-collapse order-lg-2" id="navbarSearch">
                <div class="search-container">
                    <input type="search" class="form-control search-input"
                        placeholder="Search for products, brands and more...">
                    <button class="search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Category Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light theme-navbar-light">
        <div class="container">

            <div class="collapse navbar-collapse justify-content-center" id="navbarCategory">
                <ul class="navbar-nav category-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ url('/category/subcategory') }}" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-tv me-1"></i> Electronics
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="{{ url('/category/subcategory/mobile-phones') }}">Smartphones</a></li>
                            <li><a class="dropdown-item" href="{{ url('/category/subcategory/laptops') }}">Laptops</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ url('/category/subcategory/accessories') }}">Accessories</a></li>
                            <li><a class="dropdown-item" href="{{ url('/category/subcategory/camera') }}">Cameras</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ url('/category/subcategory') }}" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-tshirt me-1"></i> Fashion
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/category/subcategory/mens_clothing') }}">Men's
                                    Clothing</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ url('/category/subcategory/womens_clothing') }}">Women's Clothing</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('/category/subcategory/shoes') }}">Shoes</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ url('/category/subcategory/accessories') }}">Accessories</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/category/category1') }}">
                            <i class="fas fa-home me-1"></i> Home & Kitchen
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/category/category1') }}">
                            <i class="fas fa-heartbeat me-1"></i> Beauty & Health
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/category/category1') }}">
                            <i class="fas fa-running me-1"></i> Sports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/category/category1') }}">
                            <i class="fas fa-gem me-1"></i> Jewelry
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/category/category1') }}">
                            <i class="fas fa-tag me-1"></i> Today's Deals
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>
<div class="mobile-menu-container" id="mobileMenu">
    <div class="mobile-menu-header">
        <h5 class="mb-0">Menu</h5>
        <button class="mobile-menu-close" id="mobileMenuClose">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="mobile-menu-body">
        <!-- Improved Search Box -->
        <div class="search-container">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="form-control" placeholder="Search products...">
        </div>

        <a href="{{ url('/') }}" class="mobile-menu-item">
            <span class="mobile-menu-icon"><i class="fas fa-home"></i></span>
            <span>Home</span>
        </a>
        <a href="{{ url('/user-dash') }}" class="mobile-menu-item">
            <span class="mobile-menu-icon"><i class="fas fa-user"></i></span>
            <span>My Account</span>
        </a>
        <a href="{{ url('/user-dash') }}" class="mobile-menu-item">
            <span class="mobile-menu-icon"><i class="fas fa-shopping-bag"></i></span>
            <span>Orders</span>
        </a>
        <a href="{{ url('/user-dash') }}" class="mobile-menu-item">
            <span class="mobile-menu-icon"><i class="fas fa-heart"></i></span>
            <span>Wishlist</span>
            <span class="ms-auto badge bg-danger">5</span>
        </a>
        <a href="{{ url('/cart-list/product') }}" class="mobile-menu-item">
            <span class="mobile-menu-icon"><i class="fas fa-shopping-cart"></i></span>
            <span>Cart</span>
            <span class="ms-auto badge bg-danger">3</span>
        </a>

        <div class="dropdown-divider my-3"></div>

        <h6 class="text-uppercase text-muted mt-4 mb-2">Categories</h6>

        <a href="{{ url('/category/electronics') }}" class="mobile-menu-item">
            <span class="mobile-menu-icon"><i class="fas fa-tv"></i></span>
            <span>Electronics</span>
        </a>
        <a href="{{ url('/category/fashion') }}" class="mobile-menu-item">
            <span class="mobile-menu-icon"><i class="fas fa-tshirt"></i></span>
            <span>Fashion</span>
        </a>
        <a href="{{ url('/category/home_kitchen') }}" class="mobile-menu-item">
            <span class="mobile-menu-icon"><i class="fas fa-home"></i></span>
            <span>Home & Kitchen</span>
        </a>
        <a href="{{ url('/category/beauty_health') }}" class="mobile-menu-item">
            <span class="mobile-menu-icon"><i class="fas fa-heartbeat"></i></span>
            <span>Beauty & Health</span>
        </a>
        <a href="{{ url('/category/sports') }}" class="mobile-menu-item">
            <span class="mobile-menu-icon"><i class="fas fa-running"></i></span>
            <span>Sports</span>
        </a>
        <a href="{{ url('/category/jewelry') }}" class="mobile-menu-item">
            <span class="mobile-menu-icon"><i class="fas fa-gem"></i></span>
            <span>Jewelry</span>
        </a>
        <a href="{{ url('/category/odays_deals') }}" class="mobile-menu-item">
            <span class="mobile-menu-icon"><i class="fas fa-tag"></i></span>
            <span>Today's Deals</span>
        </a>

        <div class="dropdown-divider my-3"></div>

        <a href="#" class="mobile-menu-item">
            <span class="mobile-menu-icon"><i class="fas fa-sign-in-alt"></i></span>
            <span>Login</span>
        </a>
        <a href="#" class="mobile-menu-item">
            <span class="mobile-menu-icon"><i class="fas fa-user-plus"></i></span>
            <span>Register</span>
        </a>
    </div>
</div>

@push('styles')
    <style>
        :root {
            --primary-color: rgba(52, 18, 245, 0.966);
            --secondary-color: #ff5722;
            --light-bg: #f8f9fa;
            --dark-bg: #343a40;
            --text-dark: #212529;
            --text-light: #6c757d;
            --shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        body {
            color: var(--text-dark);
            padding-top: 140px;
        }

        /* Header Styles */
        .main-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            /* box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); */
        }

        .theme-navbar {
            box-shadow: var(--shadow);
            padding: 10px 0;
            font-weight: 600;
            letter-spacing: 0.5px;
            background-color: var(--primary-color) !important;
        }

        .text-logo {
            font-family: '', cursive;
            font-weight: 800;
            letter-spacing: 1.5px;
            color: #ffffff;
            /* font-size: 1.8rem; */
            margin: 0;

        }

        @media (max-width: 576px) {
            .text-logo {
                font-size: 1.5rem;
            }
        }

        .theme-orange-btn {
            background-color: var(--secondary-color);
            color: white;
            border: none;
            border-radius: 4px;
            padding: 8px 16px;
            transition: all 0.3s ease;
        }

        .theme-orange-btn:hover {
            background-color: #e64a19;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Search Box */
        .search-container {
            position: relative;
            width: 100%;
            min-width: 400px;
            max-width: 700px;
            margin: 0 auto;
        }

        .search-input {
            var(--bs-border-radius);
            padding-left: 20px;
            padding-right: 50px;
            height: 40px;
            border: 0.5px solid transparent;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            /* border-color: #ff0000e1; */
            /* box-shadow: 0 0 0 0.25rem rgba(243, 57, 0, 0.2); */
        }

        .search-btn {
            position: absolute;
            right: 5px;
            top: 3.5px;
            height: 34px;
            width: 44px;
            border-radius: 10%;
            background: transparent;
            border: none;
            color: var(--text-light);
            transition: all 0.3s ease;
        }

        .search-btn:hover {
            color: #3f2afadc;
            background-color: rgba(78, 66, 243, 0.1);
        }

        /* Header Actions */
        .header-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .header-actions a {
            text-decoration: none;
        }

        .action-btn {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            background: transparent;
            border: none;
            padding: 8px 12px;
            border-radius: 8px;
            transition: all 0.3s ease;
            min-width: 60px;
        }

        .action-btn:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .action-icon {
            font-size: 1.2rem;
            margin-bottom: 4px;
        }

        .action-text {
            font-size: 0.75rem;
            font-weight: 500;
        }

        .action-badge {
            position: absolute;
            top: 2px;
            right: 5px;
            background-color: var(--secondary-color);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            font-weight: bold;
        }

        /* User Dropdown */
        .user-dropdown .dropdown-toggle::after {
            display: none;
        }

        .user-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        /* Category Navigation */
        .theme-navbar-light {
            box-shadow: var(--shadow);
            padding: 0;
            letter-spacing: 0.5px;
            background-color: white !important;
        }

        .category-nav {
            padding: 0;
        }

        .category-nav .nav-link {
            /* color: var(--text-dark); */
            font-weight: 500;
            padding: 12px 16px;
            transition: all 0.3s ease;
            position: relative;
        }

        /* .category-nav .nav-link:hover {
                                                                                color: var(--secondary-color);
                                                                            } */

        .category-nav .nav-link:hover::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 16px;
            right: 16px;
            height: 3px;
            background-color: var(--secondary-color);
            border-radius: 3px 3px 0 0;
        }

        /* Dropdown menu styles for hover functionality */
        .category-nav .dropdown-menu {
            border: none;
            box-shadow: var(--shadow);
            border-radius: 5px;
            margin-top: 1px;
            display: block;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .category-nav .nav-item.dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .category-nav .dropdown-item {
            padding: 10px 16px;
            transition: all 0.3s ease;
        }

        .category-nav .dropdown-item:hover {
            background-color: rgba(52, 18, 245, 0.1);
            color: var(--primary-color);
        }

        /* Ensure dropdown stays open when hovering over it */
        .category-nav .dropdown-menu:hover {
            opacity: 1;
            visibility: visible;
        }

        /* Mobile Search Box Styles */
        .mobile-menu-body .form-control {
            border-radius: 10px;
            background-color: #f8f9fa;
            transition: all 0.3s ease;
            max-width: 62%;
            /* font-size: 16px; */
            /* Prevents zoom on iOS */
        }

        .mobile-menu-body .form-control:focus {
            border-color: var(--secondary-color, #ff3c22);
            background-color: #fff;
        }

        /* Optional: Add a search icon inside the input */
        .mobile-menu-body .search-container {
            position: relative;
            margin-bottom: 1rem;
        }

        .mobile-menu-body .search-container .form-control {
            padding-left: 45px;
        }

        .mobile-menu-body .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            z-index: 5;
        }

        /* Mobile Menu */
        .mobile-menu-container {
            position: fixed;
            top: 0;
            bottom: 0;
            left: -300px;
            width: 300px;
            background: white;
            z-index: 1040;
            overflow-y: auto;
            transition: all 0.3s ease;
            box-shadow: 5px 0 15px rgba(0, 0, 0, 0.1);
        }

        .mobile-menu-container.show {
            left: 0;
        }

        .mobile-menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1039;
            display: none;
        }

        .mobile-menu-overlay.show {
            display: block;
        }

        .mobile-menu-header {
            padding: 15px;
            background: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .mobile-menu-close {
            background: transparent;
            border: none;
            color: white;
            font-size: 1.5rem;
        }

        .mobile-menu-body {
            padding: 20px;
        }

        .mobile-menu-item {
            display: flex;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #eee;
            color: var(--text-dark);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .mobile-menu-item:hover {
            color: var(--primary-color);
        }

        .mobile-menu-icon {
            width: 24px;
            margin-right: 15px;
            text-align: center;
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .header-actions .action-text {
                display: none;
            }

            body {
                padding-top: 80px;
            }

            .action-btn {
                min-width: auto;
                padding: 8px;
            }

            .category-nav {
                overflow-x: auto;
                white-space: nowrap;
                flex-wrap: nowrap;
            }

            .category-nav .nav-item {
                display: inline-block;
                float: none;
            }
        }

        @media (max-width: 768px) {
            .search-container {
                max-width: 100%;
                margin: 10px 0;
            }

            body {
                padding-top: 60px;
            }

            .header-actions {
                gap: 8px;
            }
        }

        @media (max-width: 576px) {
            .text-logo {
                font-size: 1.4rem;
            }

            .action-btn {
                padding: 6px;
            }

            .action-icon {
                font-size: 1.1rem;
            }

            .action-badge {
                width: 16px;
                height: 16px;
                font-size: 0.6rem;
            }
        }

        /* Demo Content */
        .demo-content {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .demo-section {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: var(--shadow);
        }
    </style>

    @push('scripts')
        <script>
            // Mobile Menu Functionality
            document.addEventListener('DOMContentLoaded', function() {
                const mobileMenuToggle = document.getElementById('mobileMenuToggle');
                const mobileMenuClose = document.getElementById('mobileMenuClose');
                const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
                const mobileMenu = document.getElementById('mobileMenu');

                function openMobileMenu() {
                    mobileMenu.classList.add('show');
                    mobileMenuOverlay.classList.add('show');
                    document.body.style.overflow = 'hidden';
                }

                function closeMobileMenu() {
                    mobileMenu.classList.remove('show');
                    mobileMenuOverlay.classList.remove('show');
                    document.body.style.overflow = 'auto';
                }

                if (mobileMenuToggle) {
                    mobileMenuToggle.addEventListener('click', openMobileMenu);
                }

                if (mobileMenuClose) {
                    mobileMenuClose.addEventListener('click', closeMobileMenu);
                }

                if (mobileMenuOverlay) {
                    mobileMenuOverlay.addEventListener('click', closeMobileMenu);
                }

                // Category toggle for mobile
                const categoryToggle = document.getElementById('categoryToggle');
                const navbarCategory = document.getElementById('navbarCategory');

                if (categoryToggle && navbarCategory) {
                    categoryToggle.addEventListener('click', function() {
                        navbarCategory.classList.toggle('show');
                    });
                }

                // Close dropdowns when clicking outside
                document.addEventListener('click', function(e) {
                    if (!e.target.closest('.dropdown') && !e.target.matches('.dropdown-toggle')) {
                        const dropdowns = document.querySelectorAll('.dropdown-menu');
                        dropdowns.forEach(function(dropdown) {
                            dropdown.classList.remove('show');
                        });
                    }
                });
            });
        </script>
    @endpush

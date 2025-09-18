<header>
    <nav class="navbar navbar-expand-lg theme-navbar bg-info-subtle">
        <div class="container-fluid mx-5">
            <!-- Left section: Logo -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <h2 class="text-light text-logo">Next Mart</h2>
                {{-- <img src="{{ asset('assets/img/logo.png') }}" style="max-width: 140px" alt=""> --}}
            </a>

            <!-- Mobile toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarScroll">
                <!-- Center section: Search box -->
                <div class="d-flex mx-auto my-2 my-lg-0 position-relative"
                    style="min-width: 400px; max-width: 700px; width: 60%;">
                    <input class="form-control pe-5" type="search" placeholder="Search products..."
                        aria-label="Search">
                    <button class="btn btn-link text-secondary position-absolute end-0 top-50 translate-middle-y"
                        type="submit">
                        <i class="fa-solid fa-search"></i>
                    </button>
                </div>

                <!-- Right section: Navigation items -->
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item ms-2">
                        <a href="{{ url('/cart-list/product') }}" class="btn btn-success btn-sm text-light">
                            <i class="fa-solid fa-cart-shopping"></i> Cart
                            <span class="badge bg-danger ms-1">3</span>
                        </a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="#" class="btn btn-sm theme-orange-btn text-light">
                            <i class="fa-solid fa-user"></i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Secondary Catogory Navigation -->
    <nav class="navbar navbar-expand-lg py-2 bg-body-tertiary theme-navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#categoryNav"
                aria-controls="categoryNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> Categories
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="categoryNav">
                <ul class="nav ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-secondary" href="{{ url('/category/subcategory') }}"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Electronics</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/category/subcategory/mobile-phones') }}">Mobile
                                    Phones</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('/category/subcategory/laptops') }}">Laptops</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ url('/category/subcategory/accessories') }}">Accessories</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-secondary" href="{{ url('/category/subcategory') }}"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">Fashion</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/category/subcategory/mens_clothing') }}">Men's
                                    Clothing</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ url('/category/subcategory/womens_clothing') }}">Women's
                                    Clothing</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('/category/subcategory/shoes') }}">Shoes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="{{ url('/category/category1') }}">Home & Kitchen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="{{ url('/category/category1') }}">Beauty & Health</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="{{ url('/category/category1') }}">Sports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="{{ url('/category/category1') }}">Jewelry</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="{{ url('/category/category1') }}">Today's Deals</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>

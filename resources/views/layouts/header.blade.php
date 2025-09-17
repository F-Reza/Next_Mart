<header>
    <nav class="navbar navbar-expand-lg theme-navbar bg-info-subtle">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="{{ url('/') }}">
                <h2 class="text-light text-logo">Next Mart</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <form class="d-flex me-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search products..."
                        aria-label="Search">
                    <button class="btn btn-light text-secondary" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light">Become a Seller</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="#" class="btn btn-success btn-sm text-light">
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

    <!-- Secondary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#categoryNav"
                aria-controls="categoryNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> Categories
            </button>
            <div class="collapse navbar-collapse" id="categoryNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Electronics</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Mobile Phones</a></li>
                            <li><a class="dropdown-item" href="#">Laptops</a></li>
                            <li><a class="dropdown-item" href="#">Accessories</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Fashion</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Men's Clothing</a></li>
                            <li><a class="dropdown-item" href="#">Women's Clothing</a></li>
                            <li><a class="dropdown-item" href="#">Shoes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home & Kitchen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beauty & Health</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Today's Deals</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

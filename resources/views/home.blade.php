@extends('layouts.app')

@section('title', 'Home - Next Mart')

@section('content')

    <div class="container">
        {{-- <!-- Hero Section -->
        <div class="p-5 mb-4 bg-light rounded-3 hero-section">
            <div class="container-fluid py-5 text-center">
                <h1 class="display-5 fw-bold">Welcome to Next Mart</h1>
                <p class="col-md-8 fs-4 mx-auto">Discover amazing products at unbeatable prices. Shop with confidence and
                    enjoy fast delivery.</p>
                <button class="btn btn-primary btn-lg" type="button">Shop Now</button>
            </div>
        </div> --}}

        <!-- Carousel Slider -->
        <div id="carouselExampleCaptions" class="carousel slide mb-3">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/sliders/slider6.png') }}" class="d-block w-100" alt="slider">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Slide label</h5>
                        <p>Some representative placeholder content for the main slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/sliders/slider1.png') }}" class="d-block w-100" alt="slider">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/sliders/slider2.png') }}" class="d-block w-100" alt="slider">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/sliders/slider3.png') }}" class="d-block w-100" alt="slider">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/sliders/slider4.png') }}" class="d-block w-100" alt="slider">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Forth slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/sliders/slider5.png') }}" class="d-block w-100" alt="slider">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Fifth slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Category Section -->
        <section class="mb-5">
            <h2 class="text-center section-title ">Shop by Category</h2>
            <div class="row g-4">
                <!-- Electronics -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="category-card h-100 shadow-sm">
                        <div class="category-circle mt-4">
                            <img src="https://placehold.co/100x100/007bff/white?text=E" class="category-img"
                                alt="Electronics">
                        </div>
                        <div class="text-center">
                            <h6 class="card-title">Electronics</h6>
                            <a href="{{ url('/category/subcategory') }}"
                                class="btn btn-outline-primary btn-sm mt-2">Explore</a>
                        </div>
                    </div>
                </div>

                <!-- Fashion -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="category-card h-100 shadow-sm">
                        <div class="category-circle mt-4">
                            <img src="https://placehold.co/100x100/28a745/white?text=F" class="category-img" alt="Fashion">
                        </div>
                        <div class="text-center">
                            <h6 class="card-title">Fashion</h6>
                            <a href="{{ url('/category/subcategory') }}"
                                class="btn btn-outline-success btn-sm mt-2">Explore</a>
                        </div>
                    </div>
                </div>

                <!-- Home & Kitchen -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="category-card h-100 shadow-sm">
                        <div class="category-circle mt-4">
                            <img src="https://placehold.co/100x100/fd7e14/white?text=H" class="category-img"
                                alt="Home & Kitchen">
                        </div>
                        <div class="text-center">
                            <h6 class="card-title">Home & Kitchen</h6>
                            <a href="{{ url('/category/subcategory') }}"
                                class="btn btn-outline-warning btn-sm mt-2">Explore</a>
                        </div>
                    </div>
                </div>

                <!-- Beauty & Health -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="category-card h-100 shadow-sm">
                        <div class="category-circle mt-4">
                            <img src="https://placehold.co/100x100/d63384/white?text=B" class="category-img"
                                alt="Beauty & Health">
                        </div>
                        <div class="text-center">
                            <h6 class="card-title">Beauty & Health</h6>
                            <a href="{{ url('/category/subcategory') }}"
                                class="btn btn-outline-danger btn-sm mt-2">Explore</a>
                        </div>
                    </div>
                </div>

                <!-- Sports -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="category-card h-100 shadow-sm">
                        <div class="category-circle mt-4">
                            <img src="https://placehold.co/100x100/6f42c1/white?text=S" class="category-img"
                                alt="Sports">
                        </div>
                        <div class="text-center">
                            <h6 class="card-title">Sports</h6>
                            <a href="{{ url('/category/subcategory') }}"
                                class="btn btn-outline-info btn-sm mt-2">Explore</a>
                        </div>
                    </div>
                </div>

                <!-- Books -->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="category-card h-100 shadow-sm">
                        <div class="category-circle mt-4">
                            <img src="https://placehold.co/100x100/20c997/white?text=J" class="category-img"
                                alt="Books">
                        </div>
                        <div class="text-center">
                            <h6 class="card-title">Jewelry</h6>
                            <a href="{{ url('/category/subcategory') }}"
                                class="btn btn-outline-secondary btn-sm mt-2">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Product Section -->
        <!-- Top Deals -->
        <section class="mtb-5" style="margin-top: 60px">
            <div class="d-flex section-hr">
                <div class="flex-grow-1 align-self-center">
                    <h2 class="mb-3">Top Deals</h2>
                </div>
                <div class="align-self-center"><a href="#" class="btn btn-primary btn-sm text-light">View
                        All</a></div>
            </div>
            <div class="row mb-5">
                <div class="col-md-3 mb-3 category-card">
                    <div class="card product-card h-100">
                        <a href="{{ url('/product/product1/details') }}">
                            <img src="{{ asset('assets/img/products/p19.jpg') }}" class="card-img-top"
                                alt="Electronics"></a>
                        <div class="card-body text-center">
                            <a href="{{ url('/product/product1/details') }}">
                                <h6 class="card-title">Campus Shoes</h6>
                            </a>
                            <h5 class="card-title">$4.50.00</h5>
                            <a href="#" class="btn btn-outline-primary mt-2 theme-cart-btn btn-outline-success">Add
                                to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 category-card">
                    <div class="card product-card">
                        <a href="{{ url('/product/product1/details') }}">
                            <img src="{{ asset('assets/img/products/p20.jpg') }}" class="card-img-top"
                                alt="Fashion"></a>
                        <div class="card-body text-center">
                            <a href="{{ url('/product/product1/details') }}">
                                <h6 class="card-title">Fashion</h6>
                            </a>
                            <h5 class="card-title">$4.50.00</h5>
                            <a href="#" class="btn btn-outline-primary mt-2 theme-cart-btn btn-outline-success">Add
                                to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 category-card">
                    <div class="card product-card">
                        <a href="{{ url('/product/product1/details') }}">
                            <img src="{{ asset('assets/img/products/p22.jpg') }}" class="card-img-top"
                                alt="Home & Kitchen"></a>
                        <div class="card-body text-center">
                            <a href="{{ url('/product/product1/details') }}">
                                <h6 class="card-title">Home & Kitchen</h6>
                            </a>
                            <h5 class="card-title">$4.50.00</h5>
                            <a href="#" class="btn btn-outline-primary mt-2 theme-cart-btn btn-outline-success">Add
                                to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 category-card">
                    <div class="card product-card">
                        <a href="{{ url('/product/product1/details') }}">
                            <img src="{{ asset('assets/img/products/p36.jpg') }}" class="card-img-top"
                                alt="Beauty & Health"></a>
                        <div class="card-body text-center">
                            <a href="{{ url('/product/product1/details') }}">
                                <h6 class="card-title">Beauty & Health</h6>
                            </a>
                            <h5 class="card-title">$4.50.00</h5>
                            <a href="#" class="btn btn-outline-primary mt-2 theme-cart-btn btn-outline-success">Add
                                to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recently Viewed-->
        <section>
            <div class="d-flex section-hr">
                <div class="align-self-center">
                    <h2 class="mb-3">Recently Viewed</h2>
                </div>
                <div class="ms-auto align-self-center"><a href="#" class="btn btn-primary btn-sm text-light">View
                        All</a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-3 mb-3 category-card">
                    <div class="card product-card">
                        <img src="{{ asset('assets/img/products/p23.jpg') }}" class="card-img-top" alt="Electronics">
                        <div class="card-body text-center">
                            <h6 class="card-title">Electronics</h6>
                            <h5 class="card-title">$4.50.00</h5>
                            <a href="#" class="btn btn-outline-primary mt-2 theme-cart-btn btn-outline-success">Add
                                to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 category-card">
                    <div class="card product-card">
                        <img src="{{ asset('assets/img/products/p24.jpg') }}" class="card-img-top" alt="Electronics">
                        <div class="card-body text-center">
                            <h6 class="card-title">Electronics</h6>
                            <h5 class="card-title">$4.50.00</h5>
                            <a href="#" class="btn btn-outline-primary mt-2 theme-cart-btn btn-outline-success">Add
                                to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 category-card">
                    <div class="card product-card">
                        <img src="{{ asset('assets/img/products/p17.jpg') }}" class="card-img-top" alt="Electronics">
                        <div class="card-body text-center">
                            <h6 class="card-title">Electronics</h6>
                            <h5 class="card-title">$4.50.00</h5>
                            <a href="#" class="btn btn-outline-primary mt-2 theme-cart-btn btn-outline-success">Add
                                to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 category-card">
                    <div class="card product-card">
                        <img src="{{ asset('assets/img/products/p18.jpg') }}" class="card-img-top" alt="Electronics">
                        <div class="card-body text-center">
                            <h6 class="card-title">Electronics</h6>
                            <h5 class="card-title">$4.50.00</h5>
                            <a href="#" class="btn btn-outline-primary mt-2 theme-cart-btn btn-outline-success">Add
                                to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Products -->
        <section>
            <div class="d-flex section-hr">
                <div class="align-self-center">
                    <h2 class="mb-3">Featured Products</h2>
                </div>
                <div class="ms-auto align-self-center"><a href="#" class="btn btn-primary btn-sm text-light">View
                        All</a></div>
            </div>
            <div class="row mb-5 theme-products">
                <div class="col-md-3 mb-3 category-card">
                    <div class="card product-card h-100">
                        <img src="{{ asset('assets/img/products/p42.jpg') }}" class="card-img-top" alt="Headphones">
                        <div class="card-body">
                            <h5 class="card-title">Wireless Headphones</h5>
                            <p class="card-text">Premium sound quality with noise cancellation.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0 text-primary">$199.99</span>
                                <a href="#" class="btn btn-sm btn-outline-success">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 category-card">
                    <div class="card product-card h-100">
                        <img src="{{ asset('assets/img/products/p45.jpg') }}" class="card-img-top" alt="Smart Watch">
                        <div class="card-body">
                            <h5 class="card-title">Smart Watch</h5>
                            <p class="card-text">Track your fitness and stay connected.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0 text-primary">$249.99</span>
                                <a href="#" class="btn btn-sm btn-outline-success">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 category-card">
                    <div class="card product-card h-100">
                        <img src="{{ asset('assets/img/products/p14.jpg') }}" class="card-img-top" alt="Smart Watch">
                        <div class="card-body">
                            <h5 class="card-title">Natural Glow</h5>
                            <p class="card-text">Track your fitness and stay connected.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0 text-primary">$249.99</span>
                                <a href="#" class="btn btn-sm btn-outline-success">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 category-card">
                    <div class="card product-card h-100">
                        <img src="{{ asset('assets/img/products/p12.jpg') }}" class="card-img-top" alt="Smart Watch">
                        <div class="card-body">
                            <h5 class="card-title">Cosmetic</h5>
                            <p class="card-text">Track your fitness and stay connected.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0 text-primary">$249.99</span>
                                <a href="#" class="btn btn-sm btn-outline-success">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 category-card">
                    <div class="card product-card h-100">
                        <img src="{{ asset('assets/img/products/p33.jpg') }}" class="card-img-top" alt="Smartphone">
                        <div class="card-body">
                            <h5 class="card-title">Premium Smartphone</h5>
                            <p class="card-text">Latest model with advanced features and great camera.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0 text-primary">$599.99</span>
                                <a href="#" class="btn btn-sm btn-outline-success">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 category-card">
                    <div class="card product-card h-100">
                        <img src="{{ asset('assets/img/products/p40.jpg') }}" class="card-img-top" alt="Laptop">
                        <div class="card-body">
                            <h5 class="card-title">Ultra Thin Laptop</h5>
                            <p class="card-text">Powerful performance in a lightweight design.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0 text-primary">$899.99</span>
                                <a href="#" class="btn btn-sm btn-outline-success">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 category-card">
                    <div class="card product-card h-100">
                        <img src="{{ asset('assets/img/products/p28.jpg') }}" class="card-img-top" alt="Smart Watch">
                        <div class="card-body">
                            <h5 class="card-title">Mouse</h5>
                            <p class="card-text">Best performance and stay connected.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0 text-primary">$249.99</span>
                                <a href="#" class="btn btn-sm btn-outline-success">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 category-card">
                    <div class="card product-card h-100">
                        <img src="{{ asset('assets/img/products/p35.jpg') }}" class="card-img-top" alt="Smart Watch">
                        <div class="card-body">
                            <h5 class="card-title">Air Freasher</h5>
                            <p class="card-text">Track your fitness and stay connected.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0 text-primary">$249.99</span>
                                <a href="#" class="btn btn-sm btn-outline-success">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- More content to enable scrolling -->
        <section>
            <h2 class="section-title mt-5">Popular Categories</h2>
            <div class="row mb-5">
                <div class="col-md-3 mb-4 card category-card">
                    <div class="card product-card">
                        <img src="https://placehold.co/300x200/6f42c1/white?text=Electronics" class="card-img-top"
                            alt="Electronics">
                        <div class="card-body text-center">
                            <h5 class="card-title">Electronics</h5>
                            <a href="{{ url('/category/subcategory') }}" class="btn btn-outline-primary">Browse</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4 card category-card">
                    <div class="card product-card">
                        <img src="https://placehold.co/300x200/28a745/white?text=Fashion" class="card-img-top"
                            alt="Fashion">
                        <div class="card-body text-center">
                            <h5 class="card-title">Fashion</h5>
                            <a href="{{ url('/category/subcategory') }}" class="btn btn-outline-primary">Browse</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4 card category-card">
                    <div class="card product-card">
                        <img src="https://placehold.co/300x200/007bff/white?text=Home+Decor" class="card-img-top"
                            alt="Home Decor">
                        <div class="card-body text-center">
                            <h5 class="card-title">Home & Decor</h5>
                            <a href="{{ url('/category/subcategory') }}" class="btn btn-outline-primary">Browse</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4 card category-card">
                    <div class="card product-card">
                        <img src="https://placehold.co/300x200/ffc107/white?text=Sports" class="card-img-top"
                            alt="Sports">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sports</h5>
                            <a href="{{ url('/category/subcategory') }}" class="btn btn-outline-primary">Browse</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Promotional Banner -->
        <section>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="bg-primary text-white p-5 rounded-3 text-center">
                        <h2>Summer Sale - Up to 50% Off!</h2>
                        <p class="lead">Hurry up! Limited time offer on selected items.</p>
                        <button class="btn btn-light btn-lg">Shop the Sale</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mixed Layout Section -->
        <section>
            <div class="container text-center">
                <div class="row">
                    <div class="container-fluid py-3 text-center col-8">
                        <img src="{{ asset('assets/img/ads/big-sale-banner.jpg') }}" class="category-img"
                            alt="Electronics">
                    </div>
                    <div class="container-fluid py-3 text-center col-4">
                        <img src="{{ asset('assets/img/products/p15.jpg') }}" class="category-img" alt="Electronics">
                    </div>
                </div>
            </div>
        </section>

        <!-- Additional content to make the page longer -->
        <section>
            <div class="row mb-1 mt-5">
                <div class="col-12">
                    <h2 class="section-title">Why Shop With Us?</h2>
                    <div class="row">
                        <div class="col-md-4 text-center mb-4">
                            <div class="p-4">
                                <i class="fas fa-truck fa-3x text-primary mb-3"></i>
                                <h4>Fast Delivery</h4>
                                <p>We deliver most products within 2-3 business days.</p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <div class="p-4">
                                <i class="fas fa-shield-alt fa-3x text-primary mb-3"></i>
                                <h4>Secure Payment</h4>
                                <p>Your payment information is protected with encryption.</p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <div class="p-4">
                                <i class="fas fa-headset fa-3x text-primary mb-3"></i>
                                <h4>24/7 Support</h4>
                                <p>Our customer service team is always ready to help.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

    </div>
@endsection

@push('styles')
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
                url('https://placehold.co/1200x400/007bff/white?text=Next+Mart') center/cover no-repeat;
            color: white;
        }
    </style>
@endpush

@extends('layouts.app')

@section('title', 'Subcategory - Next Mart')

@section('content')

    <div class="container-fluid bg-light p-2">
        <h1 class="text-center"><i class="fa-solid fa-list"></i> Sub Category</h1>
    </div>
    <div class="container">
        <!-- Category Section -->
        <section class="mb-5 mt-1">
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
                            <img src="https://placehold.co/100x100/6f42c1/white?text=S" class="category-img" alt="Sports">
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
                            <img src="https://placehold.co/100x100/20c997/white?text=J" class="category-img" alt="Books">
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

        <!-- Featured Products -->
        <section>
            <div class="d-flex">
                <div class="flex-grow-1">
                    <h2 class="mb-3">Featured Products</h2>
                </div>
                <div><a href="#" class="btn btn-primary btn-sm text-light">View All</a></div>
            </div>
            <div class="row mb-5 theme-products">
                <div class="col-md-3 mb-3 category-card">
                    <div class="card product-card h-100">
                        <a href="{{ url('/category/category1/subcategory1/product1/details') }}">
                            <img src="{{ asset('assets/img/products/p33.jpg') }}" class="card-img-top" alt="Smartphone"></a>
                        <div class="card-body">
                            <a href="{{ url('/category/category1/subcategory1/product1/details') }}">
                                <h5 class="card-title">Premium Smartphone</h5>
                            </a>
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
                        <a href="{{ url('/category/category1/subcategory1/product1/details') }}">
                            <img src="{{ asset('assets/img/products/p40.jpg') }}" class="card-img-top" alt="Laptop"></a>
                        <div class="card-body">
                            <a href="{{ url('/category/category1/subcategory1/product1/details') }}">
                                <h5 class="card-title">Ultra Thin Laptop</h5>
                            </a>
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
                        <a href="{{ url('/category/category1/product1/details') }}">
                            <img src="{{ asset('assets/img/products/p42.jpg') }}" class="card-img-top"
                                alt="Wireless Headphones"></a>
                        <div class="card-body">
                            <a href="{{ url('/category/category1/product1/details') }}">
                                <h5 class="card-title">Wireless Headphones</h5>
                            </a>
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
                        <a href="{{ url('/category/category1/product1/details') }}">
                            <img src="{{ asset('assets/img/products/p45.jpg') }}" class="card-img-top"
                                alt="Smart Watch"></a>
                        <div class="card-body">
                            <a href="{{ url('/category/category1/product1/details') }}">
                                <h5 class="card-title">Smart Watch</h5>
                            </a>
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
    </div>


@endsection

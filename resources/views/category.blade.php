@extends('layouts.app')

@section('title', 'Category - Next Mart')

@section('content')

    <div class="container-fluid bg-light p-2">
        <h1 class="text-center"><i class="fa-solid fa-layer-group"></i> Category</h1>
    </div>
    <div class="container">
        <!-- Product Categorie -->
        <section>
            <div class="row mt-3">
                <div class="col-md-3 mb-3">
                    <div class="card category-card">
                        <img src="https://placehold.co/300x200/007bff/white?text=Electronics" class="card-img-top"
                            alt="Electronics">
                        <div class="card-body text-center">
                            <h5 class="card-title">Electronics</h5>
                            <a href="#" class="btn btn-outline-primary">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card category-card">
                        <img src="https://placehold.co/300x200/28a745/white?text=Fashion" class="card-img-top"
                            alt="Fashion">
                        <div class="card-body text-center">
                            <h5 class="card-title">Fashion</h5>
                            <a href="#" class="btn btn-outline-primary">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card category-card">
                        <img src="https://placehold.co/300x200/fd7e14/white?text=Home+%26+Kitchen" class="card-img-top"
                            alt="Home & Kitchen">
                        <div class="card-body text-center">
                            <h5 class="card-title">Home & Kitchen</h5>
                            <a href="#" class="btn btn-outline-primary">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card category-card">
                        <img src="https://placehold.co/300x200/d63384/white?text=Beauty+%26+Health" class="card-img-top"
                            alt="Beauty & Health">
                        <div class="card-body text-center">
                            <h5 class="card-title">Beauty & Health</h5>
                            <a href="#" class="btn btn-outline-primary">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
            </div>
        </section>
    </div>

@endsection

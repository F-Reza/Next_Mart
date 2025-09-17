@extends('layouts.app')

@section('title', 'Home - Next Mart')

@section('content')
    <div class="container">
        <!-- Hero Section -->
        <div class="p-5 mb-4 bg-light rounded-3 hero-section">
            <div class="container-fluid py-5 text-center">
                <h1 class="display-5 fw-bold">Welcome to Next Mart</h1>
                <p class="col-md-8 fs-4 mx-auto">Discover amazing products at unbeatable prices. Shop with confidence and
                    enjoy fast delivery.</p>
                <button class="btn btn-primary btn-lg" type="button">Shop Now</button>
            </div>
        </div>

        <!-- Featured Categories -->
        <h2 class="mb-4">Shop by Category</h2>
        <div class="row mb-5">
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
                    <img src="https://placehold.co/300x200/28a745/white?text=Fashion" class="card-img-top" alt="Fashion">
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

        <!-- Featured Products -->
        <h2 class="mb-4">Featured Products</h2>
        <div class="row mb-5">
            <div class="col-md-3 mb-3">
                <div class="card product-card h-100">
                    <img src="https://placehold.co/300x200/6f42c1/white?text=Smartphone" class="card-img-top"
                        alt="Smartphone">
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
            <div class="col-md-3 mb-3">
                <div class="card product-card h-100">
                    <img src="https://placehold.co/300x200/20c997/white?text=Laptop" class="card-img-top" alt="Laptop">
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
            <div class="col-md-3 mb-3">
                <div class="card product-card h-100">
                    <img src="https://placehold.co/300x200/fd7e14/white?text=Headphones" class="card-img-top"
                        alt="Headphones">
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
            <div class="col-md-3 mb-3">
                <div class="card product-card h-100">
                    <img src="https://placehold.co/300x200/e83e8c/white?text=Smart+Watch" class="card-img-top"
                        alt="Smart Watch">
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

        <!-- Promotional Banner -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="bg-primary text-white p-5 rounded-3 text-center">
                    <h2>Summer Sale - Up to 50% Off!</h2>
                    <p class="lead">Hurry up! Limited time offer on selected items.</p>
                    <button class="btn btn-light btn-lg">Shop the Sale</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
                url('https://placehold.co/1200x400/007bff/white?text=Next+Mart') center/cover no-repeat;
            color: white;
        }

        .category-card,
        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .category-card:hover,
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection

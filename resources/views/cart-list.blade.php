@extends('layouts.app')

@section('title', 'Shopping Cart - Next Mart')

@section('content')

    <!-- Header Section -->
    <div class="container-fluid cart-header py-3 mb-4">
        <h1 class="text-center mb-0"><i class="fa-solid fa-cart-shopping"></i> Shopping Cart</h1>
    </div>

    <!-- Cart Content -->
    <div class="container mb-5">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
            </ol>
        </nav>

        <div class="row">
            <!-- Cart Items -->
            <div class="col-lg-8">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3>Your Cart Items</h3>
                    <span class="badge bg-primary rounded-pill">3 items</span>
                </div>

                <!-- Cart Item 1 -->
                <div class="card cart-item">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-2 col-4">
                                <img src="https://placehold.co/300x300/007bff/white?text=Smartphone"
                                    class="product-image img-fluid" alt="Premium Smartphone">
                            </div>
                            <div class="col-md-4 col-8">
                                <h5 class="card-title">Premium Smartphone X5</h5>
                                <p class="card-text text-muted mb-0">Color: Midnight Black</p>
                                <p class="card-text text-muted">Storage: 128GB</p>
                            </div>
                            <div class="col-md-2 col-4 mt-3 mt-md-0">
                                <h5 class="text-primary">$599.99</h5>
                                <span class="original-price text-muted">$799.99</span>
                                <span class="badge bg-danger discount-badge ms-1">25% OFF</span>
                            </div>
                            <div class="col-md-2 col-4 mt-3 mt-md-0">
                                <div class="input-group">
                                    <button class="btn btn-outline-secondary quantity-btn" type="button">-</button>
                                    <input type="text" class="form-control text-center" value="1">
                                    <button class="btn btn-outline-secondary quantity-btn" type="button">+</button>
                                </div>
                            </div>
                            <div class="col-md-2 col-4 mt-3 mt-md-0 text-end">
                                <h5 class="text-success">$599.99</h5>
                                <button class="btn btn-link text-danger remove-btn p-0">
                                    <i class="fa-solid fa-trash"></i> Remove
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cart Item 2 -->
                <div class="card cart-item">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-2 col-4">
                                <img src="https://placehold.co/300x300/28a745/white?text=Headphones"
                                    class="product-image img-fluid" alt="Wireless Headphones">
                            </div>
                            <div class="col-md-4 col-8">
                                <h5 class="card-title">Wireless Headphones</h5>
                                <p class="card-text text-muted mb-0">Color: Black</p>
                                <p class="card-text text-muted">Version: Pro</p>
                            </div>
                            <div class="col-md-2 col-4 mt-3 mt-md-0">
                                <h5 class="text-primary">$199.99</h5>
                                <span class="original-price text-muted">$249.99</span>
                                <span class="badge bg-danger discount-badge ms-1">20% OFF</span>
                            </div>
                            <div class="col-md-2 col-4 mt-3 mt-md-0">
                                <div class="input-group">
                                    <button class="btn btn-outline-secondary quantity-btn" type="button">-</button>
                                    <input type="text" class="form-control text-center" value="2">
                                    <button class="btn btn-outline-secondary quantity-btn" type="button">+</button>
                                </div>
                            </div>
                            <div class="col-md-2 col-4 mt-3 mt-md-0 text-end">
                                <h5 class="text-success">$399.98</h5>
                                <button class="btn btn-link text-danger remove-btn p-0">
                                    <i class="fa-solid fa-trash"></i> Remove
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cart Item 3 -->
                <div class="card cart-item">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-2 col-4">
                                <img src="https://placehold.co/300x300/fd7e14/white?text=Smart+Watch"
                                    class="product-image img-fluid" alt="Smart Watch">
                            </div>
                            <div class="col-md-4 col-8">
                                <h5 class="card-title">Smart Watch Series 5</h5>
                                <p class="card-text text-muted mb-0">Color: Silver</p>
                                <p class="card-text text-muted">Size: 44mm</p>
                            </div>
                            <div class="col-md-2 col-4 mt-3 mt-md-0">
                                <h5 class="text-primary">$249.99</h5>
                            </div>
                            <div class="col-md-2 col-4 mt-3 mt-md-0">
                                <div class="input-group">
                                    <button class="btn btn-outline-secondary quantity-btn" type="button">-</button>
                                    <input type="text" class="form-control text-center" value="1">
                                    <button class="btn btn-outline-secondary quantity-btn" type="button">+</button>
                                </div>
                            </div>
                            <div class="col-md-2 col-4 mt-3 mt-md-0 text-end">
                                <h5 class="text-success">$249.99</h5>
                                <button class="btn btn-link text-danger remove-btn p-0">
                                    <i class="fa-solid fa-trash"></i> Remove
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Continue Shopping Button -->
                <div class="d-flex justify-content-between mt-4">
                    <a href="#" class="btn btn-outline-primary continue-shopping">
                        <i class="fa-solid fa-arrow-left me-2"></i>Continue Shopping
                    </a>
                    <button class="btn btn-outline-danger">
                        <i class="fa-solid fa-trash me-2"></i>Clear Cart
                    </button>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="card summary-card">
                    <div class="card-header bg-white">
                        <h4 class="mb-0">Order Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal (3 items)</span>
                            <span>$1,249.96</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Discount</span>
                            <span class="text-danger">-$150.00</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Shipping</span>
                            <span class="text-success">FREE</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Tax</span>
                            <span>$87.50</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-3">
                            <strong>Total</strong>
                            <strong>$1,187.46</strong>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-lg">
                                <i class="fa-solid fa-lock me-2"></i>Proceed to Checkout
                            </button>
                        </div>
                        <div class="text-center mt-3">
                            <p class="text-muted">or</p>
                            <button class="btn btn-outline-dark">
                                <i class="fa-brands fa-paypal me-2"></i>Checkout with PayPal
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Security Note -->
                <div class="alert alert-info mt-4" role="alert">
                    <div class="d-flex">
                        <div class="me-3">
                            <i class="fa-solid fa-shield-alt fa-2x"></i>
                        </div>
                        <div>
                            <h6 class="alert-heading">Secure Shopping</h6>
                            <p class="mb-0">Your transaction is secured with SSL encryption.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('styles')
    <style>
        .cart-header {
            background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
            color: white;
        }

        .cart-item {
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
            transition: transform 0.2s;
            margin-bottom: 20px;
        }

        .cart-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            border-radius: 10px;
            width: 100%;
            max-width: 120px;
        }

        .quantity-btn {
            width: 35px;
            height: 35px;
        }

        .summary-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            position: sticky;
            top: 20px;
        }

        .empty-cart {
            padding: 60px 0;
            text-align: center;
        }

        .empty-cart-icon {
            font-size: 5rem;
            color: #dee2e6;
            margin-bottom: 20px;
        }

        .continue-shopping {
            padding: 12px 30px;
            font-weight: 600;
        }

        .remove-btn:hover {
            color: #dc3545 !important;
        }

        .discount-badge {
            font-size: 0.8rem;
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Quantity buttons functionality
        document.querySelectorAll('.quantity-btn').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input');
                let value = parseInt(input.value);

                if (this.textContent === '+') {
                    input.value = value + 1;
                } else if (this.textContent === '-' && value > 1) {
                    input.value = value - 1;
                }

                // Here you would recalculate the price
                // This is a simplified version
            });
        });

        // Remove item functionality
        document.querySelectorAll('.remove-btn').forEach(button => {
            button.addEventListener('click', function() {
                const cartItem = this.closest('.cart-item');
                cartItem.style.opacity = '0';
                setTimeout(() => {
                    cartItem.remove();
                    // Here you would update the cart summary
                }, 300);
            });
        });
    </script>
@endpush

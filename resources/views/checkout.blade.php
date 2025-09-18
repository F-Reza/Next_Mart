@extends('layouts.app')

@section('title', 'Checkout - Next Mart')

@section('content')
    <!-- Checkout Header -->
    <div class="container-fluid cart-header bg-light py-3 mb-4">
        <h1 class="text-center mb-0 display-6 fw-bold"><i class="fa-solid fa-credit-card"></i> Checkout</h1>
        <p class="lead text-center">Complete your purchase with secure payment</p>
    </div>

    <!-- Checkout Content -->
    <div class="container checkout-container">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Cart</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav>
        <div class="row">
            <!-- Shipping and Payment Form -->
            <div class="col-lg-8">
                <div class="checkout-card mb-4">
                    <div class="card-header">
                        <i class="fas fa-shipping-fast me-2"></i>
                        Shipping Information
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Shipping Address</label>
                                <input type="text" class="form-control" id="address" required>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state" class="form-label">State</label>
                                    <input type="text" class="form-control" id="state" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="zipCode" class="form-label">ZIP Code</label>
                                    <input type="text" class="form-control" id="zipCode" required>
                                </div>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="saveAddress">
                                <label class="form-check-label" for="saveAddress">
                                    Save this address for future purchases
                                </label>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="checkout-card mb-4">
                    <div class="card-header">
                        <i class="far fa-credit-card me-2"></i>
                        Payment Method
                    </div>
                    <div class="card-body">
                        <div class="payment-method selected">
                            <input class="form-check-input" type="radio" name="paymentMethod" id="creditCard" checked>
                            <label class="form-check-label w-100" for="creditCard">
                                Credit/Debit Card
                            </label>
                        </div>
                        <div class="payment-method">
                            <input class="form-check-input" type="radio" name="paymentMethod" id="paypal">
                            <label class="form-check-label w-100" for="paypal">
                                PayPal
                            </label>
                        </div>
                        <div class="payment-method">
                            <input class="form-check-input" type="radio" name="paymentMethod" id="bankTransfer">
                            <label class="form-check-label w-100" for="bankTransfer">
                                Bank Transfer
                            </label>
                        </div>

                        <div class="mt-4" id="creditCardForm">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="cardNumber" class="form-label">Card Number</label>
                                    <input type="text" class="form-control" id="cardNumber"
                                        placeholder="1234 5678 9012 3456">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="expiryDate" class="form-label">Expiry Date</label>
                                    <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cvv" class="form-label">CVV</label>
                                    <input type="text" class="form-control" id="cvv" placeholder="123">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="cardName" class="form-label">Name on Card</label>
                                    <input type="text" class="form-control" id="cardName">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-4">
                <div class="checkout-card sticky-top" style="top: 20px;">
                    <div class="card-header">
                        <i class="fas fa-receipt me-2"></i>
                        Order Summary
                    </div>
                    <div class="card-body">
                        <div class="order-summary-item">
                            <div class="d-flex">
                                <img src="https://placehold.co/300x200/007bff/white?text=Product+1" alt="Product"
                                    class="product-image me-3">
                                <div>
                                    <h6 class="mb-0">Wireless Headphones</h6>
                                    <small class="text-muted">Quantity: 1</small>
                                </div>
                            </div>
                            <div class="fw-bold">$129.99</div>
                        </div>

                        <div class="order-summary-item">
                            <div class="d-flex">
                                <img src="https://placehold.co/300x200/28a745/white?text=Product+2" alt="Product"
                                    class="product-image me-3">
                                <div>
                                    <h6 class="mb-0">Smart Watch</h6>
                                    <small class="text-muted">Quantity: 1</small>
                                </div>
                            </div>
                            <div class="fw-bold">$199.99</div>
                        </div>

                        <div class="divider"></div>

                        <div class="order-summary-item">
                            <div>Subtotal</div>
                            <div>$329.98</div>
                        </div>

                        <div class="order-summary-item">
                            <div>Shipping</div>
                            <div>$9.99</div>
                        </div>

                        <div class="order-summary-item">
                            <div>Tax</div>
                            <div>$26.40</div>
                        </div>

                        <div class="divider"></div>

                        <div class="order-summary-item summary-total">
                            <div>Total</div>
                            <div>$366.37</div>
                        </div>

                        <button class="btn btn-checkout w-100 mt-3">
                            Place Order
                        </button>

                        <div class="secure-checkout">
                            <i class="fas fa-lock"></i>
                            <span>Secure checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@push('styles')
    <style>
        .checkout-container {
            /* max-width: 1200px; */
        }

        .breadcrumb-item a {
            text-decoration: none;
        }

        .checkout-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
        }

        .checkout-card .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
            font-weight: 600;
            padding: 1rem 1.5rem;
        }

        .checkout-card .card-body {
            padding: 1.5rem;
        }

        .form-label {
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .form-control:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
        }

        .order-summary-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 0;
            border-bottom: 1px solid #e9ecef;
        }

        .order-summary-item:last-child {
            border-bottom: none;
        }

        .product-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
        }

        .divider {
            height: 1px;
            background-color: #e9ecef;
            margin: 1rem 0;
        }

        .summary-total {
            font-size: 1.2rem;
            font-weight: 600;
        }

        .btn-checkout {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            color: #fff;
        }

        .btn-checkout:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            color: #fff;
        }

        .payment-method {
            display: flex;
            align-items: center;
            padding: 0.75rem;
            border: 1px solid #e9ecef;
            border-radius: 5px;
            margin-bottom: 10px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .payment-method:hover {
            border-color: #86b7fe;
            background-color: #f8f9fa;
        }

        .payment-method.selected {
            border-color: #0d6efd;
            background-color: rgba(13, 110, 253, 0.05);
        }

        .payment-method input {
            margin-right: 10px;
        }

        .secure-checkout {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 1rem;
            color: #6c757d;
        }

        .secure-checkout i {
            color: #28a745;
            margin-right: 5px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .checkout-header h1 {
                font-size: 1.8rem;
            }

            .checkout-card .card-body {
                padding: 1rem;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Scroll to Top Functionality
        const scrollToTopBtn = document.getElementById('scrollToTop');

        // Show button when scrolling down
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.add('show');
            } else {
                scrollToTopBtn.classList.remove('show');
            }
        });

        // Scroll to top when button is clicked
        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Payment method selection
        document.querySelectorAll('.payment-method').forEach(method => {
            method.addEventListener('click', () => {
                document.querySelectorAll('.payment-method').forEach(m => {
                    m.classList.remove('selected');
                });
                method.classList.add('selected');
                method.querySelector('input').checked = true;
            });
        });

        // Form validation
        document.querySelector('.btn-checkout').addEventListener('click', (e) => {
            e.preventDefault();
            alert('Order placed successfully! Thank you for your purchase.');
        });
    </script>
@endpush

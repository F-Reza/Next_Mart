@extends('layouts.app')

@section('title', 'Category - Next Mart')

@section('content')

    <!-- Header Section -->
    <div class="container-fluid bg-light py-3 mb-4">
        <h1 class="text-center mb-0"><i class="fa-solid fa-circle-info"></i> Product Details</h1>
    </div>

    <!-- Product Details Section -->
    <div class="container mb-5">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Electronics</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Smartphones</a></li>
                <li class="breadcrumb-item active" aria-current="page">Premium Smartphone X5</li>
            </ol>
        </nav>

        <div class="row">
            <!-- Product Images -->
            <div class="col-lg-6">
                <div class="card product-info-card mb-4">
                    <div class="card-body">
                        <span class="badge bg-danger discount-badge fs-6">25% OFF</span>
                        <div class="text-center mb-4">
                            <img src="https://placehold.co/500x500/007bff/white?text=Premium+Smartphone+X5"
                                class="product-image img-fluid" alt="Premium Smartphone X5" id="mainImage">
                        </div>
                        <div class="d-flex justify-content-center gap-2">
                            <img src="https://placehold.co/100x100/007bff/white?text=Front"
                                class="thumbnail img-fluid rounded" width="80" onclick="changeImage(this)"
                                alt="Front view">
                            <img src="https://placehold.co/100x100/28a745/white?text=Back"
                                class="thumbnail img-fluid rounded" width="80" onclick="changeImage(this)"
                                alt="Back view">
                            <img src="https://placehold.co/100x100/fd7e14/white?text=Side"
                                class="thumbnail img-fluid rounded" width="80" onclick="changeImage(this)"
                                alt="Side view">
                            <img src="https://placehold.co/100x100/d63384/white?text=Angle"
                                class="thumbnail img-fluid rounded" width="80" onclick="changeImage(this)"
                                alt="Angle view">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Info -->
            <div class="col-lg-6">
                <div class="card product-info-card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Premium Smartphone X5</h2>
                        <div class="d-flex align-items-center mb-3">
                            <div class="rating me-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-muted">(142 reviews)</span>
                        </div>

                        <div class="mb-3">
                            <span class="price">$599.99</span>
                            <span class="original-price ms-2">$799.99</span>
                        </div>

                        <p class="card-text">Experience the future of mobile technology with our Premium Smartphone X5.
                            Featuring a stunning display, powerful processor, and professional-grade camera system.</p>

                        <div class="mb-4">
                            <h5>Color Options</h5>
                            <div class="d-flex gap-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="colorOptions" id="color1"
                                        checked>
                                    <label class="form-check-label" for="color1">
                                        Midnight Black
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="colorOptions" id="color2">
                                    <label class="form-check-label" for="color2">
                                        Glacier Silver
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="colorOptions" id="color3">
                                    <label class="form-check-label" for="color3">
                                        Ocean Blue
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h5>Storage Options</h5>
                            <div class="d-flex gap-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="storageOptions" id="storage1"
                                        checked>
                                    <label class="form-check-label" for="storage1">
                                        128GB
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="storageOptions" id="storage2">
                                    <label class="form-check-label" for="storage2">
                                        256GB
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="storageOptions" id="storage3">
                                    <label class="form-check-label" for="storage3">
                                        512GB
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4">
                            <label class="me-3 fw-bold">Quantity:</label>
                            <div class="input-group" style="width: 140px;">
                                <button class="btn btn-outline-secondary quantity-btn" type="button"
                                    id="decreaseQty">-</button>
                                <input type="number" class="form-control text-center" value="1" min="1"
                                    id="quantityInput">
                                <button class="btn btn-outline-secondary quantity-btn" type="button"
                                    id="increaseQty">+</button>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <button class="btn btn-primary add-to-cart-btn flex-grow-1">
                                <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                            </button>
                            <button class="btn btn-outline-danger">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Details Tabs -->
        <div class="card product-info-card">
            <div class="card-body">
                <ul class="nav nav-tabs mb-4" id="productTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                            data-bs-target="#description" type="button" role="tab">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="specifications-tab" data-bs-toggle="tab"
                            data-bs-target="#specifications" type="button" role="tab">Specifications</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                            type="button" role="tab">Reviews (142)</button>
                    </li>
                </ul>

                <div class="tab-content" id="productTabsContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <h4>Product Description</h4>
                        <p>The Premium Smartphone X5 redefines what a smartphone can do. With its cutting-edge technology
                            and sleek design, it's the perfect device for both work and play.</p>

                        <h5>Key Features:</h5>
                        <ul>
                            <li>6.7-inch Super Retina XDR display with ProMotion</li>
                            <li>A15 Bionic chip with 5-core GPU</li>
                            <li>Pro camera system with Night mode, Deep Fusion, and Smart HDR 4</li>
                            <li>Cinematic mode for recording videos with shallow depth of field</li>
                            <li>5G connectivity for ultra-fast downloads and streaming</li>
                            <li>All-day battery life with fast charging capability</li>
                            <li>Ceramic Shield front cover, tougher than any smartphone glass</li>
                        </ul>
                    </div>

                    <div class="tab-pane fade" id="specifications" role="tabpanel">
                        <h4>Technical Specifications</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="specs-list">
                                    <li><i class="fas fa-microchip"></i> <strong>Chip:</strong> A15 Bionic chip</li>
                                    <li><i class="fas fa-mobile-alt"></i> <strong>Display:</strong> 6.7-inch Super Retina
                                        XDR</li>
                                    <li><i class="fas fa-camera"></i> <strong>Camera:</strong> Triple 12MP camera system
                                    </li>
                                    <li><i class="fas fa-battery-full"></i> <strong>Battery:</strong> Up to 28 hours video
                                        playback</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="specs-list">
                                    <li><i class="fas fa-sd-card"></i> <strong>Storage:</strong> 128GB, 256GB, 512GB</li>
                                    <li><i class="fas fa-shield-alt"></i> <strong>Water Resistance:</strong> IP68 rating
                                    </li>
                                    <li><i class="fas fa-weight"></i> <strong>Weight:</strong> 238 grams</li>
                                    <li><i class="fas fa-expand"></i> <strong>Dimensions:</strong> 160.8 x 78.1 x 7.7 mm
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <h4>Customer Reviews</h4>

                        <div class="review-card card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">John D.</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h6 class="text-muted">Posted on January 15, 2023</h6>
                                <p class="card-text">This is hands down the best smartphone I've ever owned. The camera
                                    quality is exceptional, and the battery life lasts me all day with heavy use.</p>
                            </div>
                        </div>

                        <div class="review-card card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">Sarah M.</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <h6 class="text-muted">Posted on February 3, 2023</h6>
                                <p class="card-text">The display is absolutely stunning! I use my phone for photo editing,
                                    and the color accuracy is impressive. Performance is smooth with no lag.</p>
                            </div>
                        </div>

                        <div class="review-card card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">Michael T.</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <h6 class="text-muted">Posted on March 10, 2023</h6>
                                <p class="card-text">Great phone overall, but I wish it had a faster charging option. The
                                    camera system is phenomenal though, especially in low light conditions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        // Change main image when thumbnail is clicked
        function changeImage(element) {
            document.getElementById('mainImage').src = element.src;

            // Remove active class from all thumbnails
            const thumbnails = document.querySelectorAll('.thumbnail');
            thumbnails.forEach(thumb => thumb.classList.remove('active'));

            // Add active class to clicked thumbnail
            element.classList.add('active');
        }

        // Quantity buttons functionality
        document.getElementById('decreaseQty').addEventListener('click', function() {
            const quantityInput = document.getElementById('quantityInput');
            if (quantityInput.value > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
            }
        });

        document.getElementById('increaseQty').addEventListener('click', function() {
            const quantityInput = document.getElementById('quantityInput');
            quantityInput.value = parseInt(quantityInput.value) + 1;
        });

        // Initialize first thumbnail as active
        document.querySelector('.thumbnail').classList.add('active');
    </script>
@endpush

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile - Next Mart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .profile-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .profile-sidebar {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .profile-content {
            background-color: #fff;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .nav-pills .nav-link.active {
            background-color: rgba(52, 18, 245, 0.966);
        }

        .order-status-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
        }

        .order-card {
            transition: transform 0.2s;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .order-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .wishlist-item {
            border-bottom: 1px solid #eee;
            padding: 15px 0;
        }

        .wishlist-item:last-child {
            border-bottom: none;
        }
    </style>
</head>

<body>
    @include('layouts.header')

    <main class="py-4">
        <div class="container profile-container">
            <div class="row">
                <!-- Sidebar Navigation -->
                <div class="col-md-3 mb-4">
                    <div class="profile-sidebar text-center">
                        <div class="mb-4">
                            <img src="https://i.pravatar.cc/120?img=12" alt="Profile Picture" class="profile-picture">
                            <h4 class="mt-3">John Doe</h4>
                            <p class="text-muted">john.doe@example.com</p>
                            <a href="#" class="btn btn-sm theme-orange-btn text-light">Edit Profile</a>
                        </div>

                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#profile" data-bs-toggle="pill">
                                    <i class="fas fa-user me-2"></i> Profile Information
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#orders" data-bs-toggle="pill">
                                    <i class="fas fa-shopping-bag me-2"></i> Orders
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#addresses" data-bs-toggle="pill">
                                    <i class="fas fa-map-marker-alt me-2"></i> Addresses
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#wishlist" data-bs-toggle="pill">
                                    <i class="fas fa-heart me-2"></i> Wishlist
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#settings" data-bs-toggle="pill">
                                    <i class="fas fa-cog me-2"></i> Account Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-danger" href="#">
                                    <i class="fas fa-sign-out-alt me-2"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-md-9">
                    <div class="tab-content profile-content">
                        <!-- Profile Information Tab -->
                        <div class="tab-pane fade show active" id="profile">
                            <h3 class="mb-4">Profile Information</h3>
                            <form>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstName" value="John">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" value="Doe">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email"
                                        value="john.doe@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" value="+1 (555) 123-4567">
                                </div>
                                <div class="mb-3">
                                    <label for="birthdate" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="birthdate" value="1990-01-15">
                                </div>
                                <button type="submit" class="btn theme-orange-btn text-light">Update Profile</button>
                            </form>
                        </div>

                        <!-- Orders Tab -->
                        <div class="tab-pane fade" id="orders">
                            <h3 class="mb-4">Order History</h3>

                            <div class="order-card mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <strong>Order #NM12345</strong>
                                            <p class="text-muted mb-0">Placed on January 15, 2025</p>
                                        </div>
                                        <span class="order-status-badge bg-success text-light">Delivered</span>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-2">
                                            <img src="https://via.placeholder.com/80" alt="Product"
                                                class="img-fluid rounded">
                                        </div>
                                        <div class="col-md-6">
                                            <h6>Wireless Bluetooth Headphones</h6>
                                            <p class="text-muted mb-0">Quantity: 1</p>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <h6>$89.99</h6>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="btn btn-outline-secondary btn-sm">View Details</a>
                                        <a href="#" class="btn theme-orange-btn text-light btn-sm">Reorder</a>
                                    </div>
                                </div>
                            </div>

                            <div class="order-card mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <strong>Order #NM12346</strong>
                                            <p class="text-muted mb-0">Placed on January 10, 2025</p>
                                        </div>
                                        <span class="order-status-badge bg-warning text-dark">Processing</span>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-2">
                                            <img src="https://via.placeholder.com/80" alt="Product"
                                                class="img-fluid rounded">
                                        </div>
                                        <div class="col-md-6">
                                            <h6>Smart Watch Series 5</h6>
                                            <p class="text-muted mb-0">Quantity: 1</p>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <h6>$199.99</h6>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="btn btn-outline-secondary btn-sm">View Details</a>
                                        <a href="#" class="btn theme-orange-btn text-light btn-sm">Track
                                            Order</a>
                                    </div>
                                </div>
                            </div>

                            <nav aria-label="Order history pagination">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <!-- Addresses Tab -->
                        <div class="tab-pane fade" id="addresses">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h3 class="mb-0">Saved Addresses</h3>
                                <button class="btn theme-orange-btn text-light" data-bs-toggle="modal"
                                    data-bs-target="#addAddressModal">
                                    <i class="fas fa-plus me-1"></i> Add New Address
                                </button>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h5 class="card-title">Home Address</h5>
                                            <p class="card-text">
                                                123 Main Street<br>
                                                Apartment 4B<br>
                                                New York, NY 10001<br>
                                                United States
                                            </p>
                                            <p class="card-text">
                                                <strong>Phone:</strong> +1 (555) 123-4567
                                            </p>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-outline-primary btn-sm me-2">Edit</a>
                                                <a href="#" class="btn btn-outline-danger btn-sm">Remove</a>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-white text-end">
                                            <span class="badge bg-success">Default</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h5 class="card-title">Work Address</h5>
                                            <p class="card-text">
                                                456 Office Park<br>
                                                Suite 300<br>
                                                New York, NY 10002<br>
                                                United States
                                            </p>
                                            <p class="card-text">
                                                <strong>Phone:</strong> +1 (555) 987-6543
                                            </p>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-outline-primary btn-sm me-2">Edit</a>
                                                <a href="#" class="btn btn-outline-danger btn-sm">Remove</a>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-white text-end">
                                            <a href="#" class="btn btn-sm btn-outline-secondary">Set as
                                                Default</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wishlist Tab -->
                        <div class="tab-pane fade" id="wishlist">
                            <h3 class="mb-4">Your Wishlist</h3>

                            <div class="wishlist-item">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="https://via.placeholder.com/100" alt="Product"
                                            class="img-fluid rounded">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Wireless Earbuds</h5>
                                        <p class="text-muted">Noise cancelling with 24h battery life</p>
                                        <div class="d-flex">
                                            <span class="text-success me-3"><strong>$79.99</strong></span>
                                            <span class="text-danger"><s>$99.99</s></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <button class="btn theme-orange-btn text-light mb-2">
                                            <i class="fas fa-shopping-cart me-1"></i> Add to Cart
                                        </button>
                                        <br>
                                        <button class="btn btn-outline-danger btn-sm">
                                            <i class="fas fa-trash me-1"></i> Remove
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="wishlist-item">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="https://via.placeholder.com/100" alt="Product"
                                            class="img-fluid rounded">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Smart Home Hub</h5>
                                        <p class="text-muted">Control your home with voice commands</p>
                                        <div class="d-flex">
                                            <span class="text-success me-3"><strong>$129.99</strong></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <button class="btn theme-orange-btn text-light mb-2">
                                            <i class="fas fa-shopping-cart me-1"></i> Add to Cart
                                        </button>
                                        <br>
                                        <button class="btn btn-outline-danger btn-sm">
                                            <i class="fas fa-trash me-1"></i> Remove
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="wishlist-item">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="https://via.placeholder.com/100" alt="Product"
                                            class="img-fluid rounded">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Fitness Tracker</h5>
                                        <p class="text-muted">Track your steps, heart rate, and sleep</p>
                                        <div class="d-flex">
                                            <span class="text-success me-3"><strong>$49.99</strong></span>
                                            <span class="text-danger"><s>$69.99</s></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <button class="btn theme-orange-btn text-light mb-2">
                                            <i class="fas fa-shopping-cart me-1"></i> Add to Cart
                                        </button>
                                        <br>
                                        <button class="btn btn-outline-danger btn-sm">
                                            <i class="fas fa-trash me-1"></i> Remove
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Account Settings Tab -->
                        <div class="tab-pane fade" id="settings">
                            <h3 class="mb-4">Account Settings</h3>

                            <div class="card mb-4">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Password</h5>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="currentPassword" class="form-label">Current Password</label>
                                            <input type="password" class="form-control" id="currentPassword">
                                        </div>
                                        <div class="mb-3">
                                            <label for="newPassword" class="form-label">New Password</label>
                                            <input type="password" class="form-control" id="newPassword">
                                        </div>
                                        <div class="mb-3">
                                            <label for="confirmPassword" class="form-label">Confirm New
                                                Password</label>
                                            <input type="password" class="form-control" id="confirmPassword">
                                        </div>
                                        <button type="submit" class="btn theme-orange-btn text-light">Update
                                            Password</button>
                                    </form>
                                </div>
                            </div>

                            <div class="card mb-4">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Notification Preferences</h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" id="emailNotifications"
                                            checked>
                                        <label class="form-check-label" for="emailNotifications">Email
                                            Notifications</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" id="smsNotifications">
                                        <label class="form-check-label" for="smsNotifications">SMS
                                            Notifications</label>
                                    </div>
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" id="promotionalEmails"
                                            checked>
                                        <label class="form-check-label" for="promotionalEmails">Promotional
                                            Emails</label>
                                    </div>
                                    <button type="submit" class="btn theme-orange-btn text-light">Save
                                        Preferences</button>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Account Management</h5>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted">Once you delete your account, there is no going back. Please
                                        be certain.</p>
                                    <button class="btn btn-outline-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteAccountModal">
                                        Delete Account
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Add Address Modal -->
    <div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAddressModalLabel">Add New Address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="addressLabel" class="form-label">Address Label</label>
                            <input type="text" class="form-control" id="addressLabel"
                                placeholder="Home, Work, etc.">
                        </div>
                        <div class="mb-3">
                            <label for="streetAddress" class="form-label">Street Address</label>
                            <input type="text" class="form-control" id="streetAddress">
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city">
                            </div>
                            <div class="col-md-6">
                                <label for="state" class="form-label">State</label>
                                <input type="text" class="form-control" id="state">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="zipCode" class="form-label">ZIP Code</label>
                                <input type="text" class="form-control" id="zipCode">
                            </div>
                            <div class="col-md-6">
                                <label for="country" class="form-label">Country</label>
                                <select class="form-select" id="country">
                                    <option selected>United States</option>
                                    <option>Canada</option>
                                    <option>United Kingdom</option>
                                    <option>Australia</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phoneNumber">
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="setAsDefault">
                            <label class="form-check-label" for="setAsDefault">Set as default address</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn theme-orange-btn text-light">Save Address</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Account Modal -->
    <div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteAccountModalLabel">Delete Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete your account? This action cannot be undone.</p>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="confirmDelete">
                        <label class="form-check-label" for="confirmDelete">I understand that all my data will be
                            permanently deleted</label>
                    </div>
                    <div class="mb-3">
                        <label for="deletePassword" class="form-label">Enter your password to confirm</label>
                        <input type="password" class="form-control" id="deletePassword">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" disabled>Delete Account</button>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

    <!-- Scroll to Top Button -->
    <button class="scroll-to-top" id="scrollToTop">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    <!-- Include your external JavaScript file -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        // Enable the delete button only when the confirmation checkbox is checked
        document.addEventListener('DOMContentLoaded', function() {
            const confirmDelete = document.getElementById('confirmDelete');
            const deleteAccountBtn = document.querySelector('#deleteAccountModal .btn-danger');

            if (confirmDelete && deleteAccountBtn) {
                confirmDelete.addEventListener('change', function() {
                    deleteAccountBtn.disabled = !this.checked;
                });
            }

            // Tab persistence
            const triggerTabList = [].slice.call(document.querySelectorAll('.nav-pills a'));
            triggerTabList.forEach(function(triggerEl) {
                triggerEl.addEventListener('click', function(event) {
                    event.preventDefault();
                    const target = this.getAttribute('href');
                    const tab = new bootstrap.Tab(this);
                    tab.show();

                    // Update URL hash
                    window.location.hash = target;

                    // Store active tab in localStorage
                    localStorage.setItem('activeProfileTab', target);
                });
            });

            // Check for stored tab or hash on page load
            let activeTab = localStorage.getItem('activeProfileTab') || window.location.hash;
            if (activeTab) {
                const triggerEl = document.querySelector(`.nav-pills a[href="${activeTab}"]`);
                if (triggerEl) {
                    const tab = new bootstrap.Tab(triggerEl);
                    tab.show();
                }
            }
        });
    </script>
</body>

</html>

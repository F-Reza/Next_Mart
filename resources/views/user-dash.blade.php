@extends('layouts.app')

@section('title', 'Home - Next Mart')

@section('content')


    <div class="container profile-container">
        <div class="row">
            <!-- Sidebar Navigation -->
            <div class="col-md-3 mb-4">
                <div class="profile-sidebar text-center">
                    <div class="mb-4">
                        <img src="https://i.pravatar.cc/120?img=12" alt="Profile Picture" class="profile-picture">
                        <h4 class="mt-3">John Doe</h4>
                        <p class="text-muted">john.doe@example.com</p>
                        <a href="#editProfile" class="btn btn-sm theme-orange-btn text-light">Edit Profile</a>
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
                        <h3 class="mb-4 section-title">Profile Information</h3>
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
                                <input type="email" class="form-control" id="email" value="john.doe@example.com">
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

                    <!-- Edit Profile Information Tab -->
                    <div class="tab-pane fade" id="editProfile">
                        <h3 class="mb-4 section-title">Profile Information</h3>
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
                                <input type="email" class="form-control" id="email" value="john.doe@example.com">
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
                        <h3 class="mb-4 section-title">Order History</h3>

                        <div class="order-card">
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

                        <div class="order-card">
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
                            <h3 class="mb-0 section-title">Saved Addresses</h3>
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
                        <h3 class="mb-4 section-title">Your Wishlist</h3>

                        <div class="wishlist-item">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="https://via.placeholder.com/100" alt="Product" class="img-fluid rounded">
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
                                    <img src="https://via.placeholder.com/100" alt="Product" class="img-fluid rounded">
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
                                    <img src="https://via.placeholder.com/100" alt="Product" class="img-fluid rounded">
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
                        <h3 class="mb-4 section-title">Account Settings</h3>

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
                                    <input class="form-check-input" type="checkbox" id="emailNotifications" checked>
                                    <label class="form-check-label" for="emailNotifications">Email
                                        Notifications</label>
                                </div>
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="smsNotifications">
                                    <label class="form-check-label" for="smsNotifications">SMS
                                        Notifications</label>
                                </div>
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="promotionalEmails" checked>
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
                            <input type="text" class="form-control" id="addressLabel" placeholder="Home, Work, etc.">
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

@endsection

<style>
    :root {
        --primary-color: rgba(52, 18, 245, 0.966);
        --secondary-color: #ff5722;
        --light-bg: #f8f9fa;
        --dark-bg: #343a40;
        --text-dark: #212529;
        --text-light: #6c757d;
        --shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }


    .theme-navbar {
        box-shadow: var(--shadow);
        padding: 10px 0;
        font-weight: 600;
        letter-spacing: 0.5px;
        background-color: var(--primary-color) !important;
    }

    .text-logo {
        font-family: '', cursive;
        font-weight: 800;
        letter-spacing: 1.5px;
        color: #ffccbc;
    }

    .theme-orange-btn {
        background-color: var(--secondary-color);
        color: white;
        border: none;
    }

    .theme-orange-btn:hover {
        background-color: #e64a19;
        color: white;
    }

    .theme-footer {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 500;
        letter-spacing: 0.3px;
        background-color: var(--primary-color) !important;
    }

    .theme-footer-btn {
        color: var(--secondary-color);
        font-weight: 700;
    }

    .theme-footer-btn:hover {
        color: #ffccbc;
    }

    .theme-navbar-light {
        box-shadow: var(--shadow);
        padding: 10px 0;
        letter-spacing: 0.5px;
        margin-bottom: 10px;
        background-color: rgba(255, 255, 255, 0.966) !important;
    }

    /* Profile Specific Styles */
    .profile-container {
        max-width: 1200px;
        margin: 0 auto;
        position: sticky;
    }

    .profile-sidebar {
        background-color: var(--light-bg);
        border-radius: 10px;
        padding: 20px;
        box-shadow: var(--shadow);
        height: fit-content;
        position: sticky;
        top: 20px;
    }

    .profile-content {
        background-color: #fff;
        border-radius: 10px;
        padding: 25px;
        box-shadow: var(--shadow);
    }

    .profile-picture {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid #fff;
        box-shadow: var(--shadow);
    }

    .nav-pills .nav-link {
        color: var(--text-dark);
        border-radius: 5px;
        margin-bottom: 5px;
        display: flex;
        align-items: center;
    }

    .nav-pills .nav-link.active {
        background-color: var(--primary-color);
        color: white;
    }

    .nav-pills .nav-link i {
        width: 20px;
        margin-right: 10px;
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
        margin-bottom: 20px;
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

    .section-title {
        padding-bottom: 15px;
        margin-bottom: 30px;
        border-bottom: 2px solid #f0f0f0;
    }

    .section-hr {
        margin-bottom: 15px;
        border-bottom: 2px solid #f0f0f0;
    }

    /* Form Styles */
    .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.25rem rgba(52, 18, 245, 0.2);
    }

    /* Card Styles */
    .card {
        border: none;
        box-shadow: var(--shadow);
        margin-bottom: 20px;
    }

    .card-header {
        background-color: var(--light-bg);
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    /* Badge Styles */
    .badge.bg-success {
        background-color: #28a745 !important;
    }

    .badge.bg-warning {
        background-color: #ffc107 !important;
        color: var(--text-dark);
    }

    /* Button Styles */
    .btn-outline-primary {
        color: var(--primary-color);
        border-color: var(--primary-color);
    }

    .btn-outline-primary:hover {
        background-color: var(--primary-color);
        color: white;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .profile-sidebar {
            position: relative;
            top: 0;
            margin-bottom: 20px;
        }

        .profile-picture {
            width: 100px;
            height: 100px;
        }
    }

    /* Animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .tab-pane {
        animation: fadeIn 0.3s ease-in;
    }
</style>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Enable the delete button only when the confirmation checkbox is checked
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
@endpush

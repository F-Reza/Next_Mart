<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Next Mart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg theme-navbar bg-info-subtle">
            <div class="container-fluid mx-5">
                <a class="navbar-brand" href="#">
                    <h2 class="text-light text-logo"> Next Mart</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="" id="navbarScroll">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-light text-secondary" type="submit">Search</button>
                    </form>
                </div>
                <div class="">
                    <a href="#" class="text-decoration-none text-light">Become a Seller</a>
                    <a href="#" class="btn btn-success btn-sm text-light"><i
                            class="fa-solid fa-cart-shopping"></i>
                        Cart</a>
                    <a href="#" class="btn btn-sm theme-orange-btn text-light"><i class="fa-solid fa-user"></i>
                        Login</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container text-center">
            <h1>Welcome Home</h1>
        </div>
    </main>
    <footer>
        <div class="theme-footer bg-primary text-light text-center p-3">
            © 2025 Copyright:
            <a class="text-decoration-none theme-footer-btn" href="#">NextMart.com</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>

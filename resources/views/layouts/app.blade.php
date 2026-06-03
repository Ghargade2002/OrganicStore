<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script> 
  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
            .navbar{
                background-color:white;
            }
                .hero {
                    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                    url('/images/back.jpg');
                    background-size: cover;
                    background-position: center;
                    height: 500px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    text-align: center;
                    color: white;
                }
                .hero-about{
                    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                    url('/images/about.jpeg');
                    background-size: cover;
                    background-position: center;
                    height: 500px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    text-align: center;
                    color: white;
                }

            
        .category-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.07);
            transition: transform 0.3s;
            cursor: pointer;
            background-color: #f0fdf4;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .category-img-wrapper {
            position: relative;
            overflow: hidden;
        }

        .category-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .category-card:hover .category-img {
            transform: scale(1.05);
        }

        .category-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(45, 106, 79, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .category-card:hover .category-overlay {
            opacity: 1;
        }

        .category-title {
            font-size: 16px;
            font-weight: 700;
            color: #2d6a4f;
            padding: 12px 0;
            margin: 0;
        }
        @media (max-width: 576px) {
            .category-img {
                height: 140px;
            }
            .category-title {
                font-size: 14px;
            }
        }

        .product-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s;
            overflow: hidden;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .product-card .card-img-top {
            transition: transform 0.3s;
        }

        .product-card:hover .card-img-top {
            transform: scale(1.05);
        }

        .btn-green {
            background-color: #bbbd3f;
            color: white;
            border: none;
        }
        .btn-green1 {
        background-color: #3c607d;
        color: white;
        border: none;
        }
        .btn-green1:hover {
            background-color: #86df4a;
            color: white;
        }
       .btn-green:hover {
            background-color: #1b4332;
            color: white;
       }

         .product-card .card-body h6 {
             font-family: 'Poppins', sans-serif;
             color: #1b4332;
       }

        .why-card {
            background-color: #f0fdf4;
            border: 1px solid #d8f3dc;
            transition: transform 0.3s;
        }

        .why-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            background-color: #2d6a4f;
            color: white !important;
        }

        .why-card:hover i {
            color: white !important;
        }

        .why-card:hover p {
            color: white !important;
        }


    </style>
</head>
<body>
    <div class="d-flex flex-wrap justify-content-between  mt-2  bg-success">
        <div class="text ps-5 py-2" 
        style=" color: #95d5b2; font-family: 'Poppins', sans-serif;">
        Welcome to HerbalStore — Nature's Best Organic & Herbal Products! 
    </div>
      <div class="d-flex flex-wrap gap-3  ps-5 pe-5 py-2" style="color: #95d5b2; 
                    font-family: 'Poppins', sans-serif; ">
        <span>
            <i class="fas fa-map-marker-alt"></i> Nagpur, Maharashtra
        </span>
        <span>
            <i class="fas fa-envelope "></i> info@herbalstore.com
        </span>
    </div>

 </div>  

<nav class="navbar navbar-expand-lg navbar-light sticky-top">
  <div class="container">
    <a class="navbar-brand text-success fw-bolder fs-2" href="/home" 
       style="font-family: 'Playfair Display', serif;">
      <img src="{{ asset('images/logo.png') }}" alt="HerbalStore Logo" height="50">
      HerbalStore
    </a>
    <button class="navbar-toggler" type="button" 
            data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">

        <li class="nav-item">
          <a class="nav-link" href="/home">
            <i class="fas fa-home"></i> Home
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/about">
            <i class="fas fa-store"></i> About Us
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/products">
            <i class="fas fa-leaf"></i> Products
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('cart.index') }}">
            <i class="fas fa-shopping-cart"></i> Cart
            <span class="badge bg-warning text-dark">{{ $cartCount }}</span>
          </a>
        </li>

        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" 
             id="userDropdown" role="button" 
             data-bs-toggle="dropdown">
            <i class="fas fa-user-circle text-success"></i>
            Hi, {{ Auth::user()->name }}!
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="{{ route('profile') }}">
                <i class="fas fa-user me-2"></i> My Profile
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="{{ route('orders.index') }}">
                <i class="fas fa-box me-2"></i> My Orders
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item text-danger">
                  <i class="fas fa-sign-out-alt me-2"></i> Logout
                </button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="/login">
            <i class="fas fa-user"></i> Login
          </a>
        </li>
        @endauth

      </ul>

      <form class="d-flex mt-2 mt-lg-0 ms-3" action="/products" method="GET">
        <input class="form-control me-2 rounded-pill" 
               type="text" name="search"
               placeholder="Search products..."value="{{ request('search') }}">
        <button class="btn btn-warning rounded-pill" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </form>

    </div>
  </div>
</nav>

<main>
    @yield('content')
</main>


<footer class="py-4 mt-5" 
        style="background: #2e8b56bd; color:#fff;">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-3">
        <h5 class="fw-bold">
          <img src="{{ asset('images/logo.png') }}" alt="HerbalStore Logo" height="50">
          HerbalStore
        </h5>
        <p class="text-light">100% Organic & Natural Herbal Products for Healthy Living</p>
      </div>
      <div class="col-md-4 mb-3">
        <h5 class="fw-bold">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="/home" class="text-light text-decoration-none">Home</a></li>
          <li><a href="/products" class="text-light text-decoration-none">Products</a></li>
          <li><a href="/about" class="text-light text-decoration-none">About Us</a></li>
          <li><a href="/review" class="text-light text-decoration-none">Give Review</a></li>
     </ul>
      </div>
      <div class="col-md-4 mb-3">
        <h5 class="fw-bold">Contact Us</h5>
        <p class="text-light">
          <i class="fas fa-envelope"></i> info@herbalstore.com<br>
          <i class="fas fa-phone"></i> +91 xxxxxxxxxx<br>
          <i class="fas fa-map-marker-alt"></i> Nagpur, Maharashtra
        </p>
      </div>
    </div>
    <hr class="border-light">
    <p class="text-center text-light mb-0">
      © 2024 HerbalStore. All Rights Reserved. 
    </p>
  </div>
</footer>

@yield('scripts')
</body>
</html>
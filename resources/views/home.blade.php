@extends('layouts.app')

@section('title', 'Home')

@section('content')

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mb-0 text-center" role="alert">
        <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@section('scripts')
<script>
    setTimeout(function() {
        var alerts = document.querySelectorAll('.alert');
        alerts.forEach(function(alert) {
            alert.style.transition = 'opacity 0.5s ease';
            alert.style.opacity = '0';
            setTimeout(function() {
                alert.style.display = 'none';
            }, 500);
        });
    }, 3000);
</script>
@endsection

    <div class="hero">
        <div>
            <h1 class="display-4 fw-bold">Nature's Best Herbal Products</h1>
            <p class="lead">100% Organic & Natural Products for Healthy Living</p>
            <a href="{{ url('/products') }}" class="btn btn-warning btn-lg mt-3">Shop Now </a>
        </div>
    </div>

<div class="py-4" style="background-color: #387059;">
    <div class="container">
        <div class="row text-center text-white">
            <div class="col-6 col-md-3 mb-3">
                <h2 class="fw-bold text-warning">500+</h2>
                <p style="color: #95d5b2;">Products</p>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <h2 class="fw-bold text-warning">10k+</h2>
                <p style="color: #95d5b2;">Happy Customers</p>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <h2 class="fw-bold text-warning">50+</h2>
                <p style="color: #95d5b2;">Herbal Categories</p>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <h2 class="fw-bold text-warning">2+</h2>
                <p style="color: #95d5b2;">Years Experience</p>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid px-4 mt-5">
    <h2 class="text-center fw-bold mb-2" style="color: #275072;">Shop By Category</h2>
    
    <div class="mx-auto mb-4" 
         style="width: 80px; height: 3px; background-color: #52b788;">
    </div>

    <div class="row g-3 text-center">
       
        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="category-card">
                <div class="category-img-wrapper">
                    <img src="/images/herbalttea.webp"alt="Herbal Teas"class="category-img">
                    <div class="category-overlay">
                        <i class="fas fa-mug-hot fs-3 text-white"></i>
                    </div>
                </div>
                <p class="category-title">Herbal Teas</p>
            </div>
        </div>

        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="category-card">
                <div class="category-img-wrapper">
                    <img src="/images/juice.jpg"alt="Juice"class="category-img">
                    <div class="category-overlay">
                        <i class="fas fa-wine-bottle fs-3 text-white"></i>
                    </div>
                </div>
                <p class="category-title">Herbal Juice</p>
            </div>
        </div>

       
        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="category-card">
                <div class="category-img-wrapper">
                    <img src="/images/skincare.jpg"alt="Skincare"class="category-img">
                    <div class="category-overlay">
                        <i class="fas fa-spa fs-3 text-white"></i>
                    </div>
                </div>
                <p class="category-title">Herbal Skincares</p>
            </div>
        </div>

       
        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
            <div class="category-card">
                <div class="category-img-wrapper">
                    <img src="/images/oil.jpg"alt="Herbal Oils"class="category-img">
                    <div class="category-overlay">
                        <i class="fas fa-droplet fs-3 text-white"></i>
                    </div>
                </div>
                <p class="category-title">Herbal Oils</p>
            </div>
        </div>

    </div>
</div>


<div class="container mt-5">
    <h2 class="text-center fw-bold mb-4"  style="color: #275072;">Featured Products</h2>
    <div class="mx-auto mb-5"style="width: 80px; height: 3px; background-color: #52b788;">
    </div>
    <div class="row">
        <div class="col-6 col-md-3 mb-4">
            <div class="card product-card">
                <img src="/images/herbal tea.png"class="card-img-top" style="height:200px; object-fit:cover;">
                <div class="card-body">
                    <h6 class="fw-bold">Green Herbal Tea</h6>
                    <p class="text-muted small">100% Organic Green Tea</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-success">₹299</span>
                        <a href="/products/1" class="btn btn-green btn-sm">View Product</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 mb-4">
            <div class="card product-card">
                <img src="/images/herbalcream.png"class="card-img-top" style="height:200px; object-fit:cover;">
                <div class="card-body">
                    <h6 class="fw-bold">Aloe Vera Gel Cream</h6>
                    <p class="text-muted small">Pure Aloe Vera Extract</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-success">₹199</span>
                        <a href="/products/10" class="btn btn-green btn-sm">View Product</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 mb-4">
            <div class="card product-card">
                <img src="/images/herbaljuice.png"class="card-img-top" style="height:200px; object-fit:cover;">
                <div class="card-body">
                    <h6 class="fw-bold">Herbal Juice</h6>
                    <p class="text-muted small">Fresh Herbal Juice</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-success">₹149</span>
                        <a href="/products/11" class="btn btn-green btn-sm">View Product</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 mb-4">
            <div class="card product-card">
                <img src="/images/lavenderr.png"class="card-img-top" style="height:200px; object-fit:cover;">
                <div class="card-body">
                    <h6 class="fw-bold">Lavender Oil</h6>
                    <p class="text-muted small">Pure Lavender Essential Oil</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-success">₹349</span>
                        <a href="/products/4" class="btn btn-green btn-sm">View Product</a>
                    </div>
                </div>
            </div>
        </div>
    

        <div class="col-6 col-md-3 mb-4">
        <div class="card product-card">
            <img src="/images/tulsi.png"class="card-img-top"style="height:200px; object-fit:cover;">
            <div class="card-body">
                <h6 class="fw-bold">Tulsi Ginger Tea</h6>
                <p class="text-muted small">Immunity Booster Tea</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-success">₹199</span>
                    <a href="/products/12" class="btn btn-green btn-sm">View Product</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-3 mb-4">
        <div class="card product-card">
            <img src="/images/aloevera.png"class="card-img-top"style="height:200px; object-fit:cover;">
            <div class="card-body">
                <h6 class="fw-bold">Aloe Vera Juice</h6>
                <p class="text-muted small">Pure Aloe Vera Drink</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-success">₹249</span>
                    <a href="/products/2" class="btn btn-green btn-sm">View Product</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-3 mb-4">
        <div class="card product-card">
            <img src="/images/cocaoil.png"class="card-img-top"style="height:200px; object-fit:cover;">
            <div class="card-body">
                <h6 class="fw-bold">Coconut Herbal Oil</h6>
                <p class="text-muted small">Cold Pressed Coconut Oil</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-success">₹299</span>
                    <a href="/products/6" class="btn btn-green btn-sm">View Product</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6 col-md-3 mb-4">
        <div class="card product-card">
            <img src="/images/neemcream.png"class="card-img-top"style="height:200px; object-fit:cover;">
            <div class="card-body">
                <h6 class="fw-bold"></h6>
                <p class="text-muted small">Natural Herbal Cream</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-success">₹149</span>
                    <a href="/products/8" class="btn btn-green btn-sm">View Product</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="text-center mt-3">
        <a href="/products" class="btn btn-green1 btn-lg">View All Products </a>
    </div>
</div>

<div class="py-5 mt-5 text-center text-white"style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),url('/images/nature.webp');
            background-size: cover;background-position: center;">
    <h2 class="fw-bold">Special Offer! </h2>
    <p class="lead">Get 20% Off on Your First Order!</p>
    <p>Use Code: 
        <span class="badge bg-light text-dark fs-5">HERBAL20</span>
    </p>
    <a href="{{ url('/products') }}" class="btn btn-warning btn-lg mt-2">Shop Now </a>
</div>


<div class="container mt-5 mb-5">

    <h2 class="text-center fw-bold mb-2"style="color: #275072;">
        Why Choose Us?
    </h2>

    <div class="mx-auto mb-4"style="width: 80px;height: 3px;background-color: #52b788;">
    </div>

    <div class="row text-center">

        <div class="col-6 col-md-3 mb-4">
            <div class="why-card p-4 rounded-3">
                <i class="fas fa-leaf fs-1 mb-3"style="color: #2d6a4f;"></i>
                <h5 class="fw-bold">100% Organic</h5>
                <p class="text-muted small">
                    All products are certified organic & natural
                </p>
            </div>
        </div>

     
        <div class="col-6 col-md-3 mb-4">
            <div class="why-card p-4 rounded-3">
                <i class="fas fa-truck fs-1 mb-3"style="color: #2d6a4f;"></i>
                <h5 class="fw-bold">Fast Delivery</h5>
                <p class="text-muted small">
                    Quick delivery to your doorstep anywhere
                </p>
            </div>
        </div>


        <div class="col-6 col-md-3 mb-4">
            <div class="why-card p-4 rounded-3">
                <i class="fas fa-tag fs-1 mb-3"style="color: #2d6a4f;"></i>
                <h5 class="fw-bold">Best Prices</h5>
                <p class="text-muted small">
                    Affordable prices for all herbal products
                </p>
            </div>
        </div>

       
        <div class="col-6 col-md-3 mb-4">
            <div class="why-card p-4 rounded-3">
                <i class="fas fa-shield-heart fs-1 mb-3"style="color: #2d6a4f;"></i>
                <h5 class="fw-bold">100% Safe</h5>
                <p class="text-muted small">
                    Lab tested & certified safe products
                </p>
            </div>
        </div>

    </div>
</div>

@endsection
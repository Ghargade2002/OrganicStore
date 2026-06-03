@extends('/layouts.app')

@section('title', 'AboutUs')

@section('content')
 <div class="hero-about">
        <div>
            <h1 class="display-4 fw-bold">Our Story</h1>
            <p class="lead">Herbal Store’s journey began with a deep respect for nature’s healing power. 
                From humble beginnings, we’ve grown into a brand that blends traditional herbal wisdom 
                with modern wellness science — creating products that nurture balance, purity, and care.                
               <br>
                From nature to you — we create herbal products with care, quality,
                and a passion for natural wellness.</p>
            <p class="mt-2 text-light opacity-75">
            Rooted in tradition • Powered by nature • Trusted by people
            </p>
              <div class="mx-auto mt-3"style="width: 60px; height: 3px; background-color: #52b788;">
            </div> 
        </div>
</div>


<div class="container-fluid py-5 mt-5 bg-light">
  <h2 class="fw-bold mb-3 text-center text-uppercase" style="color:#275072; font-size:34px; letter-spacing:1px;">
    Who We Are
  </h2>
  <div class="mx-auto mb-4" style="width:70px; height:4px; background-color:#52b788; border-radius:2px;"></div>

  <div class="row align-items-center g-5 px-3">
    <div class="col-md-6 text-center">
      <img src="{{ asset('images/plant.jpg') }}" class="img-fluid rounded-pill  shadow-lg" style="height:420px;  object-fit:cover; transition:transform 0.4s ease;">
    </div>

    <div class="col-md-6">
      <p class="text-muted mb-3" style="font-size:20px; line-height:1.8;">
        We are a natural wellness brand dedicated to crafting high-quality herbal products made from pure, carefully selected ingredients.
      </p>
      <p class="text-muted mb-3" style="font-size:20px; line-height:1.8;">
        Our goal is to inspire a healthier lifestyle by blending traditional herbal wisdom with modern quality standards.
      </p>

      <ul class="list-unstyled mt-4" style="font-size:19px; color:#275072;">
        <li class="mb-2"><i class="bi bi-leaf me-2 text-success"></i>100% Natural Ingredients</li>
        <li class="mb-2"><i class="bi bi-check-circle me-2 text-success"></i>Quality Tested Products</li>
        <li><i class="bi bi-heart-fill me-2 text-success"></i>Trusted by Customers</li>
      </ul>
    </div>
  </div>
</div>

<section class="py-5 mt-5 bg-light">
  <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-md-6 text-center">
        <img src="{{ asset('images/mission.png') }}" 
             class="img-fluid rounded-4 shadow-lg" 
             style="height:350px;width:500px;  object-fit:cover;">
      </div>
      <div class="col-md-6 mt-3">
        <h3 class="fw-bold" style=" font-size:34px;color:#275072;">Our Mission</h3>
        <div class="mx-2 mb-4" style="width:70px; height:4px; background-color:#52b788; border-radius:2px;"></div>

        <p class="text-muted" style="font-size:20px; line-height:1.8;">
          To empower people to live naturally by offering pure, sustainable herbal products that nurture health and harmony.
           We are dedicated to crafting pure, sustainable herbal products that promote wellness, balance, and vitality. 
           Every formula we create is inspired by ancient herbal wisdom and refined through modern science to ensure safety, purity, and effectiveness.
        </p>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-md-6 order-md-2 text-center">
        <img src="{{ asset('images/vission.png') }}" 
             class="img-fluid rounded-4 shadow-lg" 
             style="height:350px; width:500px; object-fit:cover;">
      </div>
      <div class="col-md-6 order-md-1 mt-3">
        <h3 class="fw-bold" style="font-size:34px; color:#275072;">Our Vision</h3>
        <div class="mx-2 mb-4" style="width:70px; height:4px; background-color:#52b788; border-radius:2px;"></div>

        <p class="text-muted" style="font-size:20px; line-height:1.8;">
          To become a global leader in herbal wellness, blending nature’s wisdom with modern science.
        Through innovation, education, and sustainability, we envision a future where every home embraces herbal care — 
        a future where wellness is not a luxury but a way of life rooted in nature’s wisdom.
        </p>
      </div>
    </div>
  </div>
</section>


<section class="py-5 bg-light text-center"  style="margin-top:50px;">
  <div class="container">
    <h2 class="fw-bold mb-3" style="color:#275072;font-size:34px; letter-spacing:1px;">Our Core Values</h2>
     <div class="mx-auto mb-5" style="width:70px; height:4px; background-color:#52b788; border-radius:2px;"></div>
    <div class="row mt-3">
      <div class="col-md-3 mb-4">
        <img src="{{ asset('images/corepurity.png') }}" alt="Purity" class="img-fluid mb-3" style="height:120px;">
        <h5 class="fw-bold">Purity</h5>
        <p class="text-muted">We use clean, natural ingredients for genuine wellness.</p>
      </div>
      <div class="col-md-3 mb-4">
        <img src="{{ asset('images/coresusta.png') }}" alt="Sustainability" class="img-fluid mb-3" style="height:120px;">
        <h5 class="fw-bold">Sustainability</h5>
        <p class="text-muted">Our products and packaging respect the planet.</p>
      </div>
      <div class="col-md-3 mb-4">
        <img src="{{ asset('images/coreinnov.png') }}" alt="Innovation" class="img-fluid mb-3" style="height:120px;">
        <h5 class="fw-bold">Innovation</h5>
        <p class="text-muted">We blend traditional herbal wisdom with modern science.</p>
      </div>
      <div class="col-md-3 mb-4">
        <img src="{{ asset('images/corecare.png') }}" alt="Care" class="img-fluid mb-3" style="height:120px;">
        <h5 class="fw-bold">Care</h5>
        <p class="text-muted">Every product is made with compassion and purpose.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-5 text-center" style="background-color:#275072; color:#fff;">
  <div class="container">
    <h3 class="fw-bold mb-3">Join Our Journey Toward Natural Wellness</h3>
    <p class="mb-4" style="font-size:18px;">
      At Herbal Store, we believe wellness begins with purity and care. 
      Discover our range of products crafted to bring balance and beauty to everyday life.
    </p>
    <a href="/shop" class="btn btn-warning fw-bold px-4 py-2 rounded-pill">Explore Products</a>
  </div>
</section>



@endsection
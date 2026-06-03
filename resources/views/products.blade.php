@extends('layouts.app')

@section('title', 'Products')

@section('content')

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="error-alert">
        {{ session('error') }}
    </div>
@endif


<script>
    setTimeout(function() {
        let successAlert = document.getElementById('success-alert');
        if (successAlert) {
            successAlert.style.transition = "opacity 0.5s ease";
            successAlert.style.opacity = "0";
            setTimeout(() => successAlert.remove(), 500); // remove after fade
        }
    }, 3000);

    
    setTimeout(function() {
        let errorAlert = document.getElementById('error-alert');
        if (errorAlert) {
            errorAlert.style.transition = "opacity 0.5s ease";
            errorAlert.style.opacity = "0";
            setTimeout(() => errorAlert.remove(), 500);
        }
    }, 5000);
</script>



<section class="hero-section position-relative" 
         style="background: url('{{ asset('images/heroprod.png') }}') center/cover no-repeat; height: 450px;">
  <div class="overlay" 
       style="position:absolute; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.4);"></div>
  <div class="container text-center position-relative" style="z-index:1; color:#fff; padding-top:10%;">
    <h1 class="fw-bold ">Our Herbal Products</h1>
    <p class="lead">Pure, natural, and crafted for your wellness</p>
    <a href="#" class="btn btn-warning px-4 py-2 rounded-pill">Explore Now</a>
 </div>
</section>

<div id="product-section" class="container mt-5">
  <h2 class="text-center fw-bold mb-4" style="color:#275072;">Explore Products</h2>
  <div class="mx-auto mb-4" style="width:80px; height:3px; background-color:#52b788;"></div>

 
<div class="d-flex justify-content-center flex-wrap mb-3">
    <a href="/products" class="btn btn-outline-success mx-2 mb-2">All</a>
    <a href="/products?category=tea" class="btn btn-outline-success mx-2 mb-2">Herbal Teas</a>
    <a href="/products?category=juice" class="btn btn-outline-success mx-2 mb-2">Herbal Juice</a>
    <a href="/products?category=skincare" class="btn btn-outline-success mx-2 mb-2">Skincare</a>
    <a href="/products?category=oil" class="btn btn-outline-success mx-2 mb-2">Oils</a>
</div>


<form action="/products" method="GET" class="d-flex justify-content-center mb-4">
    <input type="text" 
           name="search" 
           class="form-control w-50 me-2 rounded-pill" 
           placeholder="🔍 Search products..." 
           value="{{ request('search') }}">
    <button type="submit" class="btn btn-primary rounded-pill px-4">Search</button>
</form>

 
<div class="row">
  @forelse($products as $product)
 <div class="col-6 col-md-3 mb-4">
  <div class="card product-card shadow-sm border-0">
    <a href="{{ route('products.show', $product->id) }}">
      <img src="{{ asset('images/'.$product->image) }}" class="card-img-top" style="height:200px; object-fit:cover;" alt="{{ $product->name }}">
    </a>
 <div class="card-body">
      <h6 class="fw-bold">
        <a href="{{ route('products.show', $product->id) }}" class="text-decoration-none text-dark">
            {{ $product->name }}
        </a>
    </h6>
<p class="text-muted small">{{ $product->description }}</p>
      <div class="d-flex justify-content-between align-items-center">
        <span class="fw-bold text-success">₹{{ $product->price }}</span>
        <form action="{{ route('cart.add', $product->id) }}" method="POST">
          @csrf
          <button type="submit" class="btn btn-success btn-sm rounded-pill">Add to Cart</button>
      </form>
 </div>
    </div>
  </div>
</div>
@empty
        <p class="text-center text-muted">No products found!</p>
    @endforelse
</div>

<div class="d-flex justify-content-center mt-4">
    <nav>
        <ul class="pagination">
            <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link rounded-pill me-2" href="{{ $products->previousPageUrl() }}">Previous</a>
            </li>
            <li class="page-item {{ !$products->hasMorePages() ? 'disabled' : '' }}">
                <a class="page-link rounded-pill" href="{{ $products->nextPageUrl() }}">Next</a>
            </li>
        </ul>
    </nav>
</div>

</div>



@endsection
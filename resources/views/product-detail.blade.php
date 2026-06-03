@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/'.$product->image) }}" 
                 class="img-fluid rounded-3 shadow" 
                 alt="{{ $product->name }}"
                 style="height: 500px; width:500px;">
        </div>
        <div class="col-md-6 mt-5 pt-5">
            <h2 class="fw-bold">{{ $product->name }}</h2>
            <p class="text-muted">{{ $product->description }}</p>
            <h4 class="text-success">₹{{ $product->price }}</h4>

             <p class="mt-3">
                @if($product->category == 'tea')
                   <h4 style="line-height: 28px; color:#3e6b49"> 🌿 This Tea is calming blend to refresh your mind and body.</h4> 
                @elseif($product->category == 'juice')
                   <h4 style="line-height: 28px; color:#3e6b49">🍹This herbal Juice Packed with natural nutrients to boost energy and immunity.</h4> 
                @elseif($product->category == 'skincare')
                    <h4 style="line-height: 28px; color:#3e6b49">  ✨ This Skincare is Gentle herbal care for radiant, healthy skin.</h4> 
                @elseif($product->category == 'oil')
                    <h4 style="line-height: 28px; color:#3e6b49">💧 This Oil is Purely extracted oil to nourish and relax.</h4> 
                @endif
            </p>

            <ul class="list-unstyled mt-3">
                <li>🌿 100% Natural Ingredients</li>
                <li>✨ No Artificial Preservatives</li>
                <li>💧 Freshly Packed for Wellness</li>
            </ul>

            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success btn-sm rounded-pill">Add to Cart</button>
            </form>
 </div>
    </div>
</div>
@endsection

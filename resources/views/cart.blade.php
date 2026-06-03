@extends('layouts.app')

@section('title', 'Your Cart')

@section('content')
<div class="container mt-5">
    <h2 class="fw-bold mb-4">🛒 Your Cart</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @forelse($cartItems as $item)
        <div class="d-flex align-items-center mb-3 p-3 border rounded">
            <img src="{{ asset('images/'.$item->product->image) }}" width="80" class="me-3 rounded">
            <div>
                <strong>{{ $item->product->name }}</strong><br>
                Qty: {{ $item->quantity }}<br>
                Price: ₹{{ $item->product->price * $item->quantity }}
            </div>

            
            <form action="{{ route('cart.increase', $item->id) }}" method="POST" class="ms-auto me-2">
                @csrf
                <button class="btn btn-sm btn-outline-success">+</button>
            </form>
            <form action="{{ route('cart.decrease', $item->id) }}" method="POST" class="me-2">
                @csrf
                <button class="btn btn-sm btn-outline-warning">-</button>
            </form>

          
            <form action="{{ route('cart.remove',$item->id) }}" method="POST">
                @csrf
                <button class="btn btn-sm btn-danger">Remove</button>
            </form>
        </div>
    @empty
        <p>No items in cart yet!</p>
    @endforelse
</div>

<div class="mt-4 p-3 bg-light rounded">
    <h4 class="fw-bold">Cart Summary</h4>
    <p>Total: ₹{{ $total }}</p>

    <form action="{{ route('checkout.store') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success btn-lg">Place Order</button>
    </form>
</div>

@endsection

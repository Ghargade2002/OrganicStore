@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">My Orders</h2>

    @forelse($orders as $order)
        <div class="card mb-3">
            <div class="card-body">
                <h5>Order #{{ $order->id }}</h5>
                <p><strong>Status:</strong> {{ $order->status ?? 'Pending' }}</p>
                <p><strong>Total:</strong> ₹{{ $order->total ?? '0.00' }}</p>

                <h6>Items:</h6>
                <ul>
                    @foreach($order->items as $item)
                        <li>
                            {{ $item->product->name }} × {{ $item->quantity }}
                            (₹{{ $item->product->price }})
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @empty
        <p>You have no orders yet.</p>
    @endforelse
</div>
@endsection

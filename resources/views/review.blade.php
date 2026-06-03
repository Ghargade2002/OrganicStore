@extends('layouts.app')
@section('title', 'Give Your Review')

@section('content')
<div class="container mt-4">
    <h2 class="text-success mb-4">Please Give Your Review</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('review.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Your Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Your Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Your Review</label>
            <textarea class="form-control" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit Review</button>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Login / Register')

@section('content')

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card border-0 shadow-lg rounded-4 p-4">

                <div class="text-center mb-4">
                    <img src="{{ asset('images/logo.png') }}" height="60" alt="Logo">
                    <h3 class="fw-bold mt-2" style="color:#275072;">HerbalStore</h3>
                    <p class="text-muted small">Your natural wellness destination</p>
                </div>

                <ul class="nav nav-pills nav-fill mb-4" id="authTab">
                    <li class="nav-item">
                        <a class="nav-link active rounded-pill fw-bold"id="login-tab"href="#login"data-bs-toggle="pill">
                            <i class="fas fa-sign-in-alt me-1"></i> Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill fw-bold"id="register-tab"href="#register"data-bs-toggle="pill">
                            <i class="fas fa-user-plus me-1"></i> Register
                        </a>
                    </li>
                </ul>

                @if(session('error'))
                    <div class="alert alert-danger rounded-3">
                        {{ session('error') }}
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success rounded-3">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="login">
                        <form action="/login" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-bold" style="color:#275072;">
                                    <i class="fas fa-envelope me-1"></i> Email Address
                                </label>
                                <input type="email"name="email"class="form-control rounded-pill px-4" 
                                       placeholder="Enter your email"value="{{ old('email') }}"required maxlength="50" minlength="10">
                                @error('email')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold" style="color:#275072;">
                                    <i class="fas fa-lock me-1"></i> Password
                                </label>
                            <div class="input-group">   
                                <input type="password"name="password"id="loginPassword"class="form-control rounded-pill px-4" 
                                       placeholder="Enter your password" required maxlength="20" minlength="8" pattern="(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%]).{8,20}" title="Must have 1 uppercase, 1 number, 1 special character">
                                <span class="input-group-text rounded-end-pill" 
                                    onclick="togglePassword('loginPassword', this)"
                                    style="cursor:pointer; background:white; border-left:none;">
                                    <i class="fas fa-eye"></i>
                               </span>
                            </div>
                                       @error('password')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="remember" id="remember">
                                <label class="form-check-label text-muted" for="remember">Remember Me</label>
                            </div>

                            <div class="d-grid">
                                <button type="submit"class="btn btn-success rounded-pill py-2 fw-bold">
                                    <i class="fas fa-sign-in-alt me-2"></i> Login
                                </button>
                            </div>

                        </form>
                    </div>

                    <div class="tab-pane fade" id="register">
                        <form action="/register" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-bold" style="color:#275072;">
                                    <i class="fas fa-user me-1"></i> Full Name
                                </label>
                                <input type="text"name="name"class="form-control rounded-pill px-4"placeholder="Enter your full name"
                                       value="{{ old('name') }}"required  minlength="3" maxlength="50" pattern="[A-Za-z ]+"title="Name must contain letters only">
                                @error('name')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold" style="color:#275072;">
                                    <i class="fas fa-envelope me-1"></i> Email Address
                                </label>
                                <input type="email"name="email"class="form-control rounded-pill px-4" 
                                       placeholder="Enter your email"value="{{ old('email') }}"required  maxlength="50" minlength="10">
                                @error('email')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold" style="color:#275072;">
                                    <i class="fas fa-lock me-1"></i> Password
                                </label>
                            <div class="input-group">    
                                <input type="password"name="password"id="registerPassword"class="form-control rounded-pill px-4" 
                                       placeholder="Create a password (min 8 chars, 1uppercase, 1no, 1special)"required maxlength="20" minlength="8" pattern="(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%]).{8,20}"title="Must have 1 uppercase, 1 number, 1 special character">
                                 <span class="input-group-text rounded-end-pill"onclick="togglePassword('registerPassword', this)"
                                       style="cursor:pointer; background:white; border-left:none;">
                                        <i class="fas fa-eye"></i>
                                    </span>
                            </div>        
                                       @error('password')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold" style="color:#275072;">
                                    <i class="fas fa-lock me-1"></i> Confirm Password
                                </label>
                                <input type="password"name="password_confirmation"class="form-control rounded-pill px-4" 
                                       placeholder="Confirm your password"required maxlength="20" minlength="8" pattern="(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%]).{8,20}" title="Must have 1 uppercase, 1 number, 1 special character">
                            </div>

                            <div class="d-grid">
                                <button type="submit" 
                                        class="btn btn-success rounded-pill py-2 fw-bold">
                                    <i class="fas fa-user-plus me-2"></i> Create Account
                                </button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
<script>
function togglePassword(fieldId, iconSpan) {
    var input = document.getElementById(fieldId);
    var icon = iconSpan.querySelector('i');
    
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    } else {
        input.type = 'password';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    }
}
</script>
@endsection

@endsection
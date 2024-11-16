@extends('layouts.app')

@push('style')
<style>
    .register-area {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .register-card {
        border-radius: 15px;
        background: rgba(255, 255, 255, 0.95);
        width: 100%;
        max-width: 450px;
    }

    .register-btn {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 10px;
        padding: 12px;
        border: none;
        transition: all 0.3s ease;
    }

    .register-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    }

    .form-control {
        border-radius: 10px;
        padding: 12px;
    }

    .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    }
</style>
@endpush

@section('content')
<div class="register-area">
    <div class="card shadow-lg register-card">
        <div class="card-body p-4">
            <div class="text-center mb-4">
                <img src="{{ asset('assets/images/logo/falcon-logo.png') }}" alt="logo" style="max-width: 250px;">
                <h3 class="fw-bold text-dark">Create Account</h3>
                <p class="text-muted">Join our community today</p>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-floating mb-3">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Your Name">
                    <label for="name">Name</label>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="name@example.com">
                    <label for="email">Email Address</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                    <label for="password">Password</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-floating mb-4">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                    <label for="password-confirm">Confirm Password</label>
                </div>

                <button type="submit" class="btn register-btn w-100 mb-3 text-white">
                    Register
                </button>

                <div class="text-center">
                    <span class="text-muted">Already have an account?</span>
                    <a class="text-decoration-none ms-1" href="{{ route('login') }}" style="color: #667eea;">
                        Login Here
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

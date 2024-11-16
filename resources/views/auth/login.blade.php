@extends('layouts.app')

@section('content')
<div class="login-area d-flex align-items-center justify-content-center"
     style="background: linear-gradient(135deg, #4c4ff7, #6f86d6); min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg border-0"
                     style="border-radius: 15px; background: rgba(255, 255, 255, 0.95); width: 100%; max-width: 400px;">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <img src="{{ asset('assets/images/logo/falcon-logo.png') }}" alt="logo"
                                  style="max-width: 150px;">
                            <h3 class="fw-bold text-dark">Welcome Back!</h3>
                            <p class="text-muted">Log in to access your account</p>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-floating mb-3">
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                       placeholder="name@example.com"
                                       style="border-radius: 10px;">
                                <label for="email">Email Address</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password" required autocomplete="current-password"
                                       placeholder="Password"
                                       style="border-radius: 10px;">
                                <label for="password">Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                           {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}"
                                       class="text-decoration-none" style="color: #4c4ff7;">
                                        Forgot Password?
                                    </a>
                                @endif
                            </div>

                            <button type="submit"
                                    class="btn btn-primary w-100 text-white fw-bold"
                                    style="background: linear-gradient(135deg, #4c4ff7, #6f86d6);
                                           border: none; border-radius: 10px; padding: 10px;">
                                Log In
                            </button>

                            @if (Route::has('register'))
                                <div class="text-center mt-3">
                                    <span class="text-muted">Don't have an account?</span>
                                    <a href="{{ route('register') }}"
                                       class="text-decoration-none ms-1" style="color: #4c4ff7;">
                                        Register Now
                                    </a>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

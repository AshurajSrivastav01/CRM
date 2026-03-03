@extends('auth.layout.main')
@section('main-contanier')

<!-- Login Page -->
<div class="tab-pane fade show active" id="login">
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <div class="auth-icon">
                    <i class="bi bi-person-circle"></i>
                </div>
                <h2>Welcome Back</h2>
                <p class="text-muted">Sign in to your account</p>
            </div>

            @if (session('messate'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <form>
                <div class="mb-3">
                    <label for="login-email" class="form-label">Email Address</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="login-email" placeholder="name@example.com" required>
                        <span class="input-icon"><i class="bi bi-envelope"></i></span>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="login-password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="login-password" placeholder="Enter your password" required>
                        <span class="input-icon password-toggle" id="login-toggle">
                            <i class="bi bi-eye"></i>
                        </span>
                    </div>
                </div>

                <div class="mb-3 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember-me">
                        <label class="form-check-label" for="remember-me">Remember me</label>
                    </div>
                    <a href="{{ url('/cb-user/forgot-password') }}" class="text-decoration-none">Forgot password?</a>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
            </form>

            <div class="divider">
                <span>Or continue with</span>
            </div>

            <div class="social-login">
                <button type="button" class="social-btn">
                    <i class="bi bi-google"></i>
                </button>
                <button type="button" class="social-btn">
                    <i class="bi bi-facebook"></i>
                </button>
                <button type="button" class="social-btn">
                    <i class="bi bi-twitter"></i>
                </button>
            </div>

            <div class="auth-footer">
                <p>Don't have an account? <a href="{{ url('/user/register') }}">Sign up</a></p>
            </div>
        </div>
    </div>
</div>

@endsection

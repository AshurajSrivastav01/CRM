@extends('auth.layout.main')
@section('main-contanier')

<!-- Forgot Password Page -->
<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">
            <div class="auth-icon">
                <i class="bi bi-key"></i>
            </div>
            <h2>Reset Password</h2>
            <p class="text-muted">Enter your email to reset your password</p>
        </div>

        <form>
            <div class="mb-4">
                <label for="forgot-email" class="form-label">Email Address</label>
                <div class="input-group">
                    <input type="email" class="form-control" id="forgot-email" placeholder="name@example.com" required>
                    <span class="input-icon"><i class="bi bi-envelope"></i></span>
                </div>
                <div class="form-text">We'll send a password reset link to your email</div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Send Reset Link</button>
            </div>
        </form>

        <div class="auth-footer">
            <p>Remember your password? <a href="{{ url('/cb-user/login') }}">Back to login</a></p>
        </div>
    </div>
</div>

@endsection

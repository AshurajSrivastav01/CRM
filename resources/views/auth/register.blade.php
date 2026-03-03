@extends('auth.layout.main')
@section('main-contanier')

<!-- Register Page -->
<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">
            <div class="auth-icon">
                <i class="bi bi-person-plus"></i>
            </div>
            <h2>Create Account</h2>
            <p class="text-muted">Join our community today</p>
        </div>

        <form>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="register-fname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="register-fname" placeholder="John" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="register-lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="register-lname" placeholder="Doe" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="register-email" class="form-label">Email Address</label>
                <div class="input-group">
                    <input type="email" class="form-control" id="register-email" placeholder="name@example.com" required>
                    <span class="input-icon"><i class="bi bi-envelope"></i></span>
                </div>
            </div>

            <div class="mb-3">
                <label for="register-password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="register-password" placeholder="Create a password" required>
                    <span class="input-icon password-toggle" id="register-toggle">
                        <i class="bi bi-eye"></i>
                    </span>
                </div>
                <div class="form-text">Must be at least 8 characters</div>
            </div>

            <div class="mb-3">
                <label for="register-confirm-password" class="form-label">Confirm Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="register-confirm-password" placeholder="Confirm your password" required>
                    <span class="input-icon password-toggle" id="confirm-toggle">
                        <i class="bi bi-eye"></i>
                    </span>
                </div>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="terms-agree" required>
                <label class="form-check-label" for="terms-agree">I agree to the <a href="#" class="text-decoration-none">Terms of Service</a> and <a href="#" class="text-decoration-none">Privacy Policy</a></label>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Create Account</button>
            </div>
        </form>

        <div class="divider">
            <span>Or sign up with</span>
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
            <p>Already have an account? <a href="{{ url('/cb-user/login') }}">Sign in</a></p>
        </div>
    </div>
</div>

@endsection

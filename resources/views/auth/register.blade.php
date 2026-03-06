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

        <form action="{{ url('/user/register') }}" method="post">
            @csrf
            <div class="row">
                <x-input divClass="col-md-6 mb-3" type="text" label="First Name" id="register-fname" name="firstname" placeholder="John"/>
                <x-input divClass="col-md-6 mb-3" type="text" label="Last Name" id="register-lname" name="lastname" placeholder="Doe"/>
            </div>

            <x-input divClass="mb-3" type="text" label="Email Address" id="register-email" name="email" placeholder="name@example.com"/>
            <x-input divClass="mb-3" type="password" label="Password" id="register-password" name="password" placeholder="Create a password"/>
            <x-input type="password" label="Confirm Password" divClass="mb-3" id="register-password" name="password_confirm" placeholder="Comfirm your password"/>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="terms-agree" name="terms-agree">
                <label class="form-check-label" for="terms-agree">
                    I agree to the <a href="#" class="text-decoration-none">Terms of Service</a> and <a href="#" class="text-decoration-none">Privacy Policy</a>
                </label>
                <br>
                <span class="text-danger">
                    @error('terms-agree')
                        {{ $message }}
                    @enderror
                </span>
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

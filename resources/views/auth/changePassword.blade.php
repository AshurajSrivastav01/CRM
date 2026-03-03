@extends('auth.layout.main')
@section('main-contanier')

<!-- Change Password Page -->
<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">
            <div class="auth-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
            <h2>Change Password</h2>
            <p class="text-muted">Create a new password for your account</p>
        </div>

        <form>
            <div class="mb-3">
                <label for="current-password" class="form-label">Current Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="current-password" placeholder="Enter current password" required>
                    <span class="input-icon password-toggle" id="current-toggle">
                        <i class="bi bi-eye"></i>
                    </span>
                </div>
            </div>

            <div class="mb-3">
                <label for="new-password" class="form-label">New Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="new-password" placeholder="Create new password" required>
                    <span class="input-icon password-toggle" id="new-toggle">
                        <i class="bi bi-eye"></i>
                    </span>
                </div>
                <div class="form-text">Must be at least 8 characters</div>
            </div>

            <div class="mb-4">
                <label for="confirm-new-password" class="form-label">Confirm New Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="confirm-new-password" placeholder="Confirm new password" required>
                    <span class="input-icon password-toggle" id="confirm-new-toggle">
                        <i class="bi bi-eye"></i>
                    </span>
                </div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update Password</button>
            </div>
        </form>

        <div class="auth-footer">
            <p><a href="{{ url('/cb-user/login') }}">Back to login</a></p>
        </div>
    </div>
</div>

@endsection

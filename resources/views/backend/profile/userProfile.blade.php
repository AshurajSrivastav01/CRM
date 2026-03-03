@extends('backend.layout.main')
@section('main-container')

    <!-- Dashboard Content -->
    <div class="container-fluid p-4">
        <!-- Page Title -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">User Profile</h4>
                    <a href="#" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left me-1"></i> Back to Previous Page
                    </a>
                </div>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Users</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add New</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <!-- User Details Form -->
                <div class="form-section">
                    <h5 class="mb-4">User Information</h5>
                    <form id="addUserForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="firstName" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="lastName" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="username" required>
                            <div class="form-text">This will be used for logging in</div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="password" required>
                                    <span class="password-toggle" id="togglePassword">
                                        <i class="bi bi-eye"></i>
                                    </span>
                                </div>
                                <div class="form-text">Must be at least 8 characters</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="confirmPassword" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="confirmPassword" required>
                                    <span class="password-toggle" id="toggleConfirmPassword">
                                        <i class="bi bi-eye"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="bio" class="form-label">Bio</label>
                            <textarea class="form-control" id="bio" rows="3"></textarea>
                            <div class="form-text">A short description about the user</div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="website" class="form-label">Website</label>
                                <input type="url" class="form-control" id="website" placeholder="https://">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="role" class="form-label">Role <span class="text-danger">*</span></label>
                                <select class="form-select" id="role" required>
                                    <option value="">Select a role</option>
                                    <option value="subscriber">Subscriber</option>
                                    <option value="contributor">Contributor</option>
                                    <option value="author">Author</option>
                                    <option value="editor">Editor</option>
                                    <option value="administrator">Administrator</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="sendNotification">
                            <label class="form-check-label" for="sendNotification">
                                Send the new user an email about their account
                            </label>
                        </div>

                        <hr class="my-4">

                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-outline-secondary me-2">Reset Form</button>
                            <button type="submit" class="btn btn-primary">Add New User</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Profile Picture Section -->
                <div class="form-section">
                    <h5 class="mb-4">Profile Picture</h5>
                    <div class="text-center mb-4">
                        <img src="https://ui-avatars.com/api/?name=New+User&background=dee2e6&color=495057" id="avatarPreview" class="avatar-preview">
                        <div class="upload-btn-wrapper">
                            <button class="btn btn-outline-primary upload-btn">
                                <i class="bi bi-upload me-1"></i> Upload Image
                                <input type="file" id="avatarUpload" accept="image/*">
                            </button>
                        </div>
                        <div class="form-text mt-2">Recommended size: 300x300 pixels</div>
                    </div>
                </div>

                <!-- Additional Options -->
                <div class="form-section">
                    <h5 class="mb-4">Additional Options</h5>

                    <div class="mb-3">
                        <label class="form-label">Email Notifications</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="notifyComments" checked>
                            <label class="form-check-label" for="notifyComments">
                                Notify of comments
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="notifyPosts" checked>
                            <label class="form-check-label" for="notifyPosts">
                                Notify of new posts
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="notifyNewsletter">
                            <label class="form-check-label" for="notifyNewsletter">
                                Subscribe to newsletter
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Account Status</label>
                        <select class="form-select" id="status">
                            <option value="active" selected>Active</option>
                            <option value="inactive">Inactive</option>
                            <option value="suspended">Suspended</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="language" class="form-label">Language</label>
                        <select class="form-select" id="language">
                            <option value="en" selected>English</option>
                            <option value="es">Spanish</option>
                            <option value="fr">French</option>
                            <option value="de">German</option>
                            <option value="zh">Chinese</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Password visibility toggle
    document.getElementById('togglePassword').addEventListener('click', function() {
        const passwordInput = document.getElementById('password');
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.querySelector('i').classList.toggle('bi-eye');
        this.querySelector('i').classList.toggle('bi-eye-slash');
    });

    document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
        const passwordInput = document.getElementById('confirmPassword');
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.querySelector('i').classList.toggle('bi-eye');
        this.querySelector('i').classList.toggle('bi-eye-slash');
    });

    // Avatar preview
    document.getElementById('avatarUpload').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                document.getElementById('avatarPreview').src = event.target.result;
            }
            reader.readAsDataURL(file);
        }
    });

    // Form validation
    document.getElementById('addUserForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Basic validation
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmPassword').value;

        if (password !== confirmPassword) {
            alert('Passwords do not match!');
            return;
        }

        if (password.length < 8) {
            alert('Password must be at least 8 characters long!');
            return;
        }

        // If validation passes, show success message
        const toast = document.createElement('div');
        toast.className = 'toast align-items-center text-white bg-success border-0 position-fixed bottom-0 end-0 m-3';
        toast.setAttribute('role', 'alert');
        toast.setAttribute('aria-live', 'assertive');
        toast.setAttribute('aria-atomic', 'true');
        toast.innerHTML = `
            <div class="d-flex">
                <div class="toast-body">
                    <i class="bi bi-check-circle me-2"></i> User added successfully!
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        `;
        document.body.appendChild(toast);

        // Initialize and show the toast
        const bsToast = new bootstrap.Toast(toast);
        bsToast.show();

        // Reset form after 2 seconds
        setTimeout(() => {
            document.getElementById('addUserForm').reset();
            document.getElementById('avatarPreview').src = 'https://ui-avatars.com/api/?name=New+User&background=dee2e6&color=495057';
        }, 2000);
    });
</script>

@endsection

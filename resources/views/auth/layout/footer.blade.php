
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Password toggle functionality
            const passwordToggles = document.querySelectorAll('.password-toggle');

            passwordToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const input = this.parentElement.querySelector('input');
                    const icon = this.querySelector('i');

                    if (input.type === 'password') {
                        input.type = 'text';
                        icon.classList.remove('bi-eye');
                        icon.classList.add('bi-eye-slash');
                    } else {
                        input.type = 'password';
                        icon.classList.remove('bi-eye-slash');
                        icon.classList.add('bi-eye');
                    }
                });
            });

            // Form validation and submission
            const forms = document.querySelectorAll('form');

            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();

                    // Simple validation
                    let isValid = true;
                    const inputs = this.querySelectorAll('input[required]');

                    inputs.forEach(input => {
                        if (!input.value.trim()) {
                            isValid = false;
                            input.classList.add('is-invalid');
                        } else {
                            input.classList.remove('is-invalid');
                        }
                    });

                    // Password confirmation validation
                    const password = this.querySelector('#register-password');
                    const confirmPassword = this.querySelector('#register-confirm-password');

                    if (password && confirmPassword) {
                        if (password.value !== confirmPassword.value) {
                            isValid = false;
                            confirmPassword.classList.add('is-invalid');
                        } else {
                            confirmPassword.classList.remove('is-invalid');
                        }
                    }

                    // New password confirmation validation
                    const newPassword = this.querySelector('#new-password');
                    const confirmNewPassword = this.querySelector('#confirm-new-password');

                    if (newPassword && confirmNewPassword) {
                        if (newPassword.value !== confirmNewPassword.value) {
                            isValid = false;
                            confirmNewPassword.classList.add('is-invalid');
                        } else {
                            confirmNewPassword.classList.remove('is-invalid');
                        }
                    }

                    if (isValid) {
                        // Simulate successful form submission
                        alert('Form submitted successfully!');
                        this.reset();
                    }
                });
            });

            // Clear validation on input
            const inputs = document.querySelectorAll('input');
            inputs.forEach(input => {
                input.addEventListener('input', function() {
                    this.classList.remove('is-invalid');
                });
            });
        });
    </script>
</body>
</html>

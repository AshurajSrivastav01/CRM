    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h3 class="text-white mb-4">Blogosphere</h3>
                    <p>A platform for sharing ideas, inspiration, and knowledge across various topics from around the world.</p>
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <div class="footer-links">
                        <h5>Quick Links</h5>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Categories</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <div class="footer-links">
                        <h5>Categories</h5>
                        <ul>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Health</a></li>
                            <li><a href="#">Lifestyle</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="footer-links">
                        <h5>Contact Info</h5>
                        <ul>
                            <li><i class="bi bi-geo-alt me-2"></i> 123 Blog Street, New York, NY</li>
                            <li><i class="bi bi-envelope me-2"></i> info@blogosphere.com</li>
                            <li><i class="bi bi-phone me-2"></i> +1 (234) 567-8900</li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1)">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 Blogosphere. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms of Service</a></li>
                        <li class="list-inline-item"><a href="#">Site Map</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchIcon = document.getElementById('searchIcon');
            const searchForm = document.getElementById('searchForm');

            // Toggle search form on icon click
            searchIcon.addEventListener('click', function() {
                searchForm.classList.toggle('expanded');

                // Focus on input when expanded
                if (searchForm.classList.contains('expanded')) {
                    setTimeout(function() {
                        searchForm.querySelector('input').focus();
                    }, 300);
                }
            });

            // Close search when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInsideSearch = searchIcon.contains(event.target) || searchForm.contains(event.target);

                if (!isClickInsideSearch && searchForm.classList.contains('expanded')) {
                    searchForm.classList.remove('expanded');
                }
            });

            // Prevent search form click from closing the form
            searchForm.addEventListener('click', function(event) {
                event.stopPropagation();
            });
        });
    </script>
</body>
</html>

<!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('asset/js/sidebar.js') }}"></script>
    <script>
        // Sidebar toggle
        document.getElementById('sidebar-toggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');
        });

        // Submenu toggle
        document.querySelectorAll('.submenu-toggle').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                const parent = this.parentElement;
                const submenu = parent.querySelector('.submenu');
                const arrow = this.querySelector('.dropdown-arrow');

                // Close other open submenus
                document.querySelectorAll('.submenu').forEach(menu => {
                    if (menu !== submenu) {
                        menu.classList.remove('active');
                    }
                });

                document.querySelectorAll('.dropdown-arrow').forEach(arr => {
                    if (arr !== arrow) {
                        arr.classList.remove('rotated');
                    }
                });

                // Toggle current submenu
                submenu.classList.toggle('active');
                arrow.classList.toggle('rotated');
            });
        });
    </script>
</body>
</html>

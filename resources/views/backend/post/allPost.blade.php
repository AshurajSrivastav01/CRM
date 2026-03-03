@extends('backend.layout.main')
@section('main-container')
    <!-- Dashboard Content -->
        <div class="container-fluid p-4">
            <!-- Page Title -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">All Posts</h4>
                        <button class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i> Add New Post</button>
                    </div>
                    <nav aria-label="breadcrumb" class="mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Posts</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Posts</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row mb-4">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="stat-card card border-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="card-title text-muted mb-0">Total Posts</h6>
                                    <h3 class="fw-bold mt-2">128</h3>
                                    <p class="mb-0 text-success"><small><i class="bi bi-arrow-up"></i> 12% since last month</small></p>
                                </div>
                                <div class="card-icon bg-primary bg-opacity-10 text-primary">
                                    <i class="bi bi-file-text"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="stat-card card border-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="card-title text-muted mb-0">Published</h6>
                                    <h3 class="fw-bold mt-2">96</h3>
                                    <p class="mb-0 text-success"><small><i class="bi bi-arrow-up"></i> 8% since last month</small></p>
                                </div>
                                <div class="card-icon bg-success bg-opacity-10 text-success">
                                    <i class="bi bi-check-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="stat-card card border-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="card-title text-muted mb-0">Drafts</h6>
                                    <h3 class="fw-bold mt-2">18</h3>
                                    <p class="mb-0 text-danger"><small><i class="bi bi-arrow-up"></i> 3 since last week</small></p>
                                </div>
                                <div class="card-icon bg-warning bg-opacity-10 text-warning">
                                    <i class="bi bi-file-earmark"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="stat-card card border-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="card-title text-muted mb-0">Pending Review</h6>
                                    <h3 class="fw-bold mt-2">14</h3>
                                    <p class="mb-0 text-info"><small><i class="bi bi-arrow-down"></i> 2 since yesterday</small></p>
                                </div>
                                <div class="card-icon bg-info bg-opacity-10 text-info">
                                    <i class="bi bi-clock"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Posts -->
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="content-card card border-0">
                        <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center pt-4">
                            <h5 class="card-title">Recent Posts</h5>
                            <div class="d-flex">
                                <div class="dropdown me-2">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-funnel"></i> Filter
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="filterDropdown">
                                        <li><a class="dropdown-item" href="#">All Posts</a></li>
                                        <li><a class="dropdown-item" href="#">Published</a></li>
                                        <li><a class="dropdown-item" href="#">Drafts</a></li>
                                        <li><a class="dropdown-item" href="#">Pending Review</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="actionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="actionsDropdown">
                                        <li><a class="dropdown-item" href="#">Export to CSV</a></li>
                                        <li><a class="dropdown-item" href="#">Bulk Actions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="selectAll">
                                                </div>
                                            </th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Categories</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>Introduction to Web Development</td>
                                            <td>John Smith</td>
                                            <td>Technology, Programming</td>
                                            <td>Aug 15, 2023</td>
                                            <td><span class="status-badge bg-success">Published</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>Best Practices for UX Design</td>
                                            <td>Emma Johnson</td>
                                            <td>Design, UX</td>
                                            <td>Aug 12, 2023</td>
                                            <td><span class="status-badge bg-success">Published</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>Getting Started with React</td>
                                            <td>Mike Williams</td>
                                            <td>Programming, JavaScript</td>
                                            <td>Aug 10, 2023</td>
                                            <td><span class="status-badge bg-warning">Draft</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>SEO Tips for 2023</td>
                                            <td>Sarah Brown</td>
                                            <td>Marketing, SEO</td>
                                            <td>Aug 5, 2023</td>
                                            <td><span class="status-badge bg-success">Published</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>Advanced CSS Techniques</td>
                                            <td>Alex Turner</td>
                                            <td>Design, CSS</td>
                                            <td>Aug 3, 2023</td>
                                            <td><span class="status-badge bg-info">Pending</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Pagination -->
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center mt-4">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script>
        // Select all checkbox
        document.getElementById('selectAll').addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('tbody .form-check-input');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });

        // Sample notification on page load
        setTimeout(() => {
            // Create a Bootstrap toast notification
            const toast = document.createElement('div');
            toast.className = 'toast align-items-center text-white bg-primary border-0 position-fixed bottom-0 end-0 m-3';
            toast.setAttribute('role', 'alert');
            toast.setAttribute('aria-live', 'assertive');
            toast.setAttribute('aria-atomic', 'true');
            toast.innerHTML = `
                <div class="d-flex">
                    <div class="toast-body">
                        <i class="bi bi-info-circle me-2"></i> Welcome to your Blog Admin Panel!
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            `;
            document.body.appendChild(toast);

            // Initialize and show the toast
            const bsToast = new bootstrap.Toast(toast);
            bsToast.show();
        }, 1000);
    </script>
@endsection

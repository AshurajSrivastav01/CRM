@extends('backend.layout.main')
@section('main-container')

    <!-- Dashboard Content -->
        <div class="container-fluid p-4">
            <!-- Page Title -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Categories Management</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                            <i class="bi bi-plus-lg me-1"></i> Add New Category
                        </button>
                    </div>
                    <nav aria-label="breadcrumb" class="mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Categories</li>
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
                                    <h6 class="card-title text-muted mb-0">Total Categories</h6>
                                    <h3 class="fw-bold mt-2">24</h3>
                                    <p class="mb-0 text-success"><small><i class="bi bi-arrow-up"></i> 3 since last month</small></p>
                                </div>
                                <div class="card-icon bg-primary bg-opacity-10 text-primary">
                                    <i class="bi bi-tags"></i>
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
                                    <h6 class="card-title text-muted mb-0">Active Categories</h6>
                                    <h3 class="fw-bold mt-2">22</h3>
                                    <p class="mb-0 text-success"><small>92% active rate</small></p>
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
                                    <h6 class="card-title text-muted mb-0">Posts Assigned</h6>
                                    <h3 class="fw-bold mt-2">428</h3>
                                    <p class="mb-0 text-info"><small>Average 18 per category</small></p>
                                </div>
                                <div class="card-icon bg-info bg-opacity-10 text-info">
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
                                    <h6 class="card-title text-muted mb-0">Top Category</h6>
                                    <h3 class="fw-bold mt-2">Technology</h3>
                                    <p class="mb-0 text-muted"><small>86 posts</small></p>
                                </div>
                                <div class="card-icon bg-warning bg-opacity-10 text-warning">
                                    <i class="bi bi-trophy"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filters and Actions -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="filter-section">
                        <div class="row align-items-center">
                            <div class="col-md-4 mb-2">
                                <input type="text" class="form-control" placeholder="Search categories...">
                            </div>
                            <div class="col-md-3 mb-2">
                                <select class="form-select" id="filterStatus">
                                    <option selected>All Statuses</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-2">
                                <select class="form-select" id="filterParent">
                                    <option selected>All Parent Categories</option>
                                    <option value="0">No Parent (Top Level)</option>
                                    <option value="technology">Technology</option>
                                    <option value="design">Design</option>
                                </select>
                            </div>
                            <div class="col-md-2 mb-2">
                                <button class="btn btn-primary w-100">Apply Filters</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categories Table -->
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="content-card card border-0">
                        <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center pt-4">
                            <h5 class="card-title">All Categories</h5>
                            <div class="d-flex">
                                <div class="dropdown me-2">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="exportDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-download"></i> Export
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="exportDropdown">
                                        <li><a class="dropdown-item" href="#">CSV</a></li>
                                        <li><a class="dropdown-item" href="#">Excel</a></li>
                                        <li><a class="dropdown-item" href="#">PDF</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="viewDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-list"></i> View Options
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="viewDropdown">
                                        <li><a class="dropdown-item" href="#">Table View</a></li>
                                        <li><a class="dropdown-item" href="#">Tree View</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">Compact View</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="selectAll">
                                                </div>
                                            </th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Slug</th>
                                            <th scope="col">Parent</th>
                                            <th scope="col">Posts</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" style="width: 100px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="color-indicator" style="background-color: #4361ee;"></span>
                                                    <span class="fw-bold">Technology</span>
                                                </div>
                                            </td>
                                            <td>Articles about technology trends and innovations</td>
                                            <td>technology</td>
                                            <td>-</td>
                                            <td>86</td>
                                            <td><span class="status-badge bg-success">Active</span></td>
                                            <td>
                                                <div class="btn-group btn-group-sm" role="group">
                                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="tooltip" title="Edit">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="color-indicator" style="background-color: #4cc9f0;"></span>
                                                    <span>Web Development</span>
                                                </div>
                                            </td>
                                            <td>Web development tutorials and resources</td>
                                            <td>web-development</td>
                                            <td>Technology</td>
                                            <td>42</td>
                                            <td><span class="status-badge bg-success">Active</span></td>
                                            <td>
                                                <div class="btn-group btn-group-sm" role="group">
                                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="tooltip" title="Edit">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="color-indicator" style="background-color: #f72585;"></span>
                                                    <span>Design</span>
                                                </div>
                                            </td>
                                            <td>UI/UX design principles and inspiration</td>
                                            <td>design</td>
                                            <td>-</td>
                                            <td>57</td>
                                            <td><span class="status-badge bg-success">Active</span></td>
                                            <td>
                                                <div class="btn-group btn-group-sm" role="group">
                                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="tooltip" title="Edit">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="color-indicator" style="background-color: #4895ef;"></span>
                                                    <span>Mobile Apps</span>
                                                </div>
                                            </td>
                                            <td>Mobile application development</td>
                                            <td>mobile-apps</td>
                                            <td>Technology</td>
                                            <td>31</td>
                                            <td><span class="status-badge bg-success">Active</span></td>
                                            <td>
                                                <div class="btn-group btn-group-sm" role="group">
                                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="tooltip" title="Edit">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="color-indicator" style="background-color: #3a0ca3;"></span>
                                                    <span>Databases</span>
                                                </div>
                                            </td>
                                            <td>Database management systems and optimization</td>
                                            <td>databases</td>
                                            <td>Technology</td>
                                            <td>28</td>
                                            <td><span class="status-badge bg-success">Active</span></td>
                                            <td>
                                                <div class="btn-group btn-group-sm" role="group">
                                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="tooltip" title="Edit">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="color-indicator" style="background-color: #e63946;"></span>
                                                    <span class="text-muted">Photography</span>
                                                </div>
                                            </td>
                                            <td>Photography techniques and equipment reviews</td>
                                            <td>photography</td>
                                            <td>-</td>
                                            <td>0</td>
                                            <td><span class="status-badge bg-secondary">Inactive</span></td>
                                            <td>
                                                <div class="btn-group btn-group-sm" role="group">
                                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="tooltip" title="Edit">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
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

    <!-- Add Category Modal -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Category Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="categoryName" placeholder="Enter category name" required>
                        </div>
                        <div class="mb-3">
                            <label for="categorySlug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="categorySlug" placeholder="Category URL slug">
                            <div class="form-text">The "slug" is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</div>
                        </div>
                        <div class="mb-3">
                            <label for="parentCategory" class="form-label">Parent Category</label>
                            <select class="form-select" id="parentCategory">
                                <option value="" selected>None</option>
                                <option value="1">Technology</option>
                                <option value="2">Design</option>
                                <option value="3">Business</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="categoryDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="categoryDescription" rows="3" placeholder="Enter a description for this category"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="categoryColor" class="form-label">Color</label>
                            <input type="color" class="form-control form-control-color" id="categoryColor" value="#4361ee" title="Choose category color">
                        </div>
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="categoryStatus" checked>
                            <label class="form-check-label" for="categoryStatus">Active Category</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Add Category</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Select all checkboxes
        document.getElementById('selectAll').addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('tbody .form-check-input');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });

        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });

        // Auto-generate slug from category name
        document.getElementById('categoryName').addEventListener('input', function() {
            const slug = this.value.toLowerCase()
                .replace(/\s+/g, '-')
                .replace(/[^\w-]+/g, '')
                .replace(/--+/g, '-')
                .replace(/^-+|-+$/g, '');

            document.getElementById('categorySlug').value = slug;
        });
    </script>

@endsection

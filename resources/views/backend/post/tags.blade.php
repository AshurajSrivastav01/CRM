@extends('backend.layout.main')
@section('main-container')
        <!-- Dashboard Content -->
        <div class="container-fluid p-4">
            <!-- Page Title -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Tag Management</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTagModal">
                            <i class="bi bi-plus-lg me-1"></i> Add New Tag
                        </button>
                    </div>
                    <nav aria-label="breadcrumb" class="mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tags</li>
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
                                    <h6 class="card-title text-muted mb-0">Total Tags</h6>
                                    <h3 class="fw-bold mt-2">87</h3>
                                    <p class="mb-0 text-success"><small><i class="bi bi-arrow-up"></i> 12 since last month</small></p>
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
                                    <h6 class="card-title text-muted mb-0">Avg. Tags per Post</h6>
                                    <h3 class="fw-bold mt-2">3.2</h3>
                                    <p class="mb-0 text-info"><small>Across all posts</small></p>
                                </div>
                                <div class="card-icon bg-info bg-opacity-10 text-info">
                                    <i class="bi bi-bar-chart"></i>
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
                                    <h6 class="card-title text-muted mb-0">Unused Tags</h6>
                                    <h3 class="fw-bold mt-2">9</h3>
                                    <p class="mb-0 text-danger"><small>Not assigned to any post</small></p>
                                </div>
                                <div class="card-icon bg-danger bg-opacity-10 text-danger">
                                    <i class="bi bi-exclamation-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Popular Tag Cloud -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="content-card card border-0">
                        <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center pt-4">
                            <h5 class="card-title">Popular Tags</h5>
                            <button class="btn btn-sm btn-outline-secondary">
                                <i class="bi bi-arrow-clockwise"></i> Refresh
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="tag-cloud">
                                <span class="tag tag-primary">JavaScript (42)</span>
                                <span class="tag tag-success">Web Development (38)</span>
                                <span class="tag tag-warning">React (35)</span>
                                <span class="tag tag-info">CSS (32)</span>
                                <span class="tag tag-primary">Node.js (28)</span>
                                <span class="tag tag-success">API (25)</span>
                                <span class="tag tag-warning">Design (22)</span>
                                <span class="tag tag-info">UX (20)</span>
                                <span class="tag tag-primary">Python (18)</span>
                                <span class="tag tag-success">Database (16)</span>
                                <span class="tag tag-warning">Tutorial (15)</span>
                                <span class="tag tag-info">Performance (14)</span>
                                <span class="tag tag-primary">Security (12)</span>
                                <span class="tag tag-success">Mobile (11)</span>
                                <span class="tag tag-warning">DevOps (10)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tags Table -->
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="content-card card border-0">
                        <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center pt-4">
                            <h5 class="card-title">All Tags</h5>
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
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="bulkActionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i> Bulk Actions
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="bulkActionsDropdown">
                                        <li><a class="dropdown-item" href="#">Merge Tags</a></li>
                                        <li><a class="dropdown-item" href="#">Delete Tags</a></li>
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
                                            <th scope="col">Slug</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Posts</th>
                                            <th scope="col">Last Used</th>
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
                                                <span class="tag tag-primary">JavaScript</span>
                                            </td>
                                            <td>javascript</td>
                                            <td>JavaScript programming language</td>
                                            <td>42</td>
                                            <td>2 days ago</td>
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
                                                <span class="tag tag-success">Web Development</span>
                                            </td>
                                            <td>web-development</td>
                                            <td>Web development topics</td>
                                            <td>38</td>
                                            <td>Yesterday</td>
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
                                                <span class="tag tag-warning">React</span>
                                            </td>
                                            <td>react</td>
                                            <td>React JavaScript library</td>
                                            <td>35</td>
                                            <td>5 hours ago</td>
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
                                                <span class="tag tag-info">CSS</span>
                                            </td>
                                            <td>css</td>
                                            <td>Cascading Style Sheets</td>
                                            <td>32</td>
                                            <td>1 week ago</td>
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
                                                <span class="tag tag-primary">Node.js</span>
                                            </td>
                                            <td>nodejs</td>
                                            <td>Node.js runtime environment</td>
                                            <td>28</td>
                                            <td>3 days ago</td>
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
                                                <span class="tag tag-success">API</span>
                                            </td>
                                            <td>api</td>
                                            <td>Application Programming Interfaces</td>
                                            <td>25</td>
                                            <td>2 weeks ago</td>
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
                                                <span class="tag">Photography</span>
                                            </td>
                                            <td>photography</td>
                                            <td>Photography techniques and tips</td>
                                            <td>0</td>
                                            <td>Never</td>
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

    <!-- Add Tag Modal -->
    <div class="modal fade" id="addTagModal" tabindex="-1" aria-labelledby="addTagModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTagModalLabel">Add New Tag</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="tagName" class="form-label">Tag Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="tagName" placeholder="Enter tag name" required>
                        </div>
                        <div class="mb-3">
                            <label for="tagSlug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="tagSlug" placeholder="Tag URL slug">
                            <div class="form-text">The "slug" is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</div>
                        </div>
                        <div class="mb-3">
                            <label for="tagDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="tagDescription" rows="3" placeholder="Enter a description for this tag"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tagColor" class="form-label">Color</label>
                            <select class="form-select" id="tagColor">
                                <option value="primary" selected>Primary (Blue)</option>
                                <option value="success">Success (Teal)</option>
                                <option value="warning">Warning (Pink)</option>
                                <option value="info">Info (Light Blue)</option>
                                <option value="none">None (Gray)</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Add Tag</button>
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

        // Auto-generate slug from tag name
        document.getElementById('tagName').addEventListener('input', function() {
            const slug = this.value.toLowerCase()
                .replace(/\s+/g, '-')
                .replace(/[^\w-]+/g, '')
                .replace(/--+/g, '-')
                .replace(/^-+|-+$/g, '');

            document.getElementById('tagSlug').value = slug;
        });

        // Tag cloud interaction
        document.querySelectorAll('.tag-cloud .tag').forEach(tag => {
            tag.addEventListener('click', function() {
                const tagName = this.textContent.split(' (')[0];
                document.querySelector('.filter-section input').value = tagName;
                document.querySelector('.filter-section button').click();
            });
        });
    </script>
@endsection

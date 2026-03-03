@extends('backend.layout.main')
@section('main-container')
    <!-- Dashboard Content -->
    <div class="container-fluid p-4">
        <!-- Page Title -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Dashboard</h4>
                </div>
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
                                <h6 class="card-title text-muted mb-0">Total Users</h6>
                                <h3 class="fw-bold mt-2">542</h3>
                                <p class="mb-0 text-success"><small><i class="bi bi-arrow-up"></i> 8% since last month</small></p>
                            </div>
                            <div class="card-icon bg-info bg-opacity-10 text-info">
                                <i class="bi bi-people"></i>
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
                                <h6 class="card-title text-muted mb-0">Comments</h6>
                                <h3 class="fw-bold mt-2">289</h3>
                                <p class="mb-0 text-danger"><small><i class="bi bi-arrow-down"></i> 3% since last month</small></p>
                            </div>
                            <div class="card-icon bg-warning bg-opacity-10 text-warning">
                                <i class="bi bi-chat-left-text"></i>
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
                                <h6 class="card-title text-muted mb-0">Page Views</h6>
                                <h3 class="fw-bold mt-2">24.8K</h3>
                                <p class="mb-0 text-success"><small><i class="bi bi-arrow-up"></i> 18% since last month</small></p>
                            </div>
                            <div class="card-icon bg-success bg-opacity-10 text-success">
                                <i class="bi bi-eye"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts and Recent Activity -->
        <div class="row">
            <!-- Traffic Chart -->
            <div class="col-xl-8 col-lg-7 mb-4">
                <div class="content-card card border-0">
                    <div class="card-header bg-white border-0 pt-4">
                        <h5 class="card-title">Traffic Overview</h5>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="trafficChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="col-xl-4 col-lg-5 mb-4">
                <div class="content-card card border-0">
                    <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center pt-4">
                        <h5 class="card-title">Recent Activity</h5>
                        <a href="#" class="btn btn-sm btn-link">View All</a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0 px-0">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <span class="bg-primary bg-opacity-10 text-primary p-2 rounded-circle">
                                            <i class="bi bi-plus-lg"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">New post published</h6>
                                        <p class="text-muted mb-0">"Introduction to Web Development" was published</p>
                                        <small class="text-muted">2 hours ago</small>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 px-0">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <span class="bg-info bg-opacity-10 text-info p-2 rounded-circle">
                                            <i class="bi bi-person-plus"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">New user registered</h6>
                                        <p class="text-muted mb-0">John Doe joined the blog</p>
                                        <small class="text-muted">5 hours ago</small>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 px-0">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <span class="bg-warning bg-opacity-10 text-warning p-2 rounded-circle">
                                            <i class="bi bi-chat-left-text"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">New comment</h6>
                                        <p class="text-muted mb-0">Sarah commented on "React Best Practices"</p>
                                        <small class="text-muted">Yesterday</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Posts and Users -->
        <div class="row">
            <!-- Recent Posts -->
            <div class="col-xl-8 mb-4">
                <div class="content-card card border-0">
                    <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center pt-4">
                        <h5 class="card-title">Recent Posts</h5>
                        <button class="btn btn-sm btn-primary"><i class="bi bi-plus-lg me-1"></i> Add New</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Introduction to Web Development</td>
                                        <td>John Smith</td>
                                        <td>Aug 15, 2023</td>
                                        <td><span class="status-badge bg-success">Published</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Best Practices for UX Design</td>
                                        <td>Emma Johnson</td>
                                        <td>Aug 12, 2023</td>
                                        <td><span class="status-badge bg-success">Published</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Getting Started with React</td>
                                        <td>Mike Williams</td>
                                        <td>Aug 10, 2023</td>
                                        <td><span class="status-badge bg-warning">Draft</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>SEO Tips for 2023</td>
                                        <td>Sarah Brown</td>
                                        <td>Aug 5, 2023</td>
                                        <td><span class="status-badge bg-success">Published</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Users -->
            <div class="col-xl-4 mb-4">
                <div class="content-card card border-0">
                    <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center pt-4">
                        <h5 class="card-title">Recent Users</h5>
                        <button class="btn btn-sm btn-primary"><i class="bi bi-plus-lg me-1"></i> Add New</button>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0 px-0">
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=John+Doe&background=random" class="rounded-circle me-3" width="45" height="45">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">John Doe</h6>
                                        <small class="text-muted">Administrator</small>
                                    </div>
                                    <span class="status-badge bg-success">Active</span>
                                </div>
                            </li>
                            <li class="list-group-item border-0 px-0">
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=Jane+Smith&background=random" class="rounded-circle me-3" width="45" height="45">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Jane Smith</h6>
                                        <small class="text-muted">Editor</small>
                                    </div>
                                    <span class="status-badge bg-success">Active</span>
                                </div>
                            </li>
                            <li class="list-group-item border-0 px-0">
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=Robert+Johnson&background=random" class="rounded-circle me-3" width="45" height="45">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Robert Johnson</h6>
                                        <small class="text-muted">Author</small>
                                    </div>
                                    <span class="status-badge bg-success">Active</span>
                                </div>
                            </li>
                            <li class="list-group-item border-0 px-0">
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=Sarah+Brown&background=random" class="rounded-circle me-3" width="45" height="45">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Sarah Brown</h6>
                                        <small class="text-muted">Subscriber</small>
                                    </div>
                                    <span class="status-badge bg-secondary">Inactive</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Sidebar toggle
    document.getElementById('sidebar-toggle').addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('active');
    });

    // Traffic chart
    const trafficCtx = document.getElementById('trafficChart').getContext('2d');
    const trafficChart = new Chart(trafficCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
            datasets: [{
                label: 'Page Views',
                data: [12000, 19000, 15000, 18000, 22000, 21000, 24500, 24800],
                borderColor: '#4361ee',
                tension: 0.3,
                fill: true,
                backgroundColor: 'rgba(67, 97, 238, 0.05)'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        drawBorder: false
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
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

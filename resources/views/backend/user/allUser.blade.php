@extends('backend.layout.main')
@section('main-container')
<!-- Dashboard Content -->
    <div class="container-fluid p-4">
        <!-- Page Title -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">User Management</h4>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                        <i class="bi bi-plus-lg me-1"></i> Add New User
                    </button>
                </div>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                                <h6 class="card-title text-muted mb-0">Total Users</h6>
                                <h3 class="fw-bold mt-2">542</h3>
                                <p class="mb-0 text-success"><small><i class="bi bi-arrow-up"></i> 8% since last month</small></p>
                            </div>
                            <div class="card-icon bg-primary bg-opacity-10 text-primary">
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
                                <h6 class="card-title text-muted mb-0">Active Users</h6>
                                <h3 class="fw-bold mt-2">487</h3>
                                <p class="mb-0 text-success"><small><i class="bi bi-arrow-up"></i> 5% since last month</small></p>
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
                                <h6 class="card-title text-muted mb-0">Suspended</h6>
                                <h3 class="fw-bold mt-2">24</h3>
                                <p class="mb-0 text-danger"><small><i class="bi bi-arrow-up"></i> 2 since last week</small></p>
                            </div>
                            <div class="card-icon bg-danger bg-opacity-10 text-danger">
                                <i class="bi bi-slash-circle"></i>
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
                                <h6 class="card-title text-muted mb-0">Admins</h6>
                                <h3 class="fw-bold mt-2">12</h3>
                                <p class="mb-0 text-info"><small>No change</small></p>
                            </div>
                            <div class="card-icon bg-info bg-opacity-10 text-info">
                                <i class="bi bi-shield-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter Section -->
        {{-- <div class="row mb-4">
            <div class="col-12">
                <div class="filter-section">
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <label for="searchUser" class="form-label">Search Users</label>
                            <input type="text" class="form-control" id="searchUser" placeholder="Name, email...">
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="filterRole" class="form-label">Filter by Role</label>
                            <select class="form-select" id="filterRole">
                                <option value="">All Roles</option>
                                <option value="admin">Administrator</option>
                                <option value="editor">Editor</option>
                                <option value="author">Author</option>
                                <option value="subscriber">Subscriber</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-2">
                            <label for="filterStatus" class="form-label">Filter by Status</label>
                            <select class="form-select" id="filterStatus">
                                <option value="">All Status</option>
                                <option value="active">Active</option>
                                <option value="suspended">Suspended</option>
                                <option value="pending">Pending</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-2 d-flex align-items-end">
                            <button class="btn btn-outline-secondary w-100">
                                <i class="bi bi-funnel"></i> Apply Filters
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Users Table -->
        <div class="row">
            <div class="col-12 mb-4">
                <div class="content-card card border-0">
                    <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center pt-4">
                        <h5 class="card-title">All Users</h5>
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
                                    <li><a class="dropdown-item" href="#">Activate Selected</a></li>
                                    <li><a class="dropdown-item" href="#">Suspend Selected</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#">Delete Selected</a></li>
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
                                                <input class="form-check-input" type="checkbox" id="selectAllUsers">
                                            </div>
                                        </th>
                                        <th>User</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Posts</th>
                                        <th>Status</th>
                                        <th>Joined</th>
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
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://ui-avatars.com/api/?name=John+Doe&background=random" class="user-avatar me-3">
                                                <div>
                                                    <div class="fw-bold">John Doe</div>
                                                    <small class="text-muted">@johndoe</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>john.doe@example.com</td>
                                        <td><span class="badge bg-primary">Administrator</span></td>
                                        <td>42</td>
                                        <td><span class="status-badge bg-success">Active</span></td>
                                        <td>Jun 12, 2022</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary action-btn" data-bs-toggle="tooltip" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success action-btn" data-bs-toggle="tooltip" title="View Profile">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger action-btn" data-bs-toggle="tooltip" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
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
                                                <img src="https://ui-avatars.com/api/?name=Jane+Smith&background=random" class="user-avatar me-3">
                                                <div>
                                                    <div class="fw-bold">Jane Smith</div>
                                                    <small class="text-muted">@janesmith</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>jane.smith@example.com</td>
                                        <td><span class="badge bg-info">Editor</span></td>
                                        <td>28</td>
                                        <td><span class="status-badge bg-success">Active</span></td>
                                        <td>Mar 5, 2023</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary action-btn" data-bs-toggle="tooltip" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success action-btn" data-bs-toggle="tooltip" title="View Profile">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger action-btn" data-bs-toggle="tooltip" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
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
                                                <img src="https://ui-avatars.com/api/?name=Robert+Johnson&background=random" class="user-avatar me-3">
                                                <div>
                                                    <div class="fw-bold">Robert Johnson</div>
                                                    <small class="text-muted">@robertj</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>robert.j@example.com</td>
                                        <td><span class="badge bg-warning">Author</span></td>
                                        <td>15</td>
                                        <td><span class="status-badge bg-success">Active</span></td>
                                        <td>Jul 18, 2023</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary action-btn" data-bs-toggle="tooltip" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success action-btn" data-bs-toggle="tooltip" title="View Profile">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger action-btn" data-bs-toggle="tooltip" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
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
                                                <img src="https://ui-avatars.com/api/?name=Sarah+Brown&background=random" class="user-avatar me-3">
                                                <div>
                                                    <div class="fw-bold">Sarah Brown</div>
                                                    <small class="text-muted">@sarahb</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>sarah.brown@example.com</td>
                                        <td><span class="badge bg-secondary">Subscriber</span></td>
                                        <td>0</td>
                                        <td><span class="status-badge bg-success">Active</span></td>
                                        <td>Aug 5, 2023</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary action-btn" data-bs-toggle="tooltip" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success action-btn" data-bs-toggle="tooltip" title="View Profile">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger action-btn" data-bs-toggle="tooltip" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
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
                                                <img src="https://ui-avatars.com/api/?name=Mike+Williams&background=random" class="user-avatar me-3">
                                                <div>
                                                    <div class="fw-bold">Mike Williams</div>
                                                    <small class="text-muted">@mikew</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>mike.williams@example.com</td>
                                        <td><span class="badge bg-warning">Author</span></td>
                                        <td>7</td>
                                        <td><span class="status-badge bg-danger">Suspended</span></td>
                                        <td>May 22, 2023</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary action-btn" data-bs-toggle="tooltip" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success action-btn" data-bs-toggle="tooltip" title="View Profile">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger action-btn" data-bs-toggle="tooltip" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
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

<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="userName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="userName" placeholder="Enter full name">
                    </div>
                    <div class="mb-3">
                        <label for="userEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="userEmail" placeholder="Enter email">
                    </div>
                    <div class="mb-3">
                        <label for="userUsername" class="form-label">Username</label>
                        <input type="text" class="form-control" id="userUsername" placeholder="Enter username">
                    </div>
                    <div class="mb-3">
                        <label for="userRole" class="form-label">Role</label>
                        <select class="form-select" id="userRole">
                            <option value="subscriber">Subscriber</option>
                            <option value="author">Author</option>
                            <option value="editor">Editor</option>
                            <option value="administrator">Administrator</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="userPassword" placeholder="Enter password">
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="sendNotification">
                        <label class="form-check-label" for="sendNotification">
                            Send user notification
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Add User</button>
            </div>
        </div>
    </div>
</div>
@endsection


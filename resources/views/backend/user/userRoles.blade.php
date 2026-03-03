@extends('backend.layout.main')
@section('main-container')
        <!-- Dashboard Content -->
        <div class="container-fluid p-4">
            <!-- Page Title -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">User Roles & Capabilities</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addRoleModal">
                            <i class="bi bi-plus-lg me-1"></i> Add New Role
                        </button>
                    </div>
                    <nav aria-label="breadcrumb" class="mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Users</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Roles</li>
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
                                    <h6 class="card-title text-muted mb-0">Total Roles</h6>
                                    <h3 class="fw-bold mt-2">6</h3>
                                    <p class="mb-0 text-muted"><small>Default + Custom</small></p>
                                </div>
                                <div class="card-icon bg-primary bg-opacity-10 text-primary">
                                    <i class="bi bi-person-badge"></i>
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
                                    <h6 class="card-title text-muted mb-0">Administrators</h6>
                                    <h3 class="fw-bold mt-2">4</h3>
                                    <p class="mb-0 text-success"><small>Active users</small></p>
                                </div>
                                <div class="card-icon bg-danger bg-opacity-10 text-danger">
                                    <i class="bi bi-shield-check"></i>
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
                                    <h6 class="card-title text-muted mb-0">Editors</h6>
                                    <h3 class="fw-bold mt-2">7</h3>
                                    <p class="mb-0 text-success"><small>Active users</small></p>
                                </div>
                                <div class="card-icon bg-info bg-opacity-10 text-info">
                                    <i class="bi bi-pencil-square"></i>
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
                                    <h6 class="card-title text-muted mb-0">Authors</h6>
                                    <h3 class="fw-bold mt-2">12</h3>
                                    <p class="mb-0 text-success"><small>Active users</small></p>
                                </div>
                                <div class="card-icon bg-success bg-opacity-10 text-success">
                                    <i class="bi bi-file-text"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Roles Grid -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="content-card card border-0">
                        <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center pt-4">
                            <h5 class="card-title">User Roles</h5>
                            <div class="d-flex">
                                <input type="text" class="form-control form-control-sm me-2" placeholder="Search roles..." style="width: 200px;">
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-filter"></i> Filter
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- Administrator Role -->
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="role-card card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-start mb-3">
                                                <div class="role-icon bg-danger bg-opacity-10 text-danger">
                                                    <i class="bi bi-shield-check"></i>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-outline-secondary border-0" type="button" id="adminDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="bi bi-people me-2"></i>View Users</a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h5 class="card-title">Administrator</h5>
                                            <p class="card-text">Has full access to all administration features.</p>
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="badge bg-primary capability-badge">Full Access</span>
                                                <span class="text-muted">4 users</span>
                                            </div>
                                            <div class="d-grid">
                                                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editRoleModal">Manage Capabilities</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Editor Role -->
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="role-card card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-start mb-3">
                                                <div class="role-icon bg-info bg-opacity-10 text-info">
                                                    <i class="bi bi-pencil-square"></i>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-outline-secondary border-0" type="button" id="editorDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="editorDropdown">
                                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="bi bi-people me-2"></i>View Users</a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h5 class="card-title">Editor</h5>
                                            <p class="card-text">Can publish and manage posts including other users' posts.</p>
                                            <div class="d-flex justify-content-between align-content-center mb-3">
                                                <span class="badge bg-info capability-badge">Content Management</span>
                                                <span class="text-muted">7 users</span>
                                            </div>
                                            <div class="d-grid">
                                                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editRoleModal">Manage Capabilities</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Author Role -->
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="role-card card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-start mb-3">
                                                <div class="role-icon bg-success bg-opacity-10 text-success">
                                                    <i class="bi bi-file-text"></i>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-outline-secondary border-0" type="button" id="authorDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="authorDropdown">
                                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="bi bi-people me-2"></i>View Users</a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h5 class="card-title">Author</h5>
                                            <p class="card-text">Can publish and manage their own posts.</p>
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="badge bg-success capability-badge">Publish Posts</span>
                                                <span class="text-muted">12 users</span>
                                            </div>
                                            <div class="d-grid">
                                                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editRoleModal">Manage Capabilities</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Contributor Role -->
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="role-card card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-start mb-3">
                                                <div class="role-icon bg-warning bg-opacity-10 text-warning">
                                                    <i class="bi bi-pencil"></i>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-outline-secondary border-0" type="button" id="contributorDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="contributorDropdown">
                                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="bi bi-people me-2"></i>View Users</a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h5 class="card-title">Contributor</h5>
                                            <p class="card-text">Can write and manage their own posts but cannot publish them.</p>
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="badge bg-warning capability-badge">Write Posts</span>
                                                <span class="text-muted">9 users</span>
                                            </div>
                                            <div class="d-grid">
                                                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editRoleModal">Manage Capabilities</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Subscriber Role -->
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="role-card card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-start mb-3">
                                                <div class="role-icon bg-secondary bg-opacity-10 text-secondary">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-outline-secondary border-0" type="button" id="subscriberDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="subscriberDropdown">
                                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="bi bi-people me-2"></i>View Users</a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h5 class="card-title">Subscriber</h5>
                                            <p class="card-text">Can only manage their profile and read content.</p>
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="badge bg-secondary capability-badge">Read Content</span>
                                                <span class="text-muted">423 users</span>
                                            </div>
                                            <div class="d-grid">
                                                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editRoleModal">Manage Capabilities</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Custom Role -->
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="role-card card h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-start mb-3">
                                                <div class="role-icon bg-primary bg-opacity-10 text-primary">
                                                    <i class="bi bi-gear"></i>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-outline-secondary border-0" type="button" id="customDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="customDropdown">
                                                        <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                                                        <li><a class="dropdown-item" href="#"><i class="bi bi-people me-2"></i>View Users</a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h5 class="card-title">Content Moderator</h5>
                                            <p class="card-text">Custom role with specific content moderation capabilities.</p>
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="badge bg-primary capability-badge">Moderate Content</span>
                                                <span class="text-muted">3 users</span>
                                            </div>
                                            <div class="d-grid">
                                                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editRoleModal">Manage Capabilities</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Capabilities Table -->
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="content-card card border-0">
                        <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center pt-4">
                            <h5 class="card-title">Role Capabilities</h5>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-download me-1"></i> Export
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Capability</th>
                                            <th class="text-center">Administrator</th>
                                            <th class="text-center">Editor</th>
                                            <th class="text-center">Author</th>
                                            <th class="text-center">Contributor</th>
                                            <th class="text-center">Subscriber</th>
                                            <th class="text-center">Moderator</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Read</td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Edit Posts</td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Publish Posts</td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Edit Others' Posts</td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Manage Categories</td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Moderate Comments</td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Manage Users</td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Manage Options</td>
                                            <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                            <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Role Modal -->
    <div class="modal fade" id="addRoleModal" tabindex="-1" aria-labelledby="addRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addRoleModalLabel">Add New Role</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="roleName" class="form-label">Role Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="roleName" placeholder="e.g., Content Moderator" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="roleSlug" class="form-label">Role Slug <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="roleSlug" placeholder="e.g., content_moderator" required>
                                <div class="form-text">Must be unique and contain only lowercase letters and underscores</div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="roleDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="roleDescription" rows="2" placeholder="Brief description of this role's capabilities"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Capabilities</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="readPosts">
                                        <label class="form-check-label" for="readPosts">Read Posts</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="editPosts" checked>
                                        <label class="form-check-label" for="editPosts">Edit Posts</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="publishPosts">
                                        <label class="form-check-label" for="publishPosts">Publish Posts</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="editOthersPosts">
                                        <label class="form-check-label" for="editOthersPosts">Edit Others' Posts</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="manageCategories">
                                        <label class="form-check-label" for="manageCategories">Manage Categories</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="moderateComments" checked>
                                        <label class="form-check-label" for="moderateComments">Moderate Comments</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="manageUsers">
                                        <label class="form-check-label" for="manageUsers">Manage Users</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="manageOptions">
                                        <label class="form-check-label" for="manageOptions">Manage Options</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="cloneCapabilities">
                            <label class="form-check-label" for="cloneCapabilities">Clone capabilities from existing role</label>
                        </div>

                        <div class="mb-3" id="cloneRoleContainer" style="display: none;">
                            <label for="cloneRole" class="form-label">Select Role to Clone</label>
                            <select class="form-select" id="cloneRole">
                                <option value="editor">Editor</option>
                                <option value="author">Author</option>
                                <option value="contributor">Contributor</option>
                                <option value="subscriber">Subscriber</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Create Role</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Role Modal -->
    <div class="modal fade" id="editRoleModal" tabindex="-1" aria-labelledby="editRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editRoleModalLabel">Edit Role Capabilities</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label for="editRoleName" class="form-label">Role Name</label>
                                <input type="text" class="form-control" id="editRoleName" value="Content Moderator">
                            </div>
                            <div class="col-md-6">
                                <label for="editRoleSlug" class="form-label">Role Slug</label>
                                <input type="text" class="form-control" id="editRoleSlug" value="content_moderator" disabled>
                                <div class="form-text">Role slug cannot be changed</div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Capabilities</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="editReadPosts" checked>
                                        <label class="form-check-label" for="editReadPosts">Read Posts</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="editEditPosts" checked>
                                        <label class="form-check-label" for="editEditPosts">Edit Posts</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="editPublishPosts" checked>
                                        <label class="form-check-label" for="editPublishPosts">Publish Posts</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="editEditOthersPosts" checked>
                                        <label class="form-check-label" for="editEditOthersPosts">Edit Others' Posts</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="editManageCategories" checked>
                                        <label class="form-check-label" for="editManageCategories">Manage Categories</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="editModerateComments" checked>
                                        <label class="form-check-label" for="editModerateComments">Moderate Comments</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="editManageUsers">
                                        <label class="form-check-label" for="editManageUsers">Manage Users</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="editManageOptions">
                                        <label class="form-check-label" for="editManageOptions">Manage Options</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Update Role</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle clone role dropdown
        document.getElementById('cloneCapabilities').addEventListener('change', function() {
            document.getElementById('cloneRoleContainer').style.display = this.checked ? 'block' : 'none';
        });

        // Auto-generate slug from role name
        document.getElementById('roleName').addEventListener('input', function() {
            const slug = this.value.toLowerCase()
                .replace(/\s+/g, '_')
                .replace(/[^\w_]+/g, '')
                .replace(/_+/g, '_')
                .replace(/^_+|_+$/g, '');

            document.getElementById('roleSlug').value = slug;
        });
    </script>
@endsection

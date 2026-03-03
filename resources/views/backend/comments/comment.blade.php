@extends('backend.layout.main')
@section('main-container')

    <!-- Dashboard Content -->
    <div class="container-fluid p-4">
        <!-- Page Title -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Comments Management</h4>
                    <div>
                        <button class="btn btn-outline-secondary me-2">
                            <i class="bi bi-arrow-repeat"></i> Refresh
                        </button>
                        <button class="btn btn-primary">
                            <i class="bi bi-plus-lg me-1"></i> Add New
                        </button>
                    </div>
                </div>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Comments</li>
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
                                <h6 class="card-title text-muted mb-0">Total Comments</h6>
                                <h3 class="fw-bold mt-2">1,284</h3>
                                <p class="mb-0 text-muted"><small>All time</small></p>
                            </div>
                            <div class="card-icon bg-primary bg-opacity-10 text-primary">
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
                                <h6 class="card-title text-muted mb-0">Pending</h6>
                                <h3 class="fw-bold mt-2">42</h3>
                                <p class="mb-0 text-warning"><small>Awaiting moderation</small></p>
                            </div>
                            <div class="card-icon bg-warning bg-opacity-10 text-warning">
                                <i class="bi bi-clock"></i>
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
                                <h6 class="card-title text-muted mb-0">Approved</h6>
                                <h3 class="fw-bold mt-2">1,158</h3>
                                <p class="mb-0 text-success"><small>Published comments</small></p>
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
                                <h6 class="card-title text-muted mb-0">Spam</h6>
                                <h3 class="fw-bold mt-2">84</h3>
                                <p class="mb-0 text-danger"><small>Marked as spam</small></p>
                            </div>
                            <div class="card-icon bg-danger bg-opacity-10 text-danger">
                                <i class="bi bi-shield-exclamation"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Comments Table -->
        <div class="row">
            <div class="col-12 mb-4">
                <div class="content-card card border-0">
                    <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center pt-4">
                        <h5 class="card-title">All Comments</h5>
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
                                    <i class="bi bi-list"></i> View
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="viewDropdown">
                                    <li><a class="dropdown-item" href="#">Compact View</a></li>
                                    <li><a class="dropdown-item" href="#">Detailed View</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Show All Columns</a></li>
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
                                        <th scope="col" style="width: 40%;">Comment</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">In Response To</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" style="width: 120px;">Actions</th>
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
                                            <div class="comment-excerpt" data-bs-toggle="tooltip" title="This is a great article! I found the section about responsive design particularly helpful. Looking forward to more content like this.">
                                                This is a great article! I found the section about responsive design particularly helpful...
                                            </div>
                                        </td>
                                        <td>
                                            <div class="comment-author">
                                                <img src="https://ui-avatars.com/api/?name=John+Doe&background=random" class="user-avatar me-2">
                                                John Doe
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-primary">Understanding Modern Web Design Principles</a>
                                        </td>
                                        <td>2 hours ago</td>
                                        <td><span class="status-badge bg-warning">Pending</span></td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button" class="btn btn-success" data-bs-toggle="tooltip" title="Approve">
                                                    <i class="bi bi-check-lg"></i>
                                                </button>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="tooltip" title="Reply">
                                                    <i class="bi bi-reply"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Spam">
                                                    <i class="bi bi-shield-exclamation"></i>
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
                                            <div class="comment-excerpt" data-bs-toggle="tooltip" title="I've been implementing these techniques on my projects and the results have been amazing. The performance improvements alone are worth it!">
                                                I've been implementing these techniques on my projects and the results have been amazing...
                                            </div>
                                        </td>
                                        <td>
                                            <div class="comment-author">
                                                <img src="https://ui-avatars.com/api/?name=Sarah+Smith&background=random" class="user-avatar me-2">
                                                Sarah Smith
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-primary">Optimizing Website Performance in 2023</a>
                                        </td>
                                        <td>Yesterday</td>
                                        <td><span class="status-badge bg-success">Approved</span></td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" title="Unapprove">
                                                    <i class="bi bi-x-circle"></i>
                                                </button>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="tooltip" title="Reply">
                                                    <i class="bi bi-reply"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Spam">
                                                    <i class="bi bi-shield-exclamation"></i>
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
                                            <div class="comment-excerpt" data-bs-toggle="tooltip" title="Could you provide more examples of how to implement this in React? I'm having trouble with the state management part.">
                                                Could you provide more examples of how to implement this in React? I'm having trouble...
                                            </div>
                                        </td>
                                        <td>
                                            <div class="comment-author">
                                                <img src="https://ui-avatars.com/api/?name=Mike+Johnson&background=random" class="user-avatar me-2">
                                                Mike Johnson
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-primary">Advanced React Patterns for Modern Apps</a>
                                        </td>
                                        <td>3 days ago</td>
                                        <td><span class="status-badge bg-success">Approved</span></td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" title="Unapprove">
                                                    <i class="bi bi-x-circle"></i>
                                                </button>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="tooltip" title="Reply">
                                                    <i class="bi bi-reply"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Spam">
                                                    <i class="bi bi-shield-exclamation"></i>
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
                                            <div class="comment-excerpt" data-bs-toggle="tooltip" title="Check out my website for cheap products! [spam link removed]">
                                                Check out my website for cheap products! [spam link removed]
                                            </div>
                                        </td>
                                        <td>
                                            <div class="comment-author">
                                                <img src="https://ui-avatars.com/api/?name=Spam+Account&background=random" class="user-avatar me-2">
                                                Spam Account
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-primary">The Future of E-commerce</a>
                                        </td>
                                        <td>1 week ago</td>
                                        <td><span class="status-badge bg-danger">Spam</span></td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button" class="btn btn-success" data-bs-toggle="tooltip" title="Not Spam">
                                                    <i class="bi bi-check-lg"></i>
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
                                            <div class="comment-excerpt" data-bs-toggle="tooltip" title="This tutorial saved me hours of research. The step-by-step approach made it easy to follow even for a beginner like me.">
                                                This tutorial saved me hours of research. The step-by-step approach made it easy to follow...
                                            </div>
                                        </td>
                                        <td>
                                            <div class="comment-author">
                                                <img src="https://ui-avatars.com/api/?name=Emily+Chen&background=random" class="user-avatar me-2">
                                                Emily Chen
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-primary">Getting Started with Web Development</a>
                                        </td>
                                        <td>4 days ago</td>
                                        <td><span class="status-badge bg-success">Approved</span></td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" title="Unapprove">
                                                    <i class="bi bi-x-circle"></i>
                                                </button>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="tooltip" title="Reply">
                                                    <i class="bi bi-reply"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Spam">
                                                    <i class="bi bi-shield-exclamation"></i>
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
                                            <div class="comment-excerpt" data-bs-toggle="tooltip" title="I disagree with the approach suggested in point 3. There's a more efficient way to handle this using the new API.">
                                                I disagree with the approach suggested in point 3. There's a more efficient way to handle this...
                                            </div>
                                        </td>
                                        <td>
                                            <div class="comment-author">
                                                <img src="https://ui-avatars.com/api/?name=Robert+Kim&background=random" class="user-avatar me-2">
                                                Robert Kim
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-primary">10 Best Practices for API Design</a>
                                        </td>
                                        <td>5 days ago</td>
                                        <td><span class="status-badge bg-warning">Pending</span></td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button" class="btn btn-success" data-bs-toggle="tooltip" title="Approve">
                                                    <i class="bi bi-check-lg"></i>
                                                </button>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="tooltip" title="Reply">
                                                    <i class="bi bi-reply"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Spam">
                                                    <i class="bi bi-shield-exclamation"></i>
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

<!-- Reply Modal -->
<div class="modal fade" id="replyModal" tabindex="-1" aria-labelledby="replyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="replyModalLabel">Reply to Comment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Original Comment</label>
                    <div class="border rounded p-3 bg-light">
                        <strong>John Doe</strong> <span class="text-muted">• 2 hours ago</span>
                        <p class="mb-0 mt-2">This is a great article! I found the section about responsive design particularly helpful.</p>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="replyContent" class="form-label">Your Reply</label>
                    <textarea class="form-control" id="replyContent" rows="5" placeholder="Type your reply here..."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Submit Reply</button>
            </div>
        </div>
    </div>
</div>
@endsection

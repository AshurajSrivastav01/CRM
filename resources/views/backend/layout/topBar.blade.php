<!-- Header -->
<header id="header" class="d-flex align-items-center p-3">
    <button id="sidebar-toggle" class="btn btn-sm btn-primary me-3">
        <i class="bi bi-list"></i>
    </button>
    <div class="d-flex align-items-center ms-auto">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://ui-avatars.com/api/?name=Admin+User&background=4361ee&color=fff" alt="Admin" width="40" height="40" class="rounded-circle me-2">
                <span class="d-none d-md-inline">Admin User</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="dropdownUser">
                <li><a class="dropdown-item" href="{{ url('/dashboard/profile') }}"><i class="bi bi-person me-2"></i> Profile</a></li>
                {{-- <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> Settings</a></li> --}}
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i> Sign out</a></li>
            </ul>
        </div>
    </div>
</header>

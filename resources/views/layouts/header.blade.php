<header class="topbar">
    <div class="topbar-left">
        <button class="sidebar-toggle btn btn-icon" id="sidebarToggle">
            <i data-feather="menu"></i>
        </button>   
             
    </div>
    <div class="topbar-right">
        <div class="dropdown topbar-dropdown">
            <button class="btn topbar-user" data-bs-toggle="dropdown">
                <div class="avatar avatar-sm">
                    <div class="avatar-placeholder bg-primary">RS</div>
                </div>
                <div class="user-info d-none d-lg-block">
                    <span class="user-name">Rakesh Sharma</span>
                    <span class="user-role">Administrator</span>
                </div>
                <i data-feather="chevron-down" class="d-none d-lg-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end user-dropdown">
                <div class="dropdown-header user-dropdown-header">
                    <div class="avatar avatar-md">
                        <div class="avatar-placeholder bg-primary">JD</div>
                    </div>
                    <div>
                        <h6 class="mb-0">Rakesh Sharma</h6>
                        <small class="text-muted">rohit@info.com</small>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
               @if(session('role_id') == 2)
    <a class="dropdown-item" href="{{ url('/operator/profile') }}">
        <i data-feather="user"></i> My Profile
    </a>
@endif
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="{{ url('logout') }}"><i data-feather="log-out"></i> Sign Out</a>
            </div>
        </div>
    </div>
</header>

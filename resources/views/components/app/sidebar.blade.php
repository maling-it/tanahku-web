<nav class="sidebar offcanvas-start offcanvas-md" tabindex="-1" id="sidebar-example">
    <div class="offcanvas-header border-bottom border-secondary border-opacity-25">
        <a class="sidebar-brand" href="{{ config('app.url') }}/">
            <img src="{{ config('app.url') }}/favicon.png" alt="Logo" height="24"
                class="d-inline-block align-text-top">
            {{ config('app.name', 'Tanahku') }}
        </a>
        <button type="button" class="btn-close d-md-none" data-bs-dismiss="offcanvas" aria-label="Close"
            data-bs-target="#sidebar-example"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ config('app.url') }}" aria-current="page">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ config('app.url') }}/about" aria-current="page">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ config('app.url') }}/docs" aria-current="page">Docs</a>
            </li>
            <li>
                <hr class="sidebar-divider">
            </li>
        </ul>
    </div>
</nav>
<nav class="navbar"
    style="background-color: var(--bs-content-bg); border-bottom: var(--bs-border-width) solid var(--bs-content-border-color);">
    <div class="container-fluid">
        <button type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar-example"
            class="btn btn-secondary d-md-none">
            <i class="fa-light fa-sidebar me-1"></i> Sidebar
        </button>
        <span class="navbar-text">
            Tanah ku demo <span class="badge">V1</span>
        </span>
    </div>
</nav>

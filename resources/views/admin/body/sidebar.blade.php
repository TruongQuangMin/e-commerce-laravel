<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            MinStore
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>

            {{-- Category --}}
            <li class="nav-item nav-category">Category of Laptop</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#category" role="button" aria-expanded="false"
                    aria-controls="category">
                    <i class="link-icon" data-feather="layers"></i>
                    <span class="link-title">Categories</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="category">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('categories.all') }}" class="nav-link">All Categories</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('categories.add') }}" class="nav-link">Add new Category</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#sub-category" role="button" aria-expanded="false"
                    aria-controls="sub-category">
                    <i class="link-icon" data-feather="layers"></i>
                    <span class="link-title">Sub-Categories</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="sub-category">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">All Categories</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Add new Category</a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- Brand --}}
            <li class="nav-item nav-category">Brand of Laptop</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#brand" role="button" aria-expanded="false"
                    aria-controls="brand">
                    <i class="link-icon" data-feather="layers"></i>
                    <span class="link-title">Brand</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="brand">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('brand.all') }}" class="nav-link">All Brand</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('brand.add') }}" class="nav-link">Add new Brand</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
<nav class="settings-sidebar">
</nav>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('dashboard.home')}}" class="nav-link">Home-Dashboard</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('site.home')}}" target="_blank" class="nav-link">Back To Site</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
 <!-- Right nav-bar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <form action="{{url('logout')}}" method="POST">
                @csrf
            <span class="btn-xxs mt-2 btn-danger">
                <button type="submit" style="color: blue">
                    Logout
                </button>
            </span>
            </form>
        </li>
    </ul>
 {{-- End Right nav-bar  --}}
</nav>

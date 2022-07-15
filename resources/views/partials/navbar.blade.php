<header class="header">
    <!-- Main Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top bg-light">
      <div class="search-area">
        <div class="search-area-inner d-flex align-items-center justify-content-center">
          <div class="close-btn"><i class="icon-close"></i></div>
          <div class="row d-flex justify-content-center">
            <div class="col-md-8">
              <form action="#">
                <div class="form-group">
                  <input type="search" name="search" id="search" placeholder="What are you looking for?">
                  <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- Navbar Brand -->
        <div class="navbar-header d-flex align-items-center justify-content-between">
          <!-- Navbar Brand -->
          <a href="index.html" class="navbar-brand">Laravel Blog</a>
          <!-- Toggle Button-->
          <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
        </div>
        <!-- Navbar Menu -->
        <div id="navbarcollapse" class="collapse navbar-collapse">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="/" class="nav-link  {{ Request::is('/') ? 'active' : '' }}">Home</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('posts') }}" class="nav-link {{ Request::is('posts') ? 'active' : '' }}">Post</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link {{ Request::is('profile') ? 'active' : '' }}">My Profile</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
            </li>
          </ul>

          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Wellcome, Admin
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link {{ ($active === "login") ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li> --}}
          </ul>
        </div>
      </div>
    </nav>
  </header>
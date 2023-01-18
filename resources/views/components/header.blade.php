<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <img src="img/Panda.png" height="3%" width="3%">
    <a class="navbar-brand" href="{{ route ('home') }}">Ticketsysteem</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route ('aboutus') }}" id="aboutus">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route ('contact') }}">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropdown">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route ('events') }}">Events</a></li>
            @if(Auth::user())
            <li><a class="dropdown-item" href="{{ route ('tickets') }}">Jouw tickets</a></li>
            @if(Auth::user()->is_admin)
            <li><a class="dropdown-item" href="add-blog-post-form">Add event</a></li>
            @endif
            <li><hr class="dropdown-divider"></li>
              <li class="nav-item">
                <form action="{{ route ('logout') }}" method="POST">
                  @csrf
                  <button class="nav-link" type="submit">Logout</button>
                </form>
              </li>
            @else
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ route ('login') }}">Login</a></li>
            <li><a class="dropdown-item" href="{{ route ('register') }}">Register</a></li>
            @endif
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="searchbar">
        <button class="btn btn-outline-success" type="submit" id="search">Search</button>
      </form>
    </div>
  </div>
</nav>
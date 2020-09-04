<nav class="navbar sticky-top navbar-expand-md navbar-dark">
    <!-- Title -->
    <a href="https://www.stanford.edu/" class="navbar-brand">Stanford University</a>

    <!-- Toggler for mobile view -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsed-nav">
      <span><i class="fas fa-bars fa-1x"></i></span>
      <span>Menu</span>
    </button>

    <!--Navbar links -->
    <div class="collapse navbar-collapse" id="collapsed-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="{{ url("/") }}">Home</a></li>
        <li class="nav-item"><a href="{{ url("/news") }}">News</a></li>
        <li class="nav-item">Faculty & Staff</li>
        <li class="nav-item">Families</li>
        <li class="nav-item"><a href="{{ url("/about") }}">About</a></li>
      </ul>
    </div>
</nav>
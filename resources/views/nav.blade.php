<nav class="navbar navbar-expand-lg text-primary bg-primary mb-2">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color:black;">Private Flight Booking App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          @if (auth()->check())
          <a class="nav-link" href="/dashboard">Dashboard</a>
          <a class="nav-link" href="/logs">Logs</a>
          <a class="nav-link" href="{{'/logout'}}" style="color:black">Logout</a>  
          @else
          <a class="nav-link" href="/register" style="color:black">Register</a>
          <a class="nav-link" href="/" style="color:black">Login</a> 
              
          @endif
          
        </div>
      </div>
    </div>
  </nav>
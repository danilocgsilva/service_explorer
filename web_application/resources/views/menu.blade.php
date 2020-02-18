<nav 
    class="navbar 
        navbar-expand-md 
        navbar-light 
        bg-light 
        justify-content-between">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(página atual)</span></a>
        </li>
        @auth
          <li class="nav-item dropdown">
            <a 
              href="#"
              id="dropdown-services"
              class="nav-link dropdown-toggle"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false">Services/Endpoint</a>
              <div class="dropdown-menu" aria-labelledby="dropdown-services">
                <a href="{{ route('service.create') }}" class="dropdown-item">Create</a>
                <a href="{{ route('service.index') }}" class="dropdown-item">List</a>
              </div>
          </li>
          <li class="nav-item dropdown">
            <a
              href="#"
              id="dropdown-servers"
              class="nav-link dropdown-toggle"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false">Server</a>
              <div class="dropdown-menu" aria-labelledby="dropdown-servers">
                <a href="{{ route('server.create') }}" class="dropdown-item">Create</a>
                <a href="{{ route('server.index') }}" class="dropdown-item">List</a>
              </div>
          </li>
        @endauth
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item">
            @auth
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</span></a>
              <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none">
                @csrf
              </form>
            @else
              <a class="nav-link" href="{{ route('login') }}">Login</span></a>
            @endauth
        </li>
      </ul>
    </div>
  </nav>
<nav 
    class="navbar 
        navbar-expand-lg 
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
        <li class="nav-item">
            <a class="nav-link" href="#">Services/Endpoints</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Servers</a>
        </li>
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
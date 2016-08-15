
<header>

  <!-- NAV BAR -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('inicio') }}">
          <img src="{{ asset('images/mailbox.png') }}" alt="">
          <span>UNEGBox</span>
        </a>
      </div>
      
    <div id="navbar-collapse" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right" id="navbar-collapse">
        <div class="nav-marker"></div>
        <li class=" @if ($slug == "inicio") active @endif ">
          <a href="{{ route('inicio') }}">Inicio</a>
        </li>
        <li class=" @if (strpos($slug, 'buzon') !== false) active @endif ">
          <a href="{{ route('buzon') }}">Buzón</a>
        </li>
        <li class=" @if (strpos($slug, 'solicitud') !== false) active @endif ">
          <a href="{{ route('solicitud') }}">Solicitud</a>
        </li>
        <li class=" @if ($slug == "nosotros") active @endif ">
          <a href="{{ route('nosotros') }}">Nosotros</a>
        </li>

        <li class="dropdown @if (strpos($slug, 'user') !== false) active @endif ">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Invitado <span class="glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('user.login') }}">Iniciar Sesion</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Cerrar Sesion</a></li>
          </ul>
        </li>
      </ul>
    </div>
    
    </div>
  </nav>
  <!-- NAV BAR -->
</header>
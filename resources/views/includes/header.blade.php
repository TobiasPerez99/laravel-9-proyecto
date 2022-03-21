  <div class="container">
    <header class="d-flex align-items-center" style="align-items: center">
        <div class="logo m-3">
            <a href="#"><img style="width: 15%" src="/img/logo.png" alt="Logo"></a>
        </div>

        <ul class="nav nav-pills" style="flex-wrap: nowrap">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Inicio</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Destacados</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Unidades</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Nosotros</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contactanos</a></li>
            @guest
            <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
            @endguest
            @auth
            <li class="nav-item"><a href="{{route('logout')}}" class="nav-link">Logout</a></li>
            @endauth

          </ul>
    </header>

  </div>

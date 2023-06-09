
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="{{Vite::asset("public/images/dc-logo.png")}}" alt="logo"</a>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
            <a class="nav-link" href="{{route('characters')}}">CHARACTERS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('comics')}}">COMICS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('movies')}}">MOVIES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('tv')}}">TV</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('games')}}">GAMES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('collectibles')}}">COLLECTIBLES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('videos')}}">VIDEOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('fans')}}">FANS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('news')}}">NEWS</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              SHOP
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

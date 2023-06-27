
<nav class="navbar navbar-expand-sm navbar-light bg-light" style="color: aqua">
    <div class="container">
      <a class="navbar-brand" href="/index/">Home</a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
              <li class="nav-item">
                  <a class="nav-link" href="/games">Game List <span class="visually-hidden"></span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/publishers">Publisher List<span class="visually-hidden"></span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/categories">Category List<span class="visually-hidden"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/platforms">Platform List<span class="visually-hidden"></span></a>
            </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="nav-link" href="/games/create">New Game <span class="visually-hidden"></span></a>
                <a class="nav-link" href="/publishers/create">New Publisher <span class="visually-hidden"></span></a>
                <a class="nav-link" href="/categories/create">New Category <span class="visually-hidden"></span></a>
                <a class="nav-link" href="/platforms/create">New Platform <span class="visually-hidden"></span></a>
                </div>
            </li>
          </ul>
      </div>
      <form class="d-flex my-2 my-lg-0">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0"style="width: 25%" type="submit">Search</button>
    </form>
    <ul class="navbar-nav ml-auto">
      @if (Auth::check())
          <li class="nav-item">
              <a class="nav-link" href="#">{{ Auth::user()->name }} <span class="visually-hidden"></span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/logout">Logout <span class="visually-hidden"></span></a>
          </li>
      @else
          <li class="nav-item">
              <a class="nav-link" href="/login">Login <span class="visually-hidden"></span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/register">Register <span class="visually-hidden"></span></a>
          </li>
      @endif
      </ul>
</div>
</nav>


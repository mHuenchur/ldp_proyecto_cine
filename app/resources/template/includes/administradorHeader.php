<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="administrador/index">INICIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="sala/index">SALAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="pelicula/index">PELICULAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-current="page" href="usuario/index" aria-disabled="true">USUARIOS</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
      </ul>
        <button class="btn btn-outline-success" type="button" onclick="window.location.href='autenticacion/logout'">Cerrar sesión</button>
    </div>
  </div>
</nav>
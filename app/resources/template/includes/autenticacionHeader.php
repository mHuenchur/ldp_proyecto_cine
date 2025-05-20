<nav class="navbar bg-dark border-bottom border-body navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="autenticacion/index">INICIO</a>
        <div>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalIniciarSesion">Iniciar sesión</button>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalRegistrarse">Registrarse</button>
        </div>
    </div>
  </div>
</nav>


<!-- Modal inicio sesion-->
<div class="modal fade" id="modalIniciarSesion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Iniciar sesión</h1>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        <div class="mb-3">
              <label for="datoUsuario" class="form-label">Usuario</label>
              <input type="text" class="form-control" id="datoUsuario">
          </div>
          <div class="mb-3">
              <label for="datoClave" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="datoClave">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button id="btnLogin" type="button" class="btn btn-primary">Iniciar sesión</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal registro-->
<div class="modal fade" id="modalRegistrarse" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registrarse</h1>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        <form id="formularioAltaUsuario" class="my-4" action="" method="post">

        <div class="mb-3">
            <label for="datoNombre" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="datoNombre">
        </div>

        <div class="mb-3">
            <label for="datoApellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="datoApellido">
        </div>

        <div class="mb-3">
            <label for="datoNombreUsuario" class="form-label">Nombre de usuario</label>
            <input type="text" class="form-control" id="datoNombreUsuario">
        </div>

        <div class="mb-3">
            <label for="datoEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="datoEmail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="datoClave" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="datoClave">
        </div>

        </form>

      </div>
      <div class="modal-footer">
        <button id="btnCancelar" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button id="btnGuardarSala" type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
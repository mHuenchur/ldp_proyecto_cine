<p>pelicula -> index</p>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNuevaPelicula">
  Nueva pelicula
</button>

<!-- Modal -->
<div class="modal fade" id="modalNuevaPelicula" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar nueva pelicula</h1>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">

        <form id="formularioAltaPelicula" class="my-4" action="" method="post">
        <div class="mb-3">
            <label for="salaNumero" class="form-label">Numero de sala</label>
            <input type="number" class="form-control" id="salaNumero">
        </div>
        <div class="mb-3">
            <label for="salaCapacidad" class="form-label">Capacidad</label>
            <input type="number" class="form-control" id="salaCapacidad">
        </div>
        <div class="mb-3">
          <p>Habilitada</p>
            <input type="radio" id="habilitada" name="salaHabilitada" value="1" >
            <label for="salaHabilitada">SI</label><br>
            <input type="radio" id="inhabilitada" name="salaHabilitada" value="0" checked>
            <label for="salaHabilitada">NO</label><br>
        </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button id="btnGuardarPelicula" type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<div class="toast-container p-3 position-fixed top-0 start-50 translate-middle-x">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="me-auto">ATENCION</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div id="messageContainer" class="toast-body">
    </div>
  </div>
</div>
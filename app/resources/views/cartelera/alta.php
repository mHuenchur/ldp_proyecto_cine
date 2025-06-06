<p>alta -> cartelera</p>

<div class="card">
    <h5 class="card-header">Agregar funcion a la cartelera</h5>
    <div class="card-body">

    <div class="mb-3">
        <label for="birthday">Fecha</label>
        <input type="date" id="birthday" name="birthday">
    </div>
    
    <div class="mb-3">
        <label for="appt">Hora:</label>
        <input type="time" id="appt" name="appt">
    </div>

    <div class="mb-3">
        <label for="pelicula" class="form-label">Pelicula</label>
        <select id="pelicula" class="form-select">
            <option selected>Seleccionar</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="sala" class="form-label">Sala</label>
        <select id="sala" class="form-select">
            <option selected>Seleccionar</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>

    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput">
    <label for="floatingInput">precio</label>
    </div>

    <a href="#" class="btn btn-primary">Agregar</a>
    </div>
</div>


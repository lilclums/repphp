<div class="card" style="background-color:rgba(90, 0, 0, 0.4);">
    <div class="card-header" style="Color:white; font-size:40px;">
        Agregar cliente
    </div>
    <div class="card-body" style="background-color:rgba(0, 0, 0, 0.3);font-size:20px;color:white">

    <form action="" method="post">

        <div class="mb-3">
          <label for="" class="form-label">Nombre</label>
          <input required type="text"
            class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre cliente">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Apellido</label>
          <input required type="text"
            class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido cliente">
        </div>

        <div class="mb-3">
          <label for="correo" class="form-label">Correo:</label>
          <input required type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo cliente">
        </div>

        <input name="" id="" class="btn btn-success" type="submit" value="AGREGAR">
        <a href="?controlador=clientes&accion=inicio" type="button" class="btn btn-danger" > CANCELAR </a>

    </form>

    </div>
</div>
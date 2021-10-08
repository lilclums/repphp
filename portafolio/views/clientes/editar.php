<div class="card" style="background-color:rgba(90, 0, 0, 0.4);">
    <div class="card-header" style="Color:white; font-size:40px;">
        Editar cliente
    </div>
    <div class="card-body" style="background-color:rgba(0, 0, 0, 0.3);font-size:20px;color:white">

    <form action="" method="post">

    <div class="mb-3" >
      <label for="ID" class="form-label">ID:</label>
      <input readonly type="text"
        class="form-control" value="<?php echo $Clientes->id;?>" name="id" id="id" aria-describedby="helpId" placeholder="ID cliente">
    </div>

        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input required type="text"
            class="form-control" value="<?php echo $Clientes->nombre;?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre cliente">
        </div>

        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido</label>
          <input required type="text"
            class="form-control" value="<?php echo $Clientes->apellido;?>" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido cliente">
        </div>

        <div class="mb-3">
          <label for="correo" class="form-label">Correo:</label>
          <input required type="email" value="<?php echo $Clientes->correo;?>" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo cliente">
        </div>

        <input name="" id="" class="btn btn-success" type="submit" value="EDITAR">
        <a href="?controlador=clientes&accion=inicio" type="button" class="btn btn-danger" > CANCELAR </a>
    </form>

    </div>
</div>
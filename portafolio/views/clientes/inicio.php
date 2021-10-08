<div class="card" style="background-color:rgba(90, 0, 0, 0.4);">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=clientes&accion=crear" role="button">Agregar cliente</a>

    </div>
    <div class="card-body">
    <table class="table table-bordered" style="background-color:rgba(0, 0, 0, 0.3);color:white">
    <thead style="background-color:rgba(0, 0, 0, 0.2)">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($Clientes as $Clientes) { ?>

        <tr>
            <td><?php echo $Clientes->id; ?></td>
            <td><?php echo $Clientes->nombre; ?></td>
            <td><?php echo $Clientes->apellido; ?></td>
            <td><?php echo $Clientes->correo; ?></td>
            <td> 
                <div class="btn-group" role="group" aria-label="">
                    <a href="?controlador=clientes&accion=editar&$id=<?php echo $Clientes->id; ?>" type="button" class="btn" style="background-color:#78b8e4"> EDITAR </a>
                    <a href="?controlador=clientes&accion=borrar&$id=<?php echo $Clientes->id; ?>" type="button" class="btn btn-danger" > BORRAR </a>
                </div>
            </td>
        </tr>
<?php } ?>

    </tbody>
</table>

    </div>

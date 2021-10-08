<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body style="background-color:#484941;letter-spacing:2px;">
      <nav class="navbar navbar-expand navbar-dark" style="background:#3E5258">
          <div class="nav navbar-nav" style="font-size:30px">
              <a class="nav-item nav-link active" href="./?controlador=paginas&accion=inicio">Portafolio <span class="visually-hidden">(current)</span></a>
              <a class="nav-item nav-link" href="./?controlador=clientes&accion=inicio">Clientes</a>
              <a class="nav-item nav-link" href="./?controlador=Archivo&accion=archivo">Archivo</a>
              <a class="nav-item nav-link" href="./?controlador=Contacto&accion=contacto">Contacto</a>
          </div>
      </nav>
      <div class="container" style="margin-top:30px;margin-bottom:30px">
          <div class="row">
              <div class="col-1-12">
                <?php include_once("router.php"); ?>
              </div>
          </div>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
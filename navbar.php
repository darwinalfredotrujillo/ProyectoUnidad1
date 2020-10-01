<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
<style>
      .navbar-nav.navbar {
    position: 100;
    left: 100%;
    transform: translatex(-100%);
}
    </style>
</head>
<body>
<nav  role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">       
        </button>
    </div>
    <div class="navbar-collapse collapse">
               <ul class="nav navbar-nav navbar-left">
      <a href="index.php"><li>Inicio</li></a>
      <a href="contacto.php"><li>Contactos</li></a>
      <a href="acercade.php"><li>Quienes Somos</li></a>
           <u1 class="nav navbar-nav navbar-right">
            <li><a  class="btn btn-secondary btn-lg active" data-toggle="modal" data-target="#iniciasesion"  data-whatever="@mdo">INICIAR SESION</a></li>
            </u1>
        </ul>
    </div>
</nav> 

<div class="modal fade" id="iniciasesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <form class="form-horizontal" method="POST" action="identificacion.php">

        <center><h1 class="modal-title" id="exampleModalLabel">INICIA SESIÓN</h1></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Usuario:</label>
            <input type="text" name="user" class="form-control" id="user"  required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Contraseña:</label>
            <input type="password" name="password" class="form-control" id="password"  required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Enviar</button>
      </div>
    </div>
  </div>
</div>
</form>
  </body>
</html>

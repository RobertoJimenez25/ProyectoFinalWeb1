<?php
session_start();
$no_cuenta= $_SESSION['usermane'];


if(!isset($no_cuenta)){

        header("location: ./index.php");
}else{
    // Header 
    echo "
    
    <head>
      <!--Import Google Icon Font-->
      <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
      <!--Import materialize.css-->
      <link type='text/css' rel='stylesheet' href='./materialize-v1.0.0/materialize/css/materialize.css'  media='screen,projection'/>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name='viewport' content='width=device-width, initial-scale=1.0'/>

      <nav class='nav-extended' >
    <div class='nav-wrapper deep-purple darken-4'>
      <a class='brand-logo'><img src='./media/iconologo.png' width=60px alt='icon'></a>
      <ul id='nav-mobile' class='right hide-on-med-and-down' >
      <li><a class='waves-effect waves-light btn-small indigo darken-' href='logica/salir.php' ><i class='material-icons left'>backspace</i>SALIR</a></li>
      </ul>
    </div>
    <div class='nav-content deep-purple darken-4'>
    <span class='nav-title'>¡Hola! Tú número de cuenta es $no_cuenta  </span>
    </div>
  </nav>
          
    </head>";


    // se usa el requiere para si psi se necesita el archivo conexion
require "./logica/conexion.php";


echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" >
    <title>Registro de Nuevos Usuarios</title>
</head>
<body class="black">
    <div class="row">
        <div>
            <div>  
    <header>
        <h3 class="white-text">Registro De Nuevo Usuario</h3>
    </header>
    <div>
        <form action="./logica/enviarRegistro.php" method="post">
            <label><h5>Ingresa los Datos correspondientes</h5></label>
            <hr>
            <br>
            <div>
                <label for="nombre_usuario">Nombre del usuario:</label>
                <input class="white-text" type="text" name="nombre_usuario" required maxlength="100" minlength="2" placeholder="Ingresa el Nombre">
                <br><br>
                <label for="carrera">Carrera:</label>
                <input class="white-text" type="text" name="carrera" required maxlength="100" minlength="3"placeholder="Ingresa la carrera">
                <br><br>
                <label for="no_cuenta">Numero de cuenta:</label>
                <input class="white-text" type="text" name="no_cuenta" required maxlength="10" minlength="7x" placeholder="Ingresa el numero de cuenta">
                <br><br>
                <label for="direccion">Direccion particular:</label>
                <input class="white-text" type="text" name="direccion" required maxlength="100" minlength="2" placeholder="Ingresa la direccion particular">
                <br><br>
                <label for="telefono">Telefono:</label>
                <input class="white-text" type="text" name="telefono" required maxlength="10" minlength="10" placeholder="Ingresa el telefono">
                <br><br>
                <label for="email">Correo:</label>
                <input class="white-text" type="text" name="email" required maxlength="100" minlength="2" placeholder="Ingresa el correo">
                <br><br>
                <label for="password">Contraseña:</label>
                <input class="white-text" type="password" name="password" required maxlength="8" minlength="8" placeholder="Ingresa la contraseña">
                <br><br>
            </div>
            <button class="btn waves-effect waves-light indigo darken-4" type="submit" name="action">Enviar Registro<i class="material-icons right">send</i></button> 
        </form>
        </div>  
        </div>
    </div>

    </div>
    <div class = "row">
    <a class="col s6 pull-s1 waves-effect waves-light btn-large deep-purple darken-4" href="EliminarUsuario.php"><i class="material-icons left">delete_forever</i>Eliminar Usuario un</a>
    <a class="col s6 push-s1 waves-effect waves-light btn-large deep-purple darken-4" href="Principal.php"><i class="material-icons left">format_list_bulleted</i>Registros </a>
    </div>
</body>
</html>';

   // Footer
echo "
<footer class='page-footer deep-purple darken-4'>
<div class='container'>
  <div class='row'>
    <div class='col l6 s12'>
      <h5 class='white-text'>Proyecto Final</h5>
      <p class='grey-text text-lighten-4'>Proyecto Final para Programacion Web 1 2025-1 </p>


    </div>
    <div class='col l3 s12'>
      <h5 class='white-text'>Github</h5>
      <ul>
        <li><a class='amber-text' href='https://github.com/RobertoJimenez25'>github</a></li>
      </ul>
    </div>
    <div class='col l3 s12'>
      <h5 class='white-text'>Redes</h5>
      <ul>
        <li><a class='amber-text' href='https://www.instagram.com/robert.jimenezc/'>Instagram</a></li>
        <li><a class='amber-text' href='https://open.spotify.com/user/motrorix?si=a477af4f3c904fe6'>Spotify</a></li>
      </ul>
    </div>
  </div>
</div>
<div class='footer-copyright'>
  <div class='container'>
  Made by <a class='orange-text text-lighten-3' >Roberto Jimenez</a>
  </div>
</div>
</footer> 
</body>
"; 
}

?>

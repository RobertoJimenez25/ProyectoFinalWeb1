<?php
session_start();
$no_cuenta= $_SESSION['usermane'];//413112576


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

echo "<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Eliminar Usuario</title>
</head>

<body class= 'black'>
    <div class='row'>
        <div>
            <div>   
    <h3 class='center-align white-text' >Elimina Usuario</h3>
    <form action='./logica/deleteUsuario.php' method='post'>
    <label><h5>Ingresa el Número de cuenta del Usuario a eliminar</h5></label>
    <hr>
    <br>
        <input class='white-text' type='text' name='no_cuenta' required maxlength='10'minlength='7' placeholder='Numero de Cuenta' />
        <br />
        <br>
         <button class='btn waves-effect waves-light indigo darken-4' type='submit' name='action'>Eliminar usuario<i class='material-icons right'>delete_forever</i></button> 
        
    </form>
            </div>  
        </div>
    </div>

</body>

</html>";
    
echo "
    <div class = 'row'>
    <a class='col  waves-effect waves-light btn-large deep-purple darken-4' href='Principal.php'><i class='material-icons left'>format_list_bulleted</i>Registros</a>
    <a class='col s6 push-s1 waves-effect waves-light btn-large deep-purple darken-4' href='Registro.php'><i class='material-icons left'>group_add</i>Nuevo Registro boton </a>
    </div>
    ";


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
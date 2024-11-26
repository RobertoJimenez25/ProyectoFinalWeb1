<?php
session_start();
$no_cuenta= $_SESSION['usermane'];//413112576


if(!isset($no_cuenta)){

        header("location: ./index.php");
}else{
    // Header 
    echo "
    
    <head>
      <title>Principal</title>
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
mysqli_set_charset($conexion,'utf8');

//genear el query
$consulta_sql="SELECT * FROM persona";

//mandar el query por medio de la conexion y almacenaremos el resultado en una variable
$resultado = $conexion->query($consulta_sql);

// Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado); 
 
echo "
<body class= 'black'>
<table class='striped centered black white-text' >
<thead>
    <tr>
        <th>Usuario</th>
        <th>No Cuenta Institucional</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Correo Electronico</th>
        <th>Contraseña</th>
        <th>Fecha de Registro</th>
        <th>Permisos</th>
    </tr>
/<thead>";

if ( $count>0 ){
    echo"<tbody class='black'>";
    //aqui se pintarian los registro de la DB
    while( $row = mysqli_fetch_assoc($resultado)  )

    {
        echo "<tr>";
        echo"<td>". $row['nombre_usuario'] ."</td>";
        echo"<td>". $row['no_cuenta'] ."</td>";
        echo"<td>". $row['direccion'] ."</td>";
        echo"<td>". $row['telefono'] ."</td>";
        echo"<td>". $row['email'] ."</td>";
        echo"<td>". $row['password'] ."</td>";
        echo"<td>". $row['fecha_registro'] ."</td>";
        echo"<td>". $row['permisos'] ."</td>";
        echo "</tr>";
        
    }
    echo"</tbody>";
    echo "</table>";

}else{
    
    echo " <h1 style='color:red' >Sin Ningun registro</h1>";
 } 
  echo "
    <br>
    <br>
    <div class = 'row'>
    <a class='col s6 pull-s1 waves-effect waves-light btn-large deep-purple darken-4' href='EliminarUsuario.php'><i class='material-icons left'>delete_forever</i>Eliminar Usuario</a>
    <a class='col s6 push-s1 waves-effect waves-light btn-large deep-purple darken-4' href='Registro.php'><i class='material-icons left'>group_add</i>Nuevo Registro</a>
    </div>
    <br>
    ";

}

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
  
?>
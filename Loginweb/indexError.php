<!-- header -->
<head>
  <title>Login Error</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="./materialize-v1.0.0/materialize/css/materialize.css"  media="screen,projection"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <nav >
    <div class="nav-wrapper deep-purple darken-4">
      <a class="brand-logo"><img src="./media/iconologo.png" width=60px alt="icon"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down" >
      </ul>
    </div>
  </nav>   
    </head>

    <!-- body -->
<body class= "black">
<div class= "row" >
<h1 class ="center-aling Red-Text" >¡ERROR AL LOGEAR!</h1>
<label ><h6>INGRESA LOS DATOS CORRE CORRECTAMENTE POR FAVOR</h6></label>
<hr>
<br>
    
        <form method="POST" action="logica/loguear.php">

            <input class="white-text" type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
            <br />
            <input class="white-text" type="text" name="clave" placeholder="Contraseña" />
            <br />

            <button class="btn waves-effect waves-light indigo darken-4" type="submit" name="action">Iniciar Sesión<i class="material-icons right">check</i></button> 

        </form>
    
</div>
<br>
<br>
<br>
<br>
</body>

<!-- FOOTER -->
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


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="scss/estilo.css">
  <link rel="stylesheet" href="scss/formularios.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <nav>

    <div class="logo">

      <a title="" href="index.php"><img src="media/imagenes/image.png" style="width:76%;" /></a>

    </div>
    <a class="botonmenu" data-id="1">
      <p>JUEGOS</p>
    </a>
    <a class="botonmenu" data-i="2">
      <p>CONSOLAS</p>
    </a>
    <a class="botonmenu" data-i="4">
      <p>MERCHANDISING</p>
    </a>

    <a class="botonmenu" href="formulario.php"><span class="fa fa-sign-in"></span> Login</a>


  </nav>

  <div class="header">
    <div>Bien<span>venido</span></div>
  </div>
  <br>
  <div class="login">
    
  <form action="prueba.php" method="post">
    <input type="text" name="usuario" placeholder="Usuario" required>
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="apellidos" placeholder="Apellidos" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="pass1" placeholder="Contraseña" required>
    <input type="password" name="pass2" placeholder="Repite contraseña" required>
    <button>Registrarse</button>
    </form>
    <p>Si ya estas registrado accede en <a href="formulario.php">este enlace</a></p>
  </div>







  </div>








</body>

</html>



























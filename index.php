
<?php require("vista/headerindex.php"); 
// remove all session variables
session_unset();
?>
<body>
    <div class="from-group">
      <h3>Iniciar Sesión</h3>
      <form action="modelo/usr.php" method ="post" class="input-group">
        <input type="email" name="email" class="input-field" placeholder="Correo Electronico">
        <input type="password" name="password" class="input-field" placeholder="Contraseña">
        <br><br>
        <button type="submit" class="btn-enviar" >Iniciar Sesión</button>
      </form>
    </div>
  </body>
  <?php require("vista/footerIndex.php"); ?>

</html>
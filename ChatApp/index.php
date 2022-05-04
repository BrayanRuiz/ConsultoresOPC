<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Chat - Atencion a Clientes</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off" accept-charset="utf8">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nombre(s)</label>
            <input type="text" name="fname" placeholder="Nombre(s)" required>
          </div>
          <div class="field input">
            <label>Apellidos</label>
            <input type="text" name="lname" placeholder="Apellidos" required>
          </div>
        </div>
        <div class="field input">
          <label>Correo Electrónico</label>
          <input type="text" name="email" placeholder="Ingresa tu correo" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Selecciona una imagen de perfil (opcional)</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Registrarse al Chat">
        </div>
      </form>
      <div class="link">¿Ya tienes cuenta? <a href="login.php">Iniciar sesion</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>

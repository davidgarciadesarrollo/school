<?php
  session_start();
  error_reporting(0);
  
  $validar = $_SESSION['nombre'];
  
  if( $validar == null || $validar = ''){
  
      header("Location: ../includes/login.php");
      die();
  }
  include_once '../site/header.php';
?>
<form  action="/includes/validar.php" method="POST">
  <div id="login" >
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <h3 class="font-weight-bold my-3 text-center">Registro de nuevo usuario</h3>
        <div id="login-column" class="col-md-5 border m-5 my-0 rounded-2">
          <div id="login-box" class="row p-4 d-flex justify-content-center">
            <div class="col-11">
              <div class="form-group my-2">
                <label for="nombre" class="form-label">Nombre *</label>
                <input type="text"  id="nombre" name="nombre" class="form-control py-0" required>
              </div>
              <div class="form-group my-2">
                <label for="username">Correo:</label>
                <input type="email" name="correo" id="correo" class="form-control py-0" placeholder="">
              </div>
              <div class="form-group my-2">
                <label for="telefono" class="form-label">Telefono *</label>
                <input type="tel"  id="telefono" name="telefono" class="form-control py-0" required>
              </div>
              <div class="form-group my-2">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" class="form-control py-0" required>
              </div>
              <div class="form-group my-2">
                <label for="rol" class="form-label">Rol de usuario *</label>
                <input type="number"  id="rol" name="rol" class="form-control py-0" placeholder="Escribe el rol, 1 administrador, 2 alumno.." required>
              </div>
              <div class="mb-2 mt-4 d-flex justify-content-center">
                <input type="submit" value="Guardar"class="mx-2 btn btn-success" 
                  name="registrar">
                <a href="/views/usuarios/userListAdministrador.php" class="mx-2 btn btn-danger">Cancelar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<?php            
  include_once '../site/footer.php';  
?>
</body>
</html>
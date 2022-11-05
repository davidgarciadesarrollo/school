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
<form  action="/includes/new_course.php" method="POST">
  <div id="login" >
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <h3 class="font-weight-bold my-3 text-center">Registrar nuevo curso</h3>
        <div id="login-column" class="col-md-5 border m-5 my-0 rounded-2">
          <div id="login-box" class="row p-4 d-flex justify-content-center">
            <div class="col-11">
              <div class="form-group my-2">
                <label for="nombre" class="form-label">Nombre del curso*</label>
                <input type="text"  id="nombreCurso" name="nombreCurso" class="form-control py-0" required>
              </div>
     
              <div class="form-group my-2">
                <label for="rol" class="form-label">Intensidad horaria</label>
                <input type="number"  id="intensidadHoraria" name="intensidadHoraria" class="form-control py-0" placeholder="">
              </div>
              <div class="mb-2 mt-4 d-flex justify-content-center">
                <input type="submit" value="Guardar"class="mx-2 btn btn-success" 
                  name="registrarCourse">
                <a href="asignacionList.php" class="mx-2 btn btn-danger">Cancelar</a>
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
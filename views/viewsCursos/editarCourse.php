<?php
  session_start();
  error_reporting(0);
  
  $validar = $_SESSION['nombre'];
  
  if( $validar == null || $validar = ''){
  
      header("Location: /includes/login.php");
      die();
      
  
  }
  $idCurso= $_GET['idCurso'];
  $conexion= mysqli_connect("localhost", "root", "", "r_user");
  $consulta= "SELECT * FROM cursos WHERE idCurso = $idCurso";
  $resultado = mysqli_query($conexion, $consulta);
  $course = mysqli_fetch_assoc($resultado);
  include_once '../site/header.php';
  ?>
<form  action="/includes/_functions.php" method="POST">
  <div id="login" >
    <div class="container">
      <div id="login-row" class="row justify-content-center align-items-center">
        <h3 class="font-weight-bold my-3 text-center">Editar curso</h3>
        <div id="login-column" class="col-md-5 border m-5 my-0 rounded-2">
          <div id="login-box" class="row p-4 d-flex justify-content-center">
            <div class="col-11">
              <div class="form-group">
                <label for="nombreCurso" class="form-label">nombreCurso *</label>
                <input type="text"  id="nombreCurso" name="nombreCurso" class="form-control" value="<?php echo $course['nombreCurso'];?>" required>
              </div>
              <div class="form-group">
                <label for="username">Intensidad horaria:</label>
                <input type="number" name="intensidadHoraria" id="intensidadHoraria" class="form-control" placeholder="" value="<?php echo $course['intensidadHoraria'];?>">
                <input type="hidden" name="accionCourse" value="editarCourse">
                <input type="hidden" name="idCurso" value="<?php echo $idCurso;?>">
              </div>
              <div class="mb-2 mt-4 d-flex justify-content-center">
                <input type="submit" value="Guardar"class="mx-2 btn btn-success" 
                  name="registrar">
                <a href="courseList.php" class="mx-2 btn btn-danger">Cancelar</a>
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
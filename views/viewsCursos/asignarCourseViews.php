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
        <h3 class="font-weight-bold my-3 text-center">Asignar curso</h3>
        <div id="login-column" class="col-md-5 border m-5 my-0 rounded-2">
          <div id="login-box" class="row p-4 d-flex justify-content-center">
            <div class="col-11">
              <div class="form-group my-2">
                <label for="nombre" class="form-label">Alumno</label>
                <select name="nombreAlumno" id="" class="form-control py-0 required">
                  <?php
                     $conexion=mysqli_connect("localhost","root","","r_user");               
                     $SQL="SELECT user.id, user.nombre, user.correo, user.password, user.telefono,
                     user.fecha, permisos.rol FROM user
                     LEFT JOIN permisos ON user.rol = permisos.id WHERE user.rol = '2' ";
                     $dato = mysqli_query($conexion, $SQL);
                     if($dato -> num_rows >0){
                        echo "<option selected='true' disabled='disabled'>Seleccione alumno</option>";
                        while($fila=mysqli_fetch_array($dato)){
                        echo "<option value='".$fila[id]."'>".$fila[nombre]."   </option>";
                     }
                     }else{
                      echo"<option selected='true' disabled='disabled'>no existen alumnos</option>";

                     }
                     ?>
                </select> 
              </div>
     
              <div class="form-group my-2">
                <label for="rol" class="form-label">Curso</label>
                <select name="nombreCurso" id="" class="form-control py-0 required">
                  <?php
                     $conexion=mysqli_connect("localhost","root","","r_user");               
                     $SQL="SELECT idCurso, nombreCurso FROM cursos";
                     $dato = mysqli_query($conexion, $SQL);
                     if($dato -> num_rows >0){
                        echo "<option selected='true' disabled='disabled'>Seleccione curso</option>";
                        while($fila=mysqli_fetch_array($dato)){
                        echo "<option value='".$fila[idCurso]."'>".$fila[nombreCurso]."   </option>";
                     }
                     }else{
                      echo"<option selected='true' disabled='disabled'>no existen curso</option>";
                     }
                     ?>
                </select> 
              </div>
              <div class="mb-2 mt-4 d-flex justify-content-center">
                <input type="submit" value="Guardar"class="mx-2 btn btn-success" 
                  name="asignarCourse">
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
?></body>
</html>
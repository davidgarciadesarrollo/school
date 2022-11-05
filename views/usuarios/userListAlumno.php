<?php
  session_start();
  error_reporting(0);
  $validar = $_SESSION['nombre'];
  $id = $_SESSION['id'];

  $idAsignacion= $_GET['idAsignacion'];

  if( $validar == null || $validar = ''){
    header("Location: ../includes/login.php");
    die();
  }
  include_once '../siteAlumno/header.php';
  
  ?>
    <div class="container is-fluid">
      <div class="col-xs-12">
        <h3 class="font-weight-bold my-3 text-center">Bienvenido alumno <?php echo $_SESSION['nombre']; ?> <?php echo $_SESSION['id']; ?></h3>
        <h5>Lista de cursos</h5>
        <table class="table table-striped table-dark " id= "table_id">
          <thead>
            <tr>
              <th>Curso</th>
              <th>Intensidad horaria</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $conexion=mysqli_connect("localhost","root","","r_user");               
              $SQL= "SELECT asignacion.idAlumno, asignacion.idCurso, curso.idCurso, curso.nombreCurso, curso.intensidadHoraria
              FROM asignacion AS asignacion
              INNER JOIN cursos AS curso
              ON asignacion.idCurso = curso.idCurso WHERE idAlumno = '$idAsignacion' ";

              $dato = mysqli_query($conexion, $SQL);
              
              if($dato -> num_rows >0){
                while($fila=mysqli_fetch_array($dato)){ 
                  ?>
                  <tr>
                  <td><?php echo $fila['nombreCurso']; ?></td>
                  <td><?php echo $fila['intensidadHoraria']; ?></td>
                  </tr>
                  <?php
                }
              }else{
                ?>
                <tr class="text-center">
                <td colspan="16">No existen registros</td>
                </tr>
              <?php
              }
              ?>
            </body>
        </table>
      </div>
    </div>
    <?php            
      include_once '../site/footer.php';  
    ?>
  </body>

</html>
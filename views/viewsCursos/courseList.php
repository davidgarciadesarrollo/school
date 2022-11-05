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

      <div class="container is-fluid">
      <div class="col-xs-12">
      <h3 class="font-weight-bold my-3 text-center">Bienvenido Administrador <?php echo $_SESSION['nombre']; ?></h3>
      <h5>Lista de cursos</h5>
      </form>
      <table class="table table-striped table-dark " id= "table_id">
         <thead>
            <tr>
               <th>Curso</th>
               <th>intensidad Horaria</th>
               <th>Acciones</th>
            </tr>
         </thead>
         <tbody>
            <?php
               $conexion=mysqli_connect("localhost","root","","r_user");               
               $SQL="SELECT idCurso, nombreCurso, intensidadHoraria FROM cursos";
               $dato = mysqli_query($conexion, $SQL);
               
               if($dato -> num_rows >0){
                   while($fila=mysqli_fetch_array($dato)){
                   
               ?>
            <tr>
               <td><?php echo $fila['nombreCurso']; ?></td>
               <td><?php echo $fila['intensidadHoraria']; ?></td>
               <td>
                  <a class="btn btn-warning" href="editarCourse.php?idCurso=<?php echo $fila['idCurso']?> ">
                  <i class="fa fa-edit"></i> </a>
                  <a class="btn btn-danger" href="eliminarCourse.php?idCurso=<?php echo $fila['idCurso'] ?>">
                  <i class="fa fa-trash"></i></a>
               </td>
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
      </table>
      <?php            
      include_once '../site/footer.php';  
      ?>
   </body>
</html>
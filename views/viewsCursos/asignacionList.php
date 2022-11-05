<?php
   session_start();
   error_reporting(0);
   
   $validar = $_SESSION['nombre'];
   
   if( $validar == null || $validar = ''){
   
     header("Location: /includes/login.php");
     die();
     
   }
   include_once '../site/header.php';
   ?>

      <div class="container is-fluid">
      <div class="col-xs-12">
      <h3 class="font-weight-bold my-3 text-center">Bienvenido Administrador <?php echo $_SESSION['nombre']; ?></h3>
      <h5>Lista de usuarios con cursos asignados</h5>
   
      <table class="table table-striped table-dark " id= "table_id">
         <thead>
            <tr>
               <th>Alumnno</th>
               <th>Curso</th>
               <th>Acciones</th>
            </tr>
         </thead>
         <tbody>
            <?php
               $conexion=mysqli_connect("localhost","root","","r_user");               
               $SQL= "SELECT user.id, user.nombre, asignacion.idAsignacion, asignacion.idAlumno, asignacion.idCurso, curso.idCurso, curso.nombreCurso
               FROM asignacion AS asignacion
               INNER JOIN user AS user
                  ON user.id = asignacion.idAlumno
               INNER JOIN cursos AS curso
                  ON asignacion.idCurso = curso.idCurso";

               $dato = mysqli_query($conexion, $SQL);
               
               if($dato -> num_rows >0){
                   while($fila=mysqli_fetch_array($dato)){
                   
               ?>
            <tr>
               <td><?php echo $fila['nombre']; ?></td>
               <td><?php echo $fila['nombreCurso']; ?></td>
               <td>
                  <a class="btn btn-warning" href="editarAsignacion.php?idAlumno=<?php echo $fila['idAlumno']?>&idCurso=<?php echo $fila['idCurso']?>&idAsignacion=<?php echo $fila['idAsignacion']?> ">
                  <i class="fa fa-edit"></i> </a>
                  <a class="btn btn-danger" href="eliminarAsignacion.php?idAsignacion=<?php echo $fila['idAsignacion']?>">
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

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
            <h5>Lista de usuarios administrador</h5>
            <table class="table table-striped table-dark " id= "table_id">
               <thead>
                  <tr>
                     <th>Nombre</th>
                     <th>Correo</th>
                     <th>Password</th>
                     <th>Telefono</th>
                     <th>Rol</th>
                     <th>Acciones</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     $conexion=mysqli_connect("localhost","root","","r_user");               
                     $SQL="SELECT user.id, user.nombre, user.correo, user.password, user.telefono,
                     user.fecha, permisos.rol FROM user
                     LEFT JOIN permisos ON user.rol = permisos.id WHERE user.rol = '1' ";
                     $dato = mysqli_query($conexion, $SQL);
                     if($dato -> num_rows >0){
                        while($fila=mysqli_fetch_array($dato)){
                        
                     ?>
                  <tr>
                     <td><?php echo $fila['nombre']; ?></td>
                     <td><?php echo $fila['correo']; ?></td>
                     <td><?php echo $fila['password']; ?></td>
                     <td><?php echo $fila['telefono']; ?></td>
                     <td><?php echo $fila['rol']; ?></td>
                     <td>
                        <a class="btn btn-warning" href="/views/usuarios/editarUser.php?id=<?php echo $fila['id']?> ">
                        <i class="fa fa-edit"></i> </a>
                        <a class="btn btn-danger" href="/views/usuarios/eliminarUser.php?id=<?php echo $fila['id']?>">
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

            <h5>Lista de alumnos</h5>
            <table class="table table-striped table-dark " id= "table_id">
               <thead>
                  <tr>
                     <th>Nombre</th>
                     <th>Correo</th>
                     <th>Password</th>
                     <th>Telefono</th>
                     <th>Rol</th>
                     <th>Acciones</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     $SQL="SELECT user.id, user.nombre, user.correo, user.password, user.telefono,
                      user.fecha, permisos.rol FROM user 
                      LEFT JOIN permisos ON user.rol = permisos.id WHERE user.rol = '2'";
                     $dato = mysqli_query($conexion, $SQL);
                     
                     if($dato -> num_rows >0){
                        while($fila=mysqli_fetch_array($dato)){
                        
                     ?>
                  <tr>
                     <td><?php echo $fila['nombre']; ?></td>
                     <td><?php echo $fila['correo']; ?></td>
                     <td><?php echo $fila['password']; ?></td>
                     <td><?php echo $fila['telefono']; ?></td>
                     <td><?php echo $fila['rol']; ?></td>
                     <td>
                        <a class="btn btn-warning" href="/views/usuarios/editarUser.php?id=<?php echo $fila['id']?> ">
                        <i class="fa fa-edit"></i> </a>
                        <a class="btn btn-danger" href="/views/usuarios/eliminarUser.php?id=<?php echo $fila['id']?>">
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
         </div>
      </div>
      <?php            
         include_once '../site/footer.php';  
      ?>
   </body>
</html>



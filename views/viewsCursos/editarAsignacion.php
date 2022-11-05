<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if( $validar == null || $validar = ''){

    header("Location: ../includes/login.php");
    die();
    

}
$idAlumno= $_GET['idAlumno'];
$idCurso= $_GET['idCurso'];
$idAsignacion= $_GET['idAsignacion'];


$conexion= mysqli_connect("localhost", "root", "", "r_user");
$consulta= "SELECT user.id, user.nombre, asignacion.idAlumno, asignacion.idCurso, curso.idCurso, curso.nombreCurso
FROM asignacion AS asignacion
INNER JOIN user AS user
   ON user.id = asignacion.idAlumno
INNER JOIN cursos AS curso
   ON asignacion.idCurso = curso.idCurso";

$resultado = mysqli_query($conexion, $consulta);
$usuario = mysqli_fetch_assoc($resultado);
include_once '../site/header.php';
?>



<form  action="/includes/_functions.php" method="POST">
    <div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <h3 class="font-weight-bold my-3 text-center">Editar usuario</h3>
                <div id="login-column" class="col-md-5 border m-5 my-0 rounded-2">
                    <div id="login-box" class="row p-4 d-flex justify-content-center">
                        <div class="col-11">    
                            <div class="form-group my-2">
                                <label for="Alumnno" class="form-label">Alumnno *</label>
                                <select name="nombreAlumno" id="" class="form-control py-0 required" disabled>
                                <?php
                                    $conexion=mysqli_connect("localhost","root","","r_user");               
                                    $SQL="SELECT user.id, user.nombre FROM user WHERE user.rol = '2' ";
                                    $dato = mysqli_query($conexion, $SQL);
                                    if($dato -> num_rows >0){


                                        while ($fila=mysqli_fetch_array($dato)){
                                        $nombre = $fila['id'];

                                        if($nombre == $idAlumno){

                                            echo($idCurso);
                                            echo(nombre);

                                            echo '<option selected value="'.$fila['id'].'">'.$fila['nombre'].'</option>';
                                            }else{
                                            echo '<option value="'.$fila['id'].'">'.$fila['nombre'].'</option>';    
                                            }   
                                        }
                                    
                                    }else{
                                    echo"<option selected='true' disabled='disabled'>no existen alumnos</option>";

                                    }
                                    ?>
                                </select> 
                            </div>
                            <div class="form-group my-2">
                                <label for="username">Curso</label><br>
                                <select name="nombreCurso" id="" class="form-control py-0 required">
                                <?php
                                    $conexion=mysqli_connect("localhost","root","","r_user");               
                                    $SQL="SELECT idCurso, nombreCurso FROM cursos";
                                    $dato = mysqli_query($conexion, $SQL);
                                    if($dato -> num_rows >0){
                                        while ($fila=mysqli_fetch_array($dato)){
                                            $nombre = $fila['idCurso'];
                                            if($nombre == $idCurso){
                                                echo($idCurso);
                                                echo($usuario['idAlumno']);
    
                                                echo '<option selected value="'.$fila['idCurso'].'">'.$fila['nombreCurso'].'</option>';
                                                }else{
                                                echo '<option value="'.$fila['idCurso'].'">'.$fila['nombreCurso'].'</option>';    
                                                }   
                                            }
                                    }else{
                                    echo"<option selected='true' disabled='disabled'>no existen curso</option>";
                                    }
                                    ?>
                                    <input type="hidden" name="editarAsignacion" value="editarAsignacion">
                                    <input type="hidden" name="idAsignacion" value="<?php echo $idAsignacion;?>">
                                </select> 
                            </div>
                            <div class="mb-2 mt-4 d-flex justify-content-center">
                                <input type="submit" value="Guardar" class="mx-2 btn btn-success" 
                                name="registrar">
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
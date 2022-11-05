<?php
   
require_once ("_db.php");


if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
    //casos de registros
        case 'editar_registro':
        editar_registro();
        break; 

        case 'eliminar_registro';
        eliminar_registro();
        break;

        case 'acceso_user';
        acceso_user();
        break;
    }

}

function editar_registro() {
    $conexion=mysqli_connect("localhost","root","","r_user");
    extract($_POST);
    $consulta="UPDATE user SET nombre = '$nombre', correo = '$correo', telefono = '$telefono',
    password ='$password', rol = '$rol' WHERE id = '$id' ";
    mysqli_query($conexion, $consulta);
    header('Location: ../views/usuarios/userListAdministrador.php');

}

function eliminar_registro() {
    $conexion=mysqli_connect("localhost","root","","r_user");
    extract($_POST);
    $id= $_POST['id'];
    $consulta= "DELETE FROM user WHERE id= $id";
    mysqli_query($conexion, $consulta);
    header('Location: ../views/usuarios/userListAdministrador.php');

}

function acceso_user() {
    $nombre=$_POST['nombre'];
    $password=$_POST['password'];
    session_start();
    $_SESSION['nombre']=$nombre;
    $conexion=mysqli_connect("localhost","root","","r_user");
    $consulta= "SELECT * FROM user WHERE nombre='$nombre' AND password='$password'";
    $resultado=mysqli_query($conexion, $consulta);
    $filas=mysqli_fetch_array($resultado);
    



    if($filas['rol'] == 1){ //admin
        header('Location: ../views/usuarios/userListAdministrador.php');
    }else if($filas['rol'] == 2){//alumno
        header('Location: ../views/usuarios/userListAlumno.php?idAsignacion='.$filas['id'].'');
    }
    
    else{
        header('Location: login.php');
        session_destroy();
    }
}


// cursos
if (isset($_POST['accionCourse'])){ 
    switch ($_POST['accionCourse']){
    //casos de registros
        case 'editarCourse':
        editarCourse();
        break; 

        case 'eliminarCourse';
        eliminarCourse();

        break;
        case 'acceso_user';
        acceso_user();
        break;

    }

}

function editarCourse() {
    $conexion=mysqli_connect("localhost","root","","r_user");
    extract($_POST);
    $consulta="UPDATE cursos SET nombreCurso = '$nombreCurso', intensidadHoraria = '$intensidadHoraria' WHERE idCurso = '$idCurso' ";
    mysqli_query($conexion, $consulta);
    header('Location: ../views/viewsCursos/courseList.php');
}

function eliminarCourse() {
    $conexion=mysqli_connect("localhost","root","","r_user");
    extract($_POST);
    $idCurso= $_POST['idCurso'];
    $consulta= "DELETE FROM cursos WHERE idCurso= $idCurso";
    echo($_POST['idCurso']);
    mysqli_query($conexion, $consulta);
    header('Location: ../views/viewsCursos/courseList.php');
}

if(isset($_POST['editarAsignacion'])){
    
    $conexion=mysqli_connect("localhost","root","","r_user");
    extract($_POST);
    $nombreCurso = trim($_POST['nombreCurso']);
    $idAsignacion = trim($_POST['idAsignacion']);
  

    $consulta="UPDATE asignacion SET idCurso = '$nombreCurso' WHERE idAsignacion = '$idAsignacion' ";
    echo($consulta);
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    
    header('Location: ../views/viewsCursos/asignacionList.php');
}

if(isset($_POST['eliminarAsignacion'])){
    $conexion=mysqli_connect("localhost","root","","r_user");
    extract($_POST);
    $idAsignacion= $_POST['idAsignacion'];
    $consulta= "DELETE FROM asignacion WHERE idAsignacion= $idAsignacion";
    mysqli_query($conexion, $consulta);
    header('Location: ../views/viewsCursos/asignacionList.php');

}



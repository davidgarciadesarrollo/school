<?php
$conexion= mysqli_connect("localhost", "root", "", "r_user");

if(isset($_POST['registrarCourse'])){

    $nombreCurso = trim($_POST['nombreCurso']);
    $intensidadHoraria = trim($_POST['intensidadHoraria']);
    $consulta= "INSERT INTO cursos (nombreCurso, intensidadHoraria)
    VALUES ('$nombreCurso', '$intensidadHoraria')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    header('Location: ../views/viewsCursos/courseList.php');
  
}
if(isset($_POST['asignarCourse'])){

  $nombreAlumno = trim($_POST['nombreAlumno']);
  $nombreCurso = trim($_POST['nombreCurso']);

  $consulta= "INSERT INTO asignacion (idAlumno, idCurso)
  VALUES ('$nombreAlumno', '$nombreCurso')";

  mysqli_query($conexion, $consulta);
  mysqli_close($conexion);
  header('Location: ../views/viewsCursos/asignacionList.php');
}



?>
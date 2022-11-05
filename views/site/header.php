<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../css/fontawesome-all.min.css">
      <link rel="stylesheet" href="/css/styles.css">
      <link rel="stylesheet" href="../css/es.css">
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Usuarios</title>

   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Usuario
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownUser">
                  <li><a class="dropdown-item" href="/views/usuarios/userListAdministrador.php" >Listado de usuario</a></li>
                  <li><a class="dropdown-item" href="/views/usuarios/newUsuario.php" >Nuevo usuario</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cursos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/views/viewsCursos/courseList.php">Listado de cursos</a></li>
                  <li><a class="dropdown-item" href="/views/viewsCursos/newCourseViews.php">Nuevo curso</a></li>
                  <li><a class="dropdown-item" href="/views/viewsCursos/asignacionList.php">Listado de curso asignados</a></li>
                  <li><a class="dropdown-item" href="/views/viewsCursos/asignarCourseViews.php">Asignar cursos</a></li>
                </ul>
              </li>
            </ul>
            <a href="/includes/_sesion/cerrarSesion.php" class="btn btn-outline-success" >Cerra sesion <i class="fa fa-sign-out" aria-hidden="true"></i></a>
          </div>
        </div>
      </nav>
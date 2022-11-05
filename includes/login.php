

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

<form  action="_functions.php" method="POST" class="bg-login">
<div id="login" >
        <div class="container vh-100 d-flex align-items-center justify-content-center">
            <div id="login-row" class="d-flex row justify-content-center">
                <div id="login-column" class="col-12 shadow-lg m-5 p-3 bg-white rounded">
                    <div id="login-box" class="col-md-12 my-4">
                        <h5 class="text-center">INICIAR SESIÓN</h5>
                            <div class="form-group">
                                <label for="correo">Usuario:</label><br>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                                <input type="hidden" name="accion" value="acceso_user">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
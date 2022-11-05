<?php

session_start();

$idAsignacion = $_GET['idAsignacion'];

error_reporting(0);
$validar = $_SESSION['nombre'];

if( $validar == null || $validar = ''){
    header("Location: ../includes/login.php");
    die();
    include_once '../site/header.php';
}

include_once '../site/header.php';

?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <div class="alert alert-danger text-center">
                    <p>¿Desea confirmar la eliminacion del registro?</p>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <form action="/includes/_functions.php" method="POST">
                            <input type="hidden" name="eliminarAsignacion" value="eliminarAsignacion">
                            <input type="hidden" name="idAsignacion" value="<?php echo $idAsignacion; ?>">
                            <input type="submit" name="" value="Eliminar" class= " btn btn-danger">
                            <a href="asignacionList.php" class="btn btn-success">Cancelar</a> 
                        </form>         
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php            
         include_once '../site/footer.php';  
    ?>         

</body>
</html>
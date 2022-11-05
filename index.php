<?php
  session_start();
  error_reporting(0);
  
  $validar = $_SESSION['nombre'];
  
  if( $validar == null || $validar = ''){
  
      header("Location: ./includes/login.php");
      die();
  }
  include_once 'views/site/header.php';
?>

<?php            
  include_once 'views/site/footer.php';  
?>
</body>
</html>
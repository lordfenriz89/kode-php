<?php
include('conexion.php');
if (isset($_POST['guardar'])){  
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$contraseña= $_POST['contraseña'];
$rcontraseña=$_POST['rcontraseña'];  

      if ($contraseña== $rcontraseña){
        $query="INSERT INTO registro(user, contraseña, email, rol) VALUES('$nombre','$contraseña','$email','2')";
        $resultado = mysqli_query($conexion, $query);
      }else{
        echo 'Las contraseñas no coinciden';
      }
        header("../signup.php");
}
   
?>
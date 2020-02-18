<?php


include('conexion.php');

$email=$_POST['email'];
$contraseña= $_POST['contraseña'];

if(empty($email) || empty($contraseña)){
header("Location: home.php");
exit();
}
 


 
$result = mysql_query("SELECT * from usuarios where  email='$email' AND contraseña='$contraseña'");
 
if($row = mysql_fetch_array($result)){
if($row['contraseña'] == $contraseña){
session_start();
$_SESSION['email'] = $email;
header("Location: home.php");
}else{
//header("Location: home.php");
exit();
}
}else{
//header("Location: home.php");
exit();
}
?>
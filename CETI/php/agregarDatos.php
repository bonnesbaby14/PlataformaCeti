

<?php 
require_once "conexion.php";
$conexion=conexion();

    $user= $_POST['user'];
    $password=$_POST['password'];
    $regsitro= $_POST['registro'];
    $tipo= $_POST['tipo'];

$sql="INSERT into usuario (user,password,registro,tipo) values ('$user','$password','$regsitro','$tipo')";

echo $result=mysqli_query($conexion,$sql);


?>
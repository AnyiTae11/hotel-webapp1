
<?php
$usuario="root";
$contrasena="";
$servidor="localhost";
$basededatos="empleados";

$conn=mysqli_connect($servidor,$usuario,$contrasena,$basededatos)or die ("error en la conexion de la base de datos");


$Username=$_POST['Username'];
$Password=$_POST['Password'];

$insertar= "INSERT into login(Username,Password) VALUES('$Username','$Password')";
$resultado= mysqli_query($conn,$insertar)or die("error al insertar registros");
mysqli_close($conn);
echo "<br>DATOS ALMACENADOS";
?>

<?php
$usuario="root";
$contrasena="";
$servidor="localhost";
$basededatos="bdhotel";

$conn=mysqli_connect($servidor,$usuario,$contrasena,$basededatos)or die ("error en la conexion de la base de datos");


$nombre=$_POST['nombre'];
$contrasena=$_POST['contrasena'];


$insertar= "INSERT into empleados1(nombre,contrasena) VALUES('$nombre','$contrasena')";
$resultado= mysqli_query($conn,$insertar)or die("error al insertar registros");
mysqli_close($conn);
echo "<br>DATOS ALMACENADOS";
?>
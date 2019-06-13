<?php
$usuario="root";
$contrasena="";
$servidor="localhost";
$basededatos="bdhotel";

$conn=mysqli_connect($servidor,$usuario,$contrasena,$basededatos)or die ("error en la conexion de la base de datos");

$correo= $_POST['correo'];
$Telefono= $_POST['Telefono'];
$HoradeEntrada= $_POST['HoradeEntrada'];
$HoradeSalida= $_POST['HoradeSalida'];
$habitacion= $_POST['habitacion'];
$Formadepago= $_POST['Formadepago'];


$insertar= "INSERT into reservaciones(correo,Telefono,HoradeEntrada,HoradeSalida,habitacion,Formadepago)VALUES 
('$correo','$Telefono','$HoradeEntrada','$HoradeSalida','$habitacion','$Formadepago')";
$resultado= mysqli_query($conn,$insertar)or die("error al insertar registros");
mysqli_close($conn);
echo "<br>DATOS ALMACENADOS";
?> 
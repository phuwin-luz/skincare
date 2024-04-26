<?php
include 'conectarBD.php'; 

$nombre= $_POST['nombre'];
$correo= $_POST['correo'];
$direccion= $_POST['direccion']; 
$telefono= $_POST['telefono']; 
$marca= $_POST['marca']; 




$sqlinsert = "INSERT INTO proveedor (nombre, correo, direccion, telefono, marca) 
              VALUES ('$nombre', '$correo', '$direccion', '$telefono', '$marca')";


mysqli_query($mysqli, $sqlinsert); 

header("location:./index.php?insert=success"); 

?>
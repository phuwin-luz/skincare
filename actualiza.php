<?php

include_once 'conectarBD.php';
$id = $_POST['id'];

if (isset($_POST['update'])) {

    $id = $_POST['id'];

    $query = "UPDATE proveedor SET nombre='$_POST[nombre]',correo='$_POST[correo]',direccion='$_POST[direccion]',telefono='$_POST[telefono]',marca='$_POST[marca]' where id='$_POST[id]'";
    mysqli_query($mysqli, $query);
}


header("location: ./index.php?insert=success");

?>
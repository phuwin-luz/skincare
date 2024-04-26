<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include_once 'conectarBD.php'; //CONEXION A LA BD
    $id = $_POST['id'];

    $sql = "SELECT * FROM proveedor where id=$id;";

    $result = mysqli_query($mysqli, $sql);
    $resultCheck = mysqli_num_rows($result);
    // echo $resultCheck;
    if ($resultCheck > 0) {
        $row = mysqli_fetch_assoc($result);
        $nombre = $row['nombre'];
        $correo = $row['correo'];
        $direccion = $row['direccion'];
        $telefono = $row['telefono'];
        $marca = $row['marca'];
    }
    ?>



    <form class="container" action="actualiza.php" method="post">
        <input type="text" name="id" value="<?php echo $id ?>">
        <input type="text" name="nombre" value="<?php echo $nombre ?>">
        <input type="text" name="correo" value="<?php echo $correo ?>">
        <input type="text" name="direccion" value="<?php echo $direccion ?>">
        <input type="text" name="telefono" value="<?php echo $telefono ?>">
        <input type="text" name="marca" value="<?php echo $marca ?>">

        <button type="submit" name="update">Editar</button>
    </form>
</body>












<style>

body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    margin: 0;
    padding: 0;
}

.container {
    width: 30%; /* Ancho del contenedor */
    max-width: 600px; /* Máximo ancho del contenedor */
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
}

input[type="text"] {
    margin-bottom: 10px;
    padding: 6px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

button {
    padding: 8px 16px;
    background-color: #ff7eb9;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
}

button:hover {
    background-color: #ff5f9e;
}



</style>
</html>
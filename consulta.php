<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
   body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fce4ec; /* Rosa claro */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h3 {
    text-align: center;
    color: #ff4081; /* Rosa oscuro */
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 2px solid #ff4081; /* Rosa oscuro */
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #ff4081; /* Rosa oscuro */
    color: white;
}

tr:nth-child(even) {
    background-color: #fce4ec; /* Rosa claro */
}

tr:nth-child(odd) {
    background-color: #fff; /* Blanco */
}
.btn {
  background-color: #ff4081; /* Rosa oscuro */
  border: none;
  color: white;
  padding: 15px 30px; /* Padding para espaciado dentro del botón */
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 8px; /* Bordes redondeados */
  cursor: pointer;
  transition: background-color 0.3s; /* Transición suave */
}

.btn:hover {
  background-color: #f50057; /* Cambio de color al pasar el cursor */
}


</style>

<body>
<button href="index.php" class="btn">Volver</button>
<h3>Proveedores</h3>

<table border="2">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Marca</th>
    </tr>
    <?php

include_once 'conectarBD.php'; 
$marca = $_POST['id']; 

$query= "SELECT * FROM proveedor where marca='$marca'";
$data = mysqli_query($mysqli, $query); 
$total = mysqli_num_rows($data); 

if($total!=0) {
    while($row= mysqli_fetch_assoc($data)){
echo "<tr> <td>" . $row['id'] . "</td> <td>" . $row['nombre'] . 
"</td> <td>" . $row['correo'] .  "</td> <td>" . $row['direccion'] . 
"</td> <td>" . $row['telefono'] ."</td> </tr>" . $row['marca'] ."</td> </tr>" ;  
}; 
};

?>

</table>

</body>
</html>


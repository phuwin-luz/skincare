<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedor</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="icon" type="image/png" href="https://bunny-cdn.ventasxmayor.com/6063/public/50212497023985781/1611322941049-dnqnp758836-mla44240110642122020-o.jpg">
</head>

<body>
     


<form action="consulta.php" method="post">
            <input type="text" id="id" name="id" required>
            <button type="submit" name="submit">Buscar</button>
        </form>
      

    <div class="container">
        <h1 class="hola">PROVEEDORES</h1>
        <form action="insertar.php" method="post">

            <div class="form-group">
                <label for="titulo">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="titulo">Correo:</label>
                <input type="text" id="correo" name="correo" required>
            </div>

            <div class="form-group">
                <label for="titulo">Direccion:</label>
                <input type="text" id="direccion" name="direccion" required>
            </div>


            <div class="form-group">
                <label for="titulo">Telefono:</label>
                <input type="text" id="telefono" name="telefono" required>
            </div>


            <div class="form-group">
                <label for="marca">Marca:</label>
                <select id="marca" name="marca" required>
                    <option value="">Seleccione la marca</option>
                    <option value="Clinique ">Clinique </option>
                    <option value="Garnier ">Garnier </option>
                    <option value="Serums ">Serums </option>
                    <option value="Maminat ">Maminat </option>
                    <option value="ROWSE ">ROWSE </option>
                    <option value="Nasei ">Nasei </option>
                    <option value="Tres Soles ">Tres Soles </option>
                    <option value="MAMITA  ">MAMITA  </option>
                    <option value="Package  ">Package  </option>
                    <option value="Perricone  ">Perricone  </option>
                    <option value="Novexpert ">Novexpert </option>
                </select>
            </div>

<br><br>
            <div class="form-group submit-btn">
                <button type="submit">Enviar</button>
            </div>



        
        </form>
   <!-- editar -->
   <form class="holi" action="update.php" method="post">
        <div class="form-group">
                <label for="buscar">Editar:</label> 
                <input type="text" name="id" placeholder="id">
            </div>
            <div class="form-group submit-btn">
                <button type="submit">editar</button>
            </div>
        </form>
        <!-- fin -->
        
        </div>
<!-- Imagen al lado izquierdo del formulario -->
<div class="container-image">
        <div class="image-container">
            <img src="https://www.faceandbody.sg/wp-content/uploads/2021/11/Kumiko-Collagen1-600x600.jpeg" alt="Imagen de ejemplo">
        </div>



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
$query= "SELECT * FROM proveedor";
$data = mysqli_query($mysqli, $query); 
$total = mysqli_num_rows($data); 

if($total!=0) {
    while($row= mysqli_fetch_assoc($data)){
echo "<tr> <td>" . $row['id'] . "</td> <td>" . $row['nombre'] . 
"</td> <td>" . $row['correo'] .  "</td> <td>" . $row['direccion'] . 
"</td> <td>" . $row['telefono'] ."</td> <td> " .$row['marca'] . "</td>



<td> 



<a href= 'delete.php?rn=$row[id]'>Eliminar</td></tr>";  
}; 
};

?>
</table>

   

 






















<style>


.container-image {
            display: flex;
            align-items: center;
        }

        .image-container {
            margin-left: 20px; 
        }

        .image-container img {
            max-width: 200px;
            height: auto; 
        }

        .form-container {
            margin-left: auto;
        }


/* Estilos para el botón "Editar" */
.submit-btn button[type="submit"] {
    padding: 8px 16px;
    background-color: #ff7eb9; /* Color rosado */
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s; /* Transición suave del color de fondo */
}

.submit-btn button[type="submit"]:hover {
    background-color: #ff5f9e; /* Color rosado más oscuro al pasar el ratón */
}



    
    table {
    width: 100%;
    border-collapse: collapse;
    border: 2px solid #ff7eb9; /* Borde rosa */
}

th, td {
    border: 1px solid #ff7eb9; /* Borde rosa */
    padding: 8px;
    text-align: left;
}

th {
    background-color: #ffecf4; /* Fondo rosa claro */
    color: #333;
}

tr:nth-child(even) {
    background-color: #fff; /* Fondo blanco */
}

tr:hover {
    background-color: #ffedf6; /* Fondo rosa claro al pasar el ratón */
}

</style>










</body>

</html>
  <?php

include_once 'conectarBD.php'; 
$id = $_GET['rn']; 

$query= "DELETE FROM proveedor WHERE id = '$id'";
$data = mysqli_query($mysqli, $query); 
header ("location: ./index.php?insert=success"); 

?>

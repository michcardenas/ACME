
<?php
 include '../modelo/config.php';

if (isset($_GET['id_vehiculo'])){
    $id_vehiculo= $_GET['id_vehiculo'];
    $sql="DELETE FROM  $tabla_db3 where id_vehiculo='".$id_vehiculo."'";
    if ($conexion->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('Location: vehiculos.php');
      } else {
        echo "Error deleting record: " . $conexion->error;
      }
      
      $conexion->close();}
else
{
   echo "error";
}


?>

<?php
 include '../modelo/config.php';

if (isset($_GET['cc_propietario'])){
    $cc_propietario= $_GET['cc_propietario'];
    $sql="DELETE FROM  $tabla_db2 where cc_propietario='".$cc_propietario."'";
    if ($conexion->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('Location: propietarios.php');
      } else {
        echo "Error deleting record: " . $conexion->error;
      }
      
      $conexion->close();}
else
{
   echo "error";
}


?>
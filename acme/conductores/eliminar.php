
<?php
 include '../modelo/config.php';

if (isset($_GET['cc_conductor'])){
    $cc_conductor= $_GET['cc_conductor'];
    $sql="DELETE FROM  $tabla_db1 where cc_conductor='".$cc_conductor."'";
    if ($conexion->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('Location: conductores.php');
      } else {
        echo "Error deleting record: " . $conexion->error;
      }
      
      $conexion->close();}
else
{
   echo "error";
}


?>
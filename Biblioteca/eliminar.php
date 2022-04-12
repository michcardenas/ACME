
<?php
 include 'modelo/config.php';

if (isset($_GET['id_libro'])){
    $id_libro= $_GET['id_libro'];
    $sql="DELETE FROM  $tabla_db1 where id_libro='".$id_libro."'";
    if ($conexion->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('Location: index.php');
      } else {
        echo "Error deleting record: " . $conexion->error;
      }
      
      $conexion->close();}
else
{
   echo "error";
}


?>
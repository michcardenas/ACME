<?php
// esta es la conexion de la base de datos
$host="localhost";
$base="libros";
$usuariodb="root";
$clavedb="";

$tabla_db1="libro";

$conexion=new mysqli($host,$usuariodb,$clavedb,$base);

if($conexion->connect_errno){
    echo "nuestro sitio experimenta fallos";
    exit();
}


?>
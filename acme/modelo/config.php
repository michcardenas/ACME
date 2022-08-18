<?php
// esta es la cons
$host="localhost";
$base="acme";
$usuariodb="root";
$clavedb="";

$tabla_db1="conductores";
$tabla_db2="propietarios";
$tabla_db3="vehiculos";
$vista1="vista5";
$vista2="vista6";

$conexion=new mysqli($host,$usuariodb,$clavedb,$base);

if($conexion->connect_errno){
    echo "nuestro sitio experimenta fallos";
    exit();
}


?>
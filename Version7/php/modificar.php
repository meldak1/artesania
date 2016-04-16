<?php
include "conexionbd.php";
session_start();
$var=$_SESSION['id'];

$dato=$_REQUEST['dato'];
$tipo=$_REQUEST['tipo'];

if($tipo=="telefono")

mysql_query("UPDATE cliente SET telefono='$dato' WHERE idCliente='$var'");

if($tipo=="nombre")
mysql_query("UPDATE cliente SET nombre='$dato' WHERE idCliente='$var'");


if($tipo=="contrasena")
mysql_query("UPDATE cliente SET contrasena='$dato' WHERE idCliente='$var'");

echo "Informacion modificada exitosamente ";


   
?>


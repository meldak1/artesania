<?php
//session_start();
include "conexionbd.php";
$nombre = $_POST['nombre'];
$historia = $_POST['historia'];



$query = "INSERT INTO cattipoproducto(idTipoProducto, nombre, historia) VALUES ('', '$nombre', '$historia')";
//echo $query;
$result = mysql_query($query) or die('Consulta fallida: '.mysql_error());
echo '<h3 class="label-success">Registro correcto</h3>';
mysql_close($link);
//$_SESSION['usuario'] = $usuario;//Sesión de usuario actual es igual al nuevo usuario generado
//
//$_SESSION['tipo'] = 1;//Sesión de usuario actual es igual al nuevo usuario generado
//echo '<meta http-equiv="refresh" content="0,index.php">';//Regresar a la pagina principal
?>
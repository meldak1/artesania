<?php
//session_start();
include "conexionbd.php";
$usuario = $_POST['nombre'];
$correo = $_POST['correoUsuario'];
$contrasena = $_POST['contra'];


$query = "INSERT INTO cliente(idCliente, nombre, correo, contrasena) VALUES ('', '$usuario', '$correo', '$contrasena')";
echo $query;
$result = mysql_query($query) or die('Consulta fallida: '.mysql_error());
$query2 = "INSERT INTO usuarios(idUsuario, correoU, contrasena, tipo) VALUES ('', '$correo', '$contrasena',1)";
$result2 = mysql_query($query2) or die('Consulta2 fallida: '.mysql_error());
/*echo "<table>\n";
while($line = mysql_fetch_array($result, MYSQL_ASSOC)){
    echo "\t<tr>\n";
    foreach ($line as $col_value){
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";
//Liberar resultados
mysql_free_result($result);*/
//Cerrar la conexión
mysql_close($link);
$_SESSION['usuario'] = $usuario;//Sesión de usuario actual es igual al nuevo usuario generado
//
$_SESSION['tipo'] = 1;//Sesión de usuario actual es igual al nuevo usuario generado
//echo '<meta http-equiv="refresh" content="0,index.php">';//Regresar a la pagina principal
?>
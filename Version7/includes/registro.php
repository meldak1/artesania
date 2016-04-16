<?php
//session_start();
include "conexionbd.php";
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contrasena = $_POST['contra'];


$query = "INSERT INTO usuarios (idUsuario, usuario, correo, contrasenia) VALUES ('', '$usuario', '$correo', '$contrasena')";
$result = mysql_query($query) or die('Consulta fallida: '.mysql_error());
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
echo '<meta http-equiv="refresh" content="0,index.php">';//Regresar a la pagina principal
?>
<?php
include "conexionbd.php";
$correo = $_POST['correoUsuario'];
$contrasenia = $_POST['claveUsuario'];
$consulta = "SELECT * FROM usuarios WHERE correo = '".$correo."' AND contrasenia = '".$contrasenia."' LIMIT 1";
$result = mysql_query($consulta) or die('Consulta fallida: '.mysql_error());
if(mysql_num_rows($result) > 0){
    while($fila = mysql_fetch_array($result, MYSQL_ASSOC)){
        $_SESSION['usuario'] = $fila['usuario'];
        echo "\t<tr>\n";
        foreach ($fila as $col_value){
            echo "\t\t<td>$col_value</td>\n";
        }
        echo "\t</tr>\n";
    }
}else{
    echo"Datos incorrectos";
};

mysql_close($link);
?>
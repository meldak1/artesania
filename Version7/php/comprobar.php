<?php

$correo = $_POST['correoUsuario'];

if(!empty($correo)) {
    comprobar($correo);
}

function comprobar($b) {
    include "conexionbd.php";
}
    $con = mysql_connect('localhost','root', 'root');
    mysql_select_db('masajes', $con);

    $sql = mysql_query("SELECT * FROM usuarios WHERE nombre = '".$b."'",$con);

    $contar = mysql_num_rows($sql);

    if($contar == 0){
        echo "<span style='font-weight:bold;color:green;'>Disponible.</span>";
    }else{
        echo "<span style='font-weight:bold;color:red;'>El nombre de usuario ya existe.</span>";
    }
}

include "conexionbd.php";
$correo = $_POST['correoUsuario'];
$consulta = "SELECT * FROM usuarios WHERE correoU = '".$correo."' AND contrasena = '".$contrasenia."' LIMIT 1";
$result = mysql_query($consulta) or die('Consulta fallida: '.mysql_error());
if(mysql_num_rows($result) > 0){
    while($fila = mysql_fetch_array($result, MYSQL_ASSOC)){
        $_SESSION['usuario'] = $fila['correoU'];
        $_SESSION{'tipo'} = $fila['tipo'];
        echo "\t<tr>\n";
        foreach ($fila as $col_value){
            echo "\t\t<td>$col_value</td>\n";
        }
        echo "\t</tr>\n";
    }

?>
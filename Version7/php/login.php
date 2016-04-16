<?php
include "conexionbd.php";
$correo = $_POST['correoUsuario'];
$contrasenia = $_POST['claveUsuario'];
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
         $consulta2 = "SELECT * FROM artesano WHERE correo = '".$correo."' LIMIT 1";      
        $result2 = mysql_query($consulta2) or die('Consulta fallida: '.mysql_error());
        if(mysql_num_rows($result2) > 0){
             while($fila2 = mysql_fetch_array($result2, MYSQL_ASSOC)){
            $_SESSION['idArtesano'] = $fila2['idArtesano'];

            }
        }
    
    }
    echo '<meta http-equiv="refresh" content="0,index.php">';//Regresar a la pagina principal
}else{
    echo"Datos incorrectos";
};

mysql_close($link);
?>
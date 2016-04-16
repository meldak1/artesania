<?php
$idArte = $_POST['id'];
$nombre = $_POST['nombre'];
$estado = $_POST['estado'];
$localidad = $_POST['localidad'];
$direccion = $_POST['direccion'];
echo $idArte;
?>
<div class="container">
    <button class="btn"><a href="?pagina=modificarArtesano">Regresar</a></button>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Localidad</th>
                <th>Direcci&oacute;n</th>
                <th>Antigüedad</th>
                <th>Correo</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include "php/conexionbd.php";

            $query = "UPDATE artesano SET nombre='".$nombre."' WHERE idArtesano=".$idArte."";
            $query2 = "UPDATE artesano SET estado='".$estado."' WHERE idArtesano=".$idArte."";
            $query3 = "UPDATE artesano SET localida='".$localidad."' WHERE idArtesano=".$idArte."";
            $query4 = "UPDATE artesano SET direccion='".$direccion."' WHERE idArtesano=".$idArte."";
            $result = mysql_query($query) or die('Consulta fallida'. mysql_error());
            $result2 = mysql_query($query2) or die('Consulta fallida'. mysql_error());
            $result3 = mysql_query($query3) or die('Consulta fallida'. mysql_error());
            $result4 = mysql_query($query4) or die('Consulta fallida'. mysql_error());
            $datos = "<tr>";
            $query5 = "SELECT * FROM artesano";
            $result5 = mysql_query($query5) or die('Consulta fallida'. mysql_error());
            if(mysql_num_rows($result5) > 0){
                while($fila = mysql_fetch_array($result5, MYSQL_ASSOC)){
                    echo '<td>'.$fila["idArtesano"].'</td><td>'.$fila["nombre"].'</td><td>'.$fila["estado"].'</td><td>'.$fila["localida"].'</td><td>'.$fila["direccion"].'</td><td>'.$fila["antiguedad"].'</td><td>'.$fila["correo"].'</td>
                            </tr>';

                }
                //echo '<meta http-equiv="refresh" content="0,index.php">';//Regresar a la pagina principal
            }else{
                echo"Datos incorrectos";
            };
            ?>
            </tbody>
        </table>
    </div>
</div>
</div>

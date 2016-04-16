<?php
$idArte = $_POST['id'];
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

            $query = "DELETE FROM artesano WHERE idArtesano=".$idArte."";
            $datos = "<tr>";
            $result = mysql_query($query) or die('Consulta fallida'. mysql_error());
            $query2 = "SELECT * FROM artesano";
            $result2 = mysql_query($query2) or die('Consulta fallida'. mysql_error());
            if(mysql_num_rows($result2) > 0){
                while($fila = mysql_fetch_array($result2, MYSQL_ASSOC)){
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

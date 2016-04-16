
<div class="container">
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Historia</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include "php/conexionbd.php";

            $query2 = "SELECT * FROM cattipoproducto";
            $result2 = mysql_query($query2) or die('Consulta fallida'. mysql_error());
            if(mysql_num_rows($result2) > 0){
                while($fila = mysql_fetch_array($result2, MYSQL_ASSOC)){
                    echo '<td>'.$fila["idTipoProducto"].'</td><td>'.$fila["nombre"].'</td><td>'.$fila["historia"].'</td>
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

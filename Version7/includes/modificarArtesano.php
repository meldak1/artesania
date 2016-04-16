<div class="container">
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Localidad</th>
                <th>Direcci&oacute;n</th>
                <th>Correo</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php
                    include "php/conexionbd.php";
                    $query = "SELECT * FROM artesano";
                    $result = mysql_query($query) or die('Consulta fallida'. mysql_error());
                    $datos = "<tr>";
                    if(mysql_num_rows($result) > 0){
                        while($fila = mysql_fetch_array($result, MYSQL_ASSOC)){
                            echo '<form action="?paginaphp=modifiArte" method="post"><td>'.$fila["idArtesano"].'</td><td><input name="nombre" value="'.$fila["nombre"].'"</td><td><input name="estado" value="'.$fila["estado"].'"></td><td><input name="localidad" value="'.$fila["localida"].'"></td><td><input name="direccion" value="'.$fila["direccion"].'"></td><td>'.$fila["correo"].'</td><td><input type="text" hidden name="id" value="'.$fila["idArtesano"].'"></td><td><button class="btn" type="submit ">Modificar</button></td></form><td><form action="?paginaphp=eliminarArtesano" method="post"><input type="text" hidden name="id" value="'.$fila["idArtesano"].'"><button class="glyphicon glyphicon-remove" type="submit "></button></form></td>
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
 <?php
include "php/conexionbd.php";
$proucto = $_POST['id'];
$sql="SELECT * FROM cattipoproducto";

$result = mysql_query($sql) or die('Consulta fallida: '.mysql_error());
if (mysql_num_rows($result)>0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
{
     $combobit="";
      while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
        {
         $combobit .=" <option value='".$row['idTipoProducto']."'>".$row['nombre']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
         }
          
     }
     else
     {
         echo "No hubo resultados";
     }

                    $query = "SELECT * FROM productos where idProducto='$proucto'";
                    $result2 = mysql_query($query) or die('Consulta fallida'. mysql_error());
       
                    if(mysql_num_rows($result2) > 0){
                        while($fila = mysql_fetch_array($result2, MYSQL_ASSOC)){
                            $stoc =$fila['stock'];
                            $pre =$fila['precio'];
                            $cdesc =$fila['descripcion'];
                                $foto =$fila['foto'];

                        }
                        //echo '<meta http-equiv="refresh" content="0,index.php">';//Regresar a la pagina principal
                    }else{
                        echo"Datos incorrectos";
                    };
                ?>
<div class="container">
  <h2>Panel Group</h2>
  <p>The panel-group class clears the bottom-margin. Try to remove the class and see what happens.</p>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">Modificar Artesania</div>
        <form method="post" action="?paginaphp=actualiProduct" name="arte" enctype="multipart/form-data" >
                <div class="form-group col-sm-4">
                <input type="text" class="form-control" id="id" aria-label="Amount (to the nearest dollar)" name="id" value="<?php  echo $producto;
                 ?>">

                  <label for="sel1">Producto:</label>
                  <select class="form-control" id="sel1" name="sel1">
                    <?php 
                      echo $combobit;
                 ?>
                      </select>
                </div>
                <div class="row">
                </div>
                    <div class="form-group col-sm-4">
                      <label for="usr">Existencias:</label>
                      <input type="text" class="form-control" id="exis" name="exis" value="<?php 
                      echo $stoc;
                 ?>">
                    </div>
                <div class="row">
                </div>

                <div class="input-group col-sm-4">
                      <span class="input-group-addon">Precio: $</span>
                      <input type="text" class="form-control" id="precio" aria-label="Amount (to the nearest dollar)" name="precio" value="<?php 
                      echo $pre;
                 ?>">
                      <span class="input-group-addon">.00</span>
                </div>
                    <div class="row">
                </div>
                <div class="col-lg-2">
                    <br>
                    <img src='imagen/<?php 
                      echo $foto;
                 ?>' class='img-rounded' alt='Cinque Terre' width='304' height='236'> 
                    <br><br>
                        <input type="file" name="foto" id="foto" class="fail" readonly=true />
                      <br></div>

                    <div class="row"></div>
                <div class="form-group col-sm-8">
                    
                  <label for="comment">Descripcion:</label>
                  <textarea class="form-control" rows="5" id="desc" name="desc" value="<?php 
                      echo $cdesc;
                 ?>"></textarea>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <input type="submit" value="Modificar">
                    </div>
                </div>
               </form>
    </div>
   
  </div>
</div>
 <?php
include "php/conexionbd.php";
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<title>Krajee JQuery Plugins - &copy; Kartik</title>
 
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
<link href="../css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../js/fileinput.min.js" type="text/javascript"></script>
 
</head>
<div class="container">
  <h2>Panel Group</h2>
  <p>The panel-group class clears the bottom-margin. Try to remove the class and see what happens.</p>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">Nueva Artesania</div>
        <form method="post" action="?paginaphp=AltaArte" name="arte" enctype="multipart/form-data" >
                <div class="form-group col-sm-4">
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
                      <input type="text" class="form-control" id="exis" name="exis">
                    </div>
                <div class="row">
                </div>

                <div class="input-group col-sm-4">
                      <span class="input-group-addon">Precio: $</span>
                      <input type="text" class="form-control" id="precio" aria-label="Amount (to the nearest dollar)" name="precio">
                      <span class="input-group-addon">.00</span>
                </div>
                    <div class="row">
                </div>
                <div class="col-lg-2">
                    <br>
                        <input type="file" name="foto" id="foto" class="fail" readonly=true />
                      <br></div>

                    <div class="row"></div>
                <div class="form-group col-sm-8">

                  <label for="comment">Descripcion:</label>
                  <textarea class="form-control" rows="5" id="desc" name="desc"></textarea>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <input type="submit" value="Registrar">
                    </div>
                </div>
               </form>
    </div>
   
  </div>
</div>
<script>
$("#file-3").fileinput({
showCaption: false,
browseClass: "btn btn-primary btn-lg",
fileType: "any"
});
</script>





<div class="form-group col-sm-4">
                      <label for="usr">Existencias:</label>
                      <input type="text" class="form-control" id="exis" name="exis">
                    </div>
                <div class="row">
                </div>
        
         <?php include "php/conexionbd.php";

            $query="SELECT * FROM productos p ,cattipoproducto t where p.idArtesano='".$_SESSION['idArtesano']."' and p.idTipoProducto=t.idTipoProducto";
 $result = mysql_query($query) or die('Consultaaa fallida: '.mysql_error());
   
        if($result)
            {
                while($row = mysql_fetch_array($result, MYSQL_ASSOC))
                {  
                echo"<div class='container'>";
                echo'<div class="panel panel-primary"> <div class="panel-heading">';
                    echo"<h4>".$row['nombre']."</h4>";
                    echo' </div><div class="panel-body">';
                echo '<div class="row">';
                echo '<div class="col-xs-4">'; 
                echo"<img src='imagen/".$row['foto']."' class='img-rounded' alt='Cinque Terre' width='304' height='236'> ";
                echo '</div>';
                echo '<div class="col-xs-6">'; 
                    
                echo"<h3>Descripción:</h3> "; 
                echo"<p>'".$row['descripcion']."'</p> "; 
                    echo"<h5>Existencias:</h5> "; 
                echo"<p>'".$row['stock']."'</p> "; 
                    echo"<h5>Precio:</h5> "; 
                echo"<p>'".$row['precio']."'</p> "; 
                     
                    echo'<br><br><form action="?pagina=moificaProducto" method="post"><input type="text" hidden name="id" value="'.$row["idProducto"].'"><button class="btn" type="submit ">Modificar</button></form>';
                echo '</div>';
                echo "</div></div>";
                    echo'</div>
    </div>';


                }
            }
    
    ?>
        
      
    
    
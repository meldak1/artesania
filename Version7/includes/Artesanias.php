
    <div  class="container-fluid">
        <div class=" col-md-12">
            <h3><span class="glyphicon glyphicon-search"></span> Filtro de busqueda</h3>
          <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Elegir por <span class="caret"></span> </button> 
              <ul class="dropdown-menu">
                  <li class="dropdown-header">Tipo de Producto</li>
                  <li><a>Pulseras</a></li>
                  <li><a>Collares</a></li>
                  <li><a>Bolsas</a></li>
                  <li><a>Vestimenta</a></li>
                  <li><a>Figuras</a></li>
           
              </ul>
             
          </div>
           
        </div>
       
        
    </div>
    
    <div class="container-fluid" id="ContenedorArtesanias"> </div>
  
    
      
        
         <?php include "php/conexionbd.php";

            $query="SELECT * FROM productos p ,cattipoproducto t ";
            $result = mysql_query($query) or die('Consultaaa fallida: '.mysql_error());
            if($result)
            {
                while($row = mysql_fetch_array($result, MYSQL_ASSOC))
                {  
                echo"<div class='container'>";
                echo'<div class="panel panel-primary"> <div class="panel-heading">';
                    echo"<h2>".$row['nombre']."</h2>";
                    echo' </div><div class="panel-body">';
                echo '<div class="row">';
                echo '<div class="col-xs-4">'; 
                echo"<img src='imagen/".$row['foto']."' class='img-rounded' alt='Cinque Terre' width='304' height='236'> ";
                echo '</div>';
                echo '<div class="col-xs-6">'; 
                     echo "<center>";
                echo"<h3>Descripción:</h3> "; 
                echo"<p>'".$row['descripcion']."'</p> "; 
                     echo "</center>";
                    echo'<br><br><br><br><br><br><button class="btn btn-primary" >Agregar</button>';
                echo '</div>';
                echo "</div></div>";
                    echo'</div>
    </div>';


                }
            }
    ?>
        
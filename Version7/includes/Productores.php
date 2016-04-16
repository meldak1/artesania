
    <div  class="container-fluid">
        <div class=" col-md-12">
            <h3><span class="glyphicon glyphicon-search"></span> Filtro de busqueda</h3>
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Elegir por <span class="caret"></span> </button> 
                <ul class="dropdown-menu ">
                    <li class="dropdown-header">Rating</li>
                    <li><a id="1"><span class="glyphicon glyphicon-star"></span> </a></li>
                    <li><a id="2"><span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a id="3"><span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a id="4"><span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"> </span></a></li> 
                    <li><a id="5"><span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"> </span> <span class="glyphicon glyphicon-star"></span> </a></li>
                </ul>
                
            </div>
            
        </div>
        
        
    </div>
    
    <div class="container-fluid" id="ContenedorArtesanias"> </div>

 <?php include "php/conexionbd.php";
            $cont=0;
            $pag=1;
            $query="SELECT * FROM artesano p  ";
            $result = mysql_query($query) or die('Consultaaa fallida: '.mysql_error());
            
            $num_total_registros = mysql_num_rows($result);
            
            if($result)
            {  echo'<nav>
                      <ul class="pagination">';
                while($row = mysql_fetch_array($result, MYSQL_ASSOC))
                {  
                    echo"<div class='container'>";
                    echo'<div class="panel panel-primary"><div class="panel-heading">';
                    echo"<h3>".$row['nombre']."</h3>";
                    echo' </div><div class="panel-body">';
                
                    echo '<div class="row">';
                    echo '<div class="col-xs-4">'; 
                    echo"<img src='Artesano/".$row['foto']."' class='img-rounded' alt='Cinque Terre' width='304' height='236'> ";
                    echo '</div>';
                    echo '<div class="col-xs-6">';                     
                    echo "<center>";
                    echo"<h3>Descripción:</h3> "; 
                    echo"<h4>".$row['estado']."</h4> "."<h4>".$row['localida']."</h4>"; 
                    echo"<p>".$row['direccion']."</p> ";
                    echo"<p>".$row['antiguedad']."</p> ";
                    echo"<p>".$row['correo']."</p> ";
                    echo"<p>".$row['telefono']."</p> "; 
                    echo "</center>";
                    echo '</div>';
                    echo "</div></div>";
                    echo'</div></div>';
                  
                    if($cont>2){
                        echo'<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                        <li class="active"><a href="#">'.$pag.' <span class="sr-only">(current)</span></a></li>';}
                $cont++;
                    
                }
              echo'</ul>
                    </nav>';
                }
            
            


    ?>


    




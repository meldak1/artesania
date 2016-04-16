
<div class="container">
  
    <div class="col-md-6">
    <h1>Datos: </h1>
     <?php
include "php/conexionbd.php";
$sql="SELECT * FROM cliente WHERE correo='".$_SESSION['usuario']."'";
$result = mysql_query($sql) or die('Consulta fallida: '.mysql_error());
if (mysql_num_rows($result)>0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
{
echo"<div class='table-responsive '><table class='table table-bordered'> <tr> <td align='center'> #ID </td> <td align='center'> Nombre</td> <td align='center'> Correo </td> <td align='center'> Contrasena </td> <td align='center'> Telefono </td>  </tr>";
      while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
        {
        $_SESSION['id']=$row['idCliente'];
         echo "<tr><td align='center'> $row[idCliente] </td>";
echo "<td align='center'>$row[nombre]</td> ";
echo "<td align='center'>$row[correo] </td>  ";
echo "<td align='center'>********** </td>  ";
echo "<td align='center'>$row[telefono] </td>  </tr>";
         
         }
          echo "</table></div>";
     }
     else
     {
         echo "No hubo resultados";
       
     }
?>
    
    </div>
  
  
  <div class="panel panel-primary col-md-6">
 
  
  <div class="panel-heading">
    <h3 class="panel-title">Modificar Datos</h3>
  </div>
  <div class="panel-body">
          
          <form id="formulario">
          <select id="opcion" class="form-control">
          <option>Eliga una opcion</option>
          <option value="nombre"> Nombre</option>
          <option value="contrasena"> Contrasena</option>
          <option value="telefono"> Telefono</option>
          </select>
           <br><br>
          <div id="form"></div>
          <br>
                <button type="reset" class="btn btn-danger">Borrar</button>
                <button type="submit" class="btn btn-success">Modificar</button>
               </form>
             <br>
             
  </div>
</div>
</div>
  

</div>
   <br>   <br>   <br>   <br>   <br>   <br>    <br>   <br>   <br>   <br>  

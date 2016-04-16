<!doctype html>
<html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario de Contacto - Script Personal</title>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
<link href="../css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../js/fileinput.min.js" type="text/javascript"></script>
 
</head>
    <div class="container  ">
  <div class="panel panel-success ">
      <div class="panel-heading">Contactanos</div>
      <div class="panel-body ">
         
          <div id="formulario" class="form-group col-sm-4">
               <form role="form" action="php/contacto.php" method="POST" id="contacto" title="Nombre">
                   
               <label for="nombre">Nombre:</label>
               <input name="nombre" type="text" required="required" id="nombre" placeholder="nombre" tabindex="1" title="Nombre" 
                      class="form-control ">
               <br>
               <label for="email">Email:</label>
               <input class="form-control " name="email" type="email" required="required" id="email" placeholder="email" tabindex="2" title="Email">
               <br>
               <label for="telefono">Teléfono:</label>
               <input class="form-control " name="telefono" type="text" id="telefono" placeholder="telefono" tabindex="3" title="Telefono">
               <br>
               <label for="ciudad">Ciudad:</label>
               <input class="form-control " name="ciudad" type="text" id="ciudad" placeholder="ciudad" tabindex="4" title="ciudad">
               <br>
               <label for="pais">País</label>
               <input class="form-control " name="pais" type="pais" id="pais" placeholder="pais" tabindex="5" title="pais">
               <br>
               <label for="Mensaje">Mensaje:</label>
               <textarea  class="form-control "name="mensaje" rows="4" id="mensaje" placeholder="mensaje" tabindex="6"></textarea>
               <br>
               <input type="submit"  name="enviar" tabindex="7" value="Enviar">
                   <input type="reset" tabindex="8" value="Borrar">
               <input type="hidden" name="estado" value="1">
               </form>
          </div>

      </div>
    </div>
    </div>

</html>
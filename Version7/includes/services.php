<div id="principal" class="container">
    <h1>Benvenido al club de nataci&oacute;n "Na&uacute;frago"</h1>
    <h2>Servicios</h2>
    <?php
    if(isset($_SESSION['usuario'])){
        echo 'Usted ah iniciado sesión';
        
    }else{
        echo 'Usted no iniciado sesión';
    }
    ?>
</div>
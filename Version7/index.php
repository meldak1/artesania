<?php session_start() ?>
<!DOCTYPE html>
<html>
<?php include "includes/cabecera.php"; ?>
<body>
<div class="">

    <?php
    if(isset($_SESSION['usuario'])){
        if($_SESSION['tipo'] == 1){
            include "includes/header.php";
        }
        if($_SESSION['tipo'] == 2){
            include "includes/headerCliente.php";
        }
        if($_SESSION['tipo'] == 3){
            include "includes/headerAdmin.php";
        }
    }else{
        include "includes/header.php";
    }
    ?>
    <?php
    if(isset($_GET['pagina'])){
        $url = $_GET['pagina'];
        include "includes/".$url.".php";
    }else if(isset($_GET['paginaphp'])){
        $url = $_GET['paginaphp'];
        include "php/".$url.".php";
    }else{
        $url = "inicio";
        include "includes/".$url.".php";
    }
    ?>
    <?php include "includes/inicioSesion.php"; ?>
    <?php include "includes/pie.php"; ?>

</div>
</body>
</html>
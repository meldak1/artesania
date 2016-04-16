<div class="container-fluid">
    <div class="col-md-4">

    </div>
    <?php
    if(isset($_SESSION['usuario'])){
        //echo $_SESSION['idArtesano'];
        echo '
    <div class="col-md-4">
        <br><br>
        <a href="?paginaphp=cerrasSesion">
        <button>
        Cerrar Sesi&oacuten
        </button>
    </a>';
      
     if($_SESSION['tipo']==1){
     echo '
    <a href=?paginaphp=cliente><button>Modificar</button></a>
        <br><br><br><br><br><br></div>  ';
   }

    }else{

   echo'<div class="col-md-4">
        <br><br>
        <form method="post" action="?paginaphp=login" name="login">
            <fieldset class="scheduler-border">
                <legend class="scheduler-border">Iniciar Sesion</legend>
                <div class="form">
                    <input type="email" class="form-control" placeholder="Ingresa Correo" id="correoUsuario" name="correoUsuario" required>
                    <br>
                    <input type="password" class="form-control" placeholder="Ingresa Contrasena" id="claveUsuario" name="claveUsuario" required>
                    <br>
                    <button class="btn btn-success">Entrar</button>
                </div>
        </fieldset>
        </form>
        <br><br><br><br><br><br>
    </div>';
    }
    ?>
    <div class="col-md-4">

    </div>

</div>
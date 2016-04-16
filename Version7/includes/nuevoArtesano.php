<div class="container-fluid">
    <div class="col-md-4">

    </div>

    <div class="col-md-4">
        <br><br>
        <form method="post" action="?paginaphp=registroArtesano" name="login" enctype="multipart/form-data">
            <fieldset class="scheduler-border">
                <legend class="scheduler-border"> Registro de Artesanos</legend>
                <div class="form">
                    <input type="text" class="form-control" placeholder="Ingresa Nombre" id="nombre" name="nombre" required>
                    <br>
                    <input type="text" class="form-control" placeholder="Ingresa estado" id="estado" name="estado" required>
                    <br>
                    <input type="text" class="form-control" placeholder="Ingresa localidad" id="localidad" name="localidad" required>
                    <br>
                    <input type="text" class="form-control" placeholder="Ingresa direccion" id="direccion" name="direccion" required>
                    <br>
                    <input type="text" class="form-control" placeholder="Ingresa antiguedad" id="antiguedad" name="antiguedad" required>
                    <br>
                    <input type="email" class="form-control" placeholder="Ingresa Correo" id="correoUsuario" name="correoUsuario" required>
                    <br>
                    <input type="password" class="form-control" placeholder="Ingresa Contrasena" id="contra" name="contra" required>
                    <br>
                    <div class="col-lg-2">
                    <br>
                        <input type="file" name="foto" id="foto" class="fail" readonly=true />
                      <br></div>
                    <br>
                    <input type="text" class="form-control" placeholder="Ingresa teléfono" id="tel" name="tel" required>
                    <br>
                    <button class="btn btn-success">Resgistrarse</button>
                </div>
            </fieldset>
        </form>
        <br><br><br>
    </div>

    <div class="col-md-4">

    </div>

</div>
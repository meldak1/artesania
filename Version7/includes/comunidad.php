<div class="row">
    <div class="col-xs-12">
    <h1>Bienvenido al club de nataci&oacute;n "Na&uacute;frago"</h1>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <h3>Registrate y obten las ventajas de formar parte de nuestra familia</h3>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <form method="post" action="?paginaphp=registro" name="nuevoUsuario" class="form-inline" role="form">
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input class="form-control" type="text" id="usuario" name="usuario" required>
            </div>
            <span class="clearfix"></span>
            <div class="form-group">
                <label for="correo">Correo Electronico</label>
                <input class="form-control" type="email" id="correo" name="correo" required>
            </div>
            <span class="clearfix"></span>
            <div class="form-group">
                <label for="contra">Contrase&ntilde;a</label>
                <input class="form-control" type="password" id="contra" name="contra" required>
            </div>
            <span class="clearfix"></span>
            <div>
                 <input type="submit" value="Registar"></td>
            </div>
        </form>
    </div>
</div>
<br/>
    <form method="post" action="?paginaphp=login" name="login">
        <table>
            <th>¿Usuario existente?</th>
            <tr>
                <td>Correo Electronico</td>
                <td><input type="email" id="correoUsuario" name="correoUsuario" required></td>
            </tr>
            <tr>
                <td>Contrase&ntilde;a</td>
                <td><input type="password" id="claveUsuario" name="claveUsuario" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>
<a href="?paginaphp=cerrasSesion">
    <button>
        Cerrar Sesi&oacute;n
    </button>
</a>



                  

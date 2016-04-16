
<div id="flotante_login" >
    Iniciar sesion
    <form method="post" action="?paginaphp=login" name="login" class="negro">
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
</div>
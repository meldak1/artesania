<?php
//session_start();
include "conexionbd.php";
$usuario = $_POST['nombre'];
$estado = $_POST['estado'];
$localidad = $_POST['localidad'];
$direccion = $_POST['direccion'];
$antiguedad = $_POST['antiguedad'];
$correo = $_POST['correoUsuario'];
$contrasena = $_POST['contra'];
$tel = $_POST['tel'];

$uploadedfileload="foto";
$uploadedfile_size=$_FILES['foto']['size'];
echo $_FILES[$uploadedfileload]['name'];
if ($_FILES[$uploadedfileload]['size']>200000)
{$msg=$msg."El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<BR>";
$uploadedfileload="foto";}

if (!($_FILES[$uploadedfileload]['type'] =="image/jpg" OR $_FILES[$uploadedfileload]['type'] =="image/gif"))
{   $msg="";
    $msg=$msg." Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
$uploadedfileload="foto";}

$file_name=$_FILES[$uploadedfileload]['name'];
$add="artesano/$file_name";
if($uploadedfileload=="foto"){

if(move_uploaded_file ($_FILES[$uploadedfileload]['tmp_name'], $add)){
echo " Ha sido subido satisfactoriamente";
}else{echo "Error al subir el archivo";}

}else{echo $msg;}



$query = "INSERT INTO artesano(idArtesano, nombre, estado, localida, direccion, antiguedad, idPosicion,correo,telefono, foto) VALUES ('', '$usuario', '$estado', '$localidad', '$direccion', '$antiguedad', 1,'$correo','$tel','$file_name')";
//echo $query;
$result = mysql_query($query) or die('Consulta fallida: '.mysql_error());
echo '<h3 class="label-success">Registro correcto</h3>';
mysql_close($link);
//$_SESSION['usuario'] = $usuario;//Sesión de usuario actual es igual al nuevo usuario generado
//
//$_SESSION['tipo'] = 1;//Sesión de usuario actual es igual al nuevo usuario generado
//echo '<meta http-equiv="refresh" content="0,index.php">';//Regresar a la pagina principal
?>
<?php
//session_start();
include "conexionbd.php";
$proucto = $_POST['sel1'];
$exis = $_POST['exis'];
$precio = $_POST['precio'];
$prouctos = $_POST['id'];
$decrip = $_POST['desc'];


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
$add="imagen/$file_name";
if($uploadedfileload=="foto"){

if(move_uploaded_file ($_FILES[$uploadedfileload]['tmp_name'], $add)){
echo " Ha sido subido satisfactoriamente";
}else{echo "Error al subir el archivo";}

}else{echo $msg;}





$query="UPDATE `productos` SET `idProducto`='$prouctos',`idArtesano`=". $_SESSION['idArtesano'].",`idTipoProducto`='$proucto',`descripcion`='$decrip',`stock`='$exis',`precio`='$precio',`idPosicion`=1,`foto`='$file_name'";

    
    echo $query;
    $result = mysql_query($query) or die('Consulta fallida: '.mysql_error());

 

mysql_close($link);
?>
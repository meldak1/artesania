<?php

$link = mysql_connect('localhost', 'root', '') or die('No se pudo establecer la conexion'. mysql_error());
mysql_select_db('artesanias') or die ('No se puede selccionar la base de datos');
?>  
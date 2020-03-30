<?php
$conectar=@mysql_connect('localhost:8080','root','');
if (!$conectar) {
	echo "No se pudo conectar";
}
else{
	$base=mysql_select_db('citas');
	if (!$base) {
		echo "No se encuentra bd";
	}
}
$nombre=$_POST['nombre'];
$numero=$_POST['num'];
$direccion=$_POST['direccion'];
$dia=$_POST['dia'];
$hora=$_POST['hora'];
$sql="INSERT INTO datos VALUES('$nombre'),('$numero'),('$direccion'),('$dia'),('$hora')";
$ejecutar=mysql_query($sql);
if (!$ejecutar) {
	echo "Hubo error";
}
else{
echo "Datos guardados <br><a href='index.html'>Volver</a>";
}
?>

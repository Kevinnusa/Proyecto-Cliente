<?php
$s="localhost";
$bd="prueba";
$u="root";
$p="";
$conectar=new mysqli($s,$u,$p,$bd);
if (!$conectar) {
	echo "No se puede conectar 1";
}else{
		echo "Conectado";
}
$nombre=$_POST['nombre'];
$numero=$_POST['num'];
$direccion=$_POST['direccion'];
$dia=$_POST['dia'];
$hora=$_POST['hora'];
$sql="INSERT INTO datos VALUES ('$nombre','$numero','$direccion','$dia','$hora')";

$ejecutar=mysqli_query($conectar, $sql);
if (!$ejecutar) {
	echo "Hubo error";
}
else{
echo "<br>Datos guardados <br><a href='cita.html'>Volver</a>";
}

?>
<?php
$s="localhost";
$bd="prueba";
$u="root";
$p="";
$conectar1=new mysqli($s,$u,$p,$bd);
if (!$conectar1) {
	echo "No se puede conectar 1";
}else{
		echo "Conectado";
}
$nombre=$_POST['nombre1'];
$email=$_POST['correo'];
$mensaje=$_POST['op'];
$sql1="INSERT INTO sugerencias VALUES ('$nombre', '$email','$mensaje')";

$ejecutar1=mysqli_query($conectar1, $sql1);
if (!$ejecutar1) {
	echo "Hubo error";
}
else{
echo "<br>Datos guardados <br><a href='cita.html'>Volver</a>";
}
?>
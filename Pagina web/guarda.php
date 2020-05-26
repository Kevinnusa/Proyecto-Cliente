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
<!DOCTYPE html>
<html>
<head>
	<title>Mostrar datos</title>
	<link rel="stylesheet" type="text/css" href="css/eliminar.css">
</head>
<body>
	<h1 align="center">Datos Registrados</h1>
	<table width="65%" border="3" align="center">
		<tr class="color">
			<th>Nombre</th>
			<th>Telefono</th>
			<th>Direccion</th>
			<th>Dia de preferencia</th>
			<th>Hora</th>
		</tr>
		<?php
	$sql="SELECT * FROM  datos";
	$resultado=mysqli_query($conectar,$sql);
	while ($mostrar=mysqli_fetch_array($resultado)) {
	?>
	<tr class="color1">
		<td><?php echo $mostrar['nombre']?></td>
		<td><?php echo $mostrar['numero']?></td>
		<td><?php echo $mostrar['direccion']?></td>
		<td><?php echo $mostrar['dia']?></td>
		<td><?php echo $mostrar['hora']?></td>
	</tr> 
	<?php
    }
    ?>
	</table>
</body>
</html>
<?php
echo "<br><br><a href='eliminar.html'>Eliminar y editar datos</a>";

?>

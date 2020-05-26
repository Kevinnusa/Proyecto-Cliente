<?php
$s="localhost";   
$bd="prueba";
$u="root";
$p="";
$conectar=new mysqli($s,$u,$p,$bd)
or die("Error al conectar");
$contra=$_POST['contra'];
if ($contra=="hola123") {
        $nombre=$_POST['nombre'];
        mysqli_query($conectar, "DELETE from datos where nombre='$nombre'")
        or die("error al eliminar los datos");
        mysqli_close($conectar);
        echo "Los datos se han eliminado correctamente";
}
else{
        echo "Clave incorrecta";
}
echo "<br><a href='cita.html'>Volver a la pagina principal</a>";
?>
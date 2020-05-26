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
        $telefono=$_POST['telefono'];
        $direccion=$_POST['direccion'];
        $dia=$_POST['dia'];
        $hora=$_POST['hora'];
        mysqli_query($conectar, "UPDATE  datos set telefono='$telefono'  where nombre='$nombre'");
        mysqli_query($conectar, "UPDATE datos set direccion='$direccion' where nombre='$nombre'"); 
        mysqli_query($conectar, "UPDATE datos set dia='$dia' where nombre='$nombre'"); 
        mysqli_query($conectar, "UPDATE datos set hora='$hora' where nombre='$nombre'")
        or die("Error al editar");
        mysqli_close($conectar);
        echo "Los datos se han editado correctamente";
}
else{
        echo "Clave incorrecta";
}
echo "<br><a href='cita.html'>Volver a la pagina principal</a>";

?>
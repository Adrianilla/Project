
<?php 

$nombre = $_POST['nombre']; //esta linea toma el dato del formulario con el nombre de la persona que se registro
$apellido = $_POST['apellido']; 
$cedula = $_POST['cedula']; 
$telefono = $_POST['telefono']; 
$correo = $_POST['correo'];
date_default_timezone_set("America/Costa_Rica");
$fecha=date("dmY");
echo $nonbre;
echo $apellido;
echo $cedula;
echo $telefono;
echo $correo;


// Tomar los campos provenientes del Formulario 
$nombre = $_POST['nombre']; 
$apellido = $_POST['apellido']; 
$cedula = $_POST['cedula']; 
$telefono = $_POST['telefono']; 
$correo = $_POST['correo']; 


$datos=fopen($fecha.'.csv','a');//se crea el archivo con la fecha del servidor
	$divisor = ";";
	$fila= $nombre.$divisor.$apellido.$divisor.$cedula.$divisor.$telefono.$divisor.$correo."\n"; 
	fwrite($datos, $fila);
	fclose($datos);



?> 

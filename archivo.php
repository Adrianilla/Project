
<?php 
      date_default_timezone_set("America/Costa_Rica");
      $fecha=date("dmY");
     $nombre = $_POST['nombre']; //esta linea toma el dato del formulario con el nombre de la persona que se registro
     $apellido = $_POST['apellido']; 
     $cedula = $_POST['cedula']; 
     $telefono = $_POST['telefono']; 
     $correo = $_POST['correo'];
     
        echo $nombre;
        echo $apellido;
        echo $cedula;
        echo $telefono;
        echo $correo;
//se crea el archivo con la fecha del servidor
$datos=fopen($fecha.'.csv','a');
	$divisor = ";";
	$fila= $nombre.$divisor.$apellido.$divisor.$cedula.$divisor.$telefono.$divisor.$correo."\n"; 
	fwrite($datos, $fila);
	fclose($datos);



?> 

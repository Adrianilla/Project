 <?php // creando un nuevo archivo php

 $valores=array();// creacion de arreglo
 /*date_default_timezone_set("America/Costa_Rica");//asignar hora por default
      $fecha=date("dmY");// formato especifico de hora*/

 //leer cada línea del archivo usando datos delimitados por coma y recibir un rango de los valores delimitados por coma

$fh = fopen("12032014.csv","r"); //abrir el archivo
   
while (($data=fgetcsv($fh,1000,";"))!=FALSE) {
	
	$i =0;
	foreach ($data as $row) {
		$valores[$i]=$row;
		$i++;
	}
}
//Conectarse y seleccionar base de datos 

$link = mysql_connect('localhost', 'root',''); 
if (!$link) { 
	die('Could not connect: ' . mysql_error()); 
} 
echo 'Connected successfully'; 

$db_selected = mysql_select_db('proyecto', $link); 
if (!$db_selected) { 
	die ('Cant use proyecto: ' . mysql_error()); 
} 


//Crea una búsqueda MySQL usando los valores delimitados por coma.

 $query = "INSERT INTO tabla VALUES ('$valores[0]','$valores[1]','$valores[2]','$valores[3]','$valores[4]')";
//Ejecuta la búsqueda MySQL para insertar los datos en la tabla.

 $result = mysql_query($query); if (!$result) die("Error inserting data into MySQL!". mysql_error()); 
    // cierra el archivo
fclose($fh);
     
  ?>


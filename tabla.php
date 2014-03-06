 <?php // creando un nuevo archivo php
 date_default_timezone_set("America/Costa_Rica");
      $fecha=date("dmY");
 $fh = fopen($fecha.".csv"); 
  die("Could not open data file!");
 //leer cada línea del archivo usando datos delimitados por coma y recibir un rango de los valores delimitados por coma
//Conectarse y seleccionar base de datos 
$link = mysql_connect('localhost', 'root'); 
if (!$link) { 
die('Could not connect: ' . mysql_error()); 
} 
echo 'Connected successfully'; 



$db_selected = mysql_select_db('proyecto', $link); 
if (!$db_selected) { 
die ('Cant use proyecto: ' . mysql_error()); 
} 

while (($data = fgetcsv($fh))) 

//Crea una búsqueda MySQL usando los valores delimitados por coma.
{
 $query = sprintf('INSERT INTO tabla (Nombre,Apellido, Cedula, Telefono,Correo,) VALUES (null, "%s", "%s")', $data[0], $data[1]);
//Ejecuta la búsqueda MySQL para insertar los datos en la tabla.
 $result = mysql_query($query); if (!$result) die("Error inserting data into MySQL!"); }
    // cierra el archivo

     fclose($fh); 





  ?>


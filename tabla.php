 <?php // creando un nuevo archivo php
 $fh = fopen("data.csv") 
 || die("Could not open data file!");
 //leer cada línea del archivo usando datos delimitados por coma y recibir un rango de los valores delimitados por coma

while (($data = fgetcsv($fh))) 

//Crea una búsqueda MySQL usando los valores delimitados por coma.
{
 $query = sprintf('INSERT INTO tabla ('nombre','apellido', 'idcedula', 'telefono','correo',) VALUES (null, "%s", "%s")', $data[0], $data[1]);
//Ejecuta la búsqueda MySQL para insertar los datos en la tabla.
 $result = mysql_query($query); if (!$result) die("Error inserting data into MySQL!"); }
    // cierra el archivo

     fclose($fh); 





  ?>


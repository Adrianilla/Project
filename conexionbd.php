 <?php 
 $fh = fopen("data.csv") 
 || die("Could not open data file!");

while (($data = fgetcsv($fh))) {
 $query = sprintf('INSERT INTO `capitals` (`id`, `state`, `city`) VALUES (null, "%s", "%s")', $data[0], $data[1]);

 $result = mysql_query($query); if (!$result) die("Error inserting data into MySQL!"); }
     fclose($fh); 





  ?>


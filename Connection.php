<?php 
//connection file
  //defining the constants that are specific to where the SQL table is hosted
  define('USER', 'root');
  define('PASSWORD', '');
  define('HOST','localhost');
  define('DATABASE','registertest');

  
  //try/catch of starting a connection. Success= a new PDO instance. Failure= returns an error message
  try{$connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE,USER,PASSWORD);}
  catch(PDOException $e){exit('error'.$e->getMessage());}

?>

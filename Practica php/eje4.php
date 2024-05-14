<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica4</title>
</head>
<body>
    
<?php
  $cadena1="Comer algas";
  $cadena2="Es realmente sano";

  $cadena3= $cadena1 ." ".$cadena2;

echo $cadena3;
echo "<br>";
 echo  "la pocicion de la palabra: ".strpos($cadena3, "algas");
?>
</body>
</html>
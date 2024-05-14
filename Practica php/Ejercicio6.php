<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <?php
           
           echo "<table border='1'>";
           echo "<tr><th>*</th>";
           
           // Header row with numbers 1 to 10
           for ($header = 1; $header <= 10; $header++) {
               echo "<th>" . $header . "</th>";
           }
           echo "</tr>";
           
           // Multiplication table body
           for ($num1 = 1; $num1 <= 10; $num1++) {
               echo "<tr><th>" . $num1 . "</th>";
           
               for ($num2 = 1; $num2 <= 10; $num2++) {
                   $result = $num1 * $num2;
                   echo "<td>" . $result . "</td>";
               }
               echo "</tr>";
           }
           echo "</table>";


   ?>
    
    

</body>
</html>
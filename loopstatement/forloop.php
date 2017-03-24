<!DOCTYPE html>
<html>
<body>

<?php  
for ($x = 0; $x <= 100; $x++)//for loop
{
  echo "The number is: $x <br>";
}
$colors = array("red", "green", "blue", "yellow");//foreach

foreach ($colors as $value) {
  echo "$value <br>";
}
?>  

</body>
</html>
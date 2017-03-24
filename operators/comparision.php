<!DOCTYPE html>
<html>
<body>

<?php
$x = 100;  
$y = "100";
$z = "50";
var_dump($x == $y);//equal
echo"<br>";
var_dump($x === $y);//identical
echo"<br>";
var_dump($x != $y);//not equal to
echo"<br>";
var_dump($x <> $y);//not equal
echo"<br>";
var_dump($x !== $y);//not identical
echo"<br>";
var_dump($x > $z);//greater than
echo"<br>";
var_dump($z < $x);//less than
echo"<br>";
var_dump($x <= $y);///less than or equal
echo"<br>";
var_dump($x >= $y);//greater than or equal 
?>  

</body>
</html>
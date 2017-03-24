<!DOCTYPE html>
<html>
<body>

<?php
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50)//and two condition is true after execute the process
 {
    echo "Hello world!";
}
echo "<br>";
if ($x == 100 or $y == 80)//or it is anyone condition is strue after execute the process
{
echo "Hi Sindhu";
}
echo"<br>";
if ($x == 100 xor $y == 20)//also same as or,but not true both
{
echo"Hi Friends";
}
echo"<br>";
if ($x !== 90)//true $x is not true
{
    echo "Hello world!";
}
echo"<br>";
if ($x == 100 && $y == 50) //also and process
{
    echo "Hello";
}
echo"<br>";
if ($x == 100 || $y == 50) //also or
{
    echo "World!";
}
?>  

</body>
</html>
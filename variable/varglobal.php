<!DOCTYPE html>
<html>
<body>

<?php
$v = 5;
$u = 10;
function myTest() {
    global $v, $u;
    $u = $v + $u;
}

myTest();  // run function
echo $u; // output the new value for variable $y
?>

</body>
</html>
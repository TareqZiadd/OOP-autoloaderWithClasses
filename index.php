<?php
include 'includes/class-autoload.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php

$obj1 = new Person ("Daniel",28);
echo $obj1->getName()."<br>";
echo $obj1->getAge()."<br>";

$obj2 = new House ("",0);

?>



</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap</title>
</head>
<body>
   <?php
    $num1=10;
    $num2=20;
    echo("Numbers before swapping are:$num1 and $num2");
    list($num1,$num2)=array($num2,$num1);
    echo("<br>");
    echo("Numbers after swapping are:$num1 and $num2");
   ?>

</body>
</html>
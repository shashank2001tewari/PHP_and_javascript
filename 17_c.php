<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1=10;
    if(isset($num1))
    {
        echo("Variable num1 is set.<br>");
    }
    else{
        echo("Variable num1 is not set");
    }
    unset($num1);
    if(isset($num1))
    {
        echo("Variable num1 is set");
    }
    else{
        echo("Variable num1 is not set");
    }
    
    ?>
</body>
</html>

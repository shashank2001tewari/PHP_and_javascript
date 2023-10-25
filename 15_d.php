<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maximum of three numbers</title>
</head>
<body>
    <?php
    $num1=12;
    $num2=10;
    $num3=90;
    if($num1>$num2)
    {
        if($num1>$num3)
        {
            echo("The number $num1 is greater");
        }
        else
        echo("The number $num3 is greater");
    }
    else{
        if($num2>$num3)
        {
            echo("The number $num2 is greater");
        }
        else  echo("The number $num3 is greater");

    }
    ?>
</body>
</html>
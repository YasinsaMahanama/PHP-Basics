<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php

        $a = 42;
        $b = 20;

        $c = $a + $b;
        echo "Addition Operation Result : $c <br/><br/>";

        $c += $a;
        echo "Addition And Assignment Operation Result : $c <br/><br/>";

        $c -= $a;
        echo "Subtraction And Assignment Operation Result : $c <br/><br/>";

        $c *= $a;
        echo "Multiplication And Assignment Operation Result : $c <br/><br/>";

        $c /= $a / $b;
        echo "Divition And Assignment Operation Result : $c <br/><br/>";

        $c %= $a % $b;
        echo "Modulus And Assignment Operation Result : $c <br/><br/>";

    ?>
</body>
</html>

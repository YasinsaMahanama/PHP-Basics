<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php
        $x=rand(1,10);
        $y=rand(1,10);
        $z=rand(1,4);

        echo "numbers: $x, $y <br> operation code: $z";
        echo "\n";

        switch($z)
        {
            case 1: $r=$x+$y;
                break;
            case 2: $r=$x-$y;
                break;
            case 3: $r=$x*$y;
                break;
            case 4: $r=$x/$y;
                break;
        }

        echo "<br> result = $r";
    ?>
</body>
</html>

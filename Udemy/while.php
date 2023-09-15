<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php
        //first example
        $i = 0;
        while($i <10)
        {
            $i++;
            echo "number: $i <br>";
        }

        echo "<br><br>";

        //second example
        $x=0;
        while($x!=5)
        {
            $x=rand(1,10);
            echo "number: $x<br>";
        }

    ?>
</body>
</html>

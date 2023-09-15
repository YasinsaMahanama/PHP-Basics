<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php
        $x=rand(1,100);
        echo "Random number is $x <br>";
        if($x<25)
        {
            echo "number less than 25 <br>";
        }
        else if($x<50)
        {
            echo "number is between 25-50 <br>";
        }
        else
        {
            echo "number is greater than or equal to 50 and less than or equal to 100 <br>";
        }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    
    <?php
        $y = 0;
        while($y<10)
        {
            $y++;
            $x=rand(1,10);
            if($x==5)
            {
                continue;
            }
            echo "random number $y : value : $x <br>";
        
        }
            
    ?>

</body>
</html>

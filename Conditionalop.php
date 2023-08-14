<html>
  <head>

    <title>PHP Test</title>
    
  </head>

  <body>

    <?php

    $a = 10;
    $b = 12;

    $result = ($a > $b)? $a : $b;

    echo "TEST I : The max value is $result. <br/><br/>";

    $result = ($a < $b)? $a : $b;

    echo "TEST II : The min value is $result. <br/><br/>";

    ?>
    
  </body>
</html>


<html>
  <head>

    <title>Call By Reference</title>
    
  </head>

  <body>

    <?php

        function swap($x, $y)
        {
            $t = $x;
            $x = $y;
            $y = $t;
        }

        $a = 10;
        $b = 15;

        echo " Before the swap : <br> a = $a  b = $b <br/>";

        swap($a, $b);

        echo " After the swap : <br> a = $a  b = $b <br/>";

    ?>
    
  </body>
</html>


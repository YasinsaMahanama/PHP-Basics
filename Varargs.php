<html>
  <head>

    <title>Call By Reference</title>
    
  </head>

  <body>

    <?php

    function average(&$args)
      {
        print_r($args);
        echo "<br/>";
        $sum = 0;
        $count = count($args);
        for($i=0;$i<$count;$i++)
          {
            $sum +=$args[$i];
          }
        $average = $sum/$count;
        echo "Average = $average <br/>";
      }
      $numbers = array(10,20,30,40,50);
      average($numbers);

    ?>
    
  </body>
</html>

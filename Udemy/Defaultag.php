<html>
  <head>

    <title>User defined function default Argument</title>
    
  </head>

  <body>

    <?php

      function percentage($p, $c, $m, $ttl=300)
      {
        echo "p=$p, c=$c, m=$m, ttl=$ttl<br/>";
  
        $percent = ($p+$c+$m)*100/$ttl;
  
        echo "Percentage = $percent <br/>";
      }
  
      percentage(50,60,70);
      percentage(25,30,35,150);

    ?>
    
  </body>
</html>

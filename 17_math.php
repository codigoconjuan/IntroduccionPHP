<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>
    
    <div class="container">
          <h1>Aprendiendo PHP</h1>
          
          <div class="codigo">
                  <?php 
                        echo 2 + 2;
                        echo "<br/>";
                        echo 2 * 2;
                        echo "<br/>";
                        echo 3 - 1;
                        echo "<br/>";
                        echo 9 / 3;
                        echo "<br/>"; 
                        
                        
                        echo 10 * (2 + 5);
                        
                        echo "<br/>";
                          
                        $total = 0;
                        $total += 20;
                        $total += 5;
                        $total += 20;
                        $total -=  10;
                        $total /= 10;
                        $total *= 10;
                          
                        echo "El total es:" . $total;
                        
                          echo "<br/>";
                          
                        for($i = 0; $i <= 100; $i++){
                          if($i % 2 == 0) {
                            echo "El número: " . $i . " es par <br/>";
                          } else {
                            echo "El número: " . $i . " es impar <br/>";
                          }
                        }
                   ?>
          </div>
    </div>
    
  </body>
</html>
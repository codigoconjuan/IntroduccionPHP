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
                        for($i = 0; $i <= 100; $i++) {
                          if($i == 5) {
                            echo "ES CINCO!! <br/>";
                            continue;
                          }
                          echo "El número es: " . $i . "<br/>";
                        }
                   ?>
                   
                  
                   
              
          </div>
    </div>
    
  </body>
</html>
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
                        $frutas = array('manzana', 'naranja', 'melon', 'platano', 'uvas' );
                        
                        foreach($frutas as $fruta) {
                              echo "Una de mis frutas favoritas es: ";
                              echo $fruta . "<br/>";
                              echo "<hr>";
                        }
                   ?>
          </div>
    </div>
    
  </body>
</html>
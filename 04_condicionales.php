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
                      $numero1 = 20;
                      $numero2 = 19;
                      
                      if($numero1 > $numero2){
                        echo "El número 1 es mayor";
                      } else if($numero1 == $numero2) {
                        echo "Son iguales!";
                      }else {
                        echo "El número 2 es mayor";
                      }
                      
                      echo "<hr>";
                      
                      if($numero1 != 20) {
                        echo "No, no son iguales";
                      } else {
                        echo "Si son iguales";
                      }
                      
                      echo "<hr>";
                      
                      $usuario_logueado = true;
                      
                      if($usuario_logueado) {
                        echo "Muestra el contenido";
                      } else {
                        echo "Por favor inicia sesión";
                      }
                   ?>
          </div>
    </div>
    
  </body>
</html>
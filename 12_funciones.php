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
                      $frutas = array('manzana', 'naranja', 'melon', 'platano', 'uvas', 'Pera');

                      echo count($frutas);
                      echo "<br/>";
                      
                      $mi_nombre = "Juan Pablo De la torre Valdez";
                      $mi_nombre2 = str_replace(' ','', $mi_nombre);
                      echo strlen($mi_nombre2);
                      echo $mi_nombre2;
                      echo "<br/>";
                      
                      echo strtoupper($mi_nombre);
                      
                      echo "<br/>";
                      
                      echo strtolower($mi_nombre);
                      
                        echo "<br/>";
                      
                      $password = "ijdasijdaijsd8adhaushdiasdjiajsd";
                      
                      if(strlen($password) < 10 ){
                        echo "El password es muy debil";
                      } else {
                        echo "El password es seguro";
                      }
                      
                   ?>
          </div>
    </div>
    
  </body>
</html>
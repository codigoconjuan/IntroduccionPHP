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
                        $estudiante = array(
                              'nombre' => 'Juan',
                              'apellido' => 'De la torre',
                              'pais' => 'Mexico',
                              'edad' => 29,
                              'usuario_logueado' => true
                        );
                        
                        $frutas = array('manzana', 'naranja', 'melon', 'platano', 'uvas' );
                      
                        
                        echo "<pre>";
                        var_dump($estudiante);
                        echo "</pre>";
                        
                        echo "<pre>";
                        print_r($frutas);
                        echo "</pre>";
                        
                        echo $frutas[2];
                        
                        echo $estudiante['apellido'];
                   ?>
          </div>
    </div>
    
  </body>
</html>
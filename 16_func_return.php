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
                          function total_pagar($cantidad) {
                                $total = $cantidad * 1.16;
                                return $total; 
                          }
                          
                          $cantidad_a_pagar = total_pagar("1000");
        
                          function balance_banco($cantidad_pagar){
                                $balance = 5000;
                                
                                if($cantidad_pagar > $balance) {
                                  echo "hubo un error en tu pago";
                                } else {
                                  echo "Pago exitoso";
                                }
                          }
                          balance_banco($cantidad_a_pagar);
                   ?>
          </div>
    </div>
    
  </body>
</html>
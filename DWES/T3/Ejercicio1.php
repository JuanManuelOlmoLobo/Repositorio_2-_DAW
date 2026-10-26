<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios de PHP - Entorno Servidor</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
        $moneda = random_int(0,1);
        if($moneda === 0){
            ?>
            <p style="font-size: 50px;"> Ha salido Cruz <?php echo "\u{274E}" ?>  </p> 
            <?php
        }else if ($moneda === 1){
            ?>
            <p  style="font-size: 50px;"> Ha salido Cara <?php echo "\u{1FA99}" ?> </p> 
            <?php
        }
        ?>
    </body>
</html>
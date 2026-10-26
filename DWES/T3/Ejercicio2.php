<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios de PHP - Entorno Servidor</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
        $nota = random_int(0,10);
        if($nota >= 9){
           ?>
            <p style="font-size: 50px;"> Tu nota es: <?php echo "$nota"?> -> Sobresaliente</p> 
            <?php 
        }else if($nota >= 7 && $nota < 9){
           ?>
            <p style="font-size: 50px;"> Tu nota es: <?php echo "$nota"?> -> Notable</p> 
            <?php 
        }else if($nota >= 6 && $nota < 7){
           ?>
            <p style="font-size: 50px;"> Tu nota es: <?php echo "$nota"?> -> Bien</p> 
            <?php 
        }else if($nota >= 5 && $nota < 6){
           ?>
            <p style="font-size: 50px;"> Tu nota es: <?php echo "$nota"?> -> Suficiente</p> 
            <?php 
        }else if($nota < 5){
           ?>
            <p style="font-size: 50px;"> Tu nota es: <?php echo "$nota"?> -> Insuficiente</p> 
            <?php 
        }
        ?>
    </body>
</html>
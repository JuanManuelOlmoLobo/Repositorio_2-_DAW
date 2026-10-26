<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios de PHP - Entorno Servidor</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body> 
        <?php 
            $suma = 0;
            $num1 = (int)$_GET['num1'];
            if($num1%2 === 0){
                while($num1 != 0){
                    $suma= $suma + $num1;
                    $num1 = $num1 -2;
                }
                ?>
                    <p> <?php echo "La suma de los pares anteriores es: $suma"?> </p>
                <?php
            }else{
                $num1 = $num1-1;
                while($num1 != 0){
                    $suma= $suma + $num1;
                    $num1 = $num1 -2;
                }
                ?>
                    <p> <?php echo "La suma de los pares anteriores es: $suma"?> </p>
                <?php
            }
        ?>
    </body>
</html>
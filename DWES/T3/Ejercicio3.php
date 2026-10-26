<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios de PHP - Entorno Servidor</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
        $num1 = (int)$_GET['num1'];
        $num2 = (int)$_GET['num2']; 
        $num3 = (int)$_GET['num3'];
        if($num1 === $num2 && $num1 === $num3 && $num2 === $num3){
            ?>
            <p> <?php echo "Hay tres números iguales a $num1"?> </p>
            <?php
        }else if($num1 === $num2 && $num1 !== $num3 ){
            ?>
            <p> <?php echo "Hay dos números iguales a $num1"?> </p>
            <?php
        }else if($num1 === $num3 && $num1 !== $num2 ){
            ?>
            <p> <?php echo "Hay dos números iguales a $num1"?> </p>
            <?php
        }else if($num2 === $num3 && $num2 !== $num1 ){
            ?>
            <p> <?php echo "Hay dos números iguales a $num2"?> </p>
            <?php
        }else if($num1 !== $num2 && $num1 !== $num3 && $num2 !== $num3){
            ?>
            <p> <?php echo "No hay números iguales"?> </p>
            <?php
        }
        ?>
    </body>
</html>
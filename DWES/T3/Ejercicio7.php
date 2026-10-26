<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios de PHP - Entorno Servidor</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $num_frut = rand(7,20);
            $rep_frut = 0;
            $fruta = rand(127815,127827);
            echo "Se han Generado $num_frut frutas:";
            for($i = 0; $i < $num_frut ; $i++){
                $gen_fruta = rand(127815,127827);
                echo "&#"."$gen_fruta" ;
                if($gen_fruta == $fruta){
                    $rep_frut++;
                }
            }
            echo "Se han generado $rep_frut "."&#"."$fruta";
        ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios de PHP - Entorno Servidor</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
        
        </style>
    </head>
    <body>
        <h1 align="center">Operaciones Matemáticas</h1>
        <?php
        $max = 0;
        $min = 0;
        $nume1 = (int)$_GET['num1'];
        $nume2 = (int)$_GET['num2'];
        $nume3 = (int)$_GET['num3'];
        $suma = $nume1 + $nume2 + $nume3;
        $producto = $nume1 * $nume2 * $nume3;
        $promedio = $suma/3 ;
        if($nume1 > $nume2 && $nume1 > $nume3){
            $max = $nume1;
        }else if($nume2 > $nume1 && $nume2 > $nume3){
            $max = $nume2;
        }else if($nume3 > $nume1 && $nume3 > $nume2){
            $max = $nume3;
        }
        
        if($nume1 < $nume2 && $nume1 < $nume3){
            $min = $nume1;
        }else if($nume2 < $nume1 && $nume2 < $nume3){
            $min = $nume2;
        }else if($nume3 < $nume1 && $nume3 < $nume2){
            $min = $nume3;
        }
        ?>
            <table class="table table-bordered">
                <tr align="center">
                    <td>
                        <p><b>Número 1:</b></p>
                    </td>
                    <td>
                        <p><?php echo $nume1 ?></p>  
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <p><b>Número 2:</b></p>
                    </td>
                    <td>
                        <p><?php echo $nume2 ?></p>  
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <p><b>Número 3:</b></p>
                    </td>
                    <td>
                        <p><?php echo $nume3 ?></p>  
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <p><b>Suma:</b></p>
                    </td>
                    <td>
                        <p><?php echo $suma ?></p>  
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <p><b>Producto:</b></p>
                    </td>
                    <td>
                        <p><?php echo $producto ?></p>  
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <p><b>Promedio:</b></p>
                    </td>
                    <td>
                        <p><?php echo $promedio ?></p>  
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <p><b>Máximo:</b></p>
                    </td>
                    <td>
                        <p><?php echo $max ?></p>  
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <p><b>Mínimo:</b></p>
                    </td>
                    <td>
                        <p><?php echo $min ?></p>  
                    </td>
                </tr>
            </table>
            <div class="d-flex justify-content-center" >
                <a href="Index.php"><button type="button">Volver</button></a>
            </div>
    </body>
</html>
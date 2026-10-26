<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios de PHP - Entorno Servidor</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <h1 align="center">Operaciones Con Cadena</h1>
        <?php
        $cade1=$_GET['cad1'];
        $cade2=$_GET['cad2'];
        $conca = $cade1.$cade2;
        $longcade1= strlen('$cade1');
        $longcade2= mb_strlen('$cade2') ;
        $ult10car= mb_substr($cade2, -10 ,null , 'UTF-8');
        $remplazo = str_replace("Hola", "Buenas" , $conca);
        ?>
        <table class="table table-bordered">
                <tr align="center">
                    <td>
                        <p><b>Cadena 1:</b></p>
                    </td>
                    <td>
                        <p><?php echo $cade1 ?></p>  
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <p><b>Cadena 2:</b></p>
                    </td>
                    <td>
                        <p><?php echo $cade2 ?></p>  
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <p><b>Conca:</b></p>
                    </td>
                    <td>
                        <p><?php echo $conca ?></p>  
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <p><b>Longitud de Cadena 1:</b></p>
                    </td>
                    <td>
                        <p><?php echo $longcade1 ?></p>  
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <p><b>Longitud de Cadena 2:</b></p>
                    </td>
                    <td>
                        <p><?php echo $longcade2 ?></p>  
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <p><b>Ultimos 10 caracteres de la cadena 2:</b></p>
                    </td>
                    <td>
                        <p><?php echo $ult10car ?></p>  
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <p><b>Remplazo de 'Hola' por 'Buenas':</b></p>
                    </td>
                    <td>
                        <p><?php echo $remplazo ?></p>  
                    </td>
                </tr>
            </table>
        <div class="d-flex justify-content-center" >
            <a href="Index.php"><button type="button">Volver</button></a>
        </div>
    </body>
</html>
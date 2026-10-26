 <!DOCTYPE html>
<html lang="es">
    <head>
            <meta charset="UTF-8">
            <title>Ejercicios de PHP - Entorno Servidor</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $num = rand(0,12);
            
        ?>
        <table class="table table-striped table-bordered w-auto mt-3">
            <tr>
                <th>Multiplicación</th>
                <th>Resultado</th>
            </tr>
            <tr>
                <td>0 x <?php echo $num ?></td>
                <td><?php echo $num*0 ?></td>
            </tr>
            <tr>
                <td>1 x <?php echo $num ?></td>
                <td><?php echo $num*1 ?></td>
            </tr>
            <tr>
                <td>2 x <?php echo $num ?></td>
                <td><?php echo $num*2 ?></td>
            </tr>
            <tr>
                <td>3 x <?php echo $num ?></td>
                <td><?php echo $num*3 ?></td>
            </tr>
            <tr>
                <td>4 x <?php echo $num ?></td>
                <td><?php echo $num*4 ?></td>
            </tr>
            <tr>
                <td>5 x <?php echo $num ?></td>
                <td><?php echo $num*5 ?></td>
            </tr>
            <tr>
                <td>6 x <?php echo $num ?></td>
                <td><?php echo $num*6 ?></td>
            </tr>
            <tr>
                <td>7 x <?php echo $num ?></td>
                <td><?php echo $num*7 ?></td>
            </tr>
            <tr>
                <td>8 x <?php echo $num ?></td>
                <td><?php echo $num*8 ?></td>
            </tr>
            <tr>
                <td>9 x <?php echo $num ?></td>
                <td><?php echo $num*9 ?></td>
            </tr>
            <tr>
                <td>10 x <?php echo $num ?></td>
                <td><?php echo $num*10 ?></td>
            </tr>
            <tr>
                <td>11 x <?php echo $num ?></td>
                <td><?php echo $num*11 ?></td>
            </tr>
            <tr>
                <td>12 x <?php echo $num ?></td>
                <td><?php echo $num*12 ?></td>
            </tr>
        </table>  
    </body>
</html>
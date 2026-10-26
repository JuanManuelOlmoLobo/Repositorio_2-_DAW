    <!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Ejercicios de PHP - Entorno Servidor</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>
            <?php
                for($i = 0; $i <= 50000; $i++ ) { 
                    echo " $i = &#$i; | "  
                    ?><?php  
                    if($i % 20 === 0){
                    echo "<br>";
                }       
                }         
            ?>
        </body>
    </html>
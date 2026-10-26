<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios de PHP - Entorno Servidor</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <h1 align="center">Información del Servidor: </h1>

            <table class="table table-bordered">
                <tr align="center">
                    <td>
                        <p><b>Nombre del Servidor:</b></p>
                    </td>
                    <td>
                        <p><?php echo $_SERVER['SERVER_NAME'] ?></p>  
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <p><b>Software del Servidor:</b></p>
                    </td>
                    <td>
                        <p><?php echo $_SERVER['SERVER_SOFTWARE'] ?></p>  
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <p><b>Versión de PHP:</b></p>
                    </td>
                    <td>
                        <p><?php echo phpversion() ?></p>  
                    </td>
                </tr>
            </table>
            <div class="d-flex justify-content-center" >
                <a href="Index.php"><button type="button">Volver</button></a>
            </div>
    </body>
</html>
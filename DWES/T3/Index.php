<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios de PHP - Entorno Servidor</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="d-flex flex-column align-items-center">
            <p>Nombre: Juan Manuel Olmo Lobo</p>
            <p>Curso: 2º DAW</p>
            <p>Módulo: Desarrollo Web en Entorno Servidor(DWES)</p>
        </div>
        <div class="card shadow-sm">
      <div class="card-body">
        <?php
            $ejercicio = isset($_GET['ejer']) ? (int)$_GET['ejer'] : 1;
        ?>

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link <?php echo $ejercicio === 1 ? 'active text-dark fw-bold' : ''; ?>" href="?ejer=1">Ejercicio 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $ejercicio === 2 ? 'active text-dark fw-bold' : ''; ?>" href="?ejer=2">Ejercicio 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $ejercicio === 3 ? 'active text-dark fw-bold' : ''; ?>" href="?ejer=3">Ejercicio 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $ejercicio === 4 ? 'active text-dark fw-bold' : ''; ?>" href="?ejer=4">Ejercicio 4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $ejercicio === 5 ? 'active text-dark fw-bold' : ''; ?>" href="?ejer=5">Ejercicio 5</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $ejercicio === 6 ? 'active text-dark fw-bold' : ''; ?>" href="?ejer=6">Ejercicio 6</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $ejercicio === 7 ? 'active text-dark fw-bold' : ''; ?>" href="?ejer=7">Ejercicio 7</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $ejercicio === 8 ? 'active text-dark fw-bold' : ''; ?>" href="?ejer=8">Ejercicio 8</a>
            </li>
        </ul>
      </div>
    </div>
    <div class = "contenido-ejercicio">
        <?php
            switch ($ejercicio) {
                case 1:
                    require 'Ejercicio1.php' ;
                    break;                  
                case 2:
                    require 'Ejercicio2.php';
                    break;
                case 3:
                   ?>
                        <form action="" method="GET">
                            <input type="hidden" name="ejer" value="3">
                            <input type="number" name="num1" required>
                            <input type="number" name="num2" required>
                            <input type="number" name="num3" required>    
                            <button type="submit">Enviar</button>
                        </form>
                        <?php
                         if (isset($_GET['num1'], $_GET['num2'], $_GET['num3'])) {
                            require 'Ejercicio3.php';
                        }
                            break;
                    break;
                case 4:
                    ?>
                        <form action="" method="GET">
                            <input type="hidden" name="ejer" value="4">
                            <input type="number" name="num1" required>    
                            <button type="submit">Enviar</button>
                        </form>
                        <?php
                         if (isset($_GET['num1'])) {
                            require 'Ejercicio4.php';
                        }
                            break;
                    break;
                case 5:
                    require 'Ejercicio5.php';                    break;
                case 6:
                    require 'Ejercicio6.php';
                    break;
                case 7:
                    require 'Ejercicio7.php';
                    break;
                case 8:
                    require 'Ejercicio8.php';
                    break;
                default:
                    # code...
                    break;
            }
            ?>
    </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicios de PHP - Entorno Servidor</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <style>

    .enlace-cuadrado {
        text-decoration: none;
        display: inline-block;
    }
    .cuadrado-ajustable {
        min-width: 160px;
        min-height: 160px;
        padding: 15px; 
        border: 2px solid #000000;
        background-color: #ffffff;
        
        display: inline-flex;
        justify-content: center;
        align-items: center;
        
        flex-direction: column;
        font-family: sans-serif;
        color: #000000;
        cursor: pointer;
    }
  </style>
</head>
<body>
  <main class="container my-5">
    
    <header class="mb-4">
      <h1 class="display-5">Ejercicios Iniciales</h1>
      <p class="text-muted">Nombre: Juan Manuel Olmo Lobo</p>
      <p> </p>
      <p class="text-muted">Curso: 2º DAW</p>
      <p> </p>
      <p class="text-muted">Módulo: Desarrollo Web en Entorno Servidor(DWES)</p>
      <p> </p>
    </header>
    
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
        </ul>
      </div>
    </div>
    <div class = "contenido-ejercicio">
        <?php
            switch ($ejercicio) {
                case 1:
                    echo "<h1>Ejercicio 1</h1>";
                    ?>
                    <div class="cuadrado-ajustable">
                        <?php
                        date_default_timezone_set('Europe/Madrid');
                        $fecha_hoy = date('l, F jS Y');
                        $hora_actual = date('H:i:s');
                        ?>
                        <h1>La fecha de hoy es:</h1>
                        <p><?php echo $fecha_hoy; ?></p>
                        <br>
                        <h1>Y la hora:</h1>
                        <p>Son las <?php echo $hora_actual; ?></p>
                    </div>
                    <?php
                    break;                  
                case 2:
                    echo "<h1>Ejercicio 2</h1>";
                    $primerNumero = 8;
                    $segundoNumero = 5;
                    $resto = $primerNumero % $segundoNumero;
                    $resultadoDividir = $primerNumero / $segundoNumero;
                    $resultadoSumar = $primerNumero + $segundoNumero;
                    ?>
                    <p>Primer número: <?php echo $primerNumero; ?></p>
                    <p>Segundo número: <?php echo $segundoNumero; ?></p>
                    <p>El resto de dividir el primer número entre 5 -- <?php echo $resto; ?></p>
                    <p>El resultado de dividir el primer número por el segundo -- <?php echo $resultadoDividir; ?></p>
                    <p>El resultado de sumar los dos  números -- <?php echo $resultadoSumar; ?></p>
                    <?php
                    break;
                    
                case 3:
                    echo "<h1>Ejercicio 3</h1>";
                    $frase ="Ya decidí que esta noche se sale con todas mis motomami"; 
                    $frasesinespacios = str_replace(' ', '', $frase); 
                    $longitud_total = mb_strlen($frase);
                    $longitud_total_sin_espacios = mb_strlen($frasesinespacios);
                    ?>
                        <p>La frase original es: <strong><?php echo $frase ?></strong></p>
                        <p>La frase resultante <strong><?php echo $frasesinespacios ?></strong></p>
                        <p>La longitud de la cadena original es: <?php echo $longitud_total ?></p>
                        <p>La longitud de la cadena final es: <?php echo $longitud_total_sin_espacios ?></p>
                    <?php
                    break;
                case 4:
                    echo "<h1>Ejercicio 4</h1>";
                    define("EULER", 2.718281);
                    $exponente = 2;
                    $resultado_exponencial = pow(EULER, $exponente);
                    $max_entero = PHP_INT_MAX;
                    ?>
                    <table border="1" style="border-collapse: collapse; width: 100%; max-width: 600px; font-family: Arial, sans-serif;">
                        <tr style="background-color: black; color: white; text-align: left;">
                            <th style="padding: 8px" >Cálculos</th>
                            <th style="padding: 8px" text-align: right>Resultados</th>
                        </tr>
                        <tr>
                            <td style="padding: 8px">Mi constante es EULER y su valor aproximado es </td>
                            <td style="padding: 8px"><strong><?php echo EULER; ?></strong></td>
                            
                        </tr>
                        <tr>
                            <td style="padding: 8px;">Crecimiento exponencial con exponente = <?php echo $exponente; ?></td>
                            <td style="padding: 8px; text-align: right;"><strong><?php echo $resultado_exponencial; ?></strong></td>
                        </tr>
                        <tr>
                            <td style="padding: 8px;">El valor máximo que puede tomar un entero en PHP</td>
                            <td style="padding: 8px; text-align: right;"><strong><?php echo $max_entero; ?></strong></td>
                        </tr>
                    </table>
                    <?php
                    break;
                case 5:
                    echo "<h1>Ejercicio 5</h1>";
                    //$numFloat = 5.7;          
                    //$variableSinValor = null;
                    $numFloat = 10;
                    $variableSinValor = "Hola";
                    if (is_float($numFloat)) {
                        echo "El numero elegido para <strong>$ numFloat</strong> es <strong>$numFloat</strong>";
                        ?><br><?php
                        echo "El numero SI es FLOAT";
                    } else {
                        echo "El numero elegido para <strong>$ numFloat</strong><br>"; 
                        echo "El numero no es FLOAT es (" . gettype($numFloat) . ")";   
                    }
                    ?>
                    <br>
                    <p>------------------------</p>
                    <br>
                    <?php
                    if (is_null($variableSinValor)) {
                        echo "No se ha asignado valor a la variable, por lo tanto es NULL";
                        ?><br><?php
                    } else {
                        echo "El valor asignado a la variable es: <strong>$variableSinValor</strong>.<br>";
                    }
                    
                    break;
                default:
                    # code...
                    break;
            }
            ?>
    </div>

  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
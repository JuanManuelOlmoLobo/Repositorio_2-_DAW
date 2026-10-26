<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Metadatos básicos requeridos para la validación W3C -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicios de PHP - Entorno Servidor</title>

  <!-- CSS de Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <style>
    /* Estilos personalizados para el recuadro del ejercicio 1 */
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
        
        /* Centrado del número por Flexbox */
        display: inline-flex;
        justify-content: center;
        align-items: center;
        
        font-family: sans-serif;
        color: #000000;
        cursor: pointer;
    }
  </style>
</head>
<body>

  <!-- Contenido principal de la página -->
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
            // Detectamos qué ejercicio está seleccionado en la URL (?ejer=X). Si no hay ninguno, por defecto es el 1.
            $ejercicio = isset($_GET['ejer']) ? (int)$_GET['ejer'] : 1;
        ?>
            <!-- Pestañas de Bootstrap (nav-tabs). Cambian de aspecto automáticamente si están activas -->
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
        </ul>
      </div>
    </div>
    <div class = "contenido-ejercicio">
        <?php
            switch ($ejercicio) {
                case 1:
                    $numero_aleatorio = rand(1, 100);
                    $tamano_aleatorio = rand(200, 800);
                    echo "<h1>Ejercicio 1</h1>";
                    echo "<p>El número generado aleatoriamente es: " . $numero_aleatorio. "</p>";
                        ?>
                    <div class="cuadrado-ajustable" style="font-size: <?php echo $tamano_aleatorio; ?>%;">
                        <?php echo $numero_aleatorio; ?>
                    </div>
                    <?php
                    break;                  
                case 2:
                    echo "<h1>Ejercicio 2</h1>";
                    echo "<p>Actualice la pagina para mostrar otro emoticono.</p>";
                    $emoji_aleatorio = rand(128512,128586);
                    echo "<div style='font-size: 5rem; margin-top: 15px;'>&#" . $emoji_aleatorio . ";</div>";
                    break;
                    
                case 3:
                    # code...
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
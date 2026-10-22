    var fotogramas = [
      "imagenes\\primavera.png", 
      "imagenes\\verano.png", 
      "imagenes\\otoño.png", 
      "imagenes\\invierno.png" 
    ];
    var indiceActual = 0;
    function siguienteFotograma() {
      indiceActual = indiceActual + 1;
      if (indiceActual >= fotogramas.length) {
        indiceActual = 0;
      }
      document.getElementById('animacion').src = fotogramas[indiceActual];
    }
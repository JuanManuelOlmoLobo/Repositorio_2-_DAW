function validarAcceso() {
    let codigo;
    do {
        codigo = prompt("Introduce tu código numérico de 4 dígitos:");
    } while (isNaN(codigo) || codigo.length != 4);

    alert("¡Código correcto! Acceso concedido.");
}
validarAcceso();
function crearConfiguracion() {
    return {
        modo: "oscuro",
        puerto: 8080
    };
}
const config = crearConfiguracion();
console.log(config); // Ahora imprime correctamente el objeto

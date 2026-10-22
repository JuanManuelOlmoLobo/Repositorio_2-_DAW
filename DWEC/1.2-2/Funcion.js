function cambiartexto() {
    document.getElementById("prueba2").innerHTML = "H1 ha cambiado";
    document.getElementById("prueba").innerHTML = "Parrafo cambiado";
}
function eventoclick1() {
    console.log("Traza Informativa");
}
function eventoclickalerta() {
    alert("Traza Informativa");
}
function boton1() {
    let horas = new Date();
    let hora = horas.getHours();
    let minutos = horas.getMinutes();
    let segundos = horas.getSeconds();
    console.log(`La hora es: ${hora}:${minutos}:${segundos}`);
}
function boton2() {
    document.getElementById("estado").innerHTML = "Sistema Activo";
    document.getElementById("estado").style.backgroundColor = "green";
}
function boton3() {
    alert("El Proceso Ha Terminado");
}

function evaluarRespuesta(x,respuesta) {
    if(respuesta == true){
        document.getElementById(x).style.color="green";
    }
    else{
        document.getElementById(x).style.color="red";
    };
}

function cambiarRuso() {
    document.getElementById("parrafo").innerHTML = "privet";
    document.getElementById("parrafo").style.color = "yellow";
}
function cambiarEspanol() {
    document.getElementById("parrafo").innerHTML = "Hola";
    document.getElementById("parrafo").style.color = "red";
}
function cambiarIngles() {
    document.getElementById("parrafo").innerHTML = "Hello";
    document.getElementById("parrafo").style.color = "blue";
}
function cambiarRuso2() {
    console.log("Privet");
}
function cambiarEspanol2() {
    console.log("Hola");
}
function cambiarIngles2() {
    console.log("Hello");
}
function cambiarRuso3() {
    document.write("Privet");
}
function cambiarEspanol3() {
    document.write("Hola");
}
function cambiarIngles3() {
    document.write("Hello");
}
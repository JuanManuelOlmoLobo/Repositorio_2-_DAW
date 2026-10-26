var btnAnalizar = document.getElementById("btnAnalizar");
var txtEntrada = document.getElementById("txtEntrada");
var pantallaSalida = document.getElementById("pantallaSalida");

document.getElementById("btnAnalizar").addEventListener("click", () =>{

  let valorReal;
  let textoEntrada= txtEntrada.value;
  
  try {
    valorReal = JSON.parse(textoEntrada);
  } catch (error) {
    
    if (textoEntrada === "undefined") {
      valorReal = undefined;
    } else if (textoEntrada === "NaN") {
      valorReal = NaN;
    } else {
      valorReal = textoEntrada; // Cadena alfanumérica pura
    }
  }
  let numerica = Number(valorReal);
  let cadena = String(valorReal);
  let boleana = Boolean(valorReal);
  let real = typeof(valorReal);
  let alerta = "";
   if (textoEntrada === "0" && boleana ===true ) {
    alerta = '<span class="alerta">El valor es truthy</span>'
  }
  if(textoEntrada === "[]" && numerica === 0){
    alerta = '<span class="alerta">La matriz vacia coerciona el numero 0</span>';
  }
  let suma = valorReal + 10;
  let resta = valorReal - 10;
  let tsuma = typeof(suma);
  let tresta = typeof(resta);
  console.log("Suma:", suma, "Resta:", resta, "Tipo suma:", tsuma,"Tipo resta:", tresta);
  if (Number.isNaN(numerica) === true) {
    alerta += '<span class="alerta">"Conversión numérica fallida: No es un número válido"</span>';
  } 
  pantallaSalida.innerHTML=`
    <strong>Tipo original [typeof]:</strong> <span class="valor-resaltado">${real}</span><br>
    <strong>Como Número [Number(x)]:</strong> <span class="valor-resaltado">${numerica}</span> (typeof: ${typeof numerica})<br>
    <strong>Como Cadena [String(x)]:</strong> <span class="valor-resaltado">${cadena}</span><br>
    <strong>Como Booleano [Boolean(x)]:</strong> <span class="valor-resaltado">${boleana}</span><br>
    <strong>Operación x + 10:</strong> <span class="valor-resaltado">${suma}</span> (typeof: ${tsuma})<br>
    <strong>Operación x - 10:</strong> <span class="valor-resaltado">${resta}</span> (typeof: ${tresta})<br>
    <div style="margin-top: 10px;">${alerta}</div>
  `;
});
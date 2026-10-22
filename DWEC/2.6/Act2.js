function imprimirRombo() {
    for(let fila = 0; fila < 3; fila++){
        let linea = ""
        for(let espacios = 0; espacios < 2 - fila; espacios++ ){
            linea+= " ";
        }
        for(let asteriscos = 0; asteriscos < (fila * 2) + 1; asteriscos++){
            linea += "*";
        }
    console.log(linea);
    }
    for(let fila = 1; fila >= 0; fila--){
        let linea ="";
       for(let espacios = 0; espacios < 2 - fila; espacios++ ){
            linea+= " ";
        }
        for(let asteriscos = 0; asteriscos < (fila * 2) + 1; asteriscos++){
            linea += "*";
        }
    console.log(linea); 
    }
}

imprimirRombo();
// numero mayor de lista de numeros en un array 

let numeros =  [ 5, 10, 15, 60, 8];

let nuemroMaximo = 0; 
// mirar posiciones del array 
let tamaño = numeros.length

for (let i = 0; i < tamaño; i++) {
    if (nuemroMaximo < numeros[i]){
        nuemroMaximo = numeros[i]
    }
    
}

console.log(nuemroMaximo);

let maximo = Math.max(5, 10, 15, 60, 8)

console.log(maximo);
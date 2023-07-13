<?php
// buscador de ciudades  clima y ubicacion 
/* ojo */
# comentario 

// array  asociativo , compuesto por dos partes , con una sola posicion 
# clave + valor 
function recomendacion() {
    $clima =  array("Bogota" => "frio", "Monteria" => "calido",
"Medellin" => "templado");

$ubicacion = array("Guajira" => "norte", "Leticia" => "sur",
 "Santander" => "este", "Antioquia" => "oeste");

 $turismo = array("Santa Marta" => "mar",
  "Villavicencio" => "llanos", "Riohacha" => "desierto", "Quindio"=> "valle");

# echo muestra en texto el resultado de algo 
  switch ("clima","ubicacion") {
    case 'clima':
      echo array_search("frio",$clima);
        break;
    
    case "ubicacion":
    echo array_search("norte",$ubicacion);
        break;
}

}  

recomendacion();
?>
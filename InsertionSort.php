<?php
//algoritmo de InsertionSort
//sirve para Arrays medios 
// Define la función InsertionSort que toma un arreglo como parámetro
function InsertionSort($array){
     //longitud del arreglo
    $arrayLength = count($array);
   //aqui comenzamos ya el procedimiento
    // Recorre todo el arreglo
    for($i = 0; $i < $arrayLength; $i++){
        $val = $array[$i]; // Toma el valor actual del arreglo en la posición $i y lo almacena en la variable $val
        $j = $i-1; // Define una variable $j que comienza en la posición anterior a $i en el arreglo
        // Recorre hacia atrás en el arreglo mientras el valor actual sea mayor que $val
        while($j>=0 && $array[$j]>$val){
            $array[$j+1] = $array[$j]; // Desplaza el valor actual una posición hacia adelante en el arreglo
            $j--;// hace que disminjuya la variable $j para continuar el ciclo while
        }
        $array[$j+1] = $val;
        // Inserta el valor $val en la posición correcta en el arreglo
    }
    return $array;
    //retornamos el arreglo ordenado
}

// creamos un array desordenado
$array = array(4, 2, 8, 1, 5, 3, 9);
// Llama a la función InsertionSort para ordenar el array
$arrayOrdenado = InsertionSort($array);
// Imprime el array ordenado
foreach ($arrayOrdenado as $valor) {
    echo $valor . " ";
}
// este compara al revez toma un valor y lo ejecuta hacia atras

?>

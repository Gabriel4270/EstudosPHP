<?php
/*
Escreva uma função chamada encontrarPares que recebe um array de números inteiros como parâmetro.

A função deve retornar um novo array contendo apenas os números pares presentes no array original.

Considere que o array sempre terá pelo menos um elemento.
*/
$primeiroArray = [1,2,3,4,5,6,74,7,8,9,10];


function encontrarPares ($segundoArray){
    $resultado = [];
    for ($i=0; $i < count($segundoArray); $i++) { 
        if ($segundoArray[$i] %2 ==0){
            array_push($resultado, $segundoArray[$i]);
        }
    }
    return $resultado;
}
print_r (encontrarPares($primeiroArray));

?>
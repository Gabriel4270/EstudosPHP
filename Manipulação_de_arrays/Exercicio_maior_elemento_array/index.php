<?php
/*
Escreva uma função chamada maiorElemento que recebe um array de números como parâmetro.

A função deve retornar o maior elemento presente no array.

Considere que o array sempre terá pelo menos um elemento.
*/

$priemiroArray = [1,4,6,17,8,9];

function maiorElemento($segundoArray){

$maior = max($segundoArray);

return $maior;
}

echo maiorElemento($priemiroArray);
?>
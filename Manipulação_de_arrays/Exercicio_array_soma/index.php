<?php
/*
Escreva uma função chamada somaElementos que recebe um array de números como parâmetro.

A função deve retornar a soma de todos os elementos do array.

Considere que o array sempre terá pelo menos um elemento.


*/

    $arraylista=[1,2,6,9];
        
        
        function somaElementos($recebe){
        
        $soma = array_sum($recebe);
        return $soma;
        }

       echo somaElementos($arraylista);



?>
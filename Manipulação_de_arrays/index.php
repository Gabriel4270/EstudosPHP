<?php
/**
 * Crie um array com a funcao range de 10 a 45;
 * Imprima todos os numeros com uma soma de 6;
 *Se passar de 30 a soma, imprima tambem que o numero é muito alto ; 
*/

$array = range(10,45);
    for ($i=0; $i < count($array); $i++) { 
        $soma = $array[$i] + 6;
        if ($soma > 30) {
            echo "Numero é muito alto". "<br>";
            echo $soma. "<br>";
        }
        else {
            echo $soma. "<br>";
        }
    }
?>
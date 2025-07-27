<?php
/**
 * Crie um array multidimensional com 3 arrays que tem 4 elementos cada;
 * Imprima todos os elementos de cada um dos array;
 * Imprima tambem quando esta mudando de array;
*/

$multiArray = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12]
];
    for ($i=0; $i < count($multiArray); $i++) { 
        for ($j=0; $j < 4; $j++) { 
            echo $multiArray [$i][$j]."<br>";
        }
        if ($i+1 < count($multiArray)) {
            echo "mudando de array <br>";
        }
    }
?>
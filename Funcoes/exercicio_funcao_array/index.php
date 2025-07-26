<?php
/*
 * Crie uma funcao que receba um array de numeros;
 * Crie um novo array que receba apenas numeros maiores que 7;
 * Retorne este novo arraye imprima na tela;
*/
$arr = [];
for ($i=0; $i <= 20; $i++) { 
    array_push($arr, $i);

}


function arrayMaiorSete($lista=[]){
    $sete = [];
    for ($j=0; $j < count($lista); $j++) { 
        if ($lista[$j]>7) {
            array_push($sete, $lista[$j]);
        }
    }
    return $sete;

}

print_r ($arr);
print_r (arrayMaiorSete($arr));

?>
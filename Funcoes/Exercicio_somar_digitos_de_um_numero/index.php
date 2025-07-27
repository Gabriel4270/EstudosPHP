<?php
/*

Crie uma função chamada sumDigits que recebe um número inteiro como parâmetro.

A função deve calcular a soma dos dígitos desse número.

Retorne o valor da soma.

*/
function sumDigits($nuemro){
    $nuemroSTR = (String) $nuemro; //transformei em String para conseguir ver letra por letra  
    $tamanho = 0;
    for ($i=0; $i < strlen($nuemroSTR); $i++) { //strlen comando para ver letra por l;etra de String
        $tamanho += $nuemroSTR[$i]; //adicionando aqui o proprio PHP reconhece como numero e transforma o tamanho em INTEGER
    }
    //echo gettype($nuemroSTR)."<br>";
    //echo gettype($tamanho);

    return $tamanho;


}

echo sumDigits(18);
?>
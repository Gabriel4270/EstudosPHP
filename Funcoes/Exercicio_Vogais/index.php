<?php
/*
Crie uma função chamada countVowels que recebe uma string como parâmetro.

A função deve retornar a quantidade de vogais presentes na string.

Utilize uma estrutura de repetição para percorrer cada caractere da string.

Utilize uma variável para armazenar o contador de vogais.

Considere que as vogais são as letras "a", "e", "i", "o" e "u", em minúsculas ou maiúsculas.
*/

  function countVowels($palavra) {
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $contador = 0;

    for ($i = 0; $i < strlen($palavra); $i++) {
        if (in_array(strtolower($palavra[$i]), $vogais)) {
            $contador++;
        }
    }

    return $contador; 
}

echo "quantidade de vogais presentes sao: ".countVowels("Gabriel");
?>
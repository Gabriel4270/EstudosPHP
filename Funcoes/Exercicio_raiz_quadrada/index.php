<?php
/*
Crie uma função chamada isPrime que recebe um número inteiro positivo como parâmetro.

A função deve verificar se o número fornecido é um número primo.

Um número primo é aquele que é divisível apenas por 1 e por ele mesmo.

Caso o número fornecido seja menor que 2, retorne false.

Caso contrário, percorra os números de 2 até a raiz quadrada do número fornecido e verifique se algum deles é um divisor do número. 
Se encontrar um divisor, retorne false. Caso contrário, retorne true.
*/
function isprime($numeroPositivo){
    
    $raiz = sqrt($numeroPositivo);
    $raiz = (int)$raiz;  
            if($numeroPositivo < 2 ){
                return false;
            }
            for ($i=2; $i <=$raiz; $i++) { 
                if ($numeroPositivo % $i == 0) {
                   return false;
                } 
                             
            }
            return true;
            
}
$resultado = isprime(17);

echo $resultado? " sim": "Nao"; //if curto aqui, como e true e false na funcao nao preciso ser tao especifico onde caso seja true vai cair no primeiro que seria o "sim"

?>
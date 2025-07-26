<?php
/**
 * Crie uma funcao que verifica se um numero e par ou impar;
 * Se for par imprima uma mensagem;
 * Se for impar imprima uma mensagem;
 */

    function pareImpar($numero){

        if ($numero%2 == 0) {
            echo $numero ." e par <br>";
        }
        else {
            echo $numero . " e impar<br>";
        }
    }
         pareImpar(2);
         pareImpar(3);
?>
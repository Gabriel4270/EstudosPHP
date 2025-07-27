<?php
/**
 * Percorrra a string: O rato roeu a roupa do rei de Roma, a partir de um loop;
 * Imprima o numero de letras "a" desta string
*/

$frase = "o rAto roeu a roupa do rei de romA";
$contador = 0;
for ($i=0; $i < strlen($frase); $i++) { 
    if ( strtolower($frase[$i])== "a") {
        $contador++;
    }
    
}
    echo $contador;

?>
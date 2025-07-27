<?php
/**
 * Converta a seguinte string para array:
 * carro - navio - helicóptero - barco - jangada
*/

$palavras = "carro - navio - helicóptero - barco - jangada";

$palavrasModificadas = explode("-", $palavras);

print_r($palavrasModificadas); //conferindo

for ($i=0; $i < count($palavrasModificadas); $i++) { 
    echo $palavrasModificadas[$i]."<br>";
}
?>
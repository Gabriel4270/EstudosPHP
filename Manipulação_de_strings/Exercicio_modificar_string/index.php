<?php
/**
 * Na frase "Cade meu queijo? Ele estava aqui em cima"
 * Resgate apnas a palavra queijo;
*/
$frase = "Cade meu queijo? Ele estava aqui em cima";

$modificacao = strtoupper( substr($frase, 9,6));

echo $frase."<br>";
echo $modificacao;

?>
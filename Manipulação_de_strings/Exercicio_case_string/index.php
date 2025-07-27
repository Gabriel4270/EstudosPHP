<?php
/**
 * Transforme a string "este item esta em promoção";
 * Em ""Este item esta em "PROMOÇÃO";
 * Obs: voce pode separar as strings, mas nao pode escrever em caixa alta ou baixa manualmente, só com funções;
 * 
*/

$frase = "este item esta em promoção";
$procurar = "promoção";

$modificada = str_replace($procurar,"PROMOÇÃO", $frase);
$modificada = ucfirst($modificada);
echo $modificada;
?>
<?php
/**
 * Crie variaveis com caracteristicas de algum objeto ou animal;
 * Depois crie um array com compact com estas mesmas variaveis;
 * Faça um loop no array e imprima os valores;
*/

$marca = "mercedes";
$motor = 1.8;
$cor = "branca";
$cambio = "automatico";

$carro = compact("marca","motor", "cor","cambio");

foreach ($carro as $detalhes => $value) {
    echo "$detalhes : $value <br>";
}

?>
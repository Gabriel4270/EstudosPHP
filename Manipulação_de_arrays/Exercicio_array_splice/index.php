<?php
/**
 * Crie um array com os valores: batata, maçã, pera, feijção, arroz;
 * Remova pera e feijão
*/
$arrayy = ["batata", "maçã", "pera", "feijção", "arroz"];
$remove = array_splice( $arrayy,2,2);

print_r ($arrayy);
echo "<br>";
print_r ($remove);
?>
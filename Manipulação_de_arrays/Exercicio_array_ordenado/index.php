<?php
/**
 * Crie um array associativo com chaves com valor de nomes, e valores com uma pontuação;
 * Ordene os dados do maior para o menor;
 * Exiba uma lista, simulando um ranking, em HTML;
*/

$arrayAss = [
    "Gabriel" => 7,
    "Erika" => 15,
    "Braian" => 10,
    "Josiel" => 5
];

arsort($arrayAss);

?>

<h1>Ranging</h1>

<ol>
    <?php foreach ($arrayAss as $key => $value):?>
       <li><?=$key?>-> <?=$value?> pontos</li>
       <?php    endforeach;   ?>
</ol>
    
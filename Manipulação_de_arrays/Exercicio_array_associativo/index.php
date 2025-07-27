<?php
/**
 * Crie um array associativo com nomes e idades;
 * Imprima estes dados em uma tabela de HTML;
 * Dica: utilize as tags de elementos table
*/

$pessoas = [
    "Gabriel" => 21 ,
    "Erika" => 20 ,
    "Braian" => 22
];

?>


<table border="1">
    <tr>
    <th>Nome</th>
    <th>Idades</th>
    </tr>
        <?php foreach ($pessoas as $nome => $idade):?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
        <?php endforeach; ?>
</table>
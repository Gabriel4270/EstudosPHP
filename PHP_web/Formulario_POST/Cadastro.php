<?php
$marca = $_POST["marca"];
$valor = $_POST["valor"];
$opcionais = $_POST["opcionais"];

?>

<h1> a marca de seu carro é <?=$marca ?> e o valor de seu carro é R$ <?= $valor?> ps opcionais sao: 
<?php foreach ($opcionais as $opcao):?>
<?= $opcao;?> 
<?php endforeach;?></h1>
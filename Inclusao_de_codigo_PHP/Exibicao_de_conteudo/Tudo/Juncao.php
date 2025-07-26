<?php
    include_once "BackEnd.php"; 
?>

<h1>Seja bem vindo ao nosso site</h1>

<p>Pessoa <?=$nome?></p>       <!--usando o mesmo metodo de antes  no teste2-->

<h2>Produtos:</h2>

<ul>
    <?php foreach ($produtos as $produto):?> 
    <li>
        <?=$produto;?>  <!--usando o mesmo metodo de antes  no teste2-->
    </li>
    <?php endforeach?>
</ul>
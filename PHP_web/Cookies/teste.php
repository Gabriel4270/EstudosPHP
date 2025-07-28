
<?php


if(isset($_COOKIE["nome"])){ //ainda funciona pos os cookies estao salVos no navegador desde a primeira vez que foi executado 
    $nome = $_COOKIE["nome"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>teste</h1>
    <?php if($nome!=""):?>
        <p>seja bem vindo <?=$nome?></p>
        <?php endif ?>
</body>
</html>
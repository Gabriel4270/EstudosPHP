
<?php

setcookie("nome","Gabriel", time()+3600);

if(isset($_COOKIE["nome"])){
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
    <h1>ola  mundo</h1>
    <?php if($nome!=""):?>
        <p>seja bem vindo <?=$nome?></p>
        <?php endif ?>
</body>
</html>
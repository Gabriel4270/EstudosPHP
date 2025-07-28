<?php
    $validacao = [];
    print_r($_POST);
if (count($_POST)>0) {
    echo"TESTE";
    
    if ($_POST["nomeUsuario"] === "") {
        $validacao[] = "Digite um nome";
    }
    if ($_POST["email"] === "") {
        $validacao[] = "Digite um email";
    }
    if ($_POST["senha"] != $_POST["confirmaSenha"]) {
        $validacao[] = "as senhas devem ser iguais";
    }
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
    <?php
    if (count($validacao)):?>
    <ul>
        <?php foreach($validacao as $valida): ?>
            <li><?=$valida?></li>
            <?php endforeach?>
        </ul>
    <?php endif?>
    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nomeUsuario" placeholder="digite seu nome">
        </div>
        <div>
            <input type="text" name="email" placeholder="digite seu e-mail">
        </div>
        <div>
            <input type="password" name="senha" placeholder="digite sua senha">
        </div>
        <div>
            <input type="password" name="confirmaSenha" placeholder="digite sua senha">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>
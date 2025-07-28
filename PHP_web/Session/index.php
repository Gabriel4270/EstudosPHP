<?php
session_start();
$_SESSION["nome"] = "Gabriel"; //session mais segura e melhor, pois nao manda os dados para o navegador apenas o id onde os dados estao salvos no backend
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ola session</h1>
</body>
</html>
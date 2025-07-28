<?php

if (isset( $_GET["nomeUsuario"])&&isset($_GET["idadeUsuario"])) {
    $nome = $_GET["nomeUsuario"];
    $idade = $_GET["idadeUsuario"];
}
else{
    $nome = "padrao";
    $idade = "padrao";
}
?>

<h1>o seu nome é <?=$nome?> e tem <?=$idade?> anos. </h1>
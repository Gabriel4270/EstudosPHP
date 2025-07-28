<?php
print_r($_SERVER);//informações do servidor IMPORTANTES

// exemplos de uso bem simples
echo "<br>";
echo $_SERVER["MYSQL_HOME"];  //apenas vendo o nome de forma pratica
echo "<br>";
if ($_SERVER ["SERVER_NAME"] == "localhost") {  //verificando se o Server_name é o localhost
    echo "esta acessando o localhost";
}
?>
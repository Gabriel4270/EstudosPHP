<?php
/**
 * Crie uma classe Pessoa;
 * Crie a propriedade nome e idade;
 * E tambem um metodo andar;
*/

   Class Pessoa {
    Public $nome;
    Public $idade;

    function andar($caminhar){
        echo "caminhei $caminhar metros" ;
    }

   } 

   $Gabriel = new Pessoa;
    $Gabriel -> nome = "Gabriel";
    $Gabriel -> idade = 21;

    echo "o nome dele e $Gabriel->nome e sua idade e $Gabriel->idade <br>";
    $Gabriel ->andar(60);

?>
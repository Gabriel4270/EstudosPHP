<?php

/**                                                  ATIVIDADE
 * 
 * Crie um array com strings;
 * Utilize a funcao implode no array
 * Primeiro argumento ","
 * Segundo argumento: o seu array
 * Atribua a invocacao da funcao a uma variavel
 * Exiba o resultado 
*/

function Nomes(){
$lista = ["Erika", "Gabriel", "Braian", "Josiel"];
$resultado = implode(",", $lista);
echo $resultado;
}

Nomes();
?>
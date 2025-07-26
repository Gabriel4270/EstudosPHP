<?php
/**
 * Crie uma funcao que recebe um array de itens de supermercado;
 * Retorne este array em forma de string, separado em virgulas; * 
 */

$lista = ["carne","refri","bolo","arroz"];

function supermercado($list){
    $str = "itens: ";
 for ($i=0; $i < count($list); $i++) { 
     if ($i+1 == count($list) ) {
         $str .= " $list[$i]. ";
         return $str;
     }
     else {
         $str .= " $list[$i], ";
     }
}

}

echo supermercado($lista);

?>
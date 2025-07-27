<?php
/**
 * Crie uma funcao que receba caracteristicas de um ojeto como argumento (carro, sofa, cafeteira), em array associativo;
 * O array deve conter nome => preco;
 * Retorne apenas os itens de custam mais que R$10;
 * Imprima o retorno;
*/
$teste = ["carro" => 30000,"sofa" =>2000,"cafeteira"=>300, "manga"=>3];

function objetos($lista=[]){            

    $itens = [];
    foreach ($lista as $key => $value) {
        if ($value>10) {
            array_push($itens, $key);
        }
    }
    return $itens;



}
    print_r(objetos($teste));
?>
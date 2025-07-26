<?php
/**
 *Crie uma funcao chamada defineCorCarro;
 *Onde a um parametro chamado cor, com valor default de vermelha;
 *Retorne a cor do carro;
 *Imprima o retorno tanto com o parametro default, como tambem definindo a cor;
 *  */

 function defineCorCarro($cor = "vermelha"){
    return  "cor do carro ".$cor;

 }

 echo defineCorCarro();


?>
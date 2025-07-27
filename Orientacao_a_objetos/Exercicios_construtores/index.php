<?php
/**
 * Crie ums classe Cachorro com propriedades;
 * Inicie as propriedades via construtor;
 * Crie um metodo para exibir cada uma das propriedades que voce criou
*/


class Cachorro{
    public $raca;
    public $genero;
    public $racao;

    function descricao(){
        echo "cachorro da raca $this->raca do genero $this->genero e que come racao $this->racao";
    }

    function __construct($raca, $genero, $racao){
        $this->raca = $raca;
        $this->genero = $genero;
        $this->racao = $racao;
    }

    
}
$luna = new Cachorro ("poodle", "femea","pedigree");
echo $luna->descricao();

?>
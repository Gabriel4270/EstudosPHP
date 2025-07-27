<?php
/**
 * Crie uma classe Humano com algumas propriedades e o metodo falar;
 * Crie uma classe Professor que herda de humano, crie tambem as propriedades e metodos particulares desta classe
 * Exiba os valores das propriedades da classe pai e tambem utilize os metodos;
*/

class Humano{
    public $olhos = 2;
    public $nariz = 1;
    public $orelhas = 2;

    public function falar(){
        return "estou falando";
    }
}
class Professor extends Humano{
    public $certificado = 1;
    public $canetas = 4;
    public $cadernos = 2;

    public function aula(){
        return "escrever com $this->canetas canetas nos meus $this->cadernos cadernos";
    }

}

$Gabriel = new Humano;

echo $Gabriel->falar()."<br>";

echo "tenho $Gabriel->olhos olhos $Gabriel->nariz nariz e $Gabriel->orelhas orelhas<br>";

$Erika = new Professor;

echo $Erika->aula()."<br>";

echo "tenho $Erika->olhos olhos $Erika->nariz nariz e $Erika->orelhas orelhas<br>";
?>
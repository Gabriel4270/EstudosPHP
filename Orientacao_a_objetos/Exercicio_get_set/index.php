<?php
/**Crie uma classe Carro;
 * Crie algumas propriedades e tambem a propriedade velocidade_maxima;
 * Crie o metofo setVelocidadeMaxima, onde e possivel alterar a velocidade maxima do carro;
 * e tambem o getVelocidadeMaxima onde e possivel imprimir a velocidade do carro;
*/

class Carro{
   public $marca;
   public $cambio;
   private $velocidadeMaxima = 180; 

   function setVelocidadeMaxima($velocidadeMaxima){
       $this->velocidadeMaxima = $velocidadeMaxima;
    }
    function getVelocidadeMaxima(){
     echo $this->velocidadeMaxima;
 }
}
                     
$mercedes = new Carro;

$mercedes->marca = "mercedes";
$mercedes->cambio = "automatico";

echo "meu carro $mercedes->marca com cambio $mercedes->cambio com a velocidade maxima de ";
$mercedes->getVelocidadeMaxima();
echo "<br>";
$mercedes->setVelocidadeMaxima(250);
$mercedes->getVelocidadeMaxima();

?>
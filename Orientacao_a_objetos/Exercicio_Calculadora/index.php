<?php
/*
Crie uma classe chamada Calculadora que tenha os seguintes métodos:

somar(a, b): recebe dois números como parâmetros e retorna a soma deles.

subtrair(a, b): recebe dois números como parâmetros e retorna a subtração do segundo número do primeiro.

multiplicar(a, b): recebe dois números como parâmetros e retorna a multiplicação deles.

dividir(a, b): recebe dois números como parâmetros e retorna a divisão do primeiro número pelo segundo.


*/


class Calculadora{

    function Somar($a,$b){
        return $c = $a+$b;
        

    }
    function Subtrair($a,$b){
        return $c = $a-$b;

    }
    function Multiplicar($a,$b){
        return $c = $a*$b;

    }
    function Dividir($a,$b){
       return $c = $a/$b;

    }
}

$aluno = new Calculadora ();

echo $aluno->Somar(10,20);


?>
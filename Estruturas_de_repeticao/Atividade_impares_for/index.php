<?php
$listas= [];
$contador = 0;
for ($i=10; $i <=20; $i++) { 
    array_push($listas, $i);
    if ($listas[$contador]%2 !=0) {
        echo 'numeros impares: '.$listas[$contador]."<br>";
        
    }
    $contador++;
}

?>
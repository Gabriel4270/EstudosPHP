<?php

    class Cachorro {
        function latir(){
            echo "au au <br>";
        }
        function andar($m){
          echo "cachorro andou $m metros <br>";  
        }

    }

    $luna = new Cachorro;
    $luna ->andar(15);
    $luna ->latir();

?>
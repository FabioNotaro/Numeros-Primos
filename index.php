<?php 

    function primos($inicial, $final){
        $quantidade = 0;
        $primos = [];
        for($n = $inicial+1; $n < $final; $n++){
            $divisores = 0;
            for($d = $n; $d >= 1; $d--){
                if($n % $d == 0){
                    $divisores++;
                }
            }
            if($divisores == 2){
                $quantidade ++;
                array_push($primos, $n);
            }
        }
        echo "Encontrados ".$quantidade." números primos, são eles: ".implode(", ", $primos);
    }

    primos(10,100);
?>

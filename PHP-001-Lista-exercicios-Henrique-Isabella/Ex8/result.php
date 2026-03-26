<?php

    $n1 = $_POST["n1"];

    function soma($n1) {
        $soma = 0;
        
        for ($i = 0; $i <= $n1; $i++) {
        $soma += $i;
        }
    return $soma;
    }

    $resultado = soma($n1);

    echo "A soma de 0 até $n1 é $resultado";

?>
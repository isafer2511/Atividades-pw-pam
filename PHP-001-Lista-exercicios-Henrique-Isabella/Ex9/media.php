<?php

    $entrada = $_POST["v"]; 
    $v = explode(",", $entrada);
    
    function media($v) {
    $soma = 0;
    $qtd = count($v);

    for ($i = 0; $i < $qtd; $i++) {
        $soma += $v[$i];
    }

    return $soma / $qtd;
    }

    echo "A média aritmética é: " . media($v);

?>
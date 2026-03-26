<?php

    $a = $_POST["a"];

    $f1 = 0;
    $f2= 0;
    $f3 = 1;

    for($i = 1; $i <= $a; $i++){
        echo "$f1 ";
        $f1 = $f2 + $f3;
        $f3 = $f2;
        $f2 = $f1;
    }

?>
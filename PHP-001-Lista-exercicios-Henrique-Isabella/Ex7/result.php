<?php

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
    $n4 = $_POST["n4"];
    $n5 = $_POST["n5"];
    $n6 = $_POST["n6"];
    $n7 = $_POST["n7"];
    $n8 = $_POST["n8"];

    $num = [$n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8];
    $pos = [];
    $neg = [];

    foreach ($num as $n) {
        if ($n >=0) {
            $pos[] = $n;
        }
        else {
            $neg[] = $n;
        }
    }

    echo "<h3>Positivos:</h3>";
    foreach ($pos as $p) {
        echo $p . "<br>";
    }
    
    echo "<h3>Negativos:</h3>";
    foreach ($neg as $n) {
        echo $n . "<br>";
    }


?>
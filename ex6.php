<?php
    $mediaMinima = 7;
    $p1 = 2;
    $p2 = 1;
    $p3 = 3;
    $mediaFinal = ($p1 + $p2 + $p3)/3;

    if ($mediaFinal > $mediaMinima or $mediaFinal === $mediaMinima) {
    echo "Aprovado! Sua média é $mediaFinal.";
    } else {
        echo "Reprovado! Sua média é $mediaFinal.";
    }
?>
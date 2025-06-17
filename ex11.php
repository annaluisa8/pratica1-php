<?php
    $valores = [5, 10, 15, 20, 25];
    $somaValores = 0;
    foreach ($valores as $number) {
        $somaValores = $number + $somaValores;
    }
    echo "O valor total da compra é: " . $somaValores . "<br>";
?>
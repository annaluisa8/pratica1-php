<?php
    $valor = 100;
    $desconto = 10/100;
    $calculodesc = $valor * $desconto;
    $total = $valor - $calculodesc;

    echo "O valor original do produto é R$ $valor. <br>
    O desconto é de $desconto. <br>
    Portanto, o total a pagar é $total."
?>
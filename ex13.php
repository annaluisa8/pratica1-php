<?php 
    $produtos = ["arroz" => 5.00, "escova" => 2.00, "vassoura" => 10.00];
    foreach ($produtos as $key => $value) {
        echo " ". $key .": R$ ". $value ."<br> ";
    }
?>
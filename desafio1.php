<?php

require "Aluno.php";

$aluno = new Aluno();

$aluno->nome = "Maria Silva";
$aluno->idade = "15";
$aluno->matricula = "15533";
$aluno->nota1 = 10;
$aluno->nota2 = 8;
$aluno->peso1 = 2;
$aluno->peso2 = 3;

echo "NOME: " . $aluno->nome ."<br>IDADE: " . $aluno->idade ."<br>MATRICULA: ". $aluno->matricula . 
"<br>1ª NOTA: " . $aluno->nota1 ."<br>2ª NOTA: " . $aluno->nota2 . "<br>PESO 1: " . $aluno->peso1 .
 "<br>PESO 2: ". $aluno->peso2;

?>
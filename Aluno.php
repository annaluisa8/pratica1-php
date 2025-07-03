<?php
class Aluno{
    //ATRIBUTOS
    public $nome;
    public $idade;
    public $matricula;
    public $nota1;
    public $nota2;
    public $peso1;
    public $peso2;

    //MÉTODOS
    public function calcularMedia($media = ($peso1*$nota1)+($peso2*$nota2)/$peso1+$peso2){
        echo $media;
    }
    public function exibirDados($aluno){
        return $aluno;
    }
    public function verificarAprovacao($media){
        if ($media >= 7) {
    echo "Aprovado!";
    } else {
        echo "Reprovado!";
    }
    }
}

?>
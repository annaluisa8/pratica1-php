<?php 
    $alunos = ["Anna" =>  ["nota" => 10,
    ],
    "Maria" => ["nota" => 9,
    ],
    "Julia" => ["nota" => 8,]];
    $mediaTurma = 0;
    echo"<hr>";

    foreach ($alunos as $alunoNome => $alunoNota) {
        echo "Nome: ". $alunoNome . "<br>";
        echo "Nota: ". $alunoNota['nota']. "<br>";

        $mediaTurma += $alunoNota['nota']/3;
    }
    echo "Média da turma: " . number_format($mediaTurma, 2, ".", ",");
?>
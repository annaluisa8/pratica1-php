<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["nomeCliente"])) {
        $nome = $_POST["nomeCliente"];

        echo $nome . "<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["produto"])) {
        $selectProduto = $_POST["produto"];

        echo $selectProduto;
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["avaliarProduto"])) {
        $avaliar = $_POST["avaliarProduto"];

        echo "<br>" . $avaliar;
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["comentarioCliente"])) {
        $comment = $_POST["comentarioCliente"];

        echo "<br>" . $comment;
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>

<body>
    <form method="POST">
        <label for="nomeCliente">
            <p>Nome do Cliente:</p>
        </label>
        <input type="text" id="nomeCliente" name="nomeCliente" placeholder="Nome do Cliente">


        <label for="produto">
            <p>Escolha o Produto:</p>
            <select name="produto">
                <option value="Papel">Papel</option>
                <option value="Lápis" selected>Lápis</option>
                <option value="Caderno">Caderno</option>
            </select>
        </label>


        <p>Avalie o Produto (de 1 a 5 estrelas)!</p>
        <input type="radio" id="avaliarProduto" name="avaliarProduto" value="1 estrela">
        <input type="radio" id="avaliarProduto" name="avaliarProduto" value="2 estrelas">
        <input type="radio" id="avaliarProduto" name="avaliarProduto" value="3 estrelas">
        <input type="radio" id="avaliarProduto" name="avaliarProduto" value="4 estrelas">
        <input type="radio" id="avaliarProduto" name="avaliarProduto" value="5 estrelas">
        

        <label for="textarea">
            <p>Comentário:</p>
        </label>
        <textarea name="comentarioCliente" id="comentarioCliente">Escreva um comentário!</textarea>


        <button type="submit">Enviar</button>
</body>

</html>
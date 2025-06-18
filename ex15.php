<?php 
       if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["nomeProduto"])){
            $nome = $_POST["nomeProduto"];
            
            echo $nome . "<br>";
    }
}

          if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["categoriaProduto"])){
            $categoria = $_POST["categoriaProduto"];
            
            echo $categoria;
    }
}

        if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["precoProduto"])){
            $preco = $_POST["precoProduto"];
            
            echo "<br>" . $preco;
    }
}

        if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["qtdEstoque"])){
            $qtd = $_POST["qtdEstoque"];
            
            echo $qtd;
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
        <label for="nomeProduto">
            <p>Nome do Produto:</p>
        </label>
        <input type="text" id="nomeProduto" name="nomeProduto" placeholder="Nome do Produto">
        <label for="categoriaProduto">
            <p>Categoria do Produto:</p>
        </label>
        <input type="text" id="categoriaProduto" name="categoriaProduto" placeholder="Categoria do Produto">
        <label for="precoProduto">
            <p>Preço do Produto:</p>
        </label>
        <input type="text" id="precoProduto" name="precoProduto" placeholder="Preço do Produto">
        <label for="qtdEstoque">
            <p>Quantidade em estoque:</p>
        </label>
        <input type="number" id="qtdEstoque" name="qtdEstoque" placeholder="8">
        
        <button type="submit">Enviar</button>
</body>
</html>
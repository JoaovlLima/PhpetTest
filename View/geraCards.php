<?php
include_once('../Connection/ConexaoBanco.php');

$sql = "SELECT * FROM produto";
$result = $conexao->query($sql);
/* if (!$result) {
    die("Erro na consulta: " . $conexao->error);
} */
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cards de Produtos</title>
   
    <style>
        
        .card {
           
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            margin: 10px;
            width: 200px;
            float: left;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }
        
    </style>
</head>
<body>
    <h1>Produtos</h1>

    <div class="cards-container">
    
        <?php
        // Loop para exibir cada produto como um card
        while ($row = $result->fetch_assoc()) {
            echo "<div class='card'>";
            echo "<h2>" . $row['nome'] . "</h2>";
            echo "<p>Preço: R$" . $row['preco'] . "</p>";
            echo "<p>Descrição: " . $row['descricao'] . "</p>";
            echo "<img src='" . $row['img'] . "' alt='Imagem do Produto'>";
            echo "<p>Tag: " . $row['tag'] . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
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
        
        .cards-container {
            display: flex;
            flex-wrap: wrap;
        }
        
        .filter {
            margin-bottom: 15px;
           
            
        }

        .filter-options {
            display: flex;
            gap: 60px;
        }

        .filter-options label {
            display: inline-block;
            align-items: center;
            justify-content: center;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            cursor: pointer;
        }

   

  
    </style>
</head>
<body>
    <h1>Produtos</h1>
    
    <div class="filter">
        <label>Filtrar por:</label>
        <div class="filter-options">

        <label for="racao">Ração
        <input type="radio" id="racao" name="tag" value="racao" <?php echo (isset($_GET['tag']) && $_GET['tag'] === 'racao') ? 'checked' : ''; ?> onclick="filtrarProdutos('racao')">
            </label>

            <label for="petiscos">Petiscos
             <input type="radio" id="petiscos" name="tag" value="petiscos" <?php echo (isset($_GET['tag']) && $_GET['tag'] === 'petiscos') ? 'checked' : ''; ?> onclick="filtrarProdutos('petiscos')">
            </label>
            
            <label for="brinquedos">Brinquedos
             <input type="radio" id="brinquedos" name="tag" value="brinquedos" <?php echo (isset($_GET['tag']) && $_GET['tag'] === 'brinquedos') ? 'checked' : ''; ?> onclick="filtrarProdutos('brinquedos')">    
            </label>
             
            <label for="acessorios">Acessórios
             <input type="radio" id="acessorios" name="tag" value="acessorios" <?php echo (isset($_GET['tag']) && $_GET['tag'] === 'acessorios') ? 'checked' : ''; ?> onclick="filtrarProdutos('acessorios')">    
            </label>

            <label for="limpeza">Limpeza
             <input type="radio" id="limpeza" name="tag" value="limpeza" <?php echo (isset($_GET['tag']) && $_GET['tag'] === 'limpeza') ? 'checked' : ''; ?> onclick="filtrarProdutos('limpeza')">    
            </label>

            <button type="button" onclick="limparFiltro()">Limpar Filtro</button>

            <!-- Adicione outras opções de filtro conforme necessário -->
        </div>
    </div>

    <div class="cards-container">
    <?php
            include_once('../Connection/ConexaoBanco.php');

            // Inicializa a condição da cláusula WHERE
            $whereCondition = '';

            // Verifica se a tag foi enviada via GET e não está vazia
            if (isset($_GET['tag']) && $_GET['tag'] !== '') {
                // Obtém a tag selecionada
                $selectedTag = $_GET['tag'];

                // Cria a condição WHERE com base na tag selecionada
                $whereCondition = "WHERE tag = '$selectedTag'";
            }

            // Monta a query SQL com base na condição WHERE
            $sql = "SELECT * FROM produto $whereCondition";
            $result = $conexao->query($sql);

            // Exibe os cards de acordo com os resultados da consulta
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

    <script>
    function filtrarProdutos(tag) {
        // Redireciona para a mesma página com o parâmetro 'tag' atualizado
        window.location.href = 'geraCards.php?tag=' + tag;
    }
    function limparFiltro(){
        // Basicamente tirei o parâmetro 'tag' da pagina
   window.location.href = 'geraCards.php';
    }
</script>
</body>
</html>
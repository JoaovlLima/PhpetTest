<?php
if (!empty($_GET['id_perfilpet'])) {
    include_once('../Connection/ConexaoBanco.php');
    $id_perfilpet = $_GET['id_perfilpet'];

    $sqlSelect = "SELECT * FROM mydb.perfilpet WHERE id_perfilpet = $id_perfilpet";
    $result = $conexao->query($sqlSelect);
    print_r($result);
    if ($result->num_rows > 0) {

        while ($user_data = mysqli_fetch_assoc($result)) {
            $id_perfilpet = $user_data['id_perfilpet'];
            $nome = $user_data['nome'];
            $especie = $user_data['especie'];
            $raca = $user_data['raca'];
            $sexo = $user_data['sexo'];
            $anoNasc = $user_data['anoNasc'];
            $img = $user_data['peso'];
            $peso = $user_data['img'];
        }
    } else {
        echo 'id não encontrado';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./Connection/logicaCadPet.php" method="POST">
        <span> ID Pet: <?php echo $id_perfilpet; ?></span>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $nome?>"><br><br>

        <label for="especie">Espécie:</label>
        <br><br>

        <label for="raca">Raça:</label>
        <br><br>

        <label for="sexo">Sexo:</label>
        <select name="sexo" id="sexo">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select> <br><br>

        <label for="ano_nasc">Ano de Nascimento:</label>
        <input type="number" id="anoNasc" name="anoNasc" value="<?php echo $anoNasc?>"required><br><br>

        <label for="peso">Peso:</label>
        <input type="number" id="peso" name="peso" value="<?php echo $peso?>"required><br><br>

        <label for="img">Imagem do pet(URL):</label>
        <input type="text" id="img" name="img" value="<?php echo $img?>"required><br><br>



        <input type="submit" value="Cadastrar" name="submit">
    </form>
</body>

</html>
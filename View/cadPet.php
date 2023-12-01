<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="./Connection/logicaCadPet.php" method="POST">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br><br>
    
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
    <input type="number" id="anoNasc" name="anoNasc" required><br><br>
    
    <label for="peso">Peso:</label>
    <input type="number" id="peso" name="peso" required><br><br>

    <label for="img">Imagem do pet(URL):</label>
    <input type="text" id="img" name="img" required><br><br>

    
    
    <input type="submit" value="Cadastrar" name="submit">
</form>
</body>
</html>
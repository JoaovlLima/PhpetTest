<?php


if(isset($_POST['submit'])) {
    include_once("ConexaoBanco.php");

    $nome = $_POST['nome'];
    $especie_id = $_POST['especie'];
    $raca_id = $_POST['raca'];
    $sexo = $_POST['sexo'];
    $anoNasc = $_POST['anoNasc'];
    $peso = $_POST['peso'];
    $img = $_POST['img'];
  

    
    var_dump($_POST);

   // Consulta ao banco de dados para obter o nome da espécie com base no ID recebido
   $sqlEsp = "SELECT nome FROM especie WHERE id_especie = $especie_id";
   $resultEsp = $conexao->query($sqlEsp);

   if ($resultEsp && $resultEsp->num_rows > 0) {
       $rowEsp = $resultEsp->fetch_assoc();
       $nome_especie = $rowEsp['nome']; // Nome da espécie correspondente ao ID
   }
      
   // Consulta ao banco de dados para obter o nome da raca com base no ID recebido
   $sqlEsp = "SELECT nome FROM raca WHERE id_raca = $raca_id";
   $resultEsp = $conexao->query($sqlEsp);

   if ($resultEsp && $resultEsp->num_rows > 0) {
       $rowEsp = $resultEsp->fetch_assoc();
       $nome_raca = $rowEsp['nome']; // Nome da raca correspondente ao ID
   }
            $sqlInsert = "INSERT INTO perfilpet (nome, especie, raca, sexo, ano_Nasc, peso, img) 
              VALUES ('$nome', '$nome_especie', '$nome_raca', '$sexo', '$anoNasc', '$peso', '$img')";
            $resultInsert = mysqli_query($conexao, $sqlInsert);

            if($resultInsert) {
                echo "Pet registrado com sucesso";
            } else {
                echo "Erro ao registrar: " . mysqli_error($conexao);
            }
       
    

    // Fechar conexão após o uso
    mysqli_close($conexao);
} else {
    echo "Erro";
}
?>
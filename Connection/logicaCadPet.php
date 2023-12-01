<?php


if(isset($_POST['submit'])) {
    include_once("ConexaoBanco.php");

    $nome = $_POST['nome'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $sexo = $_POST['sexo'];
    $anoNasc = $_POST['anoNasc'];
    $peso = $_POST['peso'];
    $img = $_POST['img'];
  

    
    var_dump($_POST);

   
      
            $sqlInsert = "INSERT INTO perfilpet (nome, especie, raca, sexo, anoNasc, peso, img) 
              VALUES ('$nome', '$especie', '$raca', '$sexo', '$anoNasc', '$peso', '$img')";
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
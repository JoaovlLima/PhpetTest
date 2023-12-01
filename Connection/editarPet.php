<?php
include_once('ConexaoBanco.php');

if((isset($_POST['Atualizar'])))
{
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $sexo = $_POST['sexo'];
    $anoNasc = $_POST['anoNasc'];
    $img = $_POST['img'];
    $peso = $_POST['peso'];
   
   

    $sqlUpdate = "UPDATE mydb.perfilpet SET nome='$nome',especie='$especie',raca='$raca',sexo='$sexo',anoNasc='$anoNasc',img='$img',peso='$peso
    WHERE id_perfilpet = '$id_perfilpet'";

if ($conexao->query($sqlUpdate) === TRUE) {
    echo "Registro atualizado com sucesso";
} else {
    echo "Erro ao atualizar o registro: " . $conexao->error;
}

}
header('Location: ../View/consultPet.php')
?>
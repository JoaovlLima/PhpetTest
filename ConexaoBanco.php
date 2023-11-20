<?php
$dbHost = 'LocalHost';
$dbUsername = 'root';
$dbPassword = '1234';
$dbName = 'mydb';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno){
echo "Erro";
}else{
    echo "Conectado Com Sucesso";
}  

?>
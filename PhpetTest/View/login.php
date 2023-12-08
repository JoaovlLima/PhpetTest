<?php
session_start();
 /* print_r([$_REQUEST]); */

if(isset($_POST['submit'])&& !empty($_POST['email'])&&!empty($_POST['senha'])){
include_once('../Connection/ConexaoBanco.php');

$emailLog = $_POST['email'];
$senhaLog = $_POST['senha'];

$sql = "SELECT * FROM usuario WHERE email = '$emailLog' and senha = '$senhaLog'";
$result = $conexao->query($sql);
if(mysqli_num_rows($result)<1){
   unset($_SESSION['email']);
   unset($_SESSION['senha']); 

   $emailExiste = false;
   header('Location: cadastroTest.html');
}else{
    $_SESSION['email'] = $emailLog;
    $_SESSION['senha'] = $senhaLog;


}


}else{
    
}

/* if(isset($_POST['submit'])){
$email = $_POST["email"];
$iniciais = '';
if (empty($email)) {
    $iniciais = "USU";
} else {
    // Obtém as duas primeiras letras do email
    $iniciais = substr($email, 0, 2);
}
} */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container" id="containerLogin">
        
       
        <h2>Login</h2>
            <form action="../Connection/loginLogica.php" method="POST">
              
           <br>
        <input type="text" placeholder="E-mail" id="email" name="email" required>
           <br><br>   
             
        <input type="password" placeholder="Senha" id="senha"  name="senha" required>
              
             <br><br>
        <input type="submit" value="Entrar" name="submit" id="submit">
        </form>
        <a href="../View/cadastroTest.html" class="cad">Cadastrar -se </a>
  
        </div>
</body>
</html>
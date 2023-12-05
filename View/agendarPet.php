<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="/Solo/Css/header.css">
</head>
<body>
    <nav>
        <div class="header1">
          <a  href=""><img id="logo" src="/Solo/Img/Logo.png" alt="Logo"></a>
          <a  href=""><img id="telefone" src="/Solo/Img/telefone.png" alt="Contato"></a>
          <a  href=""><img id="carrinhoCompra" src="/Solo/Img/carrinhoCompra.png" alt="Carrinho de Compra"></a>
          <a  href=""><img id="usuario" src="/Solo/Img/user.png" alt="Usuário"></a>
          <div class="menuHb">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
          </div>
        </div>
        <div class="header2">
        <a href=""><p>Produtos</p></a>
        <a href=""><p>Veterináro</p></a>
        <a href=""><p>Banho</p></a>
        <a href=""><p>Contato</p></a>
        <a href=""><p>Sobre Nós</p></a>
        </div>
    </nav>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');

* {
    margin: 0;
}
body{
    background-color:#FFF9F0;
}

/* ------ Header ---------- */
nav {
    width: 100%;
    height: 11vw;
}

.header1 {
   height: 7vw;
   width: 100%;
   background-color: #EEE3E3;
}

.header2 {
    height: 3.5vw;
    width: 100%;
    background-color: #7A1858;
    text-decoration: none;
}

#logo {
   position: relative;
   height: 7vw;
   width: 7vw;
   left: 45%;
}

#telefone {
    position: relative;
    height: 2.5vw;
    width: 2.5vw;
    left: 74%;
    bottom: 20%;
}

#telefone:hover {
    transform: scale(1.20);
    transition: 0.3s;
}

#carrinhoCompra {
    position: relative;
    height: 2.5vw;
    width: 2.5vw;
    left: 78%;
    bottom: 20%;
}

#carrinhoCompra:hover {
    transform: scale(1.20);
    transition: 0.3s;
}

#usuario {
    position: relative;
    height: 2.5vw;
    width: 2.5vw;
    left: 82%;
    bottom: 20%;
}

#usuario:hover {
    transform: scale(1.20);
    transition: 0.3s;
}

.header2 {
display: flex;
justify-content: space-around;
}

.header2 p{
    color: white;
    font-family: 'Inter', sans-serif;
    font-size: 1.15vw;
    text-decoration: none;
}

.header2 a{
    text-decoration: none;
    position: relative;
    top: 30%;
}

.header2 p:hover {
    transform: scale(1.20);
    transition: 0.3s;
}

.header2 p:hover {
    transform: scale(1.20);
    transition: 0.3s;
}

.menuHb {

}
</style>

<h1>MEUS PETS</h1>


</body>
</html>
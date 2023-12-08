let petSelecionado = null;

function selecionarPet(elemento) {
    const continuar = document.getElementById("continuar");
    const imagemPet = elemento.querySelector(".imagemPet");
    

    if (petSelecionado !== null) {
        // Remove a classe 'selected' do elemento previamente selecionado
        petSelecionado.querySelector(".imagemPet").classList.remove("selected");
    }

    // Adiciona a classe 'selected' ao novo elemento selecionado
    imagemPet.classList.add("selected");

    // Armazena a referência do novo elemento selecionado
    petSelecionado = elemento;

    // Habilita o botão
    continuar.disabled = false;
    continuar.style.cursor = "pointer";
    continuar.style.backgroundColor = "#7A1858";
    continuar.style.color = "white";
    
    const nomePet = elemento.querySelector("h2");
        // Imprime o texto do h2
        if(nomePet!==null){
        console.log(nomePet.textContent);
       /*  window.location.href = 'pagina.php?pet=' + encodeURIComponent(nomePet); */
        }else{console.log("erro")}


}

function prosseguir() {
    if (petSelecionado !== null) {
        // Exibe a próxima seção (SELEÇÃO REALIZADA) e oculta a seção MEUS PETS
        document.getElementById("secaoMeusPets").style.display = "none";
        document.getElementById("secaoSelecaoRealizada").style.display = "block";

        // Exibe o pet selecionado na próxima seção (SELEÇÃO REALIZADA)
        const nomePet = document.getElementById("nomePet");
        const petNome = petSelecionado.querySelector("h2").textContent;
        nomePet.innerText = petNome;
        
        // Você pode fazer outras ações necessárias aqui antes de mostrar a próxima seção
    } else {
        // Caso nenhum pet seja selecionado, mostre uma mensagem de erro ou aviso ao usuário
        alert("Selecione um pet antes de prosseguir.");
    }
};

function voltar() {
    // Exibe novamente a seção MEUS PETS e oculta a seção SELEÇÃO REALIZADA
    document.getElementById("secaoMeusPets").style.display = "block";
    document.getElementById("secaoSelecaoRealizada").style.display = "none";
}; 

 
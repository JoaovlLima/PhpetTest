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


};

 
const openModalButton = document.querySelector("#open-modal");
const modal = document.querySelector("#modal");
const fade = document.querySelector("#fade");

//fechando o modal
const toggleModal = () =>{
    [modal,fade].forEach((el) => el.classList.toggle("hide"));
    
}

//quando clicar no botao chamar esses elementos
[openModalButton, fade].forEach((el) =>{
    el.addEventListener("click", () => toggleModal());
})

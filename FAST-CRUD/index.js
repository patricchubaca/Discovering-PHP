const tbody = document.querySelector("tbody");

const cadForm = document.getElementById("cad-usuario");

    const listarUsuarios = async () => {
        const dados = await fetch("./list.php");
        const resposta = await dados.text();
        tbody.innerHTML = resposta ; 
    }

    listarUsuarios();

cadForm.addEventListener("submit", async (event) => {

    event.preventDefault(); 

    const dadosForm = new FormData(cadForm);
    dadosForm.append("add", 1);

    const dados = await fetch("./save.php", {
        method:"POST",
        body:dadosForm,

    });
    console.log("passou")
}); 
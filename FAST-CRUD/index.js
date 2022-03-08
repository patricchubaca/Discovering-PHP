const tbody = document.querySelector("tbody");
const cadForm = document.getElementById("cad-usuario");
const msgAlerta = document.getElementById("msgAlerta");
const msgAlertaErroCad = document.getElementById("msgAlertaErroCad");
const cadModal = new bootstrap.Modal(document.getElementById("cadUsuarioModal"));


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

    document.getElementById("cad-usuario-btn").value = "Salvando...";
    

    const dados = await fetch("./save.php", {
        method:"POST",
        body:dadosForm,
        

    });
    const resposta = await dados.json();

    console.log(resposta);
    
    if(resposta['erro']){
        console.log("cadastro n efetuado");

        msgAlertaErroCad.innerHTML = resposta['msg'];

    }else{
        msgAlerta.innerHTML = resposta['msg'];
        cadForm.reset();
        //cadModal.hide();  
        listarUsuarios();
        
    
    }
    document.getElementById("cad-usuario-btn").value = "Cadastrar";
});

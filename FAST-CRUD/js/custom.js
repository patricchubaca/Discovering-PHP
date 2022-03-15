const tbody = document.querySelector(".listar-usuarios");
const cadForm = document.getElementById("cad-usuario-form");
const msgAlertaErroCad = document.getElementById("msgAlertaErroCad");
const msgAlerta = document.getElementById("msgAlerta");
const cadModal = new bootstrap.Modal(document.getElementById("cadUsuarioModal"));
const editForm = document.getElementById("edit-usuario-form");

const listarUsuarios = async (pagina) => {
    const dados = await fetch("./list.php?pagina=" + pagina);
    const resposta = await dados.text();
    tbody.innerHTML = resposta;
}

listarUsuarios(1);

cadForm.addEventListener("submit", async (e) => {
    e.preventDefault();

    const dadosForm = new FormData(cadForm);


    dadosForm.append("add", 1);

    document.getElementById("cad-usuario-btn").value = "Salvando...";

    const dados = await fetch("cadastrar.php", {
        method: "POST",
        body: dadosForm,
    });

    const resposta = await dados.json();

    if (resposta['erro']) {
        msgAlertaErroCad.innerHTML = resposta['msg'];
    } else {
        msgAlerta.innerHTML = resposta['msg'];
        cadForm.reset();
        cadModal.hide();
        listarUsuarios(1);
    }
    document.getElementById("cad-usuario-btn").value = "Cadastrar";
});

async function visualisarUsuario(id) {

    const dados = await fetch('visualizar.php?id= ' + id);
    const resposta = await dados.json();

    if (resposta['erro']) {
        msgAlerta.innerHTML = resposta['msg'];
    } else {

        const editModal = new bootstrap.Modal(document.getElementById("editUsuarioModal"));
        editModal.show();
        document.getElementById("editid").value = resposta['dados'].id;
        document.getElementById("editnome").value =  resposta['dados'].nome;
        document.getElementById("editemail").value =  resposta['dados'].email;
    }
}
async function deletarUsuario(id) {
    const dados = await fetch('delete.php?id= ' + id);
    const resposta = dados.json();

    listarUsuarios(1)
}


editForm.addEventListener("submit", async (e) => {
    e.preventDefault();

    const dadosForm = new FormData(editForm);

    console.log(dadosForm);

    for(var dadosFormEdit of dadosForm.entries()){
        console.log(dadosFormEdit[0] + "," + dadosFormEdit[1]);  
    }; 


    dadosForm.append("add", 1);

    document.getElementById("cad-usuario-btn").value = "Salvando...";

    const dados = await fetch("editar.php", {
        method: "POST",
        body: dadosForm
    });

    const resposta = await dados.json();
    console.log(resposta)
    if (resposta['erro']) {
        msgAlertaErroCad.innerHTML = resposta['msg'];
    } else {
        msgAlerta.innerHTML = resposta['msg'];
        cadForm.reset();
        cadModal.hide();
        listarUsuarios(1);
    }
    document.getElementById("cad-usuario-btn").value = "Cadastrar";
});
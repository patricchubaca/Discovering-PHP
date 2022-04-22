var buscarPorNome = document.querySelector("input");

buscarPorNome.addEventListener("input" , async (event) => {

	event.preventDefault();

	let dadosForm = this.value;

        const dados = await fetch("dashboard/index", {
        method: "POST",
        body: dadosForm,
    });

    const resposta = await dados.json();




});
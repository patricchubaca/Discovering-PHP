var buscarPorNome = document.querySelector("input");

buscarPorNome.addEventListener("input" , async (event) => {

	event.preventDefault();

	let dadosForm = this.value;

    const dados = await fetch('RetornoBusca/index');

    const resposta = await dados.json();

    console.log(resposta);




});
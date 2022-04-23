var buscarPorNome = document.querySelector("input");

buscarPorNome.addEventListener("input" , async (event) => {

	let dadosForm = buscarPorNome.value;

    const dados = await fetch('./RetornoBusca/buscaNome/'+ dadosForm);

    const resposta = await dados.json();

    console.log(resposta);




});
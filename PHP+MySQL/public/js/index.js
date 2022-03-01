var campos = [
    document.querySelector('#titulo'),
    document.querySelector('#conteudo'),
    document.querySelector('#cargaHoraria')
];
console.log(campos)

document.querySelector('.form').addEventListener('submit', function(event){

    event.preventDefault(); 
    alert("Funcionando");

});
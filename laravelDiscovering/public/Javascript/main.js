  const sigButton = document.querySelector('#modFl');
  const modal = document.querySelector('.modal-background');
  const modalBg = document.querySelector('.modal');


  $('#modal').click(function(){
      $('.modal').addClass('is-active');
  });

async function visualisarUsuario(id){

   const dados = await fetch('materiais/' + id);
   const res = await dados.json();

}

async function deletarUsuario(id){

   const dados = await fetch('delete/' + id);
   const res = await dados.json();

    location.reload(true);
} 


async function atualizaLista(){

   const dados = await fetch('/api/index');
   const res = await dados.json();
}

$(document).ready(function() {
   $('#tableUsuarios').DataTable( {
    "ajax": "/api/index",
    "columns": [
    {"data":"sigla" },
    {"data":"tipo" },
    {"data":"formula" },
    {"data":"codigo_sped" },
    {"data":"button" }
    ]
 } );
} );


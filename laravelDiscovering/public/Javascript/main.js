
 
const formNewUser = document.getElementById("form-cad-usuario");

if(formNewUser){
      formNewUser.addEventListener("submit", async(e) => {
      
      e.preventDefault();

      var id = document.getElementById("editid").value;
    
      const dadosForm = new FormData(formNewUser);

      const dados = await fetch('materiais/'+ id,{
         method:"POST",
         body: dadosForm
      });

      location.reload(true);
   });
}

async function visualisarUsuario(id){

   const dados = await fetch('materiais/' + id);
   const res = await dados.json();

    document.getElementById("editid").value = res['id'];
    document.getElementById("editsigla").value = res['sigla'];
    document.getElementById("edittipo").value = res['tipo'];
    document.getElementById("editformula").value = res['formula'];
    document.getElementById("editcodigo_sped").value = res['codigo_sped'];

}

async function deletarUsuario(id){

   const dados = await fetch('delete/' + id);
   const res = await dados.json();

    if (res  " "){
      location.reload(true);
    } 
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


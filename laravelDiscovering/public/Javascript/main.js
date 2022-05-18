  
   async function visualisarUsuario(id){

      const dados = await fetch('materiais/' + id);
      const res = await dados.json();

      console.log(res);
}



  async function deletarUsuario(id){

   const dados = await fetch('delete/' + id);
   const res = await dados.json();
} 


async function atualizaLista(){

   const dados = await fetch('/api/index');
   const res = await dados.json();
}


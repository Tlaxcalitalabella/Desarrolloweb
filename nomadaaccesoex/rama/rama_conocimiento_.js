
let globalId;

function obtenId(identifier)
{
    //console.log(globalId);
    globalId = identifier;
    return globalId;
}   



//      var itemId = document.getElementById("btnopcion");
//    id =  itemId.addEventListener("click",);
// console.log(id);

function eliminar1()
{
  console.log(globalId);
  fetch('./delete.php',{
    'method':'DELETE',
    'body': {
      'action':'eliminar',
    }

  })
  .then( console.log('aiuda'));
}

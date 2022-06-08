let btn = document.createElement("button");
btn.innerHTML = "Editar";
document.body.appendChild(btn);
let btn1 = document.createElement("button");
btn1.innerHTML = "Eliminar";
document.body.appendChild(btn1);
function id(){
    let id = <?php echo $ramas->NID_RAMA_CONOCIMIENTO ?>;
    return id; }
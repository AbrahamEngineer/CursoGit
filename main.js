window.addEventListener('load',(e)=>{
    const mensaje = document.querySelector('.mensaje');

    const fragmento = document.createDocumentFragment();
    
    const parrafo = document.createElement("P");
    const textNode = document.createTextNode("Mensaje de Bienveneido");

    parrafo.appendChild(textNode);
    fragmento.appendChild(parrafo);
    mensaje.appendChild(fragmento);

    saludo();
});


function saludo(){
    alert("hola mundo");
}
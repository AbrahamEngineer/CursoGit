window.addEventListener('load',(e)=>{
    const mensaje = document.querySelector('.mensaje');

    const fragmento = document.createDocumentFragment();
    
    const parrafo = document.createElement("P");
    const textNode = document.createTextNode("Mensaje de Bienveneido");

    parrafo.appendChild(textNode);
    fragmento.appendChild(parrafo);
    mensaje.appendChild(fragmento);
    presionar();
});


function presionar(){
    const link = document.getElementById('link');
    link.addEventListener('click',(e)=>{
        window.location.href = "https://www.youtube.com/watch?v=ZtFPexrxt4g";
    });
    
}
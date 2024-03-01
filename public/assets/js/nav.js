var boton = document.getElementById("collapse");
var header = document.getElementById("header");
var collpased = true;

boton.addEventListener('click', function(){
    if (collpased){
        header.setAttribute("class", "visible");
    } else{
        header.setAttribute("class", "");
    }
    collpased = !collpased;
});
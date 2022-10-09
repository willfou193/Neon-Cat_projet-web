//Script du menu Info situé en bas à gauche de chaque pages
var menu= document.getElementById("contenant__footer");
var bulles = document.getElementById("contenant__footer").getElementsByClassName('footer__bulle');
let activerMenu = false;

menu.addEventListener("click",activerDesactiverMenu);
function activerDesactiverMenu(){
    if(activerMenu == true){
        activerMenu = false;
        var i;
        for (i = 0; i < bulles.length; i++) {
            bulles[i].style.display = 'none';
        }
        console.log("je desactive");
    } else {
        activerMenu = true;
        var i;
        for (i = 0; i < bulles.length; i++) {
            bulles[i].style.display = 'block';
        }
        console.log("j'active");
    }
}

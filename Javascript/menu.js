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
//Script du menu burger dans le header
var menuBg= document.getElementById("burger__contenant");
var menuBgBackground= document.getElementById("burger__fondActif");
let activerMenuBg = false;

menuBg.addEventListener("click", activerDesactiverMenuBg)
function activerDesactiverMenuBg(){
    if(activerMenuBg == true){
        activerMenuBg = false;
        menuBgBackground.style.display = 'none';
        console.log("je desactive");
    } else {
        activerMenuBg = true;
        menuBgBackground.style.display = 'block';
        console.log("j'active");
    }
}
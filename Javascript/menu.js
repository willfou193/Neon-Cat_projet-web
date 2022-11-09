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

// Script bouton Avant / arrière carrousel
var boutonDroit = document.getElementById("bouton__droit");
var boutonGauche = document.getElementById("bouton__gauche");
var boutonRadio = document.getElementsByClassName("inputProf");
var itemProf = document.getElementsByClassName("item prof");
let index = 2;
let indexPre = 1;
let indexPost = 3;
var viewPortMax = window.matchMedia("(max-wdith: 767px)");
boutonDroit.addEventListener("click", carrouselPlus)
boutonGauche.addEventListener("click", carrouselMinus)
function carrouselMinus(){
    if(index <= 1){
        index = boutonRadio.length+1;
    }
    if(indexPre <= 1){
        indexPre = boutonRadio.length+1;
    }
    if(indexPost <= 1){
        indexPost = boutonRadio.length+1;
    }
    index -= 1;
    indexPre -= 1;
    indexPost -= 1;
    boutonRadio[index-1].checked = true;
    
    if (window.innerWidth < 769) {
        itemProf[index-1].style.transform = "translateX(calc(-90vw * var(--r)))scale(1)";
        itemProf[indexPre-1].style.transform = "translateX(calc(-90vw * var(--r)))scale(0.6)";
        itemProf[indexPost-1].style.transform = "translateX(calc(-90vw * var(--r)))scale(0.6)";
    }
    if(window.innerWidth > 769){
        itemProf[index-1].style.transform = "translateX(calc(-31vw * var(--r)))scale(1)";
        itemProf[indexPre-1].style.transform = "translateX(calc(-31vw * var(--r)))scale(0.6)";
        itemProf[indexPost-1].style.transform = "translateX(calc(-31vw * var(--r)))scale(0.6)";
    }
    
}
function carrouselPlus(){
    if(index >= boutonRadio.length){
        index = 0;
    }
    
    if(indexPost >= boutonRadio.length){
        indexPost = 0;
    }
    if(indexPre >= boutonRadio.length){
        indexPre = 0;
    }
    index += 1;
    indexPre += 1;
    indexPost += 1;
    console.log(itemProf);
    boutonRadio[index-1].checked = true
    console.log(itemProf[indexPre-1])
    console.log(itemProf[indexPost-1])
    if (window.innerWidth < 769) {
        console.log("plus bas");
        itemProf[index-1].style.transform = "translateX(calc(-90vw * var(--r)))scale(1)";
        itemProf[indexPre-1].style.transform = "translateX(calc(-90vw * var(--r)))scale(0.6)";
        itemProf[indexPost-1].style.transform = "translateX(calc(-90vw * var(--r)))scale(0.6)";
    }
    if(window.innerWidth > 769){
        itemProf[index-1].style.transform = "translateX(calc(-31vw * var(--r)))scale(1)";
        itemProf[indexPre-1].style.transform = "translateX(calc(-31vw * var(--r)))scale(0.6)";
        itemProf[indexPost-1].style.transform = "translateX(calc(-31vw * var(--r)))scale(0.6)";
    }
    
}
window.onresize = function() {         
    if (window.innerWidth < 769) {
        itemProf[index-1].style.transform = "translateX(calc(-90vw * var(--r)))scale(1)";
        itemProf[indexPre-1].style.transform = "translateX(calc(-90vw * var(--r)))scale(0.6)";
        itemProf[indexPost-1].style.transform = "translateX(calc(-90vw * var(--r)))scale(0.6)";
    }
    if(window.innerWidth > 769){
        itemProf[index-1].style.transform = "translateX(calc(-31vw * var(--r)))scale(1)";
        itemProf[indexPre-1].style.transform = "translateX(calc(-31vw * var(--r)))scale(0.6)";
        itemProf[indexPost-1].style.transform = "translateX(calc(-31vw * var(--r)))scale(0.6)";
    }
};
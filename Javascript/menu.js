//==================================================================================
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
    } else {
        activerMenu = true;
        var i;
        for (i = 0; i < bulles.length; i++) {
            bulles[i].style.display = 'block';
        }
    }
}
// Script bouton Avant / arrière carrousel
var boutonDroit = document.getElementById("bouton__droit");
var boutonGauche = document.getElementById("bouton__gauche");
var boutonRadio = document.getElementsByClassName("inputProf");
const itemProf = document.getElementsByClassName("item");
let index = 2;
let indexPre = 1;
let indexPost = 3;
var viewPortMax = window.matchMedia("(max-wdith: 767px)");
boutonDroit.addEventListener("click", carrouselPlus)
boutonGauche.addEventListener("click", carrouselMinus)
// ----------------------------------------------------------------------------------------
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
    
    if (window.innerWidth < 767) {
        Array.from(document.getElementsByClassName("item"), e => e.style.transform = "translateX(calc(-90vw * var(--r)))scale(0.6)");
        for(i = 0; i < index.length; i++){
            console.log(i);
        }
        itemProf[index-1].style.transform = "translateX(calc(-90vw * var(--r)))scale(1)";
    }
    if(window.innerWidth > 767){
        Array.from(document.getElementsByClassName("item"), e => e.style.transform = "translateX(calc(-31vw * var(--r)))scale(0.6)");
        for(i = 0; i < index.length; i++){
            console.log(i);
            //var paragraph = itemProf[i].getElementsByTagName('p')[1].style.display = "none";
            //console.log(paragraph);
        }
        itemProf[index-1].style.transform = "translateX(calc(-31vw * var(--r)))scale(1)";
    }
    
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
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
    boutonRadio[index-1].checked = true
    if (window.innerWidth < 767) {
        console.log("plus bas");
        Array.from(document.getElementsByClassName("item"), e => e.style.transform = "translateX(calc(-90vw * var(--r)))scale(0.6)");  
        itemProf[index-1].style.transform = "translateX(calc(-90vw * var(--r)))scale(1)";
    }
    if(window.innerWidth > 767){
        Array.from(document.getElementsByClassName("item"), e => e.style.transform = "translateX(calc(-31vw * var(--r)))scale(0.6)");  
        itemProf[index-1].style.transform = "translateX(calc(-31vw * var(--r)))scale(1)";
    }
    
}
window.onresize = function() {         
    if (window.innerWidth < 767) {
        Array.from(document.getElementsByClassName("item"), e => e.style.transform = "translateX(calc(-90vw * var(--r)))scale(0.6)");  
        itemProf[index-1].style.transform = "translateX(calc(-90vw * var(--r)))scale(1)";
    }
    if(window.innerWidth > 767){
        Array.from(document.getElementsByClassName("item"), e => e.style.transform = "translateX(calc(-31vw * var(--r)))scale(0.6)");  
        itemProf[index-1].style.transform = "translateX(calc(-31vw * var(--r)))scale(1)";
    }
};

//==================================================================================
//Afficher boite modale des cours
let boiteModAllumee = true;
var boutonFerme = document.querySelectorAll('div.boutonFerme').forEach(boutonFerme => {
    boutonFerme.addEventListener('click', event =>  {
        boutonFerme.parentNode.style.display = "flex";
        boiteModAllumee = !boiteModAllumee;
    })
  })
var contenantImg = document.querySelectorAll('div.img_contenent').forEach(contenantImg => {
    contenantImg.addEventListener('click', event =>  {
        boiteModAllumee = !boiteModAllumee;
        if(boiteModAllumee == false){
            contenantImg.nextElementSibling.style.display = "flex";
        }else{
            contenantImg.nextElementSibling.style.display = "none";
        }
            
    })
  })
//==================================================================================
//Afficher boite modale des videos
let boiteVideoAllumee = true;
var boutonFermeVideo = document.querySelectorAll('div.boutonFerme').forEach(boutonFerme => {
   boutonFerme.addEventListener('click', event =>  {
       boutonFerme.parentNode.style.display = "none";
       boutonFerme.parentNode.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.style.display = "block";
       Array.from(document.getElementsByClassName("boutonPlay"), e => e.style.display = "block");
       boiteVideoAllumee = !boiteVideoAllumee;
    })
  })
var boutonPlay = document.querySelectorAll('div.boutonPlay').forEach(boutonPlay => {
    boutonPlay.addEventListener('click', event =>  {
        boiteVideoAllumee = !boiteVideoAllumee;
        if(boiteVideoAllumee == false){
            boutonPlay.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.style.display = "block";
            boutonPlay.style.display = "none";
            Array.from(document.getElementsByClassName("boutonPlay"), e => e.style.display = "none");
        }else{
            boutonPlay.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.style.display = "none";
            Array.from(document.getElementsByClassName("boutonPlay"), e => e.style.display = "block");
            boutonPlay.style.display = "block";
        }
            
    })
  })
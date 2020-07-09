const items = document.querySelectorAll('.slide img'); 
const nbSlide = items.length;
const suivant = document.querySelector('.right');
const precedent = document.querySelector('.left');
let i = 0;
var time = 3000;

function slideSuivante(){
    items[i].classList.remove('active');

    if(i < nbSlide - 1){
        i++;
    } else {
        i = 0;
    }

    items[i].classList.add('active')
    
    
}
suivant.addEventListener('click', slideSuivante)


function slidePrecedente(){
    items[i].classList.remove('active');

    if(i > 0){
        i--;
    } else {
        i = nbSlide - 1;
    }

    items[i].classList.add('active')
    
    
}
precedent.addEventListener('click', slidePrecedente)


setInterval("slideSuivante()", time);




function keyPress(e){
    console.log(e);
    
    if(e.keyCode === 37){
        slidePrecedente();
    } else if(e.keyCode === 39){
        slideSuivante();
    }
}
document.addEventListener('keydown', keyPress)


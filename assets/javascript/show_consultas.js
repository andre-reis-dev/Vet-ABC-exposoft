let eventContents = document.getElementsByClassName('event-content'); //cria a variavel e coloca seu valor com a class 'event-content'
let buttonShowEvent = document.getElementsByClassName('show-buttons'); //cria a variavel e como seu valor com a class 'show-buttons' (cetinhas)
let eventVisibility = false; //fala que a variavel 'eventVisibility' é falsa (visibilidade das infos dos dias)
let angle = 0; //cria a variavel q vai servir para virar as cetinhas

//essa função é referente as informações dos dias das consultas

function showEvent (n) { //começa a função showEvent (o N recebe o valor do cont no php)
    if (eventVisibility == false) { //se a 'eventVisibility' for falsa
        eventContents[n].style.display = 'block' // o 'eventContents' vai estar com display block
        eventVisibility = true; // faz com que o 'eventVisibility' seja igual a true
        buttonShowEvent[n].style.transform = `rotate(180deg)`; //faz a imagem rodar 180 graus (seta vira pra baixo)
        buttonShowEvent[n].style.transition = '.5s'; //essa 'rodada' dura 5 segundos
    } else {
        eventContents[n].style.display = 'none' //o display vai estar igual a none
        eventVisibility = false; //transforma a variavel em falsa
        buttonShowEvent[n].style.transform = `rotate(0deg)`; 
        buttonShowEvent[n].style.transition = '.5s';
    }
}
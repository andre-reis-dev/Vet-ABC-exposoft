let menu = document.getElementById('menu') //variável referente ao menu, o elemento <ul> do HTML
let menuStatus = false; //define o status do menu para possibilitar a manipulação do menu na função

function toggleMenu () {
    if (menuStatus == false) {
        menu.style.height = '95px' //define o display do menu para block
        menu.style.animationName = 'menuDown' //Ativa a animação que faz com que o menu desça devagar
        menuStatus = true; //converte a variável de status para "true" 
    } else {
        menu.style.height = '0px' //define o display do menu para "none"
        menu.style.animationName = 'menuUp' //Ativa a animação que faz com que o menu suba devagar
        menuStatus = false; //converte a variável de status para "false" 
    }
}
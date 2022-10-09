let menu = document.getElementById('menu-mobile') //variável referente ao menu, o elemento <ul> do HTML
let menuStatus = false; //define o status do menu para possibilitar a manipulação do menu na função

function toggleMenu () {
    if (menuStatus == false) {
        menu.style.display = 'block' //define o display do menu para block
        menuStatus = true; //converte a variável de status para "true" 
    } else {
        menu.style.display = 'none' //define o display do menu para "none"
        menuStatus = false; //converte a variável de status para "false" 
    }
}
let date = new Date(); // A variável "date" recebe o objeto date(), que possibilita a manipulação de datas e horários da máquina

let monthNumber = date.getMonth(); // Recebe o atributo "getMonth()" do objeto "date()", ou seja, recebe o número do mês atual (vale lembrar que o primeiro mês começa no valor "0" e não "1")

let monthName = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"]; // Vetor que contém os nomes dos meses em ordem, também contendo o primeiro valor na posição 0 do vetor

let monthBanner = document.getElementById('monthBanner'); 
let monthIndex = monthNumber; // monthIndex recebe o número de monthNumber, ou seja, o mês decorrente

monthBanner.innerHTML = `<strong>${monthName[monthIndex]}</strong>`; // Recebe o nome correspondente ao mês atual

function toggleMonth (value) {
    if (value == 1) {
        monthIndex++;
        if (monthIndex > monthName.length - 1) {
            monthIndex = 0;
        }
    } else {
        monthIndex--;
        if (monthIndex < 0) { // Verifica se o monthIndex passou de janeiro para trás, se sim, monthIndex recebe o tamanho de monthName - 1
            monthIndex = monthName.length - 1;
        }
    }
    monthBanner.innerHTML = `<strong>${monthName[monthIndex]}</strong>` ;
    console.log(monthIndex); //escreve no console do navegador o número do mês atual
}


let eventContents = document.getElementsByClassName('event-content'); //recebe todos os elementos com classe 'event-content'
let buttonShowEvent = document.getElementsByClassName('show-buttons'); // recebe todos os elementos com classe 'show-buttons'
let eventVisibility = false; //variável de controle de visibilidade das consultas
let angle = 0;

function showEvent (n) {
    if (eventVisibility == false) { // verificação: se a variável "event-visibility" for igual "false"
        eventContents[n].style.display = 'block' 
        eventVisibility = true;
        buttonShowEvent[n].style.transform = `rotate(${angle += 180}deg)`; //define  o atributo "transform" do elemento para rotate, recebendo o valor da variável angle + 180 graus, para que a rotação do elemento não volte, mas sempre prossiga.
        buttonShowEvent[n].style.transition = '.5s'; //define o atributo transition do elemento para 0.5 segundos.
    } else {
        eventContents[n].style.display = 'none'
        eventVisibility = false;
        buttonShowEvent[n].style.transform = `rotate(${angle += 180}deg)`;
        buttonShowEvent[n].style.transition = '.5s';
    }
}
/*
    A função acima (showEvent) é responsável por alternar a visibilidade das consultas, através do click do top do elemento.
    Ele também faz com que a setinha do botão mude de posição, para indicar se deve subir ou descer.
*/
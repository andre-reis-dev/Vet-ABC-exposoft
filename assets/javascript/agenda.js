let date = new Date(); // A variável "date" recebe o objeto date(), que possibilita a manipulação de datas e horários da máquina
let monthNumber = date.getMonth(); // Recebe o atributo "getMonth()" do objeto "date()", ou seja, recebe o número do mês atual (vale lembrar que o primeiro mês começa no valor "0" e não "1")
let monthName = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"]; // Vetor que contém os nomes dos meses em ordem, também contendo o primeiro valor na posição 0 do vetor
let monthBanner = document.getElementById('monthBanner'); 
let monthIndex = monthNumber; // monthIndex recebe o número de monthNumber, ou seja, o mês decorrente

monthBanner.innerHTML = monthName[monthIndex]; // Recebe o nome correspondente ao mês atual

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
    monthBanner.innerHTML = monthName[monthIndex];
    console.log(monthIndex);
}
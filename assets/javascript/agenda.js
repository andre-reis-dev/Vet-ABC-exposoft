let date = new Date();
let monthNumber = date.getMonth();
let monthName = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
let monthBanner = document.getElementById('monthBanner');

monthBanner.innerHTML = monthName[monthNumber];

let monthIndex = monthNumber;

function toggleMonthName(index) {
    if (index == 1) {
        monthIndex++;
        if (monthIndex > monthNumber.length - 1) {
            monthIndex = 0;
        }
        monthBanner.innerHTML = monthName[monthIndex];
        alert('Mês: ' + monthName[monthIndex])
    } else {
        monthIndex--;
        if (monthIndex < 0) {
            monthIndex = monthNumber.length - 1;
        }
        monthBanner.innerHTML = monthName[monthIndex];
    }
      
}
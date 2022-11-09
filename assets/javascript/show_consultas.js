let eventContents = document.getElementsByClassName('event-content'); 
let buttonShowEvent = document.getElementsByClassName('show-buttons');
let eventVisibility = false;
let angle = 0;

function showEvent (n) {
    if (eventVisibility == false) {
        eventContents[n].style.display = 'block'
        eventVisibility = true;
        buttonShowEvent[n].style.transform = `rotate(180deg)`;
        buttonShowEvent[n].style.transition = '.5s';
    } else {
        eventContents[n].style.display = 'none'
        eventVisibility = false;
        buttonShowEvent[n].style.transform = `rotate(360deg)`;
        buttonShowEvent[n].style.transition = '.5s';
    }
}
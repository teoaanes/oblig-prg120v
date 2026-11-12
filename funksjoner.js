const klasseNav = document.querySelector(".navbarKlasse");
const studentNav = document.querySelector(".navbarStudent");

// Kode for å verifisere
function confirm(){
    return("Er du sikker på at du vil gjøre dette?");
}



function fadeIn(element) {
    element.classList.remove ("usynlig");
    element.classList.add("synlig");
};

function fadeOut(element) {
    element.classList.add ("usynlig");
    element.classList.remove ("synlig");
};



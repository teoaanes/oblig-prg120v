const klasseNav = document.querySelector(".navKlasse");
const studentNav = document.querySelector(".navStudent");
const klasseKnapp = document.querySelector("#klasseKnapp");
const studentKnapp = document.querySelector("#studentKnapp");

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


klasseKnapp.addEventListener("click", () => {
    if(studentNav.classList.contains("synlig")){
    fadeOut(studentNav);
    setTimeout(() => {
        fadeIn(klasseNav);
    }, 500)}
    else{
        fadeIn(klasseNav);
    }
});

studentKnapp.addEventListener("click", () =>{
    if(klasseNav.classList.contains("synlig")){
        fadeOut(klasseNav);
        setTimeout(() => {
            fadeIn(studentNav);
        }, 500)}
    else{
        fadeIn(studentNav);
    }
});
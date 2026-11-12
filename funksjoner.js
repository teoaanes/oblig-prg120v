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
    fadeOut(studentNav);
    fadeIn(klasseNav);
}
)

studentKnapp.addEventListener("click", () =>{
    fadeOut(klasseNav);
    fadeIn(studentNav);
}

)
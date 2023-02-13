//Funcionamiento del menu hamburguesa
function desplegarMenu() {
    if (document.getElementById("menu").classList.contains("col-1")) {
        document.getElementById("menu").classList.replace("col-1", "col-2");
        document.getElementById("miniaturasDiapos").classList.replace("d-none", "d-inline");
    } else {
        document.getElementById("menu").classList.replace("col-2", "col-1");
        document.getElementById("miniaturasDiapos").classList.replace("d-inline", "d-none");
    }
}

// Cambio de contenido en la diapositiva y en el numero de diapositiva

function mostrarDiapositiva1() {
    document.getElementById("diapositiva").src = "recursos/Diapositiva1.png";
    document.getElementById("diapositivaActual").textContent = "1";
}
function mostrarDiapositiva2() {
    document.getElementById("diapositiva").src = "recursos/Diapositiva2.png";
    document.getElementById("diapositivaActual").textContent = "2";
}
function mostrarDiapositiva3() {
    document.getElementById("diapositiva").src = "recursos/Diapositiva3.png";
    document.getElementById("diapositivaActual").textContent = "3";
}

// Funcionamiento de los botones de navegacion

function nextButton() {
    if (document.getElementById("diapositiva").src.includes("Diapositiva1.png")) {
        mostrarDiapositiva2();
    } else if (document.getElementById("diapositiva").src.includes("Diapositiva2.png")) {
        mostrarDiapositiva3();
    } else if (document.getElementById("diapositiva").src.includes("Diapositiva3.png")) {
        mostrarDiapositiva3();
    }
}

function backButton(){
    if (document.getElementById("diapositiva").src.includes("Diapositiva1.png")) {
        mostrarDiapositiva1();
    } else if (document.getElementById("diapositiva").src.includes("Diapositiva2.png")) {
        mostrarDiapositiva1();
    } else if (document.getElementById("diapositiva").src.includes("Diapositiva3.png")) {
        mostrarDiapositiva2();
    }
}

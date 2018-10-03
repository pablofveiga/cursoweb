// instanciar clases
// const ui = new Interfaz();

// EVENT LISTENERS
eventListners();

function eventListners() {
    // Inicio de la APP y deshabilitar Submit
    document.addEventListener("DOMContentLoaded",createBreadcum);
}

function createBreadcum() {

}

function cargarJSON() {
    fetch("../js/temario.json")
        .then(res => res.json())
        .then(respuesta => {
            console.log(respuesta)
            console.log(respuesta[0].titulo)

            // 1.- Filtrar id target

            // function identificaHeader() {
                
            // }

            // 7.- Pillar índice respuesta[i]
            // 8.- print  [i].

            // let html = "";
            // respuesta.forEach(function(empleado){
            //     html += `
            //         <li><strong>${empleado.nombre}</strong> -  ${empleado.puesto}</li>
            //     `;
            // })
            // document.getElementById("resultado").innerHTML= html;
        })
        .catch(error => console.log(error));;
}

cargarJSON();






// test accordeon
// let _titles = document.querySelectorAll("header:not(.notCollapsable) h2")
// let _titles = document.querySelectorAll("header h2");
// _titles.forEach(function(){

// });




// Pruebas

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("upArrow").style.display = "block";
    } else {
        document.getElementById("upArrow").style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


// AÑADIR CLASES O ID'S A CADA ARTICLE (h2)
    // COGER TODOS LOS ARTICLES SUPERIORES (NIVEL 1)
let secciones = document.querySelectorAll(".wrapper>article");
secciones.forEach(function(sec,i=1){
    // AÑADIR ID (LE RESTAMOS 2 PQ HAY 2 SECCIONES INUTILES ANTES (INDICE E INTRO))
    sec.id = `js-${i-1}`;

    if (sec.children[1].children[0].nodeName == "SECTION" ) {
        sec.classList.add("putoto");
    }

    i++;
});


// for (i = 3; i < secciones.length; i++) {
//     if (i == 3) {
//         secciones[i].id = `js-${1}`;    
//     } else {
//         secciones[i].id = `js-${i-2}`;    
//     }
    
// }

// // SUBSECCIONES (h3)
// let subsecciones = document.querySelectorAll("article>.blockContent>section");
// // console.log(subsecciones);
// subsecciones.forEach(function(subsec,i){
//     // console.log(`
//     // // SUBSECCIONES (h3)
//     // `)    
//     // ERROR  --- :: DEBEMOS ASIGNAR SUBSECCIONES EN LA FUNCION ANTERIOR
    
//     let parentID = subsecciones[i].parentElement.parentElement.id;
//     subsec.id = `${parentID}.${i}`;
//     console.log(subsec);
// })





// // SUB-SUBSECCIONES (h4)
// let subSubSecciones = document.querySelectorAll("article>section>article");
// // console.log(subsecciones);
// subsecciones.forEach(function(s,i){
//     console.log(`
//         SUB-SUBSECCIONES (h4)
//     `)
//     console.log(s);
// })



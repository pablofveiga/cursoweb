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
// let _titles = document.querySelectorAll("header:not(.notCollapsable h2")





// Pruebas

// AÑADIR CLASES O ID'S A CADA ARTICLE (h2)
let secciones = document.querySelectorAll(".wrapper>article");
// console.log(secciones);
secciones.forEach(function(sec,i=1){
    // sec.classList.add(`js${i}`);
    console.log(`
    // SECCIONES (h2)
    `)   
    console.log(sec); 
    sec.id = `js-${i}`;
    i++;
});

// SUBSECCIONES (h3)
let subsecciones = document.querySelectorAll("article>.blockContent>section");
// console.log(subsecciones);
subsecciones.forEach(function(subsec,i){
    // console.log(`
    // // SUBSECCIONES (h3)
    // `)    
    let parentID = subsec.parentElement.parentElement.id;
    subsec.id = `${parentID}.${i}`;
    console.log(subsec);
})

// SUB-SUBSECCIONES (h4)
let subSubSecciones = document.querySelectorAll("article>section>article");
// console.log(subsecciones);
subsecciones.forEach(function(s,i){
    console.log(`
        SUB-SUBSECCIONES (h4)
    `)
    console.log(s);
})



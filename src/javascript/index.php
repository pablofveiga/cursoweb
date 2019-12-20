<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JavaScript Indoloro</title>


        <!-- OG -->
    <meta property="og:title" content="Curso Web Peibol" />
    <meta property="og:description" content="Tema 1 - Introducción a la web" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.pablofv.com/cursoweb/tema1/" />
    <meta property="og:image" content="http://www.pablofv.com/cursoweb/pics/og-tema1.jpg" />
	<meta property="og:image:type" content="image/jpeg" /> 
	<meta property="og:image:width" content="200" /> 
	<meta property="og:image:height" content="200" />    
    <meta property="og:locale" content="es" />

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../css/styles.css?v=1.1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body id="js-page">
    
    <?php include ("../partials/main_menu.php"); ?>
    
    <header class="mainHeader">
        <h1 class="mainHeader__title">JavaScript Indoloro</h1>
    </header>
    
    <div class="wrapper">

        <article class="sectionIntro">
            <header>
                <h2>JavaScript sin morir en el intento.</h2>
            </header>

            <div class="sectionContent">
                <p>En este tema abracaremos el truculento mundo del JavaScript</p>
            </div>           
        </article>

        <article class="sectionIndex">
            <header>
                <h2>Índice de contenidos</h2>
            </header>
            <div class="section__content">
                <ul class="normal-list">
                    <li><a href="#">1.- Introducción histórica</a></li>
                    <li>
                        <a href="#js2">2.- Variables</a>
                        <ul>
                            <li><a href="#js2.1">2.1- Declaración de Variables</a></li>
                            <li>
                                <a href="#js2.2">2.2- Tipos de Variables y sus Métodos</a>
                                <ul>
                                    <li><a href="#js2.2.1">2.2.1- String</a></li>
                                    <li><a href="#js2.2.2">2.2.2- Number</a></li>
                                    <li><a href="#js2.2.3">2.2.3- Operaciones entre String y Number</a></li>
                                    <li><a href="#js2.2.4">2.2.4- Boolean</a></li>
                                    <li><a href="#js2.2.5">2.2.5- Array</a></li>
                                    <li><a href="#js2.2.6">2.2.6- Object</a></li>                            
                                </ul>
                            </li>
                            <li><a href="#js2.3">2.3- Scope de las varibles</strong></a></li>
                            <li><a href="#js2.4">2.4- Asignación de valores por <strong>Destructuring</strong></a></li>
                        </ul>
                    </li>

                    <li><a href="#">Funciones</a></li>
                    <li><a href="#">Manejo de errores con try cath</a></li>
                    <li><a href="#">Objeto Date()</a></li>
                    <li>
                        <a href="#">Estructuras de contol</a>
                        <ul>
                            <li><a href="#">IF...ELSE</a></li>
                            <li><a href="#">Switch</a></li>
                            <li><a href="#">FOR</a></li>
                            <li><a href="#">While y Do While</a></li>
                            <li><a href="#">ForEach</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Objeto Window</a></li>
                </ul>
            </div>
        </article>

        <article class="sectionHistoria">
            <header>
                <h3>Introducción histórica.</h3>
            </header>

            <div class="sectionContent">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, repellat. Laboriosam, maxime. Dicta laudantium sapiente minus! A ab dolore enim sapiente molestiae explicabo nihil cumque quae quidem! Nemo, necessitatibus suscipit.</p>
            </div>           
        </article>

        <!-- Variables -->
        <article id="js2">
            <header>
                <h3>Variables</h3>
            </header>

            <!-- Declaración de variables -->
            <section>
                <header>
                    <h4>Declaración de variables</h4>
                </header>

                <div class="articleContent">
                    <p>En ES6 tenemos nuevos modos de definir variables:</p>
                    <pre class="language-javascript line-numbers">
<code>// Variables
var antiguo = "cosa";    // método viejo
let nuevaVariable = true;
const constante = 256;</code></pre>

                    <h5>LET</h5>
                    <p>
                        La declaración con <strong>let</strong> es igual que con var, pero tienen diferencas.
                    </p>
                    <pre class="language-javascript line-numbers">
<code>// LET
let nombre = "Pepe",
    nombre2 = "juan";
</code></pre>        
                    <p>A diferencia de <strong>var</strong>, a <strong>let</strong> no le podemos re-declarar la variable del mismo modo.</p>            
                </div>
                <pre class="language-javascript line-numbers">
<code>// VAR
var color = "rojo";
var color = "verde";
console.log(color); // devolverá "verde";
// LET
let animal = "perro";
let animal = "gato"
console.log(animal);    // ERROR!!: Uncaught SyntaxError: Identifier 'animal' has already been declared</code></pre> 

                <p>Lo que podemos hacer, es reasignarle un valor:</p>
                <pre class="language-javascript line-numbers">
<code>let animal = "perro";
animal = "gato"
console.log(animal);    // devuelve gato</code></pre> 


                <h5>CONST</h5>
                <p>La variable de tipo <strong>const</strong> tiene un valor constante y no cambia.</p>
                <p>Han de usarse para variables cuyo valor sabemos que no va a cambiar.</p>
                <p>Debe inicializarse al principio, no se puede inicializar vacía.</p>
                <pre class="language-javascript line-numbers">
<code>let animal;
animal = "loro"
console.log(animal);    // devuelve loro

const profesion;    //  ERROR!!: Uncaught SyntaxError: Missing initializer in const declaration

const transporte = "tren";
console.log(transporte)     // devuelve tren</code></pre>

                <p>Tampoco se le puede cambiar el valor asignado:</p>
                <pre class="language-javascript line-numbers">
<code>const ciudad = "Berlin";
ciudad = "Roma";    // ERROR!! Uncaught TypeError: Assignment to constant variable.</code></pre>

                <p><strong>En resumen:</strong></p>
                <p><strong>VAR</strong> es el método antiguo, admite cualquier pillería.</p>
                <p><strong>LET</strong> la usamos cuando la variable no tiene asignado ningún valor, o su valor va a cambiar.</p>
                <p><strong>CONST</strong> la usamos cuando sabemos que la variable no va a cambiar de valor.</p>

            </section>

            <!-- Tipos de Variables y sus Métdos -->
            <section>
                <header>
                    <h4>Tipos de Variables y sus Métdos</h4>
                </header>

                <div class="section__content">
                    <p>
                        En JavaScript tenemos diferentes tipos de datos, o variables. Los datos se los asignamos a las variables, así una variable puede ser de tipo string, numérica, booleana, etc...
                    </p>
                </div>

                <article>
                    <header>
                        <h5>String y sus métodos</h5>
                    </header>

                    <div class="article__content">
                        <pre class="language-javascript line-numbers">
    <code>let txt ="Javascript";

    // .lenght  => devuelve número de caracteres
    console.log(txt.length);

    // .concat()  para concatenar strings
    console.log(txt.concat(' ','es genial'))

    // .toUpperCase()  --> transforma en mayúsculas
    // .toLowerCase()  --> transforma en minúsculas

    // .indexOf("string")  ==>> devuelve la posición del texto dentro del string
    let mensaje = "Curso de Javascript, HTML y CSS";
    console.log(mensaje.indexOf("Javascript"));
    console.log(mensaje.indexOf("PHP")); // devuelve -1 porque no está


    // .substring(n,n)  -->> Devuelve el 'recorte' de texto entre dos posiciones
    console.log(mensaje.substring(7,16));

    // .slice(n)  -->> 
    console.log("SLICE")
    console.log(mensaje.slice(-5)); // en negativo, empieza del final al principio
    console.log(mensaje.slice(7,16)); // así es igual que substring()

    // .split()  -->> trozear string; devuelve un Array
    console.log("SPLIT: ");
    console.log(mensaje.split(" "));

    // .replace("str1", "str2"); reemplaza una cadena por otra
    console.log("REPLACE: ")
    console.log(mensaje.replace("CSS","PHP"));


    // .includes("str")  -->> comprueba si existe una cadena dentro del string. Devuelve true o false
    console.log(mensaje.includes("CSS"));

    // .repeat(n)  --> repite n veces un string
    console.log("REPEAT: ")
    console.log(mensaje.repeat(2));

    // String Literal (o template literal)
    let nombre = "pepe";
    let edad = 66;
    console.log(`Bienvenido ${nombre} de ${edad} años`);

    // Template Literal (Ejemplo)
    const prod1 = "Pizza",
        precio1 = 30,
        prod2 = "Hamburguesa",
        precio2 = 40;

    // Versión vieja
    let html;
    html = '&lt;ul&gt;'+
            '&lt;li&gt;Orden: '+prod1+'&lt;/li&gt;'+
            '&lt;li&gt;Precio: '+precio1+'&lt;/li&gt;'+
            '&lt;li&gt;Orden: '+prod2+'&lt;/li&gt;'+
            '&lt;li&gt;Precio: '+precio2+'&lt;/li&gt;'+
            '&lt;li&gt;Total: ' +(precio1+precio2)+'&lt;/li&gt;'+
            '&lt;/ul&gt;';
    document.getElementById("app").innerHTML = html;

    // VERsioN MODERNA
    let html2;
    html2 = `
        &lt;ul&gt;
            &lt;li&gt;Orden: ${prod1} &lt;/li&gt;
            &lt;li&gt;Precio: ${precio1} &lt;/li&gt;
            &lt;li&gt;Orden: ${prod2} &lt;/li&gt;
            &lt;li&gt;Precio: ${precio2} &lt;/li&gt;
            &lt;li&gt;Total: ${total(precio1,precio2)} &lt;/li&gt;
        &lt;/ul&gt;
    `;

    function total(precio1,precio2) {
        return precio1 + precio2;
    }


    document.getElementById("app").innerHTML = html;</code></pre>

                    </div>
                </article>

                <article>
                    <header>
                        <h5>Number y sus métodos</h5>
                    </header>

                    <div class="article__content">
                        <pre class="language-javascript line-numbers">
    <code>const number1 = 30,
        number2 = 20,
        number3 = 20.20,
        number4 = .1020,
        number5 = -43;


    let resultado;

    // suma
    resultado = number1 + number2;
    // resta
    resultado = number1 + number2;
    // multiplicación
    resultado = number1 * number2;
    // division 
    resultado = number1 / number2;
    // módulo
    resultado = number1 % number2;


    // PI
    resultado = Math.PI;

    // redondeo
    resultado = Math.round(2.5)	// da 3
    resultado = Math.round(2.4)	// da 2

    // redondeo hacia Arriba
    resultado = Math.ceil(2.1) // da 3

    // redondeo hacia abajo
    resultado = Math.floor(2.999) // da 2

    // Raiz Cuadrada
    resultado = Math.sqrt(25);

    // Número absoluto
    resultado = Math.abs(-34);

    // Exponenciales
    resultado = Math.pow(2,8);

    // Mínimo
    resultado = Math.min(3,654,12,64,123,76,12,-65,9,0.45);

    // Maximo
    resultado = Math.max(3,654,12,64,123,76,12,-65,9,0.45);

    // Aleatria
    resultado = Math.random();

    // toFixed()  Elegir decimales
    let numeroLargo = 242645532432.765763223
    resultado = numeroLargo.toFixed();	// redondea
    resultado = numeroLargo.toFixed(4);	// lo corta hasta 4 decimales


    console.log(resultado);


    // PASAR STRING A NUMBER

    const n1 = "50",
        n2 = 10,
        n3 = "tres";

    console.log(n1 + n2);	// 5010
    console.log(typeof(n1 + n2));	// String

    console.log(Number(n1) + n2);	// 60
    console.log(parseInt(n1) + n2);	// 60

    // ¡¡Curiosidad!!
    console.log(n1 - n2);
    console.log(typeof(n1 - n2));	// number


    // parseFloat y parseInt
    let dato = 45;
        dato = parseInt('100');
        dato = parseFloat("100.2040");
    console.log(dato);


    // CONVERTIR NÚMERO A STRING
        // ejemplo práctico: nº de caracterers de un código postal
    let codigoPostal = 28080;
        // console.log(codigoPostal.lenght)	// Undefined (es un número aun)
    codigoPostal = String(codigoPostal);
    console.log(codigoPostal.length);	// 5, ya es un string
        // .toSting()  (método 2)
    let cp2 = 90210;
    cp2 = cp2.toString();
    console.log(typeof cp2);</code></pre>
                    </div>
                </article>

                <article>
                    <header>
                        <h5>Array y sus métodos</h5>
                    </header>

                    <div class="article__content">
                        <pre class="language-javascript line-numbers">
    <code>// ARRAYS
    const numeros = [10,20,30,40,50];
    console.log(numeros);

    const meses = new Array("enero","febrero","marzo","abril");

    const mix = new Array(342,"Pere",true,undefined,"cas44",null);

    // .length  nº elementos
    meses.length // 4

    // comprobar si es array
    console.log(Array.isArray(meses));

    // .push()  AÑADE AL FINAL
    meses.push("mayo");

    // .unshift()  AÑADE AL PRINCIPIO
    meses.unshift("mes 0");

    // ELIMINAR ELEMENTO
    meses.pop();  // ELIMINA EL ÚLTIMO ELEMENTO
    meses.shift() // ELIMINA EL PRIMER ELEMENTO
    meses.splice(2,1)	// splice(índice,cantidad)  --> desde la posición "indice" quita "cantidad" elementos


    // INVERTIR ARRAY
    meses.reverse();

    // Encontrar un elemento en el array
    meses.indexOf("marzo");	// 2

    // unir 2 arrays
    const arr1 = [1,2,3],
        arr2 = [7,8,9];
    console.log(arr1.concat(arr2));

    console.log(meses);

    // ORDENAR ARRAYS
    const frutas = ["platano","manzan","zanahoria","pera","kiwi","fresa"];
    frutas.sort();
    console.log(frutas);	// -->> Orden alfabñetico

    const numeros22 = [1,543,23,75,22,76,346,987,12345,46];
    numeros22.sort();
    console.log(numeros22);	// Nos da el orden de MS-Dos

    numeros22.sort(function(x,y){
        return x - y;
    });
    console.log(numeros22);	// Nos da el orden bueno ascendente

    numeros22.sort(function(x,y){
        return y - x;
    });
    console.log(numeros22);	// Nos da el orden bueno descendente


    // NOTA
    /*
        Un Array definido con const:  
            const numeros = [1,2,3];
        NO PUEDE REDEFINIRSE:
            numeros = [4,6,7] --> DA ERROR

        Sin embargo, se puede modificar con los métodos vistos antes, o reasignando cada elemento
            numeros[0] = 55;
    */</code></pre>
                    </div>
                </article>

                <article>
                    <header id="js2.2.6">
                        <h5>Objeto y sus métodos</h5>
                        <div class="breadcum">
                            <ul class="breadcum__list">
                                <li class="breadcum__list__item"><a href="#">Javascript</a></li>
                                <li class="breadcum__list__item"><a href="#">Variables</a></li>
                                <li class="breadcum__list__item"><a href="#">Tipos de variables y sus Métodos</a></li>
                                <li class="breadcum__list__item"><a href="#">Objeto</a></li>
                            </ul>
                        </div>
                    </header>

                    <div class="article__content">
                            <pre class="language-javascript line-numbers">
    <code>const persona = {
        nombre: "Pablo",
        edad: 38,
        profesion: "Front-End",
        email: "pablofveiga@gmail.com",
        lenguajes: ["CSS","HTML","JAVASCRIPT"],
        hogar: {
            ciudad: "Aviles",
            casa: "Piso",
            mascota: false
        },
        nacimiento: function(){
            // return new Date().getFullYear() - persona.edad;	// MAL --> se usa this.
            return new Date().getFullYear() - this.edad;
        }
    }

    persona.lenguajes.push("ES6");

    console.log(persona);
    console.log(persona.nombre);
    console.log(persona.hogar.casa);
    console.log(persona.nacimiento());

    // OBJECT LITERAL
    const cliente = {
        nombre : "Pablo",
        saldo: 600,
        tipoCliente : function() {
                let tipo;
                if ( this.saldo > 1000 ) {
                    tipo = "Gold";
                } else if (this.saldo > 500) {
                    tipo = "Platinum"
                }
                else {
                    tipo = "Normal";
                }
                return tipo;
            }
    }

    console.log(cliente.tipoCliente());

    // MÉTODO ALTERNATIVO (MEJOR)
    function Cliente(nombre,saldo) {
        this.nombre = nombre;
        this.saldo = saldo;

        this.tipoCliente = function() {
            let tipo;
            if ( this.saldo > 1000 ) {
                tipo = "Gold";
            } else if (this.saldo > 500) {
                tipo = "Platinum"
            }
            else {
                tipo = "Normal";
            }
            return tipo;
        }
    }

    const persona = new Cliente("Pedro",3450);
    console.log(persona);


    // STRING
    const nombre1 = "Pedro";
    const nombre2 = new String("Pedro");

    console.log(typeof nombre1);    // devuelve String
    console.log(typeof nombre2);    // devuelve Object
    console.log(nombre2);    // devuelve el Objecto con su prototipos y métodos, etc...

    // Comparación:
    if (nombre1 == nombre2) {
        console.log(`La comparación == funciona`)
    } else { console.log("No son iguales ==")}  // falso

    if (nombre1 === nombre2) {
        console.log(`La comparación === funciona`)  // falso
    } else { console.log("La comparación estricta === no funciona")}    


    // NUMEROS
    const numero1 = 20;
    const numero2 = new Number(20);    
    console.log(numero1);
    console.log(numero2);   // El _proto_ hereda un montón de métodos

    // BOOLEANOS
    const boolean1 = true;
    const boolean2 = new Boolean(true);
    console.log(boolean1);
    console.log(boolean2);

    // FUNCIONES
    const funcion1 = function(a,b) { return a + b; }
    const funcion2 = new Function("a","b", "return a+b");
    console.log(funcion1(2,3));
    console.log(funcion2(2,3));
    console.log(typeof funcion1);
    console.log(typeof funcion2);

    // OBJETOS
    const objeto1 = { nombre: "pepe"}
    const objeto2 = new Object({nombre: "pepe"});
    console.log(objeto1);
    console.log(objeto2);

    // ARRAYS
    const array1 = [1,2,3,4];
    const array2 = new Array(1,2,3,4);
    console.log(array1);
    console.log(array2);</code></pre>
                    </div>
                </article>

            </section>
        </article>

        <!-- Scope de las variables -->
        <article>
            <header>
                <h3>Scope de las variables</h3>
            </header>
            <div class="section__content">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa eius repellat fugiat, sunt odio exercitationem magni minus ab quaerat quia sequi id ut aspernatur quod incidunt esse dicta quo maiores?
                </p>
            </div>    
        </article>
        <!-- Asignación de variables por Destructuring -->
        <article>
            <header>
                <h3>Asignación de variables por <strong>Destructuring</strong></h3>
            </header>
            <div class="section__content">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa eius repellat fugiat, sunt odio exercitationem magni minus ab quaerat quia sequi id ut aspernatur quod incidunt esse dicta quo maiores?
                </p>
            </div>    
        </article>
        
        <!-- Funciones -->
        <article>
            <header>
                <h3>Funciones</h3>
            </header>
            <div class="section__content">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa eius repellat fugiat, sunt odio exercitationem magni minus ab quaerat quia sequi id ut aspernatur quod incidunt esse dicta quo maiores?
                </p>
                <pre class="language-javascript line-numbers">
<code>// FUNCTION DECLARATION
function saludar(nombre) {

    // DAR VALOR POR DEFECTO: VERSION VIEJA
    if (typeof nombre === "undefined" ) {
        nombre = "Pablo";
    }

    return `Hola ${nombre}`;
}

let saludo;
saludo = saludar();
console.log(saludo);


// NUEVA FORMA DE INICIALIZAR PARÁMETROS
function saludar2(nombre = "Visitante") {
    return `Hola de nuevo ${nombre}`;
}
let saludo2;
saludo2 = saludar2();
console.log(saludo2);


// FUNCTION EXPRESSION
    // Es definirla como una variable
const suma = function(a=3, b=4){
    return a + b;
}
console.log(suma(3,5));
console.log(suma(5));



// FUNCIONES "IIFE" : Se declaran e invocan inmediatamete
(function(){
    console.log("Creando un IFFE");
})();

(function(tecnologia){
    console.log(`Aprendiendo ${tecnologia}`);
})("Javascript");


// MÉTODOS DE PROPIEDADES
    // Cuando una función se pone dentro de un objeto. Dichas funciones se conocen como métodos
const musica =  {
    reproducir: function(id){
        console.log(`reproduciendo Música con id ${id}`);
    },
    pausa: function(){
        console.log("Pausando Música");
    }
}
musica.reproducir(45);
musica.pausa();
    // Los métodos también pueden guardarse/crearse fuera del objeto
musica.borrar = function(id){
    console.log(`Borrando cancion con id ${id}`);
}
musica.borrar(2);
console.log(musica);	// el método borrar se ha añadido al objeto</code>
                </pre>
            </div>    
        </article>

        <!-- Manejo de errores con Try Catch -->
        <article>
            <header>
                <h3>Manejo de errores con Try Catch</h3>
            </header>
            <div class="section__content">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa eius repellat fugiat, sunt odio exercitationem magni minus ab quaerat quia sequi id ut aspernatur quod incidunt esse dicta quo maiores?
                </p>
                <pre class="language-javascript line-numbers">
<code>// funcion que no existe
try {
    algo();
} catch (error) {
    console.log("error");
} finally {
    console.log("Continua, no hay problema. Esto se ejecuta siempre");
}

function obtenerClientes() {
    console.log(`Descargando......`);
    setTimeout(function(){
        console.log("Finalizado");
    },1500)
}

obtenerClientes();</code></pre>
            </div>    
        </article>

        <!-- Objeto Date() -->
        <article>
            <header>
                <h3>Objeto Date()</h3>
            </header>
            <div class="section__content">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa eius repellat fugiat, sunt odio exercitationem magni minus ab quaerat quia sequi id ut aspernatur quod incidunt esse dicta quo maiores?
                </p>
                <pre class="language-javascript line-numbers">
<code>// Fecha entera
const diaHoy = new Date();

// Fecha específica, Navidad 2017
let navidad2017 = new Date('12-25-2017');

let valor;
// Año
year = diaHoy.getFullYear();
// Mes
mes = diaHoy.getMonth();
// Dia de la semana
diaSemana = diaHoy.getDay();
// Dia del mes
diaMes = diaHoy.getDate();
// Hora
hora = diaHoy.getHours();
// Milisegundos desde 1970
ticks = diaHoy.getTime();

// OJO!!!
// Observa como se usa el get...
// Pues también hay set.
let superFecha = diaHoy.getFullYear();
superFecha = diaHoy.setFullYear(1492);
superFecha = diaHoy.getFullYear();
console.log(`la superfecha es ${superFecha}`);


console.log(diaHoy);
console.log(navidad2017);
console.log(`año: ${year}`);
console.log(`mes: ${mes}`);
console.log(`dia de la semana: ${diaSemana}`);
console.log(`dia del mes: ${diaMes}`);
console.log(`hora: ${hora}`);
console.log(`ticks: ${ticks}`);</code></pre>
            </div>    
        </article>
        
        <!-- Estructuras de Control -->
        <article>
            <header>
                <h3>Estructuras de Control</h3>
            </header>
            <div class="section__content">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa eius repellat fugiat, sunt odio exercitationem magni minus ab quaerat quia sequi id ut aspernatur quod incidunt esse dicta quo maiores?
                </p>
            </div>    

            <!-- IF... ELSE -->
            <section>
                <header>
                    <h4>IF... ELSE</h4>
                </header>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, quam tempore dolore, quo, assumenda officiis fugit inventore laborum sunt consectetur deleniti? Hic atque maxime odio! Inventore earum aliquid fuga voluptates.</p>
               <pre class="language-javascript line-numbers">
<code>let _time = new Date();
hora = _time.getHours();

if(hora <= 14) {
    console.log(`Buenos días, son las ${hora}`);
} else if (hora >=14) {
    console.log(`Buenas tardes, son las ${hora}`);
} else {
    console.log(`Buenas noches, son las ${hora}`);
}</code></pre>

                <h4>Operador ternario</h4>
                <pre class="language-javascript line-numbers">
<code>// Operador Ternario
const logeado = true;
    // version mala
logeado === true ? console.log("estás online") : console.log("estas offline");
    // version buena
console.log(logeado === true ? "estás online": "estas offline" );</code></pre>
                    
            </section>

            <!-- Switch -->
            <section>
                <header>
                    <h4>Switch</h4>
                </header>
                <div class="article__content">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, quam tempore dolore, quo, assumenda officiis fugit inventore laborum sunt consectetur deleniti? Hic atque maxime odio! Inventore earum aliquid fuga voluptates.</p>
                    <pre class="language-javascript line-numbers">
<code>// SWITCH
    // el case hace una comparación del tipo "==="
switch(this.marca) {
case "1": 
    cantidad = base * 1.15;
    break;
case "2": 
    cantidad = base * 1.05;
    break;
case "3": 
    cantidad = base * 1.35;
    break;           
default:
    console.log("No cumple ninguna condición anterior")
    break;
}</code></pre>                
                </div>
            </section>

            <!-- FOR -->
            <section>
                <header>
                    <h4>For</h4>
                </header>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, quam tempore dolore, quo, assumenda officiis fugit inventore laborum sunt consectetur deleniti? Hic atque maxime odio! Inventore earum aliquid fuga voluptates.</p>
               
                    <pre class="language-javascript line-numbers">
<code>// FOR
for( let i = 0; i&lt;10; i++) {
    console.log(`Hola por ${i} vez`);
}
// ## VARIAR EL FLUJO CON "continue" Y "break"
    // SALTAR EN EL BUCLE (continue)
for(let i = 0; i&lt;10; i++) {
    if(i==5) {
        console.log("voy en el 5");
        continue;   // Esto hace que se vuelva al FOR y se salte las órdenes que tiene debajo (el console.log)
    }
    console.log(i);
}
    // DETENER UN FOR (break)
for(let i = 0; i&lt;10; i++) {
    if(i==5) {
        console.log("en 4 rompo el bucle");
        break;
    }
    console.log(i);
}
// EJEMPLO NUMERO PAR/IMPAR
for(let i = 0; i&lt;10; i++) {
    if(i%2==0) {
        console.log(`${i} es un numero par`);
    } else {
        console.log(`${i} es un numero impar`);
    }
    
}</code></pre>
            </section>

            <!-- While y Do While -->
            <section>
                <header>
                    <h4>While y Do While</h4>
                </header>
                <div class="article__content">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, quam tempore dolore, quo, assumenda officiis fugit inventore laborum sunt consectetur deleniti? Hic atque maxime odio! Inventore earum aliquid fuga voluptates.</p>
               
                    <pre class="language-javascript line-numbers">
<code>// WHILE
let i = 0;
while (i &lt;10) {
    if(i===5) {
        console.log("Sale cinco en letra, y me salto lo de debajo para reiniciar el while");
        i++;
        continue;   // TAMBIEN PODEMOS USAR continue Y break        
    }
    console.log(i);
    i++;
}

// DO WHILE
    // Ejecuta el código al menos una vez, independientemente de si la condición se cumple
let u = 120;
do {
    console.log(`Do while ${u}`);
    u++;
} while(u&lt;10);</code></pre>
                </div>
            </section>

            <!-- forEach -->
            <section>
                <header>
                    <h4>forEach</h4>
                </header>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, quam tempore dolore, quo, assumenda officiis fugit inventore laborum sunt consectetur deleniti? Hic atque maxime odio! Inventore earum aliquid fuga voluptates.</p>
                
                <pre class="language-javascript line-numbers">
<code>// FOREACH
const tareasPendientes = ['Tarea','Comer','Proyecto','Cenar'];
tareasPendientes.forEach(function(tareaPendiente) {
    console.log(`${tareaPendiente}`);
});

    // podemos pasar parámetros, como "index" para obtener el índice
tareas.forEach(function(tareaPendiente, index){
    console.log(`${index}:  ${tareaPendiente}`);
});</code></pre>
            </section>            


            <!-- MAP -->
            <section>
                <header>
                    <h4>MAP</h4>
                </header>

                <p>Con MAP podemos recorrer un array.</p>
                
                    <pre class="language-javascript line-numbers">
<code>// MAP para recorrer arrays
const carrito = [
    {id: 1, producto: "coche"},
    {id: 2, producto: "libro"},
    {id: 3, producto: "vaca"},
    {id: 4, producto: "misil"}
];

const nombreProducto = carrito.map(function(carrito){
    return carrito.producto;
})

console.log(nombreProducto);</code></pre>
                </section>    


            <!-- for... in -->
            <section>
                <header>
                    <h4>for... in</h4>
                </header>
                <p>Podemos mostrar un objeto</p>
                
                <pre class="language-javascript line-numbers">
<code>// FOR IN
const automovil = {
    marca: "renault",
    modelo: "cinco",
    anio: 1987
}
for (let auto in automovil) {
    console.log(`${auto} : ${automovil[auto]}`);    // imprime la clave y el valor
}</code></pre>
            </section>
        </article>        

        <article>
            <header>
                <h3>Objeto Window</h3>
            </header>
            <div class="article__content">
                <p>El window object es nuestra ventana de navegación.</p>
                <p>Contiene mucha información: idioma, dimensiones, navegador, etc...</p>
                <p>Por ejemplo, el console.log forma parte del window object; puedes escribir console.log("hola") ó window.console.log("hola")   </p>
            
                <p>Algunos métodos que no vamos a ver por cansinos son:</p>
                <ul>
                    <li>alert</li>
                    <li>prompt</li>
                    <li>confirm</li>
                </ul>

                <p>Métodos para dimensiones:</p>
                <pre class="language-javascript line-numbers">
<code>// OBJETO WINDOW: MÉTODOS ÚTILES
let altura = window.outerHeight;    // Altura de la ventana (incluye la consola y toda la parafernalia del navegador)
let anchura = window.outerWidth;    // Anchura de la ventana (con la interfaz del navegador) 

let altura = window.outerHeight;    // Altura de la ventana (sin la interfaz del navegador)
let anchura = window.outerWidth;    // Anchura de la ventana (sin la interfaz del navegador) 

let ubicacion = window.location         // url completa
let ubicacion2 = window.location.host    // se pueden pedir diferentes parámetros del location
window.location.href = "http://www.google.com"         // redireccionar

window.history.go(-3);  // volver atras en el navegador
window.navigator.language;  // idioma</code></pre>                
            </div>
        </article>

        <!-- SCOPE DE LAS VARIABLES -->
        <article>
            <header>
                <h3>Scope</h3>
            </header>
            <div class="article__content">
                <p>El scope de las variables es de vital importancia.</p>
                <p>La introducción de "let" y "const" han facilitado las cosas.</p>
                <pre class="language-javascript line-numbers">
<code>// SCOPE DE LAS VARIABLES
var a = "a";
let b = "b";
const c = "c";

// Scope de la función
function funcionScope() {
    var a = "A";
    let b = "B";
    const c = "C";
    console.log("FUNCION: " + a,b,c);   // devuelve: FUNCION: A B C
}

// Scope de Bloque
if(true) {
    var a = "AA";
    let b = "BB";
    const c = "CC";
    console.log("BLOQUE: " + a,b,c);    // devuelve: BLOQUE: AA BB CC
}

console.log("GLOBALES: " + a,b,c);  // devuelve: GLOBALES: AA b c</code></pre>                     
            </div>
        </article>

        <div class="sectionSeparator">
            <img src="../pics/doom.jpg" alt="El Doom fue un juegazo, el DOM es otra cosa" width="300">
        </div>

        <!-- EL DOM -->
        <article>
            <header>
                <h3>DOM: Document Object Model</h3>
            </header>

            <div class="article__content">
                <img src="../pics/dom.gif" alt="document object model">                
                
                <pre class="language-javascript line-numbers">
<code>// DOM
let elemento;
elemento = document;            // Todo todito todo
elemento = document.all;        // Devuelve un HTMLAllCollection
elemento = document.all[10];    // Devuelve un elemento en concreto
elemento = document.head;       // Devuelve el elemento &lt;head&gt;
elemento = document.body;       // Devuelve el cuerpo del documento
elemento = document.domain;     // Devuelve el dominio
elemento = document.URL;        // Devuelve la url
elemento = document.characterSet    // Nos devuelve la codificación de caracterers (UTF-8, ISO-...)

elemento = document.forms       // Devuelve todos los formularios del documento
elemento = document.forms[0]    // Devuelve un formulario en concreto
elemento = document.forms[0].id    // Devuelve la id de ese formulario en concreto
elemento = document.forms[0].className  // Nos devuelve las clases  (modificando con className podemos afectar a todas las clases:  className = ""; borra todas las clases)
elemento = document.forms[0].classList  // Si hay muchas clases, nos devuelve un "DOMTkenList"  (añadir o quitar con classList no afecta a las otras clases: classList.add("foo") )
elemento = document.forms[0].classList[0]  // Accede a una clase en concreto

elemento = document.images;     // Devuelve las imágenes del documento (HTMLCollection) , con sus clases y atributos
elemento = document.images[3];  // Devuelve una imagen en concreto
elemento = document.images[2].src;  // Devuelve un atributo (src) de la imagen en concreto (devuelve el src con el dominio y todo)
elemento = document.images[2].getAttribute("src");  // Devuelve el atributo (src) de la imagen en concreto sin el dominio

elemento = document.scripts     // Devuelve los scripts del documento

console.log(elemento);
</code></pre>

                <p>Convertir un HTMLCollection en un Array</p>
                <pre class="language-javascript line-numbers">
<code>// HTMLCollection --> Array
let imagenes = document.images;
let imagenesArray = Array.from(imagenes);

// Vamos a listarlas
imagenesArray.forEach(function(imagen) {
    console.log(imagen);
})

</code></pre>
            

            <!-- SELECCIONAR ELEMENTOS -->
            <section>
                <header>
                    <h4>Seleccionar Elementos</h4>
                </header>
                <div class="section__content">
                        <pre class="language-javascript line-numbers">
<code>// Seleccionar Elementos
// getElementById
let elemento = document.getElementById("cabecera");
elemento.id;    // devuelve la ID
elemento.className;    // devuelve la clase
elemento.textContent;    // devuelve el texto que tenga
elemento.innerText;    // también devuelve el texto que tenga
elemento.innerText = "Nuevo texto";    // modifica el texto que tenga
elemento.style.color = "#fc0";  // cambia propiedades css

// getElementsbyClassName
let enlaces = getElementsbyClassName("enlace"); // nos devuelve todos los elementos de clase "enlace" en HTMLCollection

// querySelector
const encabezado = document.querySelector("#encabezado");
const encabezado = document.querySelector("#principal a:first-child");  // podemos usar todo tipo de selectores CSS
let imagen = document.querySelector("img");     // si hay varias imágenes, nos devuelve la primera

// se pueden usar conjuntamente:
let listaEnlaces = document.getElementById("principal").querySelector(".navegacion").getElementsbyClassName("enlace");

// getElementByTagName   (llamar a una &lt;etiqueta&gt; HTML)
let links = document.getElementsByTagName("a");
links[23].color = "#fcc";
let enlaces = Array.from(links);
enlaces.forEach(function(enlace){
    console.log(enlace.textContent);
})

// querySelectorAll
const enlaces = document.querySelectorAll("#principal .enlace");
console.log(enlaces);   // Devuelve un NodeList con los enlaces
enlaces[1].style.color = "red";</code></pre>                    
                </div>
            </section>

            <!-- Traversing -->
            <section>
                <header>
                    <h4>Traversing</h4>
                </header>
                <div class="section__content">
                    <pre class="language-html line-numbers">
<code>&lt;!-- CÓDIGO HTML --&gt;
&lt;nav id="principal" class="menu"&gt;
    &lt;a class="enlace" href="#"&gt;Enlace 1&lt;/a&gt;
    &lt;a class="enlace" href="#"&gt;Enlace 2&lt;/a&gt;
    &lt;a class="enlace" href="#"&gt;Enlace 3&lt;/a&gt;
    &lt;a class="enlace" href="#"&gt;Enlace 4&lt;/a&gt;
    &lt;a class="enlace" href="#"&gt;Enlace 5&lt;/a&gt;
&lt;/nav&gt;</code></pre>     

                    <pre class="language-javascript line-numbers">
<code>// CÓDIGO JAVASCRIPT
const navegacion = document.querySelector("#principal");

navegacion.childNodes;  // devuelve los nodos. Incluye incluso hasta los espacios entre etiquetas
navegacion.children;    // No devuelve los espacios en blanco, como sí lo hace childNodes
navegacion.children[0].nodeName     // devuelve el tipo de nodo  (nos diría "A" o "NAV", que es un enlace &lt;a&gt; o &lt;nav&gt; )
navegacion.children[0].nodeType     // devuelve el tipo de nodo:
//  1 = Elementos
//  2 = Atributos
//  3 = Text Node
//  8 = Comentarios
//  9 = Documentos
// 10 = Doctype

// Se pueden anidar .children varias veces, y acceder a propiedades
navegacion.children[1].children[0].textContent = "nuevo texto";

// Acceder al primer y último elemento:
navegacion.lastElementChild
navegacion.firstElementChild

// Contar número de hijos
navegacion.childElementCount;  // Devuelve un número

const enlaces = document.querySelectorAll(".enlace");
enlaces[0];     // primer enlace
enlaces[0].parentNode;     // sube un nivel --> va al nav#principal
enlaces[0].parentElement;     // RECOMENDADO: igualmente sube un nivel --> va al nav#principal
enlaces[0].parentElement.parentElement;     // Sube otro nivel por encima del nav  

const cursos = document.querySelectorAll(".card");
cursos[0];
cursos[0].parentElemnt.parentElemnt.parentElemnt.children[0].textContent = "Hola";

// volviendo a los enlaces:
const enlaces = document.querySelectorAll(".link");
enlaces[4].previousSibiling;    // devuelve el espacio en blanco (nodo)
enlaces[4].previousElementSibiling  // devuelve el elemento previo al mismo nivel
enlaces[4].previousElementSibiling.previousElementSibiling  // devuelve el elemento previo al previo al mismo nivel
enlaces[0].nextElementSibiling  // el elemento siguiente
</code></pre>     

                    <pre class="language-javascript line-numbers">
<code>// CREAR Elementos
const enlace = document.createElement("a");     // Creamos un elemento &lt;a&gt;
enlace.className = "enlace";                    // le añadimos una clase
        enlace.classList.add("enlace");                 // le añadimos una clase (mmétodo 2)
enlace.id = "nuevoId";                          // añador ID;
enlace.setAttribute("href","#");                // Añadir atributos
enlace.textContent = "Nuevo Enlace";            // Añadir texto
enlace.appendChild(document.createTextNode("Nuevo Enlace"));    // Añadir nodo de texto (método 2)

// Agregar al HTML
document.querySelector(".contenedor").appendChild(enlace);

// REEMPLAZAR UN ELEMENTO POR OTRO
const nuevoEncabezado = document.createElement("h2");   // creo elemento
nuevoEncabezado.id = "encabezado";  // le doy una id
nuevoEncabezado.appendChild(document.createTextNode("Este es el nuevo encabezado"));    // añadimos un nodo de texto
    // reemplazando
const anterior = document.querySelector("#encabezado");
const elementoPadre = document.querySelector("#lista-cursos");
elementoPadre.replaceChild(nuevoEncabezado, anterior);

// ELIMINAR ELEMENTOS DEL DOM
const enlaces = document.querySelectorAll(".enlace");
const navegacion = document.querySelector("nav#principal");

enlaces[0].remove();    // Eliminamos el primer elemento desde sí mismo
navegacion.removeChild(enlaces[0]);     // Eliminar desde el padre

// OBTENER UNA CLASE css
const primerLi = document.querySelector(".enlace");
let elemento;
elemento = primerLi.className;          // devuelve la primera clase
elemento = primerLi.classList;          // devuelve todas las clases
elemento = primerLi.classList.add("nueva-clase");       // añade una clase
elemento = primerLi.classList.remove("nueva-clase");    // elimina una clase


// LEER Atributos
primerLi.getAttribute("href");      // nos da el enlace

// AÑADIR/MODIFICAR ATRIBUTOS
primerLi.setAttribute("href","#");      // especificamos el enlace a #

// ELIMINAR ATRIBUTOS
primerLi.removeAttribute("data-id");

// COMPROBAR SI TIENE ATRIBUTOS
primerLi.hasAttribute("data-id");   // boolean
</code></pre>
                </div>
            </section>

            <!-- EVENT LISTENERS -->
            <section>
                <header>
                    <h4>Event Listeners</h4>
                </header>
                <div class="section__content">
                    <pre class="language-javascript line-numbers">
<code>// EVENT LISTENERS
document.querySelector("#submit-buscador").addEventListener("click", function(e){
    e.preventDefault();         // Previene el submit de su comportamiento
    alert(`has echo click, 
            pero no habrá submit
            `);                                   
});

// Se puede hacer de otro modo:
document.querySelector("#submit-buscador").addEventListener("click", pulsarBoton);
function pulsarBoton(e) {
    e.preventDefault();
    console.log("Desde la función ejecutarBoton");


    // Veamos más sobre ese "e" (evento)
    let elemento = e;

    console.log(elemento);  // Devuelve un MouseEvent con mucha información
    elemento.type;      // que tipo de evento (click en este caso)
    elemento.target     // elemento sobre el que se ha hecho click
    elemento.target.id     
    elemento.target.innerText;     
    elemento.target.innerText = "texto cambiado";     
}

// ###################################################
// MOUSE EVENT Listeners
let caja = document.querySelector("#buscador");
function obtenerEvento(e) {
    console.log(e.type);
}
// CLICK
caja.addEventListener("click",obtenerEvento);
// DOBLE CLICK
caja.addEventListener("dblclick",obtenerEvento);
// Mouse Enter
caja.addEventListener("mouseenter",obtenerEvento);
// Mouse Leave
caja.addEventListener("mouseleave",obtenerEvento);
// Mouse Over
caja.addEventListener("mouseover",obtenerEvento);
// Mouse Out (similar a mouseleave)
caja.addEventListener("mouseout",obtenerEvento);
// Mouse Down
caja.addEventListener("mousedown",obtenerEvento);
// Mouse Up
caja.addEventListener("mouseup",obtenerEvento);

// ###################################################
// EVENT LISTENERS PARA INPUTS
let el = document.getElementByTagName("input");
function obtenerEvento(e) {
    console.log(el.value);
    console.log(e.type);
}
// KEYDOWN
el.addEventListener("keydown",obtenerEvento);   // pulsar una tecla
// KEYUP
el.addEventListener("keyup",obtenerEvento);   // dejar de presionar (soltar) una tecla
// KEYPRESS
el.addEventListener("keypress",obtenerEvento);   // tecla presionada
// FOCUS
el.addEventListener("focus",obtenerEvento);   // entrar en el foco
// BLUR
el.addEventListener("blur",obtenerEvento);   // perder el foco (pulsar fuera despues de estar en un input); típico en validación
// CUT
el.addEventListener("cut",obtenerEvento);   // cortar texto
// COPY
el.addEventListener("copy",obtenerEvento);   // copiar texto
// PASTE
el.addEventListener("paste",obtenerEvento);   // pegar texto
// INPUT
el.addEventListener("input",obtenerEvento);   // abarca todos los event listeners anteriores
// CHANGE
el.addEventListener("change",obtenerEvento);   // avisa cuando se cambia en un elemento &lt;select&gt;</code></pre>      

                    <h4>Event Bubbling</h4>
                    <pre class="language-html line-numbers">
<code>&lt;div class=&quot;contenedor&quot;&gt;
    &lt;div class=&quot;caja caja1&quot;&gt;
        ESTA ES LA CAJA SUPERIOR
        &lt;div class=&quot;caja caja2&quot;&gt;
            &eacute;sta est&aacute; dentro

            &lt;div class=&quot;caja caja3&quot;&gt;
                &eacute;sta es la m&aacute;s profunda
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>

                    <pre class="language-javascript line-numbers">
<code>let caja1 = document.querySelector(".caja1");
let caja2 = document.querySelector(".caja2");
let caja3 = document.querySelector(".caja3");

caja1.addEventListener("click",mostrarEvento);
caja2.addEventListener("click",mostrarEvento);
caja3.addEventListener("click",mostrarEvento);

// FORMA EN LA QUE SE SOLAPAN
function mostrarEvento(e){
    let cajaClickada = e.target.className;
    console.log(cajaClickada);
    console.log(e.type);
}

// FORMA BUENA!!
function mostrarEvento(e){
    e.stopPropagation();
    let cajaClickada = e.target.className;
    console.log(cajaClickada);
    console.log(e.type);
}

// DELEGATION
document.body.addEventListener("click",eliminarElemento);
function eliminarElemento(e) {
    e.preventDefault();
    // Filtramos (delegamos) las acciones según el elemnto sobre el que se ha hecho click
    if(e.target.classList.contains("borrar-curso")) {
        console.log("borrar");
    } else {
        console.log("No borrar");
    }
    if(e.target.classList.contains("agregar-curso")) {
        console.log("Curso Agregado");
    }
}</code></pre>
                </div>
            </section>

            <!-- LocalStorage y SessionStorage -->
            <section>
                <header>
                    <h4>LocalStorage y SessionStorage</h4>
                </header>
                <div class="section__content">
                    <pre class="language-javascript line-numbers">
<code>// LocalStorage
// LocalStorage persiste después de cerrar el navegador
localStorage.setItem("nombre","Pablo");

// Alñadir a Sesion Storage: No persiste al cerrar el navegador
sessionStorage.setItem("edad",38);

// Borrar algo del local storage
localStorage.removeItem("nombre");

// Obtener valor
localStorage.setItem("color","azul");   //setItem agrega o modifica un valor
localStorage.getItem("color")

// Borrar todo el localstorage
localStorage.clear();</code></pre>
                </div>
            </section>
                

            <!-- Objetos -->
            <section>
                <header>
                    <h4>Objetos</h4>
                </header>
                <div class="section__content">
                    <pre class="language-javascript line-numbers">
    <code>// Objetos

</code></pre>                    
                </div>
            </section>
                

            <!-- Clases -->
            <section>
                <header>
                    <h4>Clases</h4>
                </header>
                <div class="section__content">
                    <pre class="language-javascript line-numbers">
    <code>// Clases

</code></pre>                    
                </div>
            </section>
                

            <!-- Ajax y XMLHTTPRequest -->
            <section>
                <header>
                    <h4>Ajax y XMLHTTPRequest</h4>
                </header>
                <div class="section__content">
                    <pre class="language-javascript line-numbers">
    <code>// Ajax y XMLHTTPRequest

</code></pre>                    
                </div>
            </section>
                

            <!-- JavaScript Asíncrono o Async JS -->
            <section>
                <header>
                    <h4>JavaScript Asíncrono o Async JS</h4>
                </header>
                <div class="section__content">
                    <pre class="language-javascript line-numbers">
    <code>// JavaScript Asíncrono o Async JS

</code></pre>                    
                </div>
            </section>
                

            <!-- Fetch API -->
            <section>
                <header>
                    <h4>Fetch API</h4>
                </header>
                <div class="section__content">
                    <pre class="language-javascript line-numbers">
    <code>// Fetch API

</code></pre>                    
                </div>
            </section>
                

            <!-- Arrow Functions -->
            <section>
                <header>
                    <h4>Arrow Functions</h4>
                </header>
                <div class="section__content">
                    <pre class="language-javascript line-numbers">
    <code>// Arrow Functions

</code></pre>                    
                </div>
            </section>
                

            <!-- Async Await -->
            <section>
                <header>
                    <h4>Async Await</h4>
                </header>
                <div class="section__content">
                    <pre class="language-javascript line-numbers">
    <code>// Async Await

</code></pre>                    
                </div>
            </section>
                

    
            </div>
        </article>
    
    



        <hr>
        <article>
            <header><h3>OTRO!! .. Notaciones (reeditar en el futuro)</h3></header>
            <div class="sectionContent">
                <pre class="language-javascript line-numbers">
<code>var primerNombre;   // Camelcase
var primer_nombre;  // Underscore
var PrimerNombre;   // Pascal Case
var primernombre;   // dirty</code></pre>
            </div>
        </article>


        

    </div><!--   END OF WRAPPER -->


<div id="subir">
    <a href="#arriba"><span></span></a>
</div>


    <script src="../js/prism.js"></script>
    <script src="../js/interface.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>
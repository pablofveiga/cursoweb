<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vue JS</title>


        <!-- OG -->
    <meta property="og:title" content="Curso Web Peibol" />
    <meta property="og:description" content="Tema 3 - Introducción a Vue.js" />
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


    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>

</head>
<body id="js-page">
    
<?php include ("../partials/main_menu.php"); ?>


<header class="mainHeader">
    <h1 class="mainHeader__title">Vue JS</h1>
</header>

<div class="wrapper">

    <main class="mainContent">
            
        

        <article class="sectionIntro">
            <header>
                <h2>Introducción al framework Vue JS.</h2>
            </header>

            <div class="sectionContent">
                <p>En este tema abarcaremos el truculento mundo del Vue.js</p>
                <p>Ajusta el respaldo y prepara café.</p>
            </div>           
        </article>


        <article class="sectionIntro">
            <header>
                <h2>Indice de Contenidos</h2>
            </header>

            <div class="sectionContent">
                <div class="temario">
                    <ol class="normal-list">
                        <li><a href="#">Indice</a></li>
                        <li><a href="#">Introducción histórica</a></li>
                        <li>
                            <a href="#">Tema 1: Vue  el DOM</a>
                            <ol>
                                <li><a href="#">Vue Templates</a></li>
                                <li><a href="#">Métodos</a></li>
                                <li><a href="#">Métodos. Acceso a datos.</a></li>
                                <li><a href="#">Templates. Acceso a datos HTML.</a></li>
                                <li><a href="#">Entendiendo las Directivas de Vue.js.</a></li>
                                <li><a href="#">Bloquear re-renderizado con v-once</a></li>
                                <li><a href="#">RAW HTML</a></li>
                                <li><a href="#">Ejercicio Resumen</a></li>
                                <li><a href="#">Event Listeners</a></li>
                                <li><a href="#">Event Modifiers</a></li>
                                <li><a href="#">Listado de Event Modifiers</a></li>
                                <li><a href="#">Keyboard Events</a></li>
                                <li>
                                    <a href="#">Lista de Key Modifiers</a>
                                    <ol>
                                        <li>
                                            <a href="#">System Keys Modifiers</a>
                                            <ol>
                                                <li><a href="#">Combinaciones con .exact</a></li>
                                                <li><a href="#">Mouse buttons modifiers</a></li>
                                            </ol>
                                        </li>
                                    </ol>
                                </li>
                                <li><a href="#">Escribir Javascript en los templates</a></li>
                                <li><a href="#">Two way binding. V-Model</a></li>
                                <li><a href="#">Introducción a methods, computed, watch</a></li>
                                <li><a href="#">Computed</a></li>
                                <li><a href="#">Watch Properties</a></li>
                                <li><a href="#">Clases CSS dinámicas</a></li>
                                <li><a href="#">CSS dinámico: objetos</a></li>
                                <li><a href="#">CSS Dinámico - Sin CSS</a></li>
                                <li><a href="#">Ejercicio - Reactive Properties</a></li>
                            </ol>
                        </li>
                    </ol>
                </div>
            </div>           
        </article>



        <article class="sectionHistoria">
            <header>
                <h3>Introducción histórica.</h3>
            </header>

            <div class="sectionContent">
                <p>Hace ya algún tiempo, nació Vue.js.</p>
                <p>Hoy tú lo estás estudiando.</p>
            </div>           
        </article>

        <!-- DOM -->
        <article id="js2">
            <header>
                <h3>Vue y el DOM</h3>
            </header>

            <!-- Hola Mundo -->
            <section>
                <header>
                    <h4>Vue Templates</h4>
                </header>
                <div class="articleContent">
                    <p>En este ejemplo, vamos a ver un template de Vue donde pasaremos un dato a la notación <strong>{{ }}</strong></p>
                    <p>Esta notación se llama <strong>Interpolación</strong> o <strong>String Interpolation</strong>.</p>

                    <div class="codePen">
                        <p class="codepen" data-height="216" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="ExaNdEg" style="height: 216px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Primera App en Vue">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/ExaNdEg">
                          Primera App en Vue</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                          
                    </div>         

                    <p>En el campo <strong>data</strong> de nuestra instancia de Vue amalcenamos información, a la que se puede acceder directamente mediante la interpolación <strong>{{ }}</strong></p>

                </div>
            </section>     

            <!-- Métodos -->
            <section>
                <header>
                    <h4>Métodos en el template</h4>
                </header>
                <div class="articleContent">
                    <p>Si en nuestro template queremos mostrar el resultado de una función, usaremos el campo (key) <strong>methods</strong> en nuestra instancia de Vue.</p>
                    <p>En el html, lo mostraríamos así: <code class="inlineCode">&lt;p&gt;{{ miFuncion() }}&lt;/p&gt;</code></p>
                    <p>Esto retornaría algo que puede ser colocado en el DOM, es decir, <strong>algo que puede ser convertido a un string</strong> (nada de objetos complejos, ni valores de retorno) </p>
                    <p>Estos valores representados entre <strong>{{ }}</strong> deben estar en el objeto <strong>data</strong> o en el objeto <strong>methods</strong> de nuestra instancia de Vue.</p>

                    <div class="codePen">
                        <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="gObmKrm" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="1.5.- Vue Templates: Methods">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/gObmKrm">
                          1.5.- Vue Templates: Methods</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>         
                    </div>
                </div>
            </section>   

            <!-- Methods. Acceso a datos -->
            <section>
                <header>
                    <h4>Methods. Acceso a datos</h4>
                </header>
                <div class="articleContent">
                    <p>En el ejemplo anterior hemos utilizado una función. Pero si quisieramos en esa función acceder a los elementos de <strong>data</strong>, por ejemplo el elemento "title", usaremos la notación <code class="inlineCode"><strong>this.</strong></code>, quedando como <code class="inlineCode"><strong>this.title</strong></code></p>

                    <div class="codePen">
                        <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="gObmKgW" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="1.6.- Métodos: Acceso a datos">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/gObmKgW">
                          1.6.- Métodos: Acceso a datos</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                 
                    </div>
                </div>
            </section>   

            <!-- Métodos -->
        <!--             
            <section>
                <header>
                    <h4>Methods. Acceso a datos</h4>
                </header>
                <div class="articleContent">
                    <p>En el ejemplo anterior hemos utilizado una función. Pero si quisieramos en esa función acceder a los elementos de <strong>data</strong>, por ejemplo el elemento "title", usaremos la notación <code class="inlineCode">this.</code>, quedando como <code class="inlineCode">this.title</code></p>

                    <div class="codePen">
                        <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="PowbxWr" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="03 - Ejercicio 2">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/PowbxWr">
                          03 - Ejercicio 2</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>         

                </div>
            </section>   
        -->

            
            <!-- Templates: Acceso a datos: datos HTML -->
            <section>
                <header>
                    <h4>Templates: Acceso a datos: datos HTML</h4>
                </header>
                <div class="articleContent">
                    <p>Imaginemos que queremos almacenar y representar un dato en formato html, como por ejemplo, un enlace, o un atributo <code class="inlineCode">title</code> de una imagen.</p>
                    <p>Si utilizamos los atributos HTML, como por ejemplo <code class="inlineCode">href</code> o <code class="inlineCode">title</code> e intentamos usar un template de vue {{ }} dentro de ellos, nos dará un error.</p>

                    <div class="codePen">
                        <p class="codepen" data-height="310" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="WNboLjZ" style="height: 310px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="04 - Ejercicio 4 con errores">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/WNboLjZ">
                          04 - Ejercicio 4 con errores</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>         

                    <p>Dentro de los atributos HTML nunca usaremos templates de Vue.</p>
                    <p>Para eso, usaremos la propiedad <code class="inlineCode">v-bind:</code> + el atributo.</p>
                    <p>Así podríamos usar <code class="inlineCode">v-bind:href="...."</code> o <code class="inlineCode">v-bind:title="...."</code>.</p>
                    <p>Veamos un ejemplo de uso correcto del atributo <strong>v-bind</strong>.</p>

                    <div class="codePen">
                        <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="qBEqgWb" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="05 - Corregir errores del ejercicio 4">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/qBEqgWb">
                          05 - Corregir errores del ejercicio 4</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                     
                    </div>    

                    <p>Como nota importante, la forma corta de <code class="inlineCode">v-bind:attributo=""</code> sería <code class="inlineCode">:attributo=""</code>.</p> 

                    <div class="codePen">
                        <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="QWwpxZJ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="05.5 - Shorthand de v-bind">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/QWwpxZJ">
                          05.5 - Shorthand de v-bind</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                    </div>      
                </div>
            </section>

            <!-- Entendiendo las Directivas de Vue.js -->
            <section>
                <header>
                    <h4>Entendiendo las Directivas de Vue.js</h4>
                </header>
                <div class="articleContent">
                    <p>Una directiva es una insctrucción donde colocamos código. Le dice a Vue que "bindee" algo de mi "data".</p>
                    <p>v-bind toma un argumento (href, title, etc...), y éste espera un atributo que quiere "bindear".</p>
                    <p>v-bind : <i>argumento</i> <i>dato,funcion,...</i></p>
                    <p>De este modo, podemos pasar datos dinámicamente a nuestros atributos HTML</p>
                </div>
            </section>   

            <!-- Bloquear re-renderizado con v-once -->
            <section>
                <header>
                    <h4>Bloquear re-renderizado con v-once</h4>
                </header>
                <div class="articleContent">
                    <p>Con la directiva <code class="inlineCode">v-once</code>, el elemento a bindear sólo se renderizará una vez, independientemente de como cambie posteriormente, ya sea con métodos o funciones.</p>
                    <p><strong>v-once</strong> es muy recomendado para tomar el valor inicial de un dato.</p>

                    <div class="codePen">
                        <p class="codepen" data-height="350" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="XWJNOpb" style="height: 350px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="06 - RAW html">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/XWJNOpb">
                          06 - RAW html</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                    
                    </div>
                </div>
            </section>   
                            
            <!-- RAW HTML -->
            <section>
                <header>
                    <h4>Raw HTML</h4>
                </header>
                <div class="articleContent">
                    <p>Por defecto, Vue no renderiza HTML, solo renderiza texto</p>
                    <p>¿Y si quiero almacenar algo como "&lt;p&gt;hola&lt;/p&gt;"?</p>
                    <p>¿Cómo meteríamos un bloque de código HTML en un template?</p>
                    <p>Para eso no utilizamos la notación <strong>{{ }}</strong>, sino la directiva <strong>v-html="</strong><i>nuestroDatoHTML</i><strong>"</strong></p>

                    <div class="codePen">
                        <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="JjoWBdE" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="6.54 - RAW HTML">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/JjoWBdE">
                          6.54 - RAW HTML</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                     
                    </div>     
                </div>
            </section>
              
            <!-- Ejercicio Resumen -->
            <section>
                <header>
                    <h4>Resumen Templates Vue</h4>
                </header>
                <div class="articleContent">
                    <p>Ejercicio con un poco de todo</p>

                    <div class="codePen">
                        <p class="codepen" data-height="465" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="VwYmOXM" style="height: 465px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="06 - Apendice 1 - Ejercicio resumen resuelto">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/VwYmOXM">
                          06 - Apendice 1 - Ejercicio resumen resuelto</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>
                </div>
            </section>   


            <!-- ejercicio corregido -->
<!--             <section>
                <header>
                    <h4>Corrección del ejercicio. V-Bind</h4>
                </header>
                <div class="articleContent">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius</p>

                    <div class="codePen">
                        <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="vYEyVpp" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="02 - Starging Vue">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/vYEyVpp">
                          02 - Starging Vue</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>         

                </div>
            </section>    -->
              

            <hr>
            <hr>
              
            <!-- Event Listeners -->
            <section>
                <header>
                    <h4>Event Listeners</h4>
                </header>
                <div class="articleContent">
                    <p>En este ejemplo vamos a ver la directiva <strong>v-on</strong>.</p>
                    <p>Si con <strong>v-bind</strong> conectábamos algo en nuestro template para pasarle información, <strong>v-on</strong> funciona al revés, es decir, escuchamos algo que espera recibir algo de nuestro template. Lo que esperamos recibir, es un <strong>evento</strong> al que queremos escuchar, por ejemplo: <strong>v-on:click</strong></p>
                    <p>A parte de <strong>click</strong>, podemos usar muchos más eventos del DOM que veremos más adelante (mouseenter, mouseleave, submit, ...).</p>
                    <p>El parámetro que le enviamos a nuestro event listener, es la función que se debe ejecutar: <strong>v-on:click="increase"</strong>, siendo increase el nombre de la función.</p>

                    <div class="codePen">
                        <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="GRgzYgO" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Introducción a Event Listeners">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/GRgzYgO">
                          Introducción a Event Listeners</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                    </div>      

                    <p>Vamos a complicar un poco el código.</p>
                    <p>Los eventos por defecto, como por ejemploel evento <strong>click</strong>, guardan cierta información.</p>
                    <p>En el caso de algunos eventos de ratón, podemos obtener las coordinadas X e Y de su posición. Esta información está dentro del <strong>"Event Object"</strong> y podemos acceder a ella.</p>
                    <p>Nuestra función tendrá como argumento <strong>event</strong> ó <strong>e</strong> y accederemos a la información de este objeto con ella, en nuestro caso, las coordenadas.</p>

                    <div class="codePen">
                        <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="BayMqqM" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Event Listeners 2 - Accediendo al objeto Event">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/BayMqqM">
                          Event Listeners 2 - Accediendo al objeto Event</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                    </div>      

                    <h5>Pasando argumentos con los eventos</h5>

                    <p>Supongamos que en nuestro botón, en vez de incrementarse por uno, queremos que se incremente por 2, o por 3.</p>
                    <p>Para eso, simplemente le pasamos un argumento a nuestra función "increase"; es decir: <strong>"increase(2)"</strong></p>
                    <p>Y si además, quisiéramos pasarle la información del "Event Object" (coordenadas, etc...), le pasaríamos un segundo parámetro, usando la palabra reservada <strong>$event</strong>, es decir: <strong>"increase(2,$event)"</strong> </p>

                    <div class="codePen">
                        <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="LYEboMz" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="07 - Event Listeners">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/LYEboMz">
                          07 - Event Listeners</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>
                </div>
            </section>   
              
            <!-- Event Modifiers -->
            <section>
                <header>
                    <h4>Event Modifiers</h4>
                </header>
                <div class="articleContent">
                    <p>Imaginemos que queremos que nuestro Event Listener deje de propagarse en una determiada zona.</p>

                    <p>Podríamos hacerlo de un modo chapucero, creando un método para esa área y aplicarle un <strong>stopPropagation()</strong>.</p>
                    <p>Si hicieramos esto, estaríamos creando un método nuevo, y no es el mejor modo de hacerlo. Con un <strong>Event Modifier</strong>.</p>
                    <p>Para eso, después del event listener, ponemos un punto (.) y la palabra "stop", es decir: <strong>v-on:mousemove.stop=" "</strong>, con el valor " " vacío.</p>
                    <p>La palabra <strong>stop</strong> es como un <strong>stopPropagation()</strong>, pero hay más modifiers, como por ejemplo <strong>prevent</strong>.</p>
                    <p>Podemos encadenar modifiers, como por ejemplo: <strong>v-on:click.stop.prevent=" "</strong>.</p>

                    <div class="codePen">
                        <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="gObLNdY" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="08 - Event Modifiers">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/gObLNdY">
                          08 - Event Modifiers</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>
                </div>
            </section>   
              
            <!-- Lista de Event Modifiers -->
            <section>
                <header>
                    <h4>Listado de Event Modifiers</h4>
                </header>
                <div class="articleContent">
                    <p>En Vue existen varios event modifiers:</p>
                    <ul>
                        <li><strong>.stop</strong></li>
                        <li><strong>.prevent</strong></li>
                        <li><strong>.capture</strong></li>
                        <li><strong>.self</strong></li>
                        <li><strong>.once</strong></li>
                        <li><strong>.capture</strong></li>
                    </ul>
                    <pre class="language-html line-numbers"><code>&lt;!-- the click event's propagation will be stopped --&gt; 
&lt;a v-on:click.stop=&quot;doThis&quot;&gt;&lt;/a&gt; 

&lt;!-- the submit event will no longer reload the page --&gt; 
&lt;form v-on:submit.prevent=&quot;onSubmit&quot;&gt;&lt;/form&gt; 

&lt;!-- modifiers can be chained --&gt; 
&lt;a v-on:click.stop.prevent=&quot;doThat&quot;&gt;&lt;/a&gt; 

&lt;!-- just the modifier --&gt; 
&lt;form v-on:submit.prevent&gt;&lt;/form&gt; 

&lt;!-- use capture mode when adding the event listener --&gt;
&lt;!-- i.e. an event targeting an inner element is handled here before being handled by that element --&gt; 
&lt;div v-on:click.capture=&quot;doThis&quot;&gt;...&lt;/div&gt; 

&lt;!-- only trigger handler if event.target is the element itself --&gt; 
&lt;!-- i.e. not from a child element --&gt; 
&lt;div v-on:click.self=&quot;doThat&quot;&gt;...&lt;/div&gt;
</code></pre>
                    <p>
                        Puedes encontrar la documentación aquí: <a href="https://vuejs.org/v2/guide/events.html#Event-Modifiers">lista de event modifiers</a>.
                    </p>
                        
                </div>
            </section>   
              
            <!-- Keyboard Events -->
            <section>
                <header>
                    <h4>Keyboard Events</h4>
                </header>
                <div class="articleContent">
                    <p>Además de los <strong>event modifiers</strong> tenemos <strong>key modifiers</strong> para eventos de teclado.</p>
                    <p>Veamos un ejemplo con un input, que escuche el evento <strong>keyup</strong>, y lance un <i>alert</i> si pulsa la tecla "enter".</p>

                    <div class="codePen">
                        <p class="codepen" data-height="360" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="VwYmowJ" style="height: 360px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="09 - Keyboard Events">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/VwYmowJ">
                          09 - Keyboard Events</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>         

                </div>
            </section>                 
              
            <!-- Lista de Key Modifiers -->
            <section>
                <header>
                    <h4>Listado de Key Modifiers</h4>
                </header>
                <div class="articleContent">
                    <p>En Vue existen dos tipos de key modifiers:</p>
                    <p><strong>Key Codes Modifiers:</strong> generalmente escuchan el presionado de una tecla</p>
                    <p><strong>System Modifier Keys:</strong> escuchan presionado de teclas de sistema y/o ratón.</p>
                    </ul>
                    <h5>Key Modifiers</h5>
                    <pre class="language-html line-numbers"><code>&lt;!-- only call `vm.submit()` when the `key` is `Enter` --&gt; 
&lt;input v-on:keyup.enter=&quot;submit&quot;&gt;</code></pre>

                    <p>La lista de alias para las teclas es esta:</p>
                    <ul>
                        <li><code>.enter</code></li>
                        <li><code>.tab</code></li>
                        <li><code>.delete</code> (captura ambas teclas “Delete” y “Backspace”)</li>
                        <li><code>.esc</code></li>
                        <li><code>.space</code></li>
                        <li><code>.up</code></li>
                        <li><code>.down</code></li>
                        <li><code>.left</code></li>
                        <li><code>.right</code></li>
                    </ul>

                    <p>Se puede usar cualquier <i>Key Name</i> después del evento <strong>(on, up, leave...)</strong> usando la notación <i>kebab case</i></p>
                    <pre class="language-html line-numbers"><code>&lt;input v-on:keyup.page-down=&quot;onPageDown&quot;&gt;</code></pre>


                    <h5>System Keys Modifiers (Modificadores para teclas de sistema)</h5>
                    <p>Puede usar los siguientes modificadores para activar eventos listeners de raton o teclado solo cuando se presiona la tecla modificadora correspondiente:</p>

                    <ul>
                        <li><code>.ctrl</code></li>
                        <li><code>.alt</code></li>
                        <li><code>.shift</code></li>
                        <li><code>.meta</code></li>
                    </ul>

                    <p><code>.meta</code> se refiere a las teclas ⊞ en windows o ⌘ en linux.</p>

                    <br>

                    <h6>Combinaciones: <strong><code>.exact</code></strong> modifier</h6>
                    <p><code>.exact</code> controla la combinación exacta de varios <i>system modifiers</i>: </p>
                    <pre class="language-html line-numbers"><code>&lt;!-- this will fire even if Alt or Shift is also pressed --&gt; 
&lt;button v-on:click.ctrl=&quot;onClick&quot;&gt;A&lt;/button&gt; 

&lt;!-- this will only fire when Ctrl and no other keys are pressed --&gt; 
&lt;button v-on:click.ctrl.exact=&quot;onCtrlClick&quot;&gt;A&lt;/button&gt; 

&lt;!-- this will only fire when no system modifiers are pressed --&gt; 
&lt;button v-on:click.exact=&quot;onClick&quot;&gt;A&lt;/button&gt;</code></pre>


                    <h6>Modificadores de botones de ratón</h6>
                    <p>Exclusivos para pulsaciones de ratón:</p>
                    <ul>
                        <li><code>.left</code></li>
                        <li><code>.right</code></li>
                        <li><code>.middle</code></li>
                    </ul>

                    <p>
                        Puedes encontrar la documentación aquí: <a href="https://vuejs.org/v2/guide/events.html#Key-Modifiers">lista de Key Modifiers</a>.
                    </p>                        
                </div>
            </section>   


            <hr>
            <hr>

            <!-- Escribir Javascript en los templates -->
            <section>
                <header>
                    <h4>Escribir Javascript en los templates</h4>
                </header>
                <div class="articleContent">
                    <p>Hemos de tener en cuenta, que podemos escribir javascript en varias partes de nuestro código Vue, siempre y cuando sea de una sola expresión (nada de chorros inmensos de código).</p>
                    <p>Por ejemplo, en el siguiente ejercicio, puedo duplicar el botón con la función <strong>increase()</strong> y simplemente poner una expresión de javascript como <strong>counter++</strong>.</p>
                    <p>Igualmente, podemos hacer que en nuestro template el contador salga triplicado: <strong>{{ counter * 3 }}</strong></p>
                    <p>Incluso podríamos poner un condicional: <strong>{{ counter * 2 > 10 ? "Mayor de 10" : "Menor de 10" }}</strong></p>

                    <div class="codePen">
                        <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="ZEYwVYo" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Escribir Javascript en nuestro template">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/ZEYwVYo">
                          Escribir Javascript en nuestro template</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                    </div>         

                </div>
            </section>


            <hr>
            <hr>

            <!-- Two way binding. V-Model -->
            <section>
                <header>
                    <h4>Two way binding. V-Model</h4>
                </header>
                <div class="articleContent">
                    <p>Hemos visto como extraer datos, con el <strong>string interpolation {{ }}</strong>, hemos escuchado a eventos, como por ejemplo con <strong>v-on:keyup</strong>; pero ¿y si los queremos usar a la vez?</p>
                    <p>Para eso necesitamos la directiva <strong>v-model</strong>, que comunicará en dos sentidos este elemento (nuestro input), con lo que le indiquemos entre las comillas "", en nuestro caso, el name: <strong>v-model="name"</strong> </p>
                    <p>De este modo, cuando cambiemos el valor del input, este actualizará el valor de la propiedad "name", y lo mostrará en el template.</p>
                    <p>En cuanto al <strong>data-binding</strong> ya hemos visto: <strong>interpolación</strong> con {{ }}, la síntasis <strong>v-bind</strong> para <i>bindear</i> atributos, la síntasis <strong>v-on</strong> para escuchar eventos, y ahora estamos viendo la síntasis <strong>v-model</strong> para poder hacer todo esto al mismo tiempo.</p>

                    <div class="codePen">
                        <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="KKwapJP" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="11 - Two way binding: v-model">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/KKwapJP">
                          11 - Two way binding: v-model</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>
                </div>
            </section>   
              

            <!-- Introducción a methods, computed, watch -->
            <section>
                <header>
                    <h4>Introducción a methods, computed, watch</h4>
                </header>
                <div class="articleContent">
                    <p>Veamos un ejemplo muy sencillo para ver la <strong>reactividad</strong> de los elementos.</p>
                    <div class="codePen">
                        <p class="codepen" data-height="340" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="oNgVjxd" style="height: 340px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Reactivity 1">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/oNgVjxd">
                          Reactivity 1</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                    </div>  

                    <p>Ahora imaginemos que la variable <i>counter</i> la vamos a usar en un montón de sitios diferentes de nuestro código y otras propiedades van a depender de nuestro contador.</p>

                    <p>Vamos a ampliar nuestro código agregando otro botón para restar al contador.</p>                    
                    <p>Como podremos comprobar, nuestro código va a funcionar, pero tenemos duplicada la lína que nos dice si es mayor o menor que 5, ya que se repite en ambos métodos.</p>
                    <div class="codePen">
                        <p class="codepen" data-height="415" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="eYmXpgv" style="height: 415px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Reactivity 2">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/eYmXpgv">
                          Reactivity 2</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                    </div>  

                    <p>Vamos a probar otra opción.</p>
                    <p>Vamos a eliminar nuestros métodos y simplemente incrementar o reducir nuestro contador en la llamada <strong>v-on:click</strong>.</p>
                    <p>El elemento <strong>result</strong> no lo podemos poner como expresión en <strong>data</strong>, ya que <strong>data no es reactiva</strong>.</p>
                    <p>Para este fin, <strong>result</strong> lo pondremos dentro de <strong>methods</strong>, y en nuestro template lo llamaremos mediante la notación <strong>{{ result() }}</strong>.</p>

                    <div class="codePen">
                        <p class="codepen" data-height="310" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="ZEYPbJK" style="height: 310px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Reactivity 3">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/ZEYPbJK">
                          Reactivity 3</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                    </div>

                    <p>Pero la opción anterior tiene un fallo.</p>
                    <p>Que pasaría si añado un tercer botón, que hace algo completamente distinto con nuestro contador, como por ejemplo</p>

                    <div class="codePen noMargin--bottom" style="margin-bottom: 0">
                        <p class="codepen" data-height="330" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="OJPGrNP" style="height: 330px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Reactivity 4">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/OJPGrNP">
                          Reactivity 4</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                    </div>

                    <p>El método <strong>result()</strong> se ejecutará cada vez que se actualice la página, como por ejemplo, cuando alguna de las propiedades de <strong>data</strong> cambien.</p>
                    <p>Pero Vue.js no sabe si la función <strong>result()</strong> usa alguna de los datos que hemos cambiado. En nuestro ejemplo, podemos cambiar el <strong>secondCounter</strong>, y Vue actualizará <strong>result()</strong> sin necesidad de hacerlo.</p>
                    <p>Es decir, Vue no sabe si el <strong>secondCounter</strong> va a influir al método, pero lo ejecuta de todos modos.</p>
                    <p>En ocasiones tendremos funciones mucho más complejas que no queremos ni necesitan ser re-ejecutadas.</p>
                    <p>Para eso, tenemos una nueva propiedad para nuestra instancia de Vue: <strong>computed</strong>.</p>

                    <p>La propiedad u objeto <strong>computed</strong> permite almacenar propiedades, como en nuestro caso <i>result</i>, que es una función que retorna un valor. En nuestro caso, retornará el valor "Greater 5" o "Smaller 5" como en el método <i>result()</i>.</p>

                    <div class="codePen" style="margin-bottom: 0;">
                        <p class="codepen" data-height="410" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="jOERdYv" style="height: 410px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Reactivity 5: Computed">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/jOERdYv">
                          Reactivity 5: Computed</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                    </div>  

                    <p>Aparentemente podríamos pensar que <strong>output</strong> y <strong>result</strong> solo se diferencian en el nombre, pero hay diferencias.</p>
                    <p>Para empezar, las propiedades de computed las llamamos sin los paréntesis <strong>( )</strong>, no la llamo como una función, sino como a una propiedad almacenada en mi obejeto.</p>
                    <p>Toda propiedad almacenada en computed se puede usar de ese modo.</p>

                    <p>Para terminar, veamos mostrando en la consola, las diferencias entre <strong>methods</strong> y <strong>computed</strong>.</p>
                    <p>Cuando pulsamos uno de los botones para el primer contador, veremos que se ejecutan tanto el <strong>method</strong>, como el <strong>computed</strong>, mientras que si pulsamos sobre el botón para el <i>segundo contador</i>, solo se ejecutará el <strong>method</strong>.</p>
                    <p><strong>methods</strong> se ejecutará siempre que pase algo en el template. Nunca se debe usar para cachear un valor, ya que se estará recalculando constantemente.</p>
                    <p><strong>computed</strong> debe usarse si por ejemplo,  queremos <i>"cachear"</i> el valor, ya que no va a estar recalculándose todo el rato.</p>

                    <div class="codePen">
                        <p class="codepen" data-height="460" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="dyPLaav" style="height: 460px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Reactivity 6: Showing on console the differences betwen methods and computed">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/dyPLaav">
                          Reactivity 6: Showing on console the differences betwen methods and computed</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                    </div>

                    <p>Recuerda que:</p>
                    <p>Las propiedades computadas nos permiten hacer cálculos y transformaciones en nuestros datos.</p>
                    <p>Las propiedades computadas se usan para transformar datos para nuestra capa de presentación; no deberían alterar o cambiar los datos existentes.</p>
                    <p>Cuando queremos cambiar el valor de los datos, usamos <strong>methods</strong>.</p>
                    <p>Cuando queremos cambiar la presentación de los datos, usamos <strong>computed</strong>.</p>


<!-- 
                    <div class="codePen">
                        <p class="codepen" data-height="400" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="VwYPLNQ" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="12.1 - Planteamiendo de methods, computed, watch">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/VwYPLNQ">
                          12.1 - Planteamiendo de methods, computed, watch</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>
 -->


                </div>
            </section>   
              
            <!-- Computed -->
<!--             <section>
                <header>
                    <h4>Computed</h4>
                </header>
                <div class="articleContent">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius</p>

                    <div class="codePen">
                        <p class="codepen" data-height="460" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="povRwey" style="height: 460px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="12.2 - Computed (II parte)">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/povRwey">
                          12.2 - Computed (II parte)</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>
                </div>
            </section>    -->
                            
            <!-- Watch Properties -->
            <section>
                <header>
                    <h4>Watch Properties</h4>
                </header>
                <div class="articleContent">
                    <p>Cuando estamos trabajando con dependencias <i>(dependencies)</i>, Vue tiene otra forma más de hacer estas cosas: <strong>watch</strong></p>
                    <p>Con <strong>computed</strong> definimos una propiedad, y como una función le decimos a la lógica cómo debe ser <i>computada</i> esa propiedad.</p>
                    <p>Con <strong>watch</strong> funciona un poco al revés.</p>
                    <p>Como <i>key</i> decimos qué propiedad queremos observar <i>(watch)</i>, y como <i>value</i> el código que se ejecutará cuando esa propiedad cambie.</p>
                    <p>En la función, especifico el código que se ejecutará cuando cambie el contador, y Vue le pasa el valor de ese cambio, como <i>value</i>.</p>
                    <p>Es importante saber que <strong>computed necesita ser síncrono</strong>, mientras <strong>watch es siempre para taréas asíncronas</strong></p>
                    <p>En nuestro ejemplo, vamos a resetear el contador pasados dos segundos.</p>
                    <p>Para eso debemos almacenar una instancia de Vue en una instancia separada: <strong><code>var vm = this;</code></strong> y así tener acceso a todos los elementos y funciones de nuestra instancia.</p>


                    <div class="codePen" style="margin-bottom: 0;">
                        <p class="codepen" data-height="530" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="NWPdwKV" style="height: 530px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="13.- Watch Properties">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/NWPdwKV">
                          13.- Watch Properties</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>

                    <p>Como podemos observar, con <strong>watch</strong> no estamos definiendo el valor de ninguna propiedad, no tiene ningún <strong>return</strong> ni esta definiendo el valor de ninguna propiedad para ser recalculada. Estamos especificando un código que se ejecutará cuando una propiedad (definida como <i>key</i>) cambia.</p>
                </div>
            </section>   

            <section>
                <header>
                    <h4>Resumen de las opciones de la instancia de Vue</h4>
                </header>
                <div class="articleContent">
                    <p>En la instancia de Vue, hemos visto hasta ahora:</p>
                    <p><strong>el:</strong> Conectar con el DOM</p>
                    <p><strong>data:</strong> Almacena datos para ser usados</p>
                    <p><strong>methods:</strong> Métodos para la instancia de Vue</p>
                    <p><strong>computed:</strong> Propiedades dependientes</p>
                    <p><strong>watch:</strong> Ejecuta código sobre cambios en datos</p>
                </div>
            </section>


            <!-- Ejercicio - Reactive Properties -->
            <section>
                <header>
                    <h4>Ejercicio - Reactive Properties</h4>
                </header>
                <div class="articleContent">
                    <p>Veamos un ejercicio de resumen con <strong>reactive properties</strong></p>

                    <div class="codePen">
                        <p class="codepen" data-height="460" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="abzJmMx" style="height: 460px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Ejercicio 23 - Reactive Properties">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/abzJmMx">
                          Ejercicio 23 - Reactive Properties</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>
                </div>
            </section>   
              
            <hr>
            <hr>
                            
            <!-- Clases CSS dinámicas -->
            <section>
                <header>
                    <h4>Clases CSS dinámicas</h4>
                </header>
                <div class="articleContent">
                    <p>En el siguiente ejemplo, nuestro código javascript de Vue no contiene métodos, ni computed. Simplemente definimos el dato <i>attachRed</i> y le damos un valor inicial de <i>false</i>.</p>
                    <p>Veamos lo que Vue puede hacer aquí.</p>
                    <p>Para empezar, creamos un evento <strong>@click (ó v-on:click)</strong> que hará que al pulsar, el valor de <i>attachRed</i> se negará, es decir, pasará de false a true, o viceversa: <code>@click="attachRed = !attachRed"</code>  </p>
                    <p>Si queremos hacer un <i>condicional</i> para usar la clase, debemos bindear <strong>:class (ó v-bind:class)</strong>, y como argumento le pasamos un objeto de javascipt: <code>{red: attachRed }</code>; este objeto tiene una <strong>clase CSS como key</strong> y <strong>como valor, la condición de si es true o false</strong>.</p>
                    <p>Con nuestro código, le decimos que si la propiedad <i>attachRed</i> es <i>true</i>, le asigne <i>(bindee)</i> la clase <i>red</i>.</p>
                    <p>Si copiamos ese código: <code>@class="{red: attachRed}"</code> en otro div, reaccionará del mismo modo.</p>

                    <div class="codePen">
                        <p class="codepen" data-height="300" data-theme-id="default" data-default-tab="css,result" data-user="pablofv" data-slug-hash="RwNpbXM" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="14.1 - Clases CSS dinámicas">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/RwNpbXM">
                          14.1 - Clases CSS dinámicas</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>
                </div>
            </section>   
                         
            <!-- CSS dinámico: objetos -->
            <section>
                <header>
                    <h4>Clases CSS dinámicas: usando objetos</h4>
                </header>
                <div class="articleContent">
                    <p>Hemos visto como cambiar clases CSS dinámicamente, pero ¿qué pasa si no queremos almacenar ese objeto: <code>@class="{red: attachRed}"</code> en nuestro HTML?</p>
                    <p>Primero ampliemos ese objeto: <code>@class="{red: attachRed, blue: !attachRed}"</code></p>
                    <p>Tengamos en mente que este objeto podría crecer y crecer, y no es bueno tenerlo en el HTML.</p>
                    <p>Para eso vamos a nuestra instancia de Vue, y creamos una <strong>computed property</strong> que dependerá de <strong>attachRed</strong>.</p>
                    <p>A esa propiedad la llamaremos <i>divClasses</i>, que es una función que me retornará un objeto javascript,  y es lo que usaremos en lugar de nuestro antiguo objeto javascript sobre el HTML.</p>

                    <div class="codePen">
                        <p class="codepen" data-height="360" data-theme-id="default" data-default-tab="css,result" data-user="pablofv" data-slug-hash="JjoWjRy" style="height: 360px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="14.2.- CSS dinámico: objetos">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/JjoWjRy">
                          14.2.- CSS dinámico: objetos</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>
                </div>
            </section>   


            <!-- Clases CSS dinámicas: usando nombres -->
            <section>
                <header>
                    <h4>Clases CSS dinámicas: usando nombres</h4>
                </header>
                <div class="articleContent">
                    <p>Algunas veces no quieres decidir si debemos o no añadir una clase, pero queremos calcular o decidir dinámicamente qué clase debe ser añadida.</p>
                    <p>Vamos a crear un <strong>input</strong> y vamos a relacionar su valor con las clases con el ya visto <strong>v-model</strong>.</p>
                    <p>Nuestro input quedará así: <code>&lt;input type="text" v-model="color"&gt;</code>, por lo que deberemos crear una propiedad <strong>color</strong> dentro del objeto <strong>data</strong> de nuestra instancia de Vue.</p>
                    <p>A ese dato le podemos dar un valor inicial o no. En nuestro ejemplo le hemos puesto el valor <i>"green"</i>, que será la clase que utilizará por defecto.</p>
                    <p>Nuestro div, para ser reactivo, quedará así: <code>&lt;div class="demo" :class="color"&gt;&lt;/div&gt;</code>, y cogerá las clases que le digamos desde nuestro input.</p>
                    <p>Con esto no le estamos diciendo que ponga la clase con un <i>true</i> o <i>false</i>, sino que la estamos asignando directamente el nombre de una clase en el <strong>input</strong>, que es almacenada en la propiedad <strong>color</strong> a través del input en este caso.</p>
                    <p>También podemos usar múltiples clases, usando la síntaxis de <strong>[ ]</strong>.</p>
                    <p>Vamos a hacerlo en un cuarto div, y vamos a bindear: <strong>:class="[color, {red: attachRed}]"</strong></p>
                    <p>Estamos creando un <strong>array de clases</strong> donde Vue las analiza y las fusiona en una lista de clases.</p>
                    <p>Aquí Vue ve primero una clase: el valor de  <strong>color</strong>, y luego ve un objeto donde hay un par <i>key : value</i>, donde <i>key</i> es la clase, y <i>value</i> es la condición que se debe cumplir para tomar ese valor.</p>

                    <div class="codePen">
                        <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="JjoWJep" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="14.3.- CSS dinamico. Objetos:  espacio de nombres">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/JjoWJep">
                          14.3.- CSS dinamico. Objetos:  espacio de nombres</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                       
                    </div>
                </div>
            </section>   



                         
            <!-- CSS Dinámico - Sin CSS -->
            <section>
                <header>
                    <h4>CSS Dinámico - Sin CSS</h4>
                </header>
                <div class="articleContent">
                    <p>Vamos a partir del ejemplo original, muy simplificado. Tres cajas, y ahora dos inputs.</p>
                    <p>Anteriormente estábamos trabajando con clases CSS, ahora vamos a fijarnos en los estilos individuales: <i>style</i>.</p>
                    <p>En la primera caja, vamos a bindear el estilo <strong>background-color</strong>. Para esto lo podríamos hacer de dos modos:</p>
                    <p><code>:style="{'background-color': color}"</code></p>
                    <p>o</p>
                    <p><code>:style="{backgroundColor: color}"</code></p>
                    <p>En ambos casos, (solo cambia la notación), estamos bindeando la propiedad <i>color</i> para asignarla al <i>background-color</i>.</p>
                    <p>Pero ¿y si quisieramos pasarle más propiedades?</p>
                    <p>Para eso, lo que vamos a pasarle es un objeto, y lo vamos a crear con una <strong>computed property</strong> llamada <i>myStyle</i>, que retornará un objeto, que usaremos en nuestro <strong>:style="myStyle"</strong></p>
                    <p>En este objeto le vamos a pasar el <strong>color</strong>, y además la propiedad <strong>width</strong> que bindearemos en el segundo <i>input</i> con su <i>v-model="width"</i></p>

                    <div class="codePen">
                        <p class="codepen" data-height="380" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="LYEWEya" style="height: 380px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="14.4.- CSS Dinámico - Sin CSS">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/LYEWEya">
                          14.4.- CSS Dinámico - Sin CSS</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>
                </div>
            </section>
                         



                         
            <!-- CSS Dinámico - Sin CSS, con Array Sintax -->
            <section>
                <header>
                    <h4>CSS Dinámico - Sin CSS, con Array Sintax</h4>
                </header>
                <div class="articleContent">
                    <p>Para ver la síntaxis de array, vamos a usar nuestro tercer div y vamos a bindear usando la síntaxis de array: <strong>:style="[  ]"</strong>.</p>
                    <p>Crearemos una expresión como esta: <strong>:style="[myStyle, {height: width + 'px'}]"</strong></p>
                    <p>Ahora nuestra tercera caja también cambiará en altura cuando la haga en anchura.</p>

                    <div class="codePen" style="margin-bottom: 0">
                        <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="qBEGXJg" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="14.5 - CSS Dinámico sin CSS, síntaxis de Array">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/qBEGXJg">
                          14.5 - CSS Dinámico sin CSS, síntaxis de Array</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                 
                    </div>

                    <p>Hemos visto que hay diferentes síntaxis para pasar clases y estilos a nuestros elementos.</p>
                    <p>Usando el bindeo de estilos con Vue, hará que este use automáticamente los prefijos para que funcionen en todos los navegadores.</p>
                </div>
            </section>



            <!-- Ejercicio de Styling con Vue -->
            <section>
                <header>
                    <h4>Ejercicio de Styling con Vue</h4>
                </header>
                <div class="articleContent">
                    <p>Vamos a realizar un ejercicio resumen sobre <strong>styling</strong></p>
                    <p>TODO: escribir planteamiento</p>


                    <div class="codePen" style="margin-bottom: 0">
                        <p class="codepen" data-height="800" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="MWYdvNV" style="height: 800px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Ejercicio de Styling resuelto">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/MWYdvNV">
                          Ejercicio de Styling resuelto</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>              
                    </div>
                </div>
            </section>



        </article>
    </main>

    <aside class="sidebar">
        <?php include("../partials/_vueAside.php") ?>        
    </aside>


</div><!--   END OF WRAPPER -->



<div id="subir">
    <a href="#arriba"><span></span></a>
</div>

    

<script async src="https://static.codepen.io/assets/embed/ei.js"></script>  
    <script src="../js/prism.js"></script>
    <script src="../js/interface.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>
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

        <article class="sectionIntro">
            <header>
                <h2>Introducción al framework Vue JS.</h2>
            </header>

            <div class="sectionContent">
                <p>En este tema abracaremos el truculento mundo del JavaScript</p>
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
<!--             <section>
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




              
            <!-- ejercicio -->
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
                    <pre class="language-html line-numbers"><code>
</code></pre>

                    <p style="color: red;font-size: 1.2em">Esta sección está inacabada</p>

                    <p>
                        Puedes encontrar la documentación aquí: <a href="https://vuejs.org/v2/guide/events.html#Key-Modifiers">lista de Key Modifiers</a>.
                    </p>
                        
                </div>
            </section>   



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

            <!-- Two way binding. V-Model -->
            <section>
                <header>
                    <h4>Two way binding. V-Model</h4>
                </header>
                <div class="articleContent">
                    <p>Hemos visto como extraer datos, con el <strong>string interpolation {{ }}</strong>, hemos escuchado a eventos, como por ejemplo con <strong>v-on:keyup</strong>; pero ¿y si los queremos usar a la vez?</p>
                    <p>Para eso necesitamos la directiva <strong>v-model</strong>, que comunicará en dos sentidos este elemento (nuestro input), con lo que le indiquemos entre las comillas "", en nuestro caso, el name: <strong>v-model="name"</strong> </p>

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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius</p>

                    <div class="codePen">
                        <p class="codepen" data-height="400" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="VwYPLNQ" style="height: 400px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="12.1 - Planteamiendo de methods, computed, watch">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/VwYPLNQ">
                          12.1 - Planteamiendo de methods, computed, watch</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>         

                </div>
            </section>   
              
            <!-- Computed -->
            <section>
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
            </section>   
                            
            <!-- Watch Properties -->
            <section>
                <header>
                    <h4>Watch Properties</h4>
                </header>
                <div class="articleContent">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius</p>

                    <div class="codePen">
                        <p class="codepen" data-height="530" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="NWPdwKV" style="height: 530px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="13.- Watch Properties">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/NWPdwKV">
                          13.- Watch Properties</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>         

                </div>
            </section>   
                            
            <!-- Clases CSS dinámicas -->
            <section>
                <header>
                    <h4>Clases CSS dinámicas</h4>
                </header>
                <div class="articleContent">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius</p>

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
                    <h4>CSS dinámico: objetos</h4>
                </header>
                <div class="articleContent">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius</p>

                    <div class="codePen">
                        <p class="codepen" data-height="360" data-theme-id="default" data-default-tab="css,result" data-user="pablofv" data-slug-hash="JjoWjRy" style="height: 360px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="14.2.- CSS dinámico: objetos">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/JjoWjRy">
                          14.2.- CSS dinámico: objetos</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius</p>

                    <div class="codePen">
                        <p class="codepen" data-height="380" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="LYEWEya" style="height: 380px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="14.4.- CSS Dinámico - Sin CSS">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/LYEWEya">
                          14.4.- CSS Dinámico - Sin CSS</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>         

                </div>
            </section>
                         
            <!-- Ejercicio - Reactive Properties -->
            <section>
                <header>
                    <h4>Ejercicio - Reactive Properties</h4>
                </header>
                <div class="articleContent">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius</p>

                    <div class="codePen">
                        <p class="codepen" data-height="460" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="abzJmMx" style="height: 460px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Ejercicio 23 - Reactive Properties">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/abzJmMx">
                          Ejercicio 23 - Reactive Properties</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>         

                </div>
            </section>   




              
        </article>


        

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
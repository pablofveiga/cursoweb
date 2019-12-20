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

                    <div class="codePen">
                        <p class="codepen" data-height="216" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="ExaNdEg" style="height: 216px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Primera App en Vue">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/ExaNdEg">
                          Primera App en Vue</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                          
                    </div>         

                    <p>Los elementos del objeto <strong>data</strong> se acceden directamente mediante la notación <strong>{{ }}</strong></p>

                </div>
            </section>     

            <!-- Métodos -->
            <section>
                <header>
                    <h4>Métodos en el template</h4>
                </header>
                <div class="articleContent">
                    <p>Si en nuestro template queremos mostrar el resultado de una función, usaremos el objeto <strong>methods</strong> en nuestra instancia de Vue.</p>
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
                    <p>En el ejemplo anterior hemos utilizado una función. Pero si quisieramos en esa función acceder a los elementos de <strong>data</strong>, por ejemplo el elemento "title", usaremos la notación <code class="inlineCode">this.</code>, quedando como <code class="inlineCode">this.title</code></p>

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
                    <p>¿Cómo meteríamos un bloque de código HTML en un template?</p>
                    <p>Para eso no utilizamos la notación <strong>{{ }}</strong>, sino la directiva <strong>v-html="nuestroDatoHTML"</strong></p>

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
            <section>
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
            </section>   
              


              
            <!-- Event Listeners -->
            <section>
                <header>
                    <h4>Event Listeners</h4>
                </header>
                <div class="articleContent">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius</p>

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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius</p>

                    <div class="codePen">
                        <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="gObLNdY" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="08 - Event Modifiers">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/gObLNdY">
                          08 - Event Modifiers</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>         

                </div>
            </section>   
              
            <!-- Keyboard Events -->
            <section>
                <header>
                    <h4>Keyboard Events</h4>
                </header>
                <div class="articleContent">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius</p>

                    <div class="codePen">
                        <p class="codepen" data-height="360" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="VwYmowJ" style="height: 360px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="09 - Keyboard Events">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/VwYmowJ">
                          09 - Keyboard Events</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                          on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>                        
                    </div>         

                </div>
            </section>                 

            <!-- Escribir Javascript en los templates -->
            <section>
                <header>
                    <h4>Escribir Javascript en los templates</h4>
                </header>
                <div class="articleContent">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius</p>

                    <div class="codePen">
                        <p class="codepen" data-height="360" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="VwYmowJ" style="height: 360px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="09 - Keyboard Events">
                          <span>See the Pen <a href="https://codepen.io/pablofv/pen/VwYmowJ">
                          09 - Keyboard Events</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius</p>

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
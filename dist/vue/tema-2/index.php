<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vue JS - Tema 2</title>


        <!-- OG -->
    <meta property="og:title" content="Curso Web Peibol" />
    <meta property="og:description" content="Vue.js - Tema 2: Condicionales y Listados" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.pablofv.com/cursoweb/tema1/" />
    <meta property="og:image" content="http://www.pablofv.com/cursoweb/pics/og-tema1.jpg" />
	<meta property="og:image:type" content="image/jpeg" /> 
	<meta property="og:image:width" content="200" /> 
	<meta property="og:image:height" content="200" />    
    <meta property="og:locale" content="es" />

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../css/styles.css?v=1.1">
	<meta name="viewport" content="width=device-width, initial-scale=1">


    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>

</head>
<body id="js-page">
    
<?php include ("../../partials/main_menu.php"); ?>


<!--
    NOTA IMPORTANTE:
    ESTE ARCHIVO LLEVA EL NUEVO MARCADO BEM QUE SE VA A USAR
-->


<header class="mainHeader">
    <h1 class="mainHeader__title">Vue JS - Tema 2: Condicionales y Listados</h1>
</header>

<div class="wrapper">

    <main class="mainContent">

        <section class="section">
            <header class="section__header">
                <h2 class="section__header__title">Introducción</h2>
            </header>
            <div class="section__content">
                <p>En el tema 1 hemos visto como Vue interactua con el DOM, escucha eventos, etc.</p>
                <p>En este tema 2 vamos a ampliar temario. Vamos a aprender a ejecutar código en ciertas circunstancias.</p>
                <p>También aprenderemos a hacer listados de arrays y objetos.</p>
            </div>           
        </section>

        <section class="section">
            <header class="section__header">
                <h2 class="section__header__title">v-if</h2>
            </header>

            <div class="section__content">
                <p>Con la directiva <strong>v-if</strong> mostraremos contenido condicionalmente a que se cumpla una condición.</p>
                <p>En este ejemplo, hemos puesto como condición que el valor <code>show</code> se cumpla (sea verdadero).</p>
                <p>Para esto, definimos el valor como <code>true</code> en nuestra instancia, y creamos un botón que cambie su valor de <code>true</code> a <code>false</code>.</p>

                <div class="codePen">
                    <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="rNVBzbj" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="V-IF (1)">
                      <span>See the Pen <a href="https://codepen.io/pablofv/pen/rNVBzbj">
                      V-IF (1)</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                      on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>

                    <p>Hemos de remarcar que con <code>v-if</code> <strong>eliminamos del DOM</strong>, no lo escondemos con <i>display: none</i>, ni nada de eso.</p>                  

                </div>
            </div>           
        </section>

        <section class="section">
            <header class="section__header">
                <h2 class="section__header__title">v-else</h2>
            </header>

            <div class="section__content">
                <p><strong>v-if</strong> se puede ampliar con <strong>v-else</strong>, al igual que los condicionales <code>if {} else {}</code></p>
                <p>La directiva <strong>v-else</strong> buscará la condición <strong>v-if</strong> inmediatamente anterior a ella.</p>
                <p>Podemos usar tantas condicionales <strong>v-if</strong> como deseémos.</p>
                <div class="codePen">
                    <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="MWwgEbm" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="V-ELSE">
                      <span>See the Pen <a href="https://codepen.io/pablofv/pen/MWwgEbm">
                      V-ELSE</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                      on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                </div>
            </div>           
        </section>


        <section class="section">
            <header class="section__header">
                <h2 class="section__header__title">v-else-if</h2>
            </header>

            <div class="section__content">
                <p>Esta directiva es nueva a partir de la versión 2.1.0</p>
                <p>Sirve como bloque <code>else if</code> para <strong>v-if</strong></p>
                <p>Puede ser encadenado varias veces y debe seguir inmediatamente a un elemento <strong>v-if</strong> o <strong>v-else</strong>.</p>

                <div class="codePen">
                    <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="zYGOEJa" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="V-ELSE-IF">
                      <span>See the Pen <a href="https://codepen.io/pablofv/pen/zYGOEJa">
                      V-ELSE-IF</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                      on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                </div>
            </div>           
        </section>


        <section class="section">
            <header class="section__header">
                <h2 class="section__header__title">Usando template para v-if</h2>
            </header>

            <div class="section__content">
                <p>En este ejemplo vamos a usar la etiqueta html5 <a href="https://www.w3schools.com/tags/tag_template.asp" target="_blank">template</a>.</p>
                <p>Esta etiqueta  <code>&lt;template&gt;</code> no se renderiza en el DOM, a menos que lo hagamos mediante javascript. En nuestro caso lo haremos con Vue.</p>

                <div class="codePen">
                    <p class="codepen" data-height="290" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="WNveXNE" style="height: 290px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="V-IF CON TEMPLATE">
                      <span>See the Pen <a href="https://codepen.io/pablofv/pen/WNveXNE">
                      V-IF CON TEMPLATE</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                      on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                </div>

                <p>La idea es agrupar ciertos elementos para mostrarlos en un <strong>template</strong>.</p>
                <p>Podríamos haber hecho esto con un <code>div</code>, pero usando <strong>template</strong>, que es más elegante, y por ejemplo, no hereda estilos de ningún div. </p>
            </div>           
        </section>

        <section class="section">
            <header class="section__header">
                <h2 class="section__header__title">v-show</h2>
            </header>

            <div class="section__content">
                <p>Habíamos dicho que con <strong>v-if</strong> eliminábamos del DOM los elementos. O bien los añadíamos, pero nunca los ocultabamos con CSS.</p>
                <p>Si queremos simplemente ocultarlo, con <i>display: none</i> tenemos que usar la directiva <strong>v-show</strong>.</p>

                <div class="codePen">
                    <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="bGdbYML" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="V-SHOW">
                        <span>See the Pen <a href="https://codepen.io/pablofv/pen/bGdbYML">  V-SHOW</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)  on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>

                    <p>Fijémonos que mientras el <code>template</code> ha desaparecido del DOM, el párrafo con <code>v-show</code> permanece en el DOM, aunque con un <code>style:"display: none;"</code></p>
                    <p><strong>v-show</strong> no es la forma recomendada en cuanto a menor número de elementos en el DOM, mejor estará nuestro código. Pero puede que en algunas ocasiones necesitemos contar con ese elemento, a pesar de estar oculto.</p>
                </div>
            </div>           
        </section>


        <section class="section">
            <header class="section__header">
                <h2 class="section__header__title">v-for</h2>
            </header>

            <div class="section__content">
                <p>Para este ejemplo hemos creado un array de ingredientes y otro array con objetos de personas.</p>
                <p>Para recorrer los elementos de nuestro array, utilizamos la directiva <strong>v-for</strong></p>
                <div class="codePen">
                    <p class="codepen" data-height="300" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="vYOBWqZ" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="V-FOR">
                      <span>See the Pen <a href="https://codepen.io/pablofv/pen/vYOBWqZ">
                      V-FOR</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                      on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                </div>
            </div>           
        </section>


        <section class="section">
            <header class="section__header">
                <h2 class="section__header__title">Obtener el índice (index)</h2>
            </header>

            <div class="section__content">
                <p>Para obtener el índice de nuestro elemento, no basta con poner el típico <code>i</code>.</p>
                <p>Debemos expresar el <i>nombre</i> entre paréntesis, seguido de una coma y una variable para el índice.</p>
                <p>Recordad que podemos llamar como queramos a estos nombres, <code>(ingredient, i)</code>, pero deben llevar este orden.</p>

                <div class="codePen">
                    <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="poJzppo" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="V-FOR, INDEX">
                      <span>See the Pen <a href="https://codepen.io/pablofv/pen/poJzppo">
                      V-FOR, INDEX</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                      on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                </div>
            </div>           
        </section>

        <section class="section">
            <header class="section__header">
                <h2 class="section__header__title">Template sintax para v-for</h2>
            </header>

            <div class="section__content">
                <p>Imaginemos que queremos mostrar los datos según un <strong>template</strong> personalizado.</p>
                <p>Una vez más, usaremos la etiqueta <strong>template</strong> para mostrar la información.</p>
                <div class="codePen">
                    <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="mdJbpaz" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="V-FOR - TEMPLATE">
                      <span>See the Pen <a href="https://codepen.io/pablofv/pen/mdJbpaz">
                      V-FOR - TEMPLATE</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                      on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                </div>
            </div>           
        </section>


        <section class="section">
            <header class="section__header">
                <h2 class="section__header__title">v-for en objetos</h2>
            </header>

            <div class="section__content">
                <p>Podemos hacer el bucle <strong>v-for</strong> en un objeto de varias formas.</p>
                <p>La forma simple, accediendo directamente a la propiedad deseada, sería el método tradicional: <strong>{{persona.nombre}}</strong>.</p>
                <pre class="language-html line-numbers"><code>&lt;li v-for="person in persons" &gt;{{person.name}}&lt;/li&gt;</code></pre>
                <p>Si queremos acceder a el par <i>key, value</i> lo haremos así:</p>
                <pre class="language-html line-numbers"><code>&lt;li v-for="person in persons" &gt; 
    &lt;span v-for="value in person" &gt;{{value}}&lt;/span&gt;
&lt;/li&gt;</code></pre>
                <p>Esto nos listaría todos los valores de los elementos (personas en este caso).</p>
                <p>Para obtener el <i>key</i> del elemento, lo haríamos del siguiente modo:</p>
                <pre class="language-html line-numbers"><code>&lt;li v-for="person in persons" &gt; 
    &lt;div v-for="(value, key) in person" &gt;{{key}}: {{value}}&lt;/div&gt;
&lt;/li&gt;</code></pre>
                <p>Recordad que podemos llamar a <i>value</i> y <i>key</i> como queramos, pero el orden es importante.</p>
                <p>Por último, si queremos mostrar el <i>index</i>, añadiríamos un tercer parámetro a nuesrto bucle y el código quedaría así:</p>
                <pre class="language-html line-numbers"><code>&lt;li v-for="person in persons" &gt; 
    &lt;div v-for="(value, key, index) in person" &gt;{{key}}: {{value}} - {{index}}&lt;/div&gt;
&lt;/li&gt;</code></pre>
                <p>A continuacion podemos observar los ejemplos comentados.</p>
                <div class="codePen">
                    <p class="codepen" data-height="610" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="xxGKjRE" style="height: 610px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="V-FOR - Objects">
                      <span>See the Pen <a href="https://codepen.io/pablofv/pen/xxGKjRE">
                      V-FOR - Objects</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                      on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                </div>
            </div>           
        </section>


        <section class="section">
            <header class="section__header">
                <h2 class="section__header__title">V-for con números</h2>
            </header>

            <div class="section__content">
                <p>Si lo que queremos iterar es una lista de números (enteros), usaremos la notación: <strong>v-for="numero in 10"</strong></p>
                <p>La variable <i>numero</i> se puede llamar como quiera, pero al iterarla en un número entero, <i>10</i>, lo que Vue hará es iterar <i>numero</i> del 1 al 10</p>
                <div class="codePen">
                    <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="zYGOWVY" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="V-FOR  OBJECTS">
                      <span>See the Pen <a href="https://codepen.io/pablofv/pen/zYGOWVY">
                      V-FOR  OBJECTS</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                      on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                </div>
            </div>           
        </section>


        <section class="section">
            <header class="section__header">
                <h2 class="section__header__title">Trazabilidad de elementos usando v-for</h2>
            </header>

            <div class="section__content">
                <p>Imaginemos que el valor de algunos de los datos que mostramos se modifica por cualquier razón.</p>
                <p>Para ver esto, crearemos un botón que añade un <i>ingredient</i> a nuestro array de ingredientes.</p>
                <p>Vue.js actualiza la lista actualizando la posición en el array donde algo cambia.</p>
                <p>Si queremos que Vue sea más seguro y no se fije solamente en la posición, sino en la llave <i>(key)</i> sobre la que estamos modificando.</p>
                <p>Para eso tenemos que asignar una <i>key única</i> a ese item, y para ello utilizamos <strong>v-bind:key="ingredient"</strong></p>
                <div class="codePen">
                    <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="vYOBjgW" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="V-FOR - Trazabilidad">
                      <span>See the Pen <a href="https://codepen.io/pablofv/pen/vYOBjgW">
                      V-FOR - Trazabilidad</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                      on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                </div>
            </div>           
        </section>


        <section class="section">
            <header class="section__header">
                <h2 class="section__header__title">Ejercicio resumen del Tema 2</h2>
            </header>

            <div class="section__content">
                <p>Ejercicio recopilatoreision</p>
                <div class="codePen">
                    <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="html,result" data-user="pablofv" data-slug-hash="PoqYeOd" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Ejercicio Condicionales">
                      <span>See the Pen <a href="https://codepen.io/pablofv/pen/PoqYeOd">
                      Ejercicio Condicionales</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                      on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                </div>
            </div>           
        </section>



    </main>

    <aside class="sidebar">
        <?php include("../../partials/_vueAside.php") ?>        
    </aside>


</div><!--   END OF WRAPPER -->



<div id="subir">
    <a href="#arriba"><span></span></a>
</div>

<script async src="https://static.codepen.io/assets/embed/ei.js"></script>  
    <script src="../../js/prism.js"></script>
    <script src="../../js/interface.js"></script>
    <script src="../../js/app.js"></script>

<script async src="https://static.codepen.io/assets/embed/ei.js"></script>    
</body>
</html>
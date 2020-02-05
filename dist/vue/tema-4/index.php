<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vue JS - Tema 4 - Entendiendo la instancia de Vue</title>


        <!-- OG -->
    <meta property="og:title" content="Curso Web Peibol" />
    <meta property="og:description" content="Vue.js - Tema 4 - Entendiendo la instancia de Vue" />
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


<header class="mainHeader">
    <h1 class="mainHeader__title">Vue JS - Tema 4 - Entendiendo la instancia de Vue</h1>
</header>

<div class="wrapper">

    <main class="mainContent">

        <article class="sectionIntro">
            <header>
                <h2>Introducción</h2>
            </header>

            <div class="sectionContent">
                <p>En los temas anteriores hemos aprendido bastantes cosas sobre Vue.js</p>
                <p>Hemos aprendido a interactuar con el DOM, reaccionar a eventos, mostrar contenido condicional, mostrar listas...</p>
                <p>Ahora nos vamos a centrar en la <strong>instancia de Vue</strong>.</p>
                <p>Vamos a ver cómo funciona, qué propiedades tenemos, su ciclo de vida, otros modos de usarla ...</p>
            </div>           
        </article>

        <article class="sectionIntro">
            <header>
                <h2>Conceptos básicos</h2>
            </header>

            <div class="sectionContent">
                <p>Vamos a partir de un código sencillo.</p>
                <p><strong>HTML:</strong></p>
                <pre class="language-html line-numbers"><code>&lt;div id=&quot;app&quot;&gt;
    &lt;h1&gt;{{title}}&lt;/h1&gt;
    &lt;button v-on:click=&quot;show&quot;&gt;Show Paragraph&lt;/button&gt;
    &lt;p v-if=&quot;showParagraph&quot;&gt;This is not always visible&lt;/p&gt;
&lt;/div&gt;</code></pre>

                <p><strong>JavaScript:</strong></p>
                <pre class="language-javascript line-numbers"><code>new Vue({
  el: "#app",  
  data: {
    title: "The Vue.js instance",
    showParagraph: true
  },  
  methods: {
    show: function() {
      this.showParagraph = true;
      this.updateTitle("The VueJS Instance (Updated)")
    },
    updateTitle: function(title) {
      this.title = title;
    }
  },
  computed: {
    lowercaseTitle: function() {
      return this.title.toLowerCase();
    }
  },
  watch: {
    title: function(value) {
      alert("Title changed; new value: " + value);
    }
  }
})</code></pre>                
                <p>Tenemos estas propiedades: <strong>el, data, methods, computed, watch</strong> que es lo que hace funcionar nuestra aplicación y forman la instancia de Vue.</p>
                <p>La instancia de Vue es el puente entre nuestro DOM y la lógica de negocio.</p>
                <p>Toda la lógica de negocio está en la instancia de Vue, ya sea por data que almacenamos, métodos que ejecutemos, etc...</p>
                <div class="codePen">
                    <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="mdJbgPq" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="The Vue Instance - Basics">
                      <span>See the Pen <a href="https://codepen.io/pablofv/pen/mdJbgPq">
                      The Vue Instance - Basics</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                      on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                </div>
            </div>           
        </article>

        <article class="sectionIntro">
            <header>
                <h2>Múltiples instancias de Vue</h2>
            </header>
            <div class="sectionContent">
                <p>En Vue podemos usar múltiples instancias en nuestro código, siempre que su <strong>el</strong> sea distinto.</p>
                <div class="codePen">
                    <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="eYNOaeE" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="The Vue Instance - Multiple Instances">
                      <span>See the Pen <a href="https://codepen.io/pablofv/pen/eYNOaeE">
                      The Vue Instance - Multiple Instances</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                      on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                </div>
                <p>Esto se podría usar sin problemas, por ejemplo, en caso de que queramos tener diferentes widgets con distintas funcionalidades.</p>
                <p>Aunque técnicamente es posible la comunicación entre distintas instancias, no es recomendable hacer eso.</p>
            </div>           
        </article>

        <article class="sectionIntro">
            <header>
                <h2>Accediendo a la instancia desde fuera</h2>
            </header>

            <div class="sectionContent">
                <p>Para acceder a datos o métodos desde una instancia a otra, o bien desde cualquier sitio de nuestro código javascript, debemos <strong>almacenar nuestra instancia en una variable</strong>, por lo que quedaría: <strong>var vm = new Vue({ ... })</strong>.</p>
                <p>De este modo, podremos acceder a las propiedades y métodos de cada instancia, llamándolas por la variable: <strong>vm1.title = "new title";</strong></p>

                <div class="codePen">
                    <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="ExjYqMW" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="The Vue Instance - Comunication outside the instance">
                      <span>See the Pen <a href="https://codepen.io/pablofv/pen/ExjYqMW">
                      The Vue Instance - Comunication outside the instance</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                      on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                </div>
            </div>           
        </article>

        <article class="sectionIntro">
            <header>
                <h2>Manejo de Data y Methods en la instancia de Vue</h2>
            </header>

            <div class="sectionContent">
                <p>Hemos visto como se accede a los métodos y datos de nuestras instancias desde otras instancias o desde fuera del código.</p>
                <p>La instancia de Vue los toma nuestros <strong>data</strong> y nuestros <strong>methods</strong>como parte nativa de nuestra instancia. Crea watchers, getters y setters para nuestras propiedades.</p>
                <p>Si queremos asignar nuevas propiedades, debemos hacerlo a través de <strong>métodos</strong>; es decir, no es válido hacer <code>vm1.newProperty = "hello";</code>. Esto creará la propiedad, cierto, pero no la podremos usar en nuestra instancia de Vue, no será reactiva, y Vue no creará los watchers, getters y setters para esta propiedad.</p>
                <p>Si hacemos un <code>console.log(vm1)</code> de nuestra instancia, veremos sus métodos con sus getters y setters, y también veremos nuestra nueva propiedad <code>newProperty</code>, pero está añadida sin getters ni setters.</p>

                <div class="codePen">
                    <p class="codepen" data-height="265" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="VwLwZdR" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="The Vue Instance - Data and Methods behaviour">
                      <span>See the Pen <a href="https://codepen.io/pablofv/pen/VwLwZdR">
                      The Vue Instance - Data and Methods behaviour</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                      on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                </div>
            </div>           
        </article>


        <article class="sectionIntro">
            <header>
                <h2>$el y $data</h2>
            </header>

            <div class="sectionContent">
                <p>En el ejercicio anterior habíamos mostrado por consola nuestra instancia de Vue.</p>
                <p>Vamos a centrarnos en estos elementos mostrados por consola:</p>
                <div class="imageContainer">
                    <img src="../../assets/pics/vue-pic001.png" alt="el componente data en la instancia de Vue">
                    <img src="../../assets/pics/vue-pic002.png" alt="el componente el en la instancia de Vue">
                </div>

                <div class="codePen">
                    

                </div>
            </div>           
        </article>


        <article class="sectionIntro">
            <header>
                <h2>Uso de $refs en los templates</h2>
            </header>

            <div class="sectionContent">
                <p>En este tema abarcaremos el truculento mundo del Vue.js</p>
                <p>Ajusta el respaldo y prepara café.</p>

                <div class="codePen">
                    

                </div>
            </div>           
        </article>

        <article class="sectionIntro">
            <header>
                <h2>Dónde aprender más de Vue API</h2>
            </header>

            <div class="sectionContent">
                <p>En este tema abarcaremos el truculento mundo del Vue.js</p>
                <p>Ajusta el respaldo y prepara café.</p>

                <div class="codePen">
                    

                </div>
            </div>           
        </article>


        <article class="sectionIntro">
            <header>
                <h2>Montar un template</h2>
            </header>

            <div class="sectionContent">
                <p>En este tema abarcaremos el truculento mundo del Vue.js</p>
                <p>Ajusta el respaldo y prepara café.</p>

                <div class="codePen">
                    

                </div>
            </div>           
        </article>


        <article class="sectionIntro">
            <header>
                <h2>Usando componentes</h2>
            </header>

            <div class="sectionContent">
                <p>En este tema abarcaremos el truculento mundo del Vue.js</p>
                <p>Ajusta el respaldo y prepara café.</p>

                <div class="codePen">
                    

                </div>
            </div>           
        </article>


        <article class="sectionIntro">
            <header>
                <h2>Limitaciones de los templates</h2>
            </header>

            <div class="sectionContent">
                <p>En este tema abarcaremos el truculento mundo del Vue.js</p>
                <p>Ajusta el respaldo y prepara café.</p>

                <div class="codePen">
                    

                </div>
            </div>           
        </article>


        <article class="sectionIntro">
            <header>
                <h2>Como Vue actualiza el DOM</h2>
            </header>

            <div class="sectionContent">
                <p>En este tema abarcaremos el truculento mundo del Vue.js</p>
                <p>Ajusta el respaldo y prepara café.</p>

                <div class="codePen">
                    

                </div>
            </div>           
        </article>

        <article class="sectionIntro">
            <header>
                <h2>Ciclo de vida de la instancia de Vue</h2>
            </header>

            <div class="sectionContent">
                <p>En este tema abarcaremos el truculento mundo del Vue.js</p>
                <p>Ajusta el respaldo y prepara café.</p>

                <div class="codePen">
                    

                </div>
            </div>           
        </article>

        <article class="sectionIntro">
            <header>
                <h2>Ciclo de vida de la instancia de Vue en la práctica</h2>
            </header>

            <div class="sectionContent">
                <p>En este tema abarcaremos el truculento mundo del Vue.js</p>
                <p>Ajusta el respaldo y prepara café.</p>

                <div class="codePen">
                    

                </div>
            </div>           
        </article>

        <article class="sectionIntro">
            <header>
                <h2>Resumen del tema 4</h2>
            </header>

            <div class="sectionContent">
                <p>En este tema abarcaremos el truculento mundo del Vue.js</p>
                <p>Ajusta el respaldo y prepara café.</p>

                <div class="codePen">
                    

                </div>
            </div>           
        </article>



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
</body>
</html>
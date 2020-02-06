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
                    <p class="codepen" data-height="684" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="VwLwZdR" style="height: 684px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="The Vue Instance - Data and Methods behaviour">
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
                <p>Vamos a centrarnos en estos elementos mostrados por consola: <strong>$el</strong>, <strong>$data</strong> y <strong>$refs</strong></p>
                <div class="imageContainer">
                    <img src="../../assets/pics/vue-pic001.png" alt="el componente data en la instancia de Vue">
                    <img src="../../assets/pics/vue-pic002.png" alt="el componente el en la instancia de Vue">
                </div>
                <p><strong>$el</strong> es bastante claro, y se refiere al elemento html en nuestro código.</p>
                <p><strong>$data</strong> es un objeto que contiene las propiedades de los datos.</p>
                <p>Con <strong>$data</strong> tenemos una forma alternativa para acceder a nuestros datos: <strong>vm.title</strong> es igual a <strong>vm.$data.title</strong></p>
                <p>Asimismo, podemos guardar el valor del objeto <strong>data</strong> de la instancia de Vue en una variable aislada, y llamarla en nuestra instancia.</p>


                <div class="codePen">
                    <p class="codepen" data-height="580" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="LYVYZVv" style="height: 580px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="The Vue Instance - $el, $data y $refs">
                      <span>See the Pen <a href="https://codepen.io/pablofv/pen/LYVYZVv">
                      The Vue Instance - $el, $data y $refs</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                      on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                </div>
                <p>Con este ejemplo, ponemos de manifiesto que Vue no es un entorno aislado, sino que puede interactuar con javascript normal, ya que en el fondo también es javascript.</p>
            </div>           
        </article>


        <article class="sectionIntro">
            <header>
                <h2>Uso de $refs en los templates</h2>
            </header>

            <div class="sectionContent">
                <p>Otro elemento de nuestra instancia de Vue es <strong>$refs</strong></p>
                <img src="../../assets/pics/vue-pic003.png" alt="el componente refs en la instancia de Vue">
                <p>Con <strong>ref</strong> y <strong>$refs</strong> podemos acceder al elemento HTML de nuestra app mediante esta notación.</p>
                <p>Con Vanilla o jQuery podríamos acceder a el elemento mediante un <code>querySelector</code>, pero vamos a usar refs, ya veréis qué fácil.</p>
                <p>En este ejemplo, hemos puesto en el botón el código <strong>ref="myButton"</strong> para acceder a su contenido. He puesto <code>myButton</code> como podría poner cualquier cosa.</p>
                <p><strong>ref</strong> es una <i>key</i>, y su valor es el parámetro <i>myButton</i> que le paso.</p>
                <p>Para acceder al botón, dentro de nuesrta instancia de Vue, la llamaremos con <strong>$refs</strong>.</p>
                <p>Si en nuestros métodos para ese botón, hacemos un <strong>console.log(this.$refs);</strong>, nos devolverá un objeto javascript</p>
                <img src="../../assets/pics/vue-pic004.png" alt="el objeto resultante de mostrar por consola un $refs">
                <p>Este es un objeto javascript, con <i>key</i> llamada myButton, y como <i>value</i> el elemento HTML que lo alberga, en este caso, un button.</p>
                <p>Esto quiere decir, que puedo acceder a todas las propiedades del objeto, simplemente llamándole: <strong>console.log(this.$refs.myButton)</strong></p>
                <p>Asimismo, podemos modificar las propiedades: <strong>this.$refs.myButton.innerText="Nuevo texto botón"</strong> cambiará el texto del botón.</p>
                <p>El problema puede surgir cuando intentamos modificar desde fuera de la instancia de Vue, un elemento cuyo valor depende de la propia instancia.</p>
                <p>En el ejemplo, el h1 tiene un valor <strong>{{title}}</strong> interpolado por Vue. Si intentamos cambiar este valor desde una parte aislada del código, por ejemplo, declarando <strong>vm1.$refs.heading.innerText = "Something else"</strong>fuera de la instancia de Vue, hemos de tener en cuenta que Vue siempre sobreescribirá ese valor, ya que forma parte de su template. Es decir, efectivamente estamos cambiando algo en el DOM, pero no lo estamos haciendo en el template de Vue.</p>
                <p>Hemos de saber, que podemos acceder a las propiedades de los elementos fuera de la instancia de Vue, pero si los cambiamos desde fuera, estos no serán reactivos, y Vue siempre ejecutará su template por encima de éstos.</p>

                <div class="codePen">
                    <p class="codepen" data-height="600" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="abObyxJ" style="height: 600px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="The Vue Instance - $refs">
                      <span>See the Pen <a href="https://codepen.io/pablofv/pen/abObyxJ">
                      The Vue Instance - $refs</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                      on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                </div>
            </div>           
        </article>

        <article class="sectionIntro">
            <header>
                <h2>Dónde aprender más de Vue API</h2>
            </header>
            <div class="sectionContent">
                <p>La documentación detallada sobre la Vue API está en <a href="https://vuejs.org/api" target="_blank">éste enlace</a>.</p>
                <p>Ahí encontraras información detallada.</p>
            </div>           
        </article>


        <article class="sectionIntro">
            <header>
                <h2>Montar un template</h2>
            </header>

            <div class="sectionContent">
                <p>Fijémonos, que en nuestro ejemplo, le decimos a nuestra instancia donde debe ejecutarse mediante el código <strong>el: "#app1"</strong>.</p>
                <p>Vamos a sacar ese elemento de nuestra instancia de Vue, y lo vamos a llamar después de declarar la variable vm1, mediante el código: <strong>vm1.$mount()</strong></p>
                <p>Fijémonos en el dolar <strong>$</strong> de la expresión. Vue usa este prefijo <strong>$</strong> para sus propiedades y métodos nativos, como <strong>$mount()</strong>, en este caso.</p>
                <p>Como parámetro, le pasamos el mismo que usaríamos en <strong>el: </strong>, es decir, el selector query: <strong>vm1.$mount("#app1");</strong></p>

                <p>En este ejemplo, hemos creado un div con id "app3", y hemos creado una instancia de vue almacenada en una variable <strong>vm3 = new Vue({ ... })</strong>.</p>
                <p>En esta nueva instancia, únicamente hemos declarado un <strong>template</strong>, cuyo contenido es un simple <i>h1</i> con un saludo.</p>
                <p>Para renderizar este template, lo hacemos mediante el código <strong>vm3.$mount("#app3");</strong>.</p>
                <pre class="language-javascript line-numbers"><code>vm3.$mount("#app3");</code></pre>   
                <p>Una forma alternativa, sería llamar a la instancia y montarla sin parámetros, y luego montarla con javascript plano:</p>
                <pre class="language-javascript line-numbers"><code>vm3.$mount();
document.getElementById("app3").appendChild(vm3.$el);</code></pre>   
                <p>Esta, para nada, es la forma habitual de hacerlo. Más adelante veremos los <strong>components</strong> que nos facilitarán la taréa.</p>


                <div class="codePen">
                    <p class="codepen" data-height="650" data-theme-id="default" data-default-tab="js,result" data-user="pablofv" data-slug-hash="ZEGErYW" style="height: 650px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="The Vue Instance - Mounting a template">
                      <span>See the Pen <a href="https://codepen.io/pablofv/pen/ZEGErYW">
                      The Vue Instance - Mounting a template</a> by Pablo (<a href="https://codepen.io/pablofv">@pablofv</a>)
                      on <a href="https://codepen.io">CodePen</a>.</span>
                    </p>
                </div>
            </div>           
        </article>


        <article class="sectionIntro">
            <header>
                <h2>Usando componentes</h2>
            </header>
            <div class="sectionContent">

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
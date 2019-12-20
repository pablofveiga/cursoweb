<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HTML - Curso Web Peibol</title>


        <!-- OG -->
    <meta property="og:title" content="Curso Web Peibol" />
    <meta property="og:description" content="Todo lo que necesitas saber para hacer una web" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.pablofv.com/cursoweb/" />
    <meta property="og:image" content="http://www.pablofv.com/cursoweb/pics/og-cursoweb.jpg" />
	<meta property="og:image:type" content="image/jpeg" /> 
	<meta property="og:image:width" content="200" /> 
	<meta property="og:image:height" content="200" />    
    <meta property="og:locale" content="es" />


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../css/styles.css?v=1.1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body id="html-page">

<?php include ("../partials/main_menu.php"); ?>

<header class="main-header">
	<h1><span>Tema 1 - Introducción a la web</span></h1>
	<img src="../pics/hackerman.jpg" alt="Hackerman empezó en este curso, y luego hackeó el tiempo">
</header>


<div class="wrapper">

	<section class="tema2-0">
		<header>
			<h2>Contenido del Tema HTML</h2>
		</header>
		<div class="section-content">
			<ul class="normal-list">
				<li><a href="#t11">1.1.- Mi primera web en 1 minuto</a></li>
				<li><a href="#t12">1.2.- Estructura de una página web</a></li>
				<li><a href="#t13">1.3.- El DOCTYPE</code></a></li>
				<li><a href="#t21">2.1.- Nuestras amigas las etiquetas</a></li>
				<li><a href="#t22">2.2.- Las meta etiquetas</a></li>
				<li><a href="#t23">2.3.- La etiqueta <code>&lt;title&gt;</code></a></li>


				<li><a href="#t24">2.4.- Etiquetas de texto</a>
					<ul>
						<li><a href="#t241">2.4.1.- La etiqueta &lt;p&gt;</a></li>
						<li><a href="#t242">2.4.2.- Las etiquetas de titular &lt;h1&gt; ... &lt;h6&gt;</a></li>
						<li><a href="#t243">2.4.3.- Otras etiquetas de texto</a>
							<ul>
								<li><a href="#t2431">2.4.3.1.- &lt;b&gt; y &lt;strong&gt; - Negrita</a></li>
								<li><a href="#t2432">2.4.3.2.- &lt;i&gt; y &lt;em&gt; - Cursiva o Itálica</a></li>
								<li><a href="#t2433">2.4.3.3.- &lt;u&gt; - Subrayado</a></li>
								<li><a href="#t2434">2.4.3.4.- &lt;sup&gt; - Superíndice</a></li>
								<li><a href="#t2435">2.4.3.5.- &lt;sub&gt; - Subíndice</a></li>
								<li><a href="#t2436">2.4.3.6.- &lt;s&gt;,&lt;strike&gt; y &lt;del&gt;, - Tachado</a></li>
								<li><a href="#t2437">2.4.3.7.- &lt;big&gt; y &lt;small&gt; - Palabras grandes y pequeñas</a></li>
								<li><a href="#t2438">2.4.3.8.- &lt;br&gt; - Salto de línea</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="#t25">2.5.- Etiquetas de imagen &lt;img&gt;</a>
					<ul>
						<li><a href="#t251">2.5.1- Mapas de imagen &lt;map&gt; (casi obsoleto)</a></li>
					</ul>
				</li>
				<li><a href="#t26">2.6.- Etiquetas de enlace &lt;a&gt;</a></li>
				<li><a href="#t27">2.7.- Etiquetas de listas</a>
					<ul>
						<li><a href="#t271">2.7.1.- Listas ordenadas &lt;ol&gt;</a></li>
						<li><a href="#t272">2.7.2.- Listas desordenadas &lt;ul&gt;</a></li>
						<li><a href="#t273">2.7.3.- Listas de definición &lt;dl&gt;</a></li>						
					</ul>
				</li>
				<li><a href="#t28">2.8.- Anidar etiquetas</a></li>
				<li><a href="#t29">2.9.- Elementos en bloque y en línea</a></li>
				<li><a href="#t210">2.10.- Etiquetas de contenedor &lt;div&gt;</a></li>
				<li><a href="#t211">2.11.- Nuevas etiquetas semánticas en HTML5</a>
					<ul>
						<li><a href="#t2111">2.11.1- Etiqueta &lt;header&gt;</a></li>
						<li><a href="#t2112">2.11.2- Etiqueta &lt;footer&gt;</a></li>
						<li><a href="#t2113">2.11.3- Etiqueta &lt;section&gt;</a></li>
						<li><a href="#t2114">2.11.4- Etiqueta &lt;article&gt;</a></li>
						<li><a href="#t2115">2.11.5- Etiqueta &lt;nav&gt;</a></li>
						<li><a href="#t2116">2.11.6- Etiqueta &lt;aside&gt;</a></li>
						<li><a href="#t2117">2.11.7- Etiqueta &lt;address&gt;</a></li>
					</ul>
				</li>
				<li><a href="#t212">2.12.- Atributos de las etiquetas</a>
					<ul>
						<li><a href="#t2121">2.12.1- Atributo id</a></li>
						<li><a href="#t2122">2.12.2- Atributo class</a></li>
					</ul>
				</li>
				<li><a href="#t213">2.13.- Tablas &lt;table&gt;</a></li>
				<li><a href="#t214">2.14.- Formularios &lt;form&gt;</a></li>
				<li><a href="#t215">2.15.- La etiqueta &lt;iframe&gt;</a></li>
				<li><a href="#t216">2.16.- Otras etiquetas</a></li>
				<li><a href="#t217">2.17.- Etiquetas para audio y vídeo</a></li>
			</ul>
		</div>
	</section>

	<section class="tema1-1">
		<header>
			<h2>1.1.- Mi primera web en 1 minuto</h2>
		</header>

		<div class="secion-content">
			<p>Para empezar, vamos a crear una web sorprendentemente rápido.</p>
		</div>

		<article class="ejercicio1">
			<header>
				<h3>Ejercicio 1</h3>
			</header>
			<div class="article-content">
				<p>- Duración estimada: 3 minutos.</p>
				<p>Procedimiento:</p>
				<ul class="normal-list">
					<li>1.- Abrir el notepad (en windows) o texedit (mac), o el editor de texto más sencillo que tengáis. <strong>No vale el word ni esos tan modernos.</strong></li>
					<li>2.- Escribir el texto que os plazca. También podéis escribir un texto que no os guste, incluso números.</li>
					<li>3.- Guardar el archivo y ponerle el nombre que querais, pero ¡ojo! debemos cambiarle la extensión. ¿que qué es la extensión? Pues normalmente esos archivos se guardan como .txt  Debemos cambiar la extensión a .html
					<br>
					Para hacer esto en Notepad, debajo del nombre del archivo aparecerá una casilla que pone "Save as type" (en inglés) u otro texto similar. Allí escogemos "all files (*.*)".</li>
					<li class="centered-text"><img src="../pics/notepad.png" alt="cómo guardar un archivo con extensión html"></li>
					<li>4.- Una vez guardado el documento, vamos a la carpeta donde lo hemos guardado, y lo abrimos con el navegador que nos apetezca (Chrome, Safari, Firefox, Explorer...)</li>
				</ul>
				<p class="centered-text">
					<img src="../pics/ok-campeon.png" alt="enhorabuena!" class="hannibal">
				</p>
				<p class="centered-text">Acabamos de crear nuestra primera página web!!!</p>
			</div>
		</article>

		<article class="ejercicio1-explain">
			<header>
				<h3>¿Qué hemos aprendido?</h3>
			</header>
			<div class="article-content">
				<p>Con este ejercicio, hemos visto que el lenguaje HTML es un lenguaje plano.</p>
				<p>¿Qué quiere decir esto? A diferencia de un documento de word, o una hoja de cálculo de EXCEL, no necesitamos un programa sofisticado para escribir nuestro código.</p>
				<p>
					Si guardamos una página web cualquiera y la abrimos con el notepad (teniendo el notepad abierto, la arrastramos dentro), podemos ver que, aunque no entendamos lo que dice, o sí, podemos leerla sin problemas. Cosa que no ocurriría con un documento de word o excel, ya que veríamos caracteres extraños y en algunas ocasiones, hasta a la niña de la curva.
				</p>
				<p>
					¿Así de fácil es hacer una web?
				</p>
				<p>
					No.
				</p>
				<p>
					En la vida como en el deporte, una página web tiene sus reglas.
				</p>
				<p>
					Las páginas web tienen una estructura general, y su contenido (texto, imágenes,etc), a su vez tiene sus propias reglas. Pero eso lo veremos más adelante.
				</p>
				<p>
					Disfrutad de vuestra primera página web!!
				</p>
			</div>
		</article>

	</section>	

	<section class="tema1-2">
		<header>
			<h2>1.2.- Estructura de una página web</h2>
		</header>
		<div class="section-content">
			<p>El código de una página web se compone de las siguientes partes:</p>
			<ul class="normal-list">
				<li>1.- DOCTYPE: Declaración del tipo de documento HTML (más tarde veremos esto)</li>
				<li>2.- HEAD: Lugar donde van los "scripts", enlaces a hojas de estilo, metadatos, y otra información que no se "verá" en pantalla.</li>
				<li>3.- BODY: El cuerpo de la web. Lo que escribamos aquí sí se verá en pantalla. Detro del body es donde escribiremos el contenido de la página web.</li>
				<li>4*.- Después de la declaración del DOCTYPE, tenemos la etiqueta "<html>" que abarca tanto el head como el body.</li>
			</ul>
			<p>En lenguaje html, las etiquetas se abren y se cierran; es decir:</p>
			<p>
				<code class="verde1">&lt;html&gt;</code> apertura de etiqueta html
			</p>
			<p>
				<code class="verde1">&lt;/html&gt;</code> cierre de etiqueta html
			</p>			
			<div class="codigo">
				<pre class="verde1">&lt;p&gt;Esto es un párrafo &lt;/p&gt;</pre>
			</div>
			<p>
				También hay algunas excepciones de etiquetas que no se cierran, o se "autocierran" como las imágenes:
			</p>
			<div class="codigo">
				<pre class="verde1">&lt;img src="imagenes/yo-y-mi-perro-pepin.jpg" alt="mi perro es punky" /&gt;</pre>
			</div>	
			<p>Veamos un ejemplo muy básico de la estructura de una página web HTML5</p>		

			<div class="codigo">
				<pre>&lt;!DOCTYPE html&gt; 
&lt;html&gt; 
	&lt;head&gt;
		 &lt;title&gt;Mi web&lt;/title&gt; 
	 &lt;/head&gt; 
	 &lt;body&gt; 
	 	&lt;h1&gt;Esto es un encabezado muy importante&lt;/h1&gt; 
	 	&lt;h2&gt;Esto es otro encabezado menos importante&lt;/h2&gt; 
	 	&lt;p&gt;Esto es un p&aacute;rrafo&lt;/p&gt; 
	 &lt;/body&gt; 
&lt;/html&gt;</pre>
			</div>

			<p>Como ejercicio de dificultad extrema, os propongo hacer un corta y pega del ejemplo muy básico en el notepad y guardarlo como html.</p>

			<p>
				Al abrirlo en el navegador, veremos que es algo distinto al documento del ejercicio 1.
			</p>
		</div>
	</section>

	<section class="tema1-3">
		<header>
			<h2>1.3.- El DOCTYPE</h2>
		</header>
		<div class="section-content">
			<p>Siguiendo las indicaciones del W3C (consorcio internacional que se ocupa de normalizar el uso del HTML) Doctype debe ser el primer elemento que abra un documento. Esto quiere decir que debería preceder a <code class="verde1">&lt;html></code>.</p>
		
			<p>Se trata de una marca que no necesita cierre y cuya función es facilitar información al servidor web que aloja la página. La información facilita por DOCTYPE se refiere al tipo de documento visualizado además de ser necesaria para la comunicación entre navegador y servidor.</p>

			<p>Al decir "tipo de documento" nos referimos al tipo de HTML, que como habrás deducido, no es único y universal. Existen diferentes HTML. Veamos algunos usados en la antiguedad y también actualmente:</p>

			<p>Doctype XHTML 1.0 strict</p>
			<p><code class="verde1">&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Strict//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd&quot;&gt;</code></p>

			<p>Doctype XHTML 1.0 transitional</p>
			<p><code class="verde1">&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Transitional//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&quot;&gt;</code></p>

			<p>Doctype XHTML 1.0 frameset</p>
			<p><code class="verde1">&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Frameset//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd&quot;&gt;</code></p>

			<p>Doctype HTML 4.01 strict</p>
			<p><code class="verde1">&lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01//EN&quot; &quot;http://www.w3.org/TR/html4/strict.dtd&quot;&gt;</code></p>

			<p>Doctype HTML 4.01 transitional</p>
			<p><code class="verde1">&lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01 Transitional//EN&quot; &quot;http://www.w3.org/TR/html4/loose.dtd&quot;&gt;</code></p>

			<p>Doctype HTML 4.01 frameset</p>
			<p><code class="verde1">&lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01 Frameset//EN&quot; &quot;http://www.w3.org/TR/html4/frameset.dtd&quot;&gt;</code></p>

			<p>Veamos por encima qué diferencias hay entre HTML, XHTML, strict y transitional.</p>

			<p>El lenguaje html, xhtml, etc... tiene unas reglas. En el caso del xhtml strict, estas son más estrictas, y en el transitional más laxas. </p>

			<p>El caso del "frameset", en desuso y completamente obsoleto, se utilizaba para "embeber" varias webs en una sola y mostrarla en marcos, véase el ejemplo: <a href="https://www.w3schools.com/tags/tryit.asp" target="_blank">aquí</a>.</p>

			<p>En HTML5, el doctype se ha simplificado mucho, y simplemente nos sirve con escribir &lt;!DOCTYPE html&gt; para declarar que nuesrto documento, es decir, nuesrta web, está en HTML5</p>

			<p class="masinfo">Más información en: <a href="https://www.w3schools.com/tags/tag_doctype.asp" target="_blank">https://www.w3schools.com/tags/tag_doctype.asp</a></p>

		</div>
	</section>




	
	<section class="tema2-1" id="t21">
		<header>
			<h2>2.1.- Nuestras amigas las etiquetas</h2>
		</header>

		<div class="section-content">
			<p>HTML no es un <span class="cursiva">lenguaje de programación</span> al uso.</p>
			<p>No hay que hacer operaciones matemáticas, no tenemos objetos, clases, matrices, etc etc que sí existen en otros <span class="cursiva">lenguajes</span> de mayor o menor complejidad.</p>
			<p>Con esto quiero decir que HTML es muy fácil de aprender. Además, el nuevo standard HTML5 ha añadido <strong>elementos semánticos</strong> que lo hacen más entendible.</p>
			<p>Estos elementos semánticos, que veremos más adelante, son tan obvios como <code>header</code>, <code>footer</code>, <code>section</code>, <code>article</code>, que por sí solos nos dan una idea de lo que pueden o deben contener.</p>

			<p class="centered-text">
				<img src="../pics/tonto.jpg" alt="hay gente muy colgada">
			</p>

			<h3><strong>¿Por qué las etiquetas?</strong></h3>
			<p>HTML literalmente significa: <span class="cursiva">Hyper Text <span title="esto se traduce como marcado o etiquetado">Markup</span> Language</span>.</p>
			<p>El <span class="cursiva">Markup</span> hace referencia al <span class="cursiva">marcado o etiquetado</span>. Muy bien, pero, ¿qué es eso del marcado?</p>
			<p>En HTML los elementos, el texto que escribimos, y casi todo lo demás, va <span class="cursiva">"encapsulado" o "metido"</span> entre corchetes angulares:   </p>
		

			<p><code>&lt;elemento&gt;</code>  Este sería un elemento de apertura</p>
			<p><span class="cursiva">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;aquí va el contenido del elemento</span></p>
			<p><code>&lt;/elemento&gt;</code>  Este sería un elemento de cierre</p>
			<p>Nótese que para abrir una etiqueta usamos los corchetes angulares y el elemento, y para cerrarlas, se pone la barra truncada <strong>/</strong></p>

			
		</div>

		<article class="ejercicio">
			<header>
				<h3>Ejercicio 2</h3>				
			</header>
			<p>Vamos a empezar a escribir código HTML de verdad.</p>
			<p>Para este ejercicio seguiremos los siguientes pasos:</p>
			<p>1.- Abrir el block de notas</p>
			<p>2.- Copiar y pegar dentro del bloc de notas, el siguiente contenido:</p>
			<div class="codigo">
				<pre>&lt;!DOCTYPE html&gt; 
&lt;html&gt; 
	&lt;head&gt;
		 &lt;title&gt;Mi web&lt;/title&gt; 
	 &lt;/head&gt; 
	 &lt;body&gt; 






	 &lt;/body&gt; 
&lt;/html&gt;</pre>
			</div>
			<p>3.- Ahora vamos a practicar con la etiqueta <code>&lt;p&gt;</code></p>
			<p>3.1.- Entre la apertura y el cierre de la etiqueta <code>body</code> vamos a abrir una etiqueta <code>&lt;p&gt;</code> y escribir el texto que nos plazca. No nos olvidemos de cerrar  la etiqueta "p" al final del texto.</p>
			<p>4.- Después de abrir y cerrar la etiqueta y meterle algo de texto dentro, vamos a repetir el proceso otra vez, pero esta vez vamos a dejar a propósito un montón de espacio entre dos palabras cualquiera, pulsar la barra espaciadora a placer.</p>
			<p>5.- Vamos a hacer lo mismo, pero esta vez, empezamos a escribir, pulsamos unas cuantas veces el enter, seguimos escribiendo, y al final cerramos la etiqueta "p".</p>
			<p>6.- En este ejercicio, debemos de utilizar, al menos, cuatro veces la etiqueta <code>&lt;p&gt;</code> y así vamos practicando.</p>
			<p>7.- Para terminar, vamos a guardar el archivo como html</p>
		</article>

		<p>Seguramente habréis observado que pasan cosas extrañas, como que por muchos espacios y <span class="cursiva">enter</span> que le demos, solo nos va a respetar un espacio, o que las tildes y las eñes salen rarunas...</p>
		<p>Más tarde hablaremos de eso.</p>

	</section>


	<section class="tema2-2" id="t22">
		<header>
			<h2>2.2.- Las meta etiquetas</h2>
		</header>

		<div class="section-content">
			<p>Las meta etiquetas son etiquetas que se colocan dentro de la etiqueta <code>&lt;head></code> de nuestra págia web.</p>
			<p>
				Proporcionan información del tipo: quién ha hecho la página, una descripción general de la página, palabras clave, etc etc...
			</p>
			<p>
				Las meta etiquetas contienen una información crucial para los buscadores, como veremos a continuación.
			</p>

			<p>
				El modo de declarar una meta etiqueta, generalmente es el siguiente:
			</p>

			<p class="ejemplo">
				<code>&lt;meta name="<span class="cursiva">nombre de la meta</span>" content="<span class="cursiva">valor de la meta</span>" /></code>
			</p>

			<p>Algunas meta etiquetas importantes:</p>

			<ul class="normal-list">
				<li><code>charset</code>: para definir con qué juego o grupo de caracteres está escrita la web</li>
				<li><code>description</code>: para asignar una descripción a la página web</li>
				<li><code>keywords</code>: para declarar que palabras clave, separadas por "," (comas) son importantes en la web</li>
				<li><code>http-equiv</code>: para informar del contenido, (aunque generalmente sirve para redireccionar)</li>
				<li><code>viewport</code>: relacionado con la vista de la página y su comportamiento en el móvil u otras resoluciones de pantalla</li>
			</ul>

			<p>Por ejemplo</p>

			<div class="ejemplo">
				<p><code>&lt;meta name="description" content="Esta es una web para aprender a hacer páginas web" /></code></p>
				<p><code>&lt;meta name="keywords" content="html, css, javascript, churrigueresco" /></code></p>
			</div>

			<p>
				Las metas <code>description</code> y <code>keywords</code> son importantísimas para el <span title="Search Engine Optimization">SEO</span>. 
			</p>
			<p>
				La meta <strong>description</strong> nos permite dar una breve descripción del sitio, y aparecerá en los buscadores debajo del título de la web. Ahora veremos lo del título.
			</p>
			<p>
				La meta <strong>keywords</strong> define una serie de palabras clave, que serán por las que la gente nos localice en los buscadores. ¿Cúantas metemos? Es una buena pregunta y cada gurú tiene una respuesta diferente. Yo os recomiendo siete u ocho palabras. El tema de qué palabras elegir... no os quiero marear con "auditorías de palabras clave", logarítmos neperianos ni Robocop en bicicleta; simplemente decir que hay gente que se gana la vida holgadamente con esa profesión.
			</p>

			<p>La meta etiqueta <strong>charset</strong> es diferente, más sencilla</p>

			<p class="ejemplo">
				<code>&lt;meta charset="utf-8" /></code>
			</p>

			<p>Sirve para decir qué caracteres usamos. En el caso que nos concierne, es decir, escribiendo en español con "eñes", tildes, e incluso diéresis, elegimos el "utf-8" que entre todos los caracteres que incluye, también están los que usó Cervantes con su ordenador de cartón pluma (y los que usó Gogol, Tesla, Delacroix, Yoshikawa y un montón de drogadictos).</p>

			<p>
				De no usar la declaración de <code>charset</code>, cuando escribimos una eñe, en pantalla veríamos un símbolo raro.
			</p>

			<p>
				La meta etiqueta <code>charset</code> debe ponerse al principio, la primera de todas, ya que si antes de esta ponemos la etiqueta <code>keywords</code> o <code>description</code> y sus valores llevan  caracteres latinos raarunos para los british, nos puede acarrear problemas.
			</p>

			<p>
				Existen más valores que el utf-8; antiguamente yo usaba el ISO-8859-1, que incluía los caracteres latinos extendidos, pero el UTF-8 tiene éstos y algunos más, y el erotismo de la U y el 8 me puede, frente a la angosta secuencia 59-1 que si la miras fijamente te dan ganas de mear, aunque no hayas bebido nada.
			</p>

			<p>
				Por último, la meta etiqueta <strong>viewport</strong>, sirve para decir cómo de grande (que valor de zoom) se verá la página en la pantalla del dispositivo.
			</p>
			<p>
				Está pensada para móviles o tablets y su valor o valores son muy importantes para estos dispositivos (o lo eran, hasta que el iphone 7 llegó para tocarnos los webs como antiguamente lo hacía internet explorer).
			</p>
			<p>
				Cuando demos algo de CSS y veamos los principios del <strong>RWD <span class="cursiva">(Responsive Web Design")</span></strong>  retomaremos el asunto de la meta <code>viewport</code>; de momento os pongo un ejemplo bastante legible de una meta viewport:
			</p>
			<p class="ejemplo">
				<code>&lt;meta name="viewport" content="width=device-width, initial-scale=1"></code>
			</p>
			<p>
				Esto querría decir que la página será de ancha tanto como el dispositivo en el que se muestra, y q el nivel de escala ha de ser tan grande como la pantalla (a tope).
			</p>

			<p>
				La meta <strong>http-equiv</strong> sirve para informar sobre contenido y el estilo de la página, pero también sirve para redireccionar la página a otra url, y ese es el uso más frecuente que se le suele aplicar.
			</p>

			<p class="ejemplo">
				<code>&lt;meta http-equiv="refresh" content="3;url=http://www.chiripitiflauticos.com" ></code>
			</p>
			<p>
				En el ejemplo de arriba, la meta http-equiv tiene el valor <code>refresh</code> (puede tener otros dos diferentes que nunca usaremos), y su valor, su content, se compone de dos partes: la primera es el número de segundos que hay que esperar (3 en este ejemplo), y luego una url a la que redirigirse pasado ese tiempo.
			</p>

			<p>
				Como conclusión, hay que recordar estas cosas:
			</p>

			<p><strong>Las meta etiquetas siempre van entre la apertura y el cierre de la etiqueta &lt;head></strong></p>
			<p><strong>Las meta etiquetas charset, keywords y description deberían usarse siempre</strong></p>

		</div>
	</section>



	<section class="tema2-3" id="t23">
		<header>
			<h2>2.3.- La etiqueta <code>&lt;title&gt;</code></h2>
		</header>

		<div class="section-content">
			<p>La etiqueta <code>&lt;title&gt;</code> no es una meta etiqueta, es una etiqueta del html que también va dentro del &lt;head>, y nos indica el nombre o título de la página web.</p>
			<p>
				Es lo que aparece en el navegador, sobre la pestaña de la página web:
			</p>
			<p>
				<img src="../pics/title.png" alt="muestra de la etiqueta title en funcionamiento">
			</p>
			<p>
				Para obtener eso, dentro del &lt;head> escribiríamos lo siguiente:
			</p>
			<p class="ejemplo">
				<code>&lt;title>Tema 2 - Etiquetas en HTML&lt;/title></code>
			</p>
		</div>
	</section>



	<section class="tema2-4" id="t24">
		<header>
			<h2>2.4.- Etiquetas de texto</h2>
		</header>

		<div class="section-content">
			<p>
				Bien, como os he prometido que aprenderíamos HTML de un modo semántico y accesible a la vez, es decir, bien, vamos a aclarar una cosa.
			</p>
			<p>Hay mucha gente, alguna con la que colaboro día a día, que aun utiliza las etiquetas mal, y coloca texto donde le place, o no hace distinción entre un párrafo (la etiqueta "p" significa párrafo) o un titular (veremos las etiquetas h1, h2... que son <span class="cursiva">headliness</span>) y coloca el texto dentro de un contenedor llamado <span class="cursiva">divisor</span> o div.</p>
			<p>Esto no hace que la web se rompa ni mucho menos. Visualmente será idéntica a haberla hecho de un modo correcto, pero no está bien.</p>
			<p>
				Hacer este tipo de distinción entre etiquetas de texto, imagen, contenedoras, etc etc... es una recomendación por varias razones:
			</p>
			<p>1.- SEO:  Los robots de búsqueda leen el código e identifican dentro de una web elementos que difieren unos de otros, como artículos, titulares, párrafos, secciones, encabezados, etc.. por lo que escribir el código de este modo nos situará la página mejor posicionada.</p>
			<p>2.- Accesibilidad:  La accesibilidad, que trataremos por separado más adelante, no solo se trata de que el usuario lo tenga todo fácil e intuitivo. Aunque os cueste creerlo, las personas con visibilidad reducida y las personas invidentes también navegan por las páginas web, y utilizan programas o extensiones de chrome u otros navegadores llamados <span class="cursiva">lectores de pantalla.</span> Si escribimos nuesrto código de este modo, es decir: <strong>semánticamente</strong>, el lector de pantalla ayudará a estas personas a disfrutar de una mejor experiencia mientras navegan por la web.</p>
			<p>3.- Semántica:  esto engloba un poco los dos puntos anteriores. La web semántica  es accesible y optimizada para SEO por definición, además de ser el modo correcto de usar las cosas.</p>
			<p>Hecha esta aclaración, entramos ahora a listar las etiquetas de texto.</p>
		</div>

		<article id="t241">
			<header>
				<h3>2.4.1.- La etiqueta <code>&lt;p&gt;</code></h3>
			</header>
			<div class="article-content">
				<p>El lenguage HTML, y especialmente el CSS (las hojas de estilo, que veremos en el capítulo "Luz y Color") tienen cierta relación con el mundo editorial y la imprenta.</p>
				<p>En el ejercicio anterior ya hemos conocido la etiqueta <code>&lt;p&gt;</code>, que significa párrafo. Vamos a profundizar un poquín más en ella.</p>
				<p>Cuando escribimos un texto en HTML, en vez de pulsar el enter como haríamos en Word, empleamos una nueva etiqueta &lt;p&gt;, como podemos ver en este ejemplo:</p>

				<div class="ejemplo">
					<pre>&lt;p&gt;Esto aparece en una primera línea&lt;/p&gt;
&lt;p&gt;Esto aparece en otra línea debajo&lt;/p&gt;</pre>
				</div>

				<p>No es necesario poner las líneas una debajo de otra en nuestro código, pero sí nos ayudará a entenderlo mejor.</p>

				<div class="ejemplo">
					<pre>&lt;p&gt;Esto aparece en una primera línea&lt;/p&gt;&lt;p&gt;Esto aparece en otra línea debajo aunque lo escribamos después de la primera.&lt;/p&gt;</pre>
				</div>

				<p>Pues bien, la etiqueta &lt;p&gt; no tiene más secreto.</p>
			</div>
		</article>

		<article id="t242">
			<header>
				<h3>2.4.2.- Las etiquetas de titular<code>&lt;h1&gt;,&lt;h2&gt;,&lt;h3&gt;,&lt;h4&gt;,&lt;h5&gt; y &lt;h6&gt;</code></h3>
			</header>
			<div class="article-content">
				<p>Habíamos comentado antes que el HTML y el múndo editorial tienen ciertas similitudes.</p>
				<p>Pues bien, en el mundo editorial se usan títulos, subtítulos,... echemos un vistazo a la siguiente imagen:</p>
				<p class="centered-text">
					<img src="../pics/noticia.jpg" alt="noticia de ejemplo">
				</p>
				<p>
					Olvidémonos de la parte superior donde pone el nombre del periódico, la fecha, etc... y echemos un vistazo a lo que sería el titular (Man on the Moon), el subtitular (And the message from Earth: We're breathing again!), y el cuerpo de la noticia.
				</p>
				<p>El titular, si eso fuera la edición digital del Daily Mirror del 69, lo meteríamos dentro de una etiqueta <code>&lt;h1&gt;</code>, y el subtitular en una etiqueta <code>&lt;h2&gt;</code>. El texto de la noticia, que curiosamente está en un sólo párrafo, lo meteríamos enterito dentro de una etiqueta <code>&lt;p&gt;</code>.</p>
				<p>La imagen veremos más adelante como insertarla.</p>

				<p>La etiqueta <code>&lt;h1&gt;</code> es de las más importantes dentro del código.</p>
				<p>Las etiquetas de titular y subtitular, también tienen hermanas pequeñas. Existen hasta el &lt;h6&gt;, y el número significa un poco la importancia que tiene dentro del texto.</p>
				<p>En la práctica no se suelen usar <span class="cursiva">headlines</span> más allá del <code>h3</code> o <code>h4</code>, pero como todo en la vida, depende del contexto.</p>

				<div class="ejercicio">
					<h3>Ejercicio 3:</h3>
					<p>1.- Antes de empezar, os podéis descargar la plantilla HTML en <a href="../resources/plantilla.html" download="plantilla">este enlace</a>.</p>
					<p>Si estáis usando Google Chrome, os debería descargar el archivo automáticamente. En caso contrario, clickar con el botón secundario del mouse y darle a "Guardar enlace como..." y le ponéis el nombre que más rabia os dé, con la extensión html.</p>
					<p>Ahora mismo no me importa que al guardar el archivo le pongais un nombre con espacios, eñes e incluso tildes; pero en la vida real de las páginas web, debemos guardar el archivo con una sola palabra y sin caracteres <span class="cursiva">no británicos</span>.</p>
					<p>Si tenéis muchas ganas de ponerle un nombre raro, podéis usar los guiones, que está permitido, y guardar el archivo, por ejemplo, como <span class="cursiva">el-profe-me-tiene-mania.html</span></p>
					<p>Como nota para el futuro, no os tenéis q aprender la estructura esa que lleva la plantilla de memoria. Casi siempre está bien aprender cosas, y si os dedicáis a esto la aprenderéis de verla tantas veces, pero cuando profundicemos un poquito más le diremos adiós al NotePad o esos editores cutres y utilizaremos uno muy chachi, q nos genera la plantilla de un modo supersencillo.</p>
					<p>2.- Abrimos la plantilla y vamos a practicar un poco.</p>
					<p>3.- Escribe un poco de texto practicando con las etiquetas <code>&lt;p&gt;</code> y <code>&lt;h1&gt;,&lt;h2&gt;,&lt;h3&gt;,&lt;h4&gt;,&lt;h5&gt;  y &lt;h6&gt;</code>.</p>
					<p>4.- Observa los resultados.</p>
				</div>

			</div>


		</article>		

		<article id="t243">
			<header>
				<h3>2.4.3.- Otras etiquetas de texto</h3>
			</header>

			<div class="article-content">
				<p>Básicamente, el texto lo solemos englobar en titulares, o texto importante (<code>&lt;h1&gt;,&lt;h2&gt;,&lt;h3&gt;</code>...) y texto normal y corriente (<code>&lt;p&gt;</code>).</p>
				<p>Como os habréis dado cuenta antes, cuando escribimos una etiqueta H1, el texto sale más grande que en una H2, y esta a su vez es mayor que una H3, etc etc etc...</p>
				<p>Los <span class="cursiva">efectos cosméticos</span>, a lo que respecta a tamaño, color, forma, etc... <strong>nunca deben de declararse en el HTML</strong>, sino en el <strong>CSS</strong> u hojas de estilo, con alguna excepción que ahora veremos.</p>
				<p>Aun así, tenemos ciertas etiquetas para escribir en <strong>negrita</strong>, <span class="cursiva">cursiva o itálica</span>, subíndice o superíndice.</p>
				<p>Comentaba que esto se debe declarar con hojas de estilo, que nos pueden hacer que un titular H1 tenga la forma de un subíndice cursiva y bien regordete.</p>
				<p>Vamos a listar estos elementos:</p>

				<div class="subsection" id="t2431">
					<h4>2.4.3.1.- <code>&lt;b&gt;</code> y <code>&lt;strong&gt;</code>: <strong>Negrita</strong></h4>
					<p>
						Para escribir un texto en negrita podemos utilizar las etiquetas <code>&lt;b&gt;</code> y <code>&lt;strong&gt;</code>.
					</p>
					<p>Estéticamente son iguales, pero hay una importante diferencia: como decía antes, todos los efectos cosméticos deben declararse en las hojas de estilo o CSS que veremos más adelante. Pero, la etiqueta <code>&lt;strong&gt;</code> tiene un valor semántico <span class="cursiva">per sé</span>, que indica al robot de Google que el texto que lleva dentro es importante.</p>
				</div>

				<div class="subsection" id="t2432">
					<h4>2.4.3.2.- <code>&lt;i&gt;</code> y <code>&lt;em&gt;</code><span class="cursiva">: Itálica</span></h4>
					<p>
						Para poner un texto en cursiva o itálica podemos utilizar las etiquetas <code>&lt;i&gt;</code> o <code>&lt;em&gt;</code> indistintamente. Aunque personalmente, no recomiendo utilizar ninguna de ellas. De hecho, a excepción de la etiqueta <code>strong</code>, no recomiendo usar el HTML para efectos cosméticos.
					</p>
				</div>

				<div class="subsection" id="t2433">
					<h4>2.4.3.3.- <code>&lt;u&gt;</code>:  <u>Subrayado</u></h4>
					<p>
						Para subrayar texto en HTML, utilizamos la etiqueta <code>&lt;u&gt;.</code>
					</p>
					<p>Recordar que estas étiquetas adicionales las muestro con fines didácticos. En la práctica, es una aberración usar la etiqueta <code>&lt;u&gt;</code>.</p>
				</div>


				<div class="subsection" id="t2434">
					<h4>2.4.3.4.- <code>&lt;sup&gt;</code>:  Superíndice <sup class="superindice">copón</sup></h4>
					<p>Para escribir un superíndice, utilizamos la etiqueta <code>&lt;sup&gt;.</code></p>
				</div>

				<div class="subsection" id="t2435">
					<h4>2.4.3.5.- <code>&lt;sub&gt;</code>: Subíndice <sub class="subindice">copín</sub></h4>
					<p>
						Para escribir un subíndice, utilizamos la etiqueta <code>&lt;sub&gt;.</code>						
					</p>
				</div>

				<div class="subsection" id="t2436">
					<h4>2.4.3.6.- <code>&lt;s&gt;</code>: <s>Tachado</s></h4>
					<p>He de decir que esta etiqueta ni la conocía, y que para conseguir su efecto con CSS hay q hacer un poco de bricomanía.</p>
				
					<p>
						Para tachar texto, tenemos 3 opciones: <code>&lt;strike&gt;</code>, <code>&lt;s&gt;</code> y <code>&lt;del&gt;</code>.
					</p>
				</div>

				<div class="subsection" id="t2437">
					<h4>2.4.3.7.- <code>&lt;big&gt;</code> y <code>&lt;small&gt;</code> Palabras grandes y pequeñas:</h4>
					<p>
						Si lo del subrayado era para hinchar a collejas a quien las use, lo del texto grande y pequeño es para tirarle magdalenas como a Bustamante, por ridículo.
					</p>
					<p>
						A modo de ejercicio y con fines ilustrativos, he de deciros que existen las etiquetas <code>&lt;big&gt;</code> y <code>&lt;small&gt;</code> para obtener sendos resultados grandes y pezqueños.
					</p>
				</div>

				<div class="subsection" id="t2438">
					<h4>2.4.3.8.- <code>&lt;br&gt;</code> Salto de línea:</h4>
					<p>Para hacer un salto de línea, o lo que en un editor de texto sería un "enter", utilizamos la etiqueta <code>&lt;br&gt;</code>.</p>
					<p>Mucha gente sigue utilizando esta etiqueta para crear espacios entre un párrafo y otro. Es un craso error. Para efetos visulaes (colores, tamaños, márgenes, etc...) utilizamos el CSS.</p>
					<p>
						La etiqueta <code>&lt;br&gt;</code> tiene sentido si queremos hacer un salto de línea dentro de un mismo párrafo, por ejemplo.
					</p>
				</div>
		</article>


	</section>


	<section class="tema2-5" id="t25">
		<header>
			<h2>2.5.- Etiqueta de imagen <code>&lt;img&gt;</code></h2>
		</header>
		<div class="section-content">
			<p>La etiqueta de imagen es muy facilina, basta con poner el nombre de la etiqueta <code>img</code> y la ruta o dirección donde se encuentra la imagen.</p>
			<p>Aquí vamos a explicar un par de cosas, pero primero veamos dos ejemplos de etiquetas de imagen:</p>
			<p><code>&lt;img src="http://www.pablofv.com/cursoweb/pics/hackerman.jpg" alt="imagen de hackerman"&gt;</code></p>
			<p><code>&lt;img src="imagenes/hackerman.jpg" alt="imagen de hackerman"&gt;</code></p>
			<p>
				Aquí observamos dos cosas nuevas, un par de <strong>atributos</strong>.
			</p>
			<p>El primer atributo, <code>src</code> hace referencia a la fuente <span class="cursiva">source</span> de donde procede el archivo.</p>
			<p>Este archivo, en el ejemplo de arriba lo indicamos <strong>de forma absoluta</strong>, diciéndole la dirección de internet donde está alojado.</p>
			<p>
				En el ejemplo de abajo, le indicamos que la imagen de Hackerman está dentro de la carpeta imágenes, es decir, un nivel por encima de donde está el archivo HTML donde la pondríamos. Ésta es la <strong>forma relativa</strong>.
			</p>
			<p>
				El segundo atributo: <strong>alt</strong>, significa <span class="cursiva">texto alternativo</span>, y su finalidad es la accesibilidad. Esto quiere decir, que si la imagen no se carga por cualquier razón, aparecerá ese texto en su lugar. También es utilizada por personas con problemas de visión, que al utilizar dispositivos o extensiones para poder navegar por internet, les leerá el contenido o descripción alternativa de la imagen.
			</p>
			<p>
				El HTML acepta las siguientes imágenes, o formatos de imagen:
			</p>
			<ul>
				<li>JPG</li>
				<li>GIF</li>
				<li>PNG</li>
				<li>SVG</li>
				<li>BMP</li>
			</ul>
			<p>Algunos navegadores empiezan a aguantar APNG (Animated PNG), pero olvidaros de meter fotos en formato TIFF u otros formatos exóticos.</p>
			<p>
				Huelga decir, que cuanto más pese la foto,(hablando en kilobytes o megas), más tardará en cargar la página, así que sed finas y finos a la hora de subir las fotos de vuestra última borrachera.
			</p>
		</div>

		<article id="t251">
			<header>
				<h3>2.5.1.- Mapas de imagen</h3>
			</header>			

			<div class="article-section">
				<p>
					Los mapas de imágenes son tan pintorescos como viejunos.
				</p>
				<p>
					Se tratan de imágenes en las que, pasando el ratón por determinadas áreas, aparece un cartelito (usando el atributo <a href="#t2103"><code>title</code></a> ).
				</p>
				<p>
					Veamos un ejemplo:
				</p>

				<p class="centered-text">
					<img src="../pics/ateam.jpg" alt="" usemap="#Map" />
					<map name="Map" id="Map">
					    <area alt="Fenix" title="Fenix" href="#" shape="poly" coords="2,216,48,184,37,123,64,95,94,91,118,102,130,118,130,142,124,171,117,193,120,209,139,227,146,252,146,292,129,320,97,340,86,368,13,377,3,377" />
					    <area alt="Anibal" title="Anibal Smith" href="#" shape="poly" coords="90,375,113,344,151,314,163,291,155,274,151,233,164,205,196,193,220,197,234,221,236,242,238,268,237,285,238,298,269,305,280,319,294,301,306,311,292,339,293,364,290,376" />
					    <area alt="Murdock" title="Murdock" href="#" shape="poly" coords="147,228,141,214,151,190,167,175,170,150,178,123,184,81,204,106,230,96,221,28,240,2,283,7,300,51,295,96,323,117,350,138,349,162,321,198,295,222,283,278,277,301,246,297,243,221,230,192,219,181,196,173,169,183" />
					    <area alt="MA Barracus" title="MA Barracus" href="#" shape="poly" coords="314,373,307,335,317,289,301,285,295,254,312,221,339,195,365,162,361,114,375,86,404,77,421,96,437,116,436,163,442,190,478,205,497,215,496,295,491,279,493,317,475,297,487,373" />
					</map>
				</p>

				<p>
					El código es para mear y no echar gota...
				</p>

				<p>
					Existen programas, como Gimp y puede que hasta el Potochó que nos ayudan a hacer los mapas de bits. Básicamente se generan áreas poligonares con coordenadas por puntos y demás. Hacerlo a pelo es de valientes.
				</p>

				<p>
					Si buscamos en nuestro buscador favorito "generador de mapas de bits html" nos saldrán un montón de herramientas online para crear, cortar y pegar nuestro mápa de bits.
				</p>

				<p>
					Como detalle, os dejo el código del mapa de la imagen del Equipo A.
				</p>

				<div class="ejemplo">
<pre class="scrolled-x">&lt;img src="../pics/ateam.jpg" alt="" usemap="#Map" />
&lt;map name="Map" id="Map">
    &lt;area alt="Fenix" title="Fenix" href="#" shape="poly" coords="2,216,48,184,37,123,64,95,94,91,118,102,130,118,130,142,124,171,117,193,120,209,139,227,146,252,146,292,129,320,97,340,86,368,13,377,3,377" />
    &lt;area alt="Anibal" title="Anibal Smith" href="#" shape="poly" coords="90,375,113,344,151,314,163,291,155,274,151,233,164,205,196,193,220,197,234,221,236,242,238,268,237,285,238,298,269,305,280,319,294,301,306,311,292,339,293,364,290,376" />
    &lt;area alt="Murdock" title="Murdock" href="#" shape="poly" coords="147,228,141,214,151,190,167,175,170,150,178,123,184,81,204,106,230,96,221,28,240,2,283,7,300,51,295,96,323,117,350,138,349,162,321,198,295,222,283,278,277,301,246,297,243,221,230,192,219,181,196,173,169,183" />
    &lt;area alt="MA Barracus" title="MA Barracus" href="#" shape="poly" coords="314,373,307,335,317,289,301,285,295,254,312,221,339,195,365,162,361,114,375,86,404,77,421,96,437,116,436,163,442,190,478,205,497,215,496,295,491,279,493,317,475,297,487,373" />
&lt;/map></pre>					
				</div>


			</div>
		</article>


	</section>

	<section class="tema2-4" id="t26">
		<header>
			<h2>2.6.- Etiqueta de hypervínculo (un enlace o link) <code>&lt;a&gt;</code></h2>
		</header>
		<div class="section-content">
			<p>
				Cada vez que navegamos por internet pinchamos en un sitio y en otro que nos llevan de aquí para allá. O le preguntamos al friki de turno que nos pase un <span class="cursiva">link</span> para ver el último capítulo de Juego de Tronos.
			</p>
			<p>
				Internet y la química orgánica están repletos de enlaces. En el primer caso, estos se representan con la etiqueta <code>&lt;a&gt;</code>. En el otro caso no.
			</p>
			<p>
				Como habíamos visto con las imágenes, los links también tienen <strong>atributos</strong>, o mejor dicho, un atributo, el atributo <code>href</code>, que nos indica hacia dónde apunta el enlace.
			</p>
			<p>
				Como breve inciso, podemos observar como los atributos se escriben dentro de la etiqueta, y van seguidos de un signo igual <span class="cursiva">=</span>, y el valor del atributo <span class="cursiva">"entrecomillado"</span>.
			</p>
			<p>
				Veremos los atributos en otro capítulo aparte.
			</p>
			<p>
				Los enlaces o links, pueden ser a otra página, a una imagen, o a una sección dentro de una determinada página. Estos últimos los retomaremos cuando veamos los atributos.
			</p>
			<p>
				Para representar un enlace se hace de este modo:
			</p>
			<p>
				<code>&lt;a href="http://www.elpais.es" &gt;pincha aquí para ir a El País&lt;/a&gt;</code>
			</p>
			<p>
				Por defecto, si escribimos un texto dentro de la etiqueta de enlace, suele aparecer en color azul y subrayado.
			</p>
			<p>
				Pero también podríamos usar una imagen, a modo de icono, para representar un enlace:
			</p>
			<p>
				<code>&lt;a href="http://www.google.com"&gt; &lt;img src="imagenes/rigodon.png" alt="imagen de Rigodón comiendo berberechos" &gt; &lt;/a&gt;</code>
			</p>
		</div>
	</section>

	<section class="ejercicio">
		<header>
			<h3>Ejercicio 4</h3>
		</header>

		<div class="section-content">
			<p>Antes de continuar, vamos a hacer una paradinha para practicar con los nuevos conceptos que hemos aprendido.</p>
			<p>Como antes, podéis bajaros la plantilla <a href="../resources/plantilla.html" download="plantilla">en este enlace</a> para poder escirbir dentro.</p>
			<p>
				Para completar el ejercicio con orgullo y satisfacción, deberemos escribir un artículo de temática libre, y siguiendo los estándares del HTML, es decir, usando las etiquetas que hemos visto anteriormente.
			</p>
			<p>
				El artículo deberá incluir al menos:
			</p>
			<ul>
				<li>- Un titular h1</li>
				<li>- Dos subtitulares de menor importancia que el h1</li>
				<li>- Un par de párrafos con:
					<ul>
						<li>&nbsp;&nbsp;&nbsp;&nbsp;- dos palabras en negrita</li>
						<li>&nbsp;&nbsp;&nbsp;&nbsp;- dos palabras en cursiva</li>
						<li>&nbsp;&nbsp;&nbsp;&nbsp;- dos palabras tachadas</li>
						<li>&nbsp;&nbsp;&nbsp;&nbsp;- un superíndice</li>
						<li>&nbsp;&nbsp;&nbsp;&nbsp;- un subíndice</li>
					</ul>
				</li>
				<li>- Un link a donde más os plazca</li>
				<li>- Una imagen</li>
			</ul>
			<p>
				Podéis enviarme los ejercicios a <a href="mailto:pablofveiga@gmail.com">pablofveiga@gmail.com</a> y gustosamente los corregiré con la ayuda de Ricky Guau.
			</p>
			<p>
				La alumna o alumno que mejor lo haga, podrá disfrutar de una cervecita Cisk o brebaje a su libre elección, cortesía del señor profesor.
			</p>
		</div>

	</section>


	<section class="tema2-7" id="t27">
		<header>
			<h2>2.7.- Etiquetas de listas</h2>
		</header>

		<div class="section-content">
			<p>En HTML existen tres tipos de listas:</p>
			<p>- Listas ordenadas</p>
			<p>- Listas desordenadas</p>
			<p>- Listas de diccionario (no las usa ni el Tato)</p>

			<p>
				Las listas tienen su intríngulis, ya que se componen de un elemento padre, que sería el elemento de lista por sí mismo, y sus descendentes o descendente, que serían los ítems o ítem de la lista.
			</p>

			<p>
				Según el tipo de lista que tengamos, el elemento será uno u otro; mientras que, a excepción de las listas de diccionarios, los elementos son idénticos. Veámoslo:
			</p>

			<article id="t271">
				<header>
					<h3>2.7.1.- Listas ordenadas: <code>&lt;ol&gt;</code></h3>
				</header>
				<div class="article-content">
					<p>
						Las listas ordenadas se declaran con el elemento <code>&lt;ol&gt;</code> y sus contenidos van metidos en elemtos <code>&lt;li&gt;</code>
					</p>
					<div class="ejemplo"><pre>
&lt;ol&gt;
	&lt;li&gt;Primero&lt;/li&gt; 
	&lt;li&gt;Segundo&lt;/li&gt; 
	&lt;li&gt;Tercero&lt;/li&gt; 
&lt;/ol&gt;	</pre>
					</div>
						<p>
							Las listas ordenadas, pueden llevar una serie de números, letras o caracteres para enumerar su contenido.
						</p>
						<p>
							Para decidir que tipo de numeración, letras, etc... utilizaremos en un futuro <strong>las hojas de estilo</strong>.
						</p>

					
				</div>
			</article>

			<article id="t272">
				<header>
					<h3>2.7.2.- Listas desordenadas: <code>&lt;ul&gt;</code></h3>
				</header>
				<div class="article-content">
					<p>
						Las listas desordenadas se declaran con el elemento <code>&lt;ul&gt;</code> y sus contenidos van metidos en elemtos <code>&lt;li&gt;</code>
					</p>
					<div class="ejemplo"><pre>
&lt;ul&gt;
	&lt;li&gt;Verde&lt;/li&gt; 
	&lt;li&gt;Azul&lt;/li&gt; 
	&lt;li&gt;Fucsia&lt;/li&gt; 
&lt;/ul&gt;	</pre>
					</div>

						<p>
							Las listas desordenadas, en vez de números, letras o caracteres para enumerar su contenido, utilizan guiones, discos, puntos, etc... y con las <strong>hojas de estilo</strong> podemos poner incluso chirimoyas, si así lo requiere el cliente.
						</p>
				</div>
			</article>

			<article id="t273">
				<header>
					<h3>2.7.3.- Listas de diccionario o descripción: <code>&lt;dl&gt;</code></h3>
				</header>
				<div class="article-content">
					<p>
						Las listas de diccionario se declaran con el elemento <code>&lt;dl&gt;</code> y sus contenidos son un poco más puñeteros.
					</p>
					<p>
						Estas listas, enumeran contenidos, y cada contenido tendría su definición correspondiente.
					</p>
					<p>
						Cada elemento de la lista iría dentro de un  <code>&lt;dt&gt;</code>, e inmediatamente después de éste, vendría su definición dento de un elemento  <code>&lt;dd&gt;</code>
					</p>
					<div class="ejemplo"><pre>
&lt;dl&gt;
	&lt;dt&gt;Barco&lt;/dt&gt; 
	&lt;dd&gt;Vehículo flotante&lt;/dd&gt; 
	&lt;dt&gt;Avión&lt;/dt&gt; 
	&lt;dd&gt;Vehículo volador&lt;/dd&gt; 
	&lt;dt&gt;Kalimotxo&lt;/dt&gt; 
	&lt;dd&gt;Bebida refrescante&lt;/dd&gt; 
&lt;/dl&gt;	</pre>
					</div>

						<p>
							Las listas de definición rara vez se usan, pero está bien saber que existen por si os encontráis con alguna por la web.
						</p>
				</div>
			</article>			

		</div>

	</section>

	<section class="tema2-8" id="t28">
		<header>
			<h2>2.8.- Anidar etiquetas</h2>
		</header>
		<div class="section-content">
			<p>Antes de empezar con los contenedores, vamos a aclarar algo que no me he dado cuenta hasta hace un rato.</p>
			<p>Anidar etiquetas, o meter unas dentro de otras, es el día a día de un futuro hackerman o hackerwoman como vosotros, así que vamos a explicar de que va el tema ese.</p>
			<p>
				Recordemos como iban esto de las etiquetas:
			</p>
			<div class="ejemplo">
				<p><code>&lt;etiqueta&gt; Contenido de la etiqueta &lt;/etiqueta&gt;</code></p>
			</div>
			<p>
				Las etiquetas se abren con los corchetes angulares, y se cierran del mismo modo, pero anteponiendo la barra truncada / antes del nombre de la etiqueta.
			</p>
			<p>
				Ejemplo práctico:
			</p>
			<div class="ejemplo">
				<p><code>&lt;p&gt;esto es un texto dentro de un párrafo&lt;/p&gt;</code></p>
			</div>	
			<p>
				Ahora bien, ¿y si queremos que la palabra <span class="cursiva">texto</span> vaya en negrita?
			</p>
			<p>
				Sabemos que para poner una palabra, o un fragmento de texto vaya en negrita, tenemos que "abrazarlo" o meterlo dentro de la etiqueta <code>&lt;strong&gt;</code>. Veamos cómo se haría:
			</p>
			<div class="ejemplo">
				<p>
					<code>&lt;p&gt;esto es un &lt;strong&gt;texto&lt;/strong&gt; dentro de un párrafo&lt;/p&gt;</code>
				</p>
			</div>
			<p>
				Una cosa <strong>muy importante</strong>, es acordarnos de cerrar las etiquetas una vez las abrimos.
			</p>
			<p>
				Vamos a ver un ejemplo un poco más intrincado. Para ello, queremos que la palabra texto vaya en negrita, y además, sea un hypervínculo que nos lleve a google.es
			</p>
			<div class="ejemplo">
				<p>
					<code>&lt;p&gt;esto es un &lt;a href="http://www.google.es"&gt; &lt;strong&gt;texto&lt;/strong&gt; &lt;/a&gt; dentro de un párrafo&lt;/p&gt;</code>
				</p>
			</div>	
			<p>
				No existe un límite para anidar etiquetas, podemos anidar tantas y tantas como el proyecto lo requiera.
			</p>
			<p>
				Sin embargo sí existen unas reglas que dicen qué etiquetas se pueden anidar dentro de otras.
			</p>
			<p>
				Es una regla que básicamente dice: <cite>Los elementos en bloque pueden contener elementos en línea, y otros elementos en bloque. Los elementos en línea, sólo deben contener otros elementos en línea.</cite>
			</p>
		</div>
	</section>		

	<section class="tema2-9" id="t29">
		<header>
			<h2>2.9.- Elementos en bloque y en línea</h2>
		</header>

		<div class="section-content">
			<p>
				Una forma de diferenciar los elementos o etiquetas en HTML, es si estos son en bloque o en línea.
			</p>

			<p>
				Como hoy es lunes y tengo la mente en otros lares, os hago un <span class="cursiva">corta y pega</span> de una página que me gusta mucho.
			</p>

			<p>
				Los elementos de bloque siempre empiezan en una nueva línea y ocupan todo el espacio disponible hasta el final de la línea. Por su parte, los elementos en línea  no empiezan necesariamente en nueva línea y sólo ocupan el espacio necesario para mostrar sus contenidos.
			</p>

			<p>
				Debido a este comportamiento, el tipo de un elemento influye de forma decisiva en la caja que el navegador crea para mostrarlo. La siguiente imagen muestra las cajas que crea el navegador para representar los diferentes elementos que forman una página HTML:
			</p>

			<p>
				<img src="../pics/inlineblock.gif" alt="ejemplo de elementos en linea y en bloque">
			</p>

			<p>El primer elemento de la página anterior es un párrafo. Los párrafos son elementos de bloque y por ese motivo su caja empieza en una nueva línea y llega hasta el final de esa misma línea. Aunque los contenidos de texto del párrafo no son suficientes para ocupar toda la línea, el navegador reserva todo el espacio disponible en la primera línea.</p>

			<p>El segundo elemento de la página es un enlace. Los enlaces son elementos en línea, por lo que su caja sólo ocupa el espacio necesario para mostrar sus contenidos. Si después de este elemento se incluye otro elemento en línea (por ejemplo otro enlace o una imagen) el navegador mostraría los dos elementos en la misma línea, ya que existe espacio suficiente.</p>

			<p>Por último, el tercer elemento de la página es un párrafo que se comporta de la misma forma que el primer párrafo. En su interior, se encuentra un enlace que también se comporta de la misma forma que el enlace anterior. Así, el segundo párrafo ocupa toda una línea y el segundo enlace sólo ocupa el espacio necesario para mostrar sus contenidos.</p>

			<p>Por sus características, los elementos de bloque no pueden insertarse dentro de elementos en línea y tan sólo pueden aparecer dentro de otros elementos de bloque. En cambio, un elemento en línea puede aparecer tanto dentro de un elemento de bloque como dentro de otro elemento en línea.</p>

			<p>Los elementos en línea definidos por HTML son: <code>a</code>, <code>abbr</code>, <code>acronym</code>, <code>b</code>, <code>basefont</code>, <code>bdo</code>, <code>big</code>, <code>br</code>, <code>cite</code>, <code>code</code>, <code>dfn</code>, <code>em</code>, <code>font</code>, <code>i</code>, <code>img</code>, <code>input</code>, <code>kbd</code>, <code>label</code>, <code>q</code>, <code>s</code>, <code>samp</code>, <code>select</code>, <code>small</code>, <code>span</code>, <code>strike</code>, <code>strong</code>, <code>sub</code>, <code>sup</code>, <code>textarea</code>, <code>tt</code>, <code>u</code>, <code>var</code>.</p>

			<p>Los elementos de bloque definidos por HTML son: <code>address</code>, <code>blockquote</code>, <code>center</code>, <code>dir</code>, <code>div</code>, <code>dl</code>, <code>fieldset</code>, <code>form</code>, <code>h1</code>, <code>h2</code>, <code>h3</code>, <code>h4</code>, <code>h5</code>, <code>h6</code>, <code>hr</code>, <code>isindex</code>, <code>menu</code>, <code>noframes</code>, <code>noscript</code>, <code>ol</code>, <code>p</code>, <code>pre</code>, <code>table</code>, <code>ul</code>.</p>


		</div>
	</section>



	<section class="tema2-10" id="t210">
		<header>
			<h2>2.10.- Etiqueta de contenedor <code>&lt;div&gt;</code></h2>
		</header>

		<div class="section-content">
			<p>La etiqueta <code>&lt;div&gt;</code> es sin duda, la etiqueta más utilizada en HTML.</p>
			<p>Semánticamente, no tiene ningún significado. Su finalidad, como su nombre indica, es de "dividir" partes del código.</p>
			<p>
				Es muy práctica, por ejemplo, si tenemos varios bloques de contenido y queremos separarlos o agruparlos de algún modo.
			</p>

			<div class="ejemplo">
				<pre>&lt;div&gt;
	&lt;p&gt;Aqui pongo lo que va denrto del primer bloque&lt;/p&gt;
&lt;/div&gt;
&lt;div&gt;
	&lt;p&gt;Aqui pongo lo que va denrto del segundo bloque&lt;/p&gt;
&lt;/div&gt;</pre>
			</div>
		</div>

	</section>

	<section class="tema2-11" id="t211">
		<header>
			<h2>2.11.- Nuevas etiquetas semánticas en HTML 5</h2>
		</header>

		<div class="section-content">
			<p>Antes he pasado muy por encima sobre la etiqueta <code>&lt;div&gt;</code>, a pesar de ser una de las etiquetas que se usan con más cotidianeidad.</p>
			<p>
				Cuando escribimos un código en una página web, solemos meterlo en contenedores, y a cada contenedor le damos un nombre (clase o identificador) diferente.
			</p>
			<p>
				Eso de las clases y los identificadores lo veremos en un rato, dentro de la sección <a href="#t210">Atributos de  las etiquetas html</a>. De momento saber que le podemos poner un nombre o varios a cada etiqueta para diferenciarlas de otras aparentemente iguales, o porque sí.
			</p>
			<p>
				Pues bien, retomando el tema de los contenedores, habíamos dicho que la etiqueta <code>&lt;div&gt;</code> carece de significado semántico. Es decir, pongamos lo que pongamos dentro (texto, imagenes, titulares, párrafos,...) a los robots de Google y de los buscadores, se la va a traer mucho al pairo y se lo va a tragar sin más, sin saborearlo.
			</p>
			<p>
				Para dotar a la web de un contenido más rico, en HTML5 se han añadido nuevas etiquetas con la labor de <span class="cursiva">contenedor</span>, es decir, de las que se espera que tengan algo dentro, y ese algo sí tenga un contenido semántico por estar metido dentro de ellas.
			</p>
			<p>
				Sin más dilación, vamos a ennumerar estas etiquetas, y las describiremos una a una.
			</p>

			<p>
				Las nuevas (o más importantes) etiquetas semánticas de HTML5 son:
			</p>

			<ul>
				<li><code>&lt;header&gt;</code></li>
				<li><code>&lt;footer&gt;</code></li>
				<li><code>&lt;section&gt;</code></li>
				<li><code>&lt;article&gt;</code></li>
				<li><code>&lt;nav&gt;</code></li>
				<li><code>&lt;aside&gt;</code></li>
				<li><code>&lt;address&gt;</code></li>
			</ul>

			<p>
				Para ver esto de un modo gráfico, veamos la siguiente imagen:
			</p>
			<p>
				<img src="../pics/semantica-html.png" alt="estructura semántica de una web">
			</p>
			<p>
				Un modo correcto de hacer una web sencillina, sería como en esa imagen.
			</p>
			<p>
				Dentro del <code>header</code> pondríamos un elemento <code>h1</code>, por ejemplo.
			</p>
			<p>
				El <code>nav</code> sería el contenedor para un menú de navegación. (Por cierto, los menús de navegación suelen usar <a href="#t27">listas</a> para representarlos).
			</p>
			<p>
				En la imagen sale una sección central con tres artículos. Esto sería equiparable, por ejemplo, a la sección de deportes de un periódico, con 3 artículos, uno de curling, otro de paddle-surf, y otro de bowsleig.
			</p>
			<p>
				El <code>aside</code> representa un pedazo de la web con una información no tan importante. Podría ser otro menú de navegación (por lo que llevaría otro <code>nav</code> dentro de ella), una lista con los últimos tweets de Donald Trump, o cualquier cosa que nos apetezca con un significante menor que lo que iría en el <code>section</code>.
			</p>
			<p>
				Por último aparece un <code>footer</code>, o pie de página. Aquí colocaríamos lo típico de un pie de página en una web (direcciones, logos, lo que queramos...).
			</p>
			<p>
				Veámoslas una por una:
			</p>

			<article>
				<header id="t2111">
					<h3>2.11.1.- Etiqueta <code>&lt;header&gt;</code> para encabezados</h3>
				</header>
				<div class="article-content">
					<p>
						La etiqueta <code>&lt;header&gt;</code> tiene mucho significado semántico, así que utilizarla es una buena práctica.
					</p>
					<p>
						Dentro debe ir al menos un elemento de encabezado <code>h1, h2, ...</code>, y más contenido si así lo deseamos, pero una de los "haches", debe ir.
					</p>
					<p>
						Las etiquetas <code>&lt;article&gt;</code> y <code>&lt;section&gt;</code>, según los estándares de la W3C, deben llevar dentro una etiqueta <code>&lt;header&gt;</code>. Luego lo vemos.
					</p>
				</div>
				<div class="ejemplo">
<pre>&lt;header&gt;
	&lt;h1&gt;Mi página web&lt;/h1&gt;
&lt;/header&gt;</pre>
				</div>
			</article>

			<article id="t2112">
				<header>
					<h3>2.11.2.- Etiqueta <code>&lt;footer&gt;</code> para pinreles de página</h3>
				</header>
				<div class="article-content">
					<p>
						La etiqueta <code>&lt;footer&gt;</code> tiene significado semántico, pero su contenido es menos relevante para los navegadores.
					</p>
					<p>
						Podemos usarla o no, al gusto. Para un código más ordenado es recomendable utilizarla.
					</p>
				</div>
				<div class="ejemplo">
<pre>&lt;footer&gt;
	&lt;p&gt;Síguenos en &lt;a href="http://www.frinsbuk.com"&gt;Frinsbuk&lt;/a&gt;&lt;/p&gt;
&lt;/footer&gt;</pre>					
				</div>

				<p class="centered-text">
					<img src="../pics/frigopie.png" alt="los frigopies son para el ver ano">
				</p>

			</article>

			<article id="t2113">
				<header>
					<h3>2.11.3.- Etiqueta <code>&lt;section&gt;</code> para secciones de la página</h3>
				</header>
				<div class="article-content">
					<p>
						La etiqueta <code>&lt;section&gt;</code> divide grandes bloques de contenido en una página.
					</p>
					<p>
						Entre la etiqueta <code>&lt;section&gt;</code> y <code>&lt;article&gt;</code> existe una notoria controversia que alguna vez a acabado en graves altercados entre maquetadores y programadores .
					</p>
					<p>
						La controversia reside en decidir si una sección lleva dentro artículos, o un artículo lleva dentro secciones.
					</p>
					<p>
						En la última reunión con los colegas del gremio, me acompañó Lucille, que sin pronunciar una palabra puso ecuménicamente de acuerdo a todos los allí presentes. <strong>Haced lo que más os plazca</strong>; incluso en la misma página de la W3C no se ponen de acuerdo, así que por qué pelearnos para una vez que la ley es laxa.
					</p>
					<p class="centered-text">
						<img src="../pics/lucille.jpg" alt="para que discutir si podemos resolverlo a mamporros">
					</p>
					<p>
						Eso sí, tanto la etiqueta <code>&lt;section&gt;</code> como <code>&lt;article&gt;</code> deben llevar anidado dentro una etiqueta <code>&lt;header&gt;</code>, y como sabemos, ésta a su vez lleva un headline <code>h1,h2,...</code> o más.
					</p>
					<div class="ejemplo">
					<pre>&lt;section id="seccion-2"&gt;
	&lt;header&gt;
		&lt;h2&gt;Seccion Cachuli&lt;/h2&gt;
	&lt;/header&gt;
	&lt;p&gt;Cachuli es un chulo piscinas.&lt;/p&gt;
	&lt;p&gt;Y todo el resto de la sección.&lt;/p&gt;
&lt;/section&gt;</pre>
					</div>
				</div>
			</article>			

			<article id="t2114">
				<header>
					<h3>2.11.4.- Etiqueta <code>&lt;article&gt;</code> para <span class="cursiva">"artículos"</span></h3>
				</header>
				<div class="article-content">
					<p>
						Antes ya he explicado la controversia existente entre <code>&lt;section&gt;</code> y <code>&lt;article&gt;</code>.
					</p>
					<p>
						El uso de uno u otro es algo personal, y al fin y al cabo termina siendo algo de sentido común. En algunas ocasiones, ambas etiquetas pueden llegar a ser semánticamente iguales, así que no os voy a rallar la cabeza con estas cuestiones.
					</p>

					<div class="ejemplo">
					<pre>&lt;article id="seccion-2"&gt;
	&lt;header&gt;
		&lt;h2&gt;Pipi Lanstrung en Benidorm&lt;/h2&gt;
	&lt;/header&gt;
	&lt;p&gt;El mono está borracho.&lt;/p&gt;
	&lt;p&gt;Y todo el resto del artículo.&lt;/p&gt;
&lt;/article&gt;</pre>
					</div>

				</div>


			</article>


			<article id="t2115">
				<header>
					<h3>2.11.5.- Etiqueta <code>&lt;nav&gt;</code> para zonas de navegación</h3>
				</header>
				<div class="article-content">
					<p>
						La etiqueta <code>&lt;nav&gt;</code> se utiliza para colocar dentro botones, enlaces o elementos que sirvan como menú de navegación.
					</p>
					<p>
						Antes habíamos dicho que para los menús utilizamos listas, al fin y al cabo estamos listando unas opciones que nos sirven para navegar, y esa lista es desordenada. Veamos un ejemplo:
					</p>
					<div class="ejemplo">
					<pre>
&lt;nav id="menu-principal"&gt;
	&lt;ul&gt;
		&lt;li&gt;&lt;a href="index.html&gt;Inicio&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="tema1.html&gt;Tema 1&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="tema2.html&gt;Tema 2&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/nav&gt;</pre>
					</div>
				</div>
			</article>			

			<article id="t2116">
				<header>
					<h3>2.11.6.- Etiqueta <code>&lt;aside&gt;</code> para zonas periféricas o de menor importancia</h3>
				</header>
				<div class="article-content">
					<p>
						La etiqueta <code>&lt;aside&gt;</code> lleva un contenido adicional al contenido principal de la web. Es una etiqueta bastante pija y poca gente la usa.
					</p>
					<p>
						Uno de los ejemplos donde la he visto utilizar correctamente sería algo como esto:
					</p>

					<div class="ejemplo">
<pre>&lt;p&gt;Ayer me comí ciento cuarenta y tres castañas y hoy ya no tengo hambre.&lt;/p&gt;
&lt;aside&gt;
	&lt;h4&gt;Castañas&lt;/h4&gt;
	&lt;p&gt;Las castañas son unas frutas muy punkis mientras están por las ramas. Tienen muchos pinchos.&lt;/p&gt;
&lt;/aside&gt;</pre>						
					</div>

					<p>
						Como veis, se está haciendo un uso <span class="cursiva">perimetral</span> para mostrar una información adicional, de la que se podría prescindir sin que la página o el mensaje (comer castañas como un cerdo), perdiese su significado.
					</p>

					<p>
						Un <code>&lt;aside&gt;</code> sería un sitio indicado para poner publicidad, banners o cosicas que nos gusten.
					</p>

				</div>
			</article>			

			<article id="t2117">
				<header>
					<h3>2.11.7.- Etiqueta <code>&lt;address&gt;</code> para direcciones</h3>
				</header>
				<div class="article-content">
					<p>
						La etiqueta <code>&lt;address&gt;</code> sirve para poner direcciones físicas, es decir, direcciones de toda la vida, las señas.
					</p>
					<p>
						La especificación de la W3C se refiere a la dirección del autor de un documento, o un artículo, dependiendo de donde se coloque. Pero a las alumnas y alumnos de este curso, nos la repampinfla, y pondremos la dirección que nos dé la gana, siempre que sea una dirección. Ya veréis como los zanguangos del consorcio cambian la especificación tarde o temprano.
					</p>
					<p>
						Si quieres poner la dirección de un negocio en la página web, podríamos ponerla en el <code>&lt;footer&gt;</code>, y dentro del footer en una etiqueta  <code>&lt;address&gt;</code>.
					</p>

					<div class="ejemplo">
<pre>&lt;footer&gt;
	&lt;h4&gt;Ortopedia Gepetto&lt;/h4&gt;
	&lt;p&gt;Puedes encontrarnos en:&lt;/p&gt;
	&lt;address&gt;
		&lt;p&gt;Calle Melancolia&lt;/p&gt;
		&lt;p&gt;Entre el puticlub y la parada del tranvía&lt;/p&gt;
	&lt;/address&gt;
&lt;/footer&gt;</pre>						
					</div>

				</div>
			</article>			


		</div>


	</section>

	
	<section class="tema2-12" id="t212">
		<header>
			<h2>2.12.- Atributos de las etiquetas</h2>
		</header>

		<div class="section-content">
			<p>
				Las etiquetas en html pueden llevar atributos. Mola. Otras además, deben llevarlos, como el caso de las <a href="#t25">imágenes</a>, que llevan el atributo <code>alt</code> para poner un <span class="cursiva">texto alternativo</span>.
			</p>
			<p>
				Los atributos van siempre dentro de la etiqueta de apertura de un elemento:
			</p>
			<p><code>&lt;elemento atributo="valor del atributo"&gt; contenido &lt;/elemento&gt;</code></p>

			<p>
				Los atributos se componen del nombre y del valor entrecomillado.
			</p>

			<p>
				Los atributos tienen diferentes finalidades, pero básicamente dan información adicional del elemento.
			</p>
			<p>
				Existen unos <strong>atributos globales</strong> que puede llevar cualquier elemento de html, y hay otros atributos más específicos de cada elemento.
			</p>

			<article id="t2121">
				<header>
					<h3>2.12.1.- Atributo <code>id</code></h3>
				</header>
				<div class="article-content">
					<p>
						Cada elemento en el HTML puede tener un atributo <code>id</code>.
					</p>
					<p>
						Ese <code>id</code> será único en el código, no otro elemento tendrá esa <code>id</code>.
					</p>
					<p>
						Además, ese code, como la inmensa mayoría de atributos, será una sola palabra.
					</p>

					<p>Ejemplo:</p>

					<div class="ejemplo">
						<p><code>&lt;p id="primero"&gt;Primera frase&lt;/p&gt;</code></p>
						<p><code>&lt;p id="segundo"&gt;Segunda frase&lt;/p&gt;</code></p>
					</div>

					<p>A simple vista y estéticamente las dos frases son iguales.</p>

					<p>Los atributos son muy útiles cuando usemos las <strong>hojas de estilo</strong> o <strong>CSS</strong> y ya son la pera limonera cuando usamos <strong>javascript</strong>.</p>

					<p>
						De este modo podríamos decir con CSS que la primera frase fuera en verde y la segunda en rojo:
					</p>

					<div class="ejemplo">
						<pre>#primero {
	color: green;
}
#segundo {
	color: red;
}</pre>
					</div>

					<p>
						Pero no os precipitéis... aun queda un poquín, no mucho, lo prometo, para empezar con las hojas de estilo y dotar a la web de luz y color.
					</p>

					<p>
						El atributo <code>id</code> tambien nos es muy util dentro de los <strong>hypervínculos</strong>.
					</p>

					<p>Os había contado que los enlaces podían ser relativos o absolutos; repasemos:</p>

					<div class="ejemplo">
						<p><code>&lt;a href="http://www.google.es"&gt;ir a google&lt;/a&gt;</code> (esto sería un enlace absoluto)</p>

						<p><code>&lt;a href="temas/tema2.html"&gt;ir al tema 2&lt;/a&gt;</code> (esto sería un enlace relativo)</p>
					</div>
					<p>
						Lo que me había callado como un zorrucu, era que también podemos hacer enlaces dentro de nuestra propia página, hacia un lugar determinado.
					</p>			
					<p>
						Para hacer esto, primeramente debemos dotar de una id al lugar donde queremos que enlace, y luego enlazar a él.
					</p>
					<p>
						Imaginemos que tenemos un índice de temas al principio de la página, y queremos hacer que cuando pinche en un enlace, la página baje automáticamente hacia el tema indicado, pues bien, haremos lo siguiente:
					</p>
					<div class="ejemplo">
					<pre>&lt;h1&gt;Lista de temas&lt;/h1&gt;
&lt;ul&gt;
	&lt;li&gt;&lt;a href="#tema1">Tema 1&lt;/a&gt;&lt;/li&gt;					
	&lt;li&gt;&lt;a href="#tema2">Tema 2&lt;/a&gt;&lt;/li&gt;					
	&lt;li&gt;&lt;a href="#tema3">Tema 3&lt;/a&gt;&lt;/li&gt;					
&lt;/ul&gt;

(imaginemos que hay un montón de contenido entre medias)

&lt;div id="tema1"&gt;
	....
	(contenido del tema 1)
&lt;/div&gt;
&lt;div id="tema2"&gt;
	....
	(contenido del tema 2)
&lt;/div&gt;
&lt;div id="tema3"&gt;
	....
	(contenido del tema 3)
&lt;/div&gt;</pre></div>
					<p>
						Este código haría que al pinchar sobre alguno de los enlaces <code>&lt;a&gt;</code> fueran hacia el tema en cuestión.
					</p>

					<p>
						¿Y si queremos que vayan a una sección, pero en otra página distinta?
					</p>

					<p>
						Muy fácil, ponemos la página, y luego la id:
					</p>

					<div class="ejemplo">
						<p>
							<code>&lt;a href="temario.html#tema3"&gt;</code>
						</p>
					</div>
				</div>
			</article>

			<article id="t2122">
				<header>
					<h3>2.12.2.- Atributo <code>class</code></h3>
				</header>
				<div class="article-content">
					<p>
						El atributo <code>class</code> es el hermano pequeño de <code>id</code>.
					</p>
					<p>
						Sirve para lo mismo que <code>id</code>, pero con una importante diferencia: mientras sólo puede haber una <code>id</code> en toda la página, la clase o <code>class</code> puede repetirse. Veámoslo en acción!
					</p>

					<div class="ejemplo">
<pre>&lt;div id="bloque1"&gt;
	&lt;p class="verde"&gt;Esta frase tiene la clase "verde" &lt;/p&gt;
	&lt;p class="azul"&gt;Esta frase tiene la clase "azul" &lt;/p&gt;
	&lt;p class="verde"&gt;Esta frase también tiene la clase "verde" &lt;/p&gt;
	&lt;h3 class="verde"&gt;Este subtitular también tiene la clase "verde" &lt;/h3&gt;
&lt;/div&gt;	
</pre>
					</div>

					<p>
						Las clases y las id's tienen una gran importancia a la hora de la estética (CSS) y la funcionalidad (JavaScript). Su uso, con moderación, es una práctica recomendada.
					</p>
				</div>
			</article>

			<article id="t2103">
				<header>
					<h3>2.10.3.- Atributo <code>title</code></h3>
				</header>
				<div class="article-content">
					<p>
						El atributo <code>title</code> sirve para añadir visualmente un "cartelito" al pasar el ratón por encima del elemento al que se lo hayamos aplicado.
					</p>

					<p>
						Como los demás atributos, se usa dento de una etiqueta y escribimos así:
					</p>
					<p class="ejemplo">
						<code>&lt;a href="http://www.google.es" title="pincha aquí para ir a Google"&gt;Ir a Google&lt;/a&gt;</code>
					</p>

					<p>
						Esto se vería así: <a href="http://www.google.es" title="pincha aquí para ir a Google">Ir a Google</a>
					</p>
				</div>
			</article>			

			<article>
				<header>
					<h3>2.10.X.- Listado de atributos</h3>
				</header>

				<p>
					Para mentes inquietas y/o curiosas, me he permitido hacer una especie de "corta/pega" de no me acuerdo qué página con el listado completo de atributos.
				</p>

				<p>
					Ni qué decir tiene que es absurdo aprendérselos de memoria. Con la práctica usaremos algunos de ellos, e incluso con mucha práctica, otros no los usaremos en la vida.
				</p>

				<p>
					Para mostrar u ocultar la lista completa de atributos, pulsa sobre la foto del perro drogadicto.
				</p>

				<p>
					<a href="#" class="muestra-atributos">
						<img src="../pics/perrete.jpg" alt="el perro guardián de los atributos html">
					</a>
				</p>

				<div class="article-content" id="lista-atributos">
					<?php
						include ("../partials/_lista_de_artibutos.php");
					 ?>

				</div>		
			</article>
		</div>
	</section>

	<section class="tema2-11" id="t213">
		<header>
			<h2>2.13.- Tablas <code>&lt;table&gt;</code></h2>
		</header>

		<div class="section-content">
			<p>
				Al igual que el típico profesor de biología que os mandaba al recréo cuando tenía que explicar la reproducción sesuá, y no por vergüenza sino por una pereza titánica, se me hace muy cuesta arriba explicar las tablas.
			</p>
			<p>
				Las tablas, semánticamente hablando, SOLO deben usarse para mostrar "información tabulada".
			</p>
			<p>
				La RAE, que es poco más que una mierda pinchada en un palo, define "tabular" como <span class="cursiva">Expresar valores, magnitudes u otros datos por medio de tablas</span>, y encima dice que es un verbo transitivo... discutible.
			</p>
			<p>
				Son muy controvertidas (no, no se doblan ni son elásticas, son puñeteras). Lo son porque hay gente que piensa que cosas como un horario (en inglés "timetable") debería ir en una tabla. O una lista de precios en un restaurante (aquí lo de "lista" nos da una pista de porqué no).
			</p>
			<p>
				Entonces, ¿qué metemos en las tablas? Veamos primero lo que no debemos meter, golos@s...
			</p>
			<p>
				Bajo ningún concepto, se usarán las tablas para maquetar contenido.
				<br>
				En los años 90 los <span class="cursiva">webmasters</span> usaban las tablas para colocar el contenido en un sitio y en otro. Esta práctica junto con los peinados horteras y la corbata con teclas de piano han sido relegados al olvido y se les mira con vergüenza cuando se hace memoria.
			</p>
			<p>
				Nunca meteremos contenido relevante en una tabla.
				<br>
				A Google se la repampinfla las tablas. Cuando ve que en el código hay una tabla, mira para otro lado (o quizás no), pero para Google es como cuando estamos leyendo un libro, pasamos páginas, y no nos enteramos de nada.
			</p>
			<p>
				En una tabla podemos meter contenido de todo tipo (imágenes, texto, vídeo, audio, ...).
			</p> 
			<p>
				Ahora veamos qué meteremos en una tabla:
			</p>
			<p>
				Para abreviar, os diré mi truco para saber que es lo que se puede meter:
			</p>
			<p>
				1.- La información no debe ser relevante: es decir, algo que no nos importe que aparezca en los navegadores.
				<br>
				Si tenemos una zapatería, y queremos mostrar nuestros modelos de zapatos, su precio, color, etc.. algo que pensaríamos que quedaría muy bonito en una tabla, NO lo meteremos allí, porque si alguien quiere buscar manoletinas unisex de colorines por Google, y esa información la hemos metido en una tabla, no aparecerá.
				<br>
				Existen alternativas con CSS para mostrar esa información con <code>&lt;div&gt;</code> y darle un aspecto muy cuqui de tabla.
			</p>
			<p>
				2.- La información podría pasar de una celda a otra pulsando la tecla "Tab" del teclado.
				<br>
				Esto no es fácil de entender, pero imaginémonos que estamos buscando información en una larga lista de elementos en una tabla, y para navegar rápidamente en la tabla pulsaríamos la tecla TAB para avanzar sobre ese contenido de una celda a otra.
			</p>

			<p>
				Bien, ahora que sabemos cuando y cuando no usar el elemento <code>&lt;table&gt;</code>, vamos a ver como se usa a nivel de código.
			</p>

			<p>
				Las tablas empiezan con el elemento: <code>&lt;table&gt;</code> y se cierran como el resto de elementos, <code>&lt;/table&gt;</code>.
			</p>
			<p>
				De toda la vida, las tablas se componen de <strong>filas</strong> y <strong>columnas</strong>.
			</p>
			<p>
				El método para escribir el código de una tabla sería:
			</p>
			<ul class="normal-list">
				<li>1.- Abrimos la etiqueta de tabla <code>&lt;table&gt;</code></li>
				<li>2.- Abrimos una fila con el elemento <code>&lt;tr&gt;</code> <span class="cursiva">(table row)</span></li>
				<li>3.- Dentro de la fila, añadimos la celda con el elemento <code>&lt;td&gt;</code> <span class="cursiva">(table data)</span> y lo cerramos <code>&lt;/td&gt;</code> </li>
				<li>4.- Podemos repetir el proceso, añadiendo otra celda</li>
				<li>5.- Ahora ceraríamos la fila <code>&lt;/tr&gt;</code></li>
				<li>6.- Si queremos, podemos añadir otra fila con el elemento <code>&lt;tr&gt;</code></li>
				<li>7.- Dentro de esta fila, deberíamos meter el mismo número de celdas que la anterior (dos en este caso), o indicar que una de sus celdas ocupa dos espacios (con el atributo <code>colspan="2"</code> que veremos más adelante)</li>
				<li>8.- Cerraremos nuestra tabla <code>&lt;/table&gt;</code></li>
			</ul>
			
			<p>
				Veamos una tabla sencilla:
			</p>

			<div class="ejemplo">
<pre>
&lt;table id=&quot;mitabla&quot;&gt;
	&lt;tr&gt;
		&lt;td&gt;VEH&Iacute;CULO&lt;/td&gt;
		&lt;td&gt;COLOR&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;Bicicleta&lt;/td&gt;
		&lt;td&gt;Verde&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;Canoa&lt;/td&gt;
		&lt;td&gt;Burdeox&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;Helic&oacute;ptero&lt;/td&gt;
		&lt;td&gt;Fucsia&lt;/td&gt;
	&lt;/tr&gt;
&lt;/table&gt;	
</pre>			
			</div>
	
			<table id="mitabla" class="tablita">
				<tr>
					<td>VEHÍCULO</td>
					<td>COLOR</td>
				</tr>
				<tr>
					<td>Bicicleta</td>
					<td>Verde</td>
				</tr>
				<tr>
					<td>Canoa</td>
					<td>Burdeox</td>
				</tr>			
				<tr>
					<td>Helicóptero</td>
					<td>Fucsia</td>
				</tr>
			</table>

		</div>

		<article>
			<header>
				<h3>2.13.1.- Partes de una tabla</h3>
			</header>
			<div class="article-content">
				<p>En las tablas no nos limitamos a poner celdas, filas y columnas. Tenemos en cuenta que los elementos en una tabla pueden ser un encabezado (las celdas que van en la primera fila), un pie de tabla, un grupo de columnas, la leyenda de la tabla, etc...</p>
				<p>
					A modo de lista, vamos a enumerar los elementos de las tablas y luego pasaremos a definirlos individualmente.
				</p>
				<ul class="normal-list">
					<li><code>&lt;table&gt;</code>: define una tabla</li>
					<li><code>&lt;thead&gt;</code>: define el grupo de encabezado de una tabla</li>
					<li><code>&lt;th&gt;</code>: define una celda de encabezado</li>
					<li><code>&lt;tr&gt;</code>: define una fila</li>
					<li><code>&lt;td&gt;</code>: define una celda individual</li>
					<li><code>&lt;tbody&gt;</code>: define el comienzo del cuerpo en una tabla</li>
					<li><code>&lt;tfoot&gt;</code>: define el grupo de celdas del pie de la tabla</li>
					<li><code>&lt;colgroup&gt;</code>: define un grupo de una o más columnas en una tabla para darles formato</li>
					<li><code>&lt;col&gt;</code>: especifica as propiedades para las columnas denrto de un <code>&lt;colgroup&gt;</code></li>
					<li><code>&lt;caption&gt;</code>: define la leyenda o título de una tabla</li>
				</ul>
			</div>
		</article>

		<article>
			<header>
				<h3>2.13.2.- <code>&lt;thead&gt;</code> y <code>&lt;th&gt;</code></h3>
			</header>
			<div class="article-content">
				<p>
					Habíamos dicho que <code>&lt;thead&gt;</code> y <code>&lt;th&gt;</code> nos sirven para encabezados en las tablas.
				</p>
				<p>
					Siguiendo el ejemplo anterior, vamos a ver como aplicarnos el cuento a la tabla:
				</p>

				<div class="ejemplo">

					<table class="tablita">
						<thead>
							<tr>
								<th>VEHÍCULO</th>
								<th>COLOR</th>
							</tr>							
						</thead>
						<tr>
							<td>Bicicleta</td>
							<td>Verde</td>
						</tr>
						<tr>
							<td>Canoa</td>
							<td>Burdeox</td>
						</tr>			
						<tr>
							<td>Helicóptero</td>
							<td>Fucsia</td>
						</tr>
					</table>
				</div>
					
				<p>
					Visualmente es idéntica a la anterior, pero veamos el código:
				</p>

<pre>
&lt;table class=&quot;tablita&quot;&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th&gt;VEH&Iacute;CULO&lt;/th&gt;
			&lt;th&gt;COLOR&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tr&gt;
		&lt;td&gt;Bicicleta&lt;/td&gt;
		&lt;td&gt;Verde&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;Canoa&lt;/td&gt;
		&lt;td&gt;Burdeox&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;Helic&oacute;ptero&lt;/td&gt;
		&lt;td&gt;Fucsia&lt;/td&gt;
	&lt;/tr&gt;
&lt;/table&gt;	
</pre>				

				<p>
					La diferencia es simple: las celdas que son de encabezado, llevan <strong>th</strong> en lugar de <strong>td</strong>.
				</p>
				<p>
					Las filas siguen siendo <strong>tr</strong>, pero como son filas o fila de encabezado, se anidan dentro de un <strong>thead</strong>
				</p>

			</div>
		</article>


		<article>
			<header>
				<h3>2.13.3.- <code>&lt;tbody&gt;</code> y <code>&lt;tfoot&gt;</code></h3>
			</header>

			<div class="article-content">
				<p>
					Como habréis adivinado, las etiquetas <code>&lt;tbody&gt;</code> y <code>&lt;tfoot&gt;</code> se refieren al cuerpo y al pie de la tabla, respectivamente.
				</p>
				<p>
					Dentro de estas etiquetas, que al igual que <code>&lt;thead&gt;</code> sirve para agrupar, a diferencia de ésta, dentro seguiremos usando <code>&lt;tr&gt;</code> y <code>&lt;td&gt;</code> para definir filas y celdas.
				</p>
				<p>
					Vamos a crear una tabla diferente y ya veréis que despiporre. (una mierda, las tablas son más aburridas que Noche de Fiesta)
				</p>


<table class="tablita">
	<thead>
		<tr>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Edad</td>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td>total nombres</td>
			<td>total apellidos</td>
			<td>suma edades</td>
		</tr>
		<tr>
			<td>3</td>
			<td>4</td>
			<td>733</td>
		</tr>					
	</tfoot>
	<tbody>
		<tr>
			<td>Piluca</td>
			<td>Rostropovic</td>
			<td>146</td>
		</tr>
		<tr>
			<td>Wenceslao</td>
			<td>Vinokulov</td>
			<td>14</td>
		</tr>
		<tr>
			<td>Ricky</td>
			<td>Guakiloslav Fernández</td>
			<td>573</td>
		</tr>
	</tbody>
</table>

			<p>
				El código para esta tabla es muy pintoresco:
			</p>

			<div class="ejemplo">
<pre>
&lt;table class=&quot;tablita&quot;&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;td&gt;Nombre&lt;/td&gt;
			&lt;td&gt;Apellido&lt;/td&gt;
			&lt;td&gt;Edad&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tfoot&gt;
		&lt;tr&gt;
			&lt;td&gt;total nombres&lt;/td&gt;
			&lt;td&gt;total apellidos&lt;/td&gt;
			&lt;td&gt;suma edades&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;3&lt;/td&gt;
			&lt;td&gt;4&lt;/td&gt;
			&lt;td&gt;733&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tfoot&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;td&gt;Piluca&lt;/td&gt;
			&lt;td&gt;Rostropovic&lt;/td&gt;
			&lt;td&gt;146&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;Wenceslao&lt;/td&gt;
			&lt;td&gt;Vinokulov&lt;/td&gt;
			&lt;td&gt;14&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;Ricky&lt;/td&gt;
			&lt;td&gt;Guakiloslav Fern&aacute;ndez&lt;/td&gt;
			&lt;td&gt;573&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;	
</pre>				
				</div>

				<p>
					Podemos ver que, aunque escribamos la etiqueta <code>&lt;tfoot&gt;</code> al principio de la tabla, se dibujará al final, donde corresponde al pie de tabla.
				</p>
			</div>			
		</article>


		<article>
			<header>
				<h3>2.13.4.- <code>&lt;caption&gt;</code></h3>
			</header>
			<div class="article-content">
				<p>Caption se refiere a la leyenda de la tabla. Tan simple como eso.</p>
				<p>La etiqueta <code>&lt;caption&gt;</code> debe insertarse justo después de la apertura de la etiqueta <code>&lt;table&gt;</code>.</p>
				<p>Solo puede haber un caption por tabla.</p>
				<p>El elemento <code>&lt;caption&gt;</code> por defecto saldrá centrado sobre la tabla. Más tarde veremos cómo modificar esto con CSS.</p>

				<p>Veamos un ejemplo sobre la tabla anterior:</p>

			<div class="ejemplo">
<pre>
&lt;table class=&quot;tablita&quot;&gt;
	&lt;caption&gt;Super Tabla Morena&lt;/caption&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;td&gt;Nombre&lt;/td&gt;
			&lt;td&gt;Apellido&lt;/td&gt;
			&lt;td&gt;Edad&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tfoot&gt;
		&lt;tr&gt;
			&lt;td&gt;total nombres&lt;/td&gt;
			&lt;td&gt;total apellidos&lt;/td&gt;
			&lt;td&gt;suma edades&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;3&lt;/td&gt;
			&lt;td&gt;4&lt;/td&gt;
			&lt;td&gt;733&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tfoot&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;td&gt;Piluca&lt;/td&gt;
			&lt;td&gt;Rostropovic&lt;/td&gt;
			&lt;td&gt;146&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;Wenceslao&lt;/td&gt;
			&lt;td&gt;Vinokulov&lt;/td&gt;
			&lt;td&gt;14&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;Ricky&lt;/td&gt;
			&lt;td&gt;Guakiloslav Fern&aacute;ndez&lt;/td&gt;
			&lt;td&gt;573&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;	
</pre>				
				</div>				


				<p>Esto se dibujaría así:</p>

				<table class="tablita">
					<caption>Super Tabla Morena</caption>
					<thead>
						<tr>
							<td>Nombre</td>
							<td>Apellido</td>
							<td>Edad</td>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<td>total nombres</td>
							<td>total apellidos</td>
							<td>suma edades</td>
						</tr>
						<tr>
							<td>3</td>
							<td>4</td>
							<td>733</td>
						</tr>					
					</tfoot>
					<tbody>
						<tr>
							<td>Piluca</td>
							<td>Rostropovic</td>
							<td>146</td>
						</tr>
						<tr>
							<td>Wenceslao</td>
							<td>Vinokulov</td>
							<td>14</td>
						</tr>
						<tr>
							<td>Ricky</td>
							<td>Guakiloslav Fernández</td>
							<td>573</td>
						</tr>
					</tbody>
				</table>				
			</div>
		</article>

		<article>
			<header>
				<h3>2.13.5.- <code>&lt;col&gt;</code> y <code>&lt;colgroup&gt;</code></h3>
			</header>
			<div class="article-content">
				<p>Las etiquetas <code>&lt;col&gt;</code> y <code>&lt;colgroup&gt;</code> tienen como propósito aplicar estilos a columnas enteras.</p>

				<p>
					Si pretendes hacerte un hackerman o hackerwoman, te recomiendo que pases de esta sección. Estas etiquetas son un full de Estambul y no las voy ni a explicar, de momento.
				</p>

				<p>
					La teoría de las tablas, como todo lo demás, está meridianamente bien que diría algún tontaco, pero no sirve para nada sin hacer muchos ejercicios.
				</p>

				<p>
					En breve, subiré ejercicios de tablas y lo que queda de teoría sobre estas.
				</p>

			</div>
		</article>

		<article>
			<header>
				<h3>2.13.6.- Atributos <code>colspan</code> y <code>rowspan</code> para celdas que ocupan más de un espacio</h3>
			</header>
			<div class="article-content">
				<p>Seguramente recordéis esos horarios que hacíamos en el colegio, con una fila entera bien gordita con la palabra <span class="cursiva">recreo</span> que ocupaba los cinco días de la semana. O alguna asignatura de dos o tres horas que también ocupaba más espacio, aunque menos divertido.</p>

				<p>Estos <span class="cursiva">desbordamientos</span>, por llamarlos de algún modo, es lo que en <code>html</code> serían los atributos <code>colspan</code> y <code>rowspan</code>.</p>

				<p>Para definirlo, dentro de la celda en cuestión, le ponemos el atributo y su valor.</p>

				<p><code>colspan</code> sirve para que la celda ocupe más de una columna (espacio horizontal); mientras <code>rowspan</code> hace que la celda ocupe más de una fila (espacio vertical).</p>

				<p>Veamos un ejemplo básico y su código.</p>

				<table class="tablita">
					<thead>
						<tr>
							<th>Lunes</th>
							<th>Martes</th>
							<th>Miércoles</th>
							<th>Jueves</th>
							<th>Viernes</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Mates</td>
							<td>Lengua</td>
							<td>Física</td>
							<td>Química</td>
							<td>Música</td>
						</tr>
						<tr>
							<td>Música</td>
							<td>Pintura</td>
							<td>Gimnasia</td>
							<td rowspan="2">Onanismo</td>
							<td>Historia</td>
						</tr>
						<tr>
							<td>Filosofía</td>
							<td>Carpintería</td>
							<td>Botánica</td>
							<td>Papirofléxia</td>
						</tr>
						<tr>
							<td colspan="5">Recreo</td>
						</tr>
					</tbody>
				</table>

				<p>Como podéis ver, la asignatura de onanismo lleva un par de horas, y por eso hemos utilizado el atributo <code>rowspan</code> con el valor 2.</p>

				<p>Asímismo, el recreo lo tenemos los cinco días de la semana, por lo que hemos utilizado el atributo <code>colspan</code> con un valor de 5.</p>

				<p>La tabluca está un poco fea, ya que los elementos no están centrados ni vertical ni horizontalmente. Podríamos utilizar atributos como <code>valign</code>, pero a día de hoy son obsoletos y cualquier cambio estético lo debemos de hacer con <strong>CSS</strong>, en estos casos concretos con propiedades como <code>vertical-align</code> o <code>text-align</code>.</p>
				
<div class="ejemplo">
<pre>
&lt;table class=&quot;tablita&quot;&gt; 
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th&gt;Lunes&lt;/th&gt;
			&lt;th&gt;Martes&lt;/th&gt;
			&lt;th&gt;Mi&eacute;rcoles&lt;/th&gt;
			&lt;th&gt;Jueves&lt;/th&gt;
			&lt;th&gt;Viernes&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;td&gt;Mates&lt;/td&gt;
			&lt;td&gt;Lengua&lt;/td&gt;
			&lt;td&gt;F&iacute;sica&lt;/td&gt;
			&lt;td&gt;Qu&iacute;mica&lt;/td&gt;
			&lt;td&gt;M&uacute;sica&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;M&uacute;sica&lt;/td&gt;
			&lt;td&gt;Pintura&lt;/td&gt;
			&lt;td&gt;Gimnasia&lt;/td&gt;
			&lt;td rowspan=&quot;2&quot;&gt;Onanismo&lt;/td&gt;
			&lt;td&gt;Historia&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td&gt;Filosof&iacute;a&lt;/td&gt;
			&lt;td&gt;Carpinter&iacute;a&lt;/td&gt;
			&lt;td&gt;Bot&aacute;nica&lt;/td&gt;
			&lt;td&gt;Papirofl&eacute;xia&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr&gt;
			&lt;td colspan=&quot;5&quot;&gt;Recreo&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;	
</pre>
</div>


			</div>
		</article>


		<article>
			<header>
				<h3>2.13.7.- Anidar tablas</h3>
			</header>
			<div class="article-content">
				<p>Las tablas se pueden anidar unas dentro de otras. Pueden llegar a ser una auténtica pesadilla.</p>
				<p>Algún día subiré algún ejercicio resuelto cuya utilidad práctica es similar a la del anillo vaginal que utilizaba la duquesa de Alba con su última pareja.</p>
				<p>Si necesitáis hacer una tabla rápida para salir del paso, os recomiendo que utilicéis un generador online (de tablas). Pero como Ricky Guau os vea utilizarlos para hacer los ejercicios, os va a echar azúcar en el depósito de gasolina de vuestro aeropatín. Y luego os cagará en la bañera.</p>
			</div>
		</article>


	</section>


	<section class="tema2-14" id="t214">
		<header>
			<h2>2.14.- Formularios <code>&lt;form&gt;</code></h2>
		</header>

		<div class="section-content">
			<p>
				Preparaos un café bien cargado, que este tema es espesito, casi tanto como las tablas.
			</p>
			<p>
				Los formularios sirven para recibir información del usuario. Normalmente se usan como formularios de contacto, aunque también pueden ser buscadores, como la cajita de Google, e incluso pueden servir para hacer el mal...
			</p>

			<article id="t2141">
				<header>
					<h3>2.14.1.- Elementos de formularios</h3>
				</header>
				<div class="article-content">
					<p>Vamos a enumerar los elementos que puedene formar parte de un formulario:</p>
					<ul class="normal-list">
						<li><code>&lt;form></code>: Elemento de declaración de formulario</li>
						<li><code>&lt;input></code>: Elemento para recoger datos (existen múltiples tipos de "inputs")</li>
						<li><code>&lt;label></code>: Elemento de etiqueta para un input u otro elemento de formulario</li>
						<li><code>&lt;select></code>: Elemento para mostrar diferentes opciones seleccionables</li>
						<li><code>&lt;option></code>: Cada opción disponible en un select</li>
						<li><code>&lt;textarea></code>: Crea un campo de texto donde escribir dentro</li>
						<li><code>&lt;button></code>: Crea un botón</li>
						<li><code>&lt;fieldset></code>: Elemento para agrupar partes dentro de un formulario</li>
						<li><code>&lt;legend></code>: Legenda utilizada en los fieldsets</li>
					</ul>
				</div>
			</article>

			<article id="t21411">
				<header>
					<h3>2.14.1.1- Elemento <code>&lt;form></code></h3>
				</header>
				<div class="article-content">
					<p>
						El elemento <code>&lt;form></code> se utiliza para declarar un formulario.
					</p>
					<p>
						A parte de los atributos globales que queramos añadirle, la etiqueta <code>&lt;form></code> debe llevar dos atributos: <strong>action</strong> y <strong>method</strong>.
					</p>
					<p>
						El atributo <strong>action</strong> sirve para declarar que archivo va a procesar el tratamiento de datos recogidos en el formulario. Puede ser el mismo archivo donde se encuentra el formulario, es decir, la misma página; u otro archivo.
					</p>
					<p>
						El atributo <strong>method</strong> nos indica cómo se van a procesar estos datos. Los valores más comunes para method son: <strong>get</strong> y <strong>post</strong>.
					</p>
					<p>
						Las diferencias básicas entre post y get son estas:
					</p>
					<p><strong>GET:</strong></p>
					<ul class="normal-list">
						<li>- La información recogida se muestra en la barra del navegador (fijaos tras buscar algo en Google)</li>
						<li>- La longitud de esa información, ese chorrillo que aparece arriba, está limitado a cerca de 3000 caracteres</li>
						<li>- GET nunca debe usarse para manejar información sensible (contraseñas, etc etc), ya que serán visibles por pantalla y algún mirillas puede estar observándonos.</li>
					</ul>
					<p><strong>POST:</strong></p>
					<ul class="normal-list">
						<li>- La información se trata en los encabezados HTTP y no es visible para el/la/los/las/lis/lus usuarios</li>
						<li>- Se usan para tratar información sensible (contraseñas, números de tarjetas de crédito, el teléfono de Mari Pili)</li>
						<li>- No tienen ningún tipo de limitación de caracteres.</li>
					</ul>

					<p>Veamos un ejemplo:</p>
					<div class="ejemplo">
<pre>&lt;form action="funciones/procesar_formulario.php" method="post" >
	(aquí van los elementos del formulario)
&lt;/form></pre>						

					</div>
				</div>
			</article>




			<article id="t21412">
				<header>
					<h3>2.14.1.2- Los <code>&lt;input></code></h3>
				</header>
				<div class="article-content">
					<p>Ya están aquí. Los inputs.</p>
					<p>Los inputs son elementos donde el usuario puede introducir información.</p>



				</div>
			</article>

<!-- 			<article id="t214121">
				<header>
					<h3>2.14.1.2.1- <code>&lt;input type></code></h3>
				</header>
				<div class="article-content">

				</div>
			</article>
 -->



			<article id="t21413">
				<header>
					<h3>2.14.1.3- Elemento <code>&lt;label></code></h3>
				</header>
				<div class="article-content">

				</div>
			</article>

			<article id="t21414">
				<header>
					<h3>2.14.1.4- Elementos <code>&lt;select></code> y <code>&lt;option></code></h3>
				</header>
				<div class="article-content">

				</div>
			</article>

			<article id="t21415">
				<header>
					<h3>2.14.1.5- Elemento <code>&lt;textarea></code></h3>
				</header>
				<div class="article-content">

				</div>
			</article>

			<article id="t21416">
				<header>
					<h3>2.14.1.6- Elemento <code>&lt;button></code></h3>
				</header>
				<div class="article-content">

				</div>
			</article>

			<article id="t21417">
				<header>
					<h3>2.14.1.7- Elemento <code>&lt;fieldset></code></h3>
				</header>
				<div class="article-content">

				</div>
			</article>

			<article id="t21418">
				<header>
					<h3>2.14.1.8- Elemento <code>&lt;legend></code></h3>
				</header>
				<div class="article-content">

				</div>
			</article>

		</div>
	</section>	


	<section class="tema2-15" id="t215">
		<header>
			<h2>2.15.- La etiqueta <code>&lt;iframe&gt;</code></h2>
		</header>

		<div class="section-content">
			<p>
				La etiqueta <code>&lt;iframe&gt;</code> se utiliza para meter dentro de nuestro HTML otra página o documento HTML.
			</p>
			<p>
				Uno de los usos más comunes de la etiqueta <code>&lt;iframe&gt;</code> es el utilizado para meter o <span class="cursiva">embeber</span> vídeos de YouTube.
			</p>
			<p>
				Para eso, vamos a YouTube y ponemos un vídeo completamente al azar y clickamos sobre "Compartir", si nuestro navegador está en español, o "ulushi" si está en uzbeko.
			</p>
			<p class="centered-text">
				<img src="../pics/youtube1.jpg" alt="pinchar sobre 'compartir' para acceder al iframe">
			</p>
			<p>
				Entre todas las opciones que nos salen, escogemos mi favorita: "Insertar", y nos saldrá un batiburrillo de código debajo, que sorpresivamente comienza con la palabra <code>&lt;iframe&gt;</code>.
			</p>
			<p class="centered-text">
				<img src="../pics/youtube2.jpg" alt="pinchar sobre 'insertar' para ver el código del iframe">
			</p>
			<p>
				Copiamos ese código, que tendrá un aspecto como este:
			</p>
			<div class="ejemplo">
				<p><code>&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/5Wmo-MZP9bI&quot; frameborder=&quot;0&quot; allowfullscreen&gt;&lt;/iframe&gt;</code></p>
			</div>

			<p>
				Podemos ver que tiene atributos; algunos tan obvios para los angloparlantes como <code>width</code> o <code>height</code>, otros que ya habíamos visto en las imágenes como <code>src</code>; y otros nuevos como <code>frameborder</code> o <code>allowfullscreen</code>. Podéis cambiarlos a placer que no me romperéis el vídeo.
			</p>
		</div>

	</section>

	<section class="tema2-16" id="t216">
		<header>
			<h2>2.16.- Otras etiquetas</h2>
		</header>

		<div class="section-content">
			<p>
				Existen otras etiquetas en HTML, acabo de contarlas una a una (a veces me aburro), y con un error de más menos uno o dos, creo que son 125. Algunas ni las conocía, y otras dudo que tenga el placer o dolor de utilizarlas.
			</p>
			<p>
				Quizás, a lo largo que voy desarrollando este curso, vea necesario comentar alguna y tratarla por separado. Mientras tanto, sabed que para el 95% de las webs que he desarrollado o en las que he colaborado, no he utilizado más elementos de los que os he mostrado en el Tema 2. Desde luego, las <a href="#">otras etiquetas de texto</a> no las he utilizado a riesgo de que el Team Manager me diera una colleja, con toda la razón del mundo. ¿Por qué? Lo averiguaremos en el Tema 3: Las hojas de estilo.
			</p>
			<p class="centered-text">
				<img src="../pics/budspencer.jpg" alt="Utiliza las etiquetas lo justo, o Bud te dará una tollina">
			</p>
		</div>


	</section>



	<section class="tema2-17" id="t217">
		<header>
			<h2>2.17.- Etiquetas para audio y vídeo</h2>
		</header>

		<div class="section-content">
			<p>
				De momento vamos a dejar estas etiquetas para el final. La de vídeo la usé una vez, es muy chachi, pero es más práctico usar la etiqueta <code>&lt;iframe&gt;</code> y meter contenido de YouTube.
			</p>
			<p>
				Más adelante, cuando me tengáis más machacadas las otras etiquetas, retomaremos la de audio y vídeo.
			</p>
			<p>
				Como curiosidad, saber que esas etiquetas se definen con el críptico nombre de <code>&lt;audio&gt;</code> y <code>&lt;video&gt;</code>. Quién lo iba a decir...
			</p>
		</div>


	</section>





	<!-- SECCION FINAL -->
	<section class="material">
		<header>
			<h2>Material de apoyo</h2>
		</header>
		<p>
			Aun no funcionan los links. Poco a poco iré poniendo más y enlazándolos.
		</p>
		<article>
			<header>
				<h3>Enlaces de interés:</h3>
			</header>
			<p><a href="#">W3School</a></p>
			<p><a href="#">Zen Garden</a></p>
			<p><a href="#">Awwwards</a></p>
			<p><a href="#">Font-face generator</a></p>
		</article>
		<article>
			<header>
				<h3>Extensiones para navegadores:</h3>
			</header>
			<p><a href="#">Chrome: Colorzilla</a></p>
			<p><a href="#">Firefox: Web Developer Tools</a></p>
			<p><a href="#">Chrome: WhatFont</a></p>
		</article>
		<article>
			<header>
				<h3>Software:</h3>
			</header>
			<p><a href="#">Sublime Text</a></p>
			<p><a href="#">Gimp</a></p>
		</article>
	</section>




	
</div>

<div id="subir">
	<a href="#arriba"><span></span></a>
</div>



 <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../js/functions.js"></script>


</body>
</html>
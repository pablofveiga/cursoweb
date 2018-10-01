<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tema 1 - Introducción a la web</title>


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
<body id="tema1">


<div class="wrapper">
	<nav class="top-menu">
		<ul>
			<li><a href="../">Inicio</a></li>
			<li><a href="../tema1/">Tema 1</a></li>
			<li><a href="../tema2/">Tema 2</a></li>
			<li><a href="../tema3/">Tema 3</a></li>
			<li><a href="../contacto/">Contacto</a></li>
		</ul>
	</nav>
</div>


<?php include ("../partials/responsive-menu.php"); ?>

	<header class="main-header">
		<h1><span>Tema 1 - Introducción a la web</span></h1>
		<img src="../pics/hackerman.jpg" alt="Hackerman empezó en este curso, y luego hackeó el tiempo">
	</header>

<div class="wrapper">
	

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

</div>

 <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../js/functions.js"></script>

</body>
</html>
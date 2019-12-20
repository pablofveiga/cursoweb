<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">


        <!-- OG -->
    <meta property="og:title" content="Curso Web Peibol" />
    <meta property="og:description" content="Todo lo que necesitas saber para hacer una web" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.pablofv.com/cursoweb/" />
    <meta property="og:image" content="http://www.pablofv.com/cursoweb/pics/og-tema2.jpg" />
	<meta property="og:image:type" content="image/jpeg" /> 
	<meta property="og:image:width" content="200" /> 
	<meta property="og:image:height" content="200" />    
    <meta property="og:locale" content="es" />

	<title>Tema 3 - Las Hojas de Estilo en Cascada (CSS)</title>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../css/styles.css?v=1.1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="tema1-2">

	<?php include ("../partials/main_menu.php"); ?>


	<header class="main-header">
		<h1><span>CSS - Luz y Color</span></h1>
		<img src="../pics/hackerman.jpg" alt="Hackerman empezó en este curso, y luego hackeó el tiempo">
	</header>

<div class="wrapper">
	
<h2>Tema en construcción</h2>
<h3>Date un paséo y vuelve más tarde, a ver si va a estar hecho.</h3>


	<section>
		<header>
			<h2>Unidades de medida</h2>
		</header>
		<div class="content">
			<p>Hay unidades absolutas y relativas.</p>
			<p></p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<p>Unidades absolutas:</p>

			<ul>
				<li>px: Pixels</li>
				<li>in: Pulgadas (1in = 96px)</li>
				<li>pt: Puntos (1pt = 1/72 in)</li>
				<li>cm: Centímetros</li>
				<li>mm: Milímetros</li>
				<li>pc: Picas</li>
			</ul>

			<p>Unidades relativas</p>
			<ul>
				<li>%: porcentaje</li>
				<li>em: altura de la fuente (lerta M mayúscula)</li>
				<li>rem: Root-em</li>
				<li>vw: viewport width</li>
				<li>vh: viewport height</li>
				<li>vmin: viewport menor, entre altura o anchura</li>
				<li>vmax: viewport mayor, entre altura o anchura</li>
				<li>ex: anchura de la letra X mayúscula</li>
				<li>ch: anchura del caracter <code>0</code></li>
			</ul>

			<p>Otras unidades</p>
			<p>En otras propiedades podemos usar unidades como los grados de giro: <code>transform: rotate(45deg);</code>, los segundos o milisegundos de una animación o transición: <code>transition: all 0.5s ease;</code> o simplemente un número que nos indica el número de repeticiones: <code>animation-iteration-count: 8;</code></p>
		</div>

		<article>
			<header>
				<h3>Pixels <code>(px)</code></h3>
			</header>
			<div class="content">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</article>

		<article>
			<header>
				<h3>em</h3>
			</header>
			<div class="content">
				<p>
					Las unidades <strong>em</strong> fueron creadas con el fin de redimensionar <span class="cursiva">fácilmente</span> los textos, en especial para quien por aquel entonces era la Némesis de todo desarrollador web: Internet Explorer.
				</p>
			</div>
		</article>

		<article>
			<header>
				<h3>Técnicas avanzadas con <strong>em</strong></h3>
			</header>
			<div class="content">
				<p>A continuación voy a explicar una técnica muy profesional para trabajar con <strong>em</strong> en una base de 10px en lugar de 16, y olvidarnos de usar la calculadora.</p>
				<p>
					Para eso, vamos a definir la fuente del <code>body</code> con un porcentaje, que hará que <code>1em</code> sea igual a <code>10px</code>.
				</p>
				<div class="ejemplo">
<pre>
body { font-size:62.5%; }
h1 { font-size: 2.4em; } /* =24px */
p  { font-size: 1.4em; } /* =14px */
li { font-size: 1.4em; } /* =14px? */	
</pre>					


				</div>
			</div>
		</article>

		<article>
			<header>
				<h3>Porcentaje <code>(%)</code></h3>
			</header>
			<div class="content">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</article>


	</section>


	<section>
			<header>
				<h2>Otras unidades de medida</h2>
			</header>
			<article>
				<header>
					<h3><code>rem</code></h3>
				</header>
				<div class="content">
					<p>
						Las unidades <code>rem</code> son similares a las <code>em</code>, pero en lugar de ir tomando como referencia el valor del elemento padre, los valores <code>rem</code> son siempre relativos al elemento raíz <code>html</code>.
					</p>
					<p>
						Las unidades <code>rem</code> son soportadas por todos los navegadores modernos, excepto IE8 e inferiores.
					</p>
				</div>

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
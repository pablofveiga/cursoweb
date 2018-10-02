<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso Web Peibol</title>


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

	<link rel="stylesheet" type="text/css" href="css/styles.css?v=1.1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body id="home-page">

<div class="wrapper">
	<nav class="topMenu">
		<ul>
			<li class="topMenu__item"><a href="#">Inicio</a></li>
			<li class="topMenu__item"><a href="tema1/">HTML</a></li>
			<li class="topMenu__item"><a href="tema2/">CSS</a></li>
			<li class="topMenu__item"><a href="tema3/">JavaScript</a></li>
			<li>
				<a href="#">Otros</a>
				<ul class="topMenu__item__submenu">
					<li class="topMenu__item__submenu"><a href="#">Introducción a GIT</a></li>
					<li class="topMenu__item__submenu"><a href="#">Unidades de medida (CSS)</a></li>
				</ul>
			</li>
		</ul>
	</nav>
</div>

<?php include ("partials/responsive-menu.php"); ?>


<header class="main-header">
	<h1>Curso de páginas web para gente que no tiene ni pajolera idea</h1>
	<img src="pics/hackerman.jpg" alt="Hackerman empezó en este curso, y luego hackeó el tiempo">
</header>

<div class="wrapper">

	<section class="introduccion">
		<header>
			<h2>Introducción al curso</h2>
		</header>

		<div class="section-content">
			<p>
				Este curso está orientado para gente que jamás haya hecho nada relacionado con las páginas web.
			</p>
			<p>
				No son necesarios ningún conocimiento previo, salvo el manejo básico de un ordenador, un nivel medio-alto del uso del ratón, y un nivel B2 de teclado.
			</p>
			<p>
				Dedicándole no más de 5 minutos al día en menos de un mes seremos capaces de construir una bonita página web como la propia página del curso.
			</p>

			<div class="logos">
				<ul>
					<li><img src="pics/logohtml.png" alt="logo html"></li>
					<li><img src="pics/logocss.png" alt="logo css"></li>
					<li><img src="pics/logojs.png" alt="logo js"></li>
					<li><img src="pics/logomore.png" alt="logo more"></li>
				</ul>
			</div>
			
		</div>
	</section>

	<section class="contenidos">
		<header>
			<h2>Contenidos del curso</h2>
		</header>

		<div class="section-content">
			<p>Esta sección la iré cambiando estos días, pero a groso modo aprenderemos estas cosas:</p>

			<ul>
				<li>Estructura de una página web</li>
				<li>Elementos del HTML</li>
				<li>Hojas de estilo, o CSS</li>
				<li>Accesibilidad Web</li>
				<li>Semántica Web</li>
				<li>Usabilidad Web (o UX, que queda más cool)</li>
				<li>Un poquito de SEO (search engine optimization)</li>
				<li>Introducción a javaScript (para quien quiera, como extra)</li>
				<li>Introducción a los gestores de contenidos. Wordpress.</li>
				<li>Otras cosas que no tienen nada que ver, pero pueden resultar interesantes y/o entretenidas.</li>
			</ul>

			<p>
				No tengáis miedo. La accesibilidad, usabilidad, semántica y SEO lo aprenderéis sin daros cuenta. La mayoría de esas cosas son de sentido común, y en cuanto os muestre la teoría de esos puntos, os daréis cuenta de que ya lo estabais utilizando anteriormente (si me hacéis los ejercicios).
			</p>
		</div>
	</section>

	<section class="temario">
		<header>
			<h2>Temario</h2>
		</header>
		<div class="section-content">
			<p>
				Temario provisional del curso.
			</p>
			<p>
				Pincha sobre un tema o subtema en concreto para acceder directamente a la sección (aún no funciona).
			</p>
			<ol>
				<li><a href="tema1/">Tema 1 - Introducción a la web</a><span class="visits"></span>
					<ol>
						<li><a href="#">Mi primera web en un minuto</a><span class="visits"></span></li>
						<li><a href="#">Estructura de una página web</a><span class="visits"></span></li>
						<li><a href="#">El DOCTYPE</a><span class="visits"></span></li>
					</ol>
				</li>
				<li><a href="tema2/">Tema 2 - Etiquetas en HTML</a><span class="visits"></span>
					<ol>
						<li><a href="tema2/#t24">Etiquetas de texto</a><span class="visits"></span></li>
						<li><a href="tema2/#t25">Etiquetas de imagen</a><span class="visits"></span></li>
						<li><a href="tema2/#t26">Etiquetas de hypervínculo</a><span class="visits"></span></li>
						<li><a href="tema2/#t27">Etiquetas de listas</a><span class="visits"></span></li>
						<li><a href="tema2/#t28">Anidar etiquetas</a><span class="visits"></span></li>
						<li><a href="tema2/#t29">Elementos en bloque y en línea</a><span class="visits"></span></li>
						<li><a href="tema2/#t210">La etiquetas de contenedor</a><span class="visits"></span></li>
						<li><a href="tema2/#t211">Nuevas etiquetas semánticas en HTML5</a><span class="visits"></span></li>
						<li><a href="tema2/#t212">Atributos de las etiquetas</a><span class="visits"></span></li>
						<li><a href="tema2/#t213">Tablas</a><span class="visits"></span></li>
						<li><a href="tema2/#t214">Formularios</a><span class="visits"></span></li>
						<li><a href="tema2/#t215">La etiqueta iframe</a><span class="visits"></span></li>
						<li><a href="tema2/#t216">Otras etiquetas</a><span class="visits"></span></li>
						<li><a href="tema2/#t217">Etiquetas para audio y vídeo</a><span class="visits"></span></li>
					</ol>
				</li>
				<li>
					<a href="tema3/">Tema 3 - Un poco de color. Las hojas de estilo (CSS)</a><span class="visits"></span>
					<ol>
						<li><a href="tema3/">Qué es una hoja de estilo</a><span class="visits"></span></li>
						<li><a href="tema3/">Estilos para los textos.</a><span class="visits"></span></li>
						<li><a href="tema3/">Estilos para las listas.</a><span class="visits"></span></li>
						<li><a href="tema3/">Unidades de medida.</a><span class="visits"></span></li>
						<li><a href="tema3/">Colores.</a><span class="visits"></span></li>
						<li><a href="tema3/">Estilos para los contenedores.</a><span class="visits"></span></li>
						<li><a href="#">Estilos chiripitifláuticos.</a><span class="visits"></span></li>
					</ol>
				</li>
				<li>
					<a href="tema4/">Tema 4 - CSS Avanzado</a><span class="visits"></span>
					<ol>
						<li><a href="tema4/">Flexbox</a><span class="visits"></span></li>
						<li><a href="tema4/">Grid CSS</a><span class="visits"></span></li>
						<li><a href="tema4/">Post CSS</a><span class="visits"></span></li>
						<li><a href="tema4/">OO CSS, o cómo matar moscas a cañonazos (obsoleto)</a><span class="visits"></span></li>
						<li><a href="tema4/">Preprocesadores CSS</a><span class="visits"></span>
							<ol>
								<li><a href="tema4/">LESS</a><span class="visits"></span></li>
								<li><a href="tema4/">SASS</a><span class="visits"></span></li>
								<li><a href="tema4/">Otros</a><span class="visits"></span></li>
							</ol>
						</li>
						<li><a href="tema4/">Trucos rápidos</a><span class="visits"></span></li>
						<li><a href="tema4/">Efectos especiales y filtros "quasi" fotográficos</a><span class="visits"></span></li>
					</ol>
				</li>
				<li>
					<a href="tema5/">Tema 5 - Por el culo te la ahínco</a><span class="visits"></span>
				</li>
				<li>
					<a href="tema6/">Tema 6 - Introducción casi indolora a javaScript</a><span class="visits"></span>
					<ol>
						<li><a href="tema6/">JavaScript</a><span class="visits"></span></li>
						<li><a href="tema6/">jQuery</a><span class="visits"></span></li>
						<li><a href="tema6/">jQuery UI</a><span class="visits"></span></li>
						<li><a href="tema6/">Plugins jQuery y el placer de cortar y pegar</a><span class="visits"></span></li>
						<li><a href="tema6/">Frameworks javaScript; a volverse loco</a><span class="visits"></span></li>
						<li><a href="tema6/">ECS6, panorama y  tendencias del javaScript para corto y medio plazo</a><span class="visits"></span></li>
					</ol>
				</li>				
				<li>
					<a href="tema7/">Tema 7 - Diseño Web</a><span class="visits"></span>
					<ol>
						<li><a href="tema7/">Retrospectiva por los diseños web precedentes</a><span class="visits"></span></li>
						<li><a href="tema7/">Diseño Web actual: multidispositivo</a><span class="visits"></span></li>
						<li><a href="tema7/">Mockups, Wireframes y Prototipos. Qué son y para qué sirven</a><span class="visits"></span></li>
						<li><a href="tema7/">Recursos de diseño web</a><span class="visits"></span></li>
					</ol>
				</li>
				<li>
					<a href="tema8/">Tema 8 - Breve introducción a los Gestores de Contenido (CMS)</a><span class="visits"></span>
					<ol>
						<li><a href="tema8/">Wordpress</a><span class="visits"></span></li>
						<li><a href="tema8/">Prestashop</a><span class="visits"></span></li>
						<li><a href="tema8/">Otros CMS que lo están petando</a><span class="visits"></span></li>
					</ol>
				</li>
				<li>
					<a href="tema9/">Tema 9 - Miscelánea</a><span class="visits"></span>
					<ol>
						<li><a href="tema9/">Construye tu propio reloj de sol</a><span class="visits"></span></li>
						<li><a href="tema9/">Cómo prevenir un terremoto con la vegiga de una oveja</a><span class="visits"></span></li>
						<li><a href="tema9/">Diseña y construye tu propia almáciga</a><span class="visits"></span></li>
						<li><a href="tema9/">Efetos nocivos de la gravedad</a><span class="visits"></span></li>
						<li><a href="tema9/">Cómo formatear un disco duro a martillazos</a><span class="visits"></span></li>
						<li><a href="tema9/">Cómo escuchar riguitón sin echar la pota (nivel PRO)</a><span class="visits"></span></li>
					</ol>
				</li>
			</ol>
		</div>
	</section>


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



 <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/functions.js"></script>


</body>
</html>
<?php
	$ruta = "http://localhost/cursoweb/dist/";
	// $ruta = "http://cursoweb.pablofv.com/";
	//var_dump( $_SERVER['DOCUMENT_ROOT']);
	// $ruta = $_SERVER['DOCUMENT_ROOT'];
?>

<div class="wrapper">
	<nav class="topMenu">
		<ul>
			<li><a href="<?php echo $ruta; ?>">Inicio</a></li>
			<li><a href="<?php echo $ruta; ?>html/">HTML</a></li>
			<li><a href="<?php echo $ruta; ?>tema3/">CSS</a></li>
			<li><a href="<?php echo $ruta; ?>javascript/">JavaScript</a></li>
			<li><a href="<?php echo $ruta; ?>vue/">Vue js</a></li>
			<li><a href="<?php echo $ruta; ?>anotaciones/">Anotaciones</a></li>
		</ul>
	</nav>
</div>
<nav class="responsive-menu">
	<div class="menu-trigger">
	    <div class="rwd-icon">                    
	        <span class="menu-icon">                        
	            <i class="fa fa-bars" aria-hidden="true"></i>       
	        </span>
	        <span class="rwm-text">MENU</span>
	    </div>
	    <div class="menu-logo">
	        <span></span>
	    </div>
	</div>
	<ul class="rwd-menu-list">
	    <li class="primary home">
	        <a href="/">        
	            <i class="fa fa-university" aria-hidden="true"></i>
	            <span class="menu-text">Página principal</span>
	        </a>
	    </li>
	    <li class="primary">
	        <a href="/tema1/">        
	            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
	            <span class="menu-text">Tema 1 - Introducción a la Web</span>
	        </a>
	    </li>
	    <li class="primary">
	        <a href="/tema2/">        
	            <i class="fa fa-ticket" aria-hidden="true"></i>
	            <span class="menu-text">Tema 2 - Etiquetas en HTML</span>
	        </a>
	    </li>                   
	    <li class="primary">
	        <a href="/tema3/">        
	            <i class="fa fa-envira" aria-hidden="true"></i>
	            <span class="menu-text">Tema 3 - Hojas de Estilo CSS (próximamente)</span>
	        </a>
	    </li>      
	    <li class="primary">
	        <a href="/#/">        
	            <i class="fa fa-angellist" aria-hidden="true"></i>
	            <span class="menu-text">Tema 4 - CSS Avanzado (aún no está listo)</span>
	        </a>
	    </li>

<!-- 	    
		<li class="primary rwd-languages">
	        <a href="#">  
	            <i class="fa fa-globe" aria-hidden="true"></i>
	            <span class="menu-text">Change Language <i class="fa fa-caret-right" aria-hidden="true"></i></span>
	        </a>
	        <ul class="seccondary">
	            <li>
	                <a href="/change-language/japanese">
	                    <span class="menu-flag"><img src="https://verajohn-staging.drag2win.com/pics/japanese.png" width="20" alt="UK"></span>
	                    <span class="menu-text">japanese</span>
	                </a>
	            </li>
				<li>
	                <a href="/change-language/english">
	                    <span class="menu-flag"><img src="https://verajohn-staging.drag2win.com/pics/english.png" width="20" alt="UK"></span>
	                    <span class="menu-text">english</span>
	                </a>
				</li>
                <li>
	                <a href="/change-language/swedish">
	                    <span class="menu-flag"><img src="https://verajohn-staging.drag2win.com/pics/swedish.png" width="20" alt="UK"></span>
	                    <span class="menu-text">swedish</span>
	                </a>
	            </li>
                <li>
	                <a href="/change-language/spanish">
	                    <span class="menu-flag"><img src="https://verajohn-staging.drag2win.com/pics/spanish.png" width="20" alt="UK"></span>
	                    <span class="menu-text">spanish</span>
	                </a>
	            </li>
                <li>
	                <a href="/change-language/portuguese">
	                    <span class="menu-flag"><img src="https://verajohn-staging.drag2win.com/pics/portuguese.png" width="20" alt="UK"></span>
	                    <span class="menu-text">portuguese</span>
	                </a>
	            </li>
                <li>
	                <a href="/change-language/norwegian">
	                    <span class="menu-flag"><img src="https://verajohn-staging.drag2win.com/pics/norwegian.png" width="20" alt="UK"></span>
	                    <span class="menu-text">norwegian</span>
	                </a>
	            </li>
                <li>
	                <a href="/change-language/german">
	                    <span class="menu-flag"><img src="https://verajohn-staging.drag2win.com/pics/german.png" width="20" alt="UK"></span>
	                    <span class="menu-text">german</span>
	                </a>
	            </li>
                <li>
	                <a href="/change-language/finnish">
	                    <span class="menu-flag"><img src="https://verajohn-staging.drag2win.com/pics/finnish.png" width="20" alt="UK"></span>
	                    <span class="menu-text">finnish</span>
	                </a>
	            </li>
            </ul>                    
        </li>
        <li class="primary">
            <a href="#">              
                <span class="menu-icon back-icon"></span>
                <span class="menu-text">Back to Casino</span>
            </a>
        </li>
        <li class="primary">
            <a href="../terms-and-conditions">     
                <i class="fa fa-file" aria-hidden="true"></i>
                <span class="menu-text">T&amp;C</span>
            </a>
        </li> -->
    </ul>
</nav>
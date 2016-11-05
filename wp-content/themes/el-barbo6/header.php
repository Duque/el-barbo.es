<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset=	"<?php bloginfo( 'charset' ); ?>">
	<title> <?php wp_title(); ?> </title>

	<!-- Definir viewport para dispositivos web móviles -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- recaptcha para contact Form 7 --> 
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<?php wp_head(); ?>

	<!-- smartlook.com sirve para grabar comportamiento de los usuarios -->
	<script type="text/javascript">
    window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='//rec.smartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', 'd01698d15e0ea3c85ed48aaf5acf6216c09ecd86');
	</script>
	<!-- fin smartlook.com -->



</head>
<body>

	<!-- Analytics -->
	<?php include_once("includes/analyticstracking.php") ?>
	<!-- -->

	<header>
		<nav id="rd_main-menu" class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#rd_menu-principal-collapse" aria-expanded="false">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	      	</button>	

				</div>

				<div class="collapse navbar-collapse" id="rd_menu-principal-collapse">

					<form action="https://el-barbo.es/busqueda" id="cse-search-box" class="form-inline rd_form_buscar">
		        <div class="form-group">
		        	
		        	<div class="input-group">
					      <input type="hidden" name="cx" value="partner-pub-6047461292435716:7240198388" />
    						<input type="hidden" name="cof" value="FORID:10" />
    						<input type="hidden" name="ie" value="UTF-8" />
						    <input type="text" name="q" class="form-control" />
				      	
					    </div>
					    <button type="submit" name="sa" class="btn btn-default">Buscar</button>
	 	  		  </div>
	  		    
		    	</form>	


					<script type="text/javascript" src="https://www.google.es/coop/cse/brand?form=cse-search-box&amp;lang=es"></script>


					<!-- 	Menú controlado por wordpress 
								Se elimina porque no puedo insertar los microdatos de Google [Sitemscope itemtype="http://schema.org/ItemList"] dentro de la etiqueta <ul> del menú.

								Se crea debajo el menú a mano (copiado del generado por wordpress y agregada el parametro Sitemscope)
					-->
					<?php /*
						wp_nav_menu( array( 
							'items_wrap' => '',
							'theme_location' => 'principal',
							'menu_class' => 'nav navbar-nav',
							'container' => '',
							'container_class' => ''
						) ); 
					*/ ?>
					<ul id="menu-menu-principal" class="nav navbar-nav" itemscope itemtype="http://schema.org/ItemList">
						<li id="menu-item-7068" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-7068"><a href="http://el-barbo.es/">Inicio</a></li>
						<li id="menu-item-7072" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7072"><a href="https://el-barbo.es/relatos/">Relatos</a></li>
						<li id="menu-item-7071" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7071"><a href="https://el-barbo.es/escuela-pesca/">Escuela de pesca</a></li>
						<li id="menu-item-7070" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7070"><a href="http://el-barbo.es/videos-de-pesca/">Vídeos</a></li>
					</ul>

				</div>
			</div>

		</nav>

		<div class="container">
			<a href="<?php echo get_site_url(); ?>" title="Ir a la página de inicio">
				
				<h1 class="rd_logo">
					<?php bloginfo('name'); ?>
				</h1>
			</a>

			<div class="rd_cabecera">	
				<img src="<?php echo get_template_directory_uri() ?>/images/cabecera.jpg" alt="Imagen no disponible de la Cabecera del sitio web http://El-Barbo.es">
			</div>

			<?php dynamic_sidebar('header'); ?>
		</div>
	</header>

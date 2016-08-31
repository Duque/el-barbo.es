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

	<?php wp_head(); ?>

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

				<div class="collapse navbar-collapse" id="rd_menu-principal-collapse" Sitemscope itemtype="http://schema.org/ItemList">

					<form action="http://el-barbo.es/busqueda" id="cse-search-box" class="form-inline rd_form_buscar">
		        <div class="form-group">
		        	
		        	<div class="input-group">
					      <input type="hidden" name="cx" value="partner-pub-6047461292435716:3689787185" />
						    <input type="hidden" name="cof" value="FORID:10" />
						    <input type="hidden" name="ie" value="UTF-8" />
						    <input type="text" name="q" class="form-control" />
				      	
					    </div>
					    <button type="submit" name="sa" class="btn btn-default">Buscar</button>
	 	  		  </div>
	  		    
		    	</form>	


					<script type="text/javascript" src="http://www.google.es/coop/cse/brand?form=cse-search-box&amp;lang=es"></script>


					<?php 
						wp_nav_menu( array( 
							'theme_location' => 'principal',
							'menu_class' => 'nav navbar-nav',
							'container' => '',
							'container_class' => ''
						) ); 
					?>

					

				</div>
			</div>

		</nav>

		<div class="container">
			<a href="http://el-barbo.es" title="Ir a la página de inicio">
				
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

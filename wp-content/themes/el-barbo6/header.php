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
	<?php include_once("analyticstracking.php") ?>
	<!-- -->

	<header>
		<nav id="rd_main-menu" class="navbar navbar-default" role="navigation" itemscope itemtype="http://schema.org/ItemList">
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

					<form class="form-inline rd_form_buscar">
		        <div class="form-group">
		        	
		        	<div class="input-group">
					      <input type="search" size="15" class="form-control" placeholder="Buscar">
					      <div class="input-group-addon">
					      	<a href="#">Buscar</a>
					      </div>
					    </div>
	 	  		  </div>
	  		    
		    	</form>	

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
			<a href="http://localhost/el-barbo.es" title="Ir a la página de inicio">
				
				<h1 class="rd_logo">
					Pesca a mosca, El-Barbo.es
				</h1>
			</a>

		<div class="rd_cabecera">	
			<img src="http://el-barbo.es/wp-content/uploads/2016/08/2016-agosto.jpg" alt="Imagen no disponible de la Cabecera del sitio web http://El-Barbo.es" width="100%">

			
		</div>

	</header>

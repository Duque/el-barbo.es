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
	<header>
		<nav class="navbar navbar-default">
			<?php 
				wp_nav_menu( array( 
					'theme_location' => 'principal',
					'menu_class' => 'nav navbar-nav',
					'container' => 'div',
					'container_class' => 'container'
				) ); 
			?>
		</nav>

		<div class="container">
			<a href="http://localhost/el-barbo.es" title="Ir a la página de inicio">
				
				<!-- La siguiente capa tiene id=logo por semántica, no contiene funcionalidad javaScript o propiedades CSS-->

				<h1 id=”logo” class="rd_logo">
					Pesca a mosca, El-Barbo.es
				</h1>
			</a>

		<div class="rd_cabecera">	
			<img src="http://el-barbo.es/wp-content/uploads/2016/08/2016-agosto.jpg" alt="Imagen no disponible de la Cabecera del sitio web http://El-Barbo.es" width="100%">

			
		</div>

	</header>

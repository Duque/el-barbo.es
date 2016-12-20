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

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '1013844975360537');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=1013844975360537&ev=PageView&noscript=1"
	/></noscript>
	<!-- DO NOT MODIFY -->
	<!-- End Facebook Pixel Code -->

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

				<div class="row">
					<div class="col-xs-12">
						<form action="https://el-barbo.es/busqueda" id="cse-search-box" class="form-inline rd_form_buscar">
			        <div class="form-group">
			        	<button type="submit" name="sa" class="btn btn-default rd_boton-buscar">Buscar</button>
			        	<div class="input-group col-xs-9 col-sm-8">
						      <input type="hidden" name="cx" value="partner-pub-6047461292435716:7240198388" />
	    						<input type="hidden" name="cof" value="FORID:10" />
	    						<input type="hidden" name="ie" value="UTF-8" />
							    <input type="text" name="q" class="form-control rd_campo-buscar" />
					      	
						    </div>
						    
		 	  		  </div>
		  		    
			    	</form>	
		    	</div>
		    </div>

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
						<!--<li id="menu-item-7795" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7795"><a href="https://el-barbo.es/buscamos-redactores-colaboradores/">Buscamos redactores y colaboradores</a></li>-->
						<!--<li id="menu-item-7761" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7761"><a href="https://el-barbo.es/entradas-patrocinadas/">Análisis Patrocinado</a></li>-->
						<!--<li id="menu-item-7762" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7762"><a href="https://el-barbo.es/ejemplo-mencion-facebook/">Menciones en Facebook</a></li>-->
						<li id="menu-item-7763" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7763"><a href="https://el-barbo.es/publicitate-en-el-barbo-es/">Anunciarse en el-barbo.es</a></li>
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



			<?php include "includes/cabecera.php" ?>

			
		</div>
	</header>

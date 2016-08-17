<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>
  <section class="container">

  		<div class="row">	
  	  	<article class="col-xs-12 col-sm-8">
      		<div class="panel panel-default">
            
            <div class="panel-body">
            	<h1>
                  <?php the_title() ?>
              </h1>

              <?php the_content() ?>
            </div>
            <!--Footer-->
            <div class="panel-footer">
              
            </div>
            
          </div>

			<?php endif; ?>
     	</article>
     	<aside class="col-xs-12 col-sm-4">
      		<?php  get_sidebar()?>
      	</aside>
		  </div>    

</section>

<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
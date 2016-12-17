<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>
  <div class="container">

  		<div class="row">	
  	  	<article class="col-xs-12">
      		<div class="panel panel-default">
            
            <div class="panel-body">
              <div class="page-header">
            	  <h1>
                  <?php the_title() ?>
                </h1>
              </div>

              <?php the_content() ?>
            </div>
            <!--Footer-->
            <div class="panel-footer">
              
            </div>
            
          </div>

			<?php endif; ?>
     	</article>

		</div>    

</div>

<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
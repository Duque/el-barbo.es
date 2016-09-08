<?php
/**
 * Plantilla para mostrar página 404 (Error 404, no encontrado)
 *
 * @package El-Barbo.es
 * @subpackage ElBarbo6
 * @since 2008
 */

get_header(); 
/*Template Name: 404 */

?>

<?php get_header(); ?>
	
	

  	<section class="container">

  		<?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
  	  <div class="row">	

  	  	<article class="col-sm-8">

      		<div class="panel panel-default">
            
            <div class="panel-body" itemprop="articleBody">
            	<h1 class="page-title">
            		No encontramos la página que buscas
            		<small>Prueba a usar nuestro buscador en la parte superior</small>
            	</h1>
            </div>

            <div class="panel-footer">
              
            </div>
            
          </div>

          
 		   	<?php endwhile; ?>

        <?php include 'includes/entradas-relacionadas.php'; ?>
      

			<?php endif; ?>
     	</article>
       	<aside class="col-sm-4">
        		<?php  get_sidebar()?>
      	</aside>
		  </div>    

</section>



  

<?php get_footer(); ?>





























	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentysixteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->

		<?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php
/*Template Name: Single */
?>

<?php get_header(); ?>
	
	

  	<section class="container">

  		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
  	  <div class="row">	
  	  	<article class="col-xs-8">
      		<div class="panel panel-default">
            
            <div class="panel-body">
            	<h1>
                <a href="<?php the_permalink(); ?>" title="Enlace permanente a <?php the_title_attribute(); ?>">
                  <?php the_title() ?>
                </a>
              </h1>

              <?php the_content() ?>
            </div>
            
          </div>

          <p><small> Autor: <?php the_author_posts_link() ?>  el <?php the_time('j/m/Y') ?>. Categoría: <?php the_category(', '); ?> </small><br>
            </p>

  		   	<?php endwhile; ?>

					<div class="comentarios">
						<?php 
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif; ?>
					</div>


					<?php endif; ?>
      	</article>
      	<aside class="col-xs-4">
      		<?php  get_sidebar()?>
      	</aside>
		  </div>    

</section>



  

<?php get_footer(); ?>

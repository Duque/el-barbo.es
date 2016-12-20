<?php
/*Template Name: Single */
?>

<?php get_header(); ?>
	
	

  	<section class="container">

  		<?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
  	  <div class="row">	
        
        <!-- marcado de datos - Artículo -->
  	  	<article class="col-sm-8" itemscope itemtype="http://schema.org/Article">

          <!-- Cuerpo del artículo incluído título -->
      		<div class="panel panel-default">
            
            <!-- marcado de datos - Artículo Body -->
            <div class="panel-body entrada" itemprop="articleBody">

              <div class="page-header">
                <!-- marcado de datos - Name -->
              	<h1 itemprop="name">
                  <?php the_title() ?>
                </h1>
              </div>

              <?php dynamic_sidebar('post-title'); ?>
              <?php the_content() ?>

              <?php dynamic_sidebar('post-footer'); ?>
            </div>

            <div class="panel-footer">
              <small> Autor: 
                <!-- marcado de datos - Autor -->
                <span itemprop="author" itemscope itemtype="http://schema.org/Person">
                  <span itemprop="name">
                    <?php the_author_posts_link() ?>
                  </span>
                </span> el 
                <!-- marcado de datos - Fecha -->
                <span itemprop="datePublished" content="2016-08-12"><?php the_time('j/m/Y') ?></span> en categorías: <?php the_category(', '); ?> 
              </small>  

              <?php include 'includes/etiquetas.php'; ?>
            </div>
            
          </div>

          
 		   	<?php endwhile; ?>

        <?php include 'includes/entradas-relacionadas.php'; ?>
        
        

				<div class="rd_comentarios">
					<?php 
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif; ?>
				</div>


			<?php endif; ?>
     	</article>
       	<aside class="col-sm-4">
        		<?php  get_sidebar()?>
      	</aside>
		  </div>    

</section>

<?php get_footer(); ?>

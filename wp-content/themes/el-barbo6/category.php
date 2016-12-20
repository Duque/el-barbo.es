<?php get_header(); ?>

<div class="container">
	
  <div class="row">	
    <section class="col-xs-12 col-sm-8">

    <div class="panel panel-default rd_titular-seccion">
      <div class="panel-heading">
        <h1><small>Artículos de pesca en la categoría</small><br> <?php single_cat_title(); ?></h1>
      </div>
    </div>

      <!-- Listado de posts -->
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post();  ?>
          
          <article>
            <div class="panel panel-default">          
              
              <div class="panel-body">
                <div class="page-header">
                  <h1>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title() ?>">
                    <?php the_title() ?>
                    </a>
                  </h1>
                </div>
                <?php the_content() ?>
              </div>
            </div>
          </article>

        <?php endwhile; ?>

          <!-- Paginación -->
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li>
                <span aria-hidden="true">
                  <?php next_posts_link('« Ver anteriores'); ?>
                </span>
              </li>
              <li>
                <span aria-hidden="true">
                  <?php previous_posts_link('Ver posteriores'); ?> >>
                </span>
              </li>
            </ul>

            <?php paginate_links() ?>

            
        <?php else: ?>
          <p>Vaya, no hay entradas.</p>
        <?php endif; ?>


    </section>
    <aside class="col-xs-12 col-sm-4">
      <!-- Archivo de barra lateral por defecto -->
      <?php get_sidebar(); ?>
    </aside>
  </div>
 

</div>


<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
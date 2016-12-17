<?php get_header(); ?>

<div class="container">
  <div class="row">
    <section class="col-xs-12 col-sm-8">
      
      <!-- Listado de posts -->
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post();  ?>
          
          <article  itemscope itemtype="http://schema.org/Article">
            <div class="panel panel-default">          
              <div class="panel-body"  itemprop="articleBody">
                <h1>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title() ?>" itemprop="name">
                    <?php the_title() ?>
                  </a>
                </h1>
                <?php the_content() ?>
              </div>
              <div class="panel-footer">
                <small> Autor: 
                  <span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php the_author_posts_link() ?> </span></span> el <span itemprop="datePublished" content="2016-08-12"><?php the_time('j/m/Y') ?></span> en categorías: <?php the_category(', '); ?> </small>  

                  <?php include 'includes/etiquetas.php'; ?>
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
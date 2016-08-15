<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <section class="col-xs-12 col-sm-8">
      
       <!-- Listado de posts -->
        <?php
          //THE LOOP con WP-Query
          $args = array('cat' => 2);
          $category_posts = new WP_Query($args);
         
          if($category_posts->have_posts()) :
            while($category_posts->have_posts()) :
              $category_posts->the_post();
            ?>
            
            <article class="panel panel-default">          
              <div class="panel-body">
                <h1>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title() ?>">
                    <?php the_title() ?>
                  </a>
                </h1>
                <?php the_content() ?>
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
                    <?php previous_posts_link('Ver posteriores »'); ?>
                  </span>
                </li>
              </ul>

              
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
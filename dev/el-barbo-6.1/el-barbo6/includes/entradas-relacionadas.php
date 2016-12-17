<!-- Entradas relacionadas -->
        <h3>Entradas relacionadas con <?php the_category(', '); ?></h3>
        <div class="row">
        
          <?php
          $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'order'=>'DESC', 'numberposts' => 7, 'post__not_in' => array($post->ID) ) );
           
            if( $related ) foreach( $related as $post ) {
            setup_postdata($post); ?>
             
              <div class="col-xs-6 col-md-4 rd_entrada-relacionada">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <a  href="<?php the_permalink(); ?> " rel="bookmark" title="<?php the_title(); ?>">

                      <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                            }else{
                      ?>

                      <img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" />
                      <?php } ?>
                      

                    </a>         
                  </div>
                  <div class="panel-footer">
                    <p><a  href="<?php the_permalink(); ?> " rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></p></a>
                  </div>
                </div>
                
              </div>
                    
            <?php } wp_reset_postdata();  ?>

        </div>
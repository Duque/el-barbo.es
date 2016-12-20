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

  	<section class="container">


  	  <div class="row">	

  	  	<article class="col-sm-8">

      		<div class="panel panel-default">
            
            <div class="panel-body" itemprop="articleBody">
            	<h1 class="page-title" style="margin-bottom:1em">
            		No encontramos la página que buscas<br>
            		<small>Prueba a usar nuestro buscador</small>
            	</h1>
            	
            	<form action="https://el-barbo.es/busqueda" id="cse-search-box" class="form-inline rd_form_buscar pull-left">
				        <div class="form-group" style="margin-bottom:1em">
				        	
				        	<div class="input-group">
							      <input type="hidden" name="cx" value="partner-pub-6047461292435716:7240198388" />
		    						<input type="hidden" name="cof" value="FORID:10" />
		    						<input type="hidden" name="ie" value="UTF-8" />
								    <input type="text" name="q" class="form-control" placeholder="pescar barbos con mal tiempo" />
						      	
							    </div>
							    <button type="submit" name="sa" class="btn btn-default">Buscar</button>
			 	  		  </div>
			  		    
				    	</form>
				    	
            </div>

            <div class="panel-footer">
              <h2><small>Puede que te interese alguno de nuestros</small><br>
              Artículos más populares</h2>

              <div class="row">
        
        	<!-- Entradas populares, en realidad son wntradas relacionadas -->
          <?php
          $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'orderby'=>'rand', 'numberposts' => 10, 'post__not_in' => array($post->ID) ) );
           
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

        </div>
          
      </div>

	    
	    <h3>Último vídeo</h3>
	    <div class="embed-responsive embed-responsive-16by9">
	      <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLfbQDy13Rh-fp14-Xti-CS8mztQ6B9Bnw" frameborder="0" allowfullscreen></iframe>
	    </div>
	    &nbsp;
 		   	

        
      

			
     	</article>
       	<aside class="col-sm-4">
        		<?php  get_sidebar()?>
      	</aside>
		  </div>    

</section>



  

<?php get_footer(); ?>
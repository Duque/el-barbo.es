<nav itemscope itemtype="http://schema.org/ItemList">
		<?php 
			wp_nav_menu( array( 
				'theme_location' => 'aside',
				'menu_class' => 'list-group',
			) ); 
		?>


<?php dynamic_sidebar('sidebar'); ?>

<ul class="list-inline text-center">
  <li>
	  <a href="https://www.facebook.com/elbarbo.es/" target="_blank" title="Síguenos en Facebook">
	  	<span class="social social-facebook" aria-hidden="true"></span>
	  </a>
  </li>
  <li>
  	<a href="https://twitter.com/ElBarbo" target="_blank" title="Síguenos en Twitter">
  		<span class="social social-twitter" aria-hidden="true"></span>
  	</a>
  </li>
  <li>
  	<a href="https://www.facebook.com/elbarbo.es/" target="_blank" title="Síguenos en Youtube">
  		<span class="social social-youtube" aria-hidden="true"></span>
  	</a>
  </li>
</ul>

</nav>
  <nav>
		<?php 
			wp_nav_menu( array( 
				'theme_location' => 'aside',
				'menu_class' => 'list-group',
			) ); 
		?>
	</nav>


<?php dynamic_sidebar('sidebar'); ?>

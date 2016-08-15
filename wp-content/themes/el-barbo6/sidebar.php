  <nav>
		<?php 
			wp_nav_menu( array( 
				'theme_location' => 'aside',
				'menu_class' => 'list-group',
			) ); 
		?>
	</nav>


<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Sidebar') ) : ?>
<?php endif; ?>

<nav itemscope itemtype="http://schema.org/ItemList">
		<?php 
			wp_nav_menu( array( 
				'theme_location' => 'aside',
				'menu_class' => 'list-group',
			) ); 
		?>

<?php dynamic_sidebar('sidebar'); ?>


</nav>

<div class="textwidget">
  <!-- Linkspanel.com, rentabilizar blog -->
  <?php include 'includes/linkspanel.php'; ?>  
</div>
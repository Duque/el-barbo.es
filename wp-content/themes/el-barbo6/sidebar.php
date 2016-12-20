<nav itemscope itemtype="http://schema.org/ItemList">
		<?php 
			wp_nav_menu( array( 
				'theme_location' => 'aside',
				'menu_class' => 'list-group',
			) ); 
		?>

<a href="https://el-barbo.es/publicitate-en-el-barbo-es/" title="Anúnciate con nosotros">
<img src="https://el-barbo.es/wp-content/uploads/2016/12/aside3.jpg" alt="Imagen no disponible de la campaña Anúnciate con nosotros" width="100%" style="margin-bottom: 1em">
</a>

<?php dynamic_sidebar('sidebar'); ?>


</nav>

<div class="textwidget">
  <!-- Linkspanel.com, rentabilizar blog -->
  <?php include 'includes/linkspanel.php'; ?>  
</div>
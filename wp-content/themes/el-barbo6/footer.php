<footer>
	<div class="container">
		<nav id="rd_secondary-menu" class="navbar navbar-default" itemscope itemtype="http://schema.org/ItemList">
			<?php 
				wp_nav_menu( array( 
					'theme_location' => 'inferior',
					'menu_class' => 'nav navbar-nav',
					'container' => 'div',
					'container_class' => 'container'
				) ); 
			?>
		</nav>
		<br>
			
			<p class="text-center"><br><br><small><?php bloginfo('name'); ?> © <?php echo date("Y") ?></small></p>
	</div>

</footer>


<?php wp_footer(); ?>

	<!-- Includes de terceros -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <?php include 'includes/facebookSDK.php' ?>
</body>
</html>

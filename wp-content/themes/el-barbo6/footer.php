<footer>
	<div class="container">
		<nav class="navbar navbar-default">
			<?php 
				wp_nav_menu( array( 
					'theme_location' => 'inferior',
					'menu_class' => 'nav navbar-nav',
					'container' => 'div',
					'container_class' => 'container'
				) ); 
			?>
		</nav>

			<p class="text-center"><br><br><small>El-Barbo.es © <?php echo date("Y") ?></small></p>
	</div>

</footer>


<?php wp_footer(); ?>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

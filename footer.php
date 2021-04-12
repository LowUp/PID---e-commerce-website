<!------------------------------------------------------------------------------------------- Footer ------------------------------------------------------------------------------>

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footerCol01">
				<h3>Menu</h3>
					<?php 
		wp_nav_menu(
				array(
						'theme_location' => 'top-menu',					
						'container' => 'ul',
						'row' => 'ul',
						'menu_class' => 'footerCol01',

					)
		
		);?>
				
				</div>
				<div class="footerCol02">		<!------ Set up the image------>
				<img src="<?php bloginfo('template_directory');?>\Logo\Sans titre.png" width="230px" height="230px">
				</div>
			</div>
			<hr>
			<p class="copyright">Copyright 2021 - NextHighTech.net</p>
		</div>
	</div>


<!------------------------------------------------------------------------------------------- /Footer ------------------------------------------------------------------------------>


</body>
</html>
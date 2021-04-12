<?php
/* Template Name: About_Products */
get_header();
?>
<?php $hero = get_field('ab');?>


	<div class="about-body">
		<div class="inner-container">
		 <h1>Products</h1>
		 <p class="text"> 
		 All the products presented on this website are products available on Amazon.com. A wide variety of products can be found on this website however, all the products are sports/fitness related. If you have any problem with a product that you order through this website, contact Amazon customer service.
		 </p>
		 <br>
		 <p class="text">Read more about:</p>
			<div class="skills">
			
				<?php if($hero['website_link']):?>
				<a href="<?php echo $hero['website_link'];?>">Website</a>
				<?php endif;?>
				
				<?php if($hero['products_link']):?>
				<a href="<?php echo $hero['products_link'];?>">Products</a>
				<?php endif;?>
				
				<?php if($hero['audience_link']):?>
				<a href="<?php echo $hero['audience_link'];?>">Audience</a>
				<?php endif;?>
			
			</div>
		</div>
	 </div>
	





<?php get_footer();?>
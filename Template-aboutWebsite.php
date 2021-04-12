<?php
/* Template Name: About_Website */
get_header();
?>
<?php $hero = get_field('ab');?>


<div class="about-body">
		<div class="inner-container">
		 <h1>Website</h1>
		 <p class="text"> 
		 This is an e-commerce website affiliated to the company Amazon. The website gathered all the best products related to sports/fitness.
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
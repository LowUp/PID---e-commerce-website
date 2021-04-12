<?php
/* Template Name: About_Audience */
get_header();
?>
<?php $hero = get_field('ab');?>

<div class="about-body">
		<div class="inner-container">
		 <h1>Audience</h1>
		 <p class="text"> 
		 The products available on this platform are not directed to a specific audience, everybody in general can find what they are interested to and enjoy it &#128516;
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
<!------------------------------------------------------------------------------------------- Body ------------------------------------------------------------------------------>
<!------ Connect it to the header file------>
<?php get_header();?>




<!------ set up link ------>
<?php $hero = get_field('hero');?>
<div class="header">
   
	<div class="container">
	<div class="row">
		<div class="colNo1">
		<h1>Shape it!</h1>
		<p>A wide variety of fitness products</p>
		
		<?php if($hero['link']):?>
		<a href="<?php echo $hero['link'];?>" class="btn">Shop now &#10141</a>		
		</div>
		<?php endif;?>
		
		<div class="colNo1">
		 <img src="<?php bloginfo('template_directory');?>\images\Image1.png">
		</div>
	  </div>
	</div>	
  </div>
  	
	<div class="body1">
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	
	
	</div>
	<!------ Connect it to the footer file------>
<?php get_footer();?>
<!------------------------------------------------------------------------------------------- /Body ------------------------------------------------------------------------------>

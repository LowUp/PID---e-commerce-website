<?php
/*
Template Name: Page d'archives
*/
?>
<?php get_header(); ?>

<!--<h2><a href="<?php /*the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() */?> par catégories</a></h2>-->



<div class="small-container">

<!-- Displays the category name -->
            <?php

                $cats = get_categories();
                foreach ($cats as $cat) {

                query_posts('showposts=10&cat='.$cat->cat_ID);

            ?>
                <h2><?php echo $cat->cat_name; ?></h2>

<div class="row row2">

	<!---------------------------------------->
	<!---- Loop to displays products post ---->
	<!---------------------------------------->
	<?php while (have_posts()) : the_post(); ?>
	<div class="colNo4">
		
		
		<!-- displays both paragraph and html content-->
		<figure class="snip1584"><img <?php the_content();?> >
		<figcaption> 
	
		 <h3>Learn more</h3>
		 			
		 </figcaption><a href="<?php echo get_the_excerpt();?>"></a>
		</figure>
		
		<!-- displays both paragraph and html content-->		
		<?php /*if ($post->post_excerpt){?>
		<h4><?php echo get_the_excerpt();?></h4>
		<a href="<?php the_permalink(); ?>"> Read more&raquo;</a>
		<?php } else{	
		the_content();
		}*/?>

		<!-- displays the title and permalink-->
		<a href="<?php// the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a>
	
		
	</div>
	<?php endwhile;  ?>

	
	</div>
	






				<!--
                <ul>
                        <?/*php while (have_posts()) : the_post(); */?>
                        <li style="font-weight:normal !important;"><a href="<?php /*the_permalink() ?>"><?php the_title(); */?></a> <!--- Commentaires (<?php /*echo $post->comment_count */?>)</li>
                        <?/*php endwhile;  */?>
					
                </ul>
					-->
        <?php } ?>
</div>

<?php get_footer(); ?>
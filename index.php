<?php get_header();
include('cabezal.php'); include('index_post.php'); include('menu.php'); ?>
		<section class="notas">
			<ul class="ulnot">
<?php 
// The Query
$ID=get_cat_ID('destaque');
query_posts( array('posts_per_page'=>4,'category__not_in'=>$ID) ); 
// The Loop
while (have_posts()) : the_post();?>
			    <li class="linot">
			    	<article class="art">
			    		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php if (has_post_thumbnail()) {the_post_thumbnail_url('medium');} ?>" alt="<?php the_title(); ?>"></a>
		    			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		    			<p><?php the_excerpt_max(170); ?></p>
		    			<p>texto sin definir</p>
		    		</article>
		    	</li>
<?php endwhile;
// Reset Query
wp_reset_query(); ?>
			</ul>
		</section>
<?php
	include('widget.php');
	get_footer();
?>
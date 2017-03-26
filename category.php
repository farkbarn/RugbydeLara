<?php get_header();
include('cabezal.php'); include('menu.php'); ?>
		<section class="cat">
			<ul class="ulnot">
			<?php 
			// the query
			query_posts('posts_per_page=9');
			// The Loop
			while (have_posts()) : the_post();?>
				<li class="linotcat">
					<article class="art">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php if (has_post_thumbnail()) {the_post_thumbnail_url('medium');} ?>" alt="<?php the_title(); ?>"></a>
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<p><?php the_excerpt_max(100); ?></p>
					</article>
				</li>
			<?php endwhile;
			// Reset Query
			wp_reset_query(); ?>
			</ul>
		</section>
		<section class="navpag">
			<?php if(function_exists('wp_pagenavi')){wp_pagenavi();} ?>
		 	<!-- < [ 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 ] >  -->
		</section>
		<section class="line"></section>
<?php
include('widget.php');
get_footer(); ?>
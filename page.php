<?php get_header(); ?>
<?php include('cabezal.php'); include('menu.php'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="pag" id="pag">
				    <header><h2><?php the_title(); ?></h2></header>
					<?php the_content(); endwhile; endif;?>
				</article>
<?php get_footer();?>
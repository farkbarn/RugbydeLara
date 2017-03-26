<?php get_header();
include('cabezal.php'); include('menu.php');
		if (have_posts()) :
			while (have_posts()) :
				the_post();
			$IDpost=get_the_id();?>
		<section class="nota">
			<article>
				<img class="imgnot" src="<?php if (has_post_thumbnail()) {the_post_thumbnail_url('large');} ?>" alt="<?php the_title(); ?>">
				<h3><a class="titnot" href="<?php get_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></h3></a>
		<?php
				the_content();?>
				<section class="author">
					<?php the_author();echo " / ";the_time('d-m-Y');?>
				</section>
				<?php
			endwhile;
		endif;
		wp_reset_query();?>
			</article>
		</section>
<?php
include('widget.php');
echo '<section class="line"></section>';
get_footer(); ?>
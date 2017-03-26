		<?php
			if (is_home()) {
				echo '<section class="widget">';
				dynamic_sidebar('Principal');dynamic_sidebar('Principal Videos');}
			if (is_category()) {
				echo '<section class="widgetcat">';
				dynamic_sidebar('Widget Categoria');
			}
			if (is_single()) {
				echo '<section class="widget">';
				// the query
				query_posts(array('posts_per_page'=>1,'post__not_in'=>array($IDpost)));
				// The Loop
				while (have_posts()) : the_post();?>
				<article class="notwid">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php if (has_post_thumbnail()) {the_post_thumbnail_url('medium');} ?>" alt="<?php the_title(); ?>"></a>
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<p><?php the_excerpt_max(170); ?></p>
				</article>
				<?php endwhile; wp_reset_query();
				dynamic_sidebar('Principal');
			}
		?>
		</section>
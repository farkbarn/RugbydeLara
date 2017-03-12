<?php 
// The Query
query_posts( array('posts_per_page'=>1,'category_name'=>'destaque') ); 
// The Loop
while (have_posts()) : the_post();?>
		<article class="destacada">
		<style type="text/css" media="screen">.destacada{background-image: url("<?php if (has_post_thumbnail()){the_post_thumbnail_url('destaque');} ?>");}</style>
 				<span class="text">
					<span class="tit" title=""><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></span><br><br>
					<span class="cont" title=""><?php the_excerpt_max(50); ?></span>
				</span>
		</article>
<?php endwhile;
// Reset Query
wp_reset_query(); ?>
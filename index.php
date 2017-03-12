<?php get_header(); ?>
<?php include('cabezal.php'); include('index_post.php'); include('menu.php'); ?>
		<section class="notas">
			<ul class="ulnot">
<?php 
// The Query
//query_posts(array('posts_per_page'=>$_SESSION['tnot'],'post__not_in'=>$_SESSION['arridpost'],'category__not_in' => $_SESSION[''));
$ID=get_cat_ID('destaque');
query_posts( array('posts_per_page'=>3,'category__not_in'=>$ID) ); 
// The Loop
while (have_posts()) : the_post();?>
			    <li class="linot">
			    	<article class="art">
			    		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php if (has_post_thumbnail()) {the_post_thumbnail_url('medium');} ?>" alt="<?php the_title(); ?>"></a>
		    			<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
		    			<p><?php the_excerpt_max(200); ?></p>
		    			<p>texto sin definir</p>
		    		</article>
		    	</li>
<?php endwhile;
// Reset Query
wp_reset_query(); ?>

			</ul>
		</section>

		<section class="widget">
			<ul class="ultrio">
			    <li class="litrio">
			    	<article class="art">
			    		<img src="http://ximg.es/175x135/000/fff.jpg" alt="">
		    			<h1>Titulo de nota</h1>
		    			<p>Contenido aquí, contenido aquí".</p>
		    		</article>
		    	</li>

			    <li class="litrio">
			    	<article class="art">
			    		<img src="http://ximg.es/175x135/000/fff.jpg" alt="">
		    			<h1>Titulo de nota</h1>
		    			<p>Contenido aquí, contenido aquí".</p>
		    		</article>
		    	</li>

			    <li class="litrio">
			    	<article class="art">
			    		<img src="http://ximg.es/175x135/000/fff.jpg" alt="">
		    			<h1>Titulo de nota</h1>
		    			<p>Contenido aquí, contenido aquí".</p>
		    		</article>
		    	</li>
			</ul>

			<ul class="uldupla">
				<li class="livid"></li>
				<li class="livid"></li>
			</ul>
		</section>

<?php get_footer();?>
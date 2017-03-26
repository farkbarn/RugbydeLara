		<nav class="menumain menu navbar ">
			<ul class="nav navbar-nav navbar-center">
				<li><a href="<?php echo get_site_url(); ?>" title="<?php echo get_bloginfo( 'name' ); ?>">inicio</a></li>
				<li><a href="<?php caturl(get_cat_ID('noticias')); ?>"	title="Noticias">noticias</a></li>
				<li><a href="<?php caturl(get_cat_ID('equipos')); ?>" title="Equipos">equipos</a></li>
				<li><a href="<?php caturl(get_cat_ID('coaching')); ?>" title="Coaching">coaching</a></li>
				<li><a href="<?php caturl(get_cat_ID('galería')); ?>" title="Galería">galería</a></li>
				<li><a href="<?php pagurl(get_page_by_title('contacto')); ?>" title="Contacto">contacto</a></li>
			</ul>
		</nav>
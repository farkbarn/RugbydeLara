		<nav class="menumain menu navbar ">
		    <ul class="nav navbar-nav navbar-center">
		        <li><a href="<?php echo get_site_url(); ?>">inicio</a></li><!--
		     --><li><a href="<?php caturl(get_cat_ID('noticias')); ?>">noticias</a></li><!--
		     --><li><a href="<?php caturl(get_cat_ID('equipos')); ?>">equipos</a></li><!--
		     --><li><a href="<?php caturl(get_cat_ID('coaching')); ?>">coaching</a></li><!--
		     --><li><a href="<?php caturl(get_cat_ID('galería')); ?>">galería</a></li><!--
		     --><li><a href="<?php pagurl(get_page_by_title('contacto')); ?>">contacto</a></li>
		    </ul>
		</nav>
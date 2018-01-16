<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="entrada ficha-tecnica">	
	<?php
	echo '<div style="background-image:url(';
   	if ( has_post_thumbnail() ) {the_post_thumbnail_url('medium');}else{}
	echo ');background-repeat:no-repeat;background-size:cover;width:100%;height:150px;margin-bottom:15px" ></div>';
	?>    
	<h5><a class="popmake-461" href="" descarga="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
	<!--<p class="entry-meta">
		<?php the_time("F d, Y"); ?>
	</p>-->
	<p><a class="ver-mas popmake-461" href="" descarga="<?php the_title(); ?>">Solicitar descarga</a></p>
</div>
</div>
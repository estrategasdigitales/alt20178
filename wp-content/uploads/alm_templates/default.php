<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="entrada">	
	<?php
	$idioma= ICL_LANGUAGE_CODE;
	//echo '<div style="background-image:url(';
   	//if ( has_post_thumbnail() ) {the_post_thumbnail_url('medium');}else{}
	//echo ');background-repeat:no-repeat;background-size:cover;width:100%;height:150px;margin-bottom:15px" ></div>';
	?>    
	<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	<p class="entry-meta">
		<?php the_time("F d, Y"); ?>
	</p>
	<?php the_excerpt(); ?>
	<p><a class="ver-mas" href="<?php the_permalink(); ?>">
    <?php
	if ( $idioma == "en")
    {
    echo "Read more";
    }
	else
    {
    echo "Leer más";
    }
	?>
    </a></p>
</div>
</div>
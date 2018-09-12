<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ficha">
<div class="entrada ficha-tecnica">	
	<?php
$idioma= ICL_LANGUAGE_CODE;
	echo '<div style="background-image:url(';
   	if ( has_post_thumbnail() ) {the_post_thumbnail_url('medium');}else{}
	echo ');background-repeat:no-repeat;background-size:cover;width:100%;height:150px;margin-bottom:15px" ></div>';
	?>    
	<h5><?php the_title(); ?></h5>
	<!--<p class="entry-meta">
		<?php the_time("F d, Y"); ?>
	</p>-->
	<?php
	if ( $idioma == "en")
    {
    echo '<p><a class="ver-mas" href="http://altanredes.com/wp-content/uploads/2018/06/FICHA-WEB-eng.pdf" target="_blank" descarga="'; echo the_title(); echo '">';
    }
	else
    {
    echo '<p><a class="ver-mas" href="http://altanredes.com/wp-content/uploads/2018/06/FICHA-WEB_esp-ilovepdf-compressed.pdf" target="_blank" descarga="'; echo the_title(); echo '">';
    }
	?>    
    <?php
	if ( $idioma == "en")
    {
    echo "Download";
    }
	else
    {
    echo "Descargar";
    }
	?>    
    </a></p>
</div>
</div>
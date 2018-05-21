
<?php 

			// if ( has_post_thumbnail() ) { 
			// 	the_post_thumbnail('full', array('class' => 'img-responsiva'));
			// } else {
			// 	echo '<img src="https://dummyimage.com/800x350/ededed/000000.jpg&text=ALT%C3%81N+REDES" class="img-responsiva">';
			// } 
?>

<p class="date"><?php the_date(); ?></p>

<?php the_content(); ?>
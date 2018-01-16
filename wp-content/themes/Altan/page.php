<?php get_header(); ?>

<div id="content" role="main" class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php the_content(); ?>
		
	</div>	
	
<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>
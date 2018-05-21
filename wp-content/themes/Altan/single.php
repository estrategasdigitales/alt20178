<?php get_header(); ?>

<style type="text/css">
body {
	background-color: #efefef;
}
</style>

<div class="container" style="margin-top:50px;margin-bottom:50px">
	<div class="row">
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
			<?php echo do_shortcode('[addtoany]'); ?>
		</div>
		<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 contenido-single" style="background-color:#ffffff">
			<p class="regresar"><a href="<?php echo get_site_url(); ?>/category/sala-de-prensa/boletines/">REGRESAR A BOLETINES</a></p>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
			<?php endwhile; endif; ?>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
			<?php get_template_part( 'nav', 'below-single' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
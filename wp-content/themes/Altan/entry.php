<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<h1><?php the_title(); ?></h1>

<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>

</article>
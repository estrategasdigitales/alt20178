<?php
add_action( 'after_setup_theme', 'altan_setup' );
function altan_setup()
{
load_theme_textdomain( 'altan', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 
	'main-menu' => __( 'Main Menu', 'altan' ),
	'sub-menu-qs' => __( 'Sub Menu Quienes Somos', 'altan' ),
	'sub-menu-qo' => __( 'Sub Menu Que Ofrecemos', 'altan' ), 
	'footer-menu-derecha' => __( 'Footer Menu Derecha', 'altan' ),
	'footer-menu-izquierda' => __( 'Footer Menu Izquierda', 'altan' )
	)
);
}
add_action( 'wp_enqueue_scripts', 'altan_load_scripts' );
function altan_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'altan_enqueue_comment_reply_script' );
function altan_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'altan_title' );
function altan_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'altan_filter_wp_title' );
function altan_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'altan_widgets_init' );
function altan_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'altan' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
// 
function shortcode_cubo( $atts ){
  include 'cubo.php';
}
add_shortcode( 'cubo', 'shortcode_cubo' );
//
// 
function shortcode_esquema( $atts ){
  include 'esquema.php';
}
add_shortcode( 'esquema', 'shortcode_esquema' );
//
// 
function shortcode_gif( $atts ){
  include 'gif.php';
}
add_shortcode( 'gif', 'shortcode_gif' );
// 
function altan_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'altan_comments_number' );
function altan_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$get_comments = get_comments('status=approve&post_id=' . $id); 
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width user-scalable=no" />

	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="0">

	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

<?php 
if (is_category('dispositivos') || is_page('que-ofrecemos')) {
?>

<?php
}
?>

<?php 
if (is_page('quienes-somos') || is_page('nuestros-inversionistas') || is_page('como-operamos') || is_page('nuestro-equipo')) 
{
?>



<?php
}

if (is_front_page()) {
?>

<style type="text/css">
	div#header {
		background-color: rgba(0,0,0,0.1) !important;
		position: fixed !important;
		top: 0;
		left: 0;
		width: 100%;
		height: 106px;
		border-bottom: 1px solid rgba(255,255,255,0.3);
	}
	ul.nav li a {
		color: #ffffff !important;
	}
	ul.nav li a:hover {
		color: #c41f30 !important;
	}
	ul.nav li.menu-item.current-menu-item > a, ul.nav li.menu-item.current-page-ancestor > a {
    	color: #c41f30 !important;
	}
	.submenu-qs,
	.submenu-qo {
		position: fixed;
		top: 106px;
		left: 0;
		width: 100%;
		z-index: 1;
	}
	@media screen and (max-width: 991px){
		.navbar-collapse {
			background-color: rgba(0, 0, 0, 0.8);
			margin-right: -15px;
    		margin-left: -15px;
		}
	}
</style>

<?php
}
?>


	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/estilos.css" />
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!--
<div class="container-fluid acceso-clientes">

	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
				<a href="#" class="vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-square vc_btn3-style-flat vc_btn3-color-danger">Acceso a clientes</a>
			</div>
		</div>
	</div> 
 
</div>
-->

<div id="header">
	
	<div class="container" style="position:relative">

		<nav class="navbar navbar-expand-lg row">
		  <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
		  <?php
		  	if (is_front_page()) {
		  ?>
		  	<img src="<?php echo get_template_directory_uri(); ?>/images/logo-altan-bco.png">
		  <?php
		  	}else{
		  ?>
		  	<img src="<?php echo get_template_directory_uri(); ?>/images/logo-altan.png">
		  <?php
		  	}
		  ?>
		  </a>

		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
		  </button>

		  <div class="collapse navbar-collapse pos-menu-top" id="navbarSupportedContent">

		    	<?php
                wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => '', 'items_wrap' => '<ul class="nav justify-content-end">%3$s</ul>' ) );
                ?>	    
		    
		  </div>
		</nav>

		<div class="idioma">
			<a href="#" class="activo">ES</a>
			<span>|</span>
			<a href="#">ENG</a>
		</div>

	</div>

</div>

<?php
// echo '<pre>';
// print_r($post);
// echo '</pre>';
// echo $post->post_parent;
?>


	<div class="submenu-qs">
		<div class="container">
			<?php
		    	wp_nav_menu( array( 'theme_location' => 'sub-menu-qs', 'container' => '', 'items_wrap' => '<ul>%3$s</ul>' ) );
		    ?>
	    </div>
	</div>

	<div class="submenu-qo">
		<div class="container">
			<?php
		    	wp_nav_menu( array( 'theme_location' => 'sub-menu-qo', 'container' => '', 'items_wrap' => '<ul>%3$s</ul>' ) );
		    ?>
	    </div>
	</div>	


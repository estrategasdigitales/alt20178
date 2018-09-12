<?php
$idioma= ICL_LANGUAGE_CODE;
?>
<div class="clear"></div>

<footer id="footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
				<?php
                	wp_nav_menu( array( 'theme_location' => 'footer-menu-izquierda', 'container' => '', 'items_wrap' => '<ul class="menu-izquierda">%3$s</ul>' ) );
                ?>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
				<?php
                	wp_nav_menu( array( 'theme_location' => 'footer-menu-derecha', 'container' => '', 'items_wrap' => '<ul class="menu-derecha">%3$s</ul>' ) );
                ?>
			</div>
			
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				
				<a href="<?php echo get_site_url(); ?>
				<?php
				if ( $idioma == "en") {
				 	echo '/en/aviso-de-privacidad/';
				 } 				
				else{
				echo '/aviso-de-privacidad/';
				}
		 		?>
				">

					<?php
			if ( $idioma == "en") {
				 	echo "Privacy Policies";
				 } 				
			else{
				echo "Avisos de privacidad";
			}
		 ?>

				</a><br>
				© 2018 ALTÁN Redes
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<h5>
				<?php
					if ( $idioma == "en") {
				 			echo "Red Compartida a Connection for All";
				 		} 				
						else{
							echo "La Red Compartida es la Red para Todos";
						}
		 		?>
				</h5>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-right redes">
				<a href="https://mx.linkedin.com/company/alt%C3%A1n-redes" target="_blank">
					<i class="fa fa-linkedin-square" aria-hidden="true"></i>
				</a>
				<a href="https://twitter.com/ALTANMx" target="_blank">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>
			</div>
		</div>

		
			<div id="copyright">
				<?php //echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'blankslate' ), '<a href="http://tidythemes.com/">TidyThemes</a>' ); ?>
			</div>
		
	</div>
</footer>
<!--//BLOQUE COOKIES-->
<!--Style-->
<style type="text/css">
	@media screen and (max-width: 1024px) 
	{
		#barraaceptacion
		{
			min-height:125px !important;
		}
	}
	@media screen and (max-width: 775px) 
	{
		#barraaceptacion
		{
			min-height:145px !important;
		}
	}
	@media screen and (max-width: 655px) 
	{
		#barraaceptacion
		{
			min-height:170px !important;
		}
	}
	@media screen and (max-width: 540px) 
	{
		#barraaceptacion
		{
			min-height:195px !important;
		}
	}
	@media screen and (max-width: 482px) 
	{
		#barraaceptacion
		{
			min-height:230px !important;
		}
	}
	@media screen and (max-width: 420px) 
	{
		#barraaceptacion
		{
			min-height:240px !important;
		}
	}
	@media screen and (max-width: 416px) 
	{
		#barraaceptacion
		{
			min-height:260px !important;
		}
	}
	@media screen and (max-width: 380px) 
	{
		#barraaceptacion
		{
			min-height:265px !important;
		}
	}
	@media screen and (max-width: 360px) 
	{
		#barraaceptacion
		{
			min-height:275px !important;
		}
	}
#barraaceptacion {
    display:none;
    position:fixed;
    left:0px;
    right:0px;
    bottom:0px;
    padding-bottom:20px;
    width:100%;
    text-align:center;
    min-height:100px;
    background-color: #ededed;
    color: black;
    z-index:99999;
}
 
.inner {
    width:100%;
    position:absolute;
    padding-left:15px;
    padding-right: 15px;
    font-family: 'Encode Sans', sans-serif;
    font-size:14px;
    top:10%;
}
 
.inner a.ok {
    padding:4px;
    color: black !important;
    font-weight: bold;
    text-decoration:none;
    font-family: 'Encode Sans', sans-serif;
    font-size: 12px !important;
}
 
.inner a.info {
    padding-left:5px;
    text-decoration:none;
    color: black;
    font-weight: bold;
}
.btn-f-aceptar
{
	color: #fff;
	background-color: #c41f30 !important;
	padding: 5px;
}
</style>
<!--style-->
<script type="text/javascript">
	
	// $(document).ready(function(){

	// 	$('.menu-item-has-children').addClass('dropdown');
	// 	$('.menu-item-has-children ul.sub-menu').addClass('dropdown-menu');
	// 	$('.menu-item-has-children').attr({ "data-toggle":"dropdown", "aria-expanded":"false" });

	// })
	
</script>

<?php wp_footer(); ?>
</body>
</html>

<script type="text/javascript">

$(document).ready(function(){
	var ventana = $(window).outerWidth();

	$(window).resize(function(){
		var ventana = $(window).outerWidth();
	});
	
	console.log(ventana);

	if (ventana > 991) {
		$('ul.nav li:nth-child(2) a').click(function(event){
    		event.preventDefault();
		});

		$('ul.nav li:nth-child(4) a').click(function(event){
    		event.preventDefault();
		});
	};
	
	<?php 
	if (is_page('quienes-somos') || is_page('nuestros-inversionistas') || is_page('como-operamos') || is_page('nuestro-equipo')) 
	{
	?>

		

	<?php
	}else{
	?>	
		

	<?php
	}
	?>

	<?php 
	if (is_category('dispositivos') || is_page('que-ofrecemos')) 
	{

	}else{
	?>	
		

	<?php
	}
	?>
});

$(document).ready(function(){
	$('ul.nav li').mouseenter(function(){
		$('ul.nav li').removeClass('current-menu-item');
	})
	.mouseleave(function(){		
		$('ul.nav li.current_page_item').addClass('current-menu-item');
	});

	$('.submenu-qs').mouseenter(function(){
		$('ul.nav li').removeClass('current-menu-item');
		$('ul.nav li:nth-child(2)').addClass('current-menu-item');		
	})
	.mouseleave(function(){		
		$('ul.nav li.current_page_item').addClass('current-menu-item');
		if (!$('ul.nav li:nth-child(2)').hasClass('current_page_item')) {
			$('ul.nav li:nth-child(2)').removeClass('current-menu-item');	
		};
		
	});

	$('.submenu-qo').mouseenter(function(){
		$('ul.nav li').removeClass('current-menu-item');
		$('ul.nav li:nth-child(4)').addClass('current-menu-item');		
	})
	.mouseleave(function(){		
		$('ul.nav li.current_page_item').addClass('current-menu-item');
		if (!$('ul.nav li:nth-child(4)').hasClass('current_page_item')) {
			$('ul.nav li:nth-child(4)').removeClass('current-menu-item');	
		};
		
	});

	$('ul.nav li:nth-child(2)').mouseenter(function(){
			$(this).addClass('vis');
			// $('.submenu-qs').addClass('vis');
			$('.submenu-qs').slideDown(200, "swing");
		})
		.mouseleave(function(){
			$(this).removeClass('vis');
			setTimeout(function(){
				if (!$('.submenu-qs').hasClass('vis')) {
					$('.submenu-qs').slideUp(200, "swing");
				}
			},200);
			

		});



		$('.submenu-qs').mouseenter(function(){
			$(this).addClass('vis');
		})
		.mouseleave(function(){
			$(this).removeClass('vis');
			setTimeout(function(){
				if (!$('ul.nav li:nth-child(2)').hasClass('vis')) {
					$('.submenu-qs').slideUp(200, "swing");
				}
			},300);
			
		});

	$('ul.nav li:nth-child(4)').mouseenter(function(){
			$(this).addClass('vis');
			// $('.submenu-qs').addClass('vis');
			$('.submenu-qo').slideDown(200, "swing");
		})
		.mouseleave(function(){
			$(this).removeClass('vis');
			setTimeout(function(){
				if (!$('.submenu-qo').hasClass('vis')) {
					$('.submenu-qo').slideUp(200, "swing");
				}
			},300);
			

		});



		$('.submenu-qo').mouseenter(function(){
			$(this).addClass('vis');
		})
		.mouseleave(function(){
			$(this).removeClass('vis');
			setTimeout(function(){
				if (!$('ul.nav li:nth-child(4)').hasClass('vis')) {
					$('.submenu-qo').slideUp(200, "swing");
				}
			},300);
			
		});
});

</script>

<script type="text/javascript">
	$(function () {
  		$(document).scroll(function () {
    		var $nav = $("#header");
    		$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  		});
	});
</script>

 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>


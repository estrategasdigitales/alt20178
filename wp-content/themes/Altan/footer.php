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
				<a href="<?php echo get_site_url(); ?>/aviso-de-privacidad/">Aviso de privacidad</a><br>
				© 2018 ALTÁN Redes
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<h5>La Red Compartida, es la Red para Todos</h5>
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






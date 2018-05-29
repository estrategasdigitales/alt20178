<?php 
// Template name: FAQ'S
?>


<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/easy-responsive-tabs.css " />
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/easyResponsiveTabs.js"></script>
<?php
$preguntas = get_field('preguntas');
// echo '<pre>';
// print_r($preguntas);
// echo '</pre>';
?>

<style type="text/css">
	#preguntas-bloque {background-color: #efefef;
		padding-top: 50px;}
		#preguntas-bloque p {line-height: 21px;margin-bottom: 10px;}
	#preguntas-bloque a {cursor: pointer;display: block;border-left: 3px solid transparent; padding-left: 10px}
	#preguntas-bloque a.activa {
		border-left: 3px solid #000;
	}
	#respuestas-bloque {background-color: #f9f9f9;
		padding-top: 50px;
		padding-bottom: 30px;}
	#respuestas-bloque p, #respuestas-bloque li {margin-bottom: 10px;}
	h2.resp-accordion {
		border-bottom: 1px solid #c6c6c6;
		/*border-top: 1px solid #fff;*/

		-webkit-transition: all .5s ease-in-out;
		-moz-transition: all .5s ease-in-out;
		-o-transition: all .5s ease-in-out;
		transition: all .5s ease-in-out;
	}
	h2.resp-tab-active {color: #000;border-bottom: 0;}
	.resp-tab-content-active {border-bottom: 1px solid #c6c6c6;}
	#respuestas-bloque .pregunta p:first-child {
		font-family: 'Khand', sans-serif;
		color:#c41f30;
		font-weight: bold;
    	font-size: 26px;
    	margin-bottom: 15px;
	}
	#respuestas-bloque .pregunta {
		border-bottom: 1px solid #c6c6c6;
		padding-bottom: 20px;
		padding-top: 10px;	
	}
	#respuestas-bloque .pregunta:last-child {
		border-bottom: none;
	}
</style>

<div class="container-fluid">
	
	<div class="row">
		
		<div id="preguntas-bloque" class="col-lg-5 col-md-5 col-sm-5 col-xs-4">
			
			<div class="row justify-content-end"> 
			<div class="col-lg-7 franja-derecha-arriba">
				<h3>Preguntas frecuentes</h3>
				<div id="parentHorizontalTab">
		            <ul class="resp-tabs-list hor_1">
		                <li>Sobre nosotros</li>
		                <li>El sector</li>
		                <li>Regulación</li>
		            </ul>
		            <div class="resp-tabs-container hor_1">
		                <div class="preguntas-btn">
		                    <?php
							$i=0;
							foreach ($preguntas as $key => $value) {
								if ($preguntas[$i]['categoria'] == 'Sobre nosotros') {
									echo '<p><a dato="';
									echo $i;
									echo '">';
									echo $preguntas[$i]['pregunta'];
									echo '</a></p>';
								}
								$i++;
							}
							?>
		                </div>
		                <div class="preguntas-btn">
		                    <?php
							$i=0;
							foreach ($preguntas as $key => $value) {
								if ($preguntas[$i]['categoria'] == 'El sector') {
									echo '<p><a dato="';
									echo $i;
									echo '">';
									echo $preguntas[$i]['pregunta'];
									echo '</a></p>';
								}
								$i++;
							}
							?>
		                </div>
		                <div class="preguntas-btn">
		                    <?php
							$i=0;
							foreach ($preguntas as $key => $value) {
								if ($preguntas[$i]['categoria'] == 'Regulación') {
									echo '<p><a dato="';
									echo $i;
									echo '">';
									echo $preguntas[$i]['pregunta'];
									echo '</a></p>';
								}
								$i++;
							}
							?>
		                </div>
		        </div>
			
        	</div>
				
			</div>

			</div> <!-- col.. -->
		</div> <!-- preguntas bloque -->

		<div id="respuestas-bloque" class="col-lg-7 col-md-7 col-sm-7 col-xs-8">

			<div class="col-lg-9 col-md-11 col-sm-12 col-xs-12 row-preguntas" style="overflow-y:scroll;padding-bottom:500px">
			
			<?php
				$i=0;
				foreach ($preguntas as $key => $value) {
					echo '<div class="pregunta ';
					echo $i;
					echo '"><p>';
					echo $preguntas[$i]['pregunta'];
					echo '</p>';

					echo '<p>';
					echo $preguntas[$i]['respuesta'];
					echo '</p></div>';

					$i++;
				}
			?>

			</div>
		</div>

	</div>

</div>

<?php get_footer(); ?>

<script type="text/javascript">
	
    $(document).ready(function() {
    	$('.preguntas-btn p:first-child a').addClass('activa');
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'accordion', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        
    });

	$(document).ready(function() {
		ventw = $(window).width();

		if (ventw <= 640) {
			alto = 350;
		}else{

			alto = 600;
		};
		

		$('.row-preguntas').css('height', alto);

		$('.preguntas-btn a').click(function() {

			$('.preguntas-btn a').removeClass('activa');
			$(this).addClass('activa');
			
			num = $(this).attr('dato');
			num = parseInt(num);

			addAlto=0;
			for (var i = 0, limit = num; i < limit; i++) {
			    
				suma = $('.row-preguntas .'+i+'').outerHeight();
			    
			    addAlto = addAlto + suma;
			}

			$('.row-preguntas').animate({
                    scrollTop: addAlto
                }, 800);
		});
	});

</script>









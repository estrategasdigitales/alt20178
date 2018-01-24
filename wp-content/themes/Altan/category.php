<?php get_header(); ?>

<style type="text/css">
	body {background-color: #f9f9f9;}
	#cat-bloque {
		padding-top: 50px;}
		#cat-bloque p {line-height: 21px;margin-bottom: 10px;}
	
	#cat-bloque ul {
		list-style-type: none;
		padding-left: 0;
		margin-left: 0;
		font-family: 'Khand', sans-serif;
    	font-weight: bold;
    	font-size: 1.25rem;
	}
	#cat-bloque ul li {
		border-left: 3px solid transparent;
		margin-bottom: .5rem;
	}
	#cat-bloque ul li a {
	    color: #000;
    text-decoration: none;
	}
	#cat-bloque a {cursor: pointer;display: block;border-left: 3px solid transparent; padding-left: 10px}
	#cat-bloque li.current-cat a {
		border-left: 3px solid #000;
	}
	#cat-bloque a {
		color: #000;
		text-decoration: none;
	}


	#cont-bloque {
		background-color: #efefef;
		padding-top: 50px;
		padding-bottom: 30px;
		min-height: 700px;
	}
	#cont-bloque p, #cont-bloque li {margin-bottom: 10px;}
	.hover-rojo {
		-webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
	}
	.hover-rojo:hover {
		color: #c41f30 !important;
	}
	
	
</style>


<div class="container-fluid">

	<div class="container">
	
	<div class="row">
		
		<div id="cat-bloque" class="col-md-4 franja-izquierda">
			
			

				
					<?php $current_cat = get_category($cat); 
					
					if ($current_cat->slug == 'dispositivos') {
						
						echo '<h3>Dispositivos homologados a la Red Compartida</h3><hr>';
						echo '<p><b><a href="javascript:history.back()"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Regresar</a></b></p><hr>';
						$marcas = get_field_object( 'marca', $post_id = false );						 
						$marcas = $marcas['choices'];
						$gamas = get_field_object( 'gama', $post_id = false );
						$gamas = $gamas['choices'];
						
						if (isset($_GET['marca'])) {
							$cualMarca = $_GET['marca'];
						}else{
							$cualMarca = '';
						}

						if (isset($_GET['gama'])) {
							$cualGama = $_GET['gama'];
						}else{
							$cualGama = '';
						}
												
						// GAMA
						
						echo '<select class="gamas form-control">';
						echo '<option gama="todas">Todas las gamas</option>';
						foreach ($gamas as $key => $valueG) {
							echo '<option gama="'.$valueG.'" ';
							
							if ($valueG == $cualGama) {
								echo 'selected';
							}
							
							echo' >'.$valueG.'</option>';
						}
						echo '</select><br>';						

						// MARCA

						echo '<select class="marcas form-control">';
						echo '<option marca="todas">Todas las marcas</option>';
						foreach ($marcas as $key => $value) {
							echo '<option marca="'.$value.'" ';
							
							if ($value == $cualMarca) {
								echo 'selected';
							}
							
							echo' >'.$value.'</option>';
						}
						echo '</select><br>';

						echo '<a class="filtrar vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-square vc_btn3-style-flat vc_btn3-color-danger" style="display:inline-block;padding:15px 25px !important;margin-bottom:15px;">APLICAR FILTRO</a>';

						echo '<hr>';

						echo '<b><a href="#" target="_blank" style="display:table" class="hover-rojo"><i class="fa fa-external-link-square" aria-hidden="true" style="display:table-cell;padding-right:15px;vertical-align:middle"></i><span style="display:table-cell">Dispositivos compatibles con la banda 28 a nivel mundial</span></a></b>';
					?>

					
					
					<?php
					}else{
					?>

					<h3>Sala de Prensa</h3>
					
					<ul>
						<?php 
							 $args = array(
							                'hide_empty' => 0,
							                'title_li' => false,
							                'style' => 'list',
							                'child_of' => 6,
							                'order' => 'ASC',
							                'order_by' => 'date',
							                'depth' => 1,
							            	);

			            	wp_list_categories($args);
		             	?>
	             	</ul>

	             	<hr>

	             	<p>
	             		Peticiones de prensa: <br>
						prensaaltanredes@gcya.mx <br>
						Tel. +52 55 5246 0100
	             	</p>
	             	<?php } ?>
				

			
		</div> <!-- preguntas bloque -->

		<div id="cont-bloque" class="col-md-8">

			
			
			<?php
			// echo $current_cat->slug;

			if ($current_cat->slug == 'boletines') {
				$template = 'default';
				echo do_shortcode('[ajax_load_more repeater="'.$template.'" container_type="div" css_classes="row" post_type="post" posts_per_page="6" category="'.$current_cat->slug.'" scroll="false" transition="fade" transition_container="false" button_label="Ver más" button_loading_label="Cargando..."]');
			}else if($current_cat->slug == 'ficha-tecnica') {
				$template = 'template_1';
				echo do_shortcode('[ajax_load_more repeater="'.$template.'" container_type="div" css_classes="row" post_type="post" posts_per_page="6" category="'.$current_cat->slug.'" scroll="false" transition="fade" transition_container="false" button_label="Ver más" button_loading_label="Cargando..."]');
			}else if ($current_cat->slug == 'biografias-de-directivos') {
				$template = 'template_1';
				echo do_shortcode('[ajax_load_more repeater="'.$template.'" container_type="div" css_classes="row" post_type="post" posts_per_page="4" category="'.$current_cat->slug.'" scroll="false" transition="fade" transition_container="false" button_label="Ver más" button_loading_label="Cargando..."]');
			}else if ($current_cat->slug == 'fotos') {
				echo 'En construcción';
			}else if ($current_cat->slug == 'videos') {
				echo get_template_part('menu', 'videos');
				echo do_shortcode('[yottie id="1"]');	
			}else if ($current_cat->slug == 'gif') {
				echo get_template_part('menu', 'videos');
				echo do_shortcode('[gif]');
			}else if ($current_cat->slug == 'infografias') {
				echo get_template_part('menu', 'videos');
				echo do_shortcode('[yottie id="3"]');
			}else if ($current_cat->slug == 'dispositivos') {
				$template = 'template_2';
				// $Marca y $Gama
				if (isset($_GET['marca'])) {
					$Marca = $_GET['marca'];
				}else{$Marca = 'todas';}
				if (isset($_GET['gama'])) {
					$Gama = $_GET['gama'];
				}else{$Gama = 'todas';}

				// 
				
				if ($Gama == 'todas' & $Marca == 'todas') {
					echo do_shortcode('[ajax_load_more repeater="'.$template.'" container_type="div" css_classes="row" post_type="post" posts_per_page="6" category="'.$current_cat->slug.'" scroll="false" transition="fade" transition_container="false" button_label="Ver más" button_loading_label="Cargando..."]');
				}
				if ($Gama != 'todas' & $Marca == 'todas') {
					$cualGama = $Gama;					
					echo do_shortcode('[ajax_load_more repeater="'.$template.'" container_type="div" css_classes="row" post_type="post" posts_per_page="6" category="'.$current_cat->slug.'" meta_key="gama" meta_value="'.$cualGama.'" meta_compare="IN" scroll="false" transition="fade" transition_container="false" button_label="Ver más" button_loading_label="Cargando..."]');
				}
				if ($Gama == 'todas' & $Marca != 'todas') {
					$cualMarca = $Marca;
					echo do_shortcode('[ajax_load_more repeater="'.$template.'" container_type="div" css_classes="row" post_type="post" posts_per_page="6" category="'.$current_cat->slug.'" meta_key="marca" meta_value="'.$cualMarca.'" meta_compare="IN" scroll="false" transition="fade" transition_container="false" button_label="Ver más" button_loading_label="Cargando..."]');
				}
				if ($Marca != 'todas' & $Gama != 'todas') {
					$cualGama = $Gama;
					$cualMarca = $Marca;
					echo do_shortcode('[ajax_load_more repeater="'.$template.'" container_type="div" css_classes="row" post_type="post" posts_per_page="6" category="'.$current_cat->slug.'" meta_key="marca:gama" meta_value="'.$cualMarca.':'.$cualGama.'" meta_compare="IN:IN" meta_type="CHAR:CHAR" meta_relation="AND" scroll="false" transition="fade" transition_container="false" button_label="Ver más" button_loading_label="Cargando..."]');
				}

				
			}
			
			
			?>

			
		</div>

	</div>

	</div>

</div>

<script type="text/javascript">

$(document).ready(function(){
	
	$(document).on('click', '.popmake-461', function(){
    	cual = $(this).attr('descarga');
    	// $('input[name="ficha"]').attr({'disabled':'true'});
    	$('input[name="ficha"]').val(cual);
	});

	
      // SELECT MARCA ACCIÓN SOLO DE ËSTE SELECT
      // $('.marcas').on('change', function(){
      //     var disp = $('option:selected', this).attr('marca');
      //     if (disp) {
      //         window.location = '<?php echo get_site_url(); ?>/category/dispositivos/?marca='+disp;          
      //     }else{
      //     	  window.location = '<?php echo get_site_url(); ?>/category/dispositivos/';
      //     }
          
      // });

		$('a.filtrar').click(function(){
			var gama = $('option:selected', '.gamas').attr('gama');
			var marca = $('option:selected', '.marcas').attr('marca');
			
			window.location = '<?php echo get_site_url(); ?>/category/dispositivos/?gama='+gama+'&marca='+marca;
		});

		
 

});

</script>

<?php get_footer(); ?>
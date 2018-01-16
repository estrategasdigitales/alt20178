<?php 

// Template name: Consejo de Administración

get_header();
?>


<?php
$consejo = get_field('consejo_admin');

// echo '<pre style="font-size:10px">';
// print_r($consejo);
// echo '</pre>';
 ?>

<style type="text/css">
	body {
		background-color: #f9f9f9;
	}
	
	.seccion, .biografias {
		padding-top: 50px;
	}
	.biografias {min-height: 650px; padding-left: 50px; padding-right: 50px;}
	.seccion a {
		color: #000;
		text-decoration: none;
	}
	.seccion h5 {
		border-left: 3px solid transparent;
		padding-left: 10px;}
	.seccion h5.activo {
		border-left: 3px solid #000;
    	padding-left: 10px;
	}
	.fijo {position: fixed;top: 20px;}
	div.bio-consejo {
    padding-bottom: 30px;
    border-bottom: 1px solid rgba(0,0,0,.1);
    padding-top: 40px;
	}
	div.bio-consejo:last-child {
		border-bottom: none;
	}
</style>


<div class="container-fluid bg-bio">

<div class="container">

	<div class="row">

		<div class="col-md-4 franja-izquierda seccion">
			<div class="opciones">

				<h5><a href="<?php echo get_site_url(); ?>/biografias">Fichas biográficas</a></h5>
				<h5 class="activo"><a href="<?php echo get_site_url(); ?>/consejo-de-administracion">Consejo de Administración</a></h5>
				<hr>
				<p><b><a href="javascript:history.back()"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Regresar</a></b></p>

			</div>

		</div>

		<div class="col-md-8 biografias" style="background-color:#efefef; padding-bottom:50px">
			
			<h2>Consejo de Administración</h2>

			<div class="row">
			<?php 

			// $i=0;
			// foreach ($consejo as $key => $value) {
			// 	echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><div class="rombo" style="margin-top: 10px; margin-bottom: 10px;padding-top: 20px;padding-bottom: 20px;padding-left: 35px;background-color: #ffffff;">';
			// 	echo '<h5 style="margin-bottom:0">'.$consejo[$i]['nombre'].'</h5>';
			// 	echo '</div></div>';
			// 	$i++;
			// }

			foreach ($consejo as $key => $value) {
				echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bio-consejo">';
				echo '<h3>'.$value['nombre'].'</h3>';
				echo $value['biografia'];
				echo '</div>';				
			}

			?>
			</div>
			
		</div>

	</div>

</div>

</div>

 <?php get_footer(); ?>


<script type="text/javascript">
$(document).ready(function(){

	var distance = $('div.opciones').offset().top;

	$(window).scroll(function() {
	    if ( $(window).scrollTop() >= distance ) {
	        // console.log('ya');
	        $('div.opciones').addClass('fijo');
	    }else{
	    	$('div.opciones').removeClass('fijo');
	    }
	});

});

</script>







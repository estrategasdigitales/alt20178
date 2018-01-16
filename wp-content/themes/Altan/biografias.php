<?php 

// Template name: Biografías

get_header();
?>


<?php
$E1 = get_field('lado-uno', 226);
$E2 = get_field('lado-dos', 226);
$E3 = get_field('lado-tres', 226);

// echo '<pre style="font-size:10px">';
// print_r($Nequipo);
// echo '</pre>';
 ?>

<style type="text/css">
	body {
		background-color: #f9f9f9;
	}
	div[class^='side-'] {
		padding-bottom: 30px;
		border-bottom: 1px solid rgba(0,0,0,.1);
		padding-top: 40px;
	}
	.biografias div[class^='side-']:last-child {
		border-bottom: none;
	}
	.biografias div[class^='side-'] h5 {
		color: #c41f30;
	}
	.biografias {
		padding-left: 50px;
		padding-right: 50px;
	}
	.seccion, .biografias {
		padding-top: 50px;
	}
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
</style>



<div class="container-fluid bg-bio">

<div class="container">

	<div class="row">

		<div class="col-md-4 franja-izquierda seccion ">

			<div class="opciones">

				<h5 class="activo"><a href="<?php echo get_site_url(); ?>/biografias">Fichas biográficas</a></h5>
				<h5><a href="<?php echo get_site_url(); ?>/consejo-de-administracion">Consejo de Administración</a></h5>
				<hr>
				<p><b><a href="javascript:history.back()"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Regresar</a></b></p>

			</div>

		</div>

		<div class="col-md-8 biografias" style="background-color:#efefef">
			<?php
			if (isset($_GET['data'])) {
				$cv = $_GET['data'];	
			}			
			?>
			<h2>Fichas biográficas</h2>

			<?php 

			$i=0;
			foreach ($E1 as $key => $value) {
				echo '<div class="side-uno-cv'.$i.'">';
				echo '<h3>'.$E1[$i]['nombre'].'</h3>';
				echo '<h5>'.$E1[$i]['puesto'].'</h5>';
				echo '<p>'.$E1[$i]['cv'].'</p>';
				echo '</div>';
				$i++;
			}

			?>
			<?php 

			$i=0;
			foreach ($E2 as $key => $value) {
				echo '<div class="side-dos-cv'.$i.'">';
				echo '<h3>'.$E2[$i]['nombre'].'</h3>';
				echo '<h5>'.$E2[$i]['puesto'].'</h5>';
				echo '<p>'.$E2[$i]['cv'].'</p>';
				echo '</div>';
				$i++;
			}

			?>
			<?php 

			$i=0;
			foreach ($E3 as $key => $value) {
				echo '<div class="side-tres-cv'.$i.'">';
				echo '<h3>'.$E3[$i]['nombre'].'</h3>';
				echo '<h5>'.$E3[$i]['puesto'].'</h5>';
				echo '<p>'.$E3[$i]['cv'].'</p>';
				echo '</div>';
				$i++;
			}

			?>
		</div>

	</div>

</div>

</div>

<script type="text/javascript">

	var distance = $('div.opciones').offset().top;

	$(window).scroll(function() {
	    if ( $(window).scrollTop() >= distance ) {
	        // console.log('ya');
	        $('div.opciones').addClass('fijo');
	    }else{
	    	$('div.opciones').removeClass('fijo');
	    }
	});

	<?php
			if (isset($_GET['data'])) {
	?>

	$(document).ready(function(){
		var cv = ".<?php echo $cv ?>";
		var pix = $(cv).offset();

		$("html, body").animate({ scrollTop: pix.top });
	});

	<?php
			}			
	?>
</script>

 <?php get_footer(); ?>










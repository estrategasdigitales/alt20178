<?php 

// Template name: Biografías

get_header();
?>


<?php
$E1 = get_field('equipo-altan', 226);
// $E2 = get_field('lado-dos', 226);
// $E3 = get_field('lado-tres', 226);

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
				<!-- <h5><a href="<?php echo get_site_url(); ?>/consejo-de-administracion">Consejo de Administración</a></h5> -->
				<hr>
				<p><b><a href="<?php echo get_site_url(); ?>/quienes-somos/nuestro-equipo/"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Regresar</a></b></p>

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
				echo '<p class="back"><b><a href="'.get_site_url().'/quienes-somos/nuestro-equipo/"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Regresar</a></b></p>';
				echo '</div>';
				$i++;
			}

			?>
			<?php 

			// $i=0;
			// foreach ($E2 as $key => $value) {
			// 	echo '<div class="side-dos-cv'.$i.'">';
			// 	echo '<h3>'.$E2[$i]['nombre'].'</h3>';
			// 	echo '<h5>'.$E2[$i]['puesto'].'</h5>';
			// 	echo '<p>'.$E2[$i]['cv'].'</p>';
			// 	echo '<p class="back"><b><a href="'.get_site_url().'/quienes-somos/nuestro-equipo/"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Regresar</a></b></p>';
			// 	echo '</div>';
			// 	$i++;
			// }

			?>
			<?php 

			// $i=0;
			// foreach ($E3 as $key => $value) {
			// 	echo '<div class="side-tres-cv'.$i.'">';
			// 	echo '<h3>'.$E3[$i]['nombre'].'</h3>';
			// 	echo '<h5>'.$E3[$i]['puesto'].'</h5>';
			// 	echo '<p>'.$E3[$i]['cv'].'</p>';
			// 	echo '<p class="back"><b><a href="'.get_site_url().'/quienes-somos/nuestro-equipo/"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Regresar</a></b></p>';
			// 	echo '</div>';
			// 	$i++;
			// }

			?>
		</div>

	</div>

</div>

</div>

<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
	// echo 'Es mobil';
?>
<style type="text/css">
	p.back a {color:black;text-decoration: none;}
	.opciones p {display: none;}
</style>
<?php
}else{
	// echo 'Es escritorio';
?>
<style type="text/css">
p.back {display: none;}
</style>

<!-- Acción de menú fijo en Escritorio -->
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
</script>

<?php } ?>

<!-- ScrollTop cuando viene del cubo -->
<script type="text/javascript">
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










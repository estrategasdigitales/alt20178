<style type="text/css">
	.esquema {
		margin: 20px 0;
	}
	.esquema div[class^="col-"]>div {
		background-color: #eeeeee;
		padding: 15px;
	}
	.esquema .row {
		margin-bottom: 30px;
	}
	.puesto {
		background-color: #ffffff;
		color: #000000;
	    margin-top: 15px;
	    display: block;
	    width: 100%;
	    padding: 10px;
	    padding-left: 20px;
	    position: relative;
	}
	.puesto p {line-height: 17px; margin-bottom: 0px; font-weight: bold;}
	.puesto a { color: #000000; font-family: 'Khand', sans-serif;}
	.esquema div[class^="col-"]>div .puesto:first-child {
		margin-top: 0;
	}
	.esquema .de .puesto, /*Brandon*/
	.esquema .dg .puesto,
	.esquema .dc .puesto { border-top: 5px solid #c41f30; }
	.esquema span.row {
		    background-color: #8ba649;
		    color: #ffffff;
		    font-family: 'Khand', sans-serif;
		    padding: 5px 10px;
		    font-weight: bold;
		    margin-top: -15px;
		    position: relative;
		    margin-bottom: 0px;
	}
	.esquema span.row:after {
		content: " ";
		width: 34px;
		height: 34px;
		display: inline-block;
		background-color: #bad47b;
		position: absolute;
	    top: 0;
	    right: 0;
	}
	.esquema .op span.row {background-color: #245a6d;}
	.esquema .op span.row:after {background-color: #37758a;}
	.esquema .sop span.row {background-color: #9c6637;}
	.esquema .sop span.row:after {background-color: #be8553;}
	.esquema .ci span.row {background-color: #242a32;}
	.esquema .ci span.row:after {background-color: #384049;}

	.puesto:before {
		content: " ";
	  width: 7px;
	  height: 7px;
	  background-color: #c41f30;
	  display: inline-block;
	  position: absolute;
	  top: 17px;
	  left: 7px;

	  transform: translateY(-50%);
	  -webkit-transform: translateY(-50%);
	  -moz-transform: translateY(-50%);
	  -ms-transform: translateY(-50%);
	  -o-transform: translateY(-50%);

	  transform: rotate(-50deg);
	  -webkit-transform: rotate(-50deg);
	  -moz-transform: rotate(-50deg);
	  -ms-transform: rotate(-50deg);
	  -o-transform: rotate(-50deg);
	}
</style>

<?php
$equipo = get_field('equipo-altan');

// echo '<pre style="font-size:10px">';
// print_r($equipo);
// echo '</pre>';

	if (isset($_GET["lang"])){
		if ( $_GET["lang"] == "en") {
		 	$url=get_site_url().'/profiles/?lang=en&data=side-uno-cv';
		 } 				
	}else{
		$url=get_site_url().'/biografias/?data=side-uno-cv';
	}
?>

<?php
$i=0;
foreach ($equipo as $key => $value) {

	echo '<div class="puesto '.$equipo[$i]['area']['value'].'">';
	echo '<a href="';
	echo $url.$i;
	echo '">';
	echo '<h5>'.$equipo[$i]['nombre'].'</h5>';
	echo '<p class="p">'.$equipo[$i]['puesto'].'</p>';
	echo '<span class="ver" style="background-color:#000; color:#fff; padding:2px 10px; display:none">Ver biografía</span>';
	echo '</a>';
	echo '</div>';
	
	$i++;						
}
?>
<div class="container esquema">
	<div class="row justify-content-lg-center">
		<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 de"><div></div></div><!--Brandon-->
		<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 dg"><div></div></div>
		<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 dc"><div></div></div>
	</div>

	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 com"><div><span class="row">
		<?php
			if (isset($_GET["lang"])){
				if ( $_GET["lang"] == "en") {
				 	echo "Commercial";
				 } 				
			}else{
				echo "Comercial";
			}
		 ?>
		</span></div></div>
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 op"><div><span class="row">
		<?php
			if (isset($_GET["lang"])){
				if ( $_GET["lang"] == "en") {
				 	echo "Operations";
				 } 				
			}else{
				echo "Operaciones";
			}
		 ?>
		</span></div></div>
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sop"><div><span class="row">
		<?php
			if (isset($_GET["lang"])){
				if ( $_GET["lang"] == "en") {
				 	echo "Support";
				 } 				
			}else{
				echo "Soporte";
			}
		 ?>
		</span></div></div>
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ci"><div><span class="row">
		<?php
			if (isset($_GET["lang"])){
				if ( $_GET["lang"] == "en") {
				 	echo "Internal Control";
				 } 				
			}else{
				echo "Control Interno";
			}
		 ?>
		</span></div></div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('.directorestrategia').appendTo('.de div');//Brandon
		$('.directorgeneral').appendTo('.dg div');
		$('.directorcorporativo').appendTo('.dc div');
		$('.comercial').appendTo('.com div');
		$('.operaciones').appendTo('.op div');
		$('.soporte').appendTo('.sop div');
		$('.controlinterno').appendTo('.ci div');
	});
</script>
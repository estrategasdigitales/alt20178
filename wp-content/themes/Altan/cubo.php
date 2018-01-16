

<style type="text/css">
.jR3DCarouselGallery,.jR3DCarouselGalleryCustomeTemplate {
	margin: 0 auto; /* optional - if want to center align */
}

.jR3DCarouselGalleryCustomeTemplate .captions{
	position: relative;
    padding: 30px;
    padding-top: 75px;
    /*top: -100%;*/
    background-color: #c41f30;
    background-image: url(<?php echo get_template_directory_uri() ?>/images/bg-cubo-side.jpg);
	background-repeat: no-repeat;
	background-position: right bottom; 
    display: block;
    width: 100%;
    height: 100%;
    border: 2px solid #e8e8e8;	
}
.jR3DCarouselGalleryCustomeTemplate a{
	text-decoration: none;			
}
.captions {
	text-align: left;
}
.puesto {
    width: 33.33%;
    height: 120px;
    padding: 7px;
    padding-right: 25px;
    display: inline-block;
    vertical-align: top;
    margin-bottom: 40px;
}
.puesto a {
	display: block;
}
.puesto h4 {color: #fff;
	-webkit-transition: all .2s ease-out;
  -moz-transition: all .2s ease-out;
  -o-transition: all .2s ease-out;
  transition: all .2s ease-out;}
.puesto span {
	font-family: 'Khand', sans-serif;
	font-weight: 600;
	color: #000;
}

.puesto:hover a h4 {
	color: #000;
}

div.previous {display: block !important;}
div.next {display:block !important;}
.mostrar {}
.ocultar {z-index: -100 !important;}
</style>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jR3DCarousel.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	// var slideImages = [ {src: '../jRCarousel/images/01.jpg'},
	//               		{src: '../jRCarousel/images/02.jpg'},
	//               		{src: '../jRCarousel/images/03.jpg'},
	//               		{src: '../jRCarousel/images/04.jpg'},
	//               		{src: '../jRCarousel/images/05.jpg'} ]
	//var jR3DCarousel;
	
	// jR3DCarousel = $('.jR3DCarouselGallery').jR3DCarousel({
	// 	width: 470, 		/* largest allowed width */
	// 	height: 272, 		/* largest allowed height */
	// 	slides: slideImages /* array of images source */
	// });
	
	var carouselCustomeTemplateProps =  {
	 		  width: 650, 				/* largest allowed width */
			  height: 450, 				/* largest allowed height */
			  slideLayout : 'fill',     /* "contain" (fit according to aspect ratio), "fill" (stretches object to fill) and "cover" (overflows box but maintains ratio) */
			  animation: 'slide3D', 	/* slide | scroll | fade | zoomInSlide | zoomInScroll */
			  animationCurve: 'ease',
			  animationDuration: 1900,
			  animationInterval: 2000,
			  slideClass: 'jR3DCarouselCustomSlide',
			  autoplay: false,
			  controls: true,			/* control buttons */
			  navigation: ''			/* circles | squares | '' */,
			  perspective: 0,
			  rotationDirection: 'rtl',
			  onSlideShow: slideShownCallback
				  
		}
	function slideShownCallback($slide){
		// console.log("Slide shown: ", $slide);
		// console.log($slide[0]['className']);

		if ($slide[0]['className'] == 'jR3DCarouselCustomSlide dos') {
			$('div.previous').addClass('mostrar');
			$('div.next').addClass('mostrar');

			$('div.previous').removeClass('ocultar');
			$('div.next').removeClass('ocultar');
		}else if($slide[0]['className'] == 'jR3DCarouselCustomSlide tres'){
			$('div.next').addClass('ocultar');
			$('div.previous').addClass('mostrar');

			$('div.next').removeClass('mostrar');
			$('div.previous').removeClass('ocultar');
		}else if ($slide[0]['className'] == 'jR3DCarouselCustomSlide uno'){
			$('div.next').addClass('mostrar');
			$('div.previous').addClass('ocultar');

			$('div.next').removeClass('ocultar');
			$('div.previous').removeClass('mostrar');
		}
	}

	jR3DCarouselCustomeTemplate = $('.jR3DCarouselGalleryCustomeTemplate').jR3DCarousel(carouselCustomeTemplateProps);

	$('div.previous').addClass('ocultar');

	$( '.puesto' )
	  .mouseover(function() {
	    $( this ).find('span.p').hide();
	    $( this ).find('span.ver').show();
	  })
	  .mouseout(function() {
	    $( this ).find('span.ver').hide();
	    $( this ).find('span.p').show();
	  });

  })
</script>

<?php
$ladouno = get_field('lado-uno');
$ladodos = get_field('lado-dos');
$ladotres = get_field('lado-tres');

// echo '<pre style="font-size:10px">';
// print_r($ladouno);
// echo '</pre>';
 ?>

	<div class="container">		
		
		<div class="jR3DCarouselGalleryCustomeTemplate sube">

			<div class="jR3DCarouselCustomSlide uno">
				<div class="captions">
					
					<?php
					$i=0;
					foreach ($ladouno as $key => $value) {
						echo '<div class="puesto">';
						echo '<a href="';
						echo get_site_url().'/biografias?data=side-uno-cv'.$i;
						echo '">';
						echo '<h4>'.$ladouno[$i]['nombre'].'</h4>';
						echo '<span class="p">'.$ladouno[$i]['puesto'].'</span>';
						echo '<span class="ver" style="background-color:#000; color:#fff; padding:2px 10px; display:none">Ver biografía</span>';
						echo '</a>';
						echo '</div>';
						$i++;
					}
					?>

					
					
				</div>
			</div>

			<div class="jR3DCarouselCustomSlide dos">
					<div class="captions">
					
					<?php
					$i=0;
					foreach ($ladodos as $key => $value) {
						echo '<div class="puesto">';
						echo '<a href="';
						echo get_site_url().'/biografias?data=side-dos-cv'.$i;
						echo '">';
						echo '<h4>'.$ladodos[$i]['nombre'].'</h4>';
						echo '<span class="p">'.$ladodos[$i]['puesto'].'</span>';
						echo '<span class="ver" style="background-color:#000; color:#fff; padding:2px 10px; display:none">Ver biografía</span>';
						echo '</a>';
						echo '</div>';
						$i++;
					}
					?>

					</div>
			</div>
			
      		<div class="jR3DCarouselCustomSlide tres">
				<div class="captions">
					<?php
					$i=0;
					foreach ($ladotres as $key => $value) {
						echo '<div class="puesto">';
						echo '<a href="';
						echo get_site_url().'/biografias?data=side-tres-cv'.$i;
						echo '">';
						echo '<h4>'.$ladotres[$i]['nombre'].'</h4>';
						echo '<span class="p">'.$ladotres[$i]['puesto'].'</span>';
						echo '<span class="ver" style="background-color:#000; color:#fff; padding:2px 10px; display:none">Ver biografía</span>';
						echo '</a>';
						echo '</div>';
						$i++;
					}
					?>
				</div>
			</div>
			
      		<div class="jR3DCarouselCustomSlide">
				<div class="captions">
					<!-- <div class="puesto">
						<a href="#">
							<h4>Eugenio Galdón</h4>
							<span>Vicepresidente</span>
						</a>
					</div>
					<div class="puesto">
						<a href="#">
							<h4>Eugenio Galdón</h4>
							<span>Vicepresidente</span>
						</a>
					</div>
					<div class="puesto">
						<a href="#">
							<h4>Eugenio Galdón</h4>
							<span>Vicepresidente</span>
						</a>
					</div>
					<div class="puesto">
						<a href="#">
							<h4>Eugenio Galdón</h4>
							<span>Vicepresidente</span>
						</a>
					</div>
					<div class="puesto">
						<a href="#">
							<h4>Eugenio Galdón</h4>
							<span>Vicepresidente</span>
						</a>
					</div> -->
				</div>
			</div>
			
      		<div class="jR3DCarouselCustomSlide">
				<div class="captions">
					<!-- <div class="puesto">
						<a href="#">
							<h4>Eugenio Galdón</h4>
							<span>Vicepresidente</span>
						</a>
					</div>
					<div class="puesto">
						<a href="#">
							<h4>Eugenio Galdón</h4>
							<span>Vicepresidente</span>
						</a>
					</div>
					<div class="puesto">
						<a href="#">
							<h4>Eugenio Galdón</h4>
							<span>Vicepresidente</span>
						</a>
					</div>
					<div class="puesto">
						<a href="#">
							<h4>Eugenio Galdón</h4>
							<span>Vicepresidente</span>
						</a>
					</div>
					<div class="puesto">
						<a href="#">
							<h4>Eugenio Galdón</h4>
							<span>Vicepresidente</span>
						</a>
					</div> -->
				</div>
			</div>
			
			

		</div>

	</div>

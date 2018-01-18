
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];

if( preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)) ){
	// echo 'Es mobil';
?>
<style type="text/css">
.jR3DCarouselGallery,.jR3DCarouselGalleryCustomeTemplate {
	margin: 0 auto; /* optional - if want to center align */
}

.jR3DCarouselGalleryCustomeTemplate .jR3DCarouselCustomSlide:nth-child(4),
.jR3DCarouselGalleryCustomeTemplate .jR3DCarouselCustomSlide:nth-child(5) {
	display: none;
}

.jR3DCarouselGalleryCustomeTemplate .captions{
	position: relative;
    padding: 30px;
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
    width: 100%%;
    height: auto;
    padding: 7px;
    padding-right: 25px;
    display: inline-block;
    vertical-align: top;
    margin-bottom: 20px;
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



<?php
}else{
	// echo 'Es escritorio';
	if (preg_match("/(Trident\/(\d{2,}|7|8|9)(.*)rv:(\d{2,}))|(MSIE\ (\d{2,}|8|9)(.*)Tablet\ PC)|(Trident\/(\d{2,}|7|8|9))/", $_SERVER["HTTP_USER_AGENT"], $match) != 0) {
    	echo '<h1>Explorer 11 o inferior.</h1>';
	}
?>





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
	 		  width: 600, 				/* largest allowed width */
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

  	})
</script>

<?php } ?>

<script type="text/javascript">
$(document).ready(function(){
	$( '.puesto' )
	  .mouseover(function() {
	    $( this ).find('span.p').hide();
	    $( this ).find('span.ver').show();
	  })
	  .mouseout(function() {
	    $( this ).find('span.ver').hide();
	    $( this ).find('span.p').show();
	  });
});
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
					
				</div>
			</div>
			
      		<div class="jR3DCarouselCustomSlide">
				<div class="captions">
					
				</div>
			</div>
			
			

		</div>

	</div>
